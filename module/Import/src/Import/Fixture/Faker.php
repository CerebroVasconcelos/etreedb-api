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

        $populator->addEntity('Db\Entity\UserRole', 5);
        $populator->addEntity('Db\Entity\User', 100);
        $populator->addEntity('Db\Entity\UserMeta', 100);
        $populator->addEntity('Db\Entity\UserToUserRole', 50);

        $populator->addEntity('Db\Entity\Performer', 100);
        $populator->addEntity('Db\Entity\PerformerAlias', 100);

        $populator->addEntity('Db\Entity\BandGroup', 100);
        $populator->addEntity('Db\Entity\Band', 100);
        $populator->addEntity('Db\Entity\UserToBandGroup', 100);
        $populator->addEntity('Db\Entity\BandAlias', 100);
        $populator->addEntity('Db\Entity\Lineup', 100);
        $populator->addEntity('Db\Entity\PerformerLineup', 100);

        $populator->addEntity('Db\Entity\VenueGroup', 100);
        $populator->addEntity('Db\Entity\Venue', 100);
        $populator->addEntity('Db\Entity\VenueToVenueGroup', 100);

        $populator->addEntity('Db\Entity\Song', 100);

        $populator->addEntity('Db\Entity\Producer', 100);
        $populator->addEntity('Db\Entity\Event', 100);

        $populator->addEntity('Db\Entity\Performance', 100);
        $populator->addEntity('Db\Entity\PerformanceSet', 100);
        $populator->addEntity('Db\Entity\PerformanceSetSong', 100);
        $populator->addEntity('Db\Entity\PerformerPerformance', 100);


        $populator->addEntity('Db\Entity\Source', 100);
        $populator->addEntity('Db\Entity\Checksum', 100);

        $populator->addEntity('Db\Entity\BandComment', 100);
        $populator->addEntity('Db\Entity\PerformerComment', 100);
        $populator->addEntity('Db\Entity\SongComment', 100);
        $populator->addEntity('Db\Entity\SourceComment', 100);
        $populator->addEntity('Db\Entity\PerformanceComment', 100);
        $populator->addEntity('Db\Entity\VenueComment', 100);
        $populator->addEntity('Db\Entity\EventComment', 100);
        $populator->addEntity('Db\Entity\LineupComment', 100);

        $populator->addEntity('Db\Entity\BandLink', 100);
        $populator->addEntity('Db\Entity\PerformerLink', 100);
        $populator->addEntity('Db\Entity\SongLink', 100);
        $populator->addEntity('Db\Entity\SourceLink', 100);
        $populator->addEntity('Db\Entity\PerformanceLink', 100);
        $populator->addEntity('Db\Entity\VenueLink', 100);
        $populator->addEntity('Db\Entity\EventLink', 100);
        $populator->addEntity('Db\Entity\LineupLink', 100);

        $populator->execute();
    }
}

