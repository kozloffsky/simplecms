<?php

namespace MikeOz\SimpleCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="supplier")
 */
class Supplier
{
    
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $supplier_id;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $name;
    
     /**
     * @ORM\OneToMany(targetEntity="BigProduct", mappedBy="supplier")
     **/
    private $products;
    
    public function __construct(){
        $this->$products = new ArrayCollection();
    }
}