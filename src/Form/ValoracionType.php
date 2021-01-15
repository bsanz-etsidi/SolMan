<?php
namespace App\Form;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;


class ValoracionType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
          ->add('satisfaccion', ChoiceType::class,  ['label'=>'Indique su grado de satisfacción:', 'choices'  => ['Muy Satisfecho' => 'Muy Satisfecho','Satisfecho' => 'Satisfecho','No satisfecho' => 'No satisfecho',],],)
          ->add('rapidez', ChoiceType::class,  ['label'=>'Valore la rapidez de los trabajos realizados:', 'choices'  => ['A tiempo' => 'A tiempo', 'No a tiempo' => 'No a tiempo',],],)
          //->add('observaciones', TextType::class, array('label' => 'Observaciones a los trabajos realizados:'))
          ->add('Aceptar', SubmitType::class, array('label' => 'ACEPTAR'))

          ;
    }
 }
