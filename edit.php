<?php
include_once ("config.php");
include_once ("back.php");
$findl = findl($conn, $_GET['id']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="add-new.css">
  </head>
  <body>
    <?php
if (!empty($_SESSION['message']) && $_SESSION['message'] == 'failed')
{
    echo '<p class="py-4  text-light rounded container text-center"> ' . $_SESSION['message'] . '</p><br>';
    unset($_SESSION['message']);
}
?>
    <div class="login">
    	<h1>edit</h1>
        <form method="POST" action="back.php" >
        <input type="hidden" name="editl">
        <input type="hidden" name="id" value="<?php echo $findl["id"]; ?>">
        <br>
        <input type="text" name="student_name" value="<?php echo $findl["student_name"]; ?>" required="required">
        <br>
        <input type="text" name="student_number" value="<?php echo $findl["student_number"]; ?>" required="required">
        <br>
        <input type="text" name="grade" value="<?php echo $findl["grade"]; ?>" required="required">
        <br>
        <button type="submit" class="btn btn-primary btn-block btn-large">edit</button>
        <br>
        <button class='btn btn-primary btn-block btn-large' onclick="window.location.href='index.php';">home</button>

        </form>
    </div>
  </body>
</html>
