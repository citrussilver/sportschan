<?php

//date_default_timezone_set('Asia/Tokyo');
mb_internal_encoding('UTF-8');
mb_http_output('UTF-8');
mb_http_input('UTF-8');
mb_language('uni');
mb_regex_encoding('UTF-8');
ob_start('mb_output_handler');

   function dbSetsuzoku ()
    {
    	$setsu =null;
     	$host = 'localhost';
     	$db = 'sports';
     	$usr = 'root';
     	$pwd = 	'';

    	$dsn = 'mysql:host='.$host.';dbname='.$db.';charset=utf8';

              try{
                  $setsu = new PDO($dsn, $usr, $pwd);

                  if ($setsu == null){
                      print('接続に失敗しました。<br>');
                  }else{
                  	//print('接続に成功しました。<br>');
                  	$setsu->query('SET NAMES utf8');
                  	$setsu->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  }
              }catch (PDOException $e){
                  print('エラー:'.$e->getMessage());
                  die();
              }
              return $setsu;
    }

?>