<?php

namespace App\DataFixtures;

use App\Entity\Company;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i=1; $i<=10; $i++){
            $company = new Company();
            $company->setName("Société $i")
                    ->setAddress("5 avenue carnot")
                    ->setRaisonSociale("SARL $i")
                    ->setPostalCode("91300")
                    ->setVille("Massy")
                    ->setGerant("Emmanuel MOZAR")
                    ->setChiffreAffaire("98000");            
            $manager->persist($company);
        }
        $manager->flush();
    }
}
