<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>استبيان الحجز</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .header-bar {
            background-color: #2c3e50;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }
        .btn-submit {
            background-color: #28a745;
            color: white;
            font-size: 18px;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        .btn-reset {
            background-color: #6c757d;
            color: white;
            font-size: 18px;
            width: 100%;
        }
        .btn-reset:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

    <div class="header-bar">
        🏠 الفرع المكتبي | ⏰ Sat - Thu 10:00 AM - 4:00 PM
    </div>

    <div class="container">
        <div class="form-container">
        <?php if($errors->any()): ?>
    <div style="color: red;">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php if(session('success')): ?>
    <script>
        Swal.fire({
            title: "نجاح!",
            text: "<?php echo e(session('success')); ?>",
            icon: "success",
            showConfirmButton: false, 
            timer: 500 
        }).then(() => {
            window.location.href = "<?php echo e(route('myfatorah')); ?>"; 
        });
    </script>
<?php endif; ?>
            <h3 class="text-center mb-4">استبيان الحجز</h3>
            <p class="text-muted text-center">
                في حال واجهت أي مشكلة في ملء استبيان الحجز، الرجاء التواصل مع خدمة العملاء. <br>
                ملاحظة : يجب ان تكون جميع البيانات خاصة بالمسؤول لتقديم علي الحجز رسميا.استخدام بيانات شخص اخر غير مسموح
            </p>

            <form action="<?php echo e(route('form.store')); ?>" method="POST" id="bookingForm">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <input type="text" name="job" class="form-control" value="<?php echo e(request()->query('button_name')); ?>" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">اسم العميل القانوني</label>
                    <input type="text" name="name" class="form-control" placeholder="ادخل اسمك">
                </div>

                <div class="mb-3">
                    <label class="form-label">الرقم المدني للمناصر بالعميل</label>
                    <input type="text" name="civil_id" class="form-control" placeholder="ادخل الرقم المدني">
                </div>

                <div class="mb-3">
                    <label class="form-label">رقم الهاتف</label>
                    <input type="text" name="phone" class="form-control" placeholder="ادخل رقم الهاتف">
                </div>

                <div class="mb-3">
                    <label class="form-label">العنوان</label>
                    <input type="text" name="address" class="form-control" placeholder="ادخل العنوان">
                </div>

                <button type="submit" class="btn btn-submit mb-2">متابعة</button>
                <button type="reset" class="btn btn-reset">إعادة تعيين</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\elhoda\_gateway\resources\views/form1.blade.php ENDPATH**/ ?>