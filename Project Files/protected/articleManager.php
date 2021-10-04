<?php
    function getArticleById($id) {
        $query = "SELECT articles.id, articles.title, articles.content, articles.banner, 
            users.username, articles.genre, articles.create_date, articles.featured FROM articles INNER JOIN users ON articles.author = users.id WHERE articles.id = :id";
        $params = [ ':id' => $id ];

        require_once DATABASE_CONTROLLER;
        $record = getRecord($query, $params);

        if (empty($record)) {
            return false;
        }
        else {
            return $record;
        }
    }

    
    function getArticles() {
        $query = "SELECT articles.id, articles.title, articles.content, articles.banner, 
        users.username, articles.genre, articles.create_date, articles.featured 
        FROM articles INNER JOIN users ON articles.author = users.id";

        require_once DATABASE_CONTROLLER;
        return getList($query);
    }

    
    function getLatestArticles() {
        $query = "SELECT articles.id, articles.title, articles.content, articles.banner, 
        users.username, articles.genre, articles.create_date, articles.featured 
        FROM articles INNER JOIN users ON articles.author = users.id ORDER BY create_date LIMIT 4";

        require_once DATABASE_CONTROLLER;
        return getList($query);
    }

    function addArticle($title, $content, $banner, $author, $genre, $featured) {
        $query = "INSERT INTO articles (title, content, banner, author, genre, featured) VALUES (:title, :content, :banner, :author, :genre, :featured)";
        $params = [
            ':title' => $title,
            ':content' => $content,
            ':banner' => $banner,
            ':author' => $author,
            ':genre' => $genre,
            ':featured' => $featured
        ];

        require_once DATABASE_CONTROLLER;
        return executeDML($query, $params);
    }

