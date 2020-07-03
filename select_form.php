<?php include("./includes/header.php"); session_start(); ?>

<div class="container my-5">
<form class="card" method="POST" action="server/select.php">
    <div class="card-header text-center">
        <h3>Consultar Producto</h3>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label>Código</label>
            <input type="number" class="form-control" placeholder="51212" name="codigo" required />
        </div>
        <button type="submit" class="btn btn-outline-primary btn-block">
            Consultar
        </button>
    </div>
</form>

<?php if(isset($_SESSION['id'])) { ?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Código</th>
      <th scope="col">Nombre</th>
      <th scope="col">Marca</th>
      <th scope="col">Precio</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php $_SESSION['id'] ?></td>
      <td><?php $_SESSION['codigo_de_producto'] ?></td>
      <td><?php $_SESSION['nombre'] ?></td>
      <td><?php $_SESSION['marca'] ?></td>
      <td><?php $_SESSION['precio_de_compra'] ?></td>
      <td><?php $_SESSION['cantidad'] ?></td>
    </tr>
  </tbody>
</table>
<?php } session_unset() ?>
</div>

<?php include("./includes/footer.php") ?>