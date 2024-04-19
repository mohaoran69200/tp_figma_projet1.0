<?php 
// Démarre la session PHP
session_start();
// Tableau des propriétés immobilières
$properties = 
[
    [
        "ville" => "Houston, TX" ,
        "prix" => "$1,600,000" ,
        "bd" => "4bd" ,
        "ba" => "3ba" ,
        "sft" => "2,808 sft",
        "des" => "Discover luxury living in this 2-story masterpiece on a serene cul-de-sac ... ",
        "type" => "For sale",
        "type-home" => "House",
        "imgs" => 
        [
        "./assets/images/Houston_villa/imghouston1.jpg",
        "./assets/images/Houston_villa/imghouston2.jpg",
        "./assets/images/Houston_villa/imghouston3.jpg",
        ],
        "idC" => "Carroussel1"
    ],
    [
        "ville" => "Pacific Palisades, CA" ,
        "prix" => "$8,250,000" ,
        "bd" => "6bd" ,
        "ba" => "8ba" ,
        "sft" => "7,148 sft",
        "des" => "Fall in love with the visual symphony that is the prestigious Paseo Miramar ...  ",
        "type" => "For sale",
        "type-home" => "House",
        "imgs" => 
        [
        "./assets/images/pacific_palisades/pp2.jpg",
        "./assets/images/pacific_palisades/pp3.jpg",
        "./assets/images/pacific_palisades/pp4.jpg",
        ],
        "idC" => "Carroussel2"

    ],
    [
        "ville" => "Boston, MA" ,
        "prix" => "$2,500/mo" ,
        "bd" => "2bd" ,
        "ba" => "2ba" ,
        "sft" => "1,100 sft",
        "des" => "This two-bedroom has a lot going for it ... ",
        "type" => "For rent",
        "type-home" => "Apartment",
        "imgs" => 
            [
            "./assets/images/boston_apartment/boston2.jpg",
            "./assets/images/boston_apartment/boston3.jpg",
            "./assets/images/boston_apartment/bostonapart.jpg",
            ],
        "idC" => "Carroussel4"
    ],
    [
        "ville" => "New-York, NY" ,
        "prix" => "$5,780/mo" ,
        "bd" => "2bd" ,
        "ba" => "2ba" ,
        "sft" => "1,454 sft",
        "des" => "Spacious large 2 bedroom CO-OP in the heart of flushing ... ",
        "type" => "For rent",
        "type-home" => "Apartment",
        "imgs" =>
            [
            "./assets/images/new-york_apartment/nyapart.jpg",
            "./assets/images/new-york_apartment/ny2.jpg",
            "./assets/images/new-york_apartment/ny3.jpg",
            ],
        "idC" => "Carroussel5"
    
    ],
    [
        "ville" => "Orlando, FL" ,
        "prix" => "$1,375,000" ,
        "bd" => "4bd" ,
        "ba" => "4ba" ,
        "sft" => "2,976 sft",
        "des" => "Welcome home to this absolutely stunning and well-appointed home in Laureate Park ...  ",
        "type" => "For sale",
        "type-home" => "House",
        "imgs" => 
            [
            "./assets/images/orlando_villa/orlandohouse1.jpg",
            "./assets/images/orlando_villa/orlando2.jpg",
            "./assets/images/orlando_villa/orlando3.jpg",
            ],
        "idC" => "Carroussel3"
    ],
    [
        "ville" => "Oklahoma City, OK" ,
        "prix" => "$1,900/mo" ,
        "bd" => "2bd" ,
        "ba" => "4ba" ,
        "sft" => "3,195 sft",
        "des" => "Looking for an awesome investment opportunity ?!",
        "type" => "For rent",
        "type-home" => "Apartment",
        "imgs" => 
            [
            "./assets/images/okc/okcapart.jpg",
            "./assets/images/okc/okc2.jpg",
            "./assets/images/okc/okc3.jpg",
            ],
        "idC" => "Carroussel6"
        ],
];
 // Enregistrement du tableau properties en session si ce n'est pas déjà fait
 if (!isset($_SESSION['properties'])) {
    $_SESSION['properties'] = $properties;
}

// var_dump($_SESSION['properties']);

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Get Keys | Home</title>
    <link rel="stylesheet" href="./assets/style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>


<body>
    <?php 
    // Inclusion du header
    require_once './src/_partials/_header.php';
  ?>
    <main>
        <!-- Section des maisons à vendre -->
        <section>
            <h1 id="house">House</h1>
            <!-- Conteneur pour les maisons à vendre -->
            <div class="house-container">
            <?php
                // Affichage des maisons à vendre
                foreach ($_SESSION['properties'] as $property) {
                    // Vérifie si la clé "type-home" est définie avant d'y accéder
                    if (isset($property['type-home']) && $property['type-home'] === 'House') {
                        include './src/_partials/listings/_house.php';
                    }
                }
                ?>
            </div>
            <!-- Fin du conteneur des maisons à vendre -->
        </section>
        <!-- Fin de la section des maisons à vendre -->

        <!-- Section des appartements à louer -->
        <section>
            <h1 id="apartment">Apartment</h1>
            <!-- Conteneur pour les appartements à louer -->
            <div class="apartment-container">
            <?php
                // Affichage des appartements à louer
                foreach ($_SESSION['properties'] as $property) {
                    // Vérifie si la clé "type-home" est définie avant d'y accéder
                    if (isset($property['type-home']) && $property['type-home'] === 'Apartment') {
                        include './src/_partials/listings/_house.php';
                    }
                }
                ?>
            </div>
            <!-- Fin du conteneur des appartements à louer -->
        </section>
        <!-- Fin de la section des appartements à louer -->

    </main>

    
        <!-- Inclusion du footer -->
        <?php 
    require_once './src/_partials/_footer.php';
    ?>
    <!-- Inclusion de Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>