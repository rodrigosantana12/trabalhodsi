<?php
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=kvm', 'root', '');
    } catch(PDOException $e) {
        die('Erro ao conectar com o MySQL: ' . $e->getMessage());
    }
    $pdo->exec('set names utf8');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>