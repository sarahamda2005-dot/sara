<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sara | Digital Dev Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --bg-color: #050505;
            --accent-blue: #4facfe;
            --text-main: #ffffff;
            --text-muted: #888888;
            --card-bg: #0f0f0f;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: var(--bg-color); 
            color: var(--text-main);
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 40px 10%;
        }

        .logo { font-weight: 800; }

        .nav-links a {
            color: var(--text-muted);
            margin-left: 30px;
            text-decoration: none;
        }

        .btn-contact {
            border: 1px solid var(--accent-blue);
            padding: 8px 20px;
            color: var(--accent-blue) !important;
        }

        .hero {
            display: flex;
            padding: 40px 10%;
            align-items: center;
            justify-content: space-between;
        }

        .hero-text h1 span { color: var(--accent-blue); }

        .work-section { padding: 80px 10%; }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #1a1a1a;
        }

        .card:hover {
            border-color: var(--accent-blue);
        }

        .card h3 { margin: 10px 0; }

        .card p { color: var(--text-muted); font-size: 14px; }

        .tag {
            font-size: 10px;
            color: var(--accent-blue);
        }

        /* NEW BUTTONS */
        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }

        .btn {
            background: var(--accent-blue);
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 12px;
        }

        .btn-outline {
            background: transparent;
            border: 1px solid var(--accent-blue);
            color: var(--accent-blue);
        }

    </style>
</head>

<body>

<section class="work-section">
    <h2>Mes Travaux</h2>

    <div class="grid">

        <!-- Exemple 1 -->
        <div class="card">
            <span class="tag">PHP</span>
            <h3>Atelier 01</h3>
            <p>Variables et base PHP</p>

            <div class="buttons">
                <a href="exercice1.php" class="btn">Atelier</a>
                <a href="rapport1.pdf" class="btn btn-outline" target="_blank">Rapport</a>
            </div>
        </div>

        <!-- Exemple 2 -->
        <div class="card">
            <span class="tag">PHP</span>
            <h3>Atelier 02</h3>
            <p>Conditions et boucles</p>

            <div class="buttons">
                <a href="exercice2.php" class="btn">Atelier</a>
                <a href="rapport2.pdf" class="btn btn-outline" target="_blank">Rapport</a>
            </div>
        </div>

        <!-- Exemple 3 -->
        <div class="card">
            <span class="tag">PHP</span>
            <h3>TD 01</h3>
            <p>Tableaux</p>

            <div class="buttons">
                <a href="PARTIE1td1.php" class="btn">Atelier</a>
                <a href="TD1.pdf" class="btn btn-outline" target="_blank">Rapport</a>
            </div>
        </div>

    </div>
</section>

</body>
</html>