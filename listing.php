<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Assignment</title>
</head>

<body>
<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from userdata where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from userdata";    
$result = mysql_query($sql);    
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>StaffName</td>    
                <td>Username</td>    
                <td>password</td>    
                <td>address</td>    
                <td>Phone Number</td> 
           
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
    </body>    
</html>    
</body>
</html>