<?php

namespace App\DataFixtures;

use App\Entity\Meal;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        $faker = Faker\Factory::create('fr_FR');

        $meal1 = new Meal();
        $meal1
            ->setName("Sandwich crudités")
            ->setPhoto("sandwich_crudites.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(1.80)
            ->setSalePrice(3.80)
        ;
        $manager->persist($meal1);

        $meal2 = new Meal();
        $meal2
            ->setName("Sandwich végétarien")
            ->setPhoto("burger.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(1.00)
            ->setSalePrice(3.00)
        ;
        $manager->persist($meal2);

        $meal3 = new Meal();
        $meal3
            ->setName("Plateau sandwichs")
            ->setPhoto("plateau_sandwichs.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(3.80)
            ->setSalePrice(7.50)
        ;
        $manager->persist($meal3);

        $meal4 = new Meal();
        $meal4
            ->setName("Paninis et petite salade")
            ->setPhoto("paninis.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(1.80)
            ->setSalePrice(4.80)
        ;
        $manager->persist($meal4);

        $meal5 = new Meal();
        $meal5
            ->setName("Plateau gourmand")
            ->setPhoto("plateau_gourmand.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(3.50)
            ->setSalePrice(8.80)
        ;
        $manager->persist($meal5);

        $meal6 = new Meal();
        $meal6
            ->setName("Sandwich jambon chèvre")
            ->setPhoto("jambon_chevre.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(1.80)
            ->setSalePrice(3.70)
        ;
        $manager->persist($meal6);

        $meal7 = new Meal();
        $meal7
            ->setName("Le vegan")
            ->setPhoto("vegan.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(1.50)
            ->setSalePrice(3.00)
        ;
        $manager->persist($meal7);

        $meal8 = new Meal();
        $meal8
            ->setName("Sandwich chouquette")
            ->setPhoto("chouquette.jpg")
            ->setDescription($faker->text)
            ->setQuantityInStock($faker->numberBetween(1,50))
            ->setBuyPrice(1.80)
            ->setSalePrice(3.80)
        ;
        $manager->persist($meal8);

        $manager->flush();
    }
}
