<?php

use MongoDB\Collection;

require_once __DIR__ . '/../Product.php';

class ProductRepository
{

    public DatabaseConnection $connection;
    private Collection $collection;

    public function __construct()
    {
        $this->connection = new DatabaseConnection();
        $mongodb =  $this->connection;
        $this->collection = $mongodb->getCollection('testdb', 'products');
    }

    public function addProduct(Product $product): bool
    {
        $document = $this->collection->insertOne([
            '_id' => $product->getId(),
            'nom' => $product->getName(),
            'type' => $product->getType(),
            'price' => $product->getPrice(),
            'stock' => $product->getStock(),
        ]);

        return $document->getInsertedCount() > 0;
    }

    public function viewProducts(): array
    {
        $cursor = $this->collection->find();
        $products= [];

        foreach ($cursor as $document) {
            $product = new Product();
            $product->setId($document['_id']);
            $product->setName($document['nom']);
            $product->setType($document['type']);
            $product->setPrice($document['price']);
            $product->setStock($document['stock']);

            $products[] = $product;
        }
        return $products;
    }

    public function viewProduct(string $id): ?Product
    {
        $document = $this->collection->findOne(['_id'=> new ObjectId($id)]);

        if (!$document) {
            return null;
        }

        $product = new Product();
            $product->setId($document['_id']);
            $product->setName($document['nom']);
            $product->setType($document['type']);
            $product->setPrice($document['price']);
            $product->setStock($document['stock']);

        return $product;
    }

    public function updateProduct(Product $product): bool
    {

        $document = $this->collection->updateOne(['_id'=> new ObjectId($product->getId())],['$set' => [
            'nom' => $product->getName(),
            'type' => $product->getType(),
            'price' => $product->getPrice(),
            'stock' => $product->getStock(),
        ]]);

        return $document->getModifiedCount() > 0;
    }

    public function deleteProduct(string $id): bool
    {

        $document = $this->collection->deleteOne(['_id'=> new ObjectId($id)]);

        return $document->getDeletedCount() > 0;
    }
}
