<?php

namespace App\Entity;

use App\Repository\SportRepository;
use Core\Attributes\Table;
use Core\Attributes\TargetRepository;

#[TargetRepository(name: SportRepository::class)]
#[Table(name: "sports")]
class Sport
{

    private int $id;
    private string $name;
    private string $description;
    private string $accessory;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAccessory(): string
    {
        return $this->accessory;
    }

    /**
     * @param string $accessory
     */
    public function setAccessory(string $accessory): void
    {
        $this->accessory = $accessory;
    }


}