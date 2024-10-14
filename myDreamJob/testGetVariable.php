<?php 
if (isset($_GET['developerName'])){
    echo "<h2> Developer Name: " . $_GET['developerName']. "</h2>";
}
if (isset($_GET['yearLevel'])){
    echo "<h2> Year Level: " . $_GET['yearLevel']. "</h2>";
}
?>