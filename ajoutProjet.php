<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Ajouter un projet </title>
  </head>
  <body>


    <?php
session_start();
include_once("php/code.php");

$work = new Works;


if(isset($_SESSION["account"]["username"])) {
  if(isset($_POST["submit"]))
{
    if($_POST["submit"] === "OK")
{
    if($_POST['title'] != NULL && $_POST['desc'] != NULL && $_POST['url'])
    {
        $work->create_works($_POST["title"], ($_POST["desc"]), $_POST["url"]);
        header("Location: index.php");
    }
    else
    {
        echo("Remplis le formulaire");
    }
}
}
}

else {
  header("Location: login.php");
    }

?>

<section class="sectionOne">


    <form action="ajoutProjet.php" method="post">



    <div class="container">
        <h1 class="newProjet"> Nouveau projet </h1>
      
        <div class="form-group">
          <label for="title"><b>Titre</b></label>
          <input type="text" placeholder="Enter title" name="title" class="form-control" required>
        </div>


        <div class="form-group">
          <label for="desc"><b>Description</b></label>
          <input type="text" placeholder="Enter description" name="desc" class="form-control" required>
        </div>


        <div class="form-group">
          <label for="url">URL de l'image</label>
          <input type="url" name="url" id="url" placeholder="https://example.com" pattern="https://.*" size="100" class="form-control" required>
        </div>


        <button type="submit" name="submit" value="OK" class="btn btn-success addProjet">Ajouter ce projet</button>

    </div>
    </form>

</section>

  </body>
</html>
