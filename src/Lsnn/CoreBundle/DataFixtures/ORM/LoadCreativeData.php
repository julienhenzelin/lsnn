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
        $creative->setName('Julien Henzelin');
        $creative->setEmail('julienhenzelin@epsn.ch');
        // use gravatar service for now ...
        $creative->setPhoto("http://www.gravatar.com/avatar/".md5( strtolower( trim( "julien.henzelin@liquid-concept.ch"))));
        $creative->setUrl('http://www.epsn.ch');
        $creative->addSkill($manager->merge($this->getReference('skill.naturopathe_epsn')));
        $manager->persist($creative);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
