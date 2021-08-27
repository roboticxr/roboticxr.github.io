<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php  
       $servername = "sql311.epizy.com";  
       $username = "epiz_29554078";  
       $password = "gQkVqU5Gzsu";  
     
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>  
<?php
    
include "connection.php";    
    
if(isset($_GET['id'])){    
$sql = "delete from registration where id = '".$_GET['id']."'";    
$result = mysql_query($sql);    
}    
    
$sql = "select * from registration";    
$result = mysql_query($sql);    
?>    

<?php    
    
while($row = mysql_fetch_object($result)){    
    
    
?>  
    <tr>  
        <td>  
            <?php echo $row->StaffName;?>  
        </td>  
        <td>  
            <?php echo $row->Username;?>  
        </td>  
        <td>  
            <?php echo $row->password;?>  
        </td>  
        <td>  
            <?php echo $row->address;?>  
        </td>  
        <td>  
            <?php echo $row->PhoneNumber;?>  
        </td>  
        <td> <a href="listing.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Delete    
        </a> | <a href="register.php?id =     
            <?php echo $row->id;?>" onclick="return confirm('Are You Sure')">Edit    
        </a> </td>  
        <tr>  
            <?php } ?>  

<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td></td>    
                <td>StaffName</td>    
                <td>Username</td>    
                <td>password</td>    
                <td>address</td>    
                <td>Phone Number</td>    
                <td colspan = "2">Action</td>    
            </tr>    
        </table>    
         <a href="index.html">"Back to Homepage"
</a>
    </body>    
</html>   
</body>
</html>