<?php require __DIR__.'/../templates/header.php'; ?>

<a href="?action=product-create" class="btn btn-primary mb-3">Ajouter un produit</a>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>Nom</th>
            <th>Type</th>
            <th>Prix (€)</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $product->getName(); ?></td>
            <td><?= $product->getType(); ?></td>
            <td><?= number_format($product->getPrice(), 2); ?></td>
            <td><?= $product->getStock(); ?></td>
            <td>
                <a href="?action=product-show&id=<?= $product->getId(); ?>" class="btn btn-warning btn-sm">Consulterr</a>
                <a href="?action=product-edit&id=<?= $product->getId(); ?>" class="btn btn-warning btn-sm">Modifier</a>
                <a href="?action=product-delete&id=<?= $product->getId(); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Confirmer la suppression ?');">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php require __DIR__.'/../templates/footer.php'; ?>
