<?php

$email=$_POST['custEmail'];
$name=$_POST['custName'];
$phoneNumber=$_POST['custPhone'];
$totalPrice=$_POST['totalPrice'];
$totalPrice=($totalPrice*100);

  $some_data = array(
    'userSecretKey'=>'d44nsh92-tbln-nvav-tg0v-pzredqe21ydr',
    'categoryCode'=>'ahuen4zb',
    'billName'=>'CLeo Games Checkout',
    'billDescription'=>'Cleo Checkout',
    'billPriceSetting'=>1,
    'billPayorInfo'=>1,
    'billAmount'=>$totalPrice,
    'billReturnUrl'=>'http://localhost/MasterCLEO/Moderna-pro/statuspayment.php',
    'billCallbackUrl'=>'http://bizapp.my/paystatus',
    'billExternalReferenceNo' => 'AFR341DFI',
    'billTo'=>$name,
    'billEmail'=>$email,
    'billPhone'=>$phoneNumber,
    'billSplitPayment'=>0,
    'billSplitPaymentArgs'=>'',
    'billPaymentChannel'=>'0',
    'billContentEmail'=>'Thank you for purchasing our product!',
    'billChargeToCustomer'=>1
  );  

  $curl = curl_init();
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_URL, 'https://dev.toyyibpay.com/index.php/api/createBill');  
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $some_data);

  $result = curl_exec($curl);
  $info = curl_getinfo($curl);  
  curl_close($curl);
  $obj = json_decode($result,true);
  $billcode=$obj[0]['BillCode'];  ?> 
  <!--SEND USER TO TOYYIBPAY PAYMENT--> 
  <script 
  type="text/javascript">     //redirect to payment gateway    
  window.location.href="https://dev.toyyibpay.com/<?php echo $billcode;?>";   
  </script>