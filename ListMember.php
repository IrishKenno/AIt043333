<!DOCTYPE html>


<body>

<?php
include("header.php");
include("config.inc.php");

$SQL = "select * from tbl_member";
$objQuery = mysqli_query($conn, $SQL);
?>

<main>
    <h1>รายชื่อสมาชิก</h1>
</main>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name Prefix</th>
            <th scope="col">Name</th>
            <th scope="col">Lastname</th>
            <th scope="col">Gender</th>
            <th scope="col">Datebirth</th>
            <th scope="col">Address</th>
            <th scope="col">Phone-Number</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC)) {
        ?>
        <tr>
            <th scope="row"><?php echo $objResult['ID']; ?></th>
            <td><?php echo $objResult['Firstname']; ?></td>
            <td><?php echo $objResult['Name']; ?></td>
            <td><?php echo $objResult['Lastname']; ?></td>
            <td><?php echo $objResult['Sex']; ?></td>
            <td><?php echo $objResult['Birthdate']; ?></td>
            <td><?php echo $objResult['Address']; ?></td>
            <td><?php echo $objResult['Telephone']; ?></td>
            <td><?php echo $objResult['Email']; ?></td>
            <td>edit</td>
            <td>delete</td>
        </tr>
        <?php
            }
        ?>
    </tbody>
</table>

</body>