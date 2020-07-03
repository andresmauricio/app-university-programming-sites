<?php include("./includes/header.php") ?>

<form class="card" method="POST" action="server/delete_product.php">
    <div class="card-header text-center">
        <h3>Eliminar Producto</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Código</label>
            <input type="number" class="form-control" placeholder="51212" name="codigo" required />
        </div>
        <button type="submit" class="btn btn-outline-danger btn-block">
            Eliminar
        </button>
    </div>
</form>

<?php include("./includes/footer.php") ?>