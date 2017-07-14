<?php

namespace PadelSchedule\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InscripcionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombrePareja', 'text')
            ->add('horarioLunes', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioLunesCampo'
                )
            ))
            ->add('horarioMartes', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioMartesCampo'
                )
            ))
            ->add('horarioMiercoles', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioMiercolesCampo'
                )
            ))
            ->add('horarioJueves', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioJuevesCampo'
                )
            ))
            ->add('horarioViernes', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioViernesCampo'
                )
            ))
            ->add('horarioSabado', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioSabadoCampo'
                )
            ))
            ->add('horarioDomingo', 'hidden', array(
                'attr' => array(
                    'class'=>'horarioDomingoCampo'
                )
            ))
            ->add('submit', 'submit', array('label' => 'Confirmar inscripción'))
        ;
    }
    public function getName()
    {
    return 'inscripcion';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults(array(
        'data_class' => 'PadelSchedule\MainBundle\Entity\Inscripcion',
      ));
    }
}