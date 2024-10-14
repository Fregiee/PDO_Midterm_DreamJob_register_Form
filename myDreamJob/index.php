<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale 1.0">
        <title> Developers  </title>
        <style>
            body{
                font-family: "Arial";
            }
            input{
                font-size: 1.5em;
                height: 50px;
                width: 200px;
            }
        </style>
    </head>
<body>
    <h3>Good Morning Overseer, Who's on the list today?</h3>
    <form action = "core/handleForms.php" method= "POST">
        <p><label for="firstname">First Name </label><input type="text" name="firstname"></p>
        <p><label for="lastname">Last Name </label><input type="text" name="lastname"></p>
        <p><label for="age">Age </label><input type="text" name="age"></p>
        <p><label for="gender">Gender </label><input type="text" name="gender"></p>
        <p><label for="position"> Position </label><input type="text" name="position"></p>
        <p><label for="notableProject"> Most Notable Project Made </label><input type="text" name="notableProject"></p>
        <p><label for="codelanguage"> Language Mastery </label><input type="text" name="codelanguage"></p>
        <p><label for="experience"> Experience </label><input type="text" name="experience">
        
            <input type="submit" name="insertNewDeveloperBtn"></p>
    </form>
    <a href="testGetVariable.php? developerName=FregieLagulay & yearLevel=ThirdYear">Test get SuperGlobal</a>
    <table style="width:50%; margin-top: 50px;">
        <tr>
            <th>Developer ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Position</th>
            <th>Notable Project</th>
            <th>Language Mastery</th>
            <th>Experience</th>
        </tr>
        <?php $seeAllDeveloperRecords = seeAllDeveloperRecords($pdo); ?>
        <?php foreach ($seeAllDeveloperRecords as $row){?>
        <tr>
            <td><?php echo $row['developer_id'];?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name'];?></td>
            <td><?php echo $row['age'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['position'];?></td>
            <td><?php echo $row['notable_project'];?></td>
            <td><?php echo $row['code_Language'];?></td>
            <td><?php echo $row['experience'];?></td>
            <td>
                <a href="editDeveloper.php?developer_id=<?php echo $row['developer_id'];?>">Edit</a>
                <a href="deleteDeveloper.php?developer_id=<?php echo $row['developer_id'];?>">Delete</a>
            </td>
        </tr>
    <?php }?>

    </table>
</body>
</html>