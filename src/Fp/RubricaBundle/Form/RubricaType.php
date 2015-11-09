<?php

namespace Fp\RubricaBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fp\RubricaBundle\Form\EventListener\AddComuneFieldSubscriber;
use Fp\RubricaBundle\Form\EventListener\AddProvinciaFieldSubscriber;
use Fp\RubricaBundle\Form\EventListener\AddRegioneFieldSubscriber;


class RubricaType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {

 
        $builder
                //->add('type', 'choice', array('choices' => Rubrica::getTypes(), 'expanded' => true))
                ->add('nome')
                ->add('cognome')
                ->add('indirizzo')
                ->add('telefono')
                ->add('cellulare')
                ->add('email')
                ->add('ufficio', 'entity', array('class' => 'RubricaBundle:Ufficio',
                    'choice_label' => 'ufficio',
                    'empty_value' => '-----------',
                    'empty_data' => null,
                    'group_by' => 'typeufficio'))
                ->add('datanascita', 'date', array('widget' => 'single_text'))
                //->add('comune', 'entity', array('class' => 'RubricaBundle:comune', 'choice_label' => 'nome'))
        ;
//        $propertyPathToComune = 'comune';
//
//        $builder
//            ->addEventSubscriber(new AddComuneFieldSubscriber($propertyPathToComune))
//            ->addEventSubscriber(new AddProvinciaFieldSubscriber($propertyPathToComune))
//            ->addEventSubscriber(new AddRegioneFieldSubscriber($propertyPathToComune))
//        ;
         
                      
     
          
        //   ->add('area', new AreaType())
        //->add('eta', 'number', array('number' => Rubrica::getEta(),'expanded' => true))  
        //Aggiunge una collezione di ogetti 
        //->add('area', 'collection', array('type' => new AreaType(),'allow_add' => true))
        //, 'allow_add' => true
        // $builder->add('area', 'collection', array('area' => new AreaType()));
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Fp\RubricaBundle\Entity\Rubrica',
            'csrf_protection' => false,
            'cascade_validation' => false // have also tried this with true
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'fp_rubricabundle_rubrica';
    }

}


