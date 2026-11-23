<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a - Question 2</title>
</head>
<body>

<?php
$students = array(
    array("Name" => "Alice", "Program" => "BIP", "Age" => 21),
    array("Name" => "Bob", "Program" => "BIS", "Age" => 20),
    array("Name" => "Raju", "Program" => "BIT", "Age" => 22)
);
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>

    <?php foreach ($students as $student) { ?>
    <tr>
        <td><?php echo $student["Name"]; ?></td>
        <td><?php echo $student["Program"]; ?></td>
        <td><?php echo $student["Age"]; ?></td>
    </tr>
    <?php } ?>
</table>

</body>
</html>
