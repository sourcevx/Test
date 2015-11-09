<?php

namespace Fp\RubricaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fp\RubricaBundle\Entity\Products;

class UploadType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('imageName')
            ->add('ImageFile', 'file')
       ->add('save', 'submit');
       
      
        
    }
    
     /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
//        $resolver->setDefaults(array());
//            //'data_class' => 'Fp\RubricaBundle\Entity\Rubrica'
         $resolver->setDefaults(array(
            'data_class' => 'Fp\RubricaBundle\Entity\Products',
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'fp_rubricabundle_upload';
    }
}
