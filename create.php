<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>create</title>
  </head>
  <body>
    <form action="create.php" method="post">
      <input type="text" name="name" placeholder="your name" />
      <input type="text" name="data" placeholder="describe your idea" style="resize:both; height:30vh;width:30vw;"/><button type="submit" class="btn">Submit</button>
    </form>
  </body>

</html>
<?php 
require_once 'connect.php';
if(isset($_POST['name']) && isset($_POST['data'])){
    $name = htmlspecialchars($_POST['name']);
    $data = htmlspecialchars($_POST['data']);
    $prepare = $dbh->prepare("INSERT INTO `author`(`name`, `data`) VALUES (:name,:data)");
    $prepare->bindParam(':name',$name);
    $prepare->bindParam(':data',$data);
    $prepare->execute();
    echo "success <hr>go to home page <a href='index.php'";
}

?>