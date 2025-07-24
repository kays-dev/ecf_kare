<?php require 'header.php'; ?>

<form action="?action=product-update" method="post">
    <input type="hidden" name="id" value="<?= $product->getId(); ?>">
    
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" name="name" value="<?= $product->getName(); ?>" required>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" value="<?= $product->getType(); ?>" required>
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prix</label>
        <input type="number" step="0.01" class="form-control" name="price" value="<?= $product->getPrice(); ?>" required>
    </div>
    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock" value="<?= $product->getStock(); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
    <a href="?action=product-list" class="btn btn-secondary">Annuler</a>
</form>

<?php require 'footer.php'; ?>
