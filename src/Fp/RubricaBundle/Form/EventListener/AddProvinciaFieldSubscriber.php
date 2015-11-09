<?php

namespace Fp\RubricaBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;
use Doctrine\ORM\EntityRepository;
use Fp\RubricaBundle\Entity\Comune;

class AddProvinciaFieldSubscriber implements EventSubscriberInterface
{
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

    private function addProvinceForm($form, $id_regione, $provincia = null)
    {
        $formOptions = array(
            'class'         => 'RubricaBundle:Province',
            'empty_value'   => 'Provincia',
            'label'         => 'Provincia',
            'mapped'        => false,
            'attr'          => array(
                'class' => 'provincia_selector',
            ),
            'query_builder' => function (EntityRepository $repository) use ($id_regione) {
                $qb = $repository->createQueryBuilder('provincia')
                    ->innerJoin('provincia.regione', 'regione')
                    ->where('regione.id = :regione')
                    ->setParameter('regione', $id_regione)
                ;

                return $qb;
            }
        );

        if ($provincia) {
            $formOptions['data'] = $provincia;
        }

        $form->add('provincia','entity', $formOptions);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        if (null === $data) {
            return;
        }

        $accessor = PropertyAccess::getPropertyAccessor();

        $comune        = $accessor->getValue($data, $this->propertyPathToComune);
        $provincia    = ($comune) ? $comune->getProvince() : null;
        $id_regione  = ($provincia) ? $provincia->getCountry()->getId() : null;

        $this->addProvinceForm($form, $id_regione, $provincia);
    }

    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $id_regione = array_key_exists('regione', $data) ? $data['regione'] : null;

        $this->addProvinceForm($form, $id_regione);
    }
}
