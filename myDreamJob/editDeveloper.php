<?php require_once "core/dbConfig.php"; ?>
<?php require_once "core/models.php"; ?>
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
    <?php $getDeveloperById = getDeveloperById($pdo, $_GET['developer_id']); ?>
    <form action="core/handleForms.php?developer_id=<?php echo $_GET['developer_id'];?>" method="POST">
        <p>
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" value="<?php echo $getDeveloperById['first_name']; ?>">
        </p>
        <p>
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" value="<?php echo $getDeveloperById['last_name']; ?>">
        </p>
        <p>
            <label for="age">Age</label>
            <input type="text" name="age" value="<?php echo $getDeveloperById['age']; ?>">
        </p>
        <p>
            <label for="gender">Gender</label>
            <input type="text" name="gender" value="<?php echo $getDeveloperById['gender']; ?>">
        </p>
        <p>
            <label for="position">Position</label>
            <input type="text" name="position" value="<?php echo $getDeveloperById['position']; ?>">
        </p>
        <p>
            <label for="notableProject">Project</label>
            <input type="text" name="notableProject" value="<?php echo $getDeveloperById['notable_project']; ?>">
        </p>
        <p>
            <label for="codelanguage">Code Language</label>
            <input type="text" name="codelanguage" value="<?php echo $getDeveloperById['code_Language']; ?>">
        </p>
        <p>
            <label for="experience">Experience</label>
            <input type="text" name="experience" value="<?php echo $getDeveloperById['experience']; ?>">
            <input type="submit" name="editDeveloperBtn">   
        </p>
        </form>
</body>
</html>

