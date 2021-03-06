<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Redking\Bundle\SonataUserBundle\Document;

use Sonata\UserBundle\Document\BaseUser as BaseUser;

/**
 * This file has been generated by the EasyExtends bundle ( http://sonata-project.org/bundles/easy-extends )
 *
 * References :
 *   working with object : http://www.doctrine-project.org/docs/mongodb_odm/1.0/en/reference/working-with-objects.html
 *
 * @author <yourname> <youremail>
 */
class User extends BaseUser
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * MongoDB\ReferenceMany(targetDocument="Application\Sonata\UserBundle\Document\Group")
     */
    protected $groups;

    /**
     * MongoDB\ReferenceOne(targetDocument="Redking\Bundle\OAuthBundle\Document\Client", inversedBy="user", cascade={"all"})
     */
    protected $oauth_client;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->groups = new \Doctrine\Common\Collections\ArrayCollection();
        parent::__construct();
    }
    
    /**
     * Add group
     *
     * @param Application\Sonata\UserBundle\Document\Group $group
     */
    public function addGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->groups[] = $group;
    }

    /**
     * Remove group
     *
     * @param Application\Sonata\UserBundle\Document\Group $group
     */
    public function removeGroup(\FOS\UserBundle\Model\GroupInterface $group)
    {
        $this->groups->removeElement($group);
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection $groups
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set oauthClient
     *
     * @param Redking\Bundle\OAuthBundle\Document\Client|null $oauthClient
     * @return self
     */
    public function setOauthClient($oauthClient)
    {
        $this->oauth_client = $oauthClient;
        return $this;
    }

    /**
     * Get oauthClient
     *
     * @return Redking\Bundle\OAuthBundle\Document\Client $oauthClient
     */
    public function getOauthClient()
    {
        return $this->oauth_client;
    }

    /**
     * Is Administrator
     * @return boolean [description]
     */
    public function isAdmin()
    {
        return ($this->hasRole('ROLE_SUPER_ADMIN') || $this->hasRole('ROLE_ADMIN'));
    }
}
