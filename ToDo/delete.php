<?php
require_once 'app/init.php';

if(isset($_GET['del'])) {
    $id = $_GET['del'];
    $deleteQuery = $db -> prepare("
        DELETE FROM items WHERE id=$id
    ");
    $deleteQuery->execute([
        'name' => $name,
        'user' => $_SESSION['user_id']
    ]);

    }

header('Location: index.php');