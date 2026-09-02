<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-5">
    <div class="p-5 bg-white rounded shadow-sm border">
        <h1 class="display-5 text-primary">Bienvenido al Sistema Bancario</h1>
        <p class="lead">Accede a las funciones desde el menú de navegación o mediante los accesos directos.</p>
        <hr class="my-4">
        
        <!-- INTEGRACIÓN PROPIA: Botones de acceso rápido para evitar uso de URL manual -->
        <div class="d-flex gap-2">
            <a href="index.php?accion=login" class="btn btn-outline-primary">Ir a Login</a>
            <a href="index.php?accion=retiro" class="btn btn-outline-success">Realizar Retiro</a>
            <a href="index.php?accion=listar" class="btn btn-outline-secondary">Ver Usuarios</a>
        </div>
    </div>
</div>

<?php include 'views/partials/footer.php'; ?>