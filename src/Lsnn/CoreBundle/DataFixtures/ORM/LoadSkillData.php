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
        $skill->setName('Designer');
        $skill->setSlug('designer');
        $this->addReference('skill.designer', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Developer');
        $skill->setSlug('developer');
        $this->addReference('skill.developer', $skill);
        $manager->persist($skill);
        
        $skill = new Skill();
        $skill->setName('UX Designer');
        $skill->setSlug('ux');
        $this->addReference('skill.ux', $skill);
        $manager->persist($skill);        

        $skill = new Skill();
        $skill->setName('Photographer');
        $skill->setSlug('photographer');
        $this->addReference('skill.photographer', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Illustrator');
        $skill->setSlug('illustrator');
        $this->addReference('skill.illustrator', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Musician');
        $skill->setSlug('musician');
        $this->addReference('skill.musician', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Writer');
        $skill->setSlug('writer');
        $this->addReference('skill.writer', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Filmmaker');
        $skill->setSlug('filmmaker');
        $this->addReference('skill.filmmaker', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Crafter');
        $skill->setSlug('crafter');
        $this->addReference('skill.crafter', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Cook');
        $skill->setSlug('cook');
        $this->addReference('skill.cook', $skill);
        $manager->persist($skill);

        $skill = new Skill();
        $skill->setName('Mographer');
        $skill->setSlug('mographer');
        $this->addReference('skill.mographer', $skill);
        $manager->persist($skill);


        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}
