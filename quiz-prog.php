<?php 
    session_start();
    require './inc/header.php'; 
?>
<link rel="stylesheet" href="assets/css/styles3.css">
    <section class="clean-block clean-services dark">
        <div class="container" style="display: flex; ">
            <div class="block-heading" style="margin-right: 250px; width: 200%;">
                </br>
                <h2 class="text-info">Quiz Programmation</h2>
                <form >
                    <B>Question 1:</B>
                    Que signifie HTML ?<BR>
                    <div   class="question">
                        <div name="q"class="q q0">
                        <br><input type="checkbox"  name="choix0" value=0></input><label id="0l0">Hyper Text Markup Language</label> 
                        <br><input type="checkbox"  name="choix0" value=0><label id="0l1">Home Tool Markup Language</label>
                        <br><input type="checkbox"name="choix0" value=1><label id="0l2">Hyperlinks and Text Markup Language</label>
                        <br><br>
                        </div>
                        <B>Question 2:</B>
                        Choisissez l'élément HTML correct pour le titre le plus grand<BR>
                         <div name="q" class="q q1">
                            <br><input type="checkbox" name="choix1" value=1><label id="1l0">&lt;head&gt;</label> 
                            <br><input type="checkbox" name="choix1" value=0><label id="1l1">&lt;h1&gt;</label> 
                            <br><input type="checkbox" name="choix1" value=0><label id="1l2">&lt;h6&gt;</label> 
                            <br><input type="checkbox" name="choix1" value=0><label id="1l3">&lt;heading&gt;</label> 
                            <br><br>
                        </div> 
                        <B>Question 3:</B>
                        Quel est l'élément HTML correct pour insérer un saut de ligne<BR>
                         <div name="q" class="q q2">
                            <br><input type="checkbox" name="choix2" value=0><label id="2l0">&lt;break&gt;</label> 
                            <br><input type="checkbox" name="choix2" value=0><label id="2l1">&lt;lb&gt;</label> 
                            <br><input type="checkbox" name="choix2" value=1><label id="2l2">&lt;br&gt;</label> 
                            <br><br>
                        </div> 
                        <B>Question 4:</B>
                        Quel est le code HTML correct pour ajouter une couleur d'arrière-plan ?<BR>
                         <div name="q" class="q q3">
                            <br><input type="checkbox" name="choix3" value=0><label id="3l0">&lt;body bg= ‘’yellow’’&gt;</label> 
                            <br><input type="checkbox" name="choix3" value=0><label id="3l1">&lt;background&gt;yellow&lt;/background&gt;</label> 
                            <br><input type="checkbox" name="choix3" value=1><label id="3l2">&lt;body style=’’background-color:yellow;”&gt;</label> 
                            <br><br>
                        </div> 
                        <B>Question 5:</B>
                        Quel est le code HTML correct pour créer un lien hypertexte ?<BR>
                         <div name="q" class="q q4">
                            <br><input type="checkbox" name="choix4" value=0><label id="4l0">&lt;a name=’’http://www.webedia.com”&gt;Webedia.com&lt;/a&gt;</label> 
                            <br><input type="checkbox" name="choix4" value=1><label id="4l1">&lt;a href=’’http://www.webedia.com’’&gt;Webedia&lt;/a&gt;</label> 
                            <br><input type="checkbox" name="choix4" value=0><label id="4l2">&lt;a url=’’http://www.webedia.com’’&gt;Webedia.com&lt;/a&gt;</label> 
                            <br><input type="checkbox" name="choix4" value=0><label id="4l3">&lt;a&gt;Erreur ! Référence de lien hypertexte non valide.&lt;/a&gt;</label> 
                            <br><br>
                        </div> 
                        <B>Question 6:</B>
                        -Que signifie CSS ?<BR>
                         <div name="q" class="q q5">
                            <br><input type="checkbox" name="choix5" value=0><label id="5l0">Creative Style Sheets</label> 
                            <br><input type="checkbox" name="choix5" value=1><label id="5l1">Cascading Style Sheets</label> 
                            <br><input type="checkbox" name="choix5" value=0><label id="5l2">Colorful Style Sheets</label> 
                            <br><input type="checkbox" name="choix5" value=0><label id="5l3">Computer Style Sheets</label> 
                            <br><br>
                        </div> 
                        <B>Question 7:</B>
                        Quel est le code HTML correct pour faire référence à une feuille de style externe ?<BR>
                         <div name="q" class="q q6">
                            <br><input type="checkbox" name="choix6" value=1><label id="6l0">&lt;link rel="stylesheet" type="text/css" href="monstyle.css"&gt;</label> 
                            <br><input type="checkbox" name="choix6" value=0><label id="6l1">&lt;style src="monstyle.css"&gt;</label> 
                            <br><input type="checkbox" name="choix6" value=0><label id="6l2">&lt;stylesheet&gt;monstyle.css&lt;/stylesheet&gt;</label>
                            <br><br>
                        </div> 
                        <B>Question 8:</B>
                        Dans un document HTML, où se trouve le bon endroit pour faire référence à une feuille de style externe ?<BR>
                         <div name="q" class="q q7">
                            <br><input type="checkbox" name="choix7" value=0><label id="7l0">A la fin du document</label> 
                            <br><input type="checkbox" name="choix7" value=1><label id="7l1">Dans la section &lt;head&gt;</label> 
                            <br><input type="checkbox" name="choix7" value=0><label id="7l2">Dans la section &lt;body&gt;</label> 
                            <br><br>
                        </div> 
                        <B>Question 9:</B>
                        Quelle est la bonne syntaxe CSS ?<BR>
                         <div name="q" class="q q8">
                            <br><input type="checkbox" name="choix8" value=1><label id="8l0">{body;color:black;}</label>
                            <br><input type="checkbox" name="choix8" value=0><label id="8l1">body:color=black;</label> 
                            <br><input type="checkbox" name="choix8" value=1><label id="8l2">body {color: black;}</label> 
                            <br><input type="checkbox" name="choix8" value=0><label id="8l3">{body:color=black;}</label> 
                            <br><br>
                        </div> 
                        <B>Question 10:</B>
                        Comment ajouter une couleur d'arrière-plan pour tous les éléments &lt;h1&gt; ?<BR>
                         <div name="q" class="q q9">
                            <br><input type="checkbox" name="choix9" value=1><label id="9l0">all.h1 {background-color:#FFFFFF;}</label> 
                            <br><input type="checkbox" name="choix9" value=0><label id="9l1">h1 {background-color:#FFFFFF;}</label> 
                            <br><input type="checkbox" name="choix9" value=0><label id="9l2">h1.all {background-color:#FFFFFF;}</label> 
                            <br><br>
                        </div> 
                        <B>Question 11:</B>
                        Quelle est la syntaxe correcte pour afficher "Hello World" en Python ?<BR>
                         <div name="q" class="q q10">
                            <br><input type="checkbox" name="choix10" value=0><label id="10l0">p("Hello World")</label> 
                            <br><input type="checkbox" name="choix10" value=0><label id="10l1">echo "Hello World"</label> 
                            <br><input type="checkbox" name="choix10" value=1><label id="10l2">print("Hello World")</label> 
                            <br><input type="checkbox" name="choix10" value=0><label id="10l3">echo("Hello World");</label> 
                            <br><br>
                        </div> 
                        <B>Question 12:</B>
                        Quelle est l'extension de fichier correcte pour les fichiers Python ?<BR>
                         <div name="q" class="q q11">
                            <br><input type="checkbox" name="choix11" value=0><label id="11l0">.pyt</label> 
                            <br><input type="checkbox" name="choix11" value=0><label id="11l1">.pt</label> 
                            <br><input type="checkbox" name="choix11" value=0><label id="11l2">.pyth</label> 
                            <br><input type="checkbox" name="choix11" value=1><label id="11l3">.py</label> 
                            <br><br>
                        </div> 
                        <B>Question 13:</B>
                        Quelle est la syntaxe correcte pour afficher le type d'une variable ou d'un objet en Python ?<BR>
                         <div name="q" class="q q12">
                            <br><input type="checkbox" name="choix12" value=0><label id="12l0">print(typeOf(x))</label> 
                            <br><input type="checkbox" name="choix12" value=0><label id="12l1">print(typeof(x))</label> 
                            <br><input type="checkbox" name="choix12" value=1><label id="12l2">print(type(x)</label> 
                            <br><input type="checkbox" name="choix12" value=0><label id="12l3">print(typeof x)</label> 
                            <br><br>
                        </div> 
                        <B>Question 14:</B>
                        Quelle est la bonne façon de créer un objet appelé myObj de MyClass ?<BR>
                         <div name="q" class="q q13">
                            <br><input type="checkbox" name="choix13" value=0><label id="13l0">MyClass myObj = new MyClass();</label> 
                            <br><input type="checkbox" name="choix13" value=0><label id="13l1">class myObj = new MyClass();</label> 
                            <br><input type="checkbox" name="choix13" value=1><label id="13l2">new myObj = MyClass();</label> 
                            <br><input type="checkbox" name="choix13" value=0><label id="13l3">class MyClass = new myObj()</label> 
                            <br><br>
                        </div> 
                        <B>Question 15:</B>
                        Quelle est la syntaxe correcte pour renvoyer le premier caractère d'une chaîne ?<BR>
                         <div name="q" class="q q14">
                            <br><input type="checkbox" name="choix14" value=0><label id="14l0">x = sub("Hello", 0, 1</label> 
                            <br><input type="checkbox" name="choix14" value=1><label id="14l1">x = "Hello".sub(0, 1)</label> 
                            <br><input type="checkbox" name="choix14" value=0><label id="14l2">x = "Hello"[0]</label> 
                            <br><br>
                        </div> 
                        <B>Question 16:</B>
                        Quelle collection est ordonnée, modifiable et autorise les membres en double ?<BR>
                         <div name="q" class="q q15">
                            <br><input type="checkbox" name="choix15" value=0><label id="15l0">TUPLE</label> 
                            <br><input type="checkbox" name="choix15" value=0><label id="15l1">SET</label> 
                            <br><input type="checkbox" name="choix15" value=1><label id="15l2">LIST</label> 
                            <br><input type="checkbox" name="choix15" value=0><label id="15l3">DICTIONARY</label> 
                            <br><br>
                        </div> 
                        <B>Question 17:</B>
                        Quelle est la syntaxe correcte pour afficher "Hello World" en Java ?<BR>
                         <div name="q" class="q q16">
                            <br><input type="checkbox" name="choix16" value=0><label id="16l0">echo("Hello World");</label> 
                            <br><input type="checkbox" name="choix16" value=0><label id="16l1">System.out.println("Hello World");</label> 
                            <br><input type="checkbox" name="choix16" value=1><label id="16l2">print ("Hello World");</label> 
                            <br><input type="checkbox" name="choix16" value=1><label id="16l3">Console.WriteLine("Hello World");</label> 
                            <br><br>
                        </div> 
                        <B>Question 18:</B>
                        Quelle méthode peut être utilisée pour renvoyer une chaîne en majuscules<BR>
                         <div name="q" class="q q17">
                            <br><input type="checkbox" name="choix17" value=0><label id="17l0">tuc()</label> 
                            <br><input type="checkbox" name="choix17" value=0><label id="17l1">upperCase()</label> 
                            <br><input type="checkbox" name="choix17" value=1><label id="17l2">toUpperCase()</label>  
                            <br><br
                        </div> 
                        <B>Question 19:</B>
                        Quelle est la bonne façon de créer un objet appelé myObj de MyClass<BR>
                         <div name="q" class="q q18">
                            <br><input type="checkbox" name="choix18" value=1><label id="18l0">MyClass myObj = new MyClass()</label> 
                            <br><input type="checkbox" name="choix18" value=0><label id="18l1">class myObj = new MyClass()</label> 
                            <br><input type="checkbox" name="choix18" value=0><label id="18l2">new myObj = MyClass();</label> 
                            <br><input type="checkbox" name="choix18" value=0><label id="18l3">class MyClass = new myObj();</label> 
                            <br><br>
                        </div> 
                        <B>Question 20:</B>
                        En Java, il est possible d'hériter d'attributs et de méthodes d'une classe à une autre.<BR>
                         <div name="q" class="q q19">
                            <br><input type="checkbox" name="choix19" value=0><label id="19l0">Faux</label> 
                            <br><input type="checkbox" name="choix19" value=1><label id="19l1">Vrai</label> 
                            <br><br>
                        </div> 
                        <B>Question 21:</B>
                        Quelle méthode peut être utilisée pour trouver la valeur la plus élevée de x et y?<BR>
                         <div name="q" class="q q20">
                            <br><input type="checkbox" name="choix20" value=0><label id="20l0">Math.maximum(x,y)</label> 
                            <br><input type="checkbox" name="choix20" value=0><label id="20l1">Math.maxNum(x,y)</label> 
                            <br><input type="checkbox" name="choix20" value=1><label id="20l2">Math.max(x,y)</label> 
                            <br><input type="checkbox" name="choix20" value=0><label id="20l3">Math.largest(x,y)</label> 
                            <br><br>
                        </div> 
                        <B>Question 22:</B>
                        Quelle est la syntaxe correcte pour afficher "Hello World" en C ?<BR>
                         <div name="q" class="q q21">
                            <br><input type="checkbox" name="choix21" value=0><label id="21l0">Console.WriteLine("Hello World");</label> 
                            <br><input type="checkbox" name="choix21" value=0><label id="21l1">System.out.printline("Hello World");</label> 
                            <br><input type="checkbox" name="choix21" value=0><label id="21l2">cout << "Hello World";</label>
                            <br><input type="checkbox" name="choix21" value=1><label id="21l3">printf("Hello World");</label>
                            <br><br>
                        </div> 
                        <B>Question 23:</B>
                        Lorsqu'une variable est créée en C, une adresse mémoire est affectée à la variable.<BR>
                         <div name="q" class="q q22">
                            <br><input type="checkbox" name="choix22" value=0><label id="22l0">Faux</label> 
                            <br><input type="checkbox" name="choix22" value=1><label id="22l1">Vrai</label>
                            <br><br>
                        </div> 
                        <B>Question 24:</B>
                        Comment pouvez-vous créer une variable avec la valeur numérique 5 ?<BR>
                         <div name="q" class="q q23">
                            <br><input type="checkbox" name="choix23" value=0><label id="23l0">num = 5;</label> 
                            <br><input type="checkbox" name="choix23" value=0><label id="23l1">num = 5 int;</label> 
                            <br><input type="checkbox" name="choix23" value=1><label id="23l2">int num = 5;</label> 
                            <br><input type="checkbox" name="choix23" value=0><label id="23l3">val num = 5;</label> 
                            <br><br>
                        </div> 
                        <B>Question 25:</B>
                        Quel spécificateur de format est souvent utilisé pour imprimer des entiers ?<BR>
                         <div name="q" class="q q24">
                            <br><input type="checkbox" name="choix24" value=0><label id="24l0">%s</label> 
                            <br><input type="checkbox" name="choix24" value=0><label id="24l1">%c</label> 
                            <br><input type="checkbox" name="choix24" value=1><label id="24l2">%d</label> 
                            <br><input type="checkbox" name="choix24" value=0><label id="24l3">%f</label> 
                            <br><br>
                        </div> 
                        <B>Question 26:</B>
                        SQL est devenu un standard de :<BR>
                         <div name="q" class="q q25">
                            <br><input type="checkbox" name="choix25" value=1><label id="25l0">for (x in y)</label> 
                            <br><input type="checkbox" name="choix25" value=0><label id="25l1">for (i = 0; switch < 5; i++)</label> 
                            <br><input type="checkbox" name="choix25" value=0><label id="25l2">for (i = 0; while < 5; i++)</label>
                            <br><input type="checkbox" name="choix25" value=0><label id="25l3">for (i = 0; i < 5; i++)</label>
                            <br><br>
                        </div> 
                        <B>Question 27:</B>
                        Quelle instruction peut être utilisée pour sélectionner l'un des nombreux blocs de code à exécuter ?<BR>
                         <div name="q" class="q q26">
                            <br><input type="checkbox" name="choix26" value=1><label id="26l0">switch</label> 
                            <br><input type="checkbox" name="choix26" value=0><label id="26l1">break</label> 
                            <br><input type="checkbox" name="choix26" value=0><label id="26l2">default</label>
                            <br><input type="checkbox" name="choix26" value=0><label id="26l3">when</label>
                            <br><br>
                        </div> 
                        <B>Question 28:</B>
                        Laquelle des fonctions suivantes n’est pas une fonction SQL Aggregate ?<BR>
                         <div name="q" class="q q27">
                            <br><input type="checkbox" name="choix27" value=0><label id="27l0">Un paramètre</label> 
                            <br><input type="checkbox" name="choix27" value=1><label id="27l1">Un pointeur</label> 
                            <br><input type="checkbox" name="choix27" value=0><label id="27l2">Un tableau</label> 
                            <br><input type="checkbox" name="choix27" value=0><label id="27l3">Une classe</label> 
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
                            <br><input type="checkbox" name="choix29" value=1><label id="29l0">struct</label> 
                            <br><input type="checkbox" name="choix29" value=0><label id="29l1">structure</label> 
                            <br><input type="checkbox" name="choix29" value=0><label id="29l2">str</label>
                            <br><input type="checkbox" name="choix29" value=0><label id="29l3">structs</label>
                            <br><br>
                        </div> 
                    </div>
                </form>
                <br>
                <div id="submit" class="btn-group" role="group"><a class="btn btn-primary active" role="button" onclick="test()" >Soumettre</a></div>
                <div id="result" style="display:none">
        <form action="result_prog.php" method="get">
            <input type="hidden" value='' name='earned_prog' id='earned_prog'>
            <input type="hidden" value='' name='max_prog' id='max_prog'>
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
                <p > Votre score est de <span id="sum"></span> sur <span id="total"></span></p>
                </div>
            </div>



        <div class="code-editor" style="margin-top: 90px ; width:2000px;height:1500px;position: relative;" ></div>
        <script>
            const flask = new CodeFlask('.code-editor', {
                    language: 'html',
                    lineNumbers: true,
                    defaultTheme: true,
            });

                flask.onUpdate((code) => {
                });

                flask.updateCode("<!DOCTYPE html>\n<html>\n	<head>\n            <title>App</title>\n	</head>\n	<body>\n	    <h1>App</h1>\n	</body>\n</html>")

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
    <script src="assets/js/prog.js"></script>

<?php require_once './inc/footer.php' ?>
