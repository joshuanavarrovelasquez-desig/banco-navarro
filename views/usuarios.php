<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-4">
    <h2 class="mb-3">Listado de Usuarios</h2>
    <div class="table-responsive shadow-sm">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Saldo</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($usuarios)): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $usuario['id'] ?></td>
                            <td><?= htmlspecialchars($usuario['usuarios']) ?></td>
                            <td>$<?= number_format($usuario['saldo'], 2) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="text-center">No hay usuarios registrados.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include 'views/partials/footer.php'; ?>