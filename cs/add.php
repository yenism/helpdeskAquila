
<html>
<head>
    <title>Add Users</title>
</head>
 
<body>
    <a href="Data.php">Go to Home</a>
    <br/><br/>
 
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Keluhan</td>
                <td><input type="text" name="keluhan"></td>
            </tr>
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><Select name="status">
                    <option value="waiting"> Waiting </option>
                    <option value="finished"> Finished</option>
                </Select> 
            </td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $keluhan = $_POST['keluhan'];
        $tanggal = $_POST['tanggal'];
        $status = $_POST['status'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO users(nama,keluhan,tanggal,status ) VALUES('$nama','$keluhan','$tanggal','$status')");

        echo "User added succesfully. <a href='Data.php'>View Users</a>";
    }
