<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

<h1>Modification d'un pays</h1>

<form action="update_query.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label>Pays</label>
        <input type="text" name="titre" value="<?php echo $pays["titre"]; ?>" class="form-control" placeholder="Pays" required>
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control">
        <?php if ($pays["image"]) : ?>
            <img src="../../../uploads/<?php echo $pays["image"]; ?>" class="img-thumbnail">
        <?php endif; ?>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>"> 
    <button type="submit" class="btn btn-success">
        <i class="fa fa-check"></i>
        Modifier
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>