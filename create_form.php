<?php include("./includes/header.php") ?>

<div class="container my-5">
<form class="card" method="POST" action="server/create_product.php">
    <div class="card-header text-center">
        <h3>Crear Producto</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="buy">Código del producto</label>
            <input type="number" class="form-control" placeholder="123455" name="codigo" required />
        </div>
        <div class="form-group">
            <label for="utilities">Nombre del porducto</label>
            <input type="text" class="form-control" placeholder="Tuercas" name="nombre" required />
        </div>
        <div class="form-group">
            <label>Marca</label>
            <input type="text" class="form-control" placeholder="Super acero" name="marca" required />
        </div>
        <div class="form-group">
            <label>Precio de compra</label>
            <input type="number" class="form-control" placeholder="50000" name="precio" required />
        </div>
        <div class="form-group">
            <label>Cantidad</label>
            <input type="number" class="form-control" placeholder="5" name="cantidad" required />
        </div>
        <button type="submit" class="btn btn-outline-dark btn-block">
            Ingresar
        </button>
    </div>
</form>
</div>

<?php include("./includes/footer.php") ?>