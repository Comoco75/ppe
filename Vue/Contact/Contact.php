<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Contact - Hôtel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/ppe/assets/css/style.css">
</head>
<body>

<?php include('header.php'); ?>

<div class="container my-5">
    <h1 class="text-center fw-bold text-primary animate__animated animate__fadeInDown">
        <i class="bi bi-envelope"></i> Contactez-nous
    </h1>
    <p class="text-center text-muted">Besoin d'informations ? Remplissez le formulaire ci-dessous.</p>

    <div class="row">
        <!-- Formulaire de contact -->
        <div class="col-md-6">
            <div class="card shadow-lg p-4 rounded-4 animate__animated animate__fadeInLeft">
                <h5 class="text-center fw-bold"><i class="bi bi-chat-dots"></i> Envoyez-nous un message</h5>
                <form action="send_message.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label"><i class="bi bi-person"></i> Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label"><i class="bi bi-envelope-at"></i> Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label"><i class="bi bi-pencil"></i> Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100" name="envoyer">
                        <i class="bi bi-send"></i> Envoyer
                    </button>
                </form>
            </div>
        </div>

        <!-- Informations de contact -->
        <div class="col-md-6">
            <div class="card shadow-lg p-4 rounded-4 animate__animated animate__fadeInRight">
                <h5 class="text-center fw-bold"><i class="bi bi-geo-alt"></i> Nos coordonnées</h5>
                <p><i class="bi bi-telephone"></i> Téléphone : <strong>+33 1 23 45 67 89</strong></p>
                <p><i class="bi bi-envelope"></i> Email : <strong>contact@hotel.com</strong></p>
                <p><i class="bi bi-geo-alt-fill"></i> Adresse : <strong>123 Rue de l'Hôtel, 75000 Paris, France</strong></p>
                
                <!-- Carte Google Maps -->
                <div class="rounded-4 overflow-hidden mt-3">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999779274565!2d2.292292915673858!3d48.8583736087907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fdfc9b7d8b1%3A0x2b8a51a1df8f5c1c!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1616718471234!5m2!1sfr!2sfr" 
                        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php include('footer.php'); ?>
</body>
</html>
