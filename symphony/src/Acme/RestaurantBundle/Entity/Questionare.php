<?php
namespace Acme\RestaurantBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="questionare")
 */
class Questionare {
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $question_id;
     /**
     * @ORM\ManyToOne(targetEntity="BlogPost")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    protected $question_page_id;
    /**
     * @ORM\Column(type="string", length=255)
    */
    protected $question_type;
    /**
     * @ORM\Column(type="integer")
     */
    protected $question_pos;
    /**
     * @ORM\Column(type="text")
     */
    protected $question_details;
    /**
     * @ORM\Column(type="integer")
     */
    protected $is_req;
}