<?php include 'header.php'; ?>

<h2>Mis Tareas</h2>
<?php foreach ($tareas as $tarea): ?>
    <div class="tarea <?php echo obtenerClasePrioridad($tarea['prioridad']); ?>">
        <h3><?php echo $tarea['titulo']; ?></h3>
        <p>Completado: <?php echo $tarea['completado'] ? 'Sí' : 'No'; ?></p>
    </div>
<?php endforeach; ?>

<?php include 'footer.php'; ?>