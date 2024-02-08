<?php require_once './inc/header.php' ?>
<?php require_once './inc/db.php' ?>

<?php
    if(!empty($_POST)){
        $errors = [];
        
        if(empty($_POST['nickname'] || !preg_match('/[^A-Za-z0-9:._-]/', $_POST['nickname']))){
            $errors['nickname'] = "Your nickname isn't valid";
        }else{
            $req = $pdo->prepare('SELECT id FROM users WHERE nickname = ?');
            $req->execute([$_POST['nickname']]);
            $user = $req->fetch();
            if($user){
                $errors['nickname'] = "This nickname is already taken";
            }
        }
        
        //We won't give tons of indices for the password but it still should be easy for the user
        if(empty($_POST['password']) || $_POST['password'] != $_POST['confirm_password']){
            $errors['password'] = "Your password is invalid";
        }

        //If the nickname is valid and free, and the password is good, we add the user in our database
        if(empty($errors)){
            $req = $pdo->prepare("INSERT INTO users (nickname, password) VALUES (:nickname, :password)");
            $req->bindParam(':nickname', ucfirst($_POST['nickname']), PDO::PARAM_STR);
            $req->bindParam(':password', $pass, PDO::PARAM_STR);
            $pass = md5($_POST['password']);
            $req->execute();

            //$user_id = $pdo->lastInsertId();

            $req = $pdo->prepare("INSERT INTO results (nickname) VALUES (:nickname)");
            $req->bindParam(':nickname', ucfirst($_POST['nickname']), PDO::PARAM_STR);
            $req->execute();

            header('Location: login.php');
            exit();
        }
    }
?>

<br><br><br><br>
<h1>Register and start learning</h1>

<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <p>We detected some errors :</p>
        <ul>
            <?php foreach($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<main class="page registration-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registration</h2>
                <p>Welcome to your study lessons</p>
            </div>
            <form action="" method="post">
                <div class="mb-3">
                    <label class="form-label" for="nickname">Nickname</label>
                    <input class="form-control item" type="text" name="nickname">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="password">Password</label>
                    <input class="form-control item" type="password" name="password">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="confirm_password">Confirm password</label>
                    <input class="form-control item" type="password" name="confirm_password">
                </div>
                <button class="btn btn-primary" type="submit">Register</button>
            </form>
        </div>
    </section>
</main>

<?php require_once './inc/footer.php' ;?>
