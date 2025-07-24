<?php

require_once __DIR__ . '/../lib/database.php';

use MongoDB\BSON\ObjectId;

class Product
{

    private string|ObjectId $id;
    private string $name;
    private string $type;
    private float $price;
    private int $stock;

    // Getters
    public function getId(): string
    {
        return (string) $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getType(): string
    {
        return $this->type;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getStock(): int
    {
        return $this->stock;
    }

    // Setters
    public function setId(string $id): void
    {
        $this->id = new ObjectId($id);
    }
    public function setName(string $name): void
    {
        $this->name = htmlspecialchars($name);
    }
    public function setType(string $type): void
    {
        $this->type = htmlspecialchars($type);
    }
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }
}
