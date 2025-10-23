<?php
// Problema 1.1: Perfil de Usuario
$nombre = "Alejandro";
$apellidos = "Maurino";
$edad = 19;
$altura = 1.78;
$esEstudiante = true;

echo "<h3>Problema 1.1: Perfil de Usuario</h3>";
echo "Nombre: $nombre<br>";
echo "Apellidos: $apellidos<br>";
echo "Edad: $edad<br>";
echo "Altura: $altura m<br>";
echo "Es estudiante: " . ($esEstudiante ? "Sí" : "No") . "<hr>";
?>

<?php
//Problema 1.2: Información de un Producto
$productoNombre = "Camiseta";
$productoPrecio = 25.99;
$productoStock = 50;
$productoOferta = true;

echo "<h3>Problema 1.2: Información de usuario</h3>";
echo "Nombre: $productoNombre<br>";
echo "Precio: $productoPrecio $<br>";
echo "Stock disponible: $productoStock<br>";
echo "Está en oferta: ". ($productoOferta? "Sí" : "No"). "<hr>";
?>

<?php
//Problema 1.3: Constantes de la Aplicación
define ("NOMBRE_SITIO", "Mi Tienda Online");
define ("VERSION_APP","1.0");

echo "<h3>Problema 1.3: Constantes de la Aplicacíon</h3>";
echo "Nombre del sitio: " . NOMBRE_SITIO ."<br>";
echo "Versión de la app: " . VERSION_APP ."<hr>";
?>

<?php
//Problema 2.1: Calculadora Básica</h3>";
$num1=10;
$num2= 5;

echo "<h3>Problema 2.1: Calculadora Básica</h3>";
echo "$num1 + $num2 = " . ($num1+$num2). "<br>";
echo "$num1 - $num2 = " . ($num1-$num2). "<br>";
echo "$num1 * $num2 = " . ($num1*$num2). "<br>";
echo "$num1 / $num2 = " . ($num1/$num2). "<br>";
?>

<?php
//Problema 2.2: Actualización de Stock
$stock = 100;
echo "<h3>Problema 2.2: Actualización de Stock</h3>";
$stock -=25;
echo "Después de vender 25 unidades: $stock<br>";
$stock += 50;
echo "Después de recibir 50 unidades: $stock<hr>";
?>

<?php
//Problema 2.3: Concatenación de textos
$nombreProfesor = "Oskar";
$apellidoProfesor = "Calvo";
$curso = "Desarrollo Web en Entorno Servidor";

$fraseCompleta = "El profesor $nombreProfesor $apellidoProfesor imparte el curso de $curso";
echo "<h3>Problema 2.3: Concatenación de Textos</h3>";
echo $fraseCompleta . "<hr>";
?>

<?php
//Problema 2.4: Comparaciones Simples
$edad = 20;
$edadMinima = 18;
$contraseñaGuardada = "1234";
$contraseñaUsuario = "123";

echo "<h3>Problema 2.4: Comparaciones Simples</h3>";
var_dump($edad >= $edadMinima);
var_dump($contraseñaGuardada === $contraseñaUsuario);
echo "<hr>";
?>

<?php
//Problema 2.5: ¿Par o Impar?
$numero = 7;
echo "<h3>Problema 2.5: ¿Par o Impar?</h3>";
if ($numero % 2 ==0) {
    echo "El número $numero es par";
}else{
    echo "El número $numero es impar";
}
echo "<hr>";
?>

<?php
//Problema 3,1: Control de Acceso
$edad =17;
echo "<h3>Problema 3.1: Control de Acceso</h3>";
if ($edad >=18) {
    echo "Puedes pasar";
} else{
    echo "No puedes pasar";
}
echo "<hr>";
?>

<?php
//Problema 3.2: Calificación de Examen</h3>";
$nota=7.5;
if ($nota >= 9) {
    echo "Sobresaliente";
}elseif ($nota >=7) {
    echo "Notable";
}elseif ($nota >=5) {
    echo "Aprobado";
}else{
    echo "Suspenso";
}
echo "<hr>";
?>

