<?php
// src/AppBundle/Form/EventListener/AddNameFieldSubscriber.php
namespace AppBundle\Form\EventListener;

use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AddNameFieldSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        // Indica al distributore che si vuole ascoltare l'evento form.pre_set_data
        // e che verrà invocato il metodo preSetData.
        return array(FormEvents::PRE_SET_DATA => 'preSetData');
    }

    public function preSetData(FormEvent $event)
    {
        $product = $event->getData();
              
        $form = $event->getForm();

        if (!$product || null === $product->getId()) {
            $form->add('name', 'text')
                ->add('description','text')
                ;
        }
    }
}