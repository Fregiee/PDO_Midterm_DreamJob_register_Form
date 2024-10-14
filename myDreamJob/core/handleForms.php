<?php
 require_once 'dbConfig.php';
 require_once 'models.php';


  if(isset($_POST['insertNewDeveloperBtn'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $notableProject = $_POST['notableProject'];
    $codelanguage = $_POST['codelanguage'];
    $experience = $_POST['experience'];


    if(!empty($firstname) && !empty($lastname) && !empty($age) && !empty($gender) && !empty($position) && !empty($notableProject) && !empty($codelanguage)
    && !empty($experience)){
        $query = insertIntoDeveloperRecords($pdo, $firstname, $lastname, $age, $gender,
        $position, $notableProject,$codelanguage, $experience);
    
        if($query){
            header("Location: ../index.php");
        }
        else{
            echo"Query failed";
        }
}
else{
    echo "Make sure no fields are empty";
}
   

  }

  if(isset($_POST['editDeveloperBtn'])){
    $developer_id = $_GET['developer_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $position = $_POST['position'];
    $notableProject = $_POST['notableProject'];
    $codelanguage = $_POST['codelanguage'];
    $experience = $_POST['experience'];



    if(!empty($developer_id) && !empty($firstname) && !empty($lastname) && !empty($age) && !empty($gender) && !empty($position) && !empty($notableProject) && !empty($codelanguage)
    && !empty($experience)){

        $query = updateADeveloper($pdo,$developer_id, $firstname, $lastname, $age, $gender,
        $position, $notableProject,$codelanguage, $experience);
        if($query){
            header("Location: ../index.php");
        }
        else{
            echo"Update failed";
        }
    
     } 
    else{
        echo "Make sure no fields are empty";
    }
}
      
    
  if(isset($_POST['deleteDeveloperBtn'])){
    $query = deleteADeveloper($pdo, $_GET['developer_id']);

    if($query){
        header("Location: ../index.php");

    }
    else{
        echo"Deletion failed";
    }
  }
  ?>