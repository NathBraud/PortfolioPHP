<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>


<?php
session_start();
include_once("php/code.php");

$works = new Works;
$workId = array_key_exists("id", $_GET) ? $_GET["id"] : $_POST["id"]; 
$work = $works->get_work($workId);

if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
    {
      if($_POST['id'] != NULL && $_POST['title'] != NULL && $_POST['description'] != NULL)
      {
          $works->update_works($_POST["id"], $_POST["title"], $_POST["description"]);
          header("Location: index.php");
      }
    }
}

?>

    <form action="editProjet.php" method="post">

    <div class="container sectionOne">

        <input type="hidden" name="id" value="<?php echo $work["id"] ?>" class="form-control">
        
        <div class="form-group">
        <label for="title"><b>Titre</b></label>
        <input type="text" placeholder="Enter title" name="title" value="<?php echo $work["title"] ?>" class="form-control" required>
        </div>

        <div class="form-group">
        <label for="desc"><b>Description</b></label>
        <textarea name="description" placeholder="Enter description" class="form-control" required>
          <?php echo $work["description"] ?>
        </textarea>
        </div>
        

        <button type="submit" name="submit" value="OK" class="btn btn-success">Mettre à jour</button>
    </div>
    </form>

  </body>
</html>
