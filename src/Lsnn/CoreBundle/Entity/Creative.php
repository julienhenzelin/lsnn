<?php
// src/Lsnn/CoreBundle/Entity/Creative.php
namespace Lsnn\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Lsnn\CoreBundle\Entity\Skill as Skill;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="creative")
 * @Vich\Uploadable
 */
class Creative
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var text $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var text $email
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @Assert\File(
     *     maxSize="2M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg"}
     * )
     * @Vich\UploadableField(mapping="creative_image", fileNameProperty="photo")
     *
     * @var File $image
     */
    protected $image;


    /**
     * @var text $photo
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    protected $photo;

    /**
     * @var text $url
     *
     * @ORM\Column(name="url", type="string", length=512)
     */
    protected $url;



    /**
     * @var Skill[] $skills
     * A creative has many skills (INVERSE SIDE) 
     *
     * @ORM\ManyToMany(targetEntity="Skill")
     * @ORM\JoinTable(name="creative_skill",
     *      joinColumns={@ORM\JoinColumn(name="creative_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="skill_id", referencedColumnName="id")}
     *      )
     */
    private $skills;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->skills = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Creative
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Creative
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Creative
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    
        return $this;
    }

    /**
     * Get photo
     *
     * @return string 
     */
    public function getPhoto()
    {
        return $this->photo;
        // return "http://www.gravatar.com/avatar/".md5( strtolower( trim( $this->email )))."?s=400";
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Creative
     */
    public function setImage($image)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Creative
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Add skills
     *
     * @param \Lsnn\CoreBundle\Entity\Skill $skills
     * @return Creative
     */
    public function addSkill(\Lsnn\CoreBundle\Entity\Skill $skills)
    {
        $this->skills[] = $skills;
    
        return $this;
    }

    /**
     * Remove skills
     *
     * @param \Lsnn\CoreBundle\Entity\Skill $skills
     */
    public function removeSkill(\Lsnn\CoreBundle\Entity\Skill $skills)
    {
        $this->skills->removeElement($skills);
    }

    /**
     * Get skills
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSkills()
    {
        return $this->skills;
    }
}