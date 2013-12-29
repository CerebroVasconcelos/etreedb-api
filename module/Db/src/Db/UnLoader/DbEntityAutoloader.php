<?php

namespace Db\Loader;

use Zend\Loader\StandardAutoloader;
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;

class DbEntityAutoloader extends StandardAutoloader
{
    public function loadClass($className, $type)
    {
        if (!strstr($className,'Db\Entity')) return false;

        $entityManager = \Db\Module::getEntityManager();
        $metadataFactory = $entityManager->getMetadataFactory();

        $cmf = new DisconnectedClassMetadataFactory();
        $cmf->setEntityManager($entityManager);
        $metadata = $cmf->getMetadataFor($className);

        $generator = new EntityGenerator;
        $generator->setGenerateStubMethods(true);
        $generator->setClassToExtend('Db\Entity\AbstractEntity');

        eval('?>' . $generator->generateEntityClass($metadata));

        return true;
    }
}
