<?php
namespace Lsnn\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Lsnn\CoreBundle\Entity\Creative;

class LoadCreativeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {


        $creative = new Creative();
        $creative->setName('Marc Friederich');
        $creative->setEmail('marc@antistatique.net');
        $creative->setPhoto('marc.png');
        $creative->setUrl('http://www.antistatique.net');
        $creative->addSkill($manager->merge($this->getReference('skill.developer')));
        $creative->addSkill($manager->merge($this->getReference('skill.designer')));
        $manager->persist($creative);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}