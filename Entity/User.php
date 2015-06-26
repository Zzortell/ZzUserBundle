<?php
namespace Zz\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
	FOS\UserBundle\Model\User as FOSUser,
	Symfony\Component\Validator\Constraints as Assert,
	JMS\Serializer\Annotation as Serializer;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table("zz_user")
 */
class User extends FOSUser
{
	/**
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	public function __construct ()
	{
		parent::__construct();
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
}
