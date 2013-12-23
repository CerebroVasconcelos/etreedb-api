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
        $populator->addEntity('EtreeDb\Db\Entity\UserToUserRole', 50);

        $populator->addEntity('EtreeDb\Db\Entity\Performer', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformerAlias', 100);

        $populator->addEntity('EtreeDb\Db\Entity\BandGroup', 100);
        $populator->addEntity('EtreeDb\Db\Entity\Band', 100);
        $populator->addEntity('EtreeDb\Db\Entity\UserToBandGroup', 100);
        $populator->addEntity('EtreeDb\Db\Entity\BandAlias', 100);
        $populator->addEntity('EtreeDb\Db\Entity\Lineup', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformerLineup', 100);

        $populator->addEntity('EtreeDb\Db\Entity\VenueGroup', 100);
        $populator->addEntity('EtreeDb\Db\Entity\Venue', 100);
        $populator->addEntity('EtreeDb\Db\Entity\VenueToVenueGroup', 100);

        $populator->addEntity('EtreeDb\Db\Entity\Song', 100);

        $populator->addEntity('EtreeDb\Db\Entity\Producer', 100);
        $populator->addEntity('EtreeDb\Db\Entity\Event', 100);

        $populator->addEntity('EtreeDb\Db\Entity\Performance', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformanceSet', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformanceSetSong', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformerPerformance', 100);


        $populator->addEntity('EtreeDb\Db\Entity\Source', 100);
        $populator->addEntity('EtreeDb\Db\Entity\Checksum', 100);

        $populator->addEntity('EtreeDb\Db\Entity\BandComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformerComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\SongComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\SourceComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformanceComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\VenueComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\EventComment', 100);
        $populator->addEntity('EtreeDb\Db\Entity\LineupComment', 100);

        $populator->addEntity('EtreeDb\Db\Entity\BandLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformerLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\SongLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\SourceLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\PerformanceLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\VenueLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\EventLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\ProducerLink', 100);
        $populator->addEntity('EtreeDb\Db\Entity\VenueGroupLink', 100);

        $populator->execute();
    }
}

