<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\Encrypter;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Solicitud;
use App\Entity\Evento;
use App\Entity\Usuario;
use App\Entity\Valoracion;

use App\Entity\Parte;
use App\Entity\Trabajador;
use App\Form\SolicitudType;
use App\Form\UsuarioType;
use App\Form\ValoracionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
     public function homeAction(Request $request, AuthenticationUtils $authenticationUtils, EventDispatcherInterface $dispatcher)
   {
     $key = 'mqtrf2010';
     $encrypt = new Encrypter();
     $mensaje = null;
     $data = array('Usuario' => null, 'Password' => null);
     $form = $this->createFormBuilder($data)
        ->add('Usuario', TextType::class)
        ->add('Password', PasswordType::class)
        ->add('Aceptar', SubmitType::class, array('label' => 'Aceptar'))
        ->getForm();

      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $data = $form->getData();
          $username = (string) $data['Usuario'];
          $password = (string) $data['Password'];
          $ldap_dn = "uid=".$username.",ou=Users,dc=upm,dc=es";
          $ldap_password = $password;
          $ldap_con = ldap_connect("ldap.etsidi.upm.es");
          ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
          $email = $username;
          $email = $encrypt->encrypt($email,$key);

          if(ldap_bind($ldap_con,$ldap_dn,$ldap_password)) {
             $usuario = new Usuario();
             $usuario = $this->getDoctrine()->getManager()->getRepository(Usuario::class)->findOneBy(array('email' => $username));
             if($usuario){
             $token = new UsernamePasswordToken($usuario, null, 'main', $usuario->getRoles());
             $this->get('security.token_storage')->setToken($token);
             $this->get('session')->set('_security_main', serialize($token));
             $event = new InteractiveLoginEvent($request, $token);
             $dispatcher->dispatch("security.interactive_login", $event);

               return $this->render('frontal/baseGestion.html.twig', array('email' => $username));
               }else{
                 return $this->redirectToRoute('nuevaSolicitud', array('email' => $email));
                }
           }else{
             return $this->render('frontal/invalidCredentials.html.twig');
      }
    }

       return $this->render('frontal/index.html.twig', array("form" => $form->createView()));
}


      /**
       * @Route("/cronograma/{idcrypt}", name="cronograma", requirements={"idcrypt"=".+"})
       */
      public function cronogramaAction(Request $request, $idcrypt)
      {
        $key = 'mqtrf2010';
        $encrypt = new Encrypter();
        $id = $encrypt->decrypt($idcrypt,$key);
        $repository = $this->getDoctrine()->getRepository(Solicitud::class);
        $solicitud = $repository->find($id);
        $eventos = $solicitud->getEventos();
        return $this->render('frontal/timeline.html.twig', array('eventos' => $eventos, 'id'=>$id));
      }



  /**
   * @Route("/nuevaSolicitud/{email}", name="nuevaSolicitud", requirements={"email"=".+"})
   */
   public function nuevaSolicitudAction(Request $request, $email, \Swift_Mailer $mailer)
   {
     $key = 'mqtrf2010';
     $encrypt = new Encrypter();
     $solicitud = new Solicitud();//Crea un Entity  llamado solicitud
     $evento = new Evento();
     $emaildecrypt = $encrypt->decrypt($email,$key);
     $cadena = '@upm.es';
     $esUpm = strpos($emaildecrypt, $cadena);

     $form = $this->createForm(SolicitudType::class, $solicitud);

      //Recogemos la información de un submit
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $solicitud->setEstado('0');
          if($this->getUser()){
            $solicitud->setEmail($email);
          }else{
             if ($esUpm){
            $solicitud->setEmail($emaildecrypt);
          }else{
            return $this->redirectToRoute('home');
           }
         }
          $solicitud->setPrioritaria('0');
          $solicitud->setFecha();

          $evento->setTipo('Inicio');
          $evento->setFecha();
          $evento->setSolicitud($solicitud);
          $solicitud->addEvento($evento);

          $em = $this->getDoctrine()->getManager();
          $em->persist($evento);
          $em->persist($solicitud);
          $em->flush();
          $id = $solicitud->getId();
          $idcrypt = $encrypt->encrypt($id,$key);
          $message = (new \Swift_Message('Nueva Solicitud para el servicio de Mantenimiento ETSIDI'))
            ->setFrom('gestion.partes.etsidi@upm.es')
            ->setTo('fernando.elena@upm.es')
            //->setTo('mariabelen.sanz@upm.es')
            ->setBody(
                 $this->renderView('Emails/NotificacionSolicitud.html.twig', ['solicitud'=>$solicitud]),'text/html');
          $mailer->send($message);
          if($this->getUser()){
          $message = (new \Swift_Message('Mantenimiento ETSIDI-Registro de su solicitud'))
            ->setFrom('gestion.partes.etsidi@upm.es')
            ->setTo($email)
            //->setTo('mariabelen.sanz@upm.es')
            ->setBody(
                 $this->renderView('Emails/NotificacionRegistroSolicitud.html.twig', ['solicitud'=>$solicitud, 'idcrypt'=>$idcrypt]),'text/html');
          $mailer->send($message);
        }else{
          $message = (new \Swift_Message('Mantenimiento ETSIDI-Registro de su solicitud'))
            ->setFrom('gestion.partes.etsidi@upm.es')
            ->setTo($emaildecrypt)
            //->setTo('mariabelen.sanz@upm.es')
            ->setBody(
                 $this->renderView('Emails/NotificacionRegistroSolicitud.html.twig', ['solicitud'=>$solicitud, 'idcrypt'=>$idcrypt]),'text/html');
          $mailer->send($message);
        }

          return $this->redirectToRoute('mensaje',array('emailcrypt' => $email ));
          }
      return $this->render('frontal/nuevaSolicitud.html.twig',array("form" => $form->createView(),'email' => $email));

   }



  /**
   * @Route("/mensajeNoPuede", name="mensajeNoPuede")
   */
   public function mensajeNoPuedeAction(Request $request)
   {
     return $this->render('frontal/mensajeNoPuede.html.twig');
     }


   /**
    * @Route("/mensaje/{emailcrypt}", name="mensaje", requirements={"emailcrypt"=".+"})
    */
    public function mensajeAction(Request $request, $emailcrypt)
    {
      return $this->render('frontal/mensaje.html.twig',array('email' => $emailcrypt));
      }


      /**
       * @Route("/solicitudesTrabajador", name="solicitudesTrabajador")
       */
      public function solicitudesTrabajadorAction(Request $request)
      {

        $user = $this ->getUser();
        $trabajadorEmail = $user -> getUsername();
        $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
        $trabajador = $trabajadorRepository->findOneBy(array('email' => $trabajadorEmail));
        $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
        $nombreTrabajador = $trabajador->getNombre();
        $solicitudes = $trabajador->getSolicitudes();
        $collection = new ArrayCollection();
        foreach ($solicitudes as $solicitud) {
          if ($solicitud->getEstado() == 1){//cargamos en $collection sólo las solicitudes asignadas: estado=1
            $collection->add($solicitud);
          }
        }
        return $this->render('gestionMantenimiento/solicitudesTrabajador.html.twig',array("solicitudes" => $collection, "nombreTrabajador" => $nombreTrabajador));
      }


          /**
           * @Route("/solicitudTrabajador/{id}", name="solicitudTrabajador")
           */
              public function solicitudTrabajadorAction(Request $request,$id=null)
              {
                $this->denyAccessUnlessGranted('ROLE_USER');
                if($id!=null){
                  //Capturar el repositorio de la Tabla contra la DB
                  $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
                  $solicitudes = $solicitudRepository->findAll();
                  $solicitud = $solicitudRepository->find($id);
                  return $this->render('gestionMantenimiento/solicitud.html.twig',array("solicitud"=>$solicitud));
                }else{
                  return $this->redirectToRoute('solicitudes');
                }
              }


  /**
  * @Route("/login", name="login")
  */
      public function loginAction(Request $request, AuthenticationUtils $authenticationUtils)
     {
           // get the login error if there is one
       $error = $authenticationUtils->getLastAuthenticationError();
           // last username entered by the user
       $lastUsername = $authenticationUtils->getLastUsername();
       return $this->render('frontal/login.html.twig', array(
              'last_username' => $lastUsername,
              'error'         => $error,
             ));
         }

   /**
    * @Route("/rellenarSatisfaccion/{id}/{email}", name="rellenarSatisfaccion", requirements={"id"=".+"})
    */
    public function rellenarSatisfaccionAction(Request $request, AuthenticationUtils $authenticationUtils, $id, $email)
    {
       $key = 'mqtrf2010';
       $encrypt = new Encrypter();
       $cadena = (string) $id;
       $parametro = $encrypt->decrypt($cadena,$key);
       //$cadena2 = (string) $emailcrypt;
       $username = $email;
       $valoracion = new Valoracion();
       $evento = new Evento();
       $solicitud = new Solicitud();

       $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
       $solicitud = $solicitudRepository->find($parametro);
       $email = $solicitud->getEmail();
       $estado = $solicitud->getEstado();
       $valorada = $solicitud->getValorada(); //valorado=1 significa que la solicitud ha sido valorada por el solicitante. Si valorada=0 la solicitud no ha sido valorada.
       $form = $this->createForm(ValoracionType::class, $valoracion);
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()){
          $valoracion = $form->getData();
          $valoracion->setFecha();
          $valoracion->setSolicitud($solicitud);
          $causaEvento = $valoracion->getSatisfaccion();//Recogemos el valor de satisfaccion para rellenar con él el campo causa en la valoracion del cronograma
          $solicitud->setValorada('1');
          $email = $solicitud->getEmail();
          $evento->setTipo('Valoración');
          $evento->setFecha();
          $evento->setSolicitud($solicitud);
          $evento->setCausa($causaEvento);
          $solicitud->addEvento($evento);
          if($username == $email && $valorada == 0 && $estado == 2 ){
             $em = $this->getDoctrine()->getManager();
             $em->persist($evento);
             $em->persist($solicitud);
             $em->persist($valoracion);
             $em->flush();
             return $this->render('frontal/mensajeValoracion.html.twig');

           }elseif ($username != $email) {
             return $this->render('frontal/mensajeNoCorresponde.html.twig');
           }elseif ($valorada != 0) {
             return $this->render('frontal/mensajeNoPuede.html.twig');
           }elseif ($estado != 2) {
             return $this->render('frontal/mensajeNoPreparada.html.twig');
           }
        }
        return $this->render('frontal/rellenarSatisfaccion.html.twig',array("form" => $form->createView()));
     }



}
