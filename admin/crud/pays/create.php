<?php
require_once '../../../model/database.php';
require_once '../../layout/header.php';
?>

<h1>Ajout d'un pays</h1>

<form action="create_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Pays</label>
        <input type="text" name="titre" class="form-control" placeholder="Pays" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Ajouter
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>