<?php
//Problema 3.3: Menú del Día con switch
$diaSemana = "lunes";
echo "<h3>Problema 3.3: Menú del Día</h3>";
switch (strtolower($diaSemana)) {
    case "lunes":
        echo "Lentejas";
        break;
    case "miércoles":
        echo "Paella";
        break;
    case "viernes":
        echo "Pescado al horno";
        break;
    default:
        echo "Hoy no hay menú especial";
}
echo "<hr>";

?>

<?php
//Problema 3.4: Verificación de Usuario Avanzada</h3>";
if ($rolUsuario === "admin" && $usuarioActivo) {
    echo "Acceso concedido";
} else {
    echo "Acceso denegado";
}
echo"<hr>";
?>

<?php
// Problema 4.1: Tabla de Multiplicar del 7</h3>";
echo "<h3>Problema 4.1: Tabla de Multiplicar del 7</h3>";
for ($i = 1; $i <= 10; $i++) {
    echo "7 x $i = " . (7 * $i) . "<br>";
}
echo "<hr>";
?>

<?php
//Probelema 4.2: Cuenta Atrás para Año Nuevo
echo "<h3>Problema 4.2: Cuenta Atrás</h3>";
$contador = 10;
while ($contador >= 1) {
    echo "$contador<br>";
    $contador--;
}
echo "¡Feliz Año Nuevo!";
?>

<?php
//Problema 4.3: Recorrer Nombres
$alumnos = ["Ana", "Juan", "Pedro", "Sofía"];
echo "<h3>Problema 4.3: Recorrer Nombres</h3>";
foreach ($alumnos as $alumno) {
    echo "Hola, $alumno<br>";
}
echo "<hr>";
?>

<?php
//Problema 4.4: Listado de Productos
$productos = [
    ["nombre" => "Teclado", "precio"  => 100],
    ["nombre" => "Ratón", "precio"  => 25],
    ["nombre" => "Monitor", "precio" =>  200],
];
echo "<h3>Problema 4.4: Listado de Productos</h3>";
foreach ($productos as $producto) {
    echo "Producto: " . $producto["nombre"] . ", Precio: " . $producto["precio"] . " €<br>";
}
echo "<hr>";
?>

<?php
// Problema 5.1: Ficha de Usuario
$usuario = [
    "nombre" => "Alejandro",
    "edad" => 19,
    "email" => "alejandro@example.com",
    "estudiante" => true
];
echo "<h3>Problema 5.1: Ficha de Usuario</h3>";
echo "Nombre: " . $usuario["nombre"] . "<br>";
echo "Edad: " . $usuario["edad"] . "<br>";
echo "Email: " . $usuario["email"] . "<br>";
echo "Estudiante: " . ($usuario["estudiante"] ? "Sí" : "No") . "<hr>";
?>

<?php
// Problema 5.2: Filtrado de Notas
$notas = [8.5, 4.2, 7.0, 9.8, 5.5, 3.9];
echo "<h3>Problema 5.2: Filtrado de Notas</h3>";
foreach ($notas as $nota) {
    if ($nota >= 5) {
        echo "Aprobado: $nota<br>";
    }
}
echo "<hr>";ç
?>

<?php
// Problema 5.3: Lista de la Compra Avanzada
$listaCompra = [
    "Frutas" => ["Manzanas", "Plátanos", "Naranjas"],
    "Lácteos" => ["Leche", "Queso"],
    "Limpieza" => ["Detergente", "Lejía"]
];
echo "<h3>Problema 5.3: Lista de la Compra Avanzada</h3>";
foreach ($listaCompra as $categoria => $productosCategoria) {
    echo "<strong>$categoria:</strong><br>";
    foreach ($productosCategoria as $producto) {
        echo "- $producto<br>";
    }
}
echo "<hr>";
?>








