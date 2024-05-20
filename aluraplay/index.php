<?php

declare (strict_types=1);

if (!array_key_exists('PATH_INFO', $_SERVER) || $_SERVER['PATH_INFO'] === '/'){
    require_once 'listagemVideos.php';
} elseif ($_SERVER['PATH_INFO'] === '/novoVideo') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET'){
        require_once 'formulario.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'novoVideo.php';
    }
} elseif ($_SERVER['PATH_INFO'] === '/editarVideo') {
    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        require_once 'formulario.php';
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'editarVideo.php';
    }
} elseif ($_SERVER['PATH_INFO'] === '/removerVideo') {
    require_once 'removerVideo.php';
}