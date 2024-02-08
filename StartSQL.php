<?php 
    session_start();
    require './inc/header.php'; 
?>

    <div class="clean-block clean-hero" style="background-image: url(&quot;assets/img/tech/image4.jpg&quot;);color: rgba(63,84,96,0.85);">
        <div class="text">
            <h2>Quizz de SQL&nbsp;</h2>
            <p>SQL est un langage standard pour stocker, manipuler et récupérer des données dans des bases de données.
Notre didacticiel SQL vous apprendra à utiliser SQL dans : MySQL, SQL Server, MS Access, Oracle, Sybase, Informix, Postgres et d'autres systèmes de base de données.
                 </p>

            <p>  Le Quiz contient 25 questions et il n'y a pas de limite de temps.
                Le test n'est pas officiel, c'est juste un bon moyen de voir ce que vous savez ou ne savez pas sur SQL.</p><a class="btn btn-outline-light active btn-lg" role="button" data-aos="fade" href="quiz-sql.php">Commencer le quiz</a>
        </div>
    </div>

<?php require_once './inc/footer.php' ?>