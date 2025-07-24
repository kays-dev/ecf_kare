<?php

require_once __DIR__ . '/../models/repositories/ProductRepository.php';

class productController
{
        private ProductRepository $productRepository;

        public function __construct()
        {
                $this->productRepository = new ProductRepository();
        }

        public function create()
        {
                $products = $this->productRepository->viewProducts();

                require_once __DIR__ . '/../views/app/create.php';
        }

        public function set()
        {
                $product = new Product();
                $product->setName($_POST['nom']);
                $product->setType($_POST['type']);
                $product->setPrice($_POST['prix']);
                $product->setStock($_POST['quantite']);

                $this->productRepository->addProduct($product);

                header('Location: ?action=product-list');
        }

        public function list()
        {
                $products = $this->productRepository->viewProducts();

                require_once __DIR__ . '/../views/app/index.php';
        }

        public function show(string $id)
        {
                $product = $this->productRepository->viewProduct($id);

                require_once __DIR__ . '/../views/app/show.php';
        }

        public function edit(string $id)
        {
                $product = $this->productRepository->viewProduct($id);

                require_once __DIR__ . '/../views/app/edit.php';
        }

        public function update()
        {
                $product = new product();
                $product->setName($_POST['nom']);
                $product->setType($_POST['type']);
                $product->setPrice($_POST['prix']);
                $product->setStock($_POST['quantite']);

                $this->productRepository->updateProduct($product);

                header('Location: ?action=product-list');
        }

        public function delete(string $id)
        {
                $this->productRepository->deleteProduct($id);

                header('Location: ?action=product-list');
        }
}
