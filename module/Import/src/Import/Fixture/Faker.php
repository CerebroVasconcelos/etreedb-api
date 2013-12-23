<?php

namespace Import\Fixture;

use DateTime;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr;
use Faker\Generator;

/**
 * Generate random data for all model classes
 */
class Faker implements FixtureInterface
{
    /**
     * @var EntityManager
     */
    protected $manager;

    /**
     * @var Generator
     */
    protected $faker;

    protected $counters = [];

    public function load(ObjectManager $manager)
    {
        $this->manager = $manager;
        $this->faker = $generator = \Faker\Factory::create();
        $populator = new \Faker\ORM\Doctrine\Populator($generator, $manager);

        $populator->addEntity('EtreeDb\Db\Entity\UserRole', 5);
        $populator->addEntity('EtreeDb\Db\Entity\User', 100);
        $populator->addEntity('EtreeDb\Db\Entity\UserMeta', 100);

        $populator->execute();
    }
}

