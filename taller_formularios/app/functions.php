<?php
// Biblioteca de funciones de TaskFlow

/**
 * Devuelve la clase CSS según la prioridad.
 */
function obtenerClasePrioridad($prioridad) {
    switch ($prioridad) {
        case 'alta':
            return 'priority-alta';
        case 'media':
            return 'priority-media';
        case 'baja':
            return 'priority-baja';
        default:
            return '';
    }
}

/**
 * Genera el HTML de una tarea individual.
 */
function renderizarTarea($tarea) {
    $clases = 'task-item';

    // Si está completada, añadir clase
    if ($tarea['completed']) {
        $clases .= ' completed';
    }

    // Añadir la clase según prioridad
    $clases .= ' ' . obtenerClasePrioridad($tarea['priority']);

    // Devolver el <li> listo
    return '<li class="' . $clases . '">' . htmlspecialchars($tarea['title']) . '</li>';
}
?>
