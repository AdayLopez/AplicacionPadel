<?php

namespace PadelSchedule\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompeticionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text')
            ->add('fechaInicio', 'date', array('label' => 'Fecha de inicio de la competición',
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',                                    
            ))
            ->add('localizacion', 'text')
            ->add('maxInscripciones', 'integer', array('label' => 'Número máximo de participantes'))
            ->add('descripcion')
            ->add('puntosPorGanar')                   
            ->add('puntosPorPerder')   
            ->add('normas')
            ->add('fotoCompeticionFichero')
            ->add('submit', 'submit', array('label' => 'Confirmar'))
        ;
    }
    public function getName()
    {
        return 'competicion';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults(array(
        'data_class' => 'PadelSchedule\MainBundle\Entity\Competicion',
      ));
    }
}