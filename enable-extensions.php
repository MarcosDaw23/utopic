<?php
// Mostrar extensiones cargadas
echo "Extensiones PHP cargadas:\n";
$extensions = get_loaded_extensions();
foreach ($extensions as $extension) {
    echo "- $extension\n";
}

// Verificar extensiones críticas
$requiredExtensions = ['openssl', 'mbstring', 'pdo_mysql'];
echo "\nVerificación de extensiones críticas:\n";
foreach ($requiredExtensions as $ext) {
    if (extension_loaded($ext)) {
        echo "✅ $ext: Habilitada\n";
    } else {
        echo "❌ $ext: No habilitada\n";
    }
}

// Mostrar información de configuración de PHP
echo "\nRuta del archivo php.ini en uso: " . php_ini_loaded_file() . "\n";

echo "\nPara habilitar estas extensiones, edita el archivo php.ini en " . php_ini_loaded_file() . " y descomenta estas líneas:\n";
echo "extension=openssl\n";
echo "extension=mbstring\n";
echo "extension=pdo_mysql\n";
echo "\nLuego reinicia tu servidor web.\n";
?> 