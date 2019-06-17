<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 10:33 AM
 */

if (isset($_POST['btnUpdate'])){

    $received_id=$_POST['x'];
    $received_name=$_POST['y'];
    $received_email=$_POST['z'];
    $received_pass=$_POST['pwd'];

    //connect file to db
    $conn = $conn = mysqli_connect("localhost","root","","may_syst");
    //check if the connection is successful
    if (!$conn){
        echo "CONNECTION FAILED";
    }else{
        //proceed to update database
        //start by creating update querry
        $updateQuerry = "UPDATE majina SET jina='$received_name',arafa='$received_email',password='$received_pass' WHERE id='$received_id'";
        //check if the querry is correct
        if (!$updateQuerry){
            echo "error on update querry";
        }else{
            //proceed with the final update
            $update=mysqli_query($conn,$updateQuerry);
            //check if the update was successful
            if (!$update){
                echo "UPDATING FAILED";
            }else{
                echo "RECORD UPDATED SUCCESFULLY";
                header('location:viewUsers.php');
            }
        }

    }
}





?>