<?php

namespace App\DataFixtures;

use App\Entity\Artist;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /**
     * @var array
     */
    private $artists;

    public function __construct()
    {
        $this->artists = [
            [ "name" => "Elton John"],
            [ "name" => "Jim Morison" ],
            [ "name" => "Canadian" ],
            [ "name" => "Billy Joel" ],
        ];
    }

    public function load(ObjectManager $manager)
    {
        foreach ($this->artists as $row) {
            $artist = new Artist();
            $artist->setName($row["name"]);
            $manager->persist($artist);
            $manager->flush();
        }
    }
}
