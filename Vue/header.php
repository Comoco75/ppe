<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Accueil - Hôtel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="/ppe/assets/css/style.css">
</head>
<body>


<nav class="my-4">
    <ul class="nav nav-pills justify-content-center gap-2">
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" href="/ppe/index.php">
                <i class="bi bi-house-door"></i> Accueil
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=userChambresList">
                <i class="bi bi-door-open"></i> Chambres
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=userPhotoList">
                <i class="bi bi-images"></i> Photos
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=contact">
                <i class="bi bi-envelope"></i> Contact
            </a>
        </li>
        
        <?php if (!isset($_SESSION['user'])): ?>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=authLogin">
                    <i class="bi bi-box-arrow-in-right"></i> Login
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=authInscription">
                    <i class="bi bi-person-plus"></i> Inscription
                </a>
            </li>
        <?php endif; ?>
        
        <?php if (isset($_SESSION['user'])): ?>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=userMesReservationList">
                    <i class="bi bi-calendar-check"></i> Mes Réservations
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2" href="./index.php?page=userProfil">
                    <i class="bi bi-person"></i> Profil
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link d-flex align-items-center gap-2 text-danger" href="./index.php?page=authLogout">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </a>
            </li>
            <li class="nav-item">
                <div class="nav-link d-flex align-items-center">
                    <?php if (!empty($_SESSION['user']['Images'])): ?>
                        <img src="data:image/jpeg;base64,<?= base64_encode($_SESSION['user']['Images']); ?>" 
                             alt="Profile" class="rounded-circle me-2 shadow-sm" 
                             style="width: 35px; height: 35px; object-fit: cover;">
                    <?php endif; ?>
                    <span class="text-primary fw-bold">
                        <i class="bi bi-person-badge"></i> <?= htmlspecialchars($_SESSION['user']['User_role']); ?> : <?= htmlspecialchars($_SESSION['user']['Email']); ?>
                    </span>
                </div>
            </li>
        <?php endif; ?>

        <?php if (isset($_SESSION['user']) && $_SESSION['user']['User_role'] === 'Admin'): ?>
            <ul class="nav nav-pills justify-content-center mt-3">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-danger" href="./index.php?page=adminChambreForm">
                        <i class="bi bi-tools"></i> Admin Chambres
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-danger" href="./index.php?page=adminPhotoForm">
                        <i class="bi bi-image"></i> Admin Photos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-danger" href="./index.php?page=adminReservationForm">
                        <i class="bi bi-clipboard-check"></i> Admin Réservations
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-danger" href="./index.php?page=adminEditProfile">
                        <i class="bi bi-person-gear"></i> Admin Profil
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-danger" href="./index.php?page=adminListUser">
                        <i class="bi bi-people"></i> Liste Utilisateurs
                    </a>
                </li>
            </ul>
        <?php endif; ?>
    </ul>
</nav>

<style>
    .nav-link {
        transition: all 0.3s ease-in-out;
        font-weight: 500;
    }
    .nav-link:hover {
        transform: scale(1.1);
        background-color: rgba(0, 123, 255, 0.2) !important;
    }
    .active {
        background-color: #007bff !important;
        color: white !important;
    }
</style>
