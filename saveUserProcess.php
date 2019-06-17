<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/11/19
 * Time: 9:53 AM
 */

if (isset($_GET['btn_save'])){
    $inputName = $_GET['x'];
    $inputEmail = $_GET['y'];
    $inputPass = $_GET['z'];
}

//To save data connect to database

$conn = mysqli_connect("localhost","root","","may_syst");

//Check if connection is successful

if (!$conn){
    echo "connection failed";
}else{
    //proceed to save data to database
    //start by creating insert querry

    $insertQuerry = "INSERT INTO `majina`(`id`, `jina`, `arafa`, `password`) VALUES (null,'$inputName','$inputEmail','$inputPass')";
    //check if insert query is correct
    if (!$insertQuerry){
        echo "Error on insert Querry";
    }else{
        //proceed to finally write the data to your database
        $ingiza = mysqli_query($conn,$insertQuerry);
        //check if data was saved successful
        if (!$ingiza){
            echo "SAVING FAILED";
        }else{
            echo "SAVED SUCCESSFULLY";
//            header('location:saveUser.php');
            echo "<a href='saveUser.php'>Add more people </a>";
        }
    }
}







?>