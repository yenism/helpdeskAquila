<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama=$_POST['nama'];
    $keluhan=$_POST['keluhan'];
    $tanggal=$_POST['tanggal'];
    $status=$_POST['status'];
    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET nama='$nama',keluhan='$keluhan',tanggal='$tanggal',status='$status' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: Data.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $nama = $user_data['nama'];
    $keluhan = $user_data['keluhan'];
    $tanggal = $user_data['tanggal'];
    $status = $user_data['status'];
}
?>
<html>
<head>	
    <title>Edit User Data</title>
</head>
 
<body>
    <a href="Data.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Keluhan</td>
                <td><input type="text" name="keluhan" value=<?php echo $keluhan;?>></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr>
            <td>Status</td>
                <td><Select> name= "Status" 
                    <option name="waiting" value=<?php echo $status;?>> Waiting </option>
                    <option name="finished" value=<?php echo $status;?>>Finished</option>
                    
                </Select> </td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
