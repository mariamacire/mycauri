<?php
    try {
        $db = new PDO("mysql:host=localhost;dbname=laravel", "root", "");
        // set the PDO error mode to exception
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $db->query("SELECT * FROM agences");
        $result = $query->fetchAll(PDO::FETCH_NUM);
        

        
        $return = json_encode($result);
        echo $return;
        flush();
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }

     
?>