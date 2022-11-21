<?php
    include_once("../dbconnection/mysql_connections.php");
    $id = $GET['id'];

    $result = mysqli_query($dbc, "SELECT * FROM tblsubject WHERE subject_id=$id");
    while($res = mysqli_fetch_array($result)) {
        $code = $res['subject_code'];
        $name = $res['subject_name'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h1>Edit subject</h1>
        <a href="../index.php">Home</a>
        <br/><br/>
        <form name="formal" method="post" action="../functions/edit.php">
            <table border="0">
                <tr>
                    <td>Subject_code</td>
                    <td><input type="text" name="code" value="<?php echo $code;?>"></td>
                </tr>
                <tr>
                    <td>Subject_name</td>
                    <td><input type="text" name="name" value="<?php echo $name;?>"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?></td>
                    <td><input type="submit" name="update" value="update"></td>
                </tr>
            </table>
        </form>
    </body>
</html>