
<!DOCTYPE html>
<html>
<head>
    <title>Lab 5a - Question 1</title>
</head>
<body>

<h2>Student Personal Details</h2>

<?php
$name = "NUR ANISA DIANA BINTI MOHD NOORDIN";
$matric = "AI240061";
$course = "Bachelor of Computer Science (Information Security) with Honours";
$year = "Year 3";
$address = "Batu Pahat, Johor";
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Details</th>
        <th>Information</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
