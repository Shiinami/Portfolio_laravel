<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/login.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <h1>Login</h1>
                <br>
                <span>use your account</span>
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Password" name="password" required />
                <button>Login</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <h1>Sign in</h1>
                <br>
                <span>use your account</span>
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Password" name="password" required />
                <button>Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Bre!</h1>
                    <p>please login with your account my Bro</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, My Friend!</h1>
                    <p>Enter your personal details, bro!</p>
                    <button class="ghost" id="signUp">Login</button>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo e(asset('assets/js/login.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\Users\devam\Documents\porto\PortfolioLaravel\resources\views/auth/login.blade.php ENDPATH**/ ?>