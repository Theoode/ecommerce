<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil - Ma boutique Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CDN Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Ma Boutique</a>
    </div>
</nav>

<!-- Hero -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h1 class="display-4">Bienvenue sur ma boutique Laravel </h1>
        <p class="lead">Explorez nos produits, découvrez nos offres, et profitez de votre expérience.</p>
        <a href="#" class="btn btn-primary btn-lg mt-3">Voir les produits</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    &copy; {{ date('Y') }} Ma Boutique Laravel
</footer>

</body>
</html>
