<?php 
    session_start();
    require './inc/header.php'; 
?>

    <div class="clean-block clean-hero" style="background-image: url(&quot;assets/img/tech/image4.jpg&quot;);color: rgba(123,133,170,0.85);">
        <div class="text">
            <h2>Quiz de Programmation</h2>
            <p><br>Le test contient 25 questions et il n'y a pas de limite de temps.</p>

            <p>Le test n'est pas officiel, c'est juste un bon moyen de voir ce que vous savez ou ne savez pas sur la Programmation &nbsp;<br><br></p><a class="btn btn-outline-light active btn-lg" role="button" href="quiz-prog.php">Commencer le quiz</a>
        </div>
    </div>

<?php require_once './inc/footer.php' ?>