<?php
namespace Fp\RubricaBundle\EventListener;

use Fp\RubricaBundle\Entity\Rubrica;
use Doctrine\ORM\Event\LifecycleEventArgs;



class WriteTable
{
    
 public function PreUpdate(LifecycleEventArgs $args)
    {
    
           if ($args->getEntity() instanceof Rubrica) {
            if ($args->hasChangedField('cellulare') ) {
                $args->setNewValue('cellulare', '3');
            }
           }
              

    }
}