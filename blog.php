<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Rolland Dylan - Blog</title>
    <link rel="stylesheet" href="./style/style.css">
    <style>
        /* Global Styling */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        h1,
        h2 {
            color: black;
        }

        h1 {
            text-align: center;
            margin-top: 30px;
        }

        .article-container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px auto;
            max-width: 900px;
        }

        /* Image Styling */
        .article-container img {
            display: block;
            margin: 20px auto;
            border-radius: 8px;
        }

        /* Title & Date Styling */
        h2 {
            margin-top: 10px;
            font-size: 24px;
            color: black;
        }

        p {
            font-size: 16px;
            color: #555;
        }

        p strong {
            color: #333;
        }

        /* Button Styling */
        .read-more-btn {
            display: block;
            width: 150px;
            margin: 20px auto;
            background-color: black;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-align: center;
            font-weight: bold;
            font-size: 14px;
        }

        .read-more-btn:hover {
            background-color: black;
        }

        /* Hidden content styling */
        .article-content {
            display: none;
            padding: 10px;
            margin-top: 10px;
            border-top: 1px solid #e1e1e1;
            transition: all 0.3s ease-in-out;
        }

        /* Media Query for responsiveness */
        @media (max-width: 768px) {
            body {
                font-size: 14px;
            }

            h1 {
                font-size: 28px;
            }

            h2 {
                font-size: 22px;
            }

            .read-more-btn {
                width: 100px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <?php include_once 'navbar.php'; ?>

    <h1>Articles</h1>

    <div class="article-container">
        <img src="./assets/logolenval.png" alt="Logo Lenval" style="width:100%; max-width:400px;">
        <h2>Mon intégration dans l'entreprise</h2>
        <p><strong>Date de publication :</strong> 15 juin</p>

        <button class="read-more-btn" onclick="toggleArticle(this)">Lire plus</button>

        <div class="article-content">
            <p>Le 10 juin, je suis arrivé à l'hôpital Lenval à 9h du matin, rempli d'excitation pour le stage qui
                m'attendait.</p>
            <br>
            <p>Au début de la journée, j'ai eu l'opportunité d'apprendre à maîtriser les outils et les logiciels que
                j'utiliserais tout au long de mon stage, ce qui m'a permis de me familiariser rapidement avec
                l'environnement de travail. J'ai également été impliqué dans la préparation des ordinateurs de bureau
                (Desktop) et des ordinateurs portables (Laptop), une étape essentielle pour garantir que tout le
                matériel soit opérationnel et prêt pour les employés de l'hôpital.</p>
            <br>
            <p>Voici à quoi ressemblait mon poste de travail :</p>
            <img src="./assets/poste.JPEG" style="width:100%; max-width:300px;">
            <br>
            <p>En parallèle, j'ai rencontré l'équipe avec laquelle je travaillerais. Ils m'ont présenté les différents
                projets que nous allions réaliser ensemble au cours de mon stage. Parmi ces projets, j'ai découvert les
                objectifs de renouvellement du parc informatique, qui vise à moderniser les équipements obsolètes. Cette
                mission est réalisé tous les ans à l'hôpital afin de garantir un matériel moderne pour tous les
                employés.</p>
            <br>
            <p>De plus, j'ai appris que nous allions fournir un support informatique aux utilisateurs, ce qui implique
                d'être réactif face à leurs besoins et problèmes. Une autre tâche importante sera la mise à jour des
                baies informatiques pour garantir leur performance et leur sécurité. Enfin, nous allons améliorer le
                réseau de l'hôpital en ajoutant de nouvelles bornes réseaux, ce qui permettra une connexion plus stable
                et plus rapide pour le personnel et les patients.</p>
            <br>
            <p>Cette première journée m'a permis de comprendre l'importance de chaque aspect de notre travail et de me
                projeter dans les projets à venir.</p>
        </div>
    </div>

    <div class="article-container">
        <img src="./assets/difficultes.jpg" style="width:100%; max-width:100px;">
        <h2>Difficultés et solutions rencontrés au cours du stage</h2>
        <p><strong>Date de publication :</strong>16 juillet</p>

        <button class="read-more-btn" onclick="toggleArticle(this)">Lire plus</button>

        <div class="article-content">
            <p>Lors de mon stage, j'ai recontré un grand nombre de difficultés, quand nous avons renouvellés le parc
                informatique, certains nouveaux PC ne rejoignait pas le domaine Lenval.loc. Nous avons dû chercher des
                solutions pendant longtemps pour y parvenir.</p>
            <br>
            <p>Nous avons eu pour mission de brasser des baies en y ajoutant des switchs. Pour se faire nous devions
                repérer et référencer les positions des câbles en partant de la prise jusqu'au switch. Cependant,
                certains câbles étaient abîmées et donc se sont débranchés pendant nos manipulations.</p>
            <br>
            <p>Voici à quoi ressemblait la baie avant notre passage :</p>
            <img src="./assets/baieavant.JPEG" alt="Logo Lenval" style="width:100%; max-width:300px;">
            <p>Voici le résultat après que l'on est changé l'intégralité des emplacements pour que la baie soit mieux
                ordonnée. Nous n'avions pas encore reçu de câbles Ethernet plus court.</p>
            <img src="./assets/baieapres.JPEG" alt="Logo Lenval" style="width:100%; max-width:300px;">
            <br>
            <p>Nous avons énormément d'employés qui se sont plaints de la qualité du réseau sur le site. C'est pour cela
                que vers la fin de mon stage, nous avons mis en place un Starlink pour l'administration de l'hôpital
                afin de le tester et de voir si cela pouvait être étendue sur l'ensemble de l'hôpital.</p>
            <img src="./assets/starlink.JPEG" alt="Logo Lenval" style="width:100%; max-width:300px;">
            <p>Avec l'aide du service technique, nous l'avons mis sur le toit par la suite.</p>
            <br>
            <p>L'une des principales difficultés que nous avons rencontrés dans le stage et la prise de RDV avec
                différents services afin de remplacer les postes puisque les médecins sount très souvent occupés. Nous
                devions des fois prendre des RDV plusieurs semaines à l'avance.</p>


        </div>
    </div>

    <div class="article-container">
        <img src="./assets/technique.JPEG" alt="Aspects techniques" style="width:100%; max-width:400px;">
        <h2>Aspects techniques des missions effectuées</h2>
        <p><strong>Date de publication :</strong> 20 juillet</p>

        <button class="read-more-btn" onclick="toggleArticle(this)">Lire plus</button>

        <div class="article-content">
            <p>Au cours de mon stage à l'hôpital Lenval, j'ai été impliqué dans diverses missions techniques. L'une
                de mes principales responsabilités a été le renouvellement du parc informatique. Cela a inclus
                l'installation de nouveaux postes de travail et la configuration de l'environnement réseau.</p>
            <br>
            <p>Nous avons également effectué des mises à jour sur les baies de serveurs pour améliorer leur
                performance et leur sécurité. Cela nécessitait une planification minutieuse pour minimiser les temps
                d'arrêt.</p>
            <br>
            <p>Une autre tâche cruciale a été l'amélioration de la connectivité réseau. Nous avons ajouté des bornes
                Wi-Fi pour garantir que le personnel ait accès à Internet partout dans l'hôpital. Ces améliorations
                ont été essentielles pour le bon fonctionnement des opérations.</p>
            <br>
            <p>Cette expérience m'a permis de développer mes compétences techniques tout en contribuant à des
                projets significatifs qui ont un impact direct sur les soins apportés aux enfants.</p>
            <br>
            <p>Lorsque des PC ne fonctionnait pas très bien, mes tuteurs m'ont appris des techniques afin
                d'améliorer la connection au réseau. Nous avons donc parfois changer les câbles réseau pour que
                l'ordinateur passe d'une vitesse de 100Mb à 1Gb/s. Nous avons parfois fait de simples manipulations à
                distance à l'aide de machines virtuelles qui sont sur le VLAN de l'hôpital.</p>
        </div>
    </div>

    <div class="article-container">
        <img src="./assets/knowledge.png" alt="Connaissances mobilisées" style="width:100%; max-width:400px;">
        <h2>Connaissances mobilisées et compétences acquises lors de mes missions</h2>
        <p><strong>Date de publication :</strong> 30 juillet</p>

        <button class="read-more-btn" onclick="toggleArticle(this)">Lire plus</button>

        <div class="article-content">
            <p>Durant mes expériences professionnelles, notamment mon stage à l'hôpital Lenval, ainsi que lors de
                projets réalisés dans le cadre de mes études à Ynov en Cybersécurité, j'ai pu mobiliser et développer de
                nombreuses **connaissances techniques** et **compétences pratiques**.</p>
            <br>
            <p>Tout d'abord, mes **connaissances en informatique et en réseaux** ont été mises à l'épreuve. J'ai dû
                installer, configurer et sécuriser de nouveaux équipements informatiques. J'avais déjà une base solide
                en gestion réseau (VLAN, switchs, bornes Wi-Fi) grâce à mes cours, ce qui m'a permis de contribuer
                efficacement à des projets comme le **renouvellement du parc informatique** et l'ajout de **nouvelles
                bornes Wi-Fi** pour améliorer la connectivité de l'hôpital. Ces tâches nécessitaient de maîtriser des
                concepts tels que la **configuration réseau**, la **gestion des adresses IP** et les **protocoles de
                sécurité**.</p>
            <br>
            <p>Ensuite, j'ai acquis des compétences en **support utilisateur**. Travailler dans un environnement où les
                employés, notamment les médecins, ne maîtrisent pas forcément bien les outils informatiques m'a appris à
                expliquer clairement et simplement des aspects techniques complexes. Grâce à mes connaissances
                préalables des **systèmes d'exploitation** et des **applications bureautiques**, j'ai pu leur fournir
                une aide précieuse, comme la résolution de problèmes de configuration ou l'optimisation de l'utilisation
                des logiciels. Cela m'a permis de développer des compétences en **communication** et en **assistance
                technique**.</p>
            <br>
            <p>J'ai aussi renforcé ma **capacité à travailler en équipe**, une compétence déjà acquise à travers les
                projets en groupe réalisés à Ynov. Lors des missions avec l'équipe informatique de l'hôpital, nous avons
                collaboré sur des projets complexes, tels que la mise en place d'une **nouvelle infrastructure réseau**
                ou l'installation de **Starlink** pour améliorer la qualité de la connexion internet. Cette expérience a
                renforcé ma capacité à **collaborer efficacement**, à **partager des idées** et à résoudre ensemble des
                problèmes rencontrés sur le terrain.</p>
            <br>
            <p>Par ailleurs, j'ai acquis de nouvelles compétences techniques en matière de **sécurisation des données**
                et de **gestion des serveurs**. En participant aux **audits de sécurité** et en intervenant sur des
                baies informatiques, j'ai développé une expertise dans la **gestion des risques** et l'**optimisation de
                l'infrastructure** pour assurer la confidentialité des données et la performance du réseau.</p>
            <br>
            <p>En résumé, ces missions m'ont permis de **mobiliser mes connaissances techniques** tout en renforçant mes
                compétences en **gestion réseau**, **support informatique**, **travail en équipe** et **sécurisation des
                systèmes**. Ces expériences m'ont non seulement permis de consolider mes acquis, mais aussi de
                **développer de nouvelles compétences** qui seront cruciales pour ma future carrière en cybersécurité.
            </p>
        </div>
    </div>

    <div class="article-container">
    <img src="./assets/stage_bilan.png" alt="Bilan de Stage" style="width:100%; max-width:400px;">
    <h2>Bilan de mon stage à la Fondation Lenval</h2>
    <p><strong>Date de publication :</strong> 29 septembre</p>

    <button class="read-more-btn" onclick="toggleArticle(this)">Lire plus</button>

    <div class="article-content">
        <p>Mon stage à la **Fondation Lenval** a été une expérience extrêmement enrichissante, tant sur le plan professionnel que personnel. Durant cette période, j'ai eu l'opportunité de mettre en pratique mes **connaissances en informatique et cybersécurité** tout en développant de nouvelles compétences cruciales pour ma carrière.</p>
        <br>
        <p>Tout au long de mon stage, j'ai mobilisé mes **connaissances en réseau et en sécurité informatique**, que j'avais déjà acquises en cours. Par exemple, j’ai contribué à la mise en place de nouvelles bornes Wi-Fi pour renforcer la connectivité au sein de l’hôpital. Cela a impliqué la **configuration des réseaux** et le **dépannage des systèmes**, des tâches pour lesquelles mes compétences théoriques et pratiques se sont révélées très utiles.</p>
        <br>
        <p>Une partie de mon travail a également consisté à **aider les médecins et le personnel médical** à résoudre des problèmes informatiques courants. Grâce à ma bonne compréhension des **systèmes d'exploitation** et des **logiciels**, j'ai pu intervenir rapidement pour résoudre des problèmes qu'ils ne maîtrisaient pas. Cela a non seulement amélioré leurs conditions de travail, mais a également renforcé ma capacité à **travailler en équipe**, notamment en collaborant avec différents services de l'hôpital.</p>
        <br>
        <p>Parmi les compétences acquises, l'une des plus marquantes est ma capacité à **analyser des infrastructures informatiques** et à proposer des améliorations pour optimiser la sécurité et la performance. En participant aux **audits de sécurité**, j'ai appris à identifier les vulnérabilités des systèmes et à recommander des solutions concrètes pour y remédier.</p>
        <br>
        <p>Ce stage m'a également permis de perfectionner ma capacité à **travailler sous pression**. En effet, les délais pour renouveler le parc informatique ou installer de nouvelles infrastructures étaient souvent serrés. Cela m'a enseigné à **prioriser les tâches** et à gérer mon temps efficacement pour répondre aux attentes de mes supérieurs tout en respectant les contraintes techniques.</p>
        <br>
        <p>Enfin, j’ai pu me rendre compte de l'importance de la **sécurisation des données** dans un environnement hospitalier. J’ai compris à quel point il était essentiel de mettre en place des systèmes solides pour protéger les informations sensibles, surtout dans un secteur où la **confidentialité des données des patients** est primordiale.</p>
        <br>
        <p>En résumé, mon stage à la Fondation Lenval a été une étape clé dans ma formation en **cybersécurité**. J'ai non seulement consolidé mes connaissances, mais aussi acquis de **nouvelles compétences techniques et humaines** qui me seront précieuses pour ma future carrière.</p>
    </div>
</div>

    





    <script>
        function toggleArticle(button) {
            var content = button.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
                button.textContent = "Lire plus";
            } else {
                content.style.display = "block";
                button.textContent = "Lire moins";
            }
        }
    </script>
</body>

</html>