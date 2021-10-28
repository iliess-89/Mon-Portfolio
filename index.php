<?php
session_start();


if (!empty($_POST)) {

    if (
        isset($_POST['nom'], $_POST['mail'], $_POST['texte'])
        && !empty($_POST['nom'])
        && !empty($_POST['mail'])
        && !empty($_POST['texte'])
    ) {

        $nom = htmlspecialchars($_POST['nom']);
        $message = htmlspecialchars($_POST['texte']);


        if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION['texte'] = "email invalid";
        }
        if (isset($_SESSION['texte'])) {
            header('Location: index.php');
            exit;
        }

        require_once 'includes/connexion.php';

        $sql = "INSERT INTO `fcontact`(`name`,`email`,`Description`) 
        VALUES (:nom, :mail, :texte);";


        $requete = $db->prepare($sql);

        $requete->bindValue(':nom', $nom);
        $requete->bindValue(':mail',  $_POST['mail']);
        $requete->bindValue(':texte', $message);

        $requete->execute();


        // $to = "mesformulaire@gmail.com";
        // $subject = "sujet du message";
        // $msg = wordwrap($descript, 70, "\r\n");

        // $headers = [
        // "From" => $_POST['email'],
        // "Content-Type" => "text/html; charset=utf8"
        // ];


        // mail($to, $subject, $msg, $headers);

    } else {
        $_SESSION['message'][] = 'Il faut tout remplir';
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <script src="interaction.js" defer></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
</head>

<body>

    <div class="conteneur1">
        <!-- <h1>Portfolio</h1> -->
        <h1>Portfolio</h1>
    </div>

    <div class="conteneur2">
        <h2 id="prensentation">Présentation</h2>

        <div class="prentation-carousel">

     
        <div class="box-presentation">
            <div class="plusimage">
                <img src="img1/identité-300x300.jpg" alt="">
                <div class="moi">
                    <h2 class="nom">Mazouari</h2>
                    <h2 class="prenom">Iliess</h2>
                </div>

            </div>

            <ul>
                <li>Age</li>
                <li>Code postal</li>
                <li>Email</li>
            </ul>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae quae explicabo sequi, obcaecati, dolorum cumque pariatur fuga architecto voluptatem suscipit odit perspiciatis. Sint veritatis similique quae quia quibusdam odio magni. </p>
            <div> <a href="#">contacter moi</a></div>
        </div>

        <div class="carousel">
            <h2>Compétences</h2>
            <div class="carousel-content">

                <div class="left">
                    <img src="img1/html.png" alt="" width="200px">
                    <p>HTML</p>
                </div>
                <div class="left">
                    <img src="img1/css.png" alt="" width="200px">
                    <p>CSS</p>
                </div>
                <div class="left">
                    <img src="img1/js.png" alt="" width="200px">
                    <p>Javascript</p>
                </div>
                <div class="left">
                    <img src="img1/php.png" alt="" width="200px">
                    <p>php</p>
                </div>
                <div class="left">
                    <img src="img1/Bootstrap.png" alt="" width="200px">
                    <p>Bootstrap</p>
                </div>
                <div class="left">
                    <img src="img1/wordpress.png" alt="" width="200px">
                    <p>wordpress</p>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="conteneur3">
        <h2 id="formation">Mes formations</h2>
        <div class="content">

        <div class="box1-e">
                <img src="img1/logo online.png" alt="">
                <h2>Onlineformapro</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt soluta temporibus aliquam optio saepe rerum id perferendis asperiores, ex, odio ipsa corrupti accusamus quo? Illo ab perspiciatis similique esse voluptate!</p>

            </div>

            <div class="box2-e">
                <img src="img1/incoacademy.png" alt="" width="70%">
                <h2>Get into tech</h2>
                <p>Dans la formation (DAQ 2.0) je suis dans un bootcamp "get into tech" en ligne, pour découvrir les métiers de du numérique durant ce bootcamp nous avons eu différentes missions, nous avons pu découvrir différents métiers tel que développement web, HTML-CSS, Desiner web, Marketing-digital etc.</p>

            </div>

            <div class="box3-e">
                <img src="img1/greta sens.jpg" alt="" width="70%">
                <h2>Greta</h2>
                <p>Dispositif en Amont de la Qualification au Greta de Sens où on fait une remise à niveau en math, français, un peu d'anglais et en informatique on fais notamment des cours.
                    En informatique on utilise Excel, Word, Publisher etc.</p>
            </div>

            <div class="box4-e">
                <img src="img1/lycée.jpg" alt="image lycée" width="60%">
                <h2>Preparationet realisation d'ouvrage electrique</h2>
                <p>Pendant mon stage on à commencer par percer des trous dans le placo pour mettre nos boite encastrement et insérer les tube avec les fils qui sera relier de la chambre au tableau électrique etc.</p>

            </div>

        </div>
    </div>

    <!-- <div class="conteneur4">
        <h2 id="competence">Compétences</h2>
        <div class="competence">

            <div class="html-c">
                <img src="img1/html.png" alt="" width="200px">
                <p>HTML</p>
            </div>
            <div class="css-c">
                <img src="img1/css.png" alt="" width="200px">
                <p>CSS</p>
            </div>
            <div class="js c">
                <img src="img1/js.png" alt="" width="200px">
                <p>Javascript</p>
            </div>
            <div class="Gimp">
                <img src="img1/php.png" alt="" width="200px">
                <p>php</p>
            </div>
            <div class="bootstrap">
                <img src="img1/Bootstrap.png" alt="" width="200px">
                <p>Boutstrap</p>
            </div>
            <div class="inkscap">
                <img src="img1/wordpress.png" alt="" width="200px">
                <p>wordpress</p>
            </div>
            <div class="inkscap">
                <img src="img1/jquery.png" alt="" width="200px">
                <p>jquery</p>
            </div>
        </div> -->

        <div class="réalisation">
            <h2 id="realisation">réalisations</h2>

            <?php

            //on va chercher les articles de la base de donneés
            //on se connect a la base de données 
            require_once "includes/connexion.php";

            //on écris la requéte sql

            $sql = 'SELECT * FROM realisation;';

            //on éxecute la requete 
            $requete = $db->query($sql);
            $projects = $requete->fetchAll();

            //on écris la requéte sql
            $sql = 'SELECT * FROM realisation;';

            $requete = $db->query($sql);
            $projects = $requete->fetchAll();

            // $titre= ':titre';
            // $email= ':email';
            // $descript= ':description';

            // echo '<pre>';
            // var_dump($projects);
            // echo '</pre>';

            foreach ($projects as $project) {
                echo"
     <div class='content1'>
      
            <img src='img1/FIMARAD-appels-a-projets-770x347.png' alt=''>
            <h2>{$project['titre']}</h2>
            <a href='#' class='open-btn' data-titre=\"{$project['titre']}\" data-image='img1/{$project['image']}' data-descript='{$project['description']}'>en savoir plus</a>
        </div>


";
            }

            ?>
            <div class='modal'>
                <div class='content-modal'>
                    <h2 class='h2'></h2>
                    <img class='image' src=''>
                    <p class='descript'></p>
                    <a href='#realisation' id='btn-close'>Fermer</a>
                </div>
            </div>

        </div>

        <form method="POST">
            <div class="content-form">
                <h2 id="contact">contacter moi</h2>
                <input type="text" name="nom" placeholder="Nom...">
                <input type="email" name="mail" placeholder="email...">
                <textarea id="texte" name="texte" cols="30" rows="10" placeholder="Une question, une remarque, une idée   de ou une suggestion pour le site ?, Vous avez un projet et vous souhaitez nous en parler ?"></textarea>
                <button type="submit">Envoyer</button>

                <?php
                if (isset($_SESSION['message'])) {
                    foreach ($_SESSION['message'] as $message) {
                        echo "<p>$message</p>";
                    }
                    unset($_SESSION['message']);
                }
                ?>
                <a class="btn-close" href="#realisation">Fermer</a>
            </div>
        </form>



        <footer>
            <div class="flc">
                <a href="https://github.com/iliess-89">github</a>
               <div>&copy</div> 
                <a class="btn-open" href="#contact">Contacter moi</a>
            </div>
        </footer>
</body>

</html>