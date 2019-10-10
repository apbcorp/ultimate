<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class StoredItem
 * @package App\Entity
 *
 * @ORM\Table(name="storedItems")
 * @ORM\Entity(repositoryClass="App\Repository\StoredItemRepository")
 */
class StoredItem
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
     * @var User
     *
     * @ORM\OneToOne(targetEntity="User", inversedBy="store")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="userId", type="integer")
     */
    private $userId;

    /**
     * @var Item
     *
     * @ORM\OneToOne(targetEntity="Item")
     * @ORM\JoinColumn(name="itemId", referencedColumnName="id")
     */
    private $item;

    /**
     * @var int
     *
     * @ORM\Column(name="amount", type="integer")
     */
    private $amount;

    /**
     * @var int
     *
     * @ORM\Column(name="durability", type="integer")
     */
    private $durability = 0;

    public function getId(): int
    {
        return $this->id;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getItem(): ?Item
    {
        return $this->item;
    }

    public function setItem(Item $item)
    {
        $this->item = $item;

        return $this;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    public function getDurability(): int
    {
        return $this->durability;
    }

    public function setDurability(int $durability)
    {
        $this->durability = $durability;

        return $this;
    }
}