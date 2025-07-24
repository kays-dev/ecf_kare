<?php

require_once __DIR__ . '/controllers/ProductController.php';

$productControl = new ProductController();

$action = $_GET['action'] ?? 'auth';
$id = $_GET['_id'] ?? null;

switch ($action) {
    case 'product-create':
        $productControl->create();
        break;
    case 'product-set':
        $productControl->set();
        break;
    case 'product-list':
        $productControl->list();
        break;
    case 'product-show':
        $contractControl->show($id);
        break;
    case 'product-edit':
        $productControl->edit($id);
        break;
    case 'product-update':
        $productControl->update();
        break;
    case 'product-delete':
        $productControl->delete($id);
        break;
}