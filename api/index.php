<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sara | Digital Dev Portfolio</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        /* --- PROJECTS RE-DESIGN (Photo Style) --- */
.work-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); /* 3reeda chwiya bach thaz s-sgharin */
    gap: 30px;
}

.main-card {
    background: #0f1115; /* Lawn s-swad l-khfif */
    border-radius: 15px;
    padding: 25px;
    border: 1px solid #1a1c20;
    display: flex;
    flex-direction: column;
}

.card-header {
    margin-bottom: 25px;
}

.tag-mini {
    font-size: 10px;
    font-weight: 800;
    color: #4facfe;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 5px;
}

.card-header h3 {
    font-size: 1.6rem;
    margin-bottom: 10px;
}

.card-header p {
    color: var(--text-muted);
    font-size: 0.9rem;
    max-width: 90%;
}

.sub-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
}

.sub-item {
    background: #14161a;
    border: 1px solid #222;
    border-radius: 8px;
    padding: 15px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    font-size: 0.9rem;
    position: relative;
    overflow: hidden;
    transition: 0.3s;
}

/* L-glow l-azraq li l-foq f l-photo */
.sub-item::before {
    content: "";
    position: absolute;
    top: 0; left: 10%; right: 10%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #4facfe, transparent);
    opacity: 0.5;
}

.sub-item:hover {
    background: #1a1d23;
    border-color: #4facfe;
}

.view-more {
    margin-top: 20px;
    color: #4facfe;
    text-decoration: none;
    font-size: 0.85rem;
    display: flex;
    align-items: center;
    gap: 5px;
}
    </style>
</head>
<body>

    <section id="work" class="work-section">
    <h2 class="section-title">Mes Travaux</h2>
    
    <div class="work-grid">
        
        <div class="main-card">
            <div class="card-header">
                <span class="tag-mini">EXERCICE PHP</span>
                <h3>Atelier 01</h3>
                <p>Manipulation des variables et structures de base en PHP.</p>
                <a href="#" class="view-more">Voir les TD ↓</a>
            </div>

            <div class="sub-grid">
                <a href="PARTIE1td1.php" class="sub-item">TD 01</a>
                <a href="PARTIE1td2.php" class="sub-item">TD 02</a>
                <a href="PARTIE1td3.php" class="sub-item">TD 03</a>
                <a href="PARTIE1td4.php" class="sub-item">TD 04</a>
            </div>
        </div>

        <div class="main-card">
            <div class="card-header">
                <span class="tag-mini">EXERCICE PHP</span>
                <h3>Atelier 02</h3>
                <p>Conditions et boucles dynamiques.</p>
                <a href="#" class="view-more">Voir les exercices ↓</a>
            </div>

            <div class="sub-grid">
                <a href="exercice1.php" class="sub-item">Exercice 1</a>
                <a href="exercice2.php" class="sub-item">Exercice 2</a>
                <a href="exercice3TD1.php" class="sub-item">Exercice 3</a>
            </div>
        </div>

    </div>
</section>
</body>
</html>


   
