<?php

namespace Acme\IndexBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Doctrine\ORM\EntityRepository;

class RegioneType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('name', 'entity',
        array('class' => 'AcmeIndexBundle:Regione',
              'query_builder' => function(EntityRepository $er) {
                return $er->createQueryBuilder('u')
                ->orderBy('u.name', 'ASC');
             }
        
));
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\IndexBundle\Entity\Regione',
        );
    }

    public function getName()
    {
        return 'regione';
    }
}