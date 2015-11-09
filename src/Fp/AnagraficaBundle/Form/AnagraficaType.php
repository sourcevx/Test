<?php

namespace Fp\AnagraficaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnagraficaType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nome')
            ->add('cognome')
            ->add('indirizzo')
            ->add('comune')
            ->add('telefono')
            ->add('cellulare')
            ->add('sesso','choice',
                 array(
            'empty_data'  => null,
            'empty_value' => " ",
            'choices'     => array('m' => 'Maschio', 'f' => 'Femmina'),
            
        ))
            ->add('codicefiscale')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fp\AnagraficaBundle\Entity\Anagrafica'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'fp_anagraficabundle_anagrafica';
    }
}
