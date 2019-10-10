<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Item
 * @package App\Entity
 *
 * @ORM\Table(name="items")
 * @ORM\Entity
 */
class Item
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="itemType", type="integer")
     */
    private $itemType = 0;

    /**
     * @var Collection
     */
    private $properties;

    public function __construct()
    {
        $this->properties = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getItemType(): int
    {
        return $this->itemType;
    }

    public function setItemType(int $itemType)
    {
        $this->itemType = $itemType;

        return $this;
    }

    public function getProperties(): Collection
    {
        return $this->properties;
    }

    public function setProperties(Collection $properties)
    {
        $this->properties = $properties;

        return $this;
    }
}