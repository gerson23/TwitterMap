<?php
  
  define('__ROOT__', dirname(dirname(__FILE__)));
  require_once (__ROOT__.'/tmap/codebird.php');


  $CONSUMER_KEY = 'Viq80p46UTJuji18owhLGw';
  $CONSUMER_SECRET = '1S0KDyFe3Yjkv8pId2qHucKH9CphIgcoiTqo86Ov4cI';
  $ACCESS_TOKEN = '38928271-TcJvkpuOKdmVKc4zC75fXilkz9Iu7xZQKcKgrQseI';
  $ACCESS_TOKEN_SECRET = 'FYACopB6F2UJTzvucRtRhrdQlYeAprpREdtNd6SwCc';

  Codebird::setConsumerKey($CONSUMER_KEY, $CONSUMER_SECRET);
  $cb = Codebird::getInstance();
  $cb->setToken($ACCESS_TOKEN, $ACCESS_TOKEN_SECRET);

  $q = $_POST['q'];
  $count = $_POST['count'];
  $api = $_POST['api'];

  $params = array(
    'screen_name' => $q,
    'q' => $q,
    'count' => $count
  );

  $data = (array) $cb->$api($params);

  echo json_encode($data);

?>
</body>

<html>
