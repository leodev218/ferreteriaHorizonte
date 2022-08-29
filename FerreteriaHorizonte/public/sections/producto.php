<!-- CABECERA/ HEADER DE LA APP-->
<?php 
      include ("../templates/header.php");
      require '../../config/database.php';
      
      ?>

<!-- CUERPO/ BODY DE LA APP-->
<div class="container-fluid principal">
    <div class="row">
        <div class="col-12 col-sm-5 col-md-4 col-xl-4" id="sidebar">

        <!-- MENU DE SECCION -->

          <div class="d-grid gap-2">
            <button class="btn mt-4 btn-dark" type="button">Buscar producto</button>
            <button class="btn btn-dark" type="button">Crear producto</button>
            <button class="btn btn-dark" type="button">Eliminar producto</button>
          </div>

        
          <hr>

        <!-- MENU ACORDION -->
        <?php  include '../templates/acordion.php';?>

        </div>
        <div class="col-12 col-sm-7 col-md-8 col-xl-8 bg-white" id="contenido">



                <!-- TABLA PARA IMPRIMIR PRODUCTOS -->

            <table class="table  table-hover m-4 table-striped">
                 <tr>
                   <td class="col"><strong> Id producto</strong> </td>
                   <td class="col"><strong> Nombre producto</strong> </td>
                   <td class="col"><strong> Descripcion producto</strong> </td>
                   <td class="col"><strong> Valor producto</strong> </td>
                   <td class="col"><strong> Cantidad producto</strong> </td>
                   <td class="col"><strong> Creado por</strong> </td>
                 </tr>
                <?php 
                $db = new Database();
                // ASIGNAMOS A $con LOS VALORES DE LA CLASE Y LA FUNCION DE CONEXION A LA BD YA CREADAS
                $con = $db->conectar();
                // DEFINIMOS UNA VARIABLE PARA GUARDAR LA CONSULTA SQL
                $sql = $con->prepare("SELECT * FROM producto");
                // EJECUTAMOS LA CONSULTA DE LA VARIABLE $sql
                $sql->execute();
                // GUARDAMOS EL RESULTADO EN UNA NUEVA VARIABLE Y DEFINIMOS EL BUCLE CON 'foreach'
                $resultado = $sql->fetchAll(PDO::FETCH_ASSOC); foreach ($resultado as $row) {

                ?>
                    <tr>
                      <td class="col"><?php echo $row ['id_poducto']; ?></td>
                      <td class="col"><?php echo $row ['nombre_producto']; ?></td>
                      <td class="col"><?php echo $row ['descripcion_producto']; ?></td>
                      <td class="col"><?php echo $row ['valor_producto']; ?></td>
                      <td class="col"><?php echo $row ['cantidad_producto']; ?></td>
                      <td class="col"><?php echo $row ['creado_por']; ?></td>
                    </tr>
                <?php  } ?>
             </table>

        </div>
    </div>
</div>

<!-- PIE/ FOOTER DE LA APP-->
<?php include ("../templates/footer.php")?>