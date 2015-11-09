<?php

// src/RubricaBundle/Form/EventListener/AddRegioneFieldSubscriber.php
namespace Fp\RubricaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;


class AddRegioneFieldSubscriber implements EventSubscriberInterface {
    
    
    private $propertyPathToComune;

    public function __construct($propertyPathToComune)
    {
        $this->propertyPathToComune = $propertyPathToComune;
    }

    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_SUBMIT   => 'preSubmit'
        );
    }

    private function addRegioneForm($form, $regione = null)
    {
        $formOptions = array(
            'class'         => 'RubricaBundle:Regione',
            'mapped'        => false,
            'label'         => 'Regione',
            'empty_value'   => 'Regione',
            'attr'          => array(
                'class' => 'regione_select',
            ),
        );

        if ($regione) {
            $formOptions['data'] = $regione;
        }

        $form->add('regione', 'entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::getPropertyAccessor();

        $comune    = $accessor->getValue($data, $this->propertyPathToComune);
        $regione = ($comune) ? $comune->getProvince()->getRegione() : null;

        $this->addRegioneForm($form, $regione);
    }

    public function preSubmit(FormEvent $event)
    {
        $form = $event->getForm();

        $this->addCountryForm($form);
    }
    
    
}