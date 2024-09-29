
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Rolland Dylan</title>
    <link rel="stylesheet" href="./style/style.css">
    <meta name="csrf-token" content="<?= htmlspecialchars($_SESSION['csrf_token'], ENT_QUOTES, 'UTF-8'); ?>">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <section id="profile">
        <div class="profil">
            <div class="section-pic">
                <img class="imgpdp" src="./assets/photodeprofildylan.png" alt="Rolland Dylan Photo de profil">
            </div>
            <div class="section-text">
                <p class="txtp1">Bonjour c'est</p>
                <h1 class="title">Rolland Dylan</h1>
                <p class="txtp2">B3 Informatique</p>
                <div class="btn-container">
                    <button class="btn buttoncv" onclick="window.open('./assets/CV-DylanROLLAND.pdf?csrf=')">Mon CV</button>
                </div>
                <div id="socials-container">
                    <img src="./assets/linkedin.png" alt="Mon compte Linkedin" class="icon"
                        onclick="location.href='https://www.linkedin.com/in/dylan-rolland-115871293/'" />
                    <img src="./assets/github.png" alt="Mon Github" class="icon"
                        onclick="location.href='https://github.com/DydyRld'" />
                </div>
            </div>
        </div>
    </section>

    <section id="competences">
        <br>
        <hr>
        <div class="txt-competence">
            <h1>Présentation</h1>
        </div>
        <br>
        <div class="container-presentation">
            <p>Bonjour, je m'appelle Dylan Rolland et je suis étudiant en 3e année de Cybersécurité à Sophia Ynov Campus.</p>
            <img src="./assets/syc.jpg" alt="Image de parcours scolaire" class="presentation-image">
            
            <p> Mon parcours scolaire a débuté au collège André Malraux à Cagnes sur Mer, où j'ai développé un intérêt pour l'informatique en achetant mon premier ordinateur pour le brevet. Ensuite, j'ai poursuivi mes études au lycée Auguste Renoir de Cagnes sur Mer, où j'ai suivi les spécialités mathématiques, anglais et informatique ce qui m'a permis de me spécialiser dans le domaine de l'informatique.</p>
            <img src="./assets/renoir.jpg" alt="Image de parcours scolaire" class="presentation-image">

            <p> Après avoir obtenu mon baccalauréat avec mention bien, j'ai intégré le programme de Cybersécurité à Sophia Ynov Campus. Durant ces deux premières années, j'ai pu participer à plusieurs projets qui m'ont permis de confirmer mon envie de me tourner dans le monde de la cybersécurité. J'ai acquis des compétences en sécurité des systèmes d'information, réseaux, et développement web.</p>
            <img src="./assets/cyber.png" alt="Image de cybersécurité" class="presentation-image">

            <p> Côté expérience professionnelle, j'ai effectué un stage au sein de la Fondation Lenval, où j'ai contribué à la mise en place de solutions de sécurité informatique. J'ai également pu travailler dans leur support informatique qui consiste à dépanner les employés sur les diffèrents sites de l'hôpital pédiatrique Lenval.</p>
            <img src="./assets/lenvalstage.jpg" alt="Image de stage à Lenval" class="presentation-image">

            <p>Je suis passionné par la cybersécurité et toujours à la recherche de nouvelles opportunités pour élargir mes connaissances et compétences dans ce domaine en constante évolution.</p>
           
        </div>
    </section>
</body>

</html>