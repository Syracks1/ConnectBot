<?php
     include '../html/poll2.html';
     include '../classes/DB.php';

     // $pdo = new PDO('mysql:host=127.0.0.1;dbname=connectbot;charset=utf8', 'root', '');
     // $sql = 'SELECT * FROM poll';
     // $statement = $pdo->prepare($sql);
     // $statement->execute();
     // $employee = $statement->fetchAll(PDO::FETCH_OBJ);

     // Below code hides errors. PLEASE enable during coding
     error_reporting(E_ERROR | E_PARSE);

     // Pre-Questions

     $inh_jn = $_POST['inh_jn'];
     $inh_ex = $_POST['inh_ex'];
     $expect = $_POST['expect'];

     // UI Questions

     $ui = $_POST['ui'];
     $ui_men = $_POST['ui_men'];
     $ui_top = $_POST['ui_top'];
     $ui_irr = $_POST['ui_irr'];
     $ui_volg = $_POST['ui_volg'];
     $ui_am = $_POST['ui_am'];
     $ui_mis = $_POST['ui_mis'];
     $ui_pas = $_POST['ui_pas'];
     $ui_ov = $_POST['ui_ov'];
     $ui_and = $_POST['ui_and'];

     // AI Questions

     $ai = $_POST['ai'];
     $ai_dif = $_POST['ai_dif'];
     $ai_win = $_POST['ai_win'];
     $ai_erv = $_POST['ai_erv'];
     $ai_mens = $_POST['ai_mens'];
     $ai_eer = $_POST['ai_eer'];
     $ai_vaker = $_POST['ai_vaker'];


     if($inh_jn != null && $inh_ex != null && $expect != null && $ui != null){
          DB::query('INSERT INTO pre(inh_jn, inh_ex, expect) VALUES (:inh_jn, :inh_ex, :expect)', array(':inh_jn'=>$inh_jn, ':inh_ex'=>$inh_ex, ':expect'=>$expect));
          DB::query('INSERT INTO ui(ui, ui_men, ui_top, ui_irr, ui_volg, ui_am, ui_mis, ui_pas, ui_ov, ui_and) VALUES (:ui, :ui_men, :ui_top, :ui_irr, :ui_volg, :ui_am, :ui_mis, :ui_pas, :ui_ov, :ui_and)', array(':ui'=>$ui,
          ':ui_men'=>$ui_men, ':ui_top'=>$ui_top, 'ui_irr'=>$ui_irr, 'ui_volg'=>$ui_volg, ':ui_am'=>$ui_am, ':ui_mis'=>$ui_mis, ':ui_pas'=>$ui_pas, ':ui_ov'=>$ui_ov, ':ui_and'=>$ui_and));
          DB::query('INSERT INTO ai(ai, ai_dif, ai_win, ai_erv, ai_mens, ai_eer, ai_vaker) VALUES(:ai, :ai_dif, :ai_win, :ai_erv, :ai_mens, :ai_eer, :ai_vaker)',
          array(':ai'=>ai, ':ai_dif'=>ai_dif, ':ai_win'=>$ai_win, ':ai_erv'=>$ai_erv, ':ai_mens'=>$ai_mens, ':ai_eer'=>$ai_eer, ':ai_vaker'=>$ai_vaker));
          $echo = 'Success!';
     }

     // DB::query("SELECT age, buy, SUM(rec = 'Very likely') AS 'Very likely' FROM poll");
     // echo $age . '<br />' . $buy . '<br />' . $like;
?>
