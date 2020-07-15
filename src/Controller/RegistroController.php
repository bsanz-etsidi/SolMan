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
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\Common\Collections\ArrayCollection;
use App\Service\Encrypter;


/**
 * @Route("/registroUsuarios")
 */

class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */
     public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
     {
        $usuario = new Usuario();//Crea un Entity Usuario llamado usuario
        //Construyendo el formulario
        $form = $this->createForm(UsuarioType::class, $usuario);

        //Recogemos la información de un submit
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
          // Rellenar el Entity Usuario
          $password = $passwordEncoder->encodePassword($usuario, $usuario->getPlainPassword());
          $usuario->setPassword($password);
          // 3b) $username=$email
          $usuario->setUsername($usuario->getEmail());
          $roles = $usuario->getRoles();
          //3c) $roles
          $usuario->setRoles(array($roles));

          //Almacenar nuevo Usuario
          $em = $this->getDoctrine()->getManager();
          $em->persist($usuario);
          $em->flush();
          return $this->redirectToRoute('registro');
      }
        return $this->render('gestionMantenimiento/registroUsuario.html.twig',array("form" => $form->createView()));
      }
  }
