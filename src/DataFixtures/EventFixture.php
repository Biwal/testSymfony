<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Event;

class EventFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $generator = \Faker\Factory::create();
        $populator = new \Faker\ORM\Doctrine\Populator($generator,$manager);
        $populator->addEntity('App\Entity\Event', 10);
        $insertedPKs = $populator->execute();

        // $event = new Event();
        // $event->setLieu("Idron");
        // $event->setLibelle("fete");
        // $event->setPrix("10");
        // $event->setDate(new \Datetime());
        // $manager->persist($event);

        $manager->flush();
    }
}
