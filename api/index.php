<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Portfolio PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #fff0f5;
        }

        header {
            background-color: #ff4da6;
            color: white;
            text-align: center;
            padding: 30px;
        }

        .atelier {
            padding: 40px;
            text-align: center;
        }

        h2 {
            color: #ff4da6;
        }

        .cards {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            background-color: white;
            padding: 20px;
            width: 250px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card h3 {
            color: #ff4da6;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 15px;
            background-color: #ff4da6;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #ff4da6;
            color: white;
            margin-top: 40px;
        }
    </style>

</head>
<body>

    <header>
        <h1>Mon Portfolio</h1>
        <p>Stagiaire 1ère année Développement Digital</p>
    </header>

    <section class="atelier">
        <h2>Mes Ateliers PHP</h2>

        <div class="cards">

            <div class="card">
                <h3>Exercice 1</h3>
                <p>Manipulation des variables en PHP</p>
                <a href="exercice1.php">Voir</a>
            </div>

            <div class="card">
                <h3>Exercice 2</h3>
                <p>Les conditions (if, else)</p>
                <a href="exercice2.php">Voir</a>
            </div>

            <div class="card">
                <h3>Exercice 3</h3>
                <p>Les boucles (for, while)</p>
                <a href="Rapport  2.pdf">Voir</a>
            </div>
            <div class="card">
                <h3>Exercice 2</h3>
                <p>Les conditions (if, else)</p>
                <a href="Rapport  2.pdf">Voir</a>
            </div>

        </div>
    </section>

    <footer>
        <p>© 2026 - Sara Portfolio</p>
    </footer>
    <?php

echo"<a href='exercice1.php'>Exercice1</a>";
echo"<a href='exercice2.php'>Exercice2</a>";
echo"<a href='Rapport  2.pdf'>Rapport1</a>";
echo"<a href='Rapport  2.pdf'>Rapport2</a>";
?>

</body>
</html>
