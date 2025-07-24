<?php
require_once __DIR__ . '/../Product.php';
require_once __DIR__ . '/../ProductRepository.php';

$productRepository = new ProductRepository();

if (!isset($_GET['id'])) {
    echo "Aucun ID de produit fourni.";
    exit;
}

$product = $productRepository->viewProduct($_GET['id']);

if (!$product) {
    echo "Produit non trouvé.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détail du produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Détail du produit</h4>
            </div>
            <div class="card-body">
                <h5 class="card-title"><?= htmlspecialchars($product->getName()) ?></h5>
                <p class="card-text"><strong>Type :</strong> <?= htmlspecialchars($product->getType()) ?></p>
                <p class="card-text"><strong>Prix :</strong> <?= number_format($product->getPrice(), 2) ?> €</p>
                <p class="card-text"><strong>Stock :</strong> <?= $product->getStock() ?></p>
            </div>
            <div class="card-footer">
                <a href="?action=product-edit&id=<?= $product->getId(); ?>" class="btn btn-warning">Modifier</a>
                <a href="?action=product-delete&id=<?= $product->getId(); ?>" class="btn btn-danger" onclick="return confirm('Supprimer ce produit ?')">Supprimer</a>
                <a href="index.php" class="btn btn-secondary">Retour à la liste</a>
            </div>
        </div>
    </div>
</body>
</html>
