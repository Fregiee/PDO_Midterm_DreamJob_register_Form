<?php 
require_once 'dbConfig.php';

function insertIntoDeveloperRecords($pdo, $first_name, $last_name, $age,
$gender, $position, $notable_project, $code_Language, $experience){

    $sql = "INSERT INTO developer_records(first_name, last_name, age, gender, position,
    notable_project, code_Language, experience) VALUES (?,?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $age, $gender, $position
    ,$notable_project, $code_Language, $experience]);

    if($executeQuery){
        return true;
    }
}
function seeAllDeveloperRecords($pdo){
    $sql = "SELECT * FROM developer_records";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if($executeQuery){
        return $stmt->fetchAll();
    }
}

function getDeveloperById($pdo, $developer_id){
    $sql = "SELECT * FROM developer_records WHERE developer_id = ?";
    $stmt = $pdo->prepare($sql);
    if($stmt->execute([$developer_id])){
        return $stmt->fetch();
    }
}
function updateADeveloper($pdo,$developer_id, $first_name, $last_name, $age, $gender, $position, $notable_project, $code_Language, $experience){
    $sql = "UPDATE developer_records
                SET first_name = ?,
                    last_name = ?,
                    age = ?,
                    gender = ?,
                    position = ?,
                    notable_project = ?,
                    code_Language = ?,
                    experience = ?
                WHERE developer_id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$first_name, $last_name, $age, $gender, $position, $notable_project, $code_Language, $experience, $developer_id]);
    if($executeQuery){
        return true;
    }
}
function deleteADeveloper($pdo, $developer_id){
    $sql = "DELETE FROM developer_records WHERE developer_id = ?";
    $stmt = $pdo->prepare($sql);

    $executeQuery = $stmt->execute([$developer_id]);

    if($executeQuery){
        return true;
    }
}

?>