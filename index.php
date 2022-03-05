<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>MDUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style media="screen">
      body{
        padding-top: 20px;
      }
      .form{
        width: 25%;
        margin-top: 20px;
      }
      p{

      }
    </style>
  </head>
  <body>
    <center><h1>Загрузите файл для обмена</h1>
    <form class="form" action="" method="post" enctype="multipart/form-data">
      <input type="file" class="form-control" name="file" value=""><br>
      <input type="submit" class="form-control" name="sub" value="Заугрзить файл">
    </form><br>
    <?php
    if(isset($_FILES["file"])){
      $file = $_FILES['file'];
      move_uploaded_file($file['tmp_name'], 'uploads/'.$file['name']);
      echo '<b>Путь к файлу на сервере:</b><br>';
      echo '<p>'.realpath('uploads/'.$file['name']).'</p>';
    }
    ?></center>

  </body>
</html>
