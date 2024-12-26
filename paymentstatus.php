<?php
session_start();
include "db_connect/connection.php";
require_once "./utils/config.php";
require_once "./utils/common.php";
// require_once "./utils/SendMail.php";

// Check if session variables are set
if (isset($_SESSION['name']) && isset($_SESSION['email']) && isset($_SESSION['mobile']) && isset($_SESSION['explorecamp_id'])) {
   echo "ok";
   
} else {
    echo "Session variables not set!";
     print_r($_SESSION);
    // Optionally, redirect the user to a login page or error page
    // exit();
}

if(isset($_POST['merchantId']) && isset($_POST['transactionId']) && isset($_POST['amount']) )
    {
     $name = $_SESSION['name'] ;
     $email = $_SESSION['email'] ;
     $mobile = $_SESSION['mobile'] ;
     $explorecamp_id= $_SESSION['explorecamp_id'];
        $merchantId=$_POST['merchantId'];
        $transactionId=$_POST['transactionId'];
        $amount=$_POST['amount'];
        
   




if (API_STATUS == "LIVE") {
    $url = LIVESTATUSCHECKURL . $merchantId . "/" . $transactionId;
    $saltkey = SALTKEYLIVE;
    $saltindex = SALTINDEX;
} else {
    $url = STATUSCHECKURL . $merchantId . "/" . $transactionId;
    $saltkey = SALTKEYUAT;
    $saltindex = SALTINDEX;
}



$st = "/pg/v1/status/" . $merchantId . "/" . $transactionId . $saltkey;

$dataSha256 = hash("sha256", $st);

$checksum = $dataSha256 . "###" . $saltindex;


//GET API CALLING
$headers = array(
    "Content-Type: application/json",
    "accept: application/json",
    "X-VERIFY: " . $checksum,
    "X-MERCHANT-ID:" . $merchantId
);



$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, '0');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, '0');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$resp = curl_exec($curl);

curl_close($curl);

$responsePayment = json_decode($resp, true);

echo "<pre>";
print_r($responsePayment);
echo "</pre>";


$tran_id = $responsePayment['data']['transactionId'];
$amount = $responsePayment['data']['amount']/100;



    if ($responsePayment['success'] && $responsePayment['code'] == "PAYMENT_SUCCESS")
    {
        $sql_query = "INSERT INTO `payment`(`name`,`email`,`mobno`,`expo_camp_id`,`transactionid`,`amount`) VALUES ('$name','$email','$mobile','$explorecamp_id','$tran_id','$amount')";
        $sql_result = mysqli_query($conn,$sql_query);
        
        //Send Email and redirect to success page

        $now = new DateTime();
        $timestring = $now->format('d-M-Y h:i:s');
        
        $message ="subject = ". "Thankyou for Donating 7SVF";  
                    $subject ="Donation";
                    $fromname ="Donation";
                    $fromemail = 'admin@7svf.com';  //if u dont have an email create one on your cpanel
                
                    $mailto = $email;  // the email which u want to recv this email
                   
                    // a random hash will be necessary to send mixed content
                    $separator = md5(time());
                    

                    // carriage return type (RFC)
                    $eol = "\r\n";

                    // main header (multipart mandatory)
                    $headers = "From: ".$fromname." <".$fromemail.">" . $eol;
                    $headers .= "MIME-Version: 1.0" . $eol;
                    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
                    $headers .= "Content-Transfer-Encoding: 7bit" . $eol;
                    $headers .= "This is a MIME encoded message." . $eol;

                    // message
                    $body = "--" . $separator . $eol;
                    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
                    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
                    $body .= $message . $eol;
                    // echo mail($mailto, $subject, $body, $headers);
                    // exit();
                    //SEND Mail
                    mail($mailto, $subject, $body, $headers); 
                    
        

         header('Location:' . BASE_URL . "success.php?tid=" . $tran_id . "&amount=" . $amount);

}
else {

    header('Location:' . BASE_URL . "failure.php?tid=" . $tran_id . "&amount=" . $amount);

    }







    }


?>