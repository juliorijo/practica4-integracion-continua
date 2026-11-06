<?php
date_default_timezone_set('America/Santo_Domingo');

$currentPage = $currentPage ?? 'index.php';

$navigation = [
    ['label' => 'Resumen', 'href' => 'index.php', 'icon' => 'grid'],
    ['label' => 'Pacientes', 'href' => 'pacientes.php', 'icon' => 'users'],
    ['label' => 'Doctores', 'href' => 'doctores.php', 'icon' => 'doctor'],
    ['label' => 'Agendar cita', 'href' => 'citas.php', 'icon' => 'calendar'],
    ['label' => 'Historial clínico', 'href' => 'historial.php', 'icon' => 'file'],
];

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function icon(string $name, string $class = ''): string
{
    $paths = [
        'grid' => '<rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>',
        'users' => '<path d="M16 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="10" cy="7" r="4"/><path d="M20 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>',
        'doctor' => '<path d="M12 8v4l2 2"/><circle cx="12" cy="12" r="9"/><path d="M8 3.5V2m8 1.5V2"/>',
        'calendar' => '<rect x="3" y="5" width="18" height="16" rx="2"/><path d="M16 3v4M8 3v4M3 11h18"/>',
        'file' => '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8"/>',
        'search' => '<circle cx="11" cy="11" r="7"/><path d="m20 20-4-4"/>',
        'plus' => '<path d="M12 5v14M5 12h14"/>',
        'arrow' => '<path d="M5 12h14m-7-7 7 7-7 7"/>',
        'clock' => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'check' => '<path d="m5 12 4 4L19 6"/>',
        'menu' => '<path d="M4 6h16M4 12h16M4 18h16"/>',
    ];
    $path = $paths[$name] ?? $paths['grid'];

    return '<svg class="icon ' . e($class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}

function renderHeader(string $title, string $description = ''): void
{
    global $currentPage, $navigation;
    $months = [
        'January' => 'ene.', 'February' => 'feb.', 'March' => 'mar.', 'April' => 'abr.',
        'May' => 'may.', 'June' => 'jun.', 'July' => 'jul.', 'August' => 'ago.',
        'September' => 'sep.', 'October' => 'oct.', 'November' => 'nov.', 'December' => 'dic.',
    ];
    ?>
    <!doctype html>
    <html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#f4f8fa">
        <title>MediCitas - Panel Administrativo</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="css/sb-admin-2.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <div class="app-shell">
        <aside class="sidebar" id="sidebar">
            <a class="brand" href="index.php" aria-label="MediCitas, ir al resumen">
                <span class="brand-mark"><span></span><span></span></span>
                <span class="brand-name">Medi<span>Citas</span><small>Panel clínico</small></span>
            </a>
            <div class="nav-caption">Espacio de trabajo</div>
            <nav class="primary-nav" aria-label="Navegación principal">
                <?php foreach ($navigation as $item): ?>
                    <a class="nav-link<?= $currentPage === $item['href'] ? ' is-active' : '' ?>" href="<?= e($item['href']) ?>"<?= $currentPage === $item['href'] ? ' aria-current="page"' : '' ?>>
                        <?= icon($item['icon']) ?><span><?= e($item['label']) ?></span>
                    </a>
                <?php endforeach; ?>
            </nav>
            <div class="sidebar-bottom">
                <div class="clinic-card"><span class="clinic-emblem">+</span><div><strong>Clínica Central</strong><small>Administración</small></div></div>
                <div class="sidebar-profile"><span class="avatar avatar-navy">AR</span><div><strong>Andrea Reyes</strong><small>Administradora</small></div><button class="icon-button profile-menu" type="button" aria-label="Opciones de perfil">•••</button></div>
            </div>
        </aside>
        <main class="main-content">
            <header class="topbar">
                <button class="icon-button menu-button" type="button" aria-label="Abrir navegación" aria-expanded="false" aria-controls="sidebar"><?= icon('menu') ?></button>
                <div class="breadcrumb"><span>Clínica Central</span><span class="breadcrumb-slash">/</span><strong><?= e($title) ?></strong></div>
                <div class="topbar-tools"><span class="today-label"><?= date('d') ?> <?= $months[date('F')] ?> <?= date('Y') ?></span><button class="icon-button notification-button" type="button" aria-label="Notificaciones"><span class="notification-dot"></span><svg class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"/><path d="M10 21h4"/></svg></button><span class="avatar avatar-teal">AR</span></div>
            </header>
            <div class="page-wrap">
                <div class="page-heading"><div><h1><?= e($title) ?></h1><?php if ($description !== ''): ?><p><?= e($description) ?></p><?php endif; ?></div></div>
    <?php
}

function renderFooter(): void
{
    ?>
                <footer class="page-footer"><span>MediCitas <span class="footer-divider">/</span> Gestión clara, atención cercana.</span><span>Entorno de demostración</span></footer>
            </div>
        </main>
    </div>
    <div class="toast" role="status" aria-live="polite"></div>
    <script src="assets/js/app.js"></script>
    </body>
    </html>
    <?php
}
?>
