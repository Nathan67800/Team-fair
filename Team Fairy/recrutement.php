<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $prenom = htmlspecialchars($_POST["prenom"]);
    $email = htmlspecialchars($_POST["email"]);
    $poste = htmlspecialchars($_POST["poste"]);

    // Traitement des données (vous pouvez ajouter votre logique ici)
    // Par exemple, enregistrez les données dans une base de données

    // Envoi de l'e-mail de confirmation
    $to = $email;
    $subject = "Confirmation de Candidature";
    $message = "Merci, $prenom $nom, pour votre candidature au poste de $poste. Nous vous contacterons bientôt.";

    // Utilisez les en-têtes pour spécifier l'expéditeur, etc.
    $headers = "From:  frozzyqc@gmail.com";

    // Envoyer l'e-mail
    mail($to, $subject, $message, $headers);

    // Affichage d'un message de confirmation
    echo "Merci, $prenom $nom, pour votre candidature au poste de $poste. Un e-mail de confirmation a été envoyé à $email.";
} else {
    // Redirection si le formulaire n'est pas soumis
    header("Location: index.html");
}
?>