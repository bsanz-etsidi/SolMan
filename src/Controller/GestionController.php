<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Solicitud;
use App\Entity\Evento;
use App\Entity\Task;
use App\Entity\Usuario;
use App\Entity\Parte;
use App\Entity\Trabajador;
use App\Entity\Instruccion;
use App\Entity\Especialidad;
use App\Form\ParteType;
use App\Form\SolicitudType;
use App\Form\UsuarioType;
use App\Form\FechaType;
use App\Form\TaskType;
use App\Form\TrabajadorType;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\Common\Collections\ArrayCollection;
use App\Service\Encrypter;


      /**
       * @Route("/gestionMantenimiento")
       */

class GestionController extends AbstractController
{
    /**
    * @Route("/base", name="base")
    */
      public function baseAction(Request $request)
      {
        return $this->render('frontal/baseGestion.html.twig');
      }

      /**
       * @Route("/nuevoTrabajador", name="nuevoTrabajador")
       */
       public function nuevoTrabajadorAction(Request $request)
       {
         $trabajador = new Trabajador();//Crea un Entity Usuario llamado trabajador
         //Construyendo el formulario
         $form = $this->createForm(TrabajadorType::class, $trabajador);
          //Recogemos la información de un submit
          $form->handleRequest($request);
          if ($form->isSubmitted() && $form->isValid()) {
            //Almacenar nuevo Trabajador
            $trabajador -> setActivo('1');
            $em = $this->getDoctrine()->getManager();
            $em->persist($trabajador);
            $em->flush();
            return $this->redirectToRoute('nuevoTrabajador');
        }
          return $this->render('gestionMantenimiento/nuevoTrabajador.html.twig',array("form" => $form->createView()));
        }



        /**
         * @Route("/bajaTrabajador/{trabajadorId}", name="bajaTrabajador")
         */
         public function bajaTrabajadorAction(Request $request, $trabajadorId)
         {
           $trabajador = new Trabajador();//Crea un Entity Usuario llamado trabajador
           $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
           $trabajador = $trabajadorRepository->find($trabajadorId);
           $trabajador -> setActivo('0');
           $em = $this->getDoctrine()->getManager();
           $em->persist($trabajador);
           $em->flush();
           return $this->redirectToRoute('home');
          }


      /**
       * @Route("/nuevoParte/{id}", name="nuevoParte")
       */
       public function nuevoParteAction(Request $request,$id, \Swift_Mailer $mailer)
       {
            $key = 'mqtrf2010';
            $encrypt = new Encrypter;
            $solicitud = new Solicitud();
            $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
            $solicitud = $solicitudRepository->find($id);
            $estancia = $solicitud->getEstancia();
            $parte = new Parte();
            $form = $this->createForm(ParteType::class, $parte, array('estancia' => $estancia));
            $form->handleRequest($request);
            $evento = new Evento();
            $cadena = (string) $id;
            $parametro = $encrypt->encrypt($cadena,$key);
            if ($form->isSubmitted() && $form->isValid()) {
            $parte = $form->getData();
          //  $trabajador = $parte->getTrabajador();
            $solicitud->setEstado('2');//estado 2: solicitud despachada
            $email = $solicitud->getEmail();
            $emailcrypt = $encrypt->encrypt($email,$key);
            $evento->setTipo('Fin');
            $evento->setFecha();
            $evento->setSolicitud($solicitud);
            $solicitud->addEvento($evento);
            $instrucciones = $solicitud->getInstrucciones();
            $em = $this->getDoctrine()->getManager();
            foreach ($instrucciones as $instruccion) {
              $instruccion->setCompletada('1');
              $instruccion->setFechaFinalizacion();
              $em->persist($instruccion);
            }
            $parte->setSolicitud($solicitud);
            $em->persist($evento);
            $em->persist($solicitud);
            $em->persist($parte);
            $em->flush();
            $parteId = $parte->getId();


            $valorada = $solicitud->getValorada();//valorado=1 significa que la solicitud ha sido valorada por el solicitante. Si valorada=0 la solicitud no ha sido valorada.
            if($valorada==0){//si no ha sido valorada
            $message = (new \Swift_Message('Grado de satisfacción con el servicio recibido'))
              ->setFrom('gestion.partes.etsidi@upm.es')
              ->setTo($email)
              //->setTo('mariabelen.sanz@upm.es')
              ->setBody(
                  $this->renderView('Emails/NotificacionParte.html.twig', ['parte'=>$parte, 'parametro'=>$parametro, 'emailcrypt'=>$emailcrypt]),'text/html')
              ;
            $mailer->send($message);
          }
            return $this->redirectToRoute('asignarEspecialidad',array('parteId' => $parteId ));

       }
        return $this->render('gestionMantenimiento/nuevoParte.html.twig',array("form" => $form->createView(),"solicitud"=>$solicitud,"parte"=>$parte));
        }

