<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-4" style="max-width: 500px;">
    <h2 class="mb-3">Login</h2>
    
    <?php if (!empty($mensaje)): ?>
        <div class="alert alert-info"><?= $mensaje ?></div>
    <?php endif; ?>

    <!-- INTEGRACIÓN PROPIA: Formulario para autenticación -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="index.php" method="GET">
                <input type="hidden" name="accion" value="login">
                <div class="mb-3">
                    <label for="u" class="form-label">Usuario</label>
                    <input type="text" name="u" id="u" class="form-control" placeholder="Ej: admin" required>
                </div>
                <div class="mb-3">
                    <label for="p" class="form-label">Contraseña</label>
                    <input type="password" name="p" id="p" class="form-control" placeholder="Ej: 1234" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <?php if (!empty($usuarioLogueado)): ?>
        <div class="card border-success">
            <div class="card-body">
                <h5 class="card-title text-success">Bienvenido, <?= htmlspecialchars($usuarioLogueado['usuarios']) ?></h5>
                <p class="card-text">Saldo actual: $<?= number_format($usuarioLogueado['saldo'], 2) ?></p>
            </div>
        </div>
    <?php endif; ?>
</div>

<?php include 'views/partials/footer.php'; ?>