<section>
    <h2>Voici la galerie d'images</h2>
    <!-- <article>
        <h3>GALERIE PHOTO</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis dolor iste illo similique nesciunt sunt
            aspernatur, excepturi, quos officia, cumque tenetur vel possimus! Dolores, ut placeat! Ab a quisquam quis?
        </p>
        <div class="galerie">
            <img src="./assets/img/article1.jpeg" alt="article1">
            <img src="./assets/img/article2.jpeg" alt="article2">
            <img src="./assets/img/article3.jpeg" alt="article3">
        </div>
    </article> -->
    <article>
        <h3>Cliquer sur une image pour la voir en plus grand</h3>
        <p>Cliquer à nouveau dessus pour revoir la galerie</p>
        <div class="galerie">
<?php

// DETECTER LES REPETITIONS DANS LE CODE HTML
// => BOUCLE AVEC PHP
// => CE QUI EST IDENTIQUE VA DANS LA BOUCLE
// => CE QUI CHANGE VA DANS LE TABLEAU
// => ON COMBINE LE TABLEAU ET LA BOUCLE PRODUIRE LE RESULTAT

/*
$image = [
    "./assets/img/article1.jpg",
    "./assets/img/article2.jpg",
    "./assets/img/article3.jpg",
    "./assets/img/article4.jpg",
];
*/

// LA FONCTION glob CONSTRUIT LE TABLEAU POUR MOI
// $image = glob("./assets/img/*.jpg");
// https://www.php.net/manual/fr/function.glob.php
// $image = glob("./assets/img/*.{jpg,png,gif,jpeg}", GLOB_BRACE);

$image = glob("./assets/img/galerie*.{jpg,png,gif,jpeg}", GLOB_BRACE);

foreach($image as $compteur => $element)
{
    echo 
    <<<x
    <img src="$element">

    x;
}


?>
        </div>
        <hr>
        <div class="lightbox">
        <img id="grand" src="assets/img/galerie-1.jpeg" alt="">
        </div>
        <script>

// JE VEUX AJOUTER UNE ACTION SUR TOUTES LES MINIATURES .galerie img
// JE VEUX ACTIVER DU CODE JS
let lightbox = document.querySelector('.lightbox');
let listeMini = document.querySelectorAll('.galerie img');
// console.log(listeMini);
for(let indice=0; indice<listeMini.length; indice++)
{
    let mini = listeMini[indice];
    // console.log(mini);
    mini.addEventListener('click', function(event) {
        // console.log('TU AS CLIQUE SUR...');
        // console.log(event.target);

        // JE VEUX CHANGER L'IMAGE EN GRAND PAR L'IMAGE SUR LAQUELLE JE VIENS DE CLIQUER
        // ASTUCE TRES VIEILLE: SI ON DONNE UN id A UNE BALISE, EN JS IL Y A UNE VARIABLE AVEC LE MEME NOM QUE L'ID
        // console.log(grand);
        // POUR CHANGER L'IMAGE JE MODIFIE L'ATTRIBUT src
        grand.src = mini.src;

        // IL FAUT AJOUTER LA CLASSE .active SUR LA LIGHTBOX POUR LA VOIR DANS L'ECRAN
        lightbox.classList.add('active');
    });
}

// AVEC LA LIGHTBOX, IL FAUT POUVOIR LA CACHER QUAND ON CLIQUE DESSUS
lightbox.addEventListener('click', function(){
    lightbox.classList.remove('active');
});
        </script>
    </article>

</section>