<?php
    
    $partes = isset($_GET['p']) ? strtolower($_GET['p']) : 'home';
    
    require_once 'views/head.php';
    
    require_once 'views/' . $partes . '.php';
    
    require_once 'views/footer.php';
    
    
?>