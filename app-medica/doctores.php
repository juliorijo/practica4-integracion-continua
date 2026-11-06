<?php
$currentPage = 'doctores.php';
require __DIR__ . '/includes/config.php';
renderHeader('Doctores', 'Conoce al equipo médico y sus horarios de atención.');
$doctors = [
    ['name' => 'Valeria Cruz', 'title' => 'Medicina general', 'license' => 'Exequátur 28471', 'schedule' => 'Lun – Vie, 08:00 – 14:00', 'patients' => '24 citas esta semana', 'initials' => 'VC', 'color' => 'teal', 'prefix' => 'Dra.'],
    ['name' => 'Rafael Núñez', 'title' => 'Cardiología', 'license' => 'Exequátur 19308', 'schedule' => 'Lun – Jue, 09:00 – 16:00', 'patients' => '18 citas esta semana', 'initials' => 'RN', 'color' => 'navy', 'prefix' => 'Dr.'],
    ['name' => 'Elena Guzmán', 'title' => 'Pediatría', 'license' => 'Exequátur 31652', 'schedule' => 'Mar – Sáb, 08:30 – 15:00', 'patients' => '21 citas esta semana', 'initials' => 'EG', 'color' => 'rose', 'prefix' => 'Dra.'],
    ['name' => 'Tomás Herrera', 'title' => 'Dermatología', 'license' => 'Exequátur 22819', 'schedule' => 'Lun – Vie, 10:00 – 17:00', 'patients' => '16 citas esta semana', 'initials' => 'TH', 'color' => 'gold', 'prefix' => 'Dr.'],
    ['name' => 'Mariana Ortiz', 'title' => 'Ginecología', 'license' => 'Exequátur 30147', 'schedule' => 'Lun – Mié – Vie, 08:00 – 13:00', 'patients' => '19 citas esta semana', 'initials' => 'MO', 'color' => 'purple', 'prefix' => 'Dra.'],
    ['name' => 'Daniel Reyes', 'title' => 'Medicina interna', 'license' => 'Exequátur 25763', 'schedule' => 'Lun – Vie, 09:00 – 15:00', 'patients' => '22 citas esta semana', 'initials' => 'DR', 'color' => 'blue', 'prefix' => 'Dr.'],
];
?>
<section class="summary-strip doctor-summary"><div><span class="strip-number">06</span><span>doctores en el equipo</span></div><div class="strip-separator"></div><div><span class="strip-number">04</span><span>especialidades</span></div><div class="strip-spacer"></div><button class="button button-primary js-demo-action" type="button" data-message="El formulario está listo para conectar a una base de datos."><?= icon('plus') ?> Añadir doctor</button></section>
<div class="doctor-grid"><?php foreach ($doctors as $doctor): ?><article class="doctor-card" data-search-row><div class="doctor-card-top"><span class="avatar doctor-avatar avatar-<?= e($doctor['color']) ?>"><?= e($doctor['initials']) ?></span><span class="doctor-online"><i></i> Disponible</span><button class="row-action js-demo-action" type="button" aria-label="Opciones de <?= e($doctor['name']) ?>" data-message="Las opciones estarán disponibles al conectar datos.">•••</button></div><h2><?= e($doctor['prefix'] . ' ' . $doctor['name']) ?></h2><span class="specialty-tag"><?= e($doctor['title']) ?></span><p class="doctor-license"><?= e($doctor['license']) ?></p><div class="doctor-schedule"><span><?= icon('clock') ?> Horario</span><strong><?= e($doctor['schedule']) ?></strong></div><div class="doctor-card-footer"><span><?= e($doctor['patients']) ?></span><a href="citas.php" aria-label="Agendar con <?= e($doctor['name']) ?>"><?= icon('arrow') ?></a></div></article><?php endforeach; ?></div>
<?php renderFooter(); ?>
