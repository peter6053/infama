<?php
header("Content-Type:application/json");



if (isset($_GET['movieduration']) && $_GET["lenghtoftheflight"]!="") {
    //include('db.php');
    $movieduration = $_GET['lenghroftheflight'];



    return_data($movieduartion,$lenghtofflight);
    switch (date('l')) {
        case 'movietime':
        case 'flighttime':
            if ($movietime < 1000)
                echo movie::available;
            else
                echo movie::null;
            break;
        
}else{
    return_data(NULL, NULL);
    }


function return_data($movieduration,$lenghtofflight){


    $uname = $movieduration." ".$lenghtoftheflight;
   
    $response["uname"]=$movieduration. $lengthoftheflight;


   



    echo json_encode($response);
}

?>