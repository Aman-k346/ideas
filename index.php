<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ideas</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <section id="header">
      <div class="bg">
        <div class="ideas">
          ideas <a href="#ideas" class="view btn">view ideas &rarr; </a>
        </div>
      </div>
    </section>
    <section id="ideas">
      <div class="title">Ideas</div>
      <hr />
      <ul>
        <?php 
        require_once 'connect.php';
        $data = $dbh->prepare("SELECT * FROM author");
        $data->execute();
        $data1 = $data->fetchAll();
        foreach ($data1 as $value) {
        echo "<li class='list'>".
        $value['data']."<b style='font-size:27px;'>by ".$value['name']."</b><hr />
      </li>";
        }
        ?>
      </ul>
    </section>
    <section id="#submit">
      <div class="submit-bg">
        <div class="have submit">have</div>
        <div class="submit an">an</div>
        <div class="sub submit">idea</div>
        <br />
        <div class="button" onclick="window.location.href='create.php'">submit</div>
      </div>
    </section>
  </body>
</html>