        /**
         * @Route("/editarParte/{id}", name="editarParte")
         */
         public function editarParteAction(Request $request,$id)
         {
            $partesRepository = $this->getDoctrine()->getRepository(Parte::class);
            $parte = $partesRepository->find($id);
            $solicitud = $parte->getSolicitud();
            $estancia = $solicitud->getEstancia();
            $form = $this->createForm(ParteType::class, $parte, array('estancia' => $estancia));
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()) {
              //Almacenar nuevo Parte

            $em = $this->getDoctrine()->getManager();
            $em->persist($parte);
            $em->flush();
            return $this->redirectToRoute('partes');
         }
            return $this->render('gestionMantenimiento/nuevoParte.html.twig',array("form" => $form->createView(),"parte"=>$parte));

          }



    /**
     * @Route("/asignadas", name="asignadas")
     */
    public function asignadasAction(Request $request)
    {
       $repository = $this->getDoctrine()->getRepository(Solicitud::class);
       $solicitudes = $repository->findByEstado('1');
       return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
      }

      /**
       * @Route("/pendientesDeAsignar", name="pendientesDeAsignar")
       */
      public function pendientesDeAsignarAction(Request $request)
      {
         $repository = $this->getDoctrine()->getRepository(Solicitud::class);
         $solicitudes = $repository->findByEstado('0');
         return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
        }

        /**
         * @Route("/despachadas", name="despachadas")
         */
        public function despachadasAction(Request $request)
        {
           $repository = $this->getDoctrine()->getRepository(Solicitud::class);
           $solicitudes = $repository->findByEstado('2');
           return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
          }

          /**
           * @Route("/anuladas", name="anuladas")
           */
          public function anuladasAction(Request $request)
          {
             $repository = $this->getDoctrine()->getRepository(Solicitud::class);
             $solicitudes = $repository->findByEstado('3');
             return $this->render('gestionMantenimiento/anuladas.html.twig',array("solicitudes" => $solicitudes));
            }

          /**
           * @Route("/suspendidas", name="suspendidas")
           */
          public function suspendidasAction(Request $request)
          {
             $repository = $this->getDoctrine()->getRepository(Solicitud::class);
             $solicitudes = $repository->findByEstado('4');
             return $this->render('gestionMantenimiento/suspendidas.html.twig',array("solicitudes" => $solicitudes));
            }

            /**
             * @Route("/prioritarias", name="prioritarias")
             */
            public function prioritariasAction(Request $request)
            {
               $repository = $this->getDoctrine()->getRepository(Solicitud::class);
               $solicitudes = $repository->findByPrioritaria('1');
               return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
              }

          /**
           * @Route("/cronogramaGestion/{id}", name="cronogramaGestion")
           */
          public function cronogramaGestionAction(Request $request, $id)
          {
            $repository = $this->getDoctrine()->getRepository(Solicitud::class);
            $solicitud = $repository->find($id);
            $eventos = $solicitud->getEventos();
            return $this->render('frontal/timeline.html.twig', array('eventos' => $eventos, 'id'=>$id));
          }

        /**
         * @Route("/anularSolicitud/{id}", name="anularSolicitud")
         */
          public function anularSolicitudAction(Request $request, $id, \Swift_Mailer $mailer)
            {
             $data = array('Causa' => 'causa');
             $form = $this->createFormBuilder($data)
               ->add('Causa', ChoiceType::class, ['choices'  => ['Solicitud errónea' => 'Solicitud errónea', 'Trabajos inviables' => 'Trabajos inviables',],], array('label' => 'Causa de la anulación'))
               ->add('Anular', SubmitType::class, array('label' => 'Anular solicitud'))
               ->getForm();
             $form->handleRequest($request);
             $data = $form->getData();

             $solicitud = new Solicitud();
             $evento = new Evento();
             $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
             $solicitud = $solicitudRepository->find($id);
             $trabajadores = $solicitud->getTrabajadores();
             $email = $solicitud->getEmail();

             if ($form->isSubmitted() && $form->isValid()) {
             $causaAnulacion = $data['Causa'];
             $solicitud->setEstado('3');//estado 3: solicitud anulada
             $evento->setCausa($causaAnulacion);
             $evento->setTipo('Anulación');
             $evento->setFecha();
             $evento->setSolicitud($solicitud);
             $solicitud->addEvento($evento);
             $instrucciones = $solicitud->getInstrucciones();
             $em = $this->getDoctrine()->getManager();

             foreach ($instrucciones as $instruccion) {
               $solicitud->removeInstruccion($instruccion);
               $em->remove($instruccion);
             }

             foreach ($trabajadores as $trabajador) {
               $solicitud->removeTrabajador($trabajador);

             }

             $em = $this->getDoctrine()->getManager();
             $em->persist($evento);
             $em->persist($solicitud);

             $em->flush();

             $message = (new \Swift_Message('Anulación de su solicitud al servicio de Mantenimiento ETSIDI'))
               ->setFrom('gestion.partes.etsidi@upm.es')
               ->setTo($email)
               //->setTo('mariabelen.sanz@upm.es')
               ->setBody(
                    $this->renderView('Emails/NotificacionAnulacionSolicitud.html.twig', ['solicitud'=>$solicitud, 'evento'=>$evento,]),'text/html');
             $mailer->send($message);

             return $this->redirectToRoute('solicitudes');
            }
            return $this->render('gestionMantenimiento/anularSolicitud.html.twig',array("form" => $form->createView(),"solicitud" => $solicitud));

          }

          /**
           * @Route("/suspenderSolicitud/{id}", name="suspenderSolicitud")
           */
            public function suspenderSolicitudAction(Request $request, $id, \Swift_Mailer $mailer)
              {
               $data = array('Causa' => 'causa');
               $form = $this->createFormBuilder($data)

                 ->add('Causa', ChoiceType::class, ['choices'  => ['Falta de personal' => 'Falta de personal','Falta de material' => 'Falta de material', 'Estancia ocupada' => 'Estancia ocupada',],], array('label' => 'Causa de la suspensión'))
                 ->add('Suspender', SubmitType::class, array('label' => 'Suspender solicitud'))
                 ->getForm();
               $form->handleRequest($request);
               $data = $form->getData();

               $solicitud = new Solicitud();
               $evento = new Evento();
               $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
               $solicitud = $solicitudRepository->find($id);
               $email = $solicitud->getEmail();

               if ($form->isSubmitted() && $form->isValid()) {
               $causaSuspension = $data['Causa'];
               $solicitud->setEstado('4');//estado 4: solicitud suspendida
               $evento->setCausa($causaSuspension);
               $evento->setTipo('Suspensión');
               $evento->setFecha();
               $evento->setCausa($causaSuspension);
               $evento->setSolicitud($solicitud);
               $solicitud->addEvento($evento);
               $solicitud->setFechaSuspension();

               $em = $this->getDoctrine()->getManager();
               $em->persist($evento);
               $em->persist($solicitud);
               $em->flush();

               $message = (new \Swift_Message('Suspensión de su solicitud al servicio de Mantenimiento ETSIDI'))
                 ->setFrom('gestion.partes.etsidi@upm.es')
                 ->setTo($email)
                 //->setTo('mariabelen.sanz@upm.es')
                 ->setBody(
                      $this->renderView('Emails/NotificacionSuspensionSolicitud.html.twig', ['solicitud'=>$solicitud, 'evento'=>$evento]),'text/html');
               $mailer->send($message);

               return $this->redirectToRoute('solicitudes');
              }
              return $this->render('gestionMantenimiento/suspenderSolicitud.html.twig',array("form" => $form->createView(),"solicitud" => $solicitud));

            }

            /**
             * @Route("/reactivarSolicitudSuspendida/{id}", name="reactivarSolicitudSuspendida")
             */
              public function reactivarSolicitudSuspendidaAction(Request $request, $id, \Swift_Mailer $mailer)
                {
                 $solicitud = new Solicitud();
                 $evento = new Evento();
                 $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
                 $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
                 $solicitud = $solicitudRepository->find($id);
                 $trabajadores = $solicitud->getTrabajadores();
                 $solicitudes = $solicitudRepository->findAll();
                 $email = $solicitud->getEmail();

                 if ($trabajadores->isEmpty()){
                     $solicitud->setEstado('0');//estado 0: solicitud sin asignar
                   }else{
                     $solicitud->setEstado('1');//estado 1: solicitud asignada
                   }
                  $evento->setTipo('Reactivación');
                  $evento->setFecha();
                  $evento->setSolicitud($solicitud);
                  $solicitud->addEvento($evento);

                  $em = $this->getDoctrine()->getManager();
                  $em->persist($evento);
                  $em->flush();

                  $desde = $solicitud->getFechaSuspension();
                  $hasta = $evento->getFecha();
                  $diferencia = $desde->diff($hasta);
                  $dias = $diferencia->days;
                  $diasAnterioresSuspendida = $solicitud->getTiempoSuspension();
                  $suma = $diasAnterioresSuspendida + $dias;
                  $solicitud->setTiempoSuspension($suma);
                  $em->persist($solicitud);
                  $em->flush();

                  $message = (new \Swift_Message('Reactivación de su solicitud al servicio de Mantenimiento ETSIDI'))
                    ->setFrom('gestion.partes.etsidi@upm.es')
                    ->setTo($email)
                    //->setTo('mariabelen.sanz@upm.es')
                    ->setBody(
                        $this->renderView('Emails/NotificacionReactivacionSolicitud.html.twig', ['solicitud'=>$solicitud]),'text/html');
                        $mailer->send($message);

                  return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
                }

            /**
             * @Route("/reactivarSolicitudAnulada/{id}", name="reactivarSolicitudAnulada")
             */
                 public function reactivarSolicitudAnuladaAction(Request $request, $id, \Swift_Mailer $mailer)
                {
                 $solicitud = new Solicitud();
                 $evento = new Evento();
                 $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
                 $solicitud = $solicitudRepository->find($id);
                 $email = $solicitud->getEmail();
                 $solicitud->setEstado('0');//estado 0: solicitud sin asignar
                 $solicitudes = $solicitudRepository->findAll();
                 $evento->setTipo('Reactivación');
                 $evento->setFecha();
                 $evento->setSolicitud($solicitud);
                 $solicitud->addEvento($evento);

                 $em = $this->getDoctrine()->getManager();
                 $em->persist($evento);
                 $em->persist($solicitud);
                 $em->flush();

                 $message = (new \Swift_Message('Reactivación de su solicitud al servicio de Mantenimiento ETSIDI'))
                   ->setFrom('gestion.partes.etsidi@upm.es')
                   ->setTo($email)
                   //->setTo('mariabelen.sanz@upm.es')
                   ->setBody(
                        $this->renderView('Emails/NotificacionReactivacionAnulada.html.twig', ['solicitud'=>$solicitud]),'text/html');
                        $mailer->send($message);

                return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
                }



          /**
           * @Route("/asignarSolicitud/{id}", name="asignarSolicitud")
           */
          public function asignarSolicitudAction(Request $request, $id, \Swift_Mailer $mailer)
          {
            $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
            $trabajadoresActivos = $trabajadorRepository->findByActivo('1');
            $form = $this->createFormBuilder($trabajadoresActivos)
              ->add('Nombre', EntityType::class, ['class' => Trabajador::class, 'choice_label' => 'nombre', 'choices' =>$trabajadoresActivos],)
              ->add('descripcionInstruccion', TextType::class, array ('label' => "Instrucciones de trabajo"))
              ->add('Asignar', SubmitType::class, array('label' => 'Asignar'))
              ->getForm();

            $form->handleRequest($request);
            $data = $form->getData();
            $solicitud = new Solicitud();
            $trabajador = new Trabajador();
            $instruccion = new Instruccion();
            $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
            $instruccionRepository = $this->getDoctrine()->getRepository(Instruccion::class);

            $solicitud = $solicitudRepository->find($id);

            if ($form->isSubmitted() && $form->isValid()) {
            $trabajador = $data['Nombre'];
            $idTrabajador = $trabajador->getId();
            $emailTrabajador = $trabajador->getEmail();
            $trabajadores = $solicitud->getTrabajadores();
            $ordenes = $data['descripcionInstruccion'];
            if (!$trabajadores->contains($trabajador)){
                $solicitud->addTrabajador($trabajador);
                $solicitud->setEstado('1');//estado 1: solicitud asignada
                $em = $this->getDoctrine()->getManager();
                $em->persist($solicitud);
                $em->flush();

                $trabajador->addSolicitud($solicitud);
                $em = $this->getDoctrine()->getManager();
                $em->persist($trabajador);
                $em->flush();

                $instruccion->setDescripcionInstruccion($ordenes);
                $instruccion->setSolicitud($solicitud);
                $instruccion->setTrabajador($trabajador);
                $em = $this->getDoctrine()->getManager();
                $em->persist($instruccion);
                $solicitud->addInstruccion($instruccion);
                $trabajador->addInstruccion($instruccion);
                $em->persist($solicitud);
                $em->persist($trabajador);
                $em->flush();

              $message = (new \Swift_Message('Le ha sido asignada una solicitud para el servicio de Mantenimiento ETSIDI'))
                ->setFrom('gestion.partes.etsidi@upm.es')
                ->setTo($emailTrabajador)
                //->setTo('mariabelen.sanz@upm.es')
                ->setBody(
                     $this->renderView('Emails/NotificacionTrabajador.html.twig', ['solicitud'=>$solicitud,'ordenes'=>$ordenes]),'text/html');
              $mailer->send($message);

                  return $this->redirectToRoute('solicitudes');
                }
            }
              return $this->render('gestionMantenimiento/asignarSolicitud.html.twig',array("form" => $form->createView(),"solicitud" => $solicitud));

          }


          /**
           * @Route("/editarInstruccion/{idInstruccion}/{idSolicitud}/{nombreTrabajador}", name="editarInstruccion")
           */
               public function editarInstruccionAction(Request $request, $idInstruccion, $idSolicitud, $nombreTrabajador, \Swift_Mailer $mailer)
              {

                $instruccionRepository = $this->getDoctrine()->getRepository(Instruccion::class);
                $instruccion = $instruccionRepository->find($idInstruccion);
                $descripcionInstruccion = $instruccion->getDescripcionInstruccion();
                $data = array('Nombre' => 'Nombre');
                $form = $this->createFormBuilder($data)
                  ->add('descripcionInstruccion', TextType::class, array ('label' => "Instrucciones de trabajo", 'data' => $descripcionInstruccion))
                  ->add('Aceptar', SubmitType::class, array('label' => 'Aceptar'))
                  ->getForm();

               $form->handleRequest($request);
               $data = $form->getData();
               $solicitud = new Solicitud();
               $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
               $solicitud = $solicitudRepository->find($idSolicitud);

               if ($form->isSubmitted() && $form->isValid()) {
                $trabajador = new Trabajador();
                $ordenes = $data['descripcionInstruccion'];

                $instruccion->setDescripcionInstruccion($ordenes);

                $em = $this->getDoctrine()->getManager();
                $em->persist($instruccion);
                $em->flush();

                $message = (new \Swift_Message('Cambio de órdenes desde el servicio de Mantenimiento ETSIDI'))
                  ->setFrom('gestion.partes.etsidi@upm.es')
                  ->setTo($email)
                  //->setTo('mariabelen.sanz@upm.es')
                  ->setBody(
                       $this->renderView('Emails/NotificacionTrabajador.html.twig', ['solicitud'=>$solicitud,'ordenes'=>$ordenes]),'text/html');
                       $mailer->send($message);
                 return $this->redirectToRoute('solicitudes');
              }

              return $this->render('gestionMantenimiento/editarInstruccion.html.twig',array("form" => $form->createView(),"solicitud" => $solicitud, 'nombreTrabajador'=>$nombreTrabajador, 'idInstruccion'=>$idInstruccion));
            }



    /**
     * @Route("/solicitudes", name="solicitudes")
     */
    public function solicitudesAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Solicitud::class);
        //$solicitudes = $repository->findAll();
        $solicitudes = $repository->findBy(array(),array('id' => 'DESC'));
        return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
        }


        /**
         * @Route("/solicitudesTrabajadorGestion", name="solicitudesTrabajadorGestion")
         */
        public function solicitudesTrabajadorGestionAction(Request $request)
        {
          $data = array('Trabajador' => 'Trabajador');
          $form = $this->createFormBuilder($data)
            ->add('Trabajador', EntityType::class, ['class' => Trabajador::class, 'choice_label' => 'nombre',])
            ->add('Seleccionar', SubmitType::class, array('label' => 'Seleccionar'))
            ->getForm();
          $form->handleRequest($request);
          $data = $form->getData();
          $trabajador = new Trabajador();

          $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
          $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);

          if ($form->isSubmitted() && $form->isValid()) {
          $trabajador = $data['Trabajador'];
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
          return $this->render('gestionMantenimiento/seleccionaTrabajador.html.twig',array("form" => $form->createView()));
      }


    /**
     * @Route("/partes", name="partes")
     */
    public function partesAction(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Parte::class);
        //$partes = $repository->findAll();
        $partes = $repository->findBy(array(),array('id' => 'DESC'));
        return $this->render('gestionMantenimiento/partes.html.twig',array("partes" => $partes));
        }


    /**
     * @Route("/seleccionaPartes", name="seleccionaPartes")
     */
    public function seleccionaPartesAction(Request $request)
    {
      $data = array('desde' => null, 'hasta' => null);
      $form = $this->createFormBuilder($data)
      ->add('desde', DateType::class, array('label' => 'Desde','widget' => 'single_text'))
      ->add('hasta', DateType::class, array('label' => 'Hasta','widget' => 'single_text'))
      ->add('Aceptar', SubmitType::class, array('label' => 'Aceptar'))
      ->getForm();

       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
           $data = $form->getData();
           $desde = $data['desde'];
           $hasta = $data['hasta'];

           $repository = $this->getDoctrine()->getRepository(Parte::class);
           $entityManager = $this->getDoctrine()->getManager();

           $query = $entityManager->createQuery(
                'SELECT p
                FROM App:Parte p
                WHERE (( p.fechainicio >= :desde ) AND (p.fechainicio <= :hasta ))
                ORDER BY p.fechainicio DESC'
            )->setParameters(array('desde' => $desde, 'hasta' => $hasta));


      $partes = $query->getResult();
      return $this->render('gestionMantenimiento/partes.html.twig',array("partes" => $partes));
      }
      return $this->render('gestionMantenimiento/seleccionaPartes.html.twig',array("form" => $form->createView()));
      }

      /**
       * @Route("/seleccionaSolicitudes", name="seleccionaSolicitudes")
       */
      public function seleccionaSolicitudesAction(Request $request)
      {
        $data = array('desde' => null, 'hasta' => null);
        $form = $this->createFormBuilder($data)
        ->add('desde', DateType::class, array('label' => 'Desde','widget' => 'single_text'))
        ->add('hasta', DateType::class, array('label' => 'Hasta','widget' => 'single_text'))
        ->add('Aceptar', SubmitType::class, array('label' => 'Aceptar'))
        ->getForm();

         $form->handleRequest($request);
         if ($form->isSubmitted() && $form->isValid()) {
             $data = $form->getData();
             $desde = $data['desde'];
             $hasta = $data['hasta'];

             $repository = $this->getDoctrine()->getRepository(Solicitud::class);
             $entityManager = $this->getDoctrine()->getManager();

             $query = $entityManager->createQuery(
                  'SELECT s
                  FROM App:Solicitud s
                  WHERE (( s.fecha >= :desde ) AND (s.fecha <= :hasta ))
                  ORDER BY s.fecha DESC'
              )->setParameters(array('desde' => $desde, 'hasta' => $hasta));


        $solicitudes = $query->getResult();
        return $this->render('gestionMantenimiento/pendientes.html.twig',array("solicitudes" => $solicitudes));
        }
        return $this->render('gestionMantenimiento/seleccionaSolicitudes.html.twig',array("form" => $form->createView()));
        }




        /**
         * @Route("/parte/{id}", name="parte")
         */
        public function parteAction(Request $request,$id=null)
        {
          if($id!=null){
            //Capturar el repositorio de la Tabla contra la DB
            $parteRepository = $this->getDoctrine()->getRepository(Parte::class);
            $partes = $parteRepository->findAll();
            $parte = $parteRepository->find($id);
            return $this->render('gestionMantenimiento/parte.html.twig',array("parte"=>$parte));
          }else{
            return $this->redirectToRoute('seleccionaPartes');
          }
          }


          /**
         * @Route("/solicitud/{id}", name="solicitud")
         */
        public function solicitudAction(Request $request,$id=null)
        {
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
         * @Route("/priorizarSolicitud/{id}", name="priorizarSolicitud")
         */
        public function priorizarSolicitudAction(Request $request,$id)
        {
            $evento = new Evento();
            $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
            $solicitudes = $solicitudRepository->findAll();
            $solicitud = $solicitudRepository->find($id);
            $solicitud->setPrioritaria('1');// solicitud prioritaria
            $evento->setTipo('Priorización');
            $evento->setFecha();
            $evento->setSolicitud($solicitud);
            $solicitud->addEvento($evento);
            $em = $this->getDoctrine()->getManager();
            $em->persist($evento);
            $em->persist($solicitud);
            $em->flush();
            return $this->redirectToRoute('solicitudes');
          }


          /**
         * @Route("/desPriorizarSolicitud/{id}", name="desPriorizarSolicitud")
         */
        public function desPriorizarSolicitudAction(Request $request,$id)
        {
            $evento = new Evento();
            $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
            $solicitudes = $solicitudRepository->findAll();
            $solicitud = $solicitudRepository->find($id);
            $solicitud->setPrioritaria('0');// solicitud prioritaria
            $evento->setTipo('DesPriorización');
            $evento->setFecha();
            $evento->setSolicitud($solicitud);
            $solicitud->addEvento($evento);
            $em = $this->getDoctrine()->getManager();
            $em->persist($evento);
            $em->persist($solicitud);
            $em->flush();
            return $this->redirectToRoute('solicitudes');
          }



        /**
         * @Route("/borrarAsignacion/{id}/{idTrabajador}/{idInstruccion}", name="borrarAsignacion")
         */
       public function borrarAsignacionAction(Request $request,$id,$idTrabajador, $idInstruccion, \Swift_Mailer $mailer)
       {
         $solicitud = new Solicitud();
         $trabajador = new Trabajador();
         $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
         $solicitudRepository = $this->getDoctrine()->getRepository(Solicitud::class);
         $instruccionRepository = $this->getDoctrine()->getRepository(Instruccion::class);
         $solicitud = $solicitudRepository->find($id);
         $trabajador = $trabajadorRepository->find($idTrabajador);
         $instruccion = $instruccionRepository->find($idInstruccion);
         $emailTrabajador = $trabajador->getEmail();
         $nombreTrabajador = $trabajador->getNombre();
         $trabajadores = $solicitud->getTrabajadores();
         if ($trabajadores->contains($trabajador)){
           $solicitud->removeTrabajador($trabajador);
           $solicitud->removeInstruccion($instruccion);
           $message = (new \Swift_Message('Revocación de asignación de Solicitud - Mantenimiento ETSIDI'))
             ->setFrom('gestion.partes.etsidi@upm.es')
             ->setTo($emailTrabajador)
             //->setTo('mariabelen.sanz@upm.es')
             ->setBody(
                  $this->renderView('Emails/NotificacionRevocacion.html.twig', ['solicitud'=>$solicitud]),'text/html');
           $mailer->send($message);
           $em = $this->getDoctrine()->getManager();
           $em->persist($solicitud);
           $em->remove($instruccion);
           $em->flush();
           }

         $trabajadores = $solicitud->getTrabajadores();
         if ($trabajadores->isEmpty()){
           $solicitud->setEstado('0');//estado 2: solicitud sin asignar
         }

          $em = $this->getDoctrine()->getManager();
          $em->persist($solicitud);
          $em->flush();

          return $this->redirectToRoute('solicitudes');
      }


      /**
     * @Route("/borrarParte/{id}", name="borrarParte")
     */
    public function borrarParteAction(Request $request,$id=null)
    {
      if($id)
      {
        //Búsqueda del parte
        $parterepository = $this->getDoctrine()->getRepository(Parte::class);
        $solicitudrepository = $this->getDoctrine()->getRepository(Solicitud::class);

        $parte = $parterepository->find($id);
        $solicitud = $parte->getSolicitud();
        $solicitud->setEstado('1');
        $eventos = $solicitud->getEventos();
        $especialidades = $parte->getEspecialidades();
        //Borrado
        $em = $this->getDoctrine()->getManager();
        foreach ($eventos as $evento) {
          if ($evento->getTipo() == 'Fin'){
          $solicitud->removeEvento($evento);
          $em->remove($evento);
          }
        }
        foreach ($especialidades as $especialidad) {
          $parte ->removeEspecialidad($especialidad);
          $em->remove($especialidad);
        }

        $em->remove($parte);
        $em->persist($solicitud);
        $em->flush();
      }
      return $this->redirectToRoute('partes');
    }

    /**
     * @Route("/asignarEspecialidad/{parteId}", name="asignarEspecialidad")
     */
    public function asignarEspecialidadAction(Request $request, $parteId)
    {
      $data = array('especialidad' => 'especialidad');
      $form = $this->createFormBuilder($data)
        ->add('especialidad', ChoiceType::class, ['choices'  => ['Fontanería' => 'Fontanería', 'Electricidad' => 'Electricidad', 'Medios Audiovisuales' => 'Ausiovisuales', 'Pintura' => 'Pintura', 'Albañilería' => 'Albañilería','Carpintería'=>'Carpintería', 'Cerrajería'=>'Cerrajería','Trabajos varios'=>'Trabajos varios'],], array('label' => 'Especialidad'))
        ->add('Asignar', SubmitType::class, array('label' => 'Asignar'))
        ->getForm();

      $form->handleRequest($request);
      $data = $form->getData();
      $parte = new Parte();
      $parteRepository = $this->getDoctrine()->getRepository(Parte::class);
      $parte = $parteRepository->find($parteId);
      $tipo = $data['especialidad'];
      $especialidades = $parte->getEspecialidades();
      $contiene = 0;

      if ($form->isSubmitted() && $form->isValid()) {
      foreach ($especialidades as $especialidad) {
        if ($especialidad->getTipo() == $tipo){
          $contiene = 1;
          return $this->redirectToRoute('partes');
        }
      }

      if ($contiene == 0){
        $especialidad = new Especialidad();
        $especialidad->setTipo($tipo);
        $especialidad->setParte($parte);
        $parte->addEspecialidad($especialidad);
        $em = $this->getDoctrine()->getManager();
        $em->persist($especialidad);
        $em->persist($parte);
        $em->flush();

        return $this->render('gestionMantenimiento/asignarEspecialidad.html.twig',array("form" => $form->createView(),"parte" => $parte));
      }

    }
        return $this->render('gestionMantenimiento/asignarEspecialidad.html.twig',array("form" => $form->createView(),"parte" => $parte));
  }


  /**
 * @Route("/borrarEspecialidad/{especialidadId}/{parteId}", name="borrarEspecialidad")
 */
public function borrarEspecialidadAction(Request $request,$especialidadId,$parteId)
{
    //Búsqueda del parte
    $repository = $this->getDoctrine()->getRepository(Parte::class);
    $parte = $repository->find($parteId);
    $especialidades = $parte->getEspecialidades();

    //Borrado
    $em = $this->getDoctrine()->getManager();
    foreach ($especialidades as $especialidad) {
      if ($especialidad->getId() == $especialidadId){
      $parte->removeEspecialidad($especialidad);
      $em->remove($especialidad);
      $em->persist($parte);
      $em->flush();
      }
    }

  return $this->redirectToRoute('partes');
}


/**
* @Route("/completarInstruccion/{instruccionId}", name="completarInstruccion")
*/
public function completarInstruccionAction(Request $request,$instruccionId)
{
  //Búsqueda del parte
  $repository = $this->getDoctrine()->getRepository(Instruccion::class);
  $instruccion = $repository->find($instruccionId);
  $instruccion -> setCompletada('1');//Completada = 1 significa instrucciones relizadas por el trabajador
  $instruccion -> setFechaFinalizacion();
  $em = $this->getDoctrine()->getManager();
  $em->persist($instruccion);
  $em->flush();

  return $this->redirectToRoute('solicitudes');
}

/**
* @Route("/instruccionesCompletadas", name="instruccionesCompletadas")
*/
public function instruccionesCompletadasAction(Request $request)
{

    $repository = $this->getDoctrine()->getRepository(Instruccion::class);
    $instrucciones = $repository->findByCompletada('1');
    return $this->render('gestionMantenimiento/instruccionesCompletadas.html.twig',array("instrucciones" => $instrucciones));
  }

  /**
  * @Route("/desactivarTrabajador", name="desactivarTrabajador")
  */
  public function desactivarTrabajadorAction(Request $request)
  {
    $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
    $trabajadoresActivos = $trabajadorRepository->findByActivo('1');
    $form = $this->createFormBuilder($trabajadoresActivos)
      ->add('Nombre', EntityType::class, ['class' => Trabajador::class, 'choice_label' => 'nombre', 'choices' =>$trabajadoresActivos],)
      ->add('Desactivar', SubmitType::class, array('label' => 'Desactivar'))
      ->getForm();

    $form->handleRequest($request);
    $data = $form->getData();
    $trabajador = new Trabajador();

    if ($form->isSubmitted() && $form->isValid()) {
    $trabajador = $data['Nombre'];
    $trabajadorId = $trabajador->getId();
    $trabajador = $trabajadorRepository->find($trabajadorId);
    $trabajador -> setActivo('0');

    $em = $this->getDoctrine()->getManager();
    $em->persist($trabajador);
    $em->flush();

    return $this->redirectToRoute('solicitudes');
  }
  return $this->render('gestionMantenimiento/desactivarTrabajador.html.twig',array("form" => $form->createView(),"trabajador" => $trabajador));

}

/**
* @Route("/reactivarTrabajador", name="reactivarTrabajador")
*/
public function reactivarTrabajadorAction(Request $request)
{
  $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
  $trabajadoresinactivos = $trabajadorRepository->findByActivo('0');
  $form = $this->createFormBuilder($trabajadoresinactivos)
    ->add('Nombre', EntityType::class, ['class' => Trabajador::class, 'choice_label' => 'nombre', 'choices' =>$trabajadoresinactivos],)
    ->add('Reactivar', SubmitType::class, array('label' => 'Reactivar'))
    ->getForm();

  $form->handleRequest($request);
  $data = $form->getData();
  $trabajador = new Trabajador();

  if ($form->isSubmitted() && $form->isValid()) {
  $trabajador = $data['Nombre'];
  $trabajadorId = $trabajador->getId();
  $trabajador = $trabajadorRepository->find($trabajadorId);
  $trabajador -> setActivo('1');

  $em = $this->getDoctrine()->getManager();
  $em->persist($trabajador);
  $em->flush();

  return $this->redirectToRoute('solicitudes');
}
return $this->render('gestionMantenimiento/reactivarTrabajador.html.twig',array("form" => $form->createView(),"trabajador" => $trabajador));

}


  }
