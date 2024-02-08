<!-- < ?php if(isset($_SESSION['auth'])){session_start();}?> -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:100italic'" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js">
    
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <link rel="shortcut icon" href="#" />
    <script src="https://unpkg.com/codeflask/build/codeflask.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <?php if(isset($_SESSION['auth'])): ?>
            <div class="container"><a class="navbar-brand logo" href="choix.php">Hackathon</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <?php else: ?>
            <div class="container"><a class="navbar-brand logo" href="index.php">Hackathon</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <?php endif; ?>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <?php if(isset($_SESSION['auth'])): ?>
                        <li class="nav-item"><a class="nav-link active" href="logout.php">Logout</a></li>
                        <?php echo "<span style='color:green;cursor:default;'>" . $_SESSION['auth']->nickname . "</span>" ?>
                    <?php else: ?>
                        <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link active" href="register.php">Register</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

