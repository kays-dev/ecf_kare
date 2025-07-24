<?php require __DIR__.'/../templates/header.php'; ?>

<form action="?action=product-set" method="post">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom</label>
        <input type="text" class="form-control" name="nom" required>
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Type</label>
        <input type="text" class="form-control" name="type" required>
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">Prix</label>
        <input type="number" step="0.01" class="form-control" name="prix" required>
    </div>
    <div class="mb-3">
        <label for="quantite" class="form-label">Stock</label>
        <input type="number" class="form-control" name="quantite" required>
    </div>
    <button type="submit" class="btn btn-success">Ajouter</button>
    <a href="?action=product-list" class="btn btn-secondary">Annuler</a>
</form>

<?php require __DIR__.'/../templates/footer.php'; ?>
