<?php

namespace MikeOz\SimpleCmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class BigProduct extends GeneralProduct
{
    /**
     * @ORM\ManyToOne(targetEntity="Supplier", inversedBy="features")
     * @ORM\JoinColumn(name="supplier_id", referencedColumnName="supplier_id")
     **/
    private $supplier;
}