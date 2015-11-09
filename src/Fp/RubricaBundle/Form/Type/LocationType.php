<?php

namespace Fp\RubricaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Fp\RubricaBundle\Form\EventListener\AddCityFieldSubscriber;
use Fp\RubricaBundle\Form\EventListener\AddProvinceFieldSubscriber;
use Fp\RubricaBundle\Form\EventListener\AddCountryFieldSubscriber;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $propertyPathToCity = 'city';

        $builder
            ->addEventSubscriber(new AddCityFieldSubscriber($propertyPathToCity))
            ->addEventSubscriber(new AddProvinceFieldSubscriber($propertyPathToCity))
            ->addEventSubscriber(new AddCountryFieldSubscriber($propertyPathToCity))
        ;

        $builder
            ->add('address', 'text', array(
                'label' => 'Calle'
            ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Fp\RubricaBundle\Model\Location'
        ));
    }

    public function getName()
    {
        return 'location';
    }
}
