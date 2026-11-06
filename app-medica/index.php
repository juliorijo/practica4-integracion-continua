<?php
$currentPage = 'index.php';
require __DIR__ . '/includes/config.php';
renderHeader('Resumen', 'Una vista tranquila de lo que sucede hoy en la clínica.');

$appointments = [
    ['time' => '08:30', 'name' => 'Lucía Fernández', 'reason' => 'Consulta general', 'doctor' => 'Dra. Valeria Cruz', 'status' => 'En espera', 'tone' => 'waiting', 'initials' => 'LF', 'color' => 'lavender'],
    ['time' => '09:15', 'name' => 'Mateo Castillo', 'reason' => 'Seguimiento', 'doctor' => 'Dr. Rafael Núñez', 'status' => 'Confirmada', 'tone' => 'confirmed', 'initials' => 'MC', 'color' => 'peach'],
    ['time' => '10:00', 'name' => 'Camila Santos', 'reason' => 'Cardiología', 'doctor' => 'Dra. Valeria Cruz', 'status' => 'Confirmada', 'tone' => 'confirmed', 'initials' => 'CS', 'color' => 'mint'],
    ['time' => '10:45', 'name' => 'Diego Morales', 'reason' => 'Consulta general', 'doctor' => 'Dr. Rafael Núñez', 'status' => 'Por confirmar', 'tone' => 'pending', 'initials' => 'DM', 'color' => 'blue'],
];
$months = ['January' => 'enero', 'February' => 'febrero', 'March' => 'marzo', 'April' => 'abril', 'May' => 'mayo', 'June' => 'junio', 'July' => 'julio', 'August' => 'agosto', 'September' => 'septiembre', 'October' => 'octubre', 'November' => 'noviembre', 'December' => 'diciembre'];
?>
<section class="welcome-panel">
    <div class="welcome-copy">
        <span class="welcome-date"><?= date('d') ?> de <?= $months[date('F')] ?> de <?= date('Y') ?></span>
        <h2>Un buen día para cuidar.</h2>
        <p>Tu clínica está lista. Aquí tienes el pulso de la jornada.</p>
        <a class="button button-light" href="citas.php"><?= icon('plus') ?> Agendar cita</a>
    </div>
    <div class="welcome-art" aria-hidden="true"><div class="art-orbit orbit-one"></div><div class="art-orbit orbit-two"></div><div class="art-cross">+</div><div class="art-pulse"><span></span><span></span><span></span><span></span><span></span></div><div class="art-note"><span class="art-note-dot"></span><span>Atención de hoy</span><strong>En marcha</strong></div></div>
</section>
<section class="metric-grid" aria-label="Resumen de la clínica">
    <article class="metric-card"><div class="metric-top"><span class="metric-icon metric-blue"><?= icon('users') ?></span><span class="metric-change">+8.2%</span></div><strong class="metric-value">1,284</strong><span class="metric-label">Pacientes registrados</span><div class="metric-foot"><span>Este mes</span><span class="mini-bars"><i></i><i></i><i></i><i></i><i></i><i></i><i></i></span></div></article>
    <article class="metric-card"><div class="metric-top"><span class="metric-icon metric-green"><?= icon('calendar') ?></span><span class="metric-change">+3 hoy</span></div><strong class="metric-value">18</strong><span class="metric-label">Citas programadas</span><div class="metric-foot"><span>De lunes a viernes</span><span class="metric-foot-icon"><?= icon('clock') ?></span></div></article>
    <article class="metric-card"><div class="metric-top"><span class="metric-icon metric-purple"><?= icon('doctor') ?></span><span class="metric-neutral">Activos</span></div><strong class="metric-value">06</strong><span class="metric-label">Doctores en consulta</span><div class="metric-foot"><span>En 4 especialidades</span><span class="avatar-stack"><i>VC</i><i>RN</i><i>+4</i></span></div></article>
</section>
<div class="dashboard-grid">
    <section class="content-panel appointments-panel"><div class="panel-heading"><div><h2>Agenda de hoy</h2><p>Próximas citas de la jornada</p></div><a class="text-link" href="citas.php">Ver agenda <?= icon('arrow') ?></a></div>
        <div class="appointment-list"><?php foreach ($appointments as $appointment): ?><article class="appointment-row"><span class="appointment-time"><?= e($appointment['time']) ?></span><span class="avatar avatar-<?= e($appointment['color']) ?>"><?= e($appointment['initials']) ?></span><div class="appointment-person"><strong><?= e($appointment['name']) ?></strong><span><?= e($appointment['reason']) ?></span></div><div class="appointment-doctor"><span>Atiende</span><strong><?= e($appointment['doctor']) ?></strong></div><span class="status status-<?= e($appointment['tone']) ?>"><i></i><?= e($appointment['status']) ?></span></article><?php endforeach; ?></div>
    </section>
    <aside class="content-panel activity-panel"><div class="panel-heading"><div><h2>Actividad reciente</h2><p>Lo último en tu clínica</p></div></div><div class="activity-list">
        <div class="activity-item"><span class="activity-marker marker-teal"><?= icon('check') ?></span><div><p><strong>Cita confirmada</strong><br>Lucía Fernández confirmó su visita.</p><span>Hace 12 minutos</span></div></div>
        <div class="activity-item"><span class="activity-marker marker-blue"><?= icon('users') ?></span><div><p><strong>Nuevo paciente</strong><br>Andrés Peña fue registrado.</p><span>Hace 48 minutos</span></div></div>
        <div class="activity-item"><span class="activity-marker marker-purple"><?= icon('file') ?></span><div><p><strong>Historial actualizado</strong><br>Nota clínica añadida por Dra. Cruz.</p><span>Hace 2 horas</span></div></div>
    </div><a class="activity-link" href="historial.php">Ir al historial clínico <?= icon('arrow') ?></a></aside>
</div>
<?php renderFooter(); ?>
