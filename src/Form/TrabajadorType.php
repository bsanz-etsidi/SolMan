<?php
namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class TrabajadorType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
          ->add('nombre', TextType::class, array ('label' => "Nombre del trabajador"))
          ->add('email', TextType::class, array ('label' => "email upm del trabajador"))
          ->add('especialidad', ChoiceType::class, ['choices'  => ['Fontanería' => 'Fontanería', 'Electricidad' => 'Electricidad', 'Medios Audiovisuales' => 'Ausiovisuales', 'Pintura' => 'Pintura', 'General' => 'General',],], array('label' => 'Especialidades'))
          ->add('Registrar', SubmitType::class, array('label' => 'Registrar'))

          ;
  }
}
