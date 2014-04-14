<?php

namespace MikeOz\SimpleCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SimpleProduct extends GeneralProduct
{
    /**
    * @ORM\Column(type="string", length=100)
    */
    private $code;
}