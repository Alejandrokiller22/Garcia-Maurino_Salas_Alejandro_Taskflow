<?php
// Bloque de configuración inicial (puedes conservarlo)
define("SITE_NAME", "TaskFlow");
$pageTitle = SITE_NAME . " - Página de Inicio";
$userName = "Alejandro Garcia-Mauriño Salas";
$userAge = 19;
$isPremiumUser = true;

// Paso 2: Crear array de tareas
$tasks = [
    ['title' => 'Estudiar PHP', 'completed' => false, 'priority' => 'alta'],
    ['title' => 'Hacer la compra', 'completed' => true, 'priority' => 'media'],
    ['title' => 'Pasear al perro', 'completed' => false, 'priority' => 'baja'],
    ['title' => 'Terminar el proyecto', 'completed' => true, 'priority' => 'alta'],
    ['title' => 'Llamar al médico', 'completed' => false, 'priority' => 'media']
];
?>

<?php include '../app/views/header.php'; ?>

<h1>Bienvenido a <?php echo SITE_NAME; ?></h1>

<h2>Perfil del Usuario</h2>
<p><strong>Nombre:</strong> <?php echo $userName; ?></p>
<p><strong>Edad:</strong> <?php echo $userAge; ?> años</p>
<p><strong>Estado de la cuenta:</strong> Usuario <?php echo $isPremiumUser ? "Premium" : "Estándar"; ?></p>

<h2>Tareas Pendientes</h2>
<ul>
    <?php foreach ($tasks as $task): ?>
        <?php
        $taskClasses = 'task-item';
        if ($task['completed']) $taskClasses .= ' completed';

        switch ($task['priority']) {
            case 'alta': $taskClasses .= ' priority-alta'; break;
            case 'media': $taskClasses .= ' priority-media'; break;
            case 'baja': $taskClasses .= ' priority-baja'; break;
        }
        ?>
        <li class="<?= $taskClasses; ?>">
            <?= $task['title']; ?>
        </li>
    <?php endforeach; ?>
</ul>

<?php include '../app/views/footer.php'; ?>

