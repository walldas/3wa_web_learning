<?php

include 'helpers.php';
// pasiimti duomenis is GET
$id = $_GET['id'];
$movie = getMovieById($id); // arba getMovieById($_GET['id']);
// jeigu yra perduota forma




if (count($_POST) > 0) {
    // dd($_FILES);
    $uploaddir='./upload/';
    $uploadFile=$uploaddir.$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],$uploadFile);



    $sql = "UPDATE movies
        SET 
        trailer = :trailer, 
        title = :title, 
        description = :description, 
        length = :length, 
        year = :year,
         img = :img
        WHERE id = :id";
    // duomenų atnaujinimas per mySQL
    
    $connection=creatConection();
    $query = $connection->prepare($sql);
    // $query->bindValue(':title§', $_POST['title§'], PDO::PARAM_STR);
    // $query->bindValue(':trailer', $_POST['trailer'], PDO::PARAM_STR);
    // $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute([
        ':trailer' => $_POST['trailer'],
        ':title' => $_POST['title'],
        ':description' => $_POST['description'],
        ':img' => $_FILES['img']['name'],
        ':length' => $_POST['length'],
        ':year' => $_POST['year'],
        ':id' => $id
    ]);
    // redirect'as į įrašo peržiūrą
   	header("Location: show.php?id=".$id);
    exit;
}
include 'views/upload.view.php';