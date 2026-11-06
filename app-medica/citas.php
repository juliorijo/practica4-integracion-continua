<?php
$currentPage = 'citas.php';
require __DIR__ . '/includes/config.php';
renderHeader('Agendar cita', 'Organiza cada visita con el paciente y especialista indicados.');
?>
<div class="booking-layout">
    <section class="content-panel booking-panel"><div class="panel-heading"><div><h2>Nueva cita</h2><p>Completa los datos para reservar un espacio.</p></div><span class="form-step">Formulario</span></div>
        <form class="booking-form" data-demo-form>
            <label class="form-field form-full"><span>Paciente</span><select name="patient" required><option value="">Selecciona un paciente</option><option>Lucía Fernández</option><option>Mateo Castillo</option><option>Camila Santos</option><option>Diego Morales</option><option>Sofía Jiménez</option><option>Andrés Peña</option></select></label>
            <label class="form-field"><span>Especialista</span><select name="doctor" required><option value="">Selecciona un doctor</option><option>Dra. Valeria Cruz · Medicina general</option><option>Dr. Rafael Núñez · Cardiología</option><option>Dra. Elena Guzmán · Pediatría</option><option>Dr. Tomás Herrera · Dermatología</option><option>Dra. Mariana Ortiz · Ginecología</option><option>Dr. Daniel Reyes · Medicina interna</option></select></label>
            <label class="form-field"><span>Motivo de consulta</span><select name="reason" required><option value="">Selecciona el motivo</option><option>Consulta general</option><option>Seguimiento</option><option>Evaluación inicial</option><option>Procedimiento</option></select></label>
            <label class="form-field"><span>Fecha</span><input type="date" name="date" required></label>
            <label class="form-field"><span>Hora</span><select name="time" required><option value="">Selecciona la hora</option><option>08:00</option><option>08:30</option><option>09:00</option><option>09:30</option><option>10:00</option><option>10:30</option><option>11:00</option><option>11:30</option><option>13:00</option><option>13:30</option><option>14:00</option><option>14:30</option></select></label>
            <label class="form-field form-full"><span>Nota para la consulta <small>Opcional</small></span><textarea name="note" rows="3" placeholder="Información útil para el especialista..."></textarea></label>
            <div class="form-actions form-full"><span>Los cambios se mostrarán como demostración local.</span><button class="button button-primary" type="submit"><?= icon('check') ?> Confirmar cita</button></div>
        </form>
    </section>
    <aside class="booking-aside"><section class="content-panel day-card"><div class="panel-heading"><div><h2>Disponibilidad</h2><p>Horarios de la clínica</p></div><span class="day-icon"><?= icon('calendar') ?></span></div><div class="day-progress"><div><span>Espacios ocupados</span><strong>12 de 18</strong></div><span class="progress-track"><i></i></span><small>Quedan 6 espacios libres hoy</small></div><div class="time-slots"><span class="slot-label">Próximos horarios</span><div><span>10:00</span><span>10:30</span><span class="slot-busy">11:00</span><span>11:30</span><span>13:00</span><span>13:30</span></div></div></section><section class="booking-tip"><span class="tip-mark">i</span><p><strong>Antes de confirmar</strong><br>Verifica que el especialista esté disponible y que el teléfono del paciente esté actualizado.</p></section></aside>
</div>
<?php renderFooter(); ?>
