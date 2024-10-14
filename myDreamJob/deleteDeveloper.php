<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php';?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> editDeveloper  </title>
        <style>
            body{
                font-family: "Arial";
            }
            input{
                font-size: 1.5em;
                height: 50px;
                width: 200px;
            }
            table,th,td{
                border:1px solid black;
            }
        </style>
    </head>
<body>
    <h1> Are you sure you want to delete this Developer?</h1>
    <?php $getDeveloperById = getDeveloperById($pdo, $_GET['developer_id']); ?>
    <form action="core/handleForms.php?developer_id=<?php echo $_GET['developer_id'];?>" method="POST">
        <div class="developerContainer" style="border-style: solid;
        font-family: 'Arial';">
            <p>First Name: <?php echo $getDeveloperById['first_name']; ?></p>
            <p>Last Name: <?php echo $getDeveloperById['last_name']; ?></p>
            <p>Age: <?php echo $getDeveloperById['age']; ?></p>
            <p>Gender: <?php echo $getDeveloperById['gender']; ?></p>
            <p>Position: <?php echo $getDeveloperById['position']; ?></p>
            <p>Project: <?php echo $getDeveloperById['notable_project']; ?></p>
            <p>Code Master: <?php echo $getDeveloperById['code_Language']; ?></p>
            <p>Experience: <?php echo $getDeveloperById['experience']; ?></p>
            <input type="submit" name="deleteDeveloperBtn" value="Delete">
        </div>