<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Contact</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/9e5fc47a4e.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="assets/uranus_1876100.png" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <header>
        <a href="#" class="logo"><span>B</span><span>a</span><span>s</span><span>t</span><span>i</span><span>e</span><span>n</span>
            <span>&</span> <span>H</span><span>a</span><span>n</span><span>g</span></a>
        <nav>
            <ul>
                <li><a href="./index.html">>Home</a></li>
                <li><a href="./discover.html#sky">>Découvrir</a></li>
                <li><a href="./map.html">>Carte</a></li>
                <li><a href="./about.html">>About</a></li>
                <li><a href="#" class="active">>Contact</a></li>

                <input type="checkbox" id="mute-toggle" checked>
                <label for="mute-toggle" id="mute-label"><i id="mute_label" class="fa-solid fa-volume-xmark"></i></label>
                <audio id="audio" src="assets/layer1.mp3" type="audio/mp3" controls autoplay muted></audio>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            <video src="assets/vecteezy_seamless-loop-galaxy-exploration-through-outer-space-towards_28716271.mp4" alt="Image de Fond" loop autoplay muted id="background"></video>
            <h1 id="text1">Page Contact</h1>
            <a href="#sky"><i id="arrow" class="fa-solid fa-angles-down"></i></a>
        </section>

        <article id="contact" class="contact">
            <video src="/assets/vecteezy_seamless-loop-galaxy-exploration-through-outer-space-towards_28716268.mp4" alt="Fond 2" loop autoplay muted id="background2"></video>
            <h1 style="color: white">Formulaire de Contact</h1>

            <form action="./php/POST.php" method="POST" id="formu">
                <?php
                if (isset($_GET["err"])) {
                    if ($_GET["err"] == 1) {
                        echo ("<p class='error'>Appuyez sur le bouton envoyer</p>");
                    } elseif ($_GET["err"] == 2) {
                        echo ("<p class='error'>Aucune étoile sélectionnée.</p>");
                    } elseif ($_GET["err"] == 0) {
                        echo ("<p class='sucess'>Merci, le formulaire a bien été envoyer</p>");
                    }
                }
                ?>
                <div class="name">
                    <label for="nom">Prénom Nom <span>*</span></label>
                    <div class="input_name">
                        <input required type="text" id="prenom" name="prenom" placeholder="Prénom" />
                        <input required type="text" id="nom" name="nom" placeholder="Nom de Famille" />
                    </div>
                </div>

                <div class="menu_deroulant">
                    <label for="sexe">Choix du Sexe</label>
                    <div class="choix_sexe">
                        <select name="sexeOption">
                            <option value="mme">Pas spécifiée</option>
                            <option value="m">♂️ Homme</option>
                            <option value="mme">♀️ Femme</option>
                            <option value="mme">Autre</option>
                        </select>
                    </div>
                </div>

                <div class="note">
                    <label for="rate">Note <span>*</span> :</label>
                    <div class="rating">
                        <input value="5" name="rate" id="star5" type="radio" />
                        <label title="text" for="star5"></label>
                        <input value="4" name="rate" id="star4" type="radio" />
                        <label title="text" for="star4"></label>
                        <input value="3" name="rate" id="star3" type="radio" checked="" />
                        <label title="text" for="star3"></label>
                        <input value="2" name="rate" id="star2" type="radio" />
                        <label title="text" for="star2"></label>
                        <input value="1" name="rate" id="star1" type="radio" />
                        <label title="text" for="star1"></label>
                    </div>
                </div>

                <div class="commentaire">
                    <label for="com">Commentaire :</label>
                    <div class="commentaire_input">
                        <textarea id="story" name="story" rows="5" cols="33" placeholder="Donne nous ton avis"></textarea>
                    </div>
                </div>
                <input type="submit" name="envoyer" placeholder="Envoyer" />

            </form>
        </article>

        <footer>
            <p>© 2023 MMI S1 - SAE 105</p>
            <p>Bastien Brousse & Thuy Hang Nguyen</p>
            <p id="credits">
                Video de
                <a href="https://fr.vecteezy.com/video/28716272-sans-couture-boucle-galaxie-exploration-par-exterieur-espace-vers-embrase-laiteux-facon-galaxie-boucle-animation-de-en-volant-par-embrase-nebuleuses-des-nuages-et-etoiles-champ">Ismail
                    Sahin</a>
                et images de
                <a href="https://fr.wikipedia.org/wiki/Astronomie">Wikipedia</a>
            </p>
        </footer>
    </main>

    <script>
        document
            .getElementById("mute-toggle")
            .addEventListener("change", function() {
                var audio = document.getElementById("audio");
                audio.muted = this.checked;

                if (this.checked == true) {
                    document.getElementById("mute_label").className =
                        "fa-solid fa-volume-xmark";
                } else {
                    document.getElementById("mute_label").className =
                        "fa-solid fa-volume-high";
                }
            });
    </script>
</body>

</html>