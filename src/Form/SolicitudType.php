<?php
namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\Event\PostSubmitEvent;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;



class SolicitudType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
          ->add('solicitante', TextType::class, array ('label' => "Nombre del solicitante"))
          ->add('destino', ChoiceType::class, array ('label' => "Unidad de Destino",'choices'  => ['Dirección'=>'Dirección', 'Subdirecciones'=>'Subdirecciones','Secretaría de Alumnos'=>'Secretaría de Alumnos','Gestión Económica'=>'Gestión Económica','Administrador y Personal'=>'Administrador y Personal','Biblioteca'=>'Biblioteca','Servicios Informáticos'=>'Servicios Informáticos','Mantenimiento'=>'Mantenimiento','Conserjería'=>'Conserjería','Oficina de Empresa'=>'Oficina de Empresa','D180 general'=>'D180 general','D180 (Electricidad)'=>'D180 (Electricidad)','D180 (Electrónica)'=>'D180 (Electrónica)','D180 (Física)'=>'D180 (Física)','D190 general'=>'D190 general','D190 (Mecánica)'=>'D190 (Mecánica)','D190 (Química)'=>'D190 (Química)','D190 (Diseño)'=>'D190 (Diseño)','Departamento de Matemáticas'=>'Departamento de Matemáticas','Departamento de Lingüística'=>'Departamento de Lingüística','Departamento de Organización'=>'Departamento de Organización','LIMIT'=>'LIMIT','Otro'=>'Otro'],))
          ->add('extension', TextType::class, array ('label' => "Extensión Telefónica"))
          //->add('email', EmailType::class)
          //->add('fecha', DateType::class, array ('label' => "fecha",'widget' => 'single_text'))
          ->add('descripcionIncidencia', TextType::class, array ('label' => "Incidencia detectada"))
          ->add('estancia', TextType::class, array ('label' => "localización de la incidencia"))
          ->add('Registrar', SubmitType::class, array('label' => 'Registrar'))

          ;


  }

}
