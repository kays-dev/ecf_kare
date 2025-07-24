<?php require __DIR__.'/../templates/header.php'; ?>

<form action="?action=product-update" method="post">
    <input type="hidden" name="id" value="<?= $product->getId(); ?>">
    
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" value="<?= $product->getName(); ?>" required>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" value="<?= $product->getType(); ?>" required>
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix</label>
        <input type="number" step="0.01" class="form-control" name="prix" value="<?= $product->getPrice(); ?>" required>
    </div>
    <div class="mb-3">
        <label for="quantite" class="form-label">Stock</label>
        <input type="number" class="form-control" name="quantite" value="<?= $product->getStock(); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    <a href="?action=product-list" class="btn btn-secondary">Annuler</a>
</form>

<?php require __DIR__.'/../templates/footer.php'; ?>
