<?php

namespace Organizer\OrganizerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TachesTimelineType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tacStartAtTat')
            ->add('tacEndAtTat')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Organizer\OrganizerBundle\Entity\TachesTimeline'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'organizer_organizerbundle_tachestimeline';
    }
}
