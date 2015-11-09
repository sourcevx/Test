<?php

namespace Fp\TaskBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TasksType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                


               
                ->add('taskName')
                ->add('taskDescription')
                // ->add('taskRun')
                ->add('taskRun', 'date', array(
                    'input' => 'datetime',
                    'widget' => 'single_text',
//                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                    'data' => new \DateTime('today')
                ))
//                ->add('taskEnd', 'date', array(
//                                 'input' => 'datetime',
//                                 'format' => 'dd-MM-yyyy',
//                                 'widget' => 'single_text'));
                ->add('taskEnd', 'date', array(
//                     'widget' => 'single_text',
//                    '//format' => 'yyyy-MM-dd'
                    'input' => 'datetime',
                    'widget' => 'single_text',
                    'data' => new \DateTime('now')
               ));
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fp\TaskBundle\Entity\Tasks'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fp_taskbundle_tasks';
    }
}
