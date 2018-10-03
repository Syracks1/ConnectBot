<?php
     include '../html/poll.html';
     include '../classes/DB.php';

     // $pdo = new PDO('mysql:host=127.0.0.1;dbname=connectbot;charset=utf8', 'root', '');
     // $sql = 'SELECT * FROM poll';
     // $statement = $pdo->prepare($sql);
     // $statement->execute();
     // $employee = $statement->fetchAll(PDO::FETCH_OBJ);

     // Below code hides errors. PLEASE enable during coding
     // error_reporting(E_ERROR | E_PARSE);

     $age = $_POST['age'];
     $buy = $_POST['buy'];
     $like = $_POST['like'];

     if($age != null && $buy != null && $like !=null){
          DB::query('INSERT INTO poll(age, buy, rec) VALUES (:age, :buy, :rec)', array(':age'=>$age, ':buy'=>$buy, ':rec'=>$like));
          $echo = 'Success!';
     }

     echo $age . '<br />' . $buy . '<br />' . $like;
?>
