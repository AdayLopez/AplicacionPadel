<?php

namespace PadelSchedule\MainBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;



class MensajeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('destinatarioMensaje', 'entity', array(
                'class' => 'PadelSchedule\UserBundle\Entity\User',
                'choice_label' => 'username',
                'expanded' => false,
                'multiple' => true,
                'mapped' => false,
            ))
            ->add('cabecera')
            ->add('cuerpo')
            ->add('submit', 'submit', array('label' => 'Enviar mensaje'))
        ;
    }
    public function getName()
    {
        return 'mensaje';
    }
    
    public function configureOptions(OptionsResolver $resolver)
    {
      $resolver->setDefaults(array(
        'data_class' => 'PadelSchedule\MainBundle\Entity\Mensaje',
      ));
    }
}