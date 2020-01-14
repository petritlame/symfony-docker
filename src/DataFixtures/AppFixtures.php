<?php

namespace App\DataFixtures;

use App\Entity\Users;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{

    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
       $user = new Users();
       $user->setUsr('admin');
        $user->setPassword($this->encoder->encodePassword($user,'2307952'));
        $user->setPass($this->encoder->encodePassword($user,'2307952'));
       $user->setEmail('petritlame@live.com');

       $manager->persist($user);

        $manager->flush();
    }
}
