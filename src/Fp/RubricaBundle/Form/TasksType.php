<?php
namespace Fp\RubricaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fp\RubricaBundle\Form\DataTransformer\IssueToNumberTransformer;


class TasksType extends AbstractType
{
    
   /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('area', 'textarea')
          //  ->add('issue', 'issue_selector')
        ;
    }
    
    
     /**
     * @param OptionsResolverInterface $resolver
     */
   public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => 'Fp\RubricaBundle\Entity\Area',
            ))
            ->setRequired(array('em'))
            ->setAllowedTypes('em', 'Doctrine\Common\Persistence\ObjectManager');

        // ...
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'fp_rubricabundle_tasks';
    }
}

