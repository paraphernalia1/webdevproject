<?php
    include_once("../dbconnections/mysql_connections.php");
    $id = $_GET['id'];
    mysqli_query($dbc, " DELETE FROM tblsubject WHERE subject_id='id'");
    header("location:../index.php")
?>