<?php
require_once __DIR__ . '/../_crud_header.php';
require_once __DIR__ . '/../../models/DashboardModel.php';

$dashModel = new DashboardModel();
$stats = $dashModel->obtenerEstadisticas();
$ultimasTutorias = $dashModel->obtenerUltimasTutorias();
?>

<style>
.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}
.kpi-card {
    background: #ffffff;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.06);
    border-left: 6px solid #1F3B6E;
    text-align: center;
}
.kpi-card h3 { margin: 0; font-size: 13px; color: #6c757d; text-transform: uppercase; letter-spacing: 0.5px; }
.kpi-card .number { font-size: 34px; font-weight: bold; color: #1F3B6E; margin-top: 10px; }
.kpi-card.yellow { border-left-color: #f0ad4e; }
.kpi-card.green { border-left-color: #5cb85c; }
.kpi-card.blue { border-left-color: #0275d8; }
.kpi-card.purple { border-left-color: #6f42c1; }
</style>

<h2>📊 Panel de Control y Estadísticas (Dashboard)</h2>

<div class="dashboard-grid">
    <div class="kpi-card blue">
        <h3>🏫 Carreras</h3>
        <div class="number"><?= $stats['carreras'] ?></div>
    </div>
    <div class="kpi-card green">
        <h3>📚 Materias</h3>
        <div class="number"><?= $stats['materias'] ?></div>
    </div>
    <div class="kpi-card purple">
        <h3>👥 Usuarios</h3>
        <div class="number"><?= $stats['usuarios'] ?></div>
    </div>
    <div class="kpi-card yellow">
        <h3>📅 Tutorías</h3>
        <div class="number"><?= $stats['tutorias'] ?></div>
    </div>
    <div class="kpi-card">
        <h3>⭐ Calificación</h3>
        <div class="number"><?= $stats['promedio_calificacion'] ?> / 5</div>
    </div>
</div>

<h3>🕒 Últimas Tutorías Programadas</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Tutor</th>
            <th>Materia</th>
            <th>Tema</th>
            <th>Fecha</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($ultimasTutorias)): ?>
            <?php foreach ($ultimasTutorias as $t): ?>
                <tr>
                    <td><?= $t['id'] ?></td>
                    <td><?= htmlspecialchars($t['estudiante']) ?></td>
                    <td><?= htmlspecialchars($t['tutor']) ?></td>
                    <td><?= htmlspecialchars($t['materia']) ?></td>
                    <td><?= htmlspecialchars($t['tema']) ?></td>
                    <td><?= $t['fecha'] ?> <?= $t['hora'] ?></td>
                    <td><span class="btn btn-primary"><?= $t['estado'] ?></span></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="7" style="text-align:center;">No hay tutorías registradas.</td></tr>
        <?php endif; ?>
    </tbody>
</table>

<?php require_once __DIR__ . '/../layouts/footer.php'; ?>
