<?php

namespace Client\FeedbackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $billingKey;


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
     * Set billingKey
     *
     * @param string $billingKey
     * @return Users
     */
    public function setBillingKey($billingKey)
    {
        $this->billingKey = $billingKey;

        return $this;
    }

    /**
     * Get billingKey
     *
     * @return string 
     */
    public function getBillingKey()
    {
        return $this->billingKey;
    }
}
