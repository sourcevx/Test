<?php

namespace Fp\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;

class FpUserBundle extends Bundle
{
//    public function getParent()
//    {
//        return 'FOSUserBundle';
//    }
     public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $mappings = array(
            realpath(__DIR__ . '/Resources/config/doctrine/model') => 'FOS\UserBundle\Model',
            realpath(__DIR__ . '/Resources/config/doctrine/model') => 'FOS\UserBundle\Entity',
        );

        $container->addCompilerPass(
            DoctrineOrmMappingsPass::createXmlMappingDriver(
                $mappings, array('fos_user.model_manager_name'), false
            )
        );
    }
    
}
