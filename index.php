<?php

require_once __DIR__ . '/controllers/ProductController.php';

$productControl = new ProductController();
$id = $_GET['id'] ?? null;

$action = $_GET['action'] ?? 'product-list';

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
        $productControl->show($id);
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