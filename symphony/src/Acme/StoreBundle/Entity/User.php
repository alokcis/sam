<?php
namespace Acme\StoreBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User {
    
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $user_id;
    /**
     * @ORM\Column(type="string", length=255)
    */
    protected $billing_key;

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set billing_key
     *
     * @param string $billingKey
     * @return User
     */
    public function setBillingKey($billingKey)
    {
        $this->billing_key = $billingKey;

        return $this;
    }

    /**
     * Get billing_key
     *
     * @return string 
     */
    public function getBillingKey()
    {
        return $this->billing_key;
    }
}
