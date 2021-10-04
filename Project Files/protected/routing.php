<?php
if (!array_key_exists('P', $_GET) || empty($_GET['P'])) {
    $_GET['P'] = 'home';
}

switch($_GET['P']) {
    case 'home':
        require_once NORMAL_DIR.'home.php';
    break;
    
    case 'about_us':
        require_once NORMAL_DIR.'about_us.php';
        break;

    case 'articles':
        require_once NORMAL_DIR.'articles.php';
        break;

    case 'article':
        require_once NORMAL_DIR.'article.php';
        break;

    case 'login':
        require_once USER_DIR.'login.php';
        break;
    case 'add_article':
        require_once USER_DIR.'add_article.php';
        break;


    default:
        require_once NORMAL_DIR.'home.php';
        break;
}