<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج الدفع</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f0f0f0, #d9d9d9);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 20px 0;
            overflow-x: hidden;
        }

        .payment-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .payment-logo {
            font-size: 24px;
            font-weight: bold;
            color: #000;
        }

        .pay-btn {
            background: #6a1b9a;
            color: white;
            width: 100%;
            padding: 10px;
            border-radius: 25px;
            border: none;
            font-size: 18px;
        }

        .payment-method img {
            width: 50px;
        }

        .payment-note {
            font-size: 16px;
            color: blue;
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="payment-container">
        <div class="payment-logo">my<span style="color:black;">
            <img src="image/myfatoorah_logo.jpeg" style="height:20px;width:20px">atoorah</span>
        </div>
        <p style="font-weight: bold;">الرجاء تسديد الرسوم لاستكمال الحجز</p>
        <form action="<?php echo e(route('bcheckout')); ?>">
            <div class="mb-3 text-center">
            <input type="hidden" name="name" value="<?php echo e($name); ?>"> 
                <label class="form-label">Amount:</label>
                <input type="text" class="form-control" value="2.000" disabled>
            </div>
            <div class="mb-3 text-center">
                <label class="form-label">Email:</label>
                <input type="email" class="form-control" value="example@email.com" disabled>
            </div>
            <div class="mb-3 text-center">
                <label class="form-label">Payment Method:</label>
                <div class="border p-2 rounded d-flex align-items-center justify-content-center payment-method">
                <input type="radio" checked class="me-2" style="accent-color: blue;">
                <img src="/image/knet.png" alt="Knet">
                </div>
            </div>
            <div class="mb-3 text-center">
                <label class="form-label">Administrative Expense:</label>
                <input type="text" class="form-control" value="0.000" disabled>
            </div>
            <div class="mb-3 text-center">
                <label class="form-label">Total Amount:</label>
                <input type="text" class="form-control" value="2.000" disabled>
            </div>
            
            <button type="submit" class="pay-btn">دفع</button>
        </form>
    </div>

    <p class="payment-note">All data on the myfaroorah plattform is protected and cannot be accessed.</p>
</body>
</html>
<?php /**PATH C:\Users\elhoda\_gateway\resources\views/myfatorah.blade.php ENDPATH**/ ?>