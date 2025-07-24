<?php require __DIR__ . '/../templates/header.php'; ?>
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

<?php require __DIR__ . '/../templates/footer.php'; ?>