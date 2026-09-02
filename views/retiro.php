<?php include 'views/partials/header.php'; ?>
<?php include 'views/partials/nav.php'; ?>

<div class="container mt-4" style="max-width: 500px;">
    <h2 class="mb-3">Retiro de Efectivo</h2>
    
    <?php if (!empty($mensaje)): ?>
        <div class="alert <?= strpos($mensaje, 'ERROR') !== false ? 'alert-danger' : 'alert-success' ?>">
            <?= $mensaje ?>
        </div>
    <?php endif; ?>

    <!-- INTEGRACIÓN PROPIA: Formulario de retiro de efectivo -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form action="index.php" method="GET">
                <input type="hidden" name="accion" value="retiro">
                <div class="mb-3">
                    <label for="monto" class="form-label">Monto a Retirar ($)</label>
                    <input type="number" step="0.01" name="monto" id="monto" class="form-control" placeholder="Ej: 200" required>
                </div>
                <button type="submit" class="btn btn-success w-100">Procesar Retiro</button>
            </form>
        </div>
    </div>

    <div class="bg-white p-3 rounded border">
        <p class="mb-1"><strong>Saldo actual:</strong> $<?= number_format($saldoActual, 2) ?></p>
        <p class="mb-0"><strong>Nuevo saldo:</strong> $<?= number_format($nuevoSaldo, 2) ?></p>
    </div>
</div>

<?php include 'views/partials/footer.php'; ?>