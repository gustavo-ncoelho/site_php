<?php

$dbPath = __DIR__."/banco.sqlite";
$pdo = new PDO("sqlite:$dbPath");

$url = filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL);
if ($url === false) {
    header('Location: /?success=0');
    exit();
}

$title = filter_input(INPUT_POST,'title');
if ($title === false) {
    header('Location: /?success=0');
    exit();
}

$sql = "INSERT INTO videos (url, title) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(1, $url);
$stmt->bindValue(2, $title);

if ($stmt->execute() === false){
    header('Location: /?success=0');     // o header é formado quando se envia uma resposta pro navegador, seja qual for
} else{
    header('Location: /?success=1');
}

