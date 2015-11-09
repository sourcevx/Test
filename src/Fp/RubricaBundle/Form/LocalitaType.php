<?php

namespace Fp\RubricaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fp\RubricaBundle\Form\EventListener\AddRegioneFieldSubscriber;

class LocalitaType extends AbstractType
{
    
    
   
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $propertyPathToComune = 'comune';
        
         $builder->addEventSubscriber(new AddComuneFieldSubscriber($propertyPathToComune));
         $builder->addEventSubscriber(new AddProvinciaeFieldSubscriber($propertyPathToComune));
         $builder->addEventSubscriber(new AddRegioneFieldSubscriber($propertyPathToComune));


    }
    
    
     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
         $resolver->setDefaults(array(
            //'data_class' => 'Fp\RubricaBundle\Entity\Regione',
            'csrf_protection' => false,
            'cascade_validation' => false // have also tried this with true
        ));
      
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'fp_rubricabundle_localita';
    }
    
    
    
    

    
    
    
}