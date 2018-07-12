<?php

    $dsn = 'mysql:dbname=oneline_bbs;host=localhost';
    $user = 'root';
    $password = '';
    $dbh = new PDO($dsn,$user,$password);
    $dbh->query('SET NAMES utf8');

    $nickname = $_POST['nickname'];
    $comment = $_POST['comment'];
    $id = $_POST['id'];

    $sql = 'UPDATE `posts` SET `nickname` = ?, `comment` = ? WHERE `id` = ? ';
    $data[] = $nickname;
    $data[] = $comment;
    $data[] = $id;

    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    //データベースを切断
    $dbh = null;

    header("Location: bbs.php");
    exit();



