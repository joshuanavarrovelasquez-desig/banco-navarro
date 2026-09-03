<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-4">
    <h2>Login</h2>
    
    <?php if (!empty($mensaje)): ?>
        <div class="alert alert-info"><?= $mensaje ?></div>
    <?php endif; ?>

    <!-- ========================================== -->
    <!-- INTEGRACIÓN PROPIA: Formulario de Login    -->
    <!-- (Se oculta si el usuario ya se logueó)     -->
    <!-- ========================================== -->
    <?php if (empty($usuarioLogueado)): ?>
    <form action="index.php" method="GET" style="margin-bottom: 20px;">
        <input type="hidden" name="accion" value="login">
        Usuario: <input type="text" name="u" required>
        Contraseña: <input type="password" name="p" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <?php endif; ?>
    <!-- ========================================== -->

    <?php if (!empty($usuarioLogueado)): ?>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bienvenido, <?= htmlspecialchars($usuarioLogueado['usuario'] ?? $usuarioLogueado['usuarios'] ?? '') ?></h5>
                <p class="card-text">Saldo actual: $<?= number_format($usuarioLogueado['saldo'], 2) ?></p>
                
                <!-- ========================================== -->
                <!-- INTEGRACIÓN PROPIA: Botón de redirección   -->
                <!-- ========================================== -->
                <br>
                <a href="index.php?accion=retiro"><button type="button">Ir a Realizar Retiro</button></a>
                <!-- ========================================== -->

            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'views/partials/footer.php'; ?>