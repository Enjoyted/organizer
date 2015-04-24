<?php

namespace Organizer\OrganizerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UsersType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('usrUsername')
            ->add('usrPassword')
            ->add('usrEmail')
            ->add('usrRegistered')
            ->add('usrToken')
            ->add('usrValidate')
            ->add('usrRank')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Organizer\OrganizerBundle\Entity\Users'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'organizer_organizerbundle_users';
    }
}
