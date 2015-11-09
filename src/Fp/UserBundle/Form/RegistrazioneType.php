<?php
namespace Fp\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;


class RegistrazioneType extends AbstractType

{
    public function buildForm (FormBuilderInterface $builder,array $options)
     {
//        $builder 
//         ->add('roles', 'choice', array(
//    'choices'   => array('ROLE_USER' => 'ROLE_USER', 'ROLE_ADMIN' => 'ROLE_ADMIN'),
//    'mapped'  => false,
//));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'app_user_registration';
    }
            
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

