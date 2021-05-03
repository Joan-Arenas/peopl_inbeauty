<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Provider\Address;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');
//        for ($i = 0; $i < 3; $i++) {
//            $user = new User();
//            $user->setPrenom($faker->unique(true)->firstName);
//            $user->setNom($faker->unique(true)->lastName);
//            $user->setNomComplet('AXEL DUPONT');
//
//            $user->setEmail($faker->unique(true)->email);
//            $user->setPassword($this->encoder->encodePassword($user, "User123"));
//            $user->setDateCreation(new DateTime());
//            $user->setDateMaj(new DateTime());
//            $manager->persist($user);
//        }

        $admin = new User();
        $admin->setPrenom("Joan")
            ->setNom('DIEZ')
            ->setNomComplet("DIEZ JOAN")
            ->setEmail("joan@email.fr")
            ->setPassword($this->encoder->encodePassword($admin, "Admin123"))
            ->setDateMaj($faker->unique(true)->dateTime)
            ->setRoles(["ROLE_ADMIN"]);
        $manager->persist($admin);

        $manager->flush();
    }


}
