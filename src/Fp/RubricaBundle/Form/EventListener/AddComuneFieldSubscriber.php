<?php

namespace Fp\RubricaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;

class AddComuneFieldSubscriber implements EventSubscriberInterface
{
    private $propertyPathToComune;

    public function __construct($propertyPathToComune)
    {
        $this->propertyPathToComune = $propertyPathToComune;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::POST_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT    => 'preSubmit'
        );
    }

    private function addCityForm($form, $province_id)
    {
        $formOptions = array(
            'class'         => 'RubricaBundle:Comune',
            'empty_value'   => 'Comune',
            'label'         => 'Comune',
            'attr'          => array(
                'class' => 'comune_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($id_provincia) {
                $qb = $repository->createQueryBuilder('comune')
                    ->innerJoin('comune.province', 'provincia')
                    ->where('provincia.id = :provincia')
                    ->setParameter('provincia', $id_provincia)
                ;

                return $qb;
            }
        );

        $form->add($this->propertyPathToComune, 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor    = PropertyAccess::createPropertyAccessor();

        $comune        = $accessor->getValue($data, $this->propertyPathToComune);
        $province_id = ($comune) ? $comune->getProvincia()->getId() : null;

       
        $this->addCityForm($form, $province_id);
        
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $province_id = array_key_exists('provincia', $data) ? $data['provincia'] : null;

        $this->addCityForm($form, $province_id);
    }
}
            
    

    
