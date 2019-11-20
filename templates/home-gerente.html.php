<?php session_start() ?>

<?php
    if(isset($_SESSION)){    
        if(!isset($_SESSION['id_usuario'])){
            header('location: ../index.php');
        }  
        if(!isset($_SESSION['cargo'])){
            header('location: ../index.php');
        }
        if($_SESSION['cargo']==2){
            header('location: home-empleado.php');
        }  
    }
    else{
        header('location: /../index.php');
    }
    
?>

<div class="card card-signin my-5">
    <div class="card-body">
        <h5 class="card-title text-center">Bienvenido al sistema, Gerente</h5>
        <hr class="my-4">
        <p>Seleccione una opción de lo que desea hacer:</p>
        <a href="./../functions/todos-usuarios.php">
            <button type="button" class="btn  btn-info">
                <i class="fas fa-users" aria-hidden="true"></i> Ver lista de empleados
            </button>
        </a>
        <a href="./../functions/registro-empleado.php">
            <button type="button" class="btn -lg btn-info">
                <i class="fas fa-user-plus"></i> Agregar un nuevo empleado
            </button>
        </a>
        <a href="/gerente/reportes">
            <button type="button" class="btn -lg btn-info">
                <i class="far fa-list-alt"></i> Ver reportes
            </button>
        </a>
    </div>
</div>