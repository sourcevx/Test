<?php

namespace Fp\RubricaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SearchType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('textsearch', 'search', array('label'=> 'Ricerca'))
             
            ;
    }
    
    
     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array());
            //'data_class' => 'Fp\RubricaBundle\Entity\Rubrica'
      
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'fp_rubricabundle_search';
    }
}
