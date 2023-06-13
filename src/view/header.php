<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../css/css.css" media="screen" type="text/css"/>

    <!-- Ceci permet d'avoir des icones personalisées dans les code-->
    <script src="https://kit.fontawesome.com/31b066633f.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <style>
        input[type=submit], select {
            position: absolute;
            top: 30%;
            left: 90%;
            background-color: #499C54;
            border: none;
            color: white;
            padding: 8px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 2px 2px 2px;
        }
        input[type=submit]:hover {
            background-color: #2d943b;
        }
    </style>
    <span style="position: absolute; top: 5%; left: 2%">
        <img src="../../public/images/FSI_logo.png" height="40px">
    </span>

    <span style="position: absolute; top: 1%; left: 85%;">
    <form method="post" action="../../src/controler/control_deconnexion.php">
        <input type="submit" value="Déconnexion">
    </form>
    </span>

    <span style="position: absolute; top: 30%; left: 34%; font-size: 18px; color: white;">
        <a href="../../src/view/accueil.php">Accueil</a>
    </span>

    <?php if (isset($_SESSION['tuteur']) && $_SESSION['tuteur'] != null) { ?>
        <span style="position: absolute; top: 30%; left: 42%; font-size: 18px; color: white;">
        <a href="../../src/view/ListeEtudiantsTut.php">Listes des étudiants Tut</a>
    </span>
    </span>
    <?php } elseif (isset($_SESSION['administrateur']) && $_SESSION['administrateur'] != null) { ?>
    <span style="position: absolute; top: 30%; left: 44%; font-size: 18px; color: white;">
        <a href="../../src/view/listeEtudiants.php">Liste Etudiants</i></a>
    </span>
    <?php } else { ?>
    <span style="position: absolute; top: 30%; left: 47%; font-size: 22px; color: white;">
        <a href="../../src/view/accueil.php"><i class="fa-solid fa-arrow-left-long"></i></a>
    </span>
    <?php }?>
    <?php if(isset($_SESSION['administrateur']) && $_SESSION['administrateur'] != null) { ?>
    <span style="position: absolute; top: 30%; left: 57%; font-size: 18px; color: white;">
        <a href="../../src/view/parametrage.php">Paramètres</a>

    </span>
     <?php }?>
</div>
</body>
</html>