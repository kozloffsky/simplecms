<?php

namespace MikeOz\SimpleCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="general_product")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 */
class GeneralProduct
{
    
    /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    private $id;
    
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $name;
    
    /**
    * @ORM\Column(type="integer")
    */
    private $instock;
    
}