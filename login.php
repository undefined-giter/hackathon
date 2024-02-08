<?php 
    session_start();
    require_once './inc/header.php';
?>

<?php
    if(!empty($_POST) && !empty($_POST['nickname']) && !empty($_POST['password'])){
        require_once './inc/db.php';
        //We get the info of the nickname the user asked to login
        $req = $pdo->prepare('SELECT * FROM users WHERE nickname = :nickname');
        $req->execute(['nickname' => ucfirst($_POST['nickname'])]);
        $user = $req->fetch();

        //If we got an user registered at this nickname and he got the good password,
        //we redirect the user on the choice page so he can start is training
        if(md5($_POST['password']) == $user->password){
            $_SESSION['auth'] = $user;
            header('Location: choix.php');
            exit();
        }else{
            echo '<br><br><br><br><span class="alert alert-danger">The couple nickname / password is incorrect</span>';
        }
    }
?>

<br><br><br><br>
<h1>Login</h1>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label" for="nickname">Nickname</label>
                        <input class="form-control item" type="text" name="nickname">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                    <button type="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php require './inc/footer.php'; ?>