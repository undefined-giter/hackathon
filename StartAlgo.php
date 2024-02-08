<?php 
    session_start();
    require './inc/header.php'; 
?>

    <div class="clean-block clean-hero" style="background-image: url(&quot;assets/img/tech/image4.jpg&quot;);color: rgba(156,121,96,0.85);">
        <div class="text">
            <h2>Quizz de ALGO&nbsp;</h2>
            <p>L'algorithmique est l’ensemble des règles et des techniques qui sont impliquées dans la définition et la conception d'algorithmes,
                 c'est à dire de processus systématiques de résolution, par le calcul, d'un problème permettant de décrire les étapes vers le résultat.
                </p>

            <p>Le test contient 25 questions et il n'y a pas de limite de temps.
                Le test n'est pas officiel, c'est juste un bon moyen de voir ce que vous savez ou ne savez pas sur L'algo &nbsp;</p><a class="btn btn-outline-light active btn-lg" role="button" href="quiz-algo.php">Commencer le quiz</a>
        </div>
    </div>

<?php require_once './inc/footer.php' ?>