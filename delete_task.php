<?php
    include("db.php");
    if (isset($_GET["id"])){
        $id= $_GET["id"];
        $query= "DELETE FROM task WHERE id = $id";
        $result=mysqli_query($conn, $query);
        if (!$result){
            $_SESSION["message"]= "Task not removed succesfully";

        }

        $_SESSION["message"]= "Task removed succesfully";
        $_SESSION["mesagge_type"]="danger";
        header("location: index.php");

    }
?>
