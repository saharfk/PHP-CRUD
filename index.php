<?php
include_once ("config.php");
include_once ("back.php");
$list = showlist($conn);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="add-new.css">
  </head>
  <body>
    <div class="container text-center">
      <br><br>
      <button type="submit" class="btn btn-primary btn-block btn-large"  onclick="window.location.href='add.php';">add student</button>
      	<h1 class="py-4  text-light rounded">list of students :</h1>
        <br>
      <div class="d-flex table-data">
          <table class="table table-striped table-dark">
              <thead class="thead-dark">
                  <tr>
                      <th>student name</th>
                      <th>student number</th>
                      <th>student grade</th>
                      <th>edit</th>
                      <th>delete</th>
                  </tr>
              </thead>
              <tbody id="tbody">
                <?php foreach ($list as $row): ?>
                <tr>
                <td><?php echo $row["student_name"]; ?></td>
                <td><?php echo $row["student_number"]; ?></td>
                <td><?php echo $row["grade"]; ?></td>
                <td><button type="submit" class="btn btn-primary btn-block btn-large"  onclick="window.location.href='edit.php?id=<?php echo $row["id"]; ?>';">edit</button></td>
                <td><button type="submit" class="btn btn-primary btn-block btn-large"  onclick="window.location.href='delete.php?id=<?php echo $row["id"]; ?>';">delete</button></td>
                </tr>
                <?php
endforeach ?>
              </tbody>
          </table>
      </div>
    </div>
  </body>
</html>
