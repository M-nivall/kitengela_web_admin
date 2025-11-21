<?php

include "../../include/connections.php";


if($_SERVER['REQUEST_METHOD']=='POST'){

$id=$_POST['requestID'];

$update="UPDATE request SET bid_approval = 'Approved' WHERE id = '$id' ";

if(mysqli_query($con,$update)){

    $response['status']=1;
    $response['message']='Approved SuccessFully';

}else{
    $response['status']=0;
    $response['message']='Please try again';


}
echo json_encode($response);
}
?>