<?php
/**
 * CLC — Club Deportivo La Católica
 * Archivo principal para entorno PHP / Apache XAMPP
 */

// Si se accede directamente a index.php, servir index.html
if (file_exists(__DIR__ . '/index.html')) {
    include __DIR__ . '/index.html';
} else {
    echo "Página en construcción.";
}

