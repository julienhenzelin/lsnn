<?php
namespace Lsnn\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;

use Lsnn\CoreBundle\Entity\Skill;

class LoadSkillData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {


        $skill = new Skill();
        $skill->setName('Naturopathe');
        $skill->setSlug('naturopathe');
        $this->addReference('skill.naturopathe', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Naturopathe EPSN');
        $skill->setSlug('naturopathe-epsn');
        $this->addReference('skill.naturopathe-epsn', $skill);
        $manager->persist($skill);
        
        $skill = new Skill();
        $skill->setName('ASCA');
        $skill->setSlug('asca');
        $this->addReference('skill.asca', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('RME');
        $skill->setSlug('rme');
        $this->addReference('skill.rme', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('NVS');
        $skill->setSlug('nvs');
        $this->addReference('skill.nvs', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('APTN');
        $skill->setSlug('aptn');
        $this->addReference('skill.aptn', $skill);
        $manager->persist($skill);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
