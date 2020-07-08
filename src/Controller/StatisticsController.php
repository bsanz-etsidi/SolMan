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
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Doctrine\Common\Collections\ArrayCollection;


      /**
       * @Route("/statistics")
       */

class StatisticsController extends AbstractController
{


    /**
     * @Route("/estadisticas", name="estadisticas")
     */
     public function estadisticasAction(Request $request)
     {
       return $this->render('estadisticas/estadisticaInicio.html.twig');
     }


    /**
     * @Route("/conteoSolicitudes/{estado}", name="conteoSolicitudes")
     */
     public function conteoSolicitudesAction(Request $request, $estado=null)
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
                     ORDER BY s.fecha ASC'
                )->setParameters(array('desde' => $desde, 'hasta' => $hasta));

                $solicitudes = $query->getResult();
                $total=0;
                if($estado!=null){
                  foreach ($solicitudes as $solicitud) {
                      if ($solicitud->getEstado()==$estado){
                        $total=$total+1;
                      }
                  }
                }else{
                  foreach ($solicitudes as $solicitud) {
                  $total=$total+1;
                  }
                }

                $variable = 'solicitudes';
                return $this->render('estadisticas/resultados.html.twig',array("total" => $total,"variable"=>$variable));
      }
      return $this->render('estadisticas/seleccionaFechas.html.twig',array("form" => $form->createView()));
      }

      /**
       * @Route("/conteoPrioritarias", name="conteoPrioritarias")
       */
       public function conteoPrioritariasAction(Request $request)
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
                       ORDER BY s.fecha ASC'
                  )->setParameters(array('desde' => $desde, 'hasta' => $hasta));

                  $solicitudes = $query->getResult();
                  $total=0;
                  foreach ($solicitudes as $solicitud) {
                      if($solicitud->getPrioritaria()==1){
                        $total=$total+1;
                      }
                    }
                  $variable = 'solicitudes';
                  return $this->render('estadisticas/resultados.html.twig',array("total" => $total,"variable"=>$variable));
        }
        return $this->render('estadisticas/seleccionaFechas.html.twig',array("form" => $form->createView()));
        }

        /**
         * @Route("/conteoSolicitudesTrabajador/", name="conteoSolicitudesTrabajador")
         */
         public function conteoSolicitudesTrabajadorsAction(Request $request)
         {
              $data = array('desde' => null, 'hasta' => null, 'Nombre'=> null);
              $form = $this->createFormBuilder($data)
              ->add('Nombre', EntityType::class, ['class' => Trabajador::class, 'choice_label' => 'nombre',])
              ->add('desde', DateType::class, array('label' => 'Desde','widget' => 'single_text'))
              ->add('hasta', DateType::class, array('label' => 'Hasta','widget' => 'single_text'))
              ->add('Aceptar', SubmitType::class, array('label' => 'Aceptar'))
              ->getForm();

               $form->handleRequest($request);
               if ($form->isSubmitted() && $form->isValid()) {
                   $data = $form->getData();
                   $desde = $data['desde'];
                   $hasta = $data['hasta'];
                   $trabajador = $data['Nombre'];
                   $nombre = $trabajador->getNombre();

                   $repository = $this->getDoctrine()->getRepository(Solicitud::class);
                   $trabajadorRepository = $this->getDoctrine()->getRepository(Trabajador::class);
                   $entityManager = $this->getDoctrine()->getManager();

                   $query = $entityManager->createQuery(
                        'SELECT s
                         FROM App:Solicitud s
                         WHERE (( s.fecha >= :desde ) AND (s.fecha <= :hasta ))
                         ORDER BY s.fecha ASC'
                    )->setParameters(array('desde' => $desde, 'hasta' => $hasta));

                    $solicitudes = $query->getResult();
                    $totalSolicitudes = 0;
                    $totalSolicitudesTrabajador = 0;
                      foreach ($solicitudes as $solicitud) {
                        $totalSolicitudes = $totalSolicitudes + 1;
                        $trabajadores = $solicitud->getTrabajadores();
                        if ($trabajadores->contains($trabajador)){
                        $totalSolicitudesTrabajador = $totalSolicitudesTrabajador + 1;
                        }
                    }
                    $media = $totalSolicitudesTrabajador/$totalSolicitudes;
                    return $this->render('estadisticas/resultadosSolicitudesTrabajador.html.twig',array("totalSolicitudesTrabajador" => $totalSolicitudesTrabajador, "nombre"=>$nombre, "media"=> $media));
          }
          return $this->render('estadisticas/seleccionaFechas.html.twig',array("form" => $form->createView()));
          }


        /**
         * @Route("/mediaSolicitudes", name="mediaSolicitudes")
         */
         public function mediaSolicitudesAction(Request $request)
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
                      ORDER BY s.fecha ASC'
                 )->setParameters(array('desde' => $desde, 'hasta' => $hasta));

                 $solicitudes = $query->getResult();
                 $diferencia = $desde->diff($hasta);
                 $dias = $diferencia->days;//days es la entrada del array DateInterval que contiene los días del intervalo obtenido con la función diff
                // $divisor = (int) $diferencia/30;

                 $total=0;
                 foreach ($solicitudes as $solicitud) {
                       $total=$total+1;
                   }
                 $meses = $dias/30;
                 $media = $total/$meses;
                 return $this->render('estadisticas/resultadosMedia.html.twig',array("total" => $media));
       }
       return $this->render('estadisticas/seleccionaFechas.html.twig',array("form" => $form->createView()));
       }

       /**
        * @Route("/tiempoMedioSuspension", name="tiempoMedioSuspension")
        */
        public function tiempoMedioSuspensionAction(Request $request)
        {
          //Calcula la media del tiempo de suspensión por solicitud entre las solicitudes realizadas en un periodo seleccionado
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
                     ORDER BY s.fecha ASC'
                )->setParameters(array('desde' => $desde, 'hasta' => $hasta));

                $solicitudes = $query->getResult();

                $total=0;
                $tiempo=0;
                foreach ($solicitudes as $solicitud) {
                      $total=$total+1;
                      $tiempo = $tiempo + $solicitud->getTiempoSuspension();
                    }
                $tiempoMedioSuspension = $tiempo/$total;
                return $this->render('estadisticas/resultadoTiempoMedio.html.twig',array("tiempoMedioSuspension" => $tiempoMedioSuspension));
      }
      return $this->render('estadisticas/seleccionaFechas.html.twig',array("form" => $form->createView()));
      }
     }
