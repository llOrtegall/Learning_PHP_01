<!-- //* Consulta Base De Datos -->
<?php
include("../../db.php");

$sentencia = $conexcion->prepare("SELECT * FROM `tbl_puestos`");
$sentencia->execute();
$lista_tbl_cargos = $sentencia->fetchAll(PDO::FETCH_ASSOC);

// * print_r($lista_tbl_cargos); ver si taer los registros

?>

<!-- //* Aqui Esta El Header -->
<?php include('../../templates/header.php'); ?>

<br />

<div class="card">
  <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">
      Agregar Cargos</a>
  </div>
  <div class="card-body">
    <div class="table-responsive-sm">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre Cargo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>

          <!-- //* hacemos foreach para recorrer la lista y cada vez que haga una lectura la insertara en el </tr> -->
          <?php foreach ($lista_tbl_cargos as $registro) { ?>
            <tr class="">
              <td scope="row"><?php echo $registro['id'] ?></td>
              <td><?php echo $registro['nombrecargo'] ?></td>
              <td>
                <input name="btneditar" id="btneditar" class="btn btn-info" type="button" value="Editar"> |
                <input name="btneliminar" id="btneliminar" class="btn btn-danger" type="button" value="Borrar">
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


<!-- //* Aqui Esta El Footer -->
<?php include('../../templates/footer.php'); ?>