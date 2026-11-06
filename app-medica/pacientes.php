<?php
$currentPage = 'pacientes.php';
require __DIR__ . '/includes/config.php';
renderHeader('Pacientes', 'Consulta el directorio y encuentra a cada persona en segundos.');
$patients = [
    ['name' => 'Lucía Fernández', 'email' => 'lucia.fernandez@email.com', 'phone' => '(809) 555-0142', 'last' => 'Hoy, 08:30', 'status' => 'Activo', 'initials' => 'LF', 'color' => 'lavender'],
    ['name' => 'Mateo Castillo', 'email' => 'mateo.castillo@email.com', 'phone' => '(809) 555-0188', 'last' => 'Hoy, 09:15', 'status' => 'Activo', 'initials' => 'MC', 'color' => 'peach'],
    ['name' => 'Camila Santos', 'email' => 'camila.santos@email.com', 'phone' => '(829) 555-0104', 'last' => 'Ayer, 15:00', 'status' => 'Activo', 'initials' => 'CS', 'color' => 'mint'],
    ['name' => 'Diego Morales', 'email' => 'diego.morales@email.com', 'phone' => '(849) 555-0161', 'last' => '12 oct. 2026', 'status' => 'Activo', 'initials' => 'DM', 'color' => 'blue'],
    ['name' => 'Sofía Jiménez', 'email' => 'sofia.jimenez@email.com', 'phone' => '(809) 555-0137', 'last' => '10 oct. 2026', 'status' => 'Inactivo', 'initials' => 'SJ', 'color' => 'rose'],
    ['name' => 'Andrés Peña', 'email' => 'andres.pena@email.com', 'phone' => '(829) 555-0196', 'last' => 'Hoy, 11:30', 'status' => 'Activo', 'initials' => 'AP', 'color' => 'gold'],
];
?>
<section class="summary-strip"><div><span class="strip-number">1,284</span><span>pacientes en total</span></div><div class="strip-separator"></div><div><span class="strip-number">96</span><span>nuevos este mes</span></div><div class="strip-spacer"></div><button class="button button-primary js-demo-action" type="button" data-message="El registro está listo para conectar a una base de datos."><?= icon('plus') ?> Nuevo paciente</button></section>
<section class="content-panel table-panel"><div class="table-toolbar"><div><h2>Directorio de pacientes</h2><p>Información de contacto y última visita</p></div><label class="search-field"><?= icon('search') ?><input type="search" placeholder="Buscar paciente..." aria-label="Buscar paciente" data-table-search></label></div>
    <div class="table-scroll"><table class="data-table"><thead><tr><th>Paciente</th><th>Teléfono</th><th>Última visita</th><th>Estado</th><th><span class="sr-only">Acciones</span></th></tr></thead><tbody>
    <?php foreach ($patients as $patient): ?><tr data-search-row><td><div class="table-person"><span class="avatar avatar-<?= e($patient['color']) ?>"><?= e($patient['initials']) ?></span><span><strong><?= e($patient['name']) ?></strong><small><?= e($patient['email']) ?></small></span></div></td><td><?= e($patient['phone']) ?></td><td><?= e($patient['last']) ?></td><td><span class="status status-<?= $patient['status'] === 'Activo' ? 'confirmed' : 'neutral' ?>"><i></i><?= e($patient['status']) ?></span></td><td><button class="row-action js-demo-action" type="button" aria-label="Ver ficha de <?= e($patient['name']) ?>" data-message="La ficha se mostrará al conectar datos.">•••</button></td></tr><?php endforeach; ?>
    </tbody></table><p class="empty-search" hidden>No hay pacientes que coincidan con la búsqueda.</p></div>
    <div class="table-footer"><span>Mostrando 6 de 1,284 pacientes</span><div class="pagination"><button type="button" disabled aria-label="Página anterior">‹</button><button type="button" class="page-current" aria-current="page">1</button><button type="button">2</button><button type="button">3</button><span>…</span><button type="button">214</button><button type="button" aria-label="Página siguiente">›</button></div></div>
</section>
<?php renderFooter(); ?>
