<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\InstitutFactory ;
use App\Factory\EtudiantFactory ;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        EtudiantFactory::createMany(10);
        InstitueFactory::createMany(10);
        
        $manager->flush();
    }
}
