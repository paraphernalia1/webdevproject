<!DOCTYPE html>
<html>
    <head>
        <title>Add data</title>
    <head>
    <body>
        <?php
            include_once("../dbconnection/mysql_connections.php");

            if(isset($_POST['submit'])) {
                $code = $_POST['code'];
                $name = $_POST['name'];
                
                if(empty($code) || empty($name)) {
                    if(empty($code)) {
                        echo"<font color = 'red'>subject code field is empty.</font><br/>";
                    }
                    if(empty($name)) {
                        echo"<font color='red'>subject name field is empty.</font><br/>";
                    }
                    echo"<br/><a href='javascript:self.history.back();>Go back</a>";
            }
            else {
                $result = mysqli_query($dbc, "INSERT INTO tblsubject(subject_code, subject_name) VALUES('$code','$name')");
                echo"<font color='green'>Data added successfuly.";
                echo"<br><a href='../index.php'>View Result</a>";
            }
        }
    ?>
</body>
</html>