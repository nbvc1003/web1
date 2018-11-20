<?php
//post로 넘어온 정보를 파일로 저장
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.$_POST['title']);

 ?>
