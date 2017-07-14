<?php

namespace PadelSchedule\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProfileType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombre')
                ->add('apellidos')
                ->add('telefono')
                ->add('fechaNacimiento', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',                    
                ))
                ->add('fotoPerfilFichero');                        
    }

    public function getParent()
    {
        return 'fos_user_profile';
    }

    public function getName()
    {
        return 'main_user_profile';
    }
}
