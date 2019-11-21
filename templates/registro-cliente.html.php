<?php
    if(isset($_SESSION)){  
        if(!isset($_SESSION['id_usuario'])){
            header('location: ../index.php');
        }  
        if(!isset($_SESSION['cargo'])){
            header('location: ../index.php');
        }
        if($_SESSION['cargo']==1){
            header('location: home-gerente.php');
        }            
  
    }
    else{
        header('location: ./index.php');
    }
?>

<?php
if (isset($_SESSION['faltan_datos'])):
    echo    '<div class="alert alert-danger alert-dismissible fade show mt-5 text-center" role="alert">'
                . $_SESSION['faltan_datos'] .
                '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>';
    unset($_SESSION['faltan_datos']);
endif;
?>

<div class="card card-signin my-5">
    <br>
    <div class="row" style="margin:3px">
        <div class ="col">
            <a href="/estacionamiento_php/functions/home-empleado.php" class="float-left btn btn-primary btn-lg active" role="button" aria-pressed="true">Regresar</a>
        </div>
    </div>

    <div class="card-body">
        <h5 class="card-title text-center">Alta de Cliente</h5>
        <!--La respuesta del formulario se envia al mismo script-->
        <form class="form-signin" action="" method="POST">
            <div class="form-label-group">
                <input type="text" name="PATENTE" id="patente" class="form-control" value="<?=$cliente['PATENTE'] ?? ''?>" placeholder="Ingrese la patente del cliente">
                <label for="patente">Ingrese la patente del cliente</label>
            </div>
            <div class="form-label-group">
                <input type="text" id="dni" name="DNI" placeholder="Ingrese número de documento" value="<?=$cliente['DNI'] ?? ''?>" min=8 max=10 class="form-control">
                <label for="dni">Ingrese número de documento</label>
            </div>
            <div class="form-label-group">
                <select name="TIPO" id="tipo" class="form-control">
                    <option value="0">Seleccione un tipo de cliente</option>
                    <option value="2">Abonado</option>
                    <option value="1">No abonado</option>
                </select>
            </div>
            <button id="registro_cliente" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="Crear abonado">Crear cliente</button>
            <pre id="res"></pre>
        </form>
    </div>
</div>