<?php

require_once __DIR__ . '/../lib/database.php';

use MongoDB\BSON\ObjectId;

class Product
{
    private string|ObjectId|null $id = null; // Permettre null
    private string $name;
    private string $type;
    private float $price;
    private int $stock;

    // Getters
    public function getId(): ?string
    {
        if ($this->id === null) {
            return null;
        }
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
    public function setId(string|ObjectId $id): void
    {
        if (is_string($id)) {
            $this->id = new ObjectId($id);
        } else {
            $this->id = $id;
        }
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
    
    // Méthode utile pour vérifier si le produit a un ID
    public function hasId(): bool
    {
        return $this->id !== null;
    }
}