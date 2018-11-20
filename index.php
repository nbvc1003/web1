<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  }else {
    echo "welcome";
  }
}

function print_list(){
  $list = scandir('./data');
  $i = 0;
  while ($i < count($list)) {
    if($list[$i] != '.'  &&  $list[$i] != '..'){
      echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
    }
    $i = $i + 1;
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php"> WEB</a></h1>
    <ol>
      <?php
        print_list();
      ?>
    </ol>
    <h2>

      <a href="create.php">create</a>
      <?php if(isset($_GET['id'])) { ?>
        <a href="update.php?id=<?php echo $_GET['id'];?>">update</a>
        
        <form action="delete_process.php" method="post">
          <input type="hidden" name="id" value="<?=$_GET['id']?>">
          <input type="submit" value="delete">
        </form>
      <?php } ?>       
      
    </h2>
    <?php
    if(isset($_GET['id'])){
      echo file_get_contents("data/".$_GET['id']);
    }else {
      echo "Hello PHP";
    }
     ?>
  </body>
</html>
