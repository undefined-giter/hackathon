<?php 
    session_start();
    require_once './inc/header.php';
    require_once './inc/db.php';

    echo "<br><br><br><br><br>";
    $req = $pdo->prepare('SELECT * FROM results WHERE nickname = :nickname');
    $req->execute([':nickname' => $_SESSION['auth']->nickname]);
    $results = $req->fetchObject();

    echo "<div style='text-align:center'>";
    if($results->earned_SQL != NULL && $results->max_SQL != NULL){
        echo "Résultat SQL :  ". $results->earned_SQL . " / " . $results->max_SQL . "<br><br>";
    }
    if($results->earned_algo != NULL && $results->earned_algo != NULL){
        echo "Résultat algorithmie :  ". $results->earned_algo . " / " . $results->earned_algo . "<br><br>";
    }
    if($results->earned_prog != NULL && $results->max_prog != NULL){
        echo "Résultat programmation :  ". $results->earned_prog . " / " . $results->max_prog;
    }
    echo "</div>";
?>

    <section class="clean-block clean-services dark">
        <div class="container">
            <br>
            <div class="block-heading">
                <h2 class="text-info">Votre Score&nbsp;</h2>
            </div>
            <div class="row">
                <div class="col d-lg-flex justify-content-lg-center">
                    <div class="btn-group" role="group"><a class="btn btn-primary active" role="button" href="choix.php">Acceuil</a></div>
                </div>
            </div>
        </div>
    </section>

    <?php
        
    ?>

<?php require_once './inc/footer.php' ?>