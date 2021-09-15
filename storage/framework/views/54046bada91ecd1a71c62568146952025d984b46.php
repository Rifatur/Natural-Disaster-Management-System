<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <!--========== CSS ==========-->
        <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/login.css')); ?>">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>DisasterHelp</title>  
    </head>
    <body>
        <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>

            <div class="form">
                <img src="<?php echo e(asset('admin/assets/img/authentication.svg')); ?>" alt="" class="form__img">

                <form  action="<?php echo e(route('auth.create')); ?>" method="POST" enctype="multipart/form-data" class="form__content">
                    <?php echo csrf_field(); ?>
                    <h1 class="form__title">Welcome</h1>

                    <div class="form__div form__div-one">
                        <div class="form__icon">
                            <i class='bx bx-user-circle'></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Email</label>
                            <input type="email" class="form__input" name="email">
                        </div>
                    </div>

                    <div class="form__div">
                        <div class="form__icon">
                            <i class='bx bx-lock' ></i>
                        </div>

                        <div class="form__div-input">
                            <label for="" class="form__label">Password</label>
                            <input type="password" class="form__input" name="password">
                        </div>
                    </div>
                    <a href="#" class="form__forgot">Forgot Password?</a>

                    <input type="submit" class="form__button" value="Login">

                    <div class="form__social">
                        <span class="form__social-text">Our login with</span>

                        <a href="#" class="form__social-icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-google' ></i></a>
                        <a href="#" class="form__social-icon"><i class='bx bxl-instagram' ></i></a>
                    </div>
                </form>
            </div>

        </div>
        
        <!-- ===== MAIN JS ===== -->
        <script src="<?php echo e(asset('admin/assets/js/login.js')); ?>"></script>
       
    </body>
</html><?php /**PATH C:\xampp\htdocs\disasterhelp\resources\views/admin/login.blade.php ENDPATH**/ ?>