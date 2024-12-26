<?php
session_start();
require_once "./utils/config.php";
require_once "./utils/common.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobno']) && isset($_POST['price'])) {
    $explorecamp_id = $_POST['explorecamp-id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobno'];
    $amount = $_POST['price'];


    $_SESSION['explorecamp_id'] = $explorecamp_id;
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['mobile'] = $mobile;


    $merchantid = MERCHANTIDLIVE;
    $saltkey = SALTKEYLIVE;
    $saltindex = SALTINDEX;

    $payLoad = [
        'merchantId' => $merchantid,
        'merchantTransactionId' => "MT-" . getTransactionID(),
        'merchantUserId' => "M-" . uniqid(),
        'amount' => $amount * 100,
        'redirectUrl' => BASE_URL . REDIRECTURL,
        'redirectMode' => "POST",
        'callbackUrl' => BASE_URL . REDIRECTURL,
        'mobileNumber' => $mobile,
        'paymentInstrument' => ["type" => "PAY_PAGE"],
    ];

    $jsonencode = json_encode($payLoad);
    $payloadbase64 = base64_encode($jsonencode);
    $payloaddata = $payloadbase64 . "/pg/v1/pay" . $saltkey;
    $sha256 = hash("sha256", $payloaddata);
    $checksum = $sha256 . '###' . $saltindex;
    $request = json_encode(['request' => $payloadbase64]);

    $url = (API_STATUS == "LIVE") ? LIVEURLPAY : UATURLPAY;

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $request,
        CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "X-VERIFY: " . $checksum,
            "accept: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $res = json_decode($response);

        if (isset($res->success) && $res->success == '1') {
            $payUrl = $res->data->instrumentResponse->redirectInfo->url;
            header('Location: ' . $payUrl);
            exit;
        } else {
            echo "Error initiating payment: " . $res->message;
        }
    }
}
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        /* Center the form */
        body {
            background-color: #008000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-label {
            color: #006400;
            font-size: 1.1em;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .form-control {
            width: 100%;
            padding: 12px;
            font-size: 1em;
            border-radius: 8px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        .form-control:focus {
            outline: none;
            border-color: #006400;
            box-shadow: 0 0 5px rgba(0, 128, 0, 0.5);
        }
        button {
            background-color: #ff4500;
            color: white;
            font-size: 1.2em;
            font-weight: bold;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s;
            box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
            display: block;
            width: 100%;
            margin-top: 20px;
        }
        button:hover {
            background-color: #e63900;
        }
        textarea {
            resize: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" enctype="multipart/form-data">
            <input type="hidden" name="explorecamp-id" id="explorecamp-id" 
                   value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">
            
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            
            <div class="form-group">
                <label for="mobno" class="form-label">Phone Number</label>
                <input type="text" class="form-control" name="mobno" id="mobno" required>
            </div>
            
            <div class="form-group">
                <label for="price" class="form-label">Amount</label>
                <input type="text" class="form-control" name="price" id="price" required>
            </div>
            
            <div class="form-group">
                <label for="adress" class="form-label">Address</label>
                <textarea class="form-control" name="adress" placeholder="Enter Address" style="height: 100px" required></textarea>
            </div>
            
            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>
</html>

