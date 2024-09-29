<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>

    <?php include_once 'navbar.php'; ?>

    <div class="contact-container">
        <h1>Contactez-nous</h1>

        <?php
        // Si le formulaire est soumis
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['userMessage'])) {
            $userMessage = $_POST['userMessage'];
            $userEmail = $_POST['userEmail'];

            // Validation de l'adresse e-mail côté serveur
            if (filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                // Envoie d'un message de succès (à personnaliser selon la gestion de tes mails ou base de données)
                echo '<div style="color: green;">Merci pour votre message. Nous vous contacterons bientôt.</div>';
            } else {
                echo '<p style="color: red;">Veuillez fournir une adresse e-mail valide.</p>';
            }
        }
        ?>

        <!-- Formulaire de contact -->
        <form method="post" action="" class="contact-form">
            <label for="userEmail">Votre adresse e-mail :</label>
            <input type="email" id="userEmail" name="userEmail" required>
            
            <label for="userMessage">Votre message :</label>
            <textarea id="userMessage" name="userMessage" rows="4" cols="50" required></textarea>
            
            <button type="submit" class="submit-button">Envoyer</button>
        </form>

    </div>

</body>

</html>
