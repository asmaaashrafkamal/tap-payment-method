<?php
//changed
require('vendor/autoload.php');
use TapPayments\GoSell;
//$goSell = new GoSell\GoSell();

GoSell::setPrivateKey("sk_test_4CsmLhNIueUGfnBlD8JYpRyT");

 echo GoSell::$privateKey;

// echo GoSell::$baseUrl;

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bluebird/3.3.4/bluebird.min.js"></script>
<script src="https://secure.gosell.io/js/sdk/tap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<form id="form-container" method="post"  action="tap.php">
<?php
if(isset($_GET['pay'])){
echo "success";
}
?>
  <!-- Tap element will be here -->
  <div id="element-container"></div>
  <div id="error-handler" role="alert"></div>
  <div id="success" style=" display: none;;position: relative;float: left;">
        Success! Your token is <span id="token"></span>
  </div>
  <div name="payment-form" id="payment-form"></div>
  <!-- Tap pay button -->
  <button id="tap-btn" >Submit</button>
</form>
<script src="script.js"></script>
</body>
</html>
<!-- 4600 4101 2345 6789 
4012000033330026	
https://tappayments.api-docs.io/2.0/cards/verify-a-card
-->