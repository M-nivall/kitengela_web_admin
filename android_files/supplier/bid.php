<?php

include "../../include/connections.php";

 if($_SERVER['REQUEST_METHOD']=='POST'){

    $requestID=$_POST['requestID'];
    $bid_price = $_POST['bid_price'];

    $update="UPDATE request SET quantity_price = '$bid_price' WHERE id='$requestID'";
    if(mysqli_query($con,$update)){

        $response['status']=1;
        $response['message']='Requested Successfully';

    }else{
        $response['status']=0;
        $response['message']='Please try again';

    }
    echo json_encode($response);
}
?>