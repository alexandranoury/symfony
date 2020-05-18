<?php

namespace App\DataFixtures;

use App\Entity\Aliment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //  $a1 = new Aliment();
        //  $a1->setNom("Carotte")
        //     ->setCalorie(36)
        //     ->setPrix(1.80)
        //     ->setImage("aliments/carotte.png")
        //     ->setProteine(0.77)
        //     ->setGlucide(6.45)
        //     ->setLipide(0.26);        
        // $manager->persist($a1); //Ajout en BDD

        // $a2 = new Aliment();
        // $a2->setNom("Patate")
        //     ->setPrix(1.50)  
        //     ->setCalorie(80)
        //     ->setImage("aliments/patate.jpg")
        //     ->setProteine(1.80)
        //     ->setGlucide(16.7)
        //     ->setLipide(0.34);        
        // $manager->persist($a2); //Ajout en BDD

        // $a3 = new Aliment();
        // $a3->setNom("Tomate")
        //     ->setPrix(2.30)  
        //     ->setCalorie(18)
        //     ->setImage("aliments/tomate.jpg")
        //     ->setProteine(0.86)
        //     ->setGlucide(2.26)
        //     ->setLipide(0.24);        
        // $manager->persist($a3); //Ajout en BDD

        // $a4 = new Aliment();
        // $a4->setNom("Pomme")
        //     ->setPrix(2.35)  
        //     ->setCalorie(52)
        //     ->setImage("aliments/pomme.jpg")
        //     ->setProteine(0.25)
        //     ->setGlucide(11.6)
        //     ->setLipide(0.25);        
        // $manager->persist($a4); //Prepare l'ajout en BDD

        // $manager->flush();

   
    }
}
