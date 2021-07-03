<?php
include_once ("config.php");

if (isset($_POST['addl']))
{
    addl($conn);
}
if (isset($_POST['editl']))
{
    editl($conn);
}
if (isset($_POST['deletel']))
{
    deletel($conn);
}

function addl($conn)
{
    try
    {
        $x = $_POST['student_name'];
        $y = $_POST['student_number'];
        $z = $_POST['grade'];
        $sql = "INSERT INTO list (student_name,student_number,grade) VALUES ('$x','$y',$z)";
        $conn->exec($sql);
        $_SESSION['message'] = 'succes';
        header("Location:index.php");
    }
    catch(Exception $e)
    {
        $_SESSION['message'] = 'failed';
        header("Location:add.php");
    }
}

function showlist($conn)
{
    try
    {
        $sql = "SELECT * FROM list";
        $result = $conn->query($sql);
        return $result;
    }
    catch(Exception $e)
    {
        return [];
    }
}

function findl($conn, $id)
{
    try
    {
        $sql = "SELECT * FROM list WHERE id=$id";
        $result = $conn->query($sql);
        $res = [];
        foreach ($result as $r)
        {
            $res = $r;
            break;
        }
        return $res;
    }
    catch(Exception $e)
    {
        return ['id' => '', 'student_name' => '', 'student_number' => '', 'grade' => ''];
    }
}

function editl($conn)
{
    try
    {
        $id = $_POST['id'];
        $x = $_POST['student_name'];
        $y = $_POST['student_number'];
        $z = $_POST['grade'];
        $sql = "UPDATE list SET student_name='$x',student_number='$y',grade='$z' WHERE id=$id";
        $conn->query($sql);
        $_SESSION['message'] = 'succes';
        header("Location:index.php");
    }
    catch(Exception $e)
    {
        $_SESSION['message'] = 'failed';
        header("Location:edit.php?id=$id");
    }
}

function deletel($conn)
{
    try
    {
        $id = $_POST['id'];
        $sql = "DELETE FROM list WHERE id=$id";
        $conn->query($sql);
        $_SESSION['message'] = 'succes';
        header("Location:index.php");
    }
    catch(Exception $e)
    {
        $_SESSION['message'] = 'failed';
        header("Location:delete.php");
    }
}

?>
