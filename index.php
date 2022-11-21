<?php
    include_once("dbconnection/mysql_connections.php");
    include_once("functions/fetch.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My subject</h1>
        <a href = "forms/addforms.php">ADD subject</a><br/><br/>
        <table width = '100%' border= 1>
            <tr bgcolor='#cccccc'>
                <td>ID</td>
                <td>Subject Code</td>
                <td>Subject Name</td>
                <td>Action</td>
            </tr>
            <?php
                while($res = mysql_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$res['subject_id']."</td>";
                    echo "<td>".$res['subject_code']."</td>";
                    echo "<td>".$res['subject_name']."</td>";
                    echo "<td><a href=\"forms/editform.php?id=$res[subject_id]\">Edit</a> |
                            < a href=\"function/delete.php?id=$res[subject_id]\"
                            onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
            ?>
        </table>
    </body>
</html>