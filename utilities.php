<?php include("./includes/header.php") ?>
<link rel="stylesheet" href="styles/main.css" />

<main class="container my-5">
  <form class="card">
    <div class="card-header text-center">
      <h3>Calculadora</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="buy">Valor de Compra</label>
        <input type="number" class="form-control" id="buy" placeholder="5.000" />
      </div>
      <div class="form-group">
        <label for="utilities">% Utilidad o ganancia</label>
        <input type="number" class="form-control" id="utilities" placeholder="30" />
      </div>
      <div class="form-group">
        <label for="iva">% IVA</label>
        <input type="number" class="form-control" id="iva" placeholder="19" />
      </div>
      <div class="form-group">
        <p id="value_buy"></p>
        <p id="profits"></p>
      </div>
      <button onclick="getForm()" type="button" class="btn btn-outline-success btn-block">
        Calcular
      </button>
    </div>
  </form>

  <form class="card mt-5">
    <div class="card-header text-center">
      <h3>Calculadora Resistencia</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label for="banda_one">1° Banda</label>
        <select class="form-control" id="band_one" required>
          <option value="0">Negro</option>
          <option value="1">Cafe</option>
          <option value="2">Rojo</option>
          <option value="3">Naranja</option>
          <option value="4">Amarillo</option>
          <option value="5">Verde</option>
          <option value="6">Azul</option>
          <option value="7">Violeta</option>
          <option value="8">Gris</option>
          <option value="9">Blanco</option>
        </select>
      </div>

      <div class="form-group">
        <label for="banda_one">1° Banda</label>
        <select class="form-control" id="band_two" required>
          <option value="0">Negro</option>
          <option value="1">Cafe</option>
          <option value="2">Rojo</option>
          <option value="3">Naranja</option>
          <option value="4">Amarillo</option>
          <option value="5">Verde</option>
          <option value="6">Azul</option>
          <option value="7">Violeta</option>
          <option value="8">Gris</option>
          <option value="9">Blanco</option>
        </select>
      </div>

      <div class="form-group">
        <l+abel for="banda_one">1° Banda</label>
          <select class="form-control" id="band_three" required>
            <option value="1">Negro</option>
            <option value="10">Cafe</option>
            <option value="100">Rojo</option>
            <option value="1000">Naranja</option>
            <option value="10000">Amarillo</option>
            <option value="100000">Verde</option>
            <option value="1000000">Azul</option>
            <option value="10000000">Violeta</option>
            <option value="100000000">Gris</option>
            <option value="1000000000">Blanco</option>
          </select>
      </div>

      <div class="form-group">
        <label>Valor de resistencia</label>
        <input class="form-control" value="0" type="text" id="result_calc" disabled>
      </div>


      <button onclick="getFormResistencia()" type="button" class="btn btn-outline-success btn-block">
        Calcular
      </button>
    </div>
  </form>
</main>
<script src="js/utilities.js"></script>
<script src="js/resistencias.js"></script>

<?php include("./includes/footer.php") ?>