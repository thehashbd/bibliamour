<?php
    session_start();//for messages
    $title = "Welcome";
    include 'header.php';
    include 'menu.php';
?>


<div class="container">

 <!-- if a message was sent by another page Display it-->
<?php
    if(isset($_SESSION['message'])) {
       
 ?>       
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <?=$_SESSION['message']?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    
 <!-- remove the received a message -->       
    <?php  
        unset($_SESSION['message']);
       
    }
    ?>
        <!--h1> Bienvenue du ESIGELEC Library Management System</h1>
        <h2> Bienvenue du ESIGELEC Library Management System</h2>
        <h3> Bienvenue du ESIGELEC Library Management System</h3>
        <h4> Bienvenue du ESIGELEC Library Management System</h4-->

        <br clear="all">
        <h1>Bienvenue à BibliAmour !</h1>
        <p>Bonjour! Nous sommes des étudiants à <strong>ESIGELEC Rouen</strong>. Nous avons develop un site pour gérer une bibliothèque. Ce site s'appelle <strong>BibliAmour</strong>. Pourquoi <strong>"Amour"</strong>? Parce que nous aimons les livres!</p>

        <p>Voici ce que vous pouvez faire sur notre site:</p>
        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>

        <p>Nous avons fait ce projet pour notre cours <strong>"Web Centric Development"</strong>. C'est simple et amusant! Amusez-vous avec notre bibliothèque!</p>


        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>
        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>
        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>
        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>
        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>
        <ul>
            <li><strong>S'inscrire et se connecter</strong>: Vous pouvez créer un compte et vous connecter facilement.</li>
            <li><strong>Voir les livres</strong>: Vous pouvez voir les livres de la bibliothèque.</li>
            <li><strong>Emprunter des livres</strong>: Si vous êtes inscrit, vous pouvez emprunter des livres.</li>
            <li><strong>Gestion des livres</strong>: Les administrateurs peuvent ajouter ou enlever des livres.</li>
        </ul>

    </div>
<?php
    include 'footer.php';
?>