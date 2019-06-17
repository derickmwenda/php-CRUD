<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 6/12/19
 * Time: 9:51 AM
 */

//connect to database
$conn = mysqli_connect("localhost","root","","may_syst");
//check if the connection was successful
if (!$conn){
    echo "connection Failed";
}else{
    //proceed by deleting
    //start by checking if delete has been clicked

    if (isset($_GET['id_yangu'])){
        $received_id=$_GET['id_yangu'];
        //create the delete querry

        $deleteQuerry = "DELETE  FROM majina WHERE id=$received_id";

        //complete by finally deleting

        $delete = mysqli_query($conn,$deleteQuerry);

        //check if deleting was successful
        if (!$delete){
            echo "DELETING FAILED";
        }else{
            echo "RECORD DELETED SUCCEFULLY";
            header('location:viewUsers.php');
        }
    }
}






?>