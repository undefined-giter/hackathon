<?php 
    session_start();
    require_once './inc/header.php'; 
?>
<link rel="stylesheet" href="assets/css/styles2.css">
    <section class="clean-block clean-services dark">
        <div class="container" style="display: flex; ">
            <div class="block-heading" style="margin-right: 250px; width: 200%;">
                </br>
                <h2 class="text-info">Quiz SQL</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
                <form >
                    <B>Question 1:</B>
                    Que signifie SQL ?<BR>
                    <div   class="question">
                        <div name="q"class="q q0">
                        <br><input type="checkbox"  name="choix0" value=1></input><label id="0l0">Structured Query Language</label> 
                        <br><input type="checkbox"  name="choix0" value=0><label id="0l1">Structured Question Language</label>
                        <br><input type="checkbox"name="choix0" value=0><label id="0l2">Strong Question Language</label>
                        <br><br>
                        </div>
                        <B>Question 2:</B>
                        Quelle instruction SQL est utilisée pour extraire des données d'une base de données ?<BR>
                         <div name="q" class="q q1">
                            <br><input type="checkbox" name="choix1" value=0><label id="1l0">OPEN</label> 
                            <br><input type="checkbox" name="choix1" value=1><label id="1l1">EXTRACT</label> 
                            <br><input type="checkbox" name="choix1" value=0><label id="1l2">SELECT</label> 
                            <br><input type="checkbox" name="choix1" value=0><label id="1l3">GET</label> 
                            <br><br>
                        </div> 
                        <B>Question 3:</B>
                        Quelle instruction SQL est utilisée pour mettre à jour les données d'une base de données ?<BR>
                         <div name="q" class="q q2">
                            <br><input type="checkbox" name="choix2" value=1><label id="2l0">UPDATE</label> 
                            <br><input type="checkbox" name="choix2" value=0><label id="2l1">SAVE</label> 
                            <br><input type="checkbox" name="choix2" value=0><label id="2l2">MODIFY</label> 
                            <br><input type="checkbox" name="choix2" value=0><label id="2l3">SAVE AS</label> 
                            <br><br>
                        </div> 
                        <B>Question 4:</B>
                        Quelle instruction SQL est utilisée pour supprimer des données d'une base de données ?<BR>
                         <div name="q" class="q q3">
                            <br><input type="checkbox" name="choix3" value=0><label id="3l0">COLLAPS</label> 
                            <br><input type="checkbox" name="choix3" value=1><label id="3l1">DELETE</label> 
                            <br><input type="checkbox" name="choix3" value=0><label id="3l2">REMOVE</label> 
                            <br><br>
                        </div> 
                        <B>Question 5:</B>
                        Quelle instruction SQL est utilisée pour inserer des données d'une base de données ?<BR>
                         <div name="q" class="q q4">
                            <br><input type="checkbox" name="choix4" value=1><label id="4l0">ADD NEW</label> 
                            <br><input type="checkbox" name="choix4" value=0><label id="4l1">INSERT INTO</label> 
                            <br><input type="checkbox" name="choix4" value=0><label id="4l2">INSERT NEW</label> 
                            <br><input type="checkbox" name="choix4" value=0><label id="4l3">ADD RECORD</label> 
                            <br><br>
                        </div> 
                        <B>Question 6:</B>
                        Avec SQL, comment sélectionnez-vous une colonne nommée "FirstName" dans une table nommée "Persons" ?<BR>
                         <div name="q" class="q q5">
                            <br><input type="checkbox" name="choix5" value=0><label id="5l0">SELECT Persons.FirstName</label> 
                            <br><input type="checkbox" name="choix5" value=0><label id="5l1">EXTRACT FirstName FROM Persons</label> 
                            <br><input type="checkbox" name="choix5" value=1><label id="5l2">SELECT FirstName FROM Personsx</label> 
                            <br><br>
                        </div> 
                        <B>Question 7:</B>
                        Avec SQL, comment sélectionner toutes les colonnes d'une table nommée "Persons" ?<BR>
                         <div name="q" class="q q6">
                            <br><input type="checkbox" name="choix6" value=0><label id="6l0">SELECT *.PersonS</label> 
                            <br><input type="checkbox" name="choix6" value=1><label id="6l1">SELECT * FROM Persons</label> 
                            <br><input type="checkbox" name="choix6" value=0><label id="6l2">SELECT [all] FROM Persons</label> 
                            <br><input type="checkbox" name="choix6" value=0><label id="6l3">SELECT Persons</label> 
                            <br><br>
                        </div> 
                        <B>Question 8:</B>
                        Avec SQL, comment sélectionnez-vous tous les enregistrements d'une table nommée "Persons" où la valeur de la colonne "FirstName" est "Peter" ?<BR>
                         <div name="q" class="q q7">
                            <br><input type="checkbox" name="choix7" value=1><label id="7l0">SELECT * FROM Persons WHERE FirstName=’Peter</label> 
                            <br><input type="checkbox" name="choix7" value=0><label id="7l1">SELECT [all] FROM Persons WHERE FirstNAME=’Peter’</label> 
                            <br><input type="checkbox" name="choix7" value=0><label id="7l2">SELECT [all] FROM Persons WHERE FirstNAME LIKE ’Peter’</label> 
                            <br><input type="checkbox" name="choix7" value=0><label id="7l3">SELECT * FROM Persons WHERE FirstName <> ’Peter’</label> 
                            <br><br>
                        </div> 
                        <B>Question 9:</B>
                        Avec SQL, comment sélectionner tous les enregistrements d'une table nommée "Persons" où la valeur de la colonne "FirstName" commence par un "a" ?<BR>
                         <div name="q" class="q q8">
                            <br><input type="checkbox" name="choix8" value=1><label id="8l0">SELECT * FROM Persons WHERE FirstName LIKE ’%a’</label>
                            <br><input type="checkbox" name="choix8" value=0><label id="8l1">SELECT * FROM Persons WHERE FirstName=’%a%’</label> 
                            <br><input type="checkbox" name="choix8" value=0><label id="8l2">SELECT * FROM Persons WHERE FirstName=’a’</label> 
                            <br><input type="checkbox" name="choix8" value=0><label id="8l3">SELECT * FROM Persons WHERE FirstName=’a’</label> 
                            <br><input type="checkbox" name="choix8" value=0><label id="8l4">SELECT * FROM Persons WHERE FirstName LIKE ’a%’</label> 
                            <br><br>
                        </div> 
                        <B>Question 10:</B>
                        Quelle instruction SQL est utilisée pour extraire des données d'une base de données ?<BR>
                         <div name="q" class="q q9">
                            <br><input type="checkbox" name="choix9" value=1><label id="9l0">TRUE</label> 
                            <br><input type="checkbox" name="choix9" value=0><label id="9l1">FALSE</label> 
                            <br><br>
                        </div> 
                        <B>Question 11:</B>
                        Avec SQL, comment sélectionnez-vous tous les enregistrements d'une table nommée "Persons" où le "FirstName" est "Peter" et le "LastName" est "Jackson" ?<BR>
                         <div name="q" class="q q10">
                            <br><input type="checkbox" name="choix10" value=1><label id="10l0">SELECT * FROM Persons WHERE FirstName=’Peter’ AND LastName=’Jackson</label> 
                            <br><input type="checkbox" name="choix10" value=0><label id="10l1">SELECT FirstName=’Peter’, LastName=’Jackson’ FROM Person</label> 
                            <br><input type="checkbox" name="choix10" value=0><label id="10l2">SELECT * FROM Persons WHERE FirstName< >’Peter’ AND LastName< >’Jackson</label> 
                            <br><br>
                        </div> 
                        <B>Question 12:</B>
                        Avec SQL, comment sélectionnez-vous tous les enregistrements d'une table nommée "Persons" où le "LastName" est alphabétiquement compris entre (et y compris) "Hansen" et "Pettersen" ?<BR>
                         <div name="q" class="q q11">
                            <br><input type="checkbox" name="choix11" value=0><label id="11l0">SELECT * FROM Persons WHERE LastName >’Hansen’ AND LastName<’Pettersen’</label> 
                            <br><input type="checkbox" name="choix11" value=1><label id="11l1">SELECT * FROM Persons WHERE LastName BETWEEN’ Hansen’ AND ’Pettersen</label> 
                            <br><input type="checkbox" name="choix11" value=0><label id="11l2">SELECT LastName >’Hansen’ AND LastName<’Pettersen’ FROM Person</label> 
                            <br><br>
                        </div> 
                        <B>Question 13:</B>
                        Quelle instruction SQL est utilisée pour renvoyer uniquement des valeurs différentes ?<BR>
                         <div name="q" class="q q12">
                            <br><input type="checkbox" name="choix12" value=0><label id="12l0">SELECT UNIQUEx</label> 
                            <br><input type="checkbox" name="choix12" value=1><label id="12l1">SELECT DISTINCT</label> 
                            <br><input type="checkbox" name="choix12" value=0><label id="12l2">SELECT DIFFERENT</label> 
                            <br><br>
                        </div> 
                        <B>Question 14:</B>
                        Quel mot-clé SQL est utilisé pour trier le jeu de résultats ?<BR>
                         <div name="q" class="q q13">
                            <br><input type="checkbox" name="choix13" value=0><label id="13l0">ORDER</label> 
                            <br><input type="checkbox" name="choix13" value=0><label id="13l1">SORT</label> 
                            <br><input type="checkbox" name="choix13" value=1><label id="13l2">ORDER BY</label> 
                            <br><input type="checkbox" name="choix13" value=0><label id="13l3">SORT BY</label> 
                            <br><br>
                        </div> 
                        <B>Question 15:</B>
                        Avec SQL, comment pouvez-vous renvoyer tous les enregistrements d'une table nommée "Persons" triés par ordre décroissant de "FirstName" ?<BR>
                         <div name="q" class="q q14">
                            <br><input type="checkbox" name="choix14" value=0><label id="14l0">SELECT * FROM Persons ORDER FirstName DESC</label> 
                            <br><input type="checkbox" name="choix14" value=1><label id="14l1">SELECT * FROM Persons ORDER BY FirstName DESC</label> 
                            <br><input type="checkbox" name="choix14" value=0><label id="14l2">SELECT * FROM Persons SORT ‘FirstName’ DESC</label> 
                            <br><input type="checkbox" name="choix14" value=0><label id="14l3">SELECT * FROM Persons SORT BY ‘FirstName’ DESC</label> 
                            <br><br>
                        </div> 
                        <B>Question 16:</B>
                        Avec SQL, comment insérer un nouvel enregistrement dans la table "Persons" ?<BR>
                         <div name="q" class="q q15">
                            <br><input type="checkbox" name="choix15" value=0><label id="15l0">INSERT (‘Jimmy’, ’Jackson’) INTO Persons</label> 
                            <br><input type="checkbox" name="choix15" value=1><label id="15l1">INSERT INTO Persons VALUES (‘Jimmy’, ’Jackson’)</label> 
                            <br><input type="checkbox" name="choix15" value=0><label id="15l2">INSERT VALUES (‘Jimmy’, ’Jackson’) INTO PersonS</label> 
                            <br><br>
                        </div> 
                        <B>Question 17:</B>
                        Avec SQL, comment pouvez-vous insérer "Olsen" comme "LastName" dans la table "Persons" ?<BR>
                         <div name="q" class="q q16">
                            <br><input type="checkbox" name="choix16" value=0><label id="16l0">INSERT INTO Persons (‘Olsen’) INTO LastName</label> 
                            <br><input type="checkbox" name="choix16" value=0><label id="16l1">INSERT (‘Olsen’) INTO Persons (LastName</label> 
                            <br><input type="checkbox" name="choix16" value=1><label id="16l2">INSERT INTO Persons (LastName) VALUES (‘Olsen’)</label> 
                            <br><br>
                        </div> 
                        <B>Question 18:</B>
                        Comment changer "Hansen" en "Nilsen" dans la colonne "LastName" de la table Persons ?<BR>
                         <div name="q" class="q q17">
                            <br><input type="checkbox" name="choix17" value=1><label id="17l0">UPDATE Persons SET LastName=’Nilsen’ WHERE LastName=’Hansen’</label> 
                            <br><input type="checkbox" name="choix17" value=0><label id="17l1">UPDATE Persons SET LastName=’ Hansen’ INTO LastName=’ Nilsen’</label> 
                            <br><input type="checkbox" name="choix17" value=0><label id="17l2">MODIFY Persons SET LastName=’Nilsen’ WHERE LastName=’Hansen’</label> 
                            <br><input type="checkbox" name="choix17" value=0><label id="17l3">MODIFY Persons SET LastName=’ Hansen’ INTO LastName=’ Nilsen’</label> 
                            <br><br
                        </div> 
                        <B>Question 19:</B>
                        Avec SQL, comment pouvez-vous supprimer les enregistrements où le "FirstName" est "Peter" dans la table Persons ?<BR>
                         <div name="q" class="q q18">
                            <br><input type="checkbox" name="choix18" value=0><label id="18l0">DELETE ROW FirstName= ‘Peter’ FROM Persons</label> 
                            <br><input type="checkbox" name="choix18" value=0><label id="18l1">DELETE FirstName=’Peter” From Persons</label> 
                            <br><input type="checkbox" name="choix18" value=1><label id="18l2">DELETE FROM Persons WHERE FisrtName =’Peter’</label> 
                            <br><br>
                        </div> 
                        <B>Question 20:</B>
                        Avec SQL, comment renvoyer le nombre d'enregistrements dans la table "Persons" ?<BR>
                         <div name="q" class="q q19">
                            <br><input type="checkbox" name="choix19" value=0><label id="19l0">SELECT COLUMNS(*) FROM Persons</label> 
                            <br><input type="checkbox" name="choix19" value=0><label id="19l1">SELECT LEN(*) FROM Persons</label> 
                            <br><input type="checkbox" name="choix19" value=0><label id="19l2">SELECT NO(*) FROM Persons</label> 
                            <br><input type="checkbox" name="choix19" value=1><label id="19l3">SELECT COUNT(*) FROM Persons</label> 
                            <br><br>
                        </div> 
                        <B>Question 21:</B>
                        Quel est le type de jointure le plus courant ?<BR>
                         <div name="q" class="q q20">
                            <br><input type="checkbox" name="choix20" value=0><label id="20l0">JOINED</label> 
                            <br><input type="checkbox" name="choix20" value=0><label id="20l1">JOINED TABLE</label> 
                            <br><input type="checkbox" name="choix20" value=1><label id="20l2">INNER JOIN</label> 
                            <br><input type="checkbox" name="choix20" value=0><label id="20l3">INSIDE JOIN</label> 
                            <br><br>
                        </div> 
                        <B>Question 22:</B>
                        Quel opérateur est utilisé pour sélectionner des valeurs dans une plage ?<BR>
                         <div name="q" class="q q21">
                            <br><input type="checkbox" name="choix21" value=0><label id="21l0">RANGE</label> 
                            <br><input type="checkbox" name="choix21" value=1><label id="21l1">BETWEEN</label> 
                            <br><input type="checkbox" name="choix21" value=0><label id="21l2">WITHIN</label> 
                            <br><br>
                        </div> 
                        <B>Question 23:</B>
                        La contrainte NOT NULL force une colonne à ne pas accepter les valeurs NULL.<BR>
                         <div name="q" class="q q22">
                            <br><input type="checkbox" name="choix22" value=1><label id="22l0">True</label> 
                            <br><input type="checkbox" name="choix22" value=0><label id="22l1">False</label>
                            <br><br>
                        </div> 
                        <B>Question 24:</B>
                        Quel opérateur est utilisé pour rechercher un modèle spécifié dans une colonne ?<BR>
                         <div name="q" class="q q23">
                            <br><input type="checkbox" name="choix23" value=0><label id="23l0">FROM</label> 
                            <br><input type="checkbox" name="choix23" value=1><label id="23l1">LIKE</label> 
                            <br><input type="checkbox" name="choix23" value=0><label id="23l2">GET</label> 
                            <br><br>
                        </div> 
                        <B>Question 25:</B>
                        Quelle instruction SQL est utilisée pour créer une table de base de données appelée "Clients" ?<BR>
                         <div name="q" class="q q24">
                            <br><input type="checkbox" name="choix24" value=1><label id="24l0">CREATE TABLE Customers</label> 
                            <br><input type="checkbox" name="choix24" value=0><label id="24l1">CREATE DB Customer</label> 
                            <br><input type="checkbox" name="choix24" value=0><label id="24l2">CREATE DATABASE TABLE Customers</label> 
                            <br><input type="checkbox" name="choix24" value=0><label id="24l3">CREATE DATABASE TAB Customers</label> 
                            <br><br>
                        </div> 
                        <B>Question 26:</B>
                        SQL est devenu un standard de :<BR>
                         <div name="q" class="q q25">
                            <br><input type="checkbox" name="choix25" value=1><label id="25l0">AUCUNE DE CES REPONSES</label> 
                            <br><input type="checkbox" name="choix25" value=0><label id="25l1">ANSI</label> 
                            <br><input type="checkbox" name="choix25" value=0><label id="25l2">ANSI ET ISO</label> 
                            <br><br>
                        </div> 
                        <B>Question 27:</B>
                        Quelle commande SQL modifie les données qui existent déjà dans une table ?<BR>
                         <div name="q" class="q q26">
                            <br><input type="checkbox" name="choix26" value=1><label id="26l0">Update</label> 
                            <br><input type="checkbox" name="choix26" value=0><label id="26l1">Edit</label> 
                            <br><input type="checkbox" name="choix26" value=0><label id="26l2">Modify</label> 
                            <br><br>
                        </div> 
                        <B>Question 28:</B>
                        Laquelle des fonctions suivantes n’est pas une fonction SQL Aggregate ?<BR>
                         <div name="q" class="q q27">
                            <br><input type="checkbox" name="choix27" value=1><label id="27l0">ABS</label> 
                            <br><input type="checkbox" name="choix27" value=0><label id="27l1">COUNT</label> 
                            <br><input type="checkbox" name="choix27" value=0><label id="27l2">SUM</label> 
                            <br><input type="checkbox" name="choix27" value=0><label id="27l3">AVG</label> 
                            <br><br>
                        </div> 
                        <B>Question 29:</B>
                        Lequel des caractères suivants est utilisé pour relier un nom de table a un nom de colonne afin de créer un nom de colonne complet<BR>
                         <div name="q" class="q q28">
                            <br><input type="checkbox" name="choix28" value=1><label id="28l0">.</label> 
                            <br><input type="checkbox" name="choix28" value=0><label id="28l1">*</label> 
                            <br><input type="checkbox" name="choix28" value=0><label id="28l2">+</label> 
                            <br><input type="checkbox" name="choix28" value=0><label id="28l3">-</label> 
                            <br><br>
                        </div> 
                        <B>Question 30:</B>
                        Parmi les affirmations suivantes concernant la fonction MAX en SQL, lesquelles sont vraies ?<BR>
                         <div name="q" class="q q29">
                            <br><input type="checkbox" name="choix29" value=1><label id="29l0">Peut être utilisé sur n'importe quel type de données.</label> 
                            <br><input type="checkbox" name="choix29" value=0><label id="29l1">Renvoie la valeur maximale de l'attribut.</label> 
                            <br><input type="checkbox" name="choix29" value=0><label id="29l2">C'est une fonction d'agrégation.</label> 
                            <br><input type="checkbox" name="choix29" value=0><label id="29l3">Toutes les déclarations ci-dessus sont vraies.</label> 
                            <br><br>
                        </div> 
                    </div>
                </form>
                <br>
                <div id="submit" class="btn-group" role="group"><a class="btn btn-primary active" role="button" onclick="test()" >Soumettre</a></div>
                    <div id="result" style="display:none">
                        <form action="result_SQL.php" method="get">
                            <input type="hidden" value='' name='earned_SQL' id='earned_SQL'>
                            <input type="hidden" value='' name='max_SQL' id='max_SQL'>
                            <button type="submit" class="btn btn-success">Enregistrez votre résultat</button>
                        </form>
                    </div>
                <br>
                <hr>
                <br>
                    <div id="scoreX" class="scoreX btn-group" role="group"><a class="btn btn-primary active" role="button" href="Score.php" >Historique Scores</a></div>
                        <p > Votre score est de <span id="sum"></span> sur <span id="total"></span> </p>
                </div>  
                <br>
                <hr>
                <br>
                <div id="scoreX" class="scoreX btn-group" role="group"><a class="btn btn-primary active" role="button" href="Score.php" >Historique Scores</a>
                <br>
                <p > Votre score est de <span id="sum"></span> sur <span id="total"></span></p>
                </div>
            </div>
            <div class="code-editor" style="margin-top: 90px ; width:2000px;height:5450px;position: relative;" ></div>
                <script>
                    const flask = new CodeFlask('.code-editor', {
                         language: 'js',
                         lineNumbers: true,
                         defaultTheme: true,
                    });

                        flask.onUpdate((code) => {
                        });

                        const new_content = "/* Editeur SQL */";

                        flask.updateCode(new_content);
                        //flask.addLanguage('sql', options);

                    </script>

        </div>
        
<div id="confet" class="confet">
    <div class="confetti-301"></div>
    <div class="confetti-300"></div>
    <div class="confetti-299"></div>
    <div class="confetti-298"></div>
    <div class="confetti-297"></div>
    <div class="confetti-296"></div>
    <div class="confetti-295"></div>
    <div class="confetti-294"></div>
    <div class="confetti-293"></div>
    <div class="confetti-292"></div>
    <div class="confetti-291"></div>
    <div class="confetti-290"></div>
    <div class="confetti-289"></div>
    <div class="confetti-288"></div>
    <div class="confetti-287"></div>
    <div class="confetti-286"></div>
    <div class="confetti-285"></div>
    <div class="confetti-284"></div>
    <div class="confetti-283"></div>
    <div class="confetti-282"></div>
    <div class="confetti-281"></div>
    <div class="confetti-280"></div>
    <div class="confetti-279"></div>
    <div class="confetti-278"></div>
    <div class="confetti-277"></div>
    <div class="confetti-276"></div>
    <div class="confetti-275"></div>
    <div class="confetti-274"></div>
    <div class="confetti-273"></div>
    <div class="confetti-272"></div>
    <div class="confetti-271"></div>
    <div class="confetti-270"></div>
    <div class="confetti-269"></div>
    <div class="confetti-268"></div>
    <div class="confetti-267"></div>
    <div class="confetti-266"></div>
    <div class="confetti-265"></div>
    <div class="confetti-264"></div>
    <div class="confetti-263"></div>
    <div class="confetti-262"></div>
    <div class="confetti-261"></div>
    <div class="confetti-260"></div>
    <div class="confetti-259"></div>
    <div class="confetti-258"></div>
    <div class="confetti-257"></div>
    <div class="confetti-256"></div>
    <div class="confetti-255"></div>
    <div class="confetti-254"></div>
    <div class="confetti-253"></div>
    <div class="confetti-252"></div>
    <div class="confetti-251"></div>
    <div class="confetti-250"></div>
    <div class="confetti-249"></div>
    <div class="confetti-248"></div>
    <div class="confetti-247"></div>
    <div class="confetti-246"></div>
    <div class="confetti-245"></div>
    <div class="confetti-244"></div>
    <div class="confetti-243"></div>
    <div class="confetti-242"></div>
    <div class="confetti-241"></div>
    <div class="confetti-240"></div>
    <div class="confetti-239"></div>
    <div class="confetti-238"></div>
    <div class="confetti-237"></div>
    <div class="confetti-236"></div>
    <div class="confetti-235"></div>
    <div class="confetti-234"></div>
    <div class="confetti-233"></div>
    <div class="confetti-232"></div>
    <div class="confetti-231"></div>
    <div class="confetti-230"></div>
    <div class="confetti-229"></div>
    <div class="confetti-228"></div>
    <div class="confetti-227"></div>
    <div class="confetti-226"></div>
    <div class="confetti-225"></div>
    <div class="confetti-224"></div>
    <div class="confetti-223"></div>
    <div class="confetti-222"></div>
    <div class="confetti-221"></div>
    <div class="confetti-220"></div>
    <div class="confetti-219"></div>
    <div class="confetti-218"></div>
    <div class="confetti-217"></div>
    <div class="confetti-216"></div>
    <div class="confetti-215"></div>
    <div class="confetti-214"></div>
    <div class="confetti-213"></div>
    <div class="confetti-212"></div>
    <div class="confetti-211"></div>
    <div class="confetti-210"></div>
    <div class="confetti-209"></div>
    <div class="confetti-208"></div>
    <div class="confetti-207"></div>
    <div class="confetti-206"></div>
    <div class="confetti-205"></div>
    <div class="confetti-204"></div>
    <div class="confetti-203"></div>
    <div class="confetti-202"></div>
    <div class="confetti-201"></div>
    <div class="confetti-200"></div>
    <div class="confetti-199"></div>
    <div class="confetti-198"></div>
    <div class="confetti-197"></div>
    <div class="confetti-196"></div>
    <div class="confetti-195"></div>
    <div class="confetti-194"></div>
    <div class="confetti-193"></div>
    <div class="confetti-192"></div>
    <div class="confetti-191"></div>
    <div class="confetti-190"></div>
    <div class="confetti-189"></div>
    <div class="confetti-188"></div>
    <div class="confetti-187"></div>
    <div class="confetti-186"></div>
    <div class="confetti-185"></div>
    <div class="confetti-184"></div>
    <div class="confetti-183"></div>
    <div class="confetti-182"></div>
    <div class="confetti-181"></div>
    <div class="confetti-180"></div>
    <div class="confetti-179"></div>
    <div class="confetti-178"></div>
    <div class="confetti-177"></div>
    <div class="confetti-176"></div>
    <div class="confetti-175"></div>
    <div class="confetti-174"></div>
    <div class="confetti-173"></div>
    <div class="confetti-172"></div>
    <div class="confetti-171"></div>
    <div class="confetti-170"></div>
    <div class="confetti-169"></div>
    <div class="confetti-168"></div>
    <div class="confetti-167"></div>
    <div class="confetti-166"></div>
    <div class="confetti-165"></div>
    <div class="confetti-164"></div>
    <div class="confetti-163"></div>
    <div class="confetti-162"></div>
    <div class="confetti-161"></div>
    <div class="confetti-160"></div>
    <div class="confetti-159"></div>
    <div class="confetti-158"></div>
    <div class="confetti-157"></div>
    <div class="confetti-156"></div>
    <div class="confetti-155"></div>
    <div class="confetti-154"></div>
    <div class="confetti-153"></div>
    <div class="confetti-152"></div>
    <div class="confetti-151"></div>
    <div class="confetti-150"></div>
    <div class="confetti-149"></div>
    <div class="confetti-148"></div>
    <div class="confetti-147"></div>
    <div class="confetti-146"></div>
    <div class="confetti-145"></div>
    <div class="confetti-144"></div>
    <div class="confetti-143"></div>
    <div class="confetti-142"></div>
    <div class="confetti-141"></div>
    <div class="confetti-140"></div>
    <div class="confetti-139"></div>
    <div class="confetti-138"></div>
    <div class="confetti-137"></div>
    <div class="confetti-136"></div>
    <div class="confetti-135"></div>
    <div class="confetti-134"></div>
    <div class="confetti-133"></div>
    <div class="confetti-132"></div>
    <div class="confetti-131"></div>
    <div class="confetti-130"></div>
    <div class="confetti-129"></div>
    <div class="confetti-128"></div>
    <div class="confetti-127"></div>
    <div class="confetti-126"></div>
    <div class="confetti-125"></div>
    <div class="confetti-124"></div>
    <div class="confetti-123"></div>
    <div class="confetti-122"></div>
    <div class="confetti-121"></div>
    <div class="confetti-120"></div>
    <div class="confetti-119"></div>
    <div class="confetti-118"></div>
    <div class="confetti-117"></div>
    <div class="confetti-116"></div>
    <div class="confetti-115"></div>
    <div class="confetti-114"></div>
    <div class="confetti-113"></div>
    <div class="confetti-112"></div>
    <div class="confetti-111"></div>
    <div class="confetti-110"></div>
    <div class="confetti-109"></div>
    <div class="confetti-108"></div>
    <div class="confetti-107"></div>
    <div class="confetti-106"></div>
    <div class="confetti-105"></div>
    <div class="confetti-104"></div>
    <div class="confetti-103"></div>
    <div class="confetti-102"></div>
    <div class="confetti-101"></div>
    <div class="confetti-100"></div>
    <div class="confetti-99"></div>
    <div class="confetti-98"></div>
    <div class="confetti-97"></div>
    <div class="confetti-96"></div>
    <div class="confetti-95"></div>
    <div class="confetti-94"></div>
    <div class="confetti-93"></div>
    <div class="confetti-92"></div>
    <div class="confetti-91"></div>
    <div class="confetti-90"></div>
    <div class="confetti-89"></div>
    <div class="confetti-88"></div>
    <div class="confetti-87"></div>
    <div class="confetti-86"></div>
    <div class="confetti-85"></div>
    <div class="confetti-84"></div>
    <div class="confetti-83"></div>
    <div class="confetti-82"></div>
    <div class="confetti-81"></div>
    <div class="confetti-80"></div>
    <div class="confetti-79"></div>
    <div class="confetti-78"></div>
    <div class="confetti-77"></div>
    <div class="confetti-76"></div>
    <div class="confetti-75"></div>
    <div class="confetti-74"></div>
    <div class="confetti-73"></div>
    <div class="confetti-72"></div>
    <div class="confetti-71"></div>
    <div class="confetti-70"></div>
    <div class="confetti-69"></div>
    <div class="confetti-68"></div>
    <div class="confetti-67"></div>
    <div class="confetti-66"></div>
    <div class="confetti-65"></div>
    <div class="confetti-64"></div>
    <div class="confetti-63"></div>
    <div class="confetti-62"></div>
    <div class="confetti-61"></div>
    <div class="confetti-60"></div>
    <div class="confetti-59"></div>
    <div class="confetti-58"></div>
    <div class="confetti-57"></div>
    <div class="confetti-56"></div>
    <div class="confetti-55"></div>
    <div class="confetti-54"></div>
    <div class="confetti-53"></div>
    <div class="confetti-52"></div>
    <div class="confetti-51"></div>
    <div class="confetti-50"></div>
    <div class="confetti-49"></div>
    <div class="confetti-48"></div>
    <div class="confetti-47"></div>
    <div class="confetti-46"></div>
    <div class="confetti-45"></div>
    <div class="confetti-44"></div>
    <div class="confetti-43"></div>
    <div class="confetti-42"></div>
    <div class="confetti-41"></div>
    <div class="confetti-40"></div>
    <div class="confetti-39"></div>
    <div class="confetti-38"></div>
    <div class="confetti-37"></div>
    <div class="confetti-36"></div>
    <div class="confetti-35"></div>
    <div class="confetti-34"></div>
    <div class="confetti-33"></div>
    <div class="confetti-32"></div>
    <div class="confetti-31"></div>
    <div class="confetti-30"></div>
    <div class="confetti-29"></div>
    <div class="confetti-28"></div>
    <div class="confetti-27"></div>
    <div class="confetti-26"></div>
    <div class="confetti-25"></div>
    <div class="confetti-24"></div>
    <div class="confetti-23"></div>
    <div class="confetti-22"></div>
    <div class="confetti-21"></div>
    <div class="confetti-20"></div>
    <div class="confetti-19"></div>
    <div class="confetti-18"></div>
    <div class="confetti-17"></div>
    <div class="confetti-16"></div>
    <div class="confetti-15"></div>
    <div class="confetti-14"></div>
    <div class="confetti-13"></div>
    <div class="confetti-12"></div>
    <div class="confetti-11"></div>
    <div class="confetti-10"></div>
    <div class="confetti-9"></div>
    <div class="confetti-8"></div>
    <div class="confetti-7"></div>
    <div class="confetti-6"></div>
    <div class="confetti-5"></div>
    <div class="confetti-4"></div>
    <div class="confetti-3"></div>
    <div class="confetti-2"></div>
    <div class="confetti-1"></div>
    <div class="confetti-0"></div> 
</div>
    </section>

    <script src="assets/js/sql.js"></script>
<?php require_once './inc/footer.php' ?>
