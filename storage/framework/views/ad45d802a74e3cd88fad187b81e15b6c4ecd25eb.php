<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sign Up</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .textbox{
                width: 260px;
                height: 40px;
                background: lightgrey;
                border-radius: 10px;
                margin: 15px auto;
            }

            .textbox input{
                background: none;
                border: none;
                outline: none;
                text-align: center;
                width: 90%;
                line-height: 37px;
                font-size: 14px;
            }
            .btn{
                width: 260px;
                height: 40px;
                background: lightgrey;
                border-radius: 10px;
                margin: 10px auto;
                background: #4CAF50;
                color: white;
                cursor: pointer;
                display: block;
                font-size: 16px;
                border: none;
            }
            .btn:hover{
                background-color: grey;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <h2>Login Here</h2>
                <form class="" action="index.html" method="post">
                    <div class="textbox">
                        <input type="text" placeholder="Email" name="email" id="email" required>
                    </div>
                    <div class="textbox">
                        <input type="password" placeholder="Password" name="password" id="password" required>
                    </div>
                    <button type="submit" name="login" class="btn">Login</button>
                </form>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\belajar_laravel\resources\views/login.blade.php ENDPATH**/ ?>