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
            line-height: 1.6;
        }

        nav { display: flex; justify-content: space-between; align-items: center; padding: 40px 10%; }
        .logo { font-weight: 800; font-size: 20px; letter-spacing: -1px; }
        .nav-links a { color: var(--text-muted); text-decoration: none; margin-left: 30px; font-size: 14px; transition: 0.3s; }
        .btn-contact { border: 1px solid var(--accent-blue); padding: 8px 20px; border-radius: 5px; color: var(--accent-blue) !important; }

        .hero { display: flex; padding: 40px 10%; align-items: center; justify-content: space-between; min-height: 60vh; }
        .hero-text h1 { font-size: 3.5rem; font-weight: 800; line-height: 1.1; margin-bottom: 20px; }
        .hero-text h1 span { color: var(--accent-blue); }
        .hero-text p { color: var(--text-muted); max-width: 500px; margin-bottom: 30px; }

        .work-section { padding: 40px 10% 80px 10%; }
        .section-title { font-size: 2.5rem; margin-bottom: 10px; font-weight: 800; }
        
        /* Stylage dyal l-unwanat d l-ajza' */
        .category-title {
            font-size: 1.4rem;
            color: var(--accent-blue);
            margin: 50px 0 25px 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #222;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px; }
        
        .card {
            background: var(--card-bg);
            padding: 25px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            transition: 0.3s;
            border: 1px solid #1a1a1a;
            display: block;
        }
        .card:hover { border-color: var(--accent-blue); transform: translateY(-5px); background: #151515; }
        .card h3 { margin-bottom: 8px; font-size: 1.1rem; }
        .card p { color: var(--text-muted); font-size: 0.85rem; margin-bottom: 15px; }
        .card .tag { font-size: 9px; font-weight: 700; color: var(--accent-blue); text-transform: uppercase; display: block; margin-bottom: 5px; }
        .card span { font-size: 0.8rem; color: var(--accent-blue); font-weight: 600; }

        @media (max-width: 900px) {
            .hero { flex-direction: column; text-align: center; }
            .hero-text h1 { font-size: 2.5rem; }
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo">SARA HAMDA.</div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#work">Projects</a>
            <a href="#" class="btn-contact">Contact Me</a>
        </div>
    </nav>

    <header class="hero">
        <div class="hero-text">
            <span style="font-size: 10px; letter-spacing: 2px; color: var(--text-muted); text-transform: uppercase;">DÉVELOPPEMENT DIGITAL | ISTA</span>
            <h1>Bridging <span>Expertise</span> and Digital Intelligence.</h1>
            <p>Étudiante en développement web, voici l'ensemble de mes travaux pratiques et documentations.</p>
        </div>
    </header>

    <section id="work" class="work-section">
        <h2 class="section-title">Mes Travaux</h2>

        <h3 class="category-title">📂 Rapports de Stage</h3>
        <div class="grid">
            <a href="rapport 11.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport de Stage 01</h3>
                <p>Analyse technique et environnement de développement.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
            <a href="Rapport 2.pdf" target="_blank" class="card">
                <span class="tag">Documentation</span>
                <h3>Rapport de Stage 02</h3>
                <p>Bilan des compétences et réalisations techniques.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
        </div>

        <h3 class="category-title">💻 Ateliers PHP</h3>
        <div class="grid">
            <a href="exercice1.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>Atelier 01</h3>
                <p>Variables et structures de base en PHP.</p>
                <span>Consulter le code →</span>
            </a>
            <a href="exercice2.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>Atelier 02</h3>
                <p>Mise en place des conditions et boucles.</p>
                <span>Consulter le code →</span>
            </a>
            <a href="exercice3TD1.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>Atelier 03 (Partie 1)</h3>
                <p>Boucles dynamiques et mise en page.</p>
                <span>Consulter le code →</span>
            </a>
            <a href="exercice3TD2.php" class="card">
                <span class="tag">Exercice PHP</span>
                <h3>Atelier 03 (Partie 2)</h3>
                <p>Logique de programmation avancée.</p>
                <span>Consulter le code →</span>
            </a>
        </div>

        <h3 class="category-title">📝 Travaux Dirigés (TD)</h3>
        <div class="grid">
            <a href="PARTIE1td1.php" class="card"><span class="tag">TD PHP</span><h3>TD 01</h3><p>Tableaux numérotés.</p><span>Consulter →</span></a>
            <a href="PARTIE1td2.php" class="card"><span class="tag">TD PHP</span><h3>TD 02</h3><p>Tableaux numérotés.</p><span>Consulter →</span></a>
            <a href="PARTIE1td3.php" class="card"><span class="tag">TD PHP</span><h3>TD 03</h3><p>Tableaux numérotés.</p><span>Consulter →</span></a>
            <a href="PARTIE2td8.php" class="card"><span class="tag">TD PHP</span><h3>TD 08</h3><p>Tableaux associatifs.</p><span>Consulter →</span></a>
            <a href="PARTIE2td9.php" class="card"><span class="tag">TD PHP</span><h3>TD 09</h3><p>Tableaux associatifs.</p><span>Consulter →</span></a>
            <a href="PARTIE3td12.php" class="card"><span class="tag">TD PHP</span><h3>TD 12</h3><p>Nombres pairs.</p><span>Consulter →</span></a>
        </div>

        <h3 class="category-title">📄 Rapports des TDs (PDF)</h3>
        <div class="grid">
            <a href="PARTIE1 td1.pdf" target="_blank" class="card">
                <span class="tag">PDF</span>
                <h3>Rapport De TD 01 - 15</h3>
                <p>Documentation complète des exercices pratiques.</p>
                <span>Ouvrir le PDF ↓</span>
            </a>
        </div>
    </section>

    <footer style="text-align: center; padding: 50px; color: #444; font-size: 12px; border-top: 1px solid #111;">
        ©️ 2026 SARA PORTFOLIO - ISTA DIGITAL DEV
    </footer>

</body>
</html>