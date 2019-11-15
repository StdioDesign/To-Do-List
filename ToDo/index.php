<?php

require_once 'app/init.php';

if(!isset($_SESSION['id'])){
    header("location:login.php");
    exit;
}

$itemsQuery = $db->prepare("
    SELECT id, name, done 
    FROM items
    WHERE user = :user      
");

$itemsQuery->execute([
    'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="css/list.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Tarefas</title>
    
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script&display=swap" rel="stylesheet">
    

</head>
<body>
    <div class="list">
        <h1 class="header">Lista de Tarefas</h1>

        <?php if(!empty($items)):  ?>
        <ul class="items">
            <?php foreach($items as $item): ?>
                <li>
                    <span class="item<?php echo $item['done'] ? ' done' : ''?>"><?php echo $item['name'];?></span><br>
                    <?php if(!$item['done']): ?>
                        <a href="mark.php?as=done&item=<?php echo $item['id']; ?>" class="done-button">Concluído</a>
                    <?php endif; ?>
                    <a href="delete.php?del=<?php echo $item['id']; ?>" class="delete-button">Delete</a>
                </li>
                <?php endforeach; ?>
        </ul>
        <?php else: ?>
            <p>Você não possui nenhuma tarefa adicionada</p>
        <?php endif; ?>

        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="Digite um novo item" class="input" autocomplete="off">
            <input type="submit" value="Add" class="submit">
        </form>
            <a href="sair.php" class="sair">Sair</a>
    </div>
</body>
</html>