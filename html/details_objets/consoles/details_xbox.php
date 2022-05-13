<?php

//Démarrage de la session 
session_start()

//Connexion à la base de données
$dbh = new PDO('mysql:host=localhost;dbname=4tt_junior', 'junior', 'junior5');

$email = $E_mail;
$expire = time() + 60*60*24*3; // 3 days from now

//Mis en route des cookies
setcookie("utilisateur", $email, $expire); 


//Test de la présence de cookies
if(!isset($_COOKIE["utilisateur"])) {
    echo "pas de cookie ! ";
  } else {
    echo  $_COOKIE[$email];
  }

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="../../../css/style.css">
        <link rel="stylesheet" type="text/css" href="../../../css/details.css">
        <script src="ajouter_panier.js"></script> 
        <title>Xbox Series X</title>
    </head>
    <body>
        <!-- haut de page + logo + recherche  + panier + connexion-->
        <div class="pageup">
            <a href="../../index.php" class="lien_logo"><img class="logo" src="../../../images/index/logo.jpg" alt="logo"></a>
            <div class="search_total">
                <input class="barre_cherche" placeholder="Recherche..." >
                <input class="bouton_rechercher"  type="submit" value="Rechercher">
            </div> 
            <form action="../../panier.php">
                <input class="panier" type="submit" value="Panier">
            </form>
            <form action="../../connexion.php" target="_blank">
                <input class="connexion" type="submit" value="Connexion">
            </form>
            <form action="../compte/compte.php" target="_blank">
                <input class="compte" type="submit" value="Compte">
            </form>
        </div>   
         <!--choix des catégories (nav bar)-->
        <div class="category_total">
            <form action="../../categories/ordinateurs.php">
                <input class="ordinateur" type="submit" value="Ordinateurs">
            </form>
            <form action="../../categories/telephones.php">
                <input class="telephone" type="submit" value="Téléphones">
            </form>
            <form action="../../categories/vr.php">
                <input class="realite_virtuelle" type="submit" value="Réalite Virtuelle">
            </form>
            <form action="../../categories/console.php">
                <input class="console" type="submit" value="Consoles">
            </form>
            <form action="../../categories/giftcard.php">
                <input class="cartes_cadeau" type="submit" value="Cartes Cadeau">
            </form>
        </div>
        <!--Boite qui prends tout-->
        <div class="all_items">
            <div id="img_wishlist">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPEA8QDxAPDQ0PEA8ODxAQDQ8PEBAPFRMWFhYRFRUYHSksGBolGxUXITEhMSwrMDouFx8zODMsNygtLisBCgoKDQ0ODg8QFzclHyUrLSwtKysrKys3LisxKzgrMDcrMjcrKysrKzc3Kys4KysrLisrKzIrMisrKy0tNysrK//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABCEAACAQMBAwgGBgkDBQAAAAAAAQIDBBEhBRIxBhMiQVFhcbEHMnJzgZEjQlJ0obIUJTM1Q5Kis8FTk/A0YoLC0f/EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABcRAQEBAQAAAAAAAAAAAAAAAAARASH/2gAMAwEAAhEDEQA/APcQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACG8cdEBINNf8qrC3eKt3bxlx3VUU5/yxyzn770pbPp55uNzctZ1p0Go+DlLG78QO5B5Le+l6o/2FpCGdE6teM5Z7owfS+DbOfvfSFtWt/HjbR1TVG3a07d6ooyh8pIsHvMnjV6LvNRf8qbC3yqt3QjJfVVRTn/LHLPnu62nXuNatevcrOG6lxOrHw+jW4+P1nH4GNTT0SSjroujF9X1Y72f9yPwEH0PY8stnV8c3d0U3oo1Jc1JvsSnjJvKdRSWYtST4NNNfNHy4lLho31p6Pq+q97P+6vgXLS6qUcSpTq0MZe9SqTpYfXlRbpr/AMpvw4CD6hB8/bP5ebUoqO7dSrww9K0IVt599WPHwjFnRbP9LVzHCr2tGrpmXN1J0Z/CE8v4tREHr4OA2f6V7Koo87SubdvOrhGrTWv+pBtHQ2PLLZ1ZxULygpS9WFSXNTfhGeGQb4FMJqSTi1KL4NNNP4lQAAAAAAAAAAAAAAAAAAADF2qvoK/uav5GZRjbS/Y1vdVPysD5Nta8oxioyklurTL3cY7OBkxvpaZUJY4Pd3WvDdwYNB9GPsryKyjZQ2jH6yms8elv58d7yLtO4pPRSjHXOsNzHhhJJ/iagAb1Q3mmnva6PKqYWn1pZf4olQf49unV9XrNCnjVaPtL0L2ovrt+1iXnkDbxjw7M6dSXD6q0Ko27eHhvD9ZLhw+txj8GhSryai9E8J5UUnnC6+JLk3xbb73kqJVFdbjxw8ydRtacXrnweSYwiklmWE+EUoR6uGOD70kUoqQFS3U8qKb+1JuUvBvrXimVKo0sJ7q7IpQXyjgoRIHu3o7WNmWnsz/uTOjOe9Hy/Vln7EvzyOhMqAAAAAAAAAAAAAAAAAAAY+0P2VX3dT8rMgs3q+jqexP8rA+Q7Z9CHsx8i4Wrb1IexHyLhRIIAEggAdxyQurWnvu6cofRQnTnGm6jcoJvmsdk245zo4xlF+saqcsybwo5be6uEcvgvAs0PVj7MfIuoolEoglBEokIAe88gV+rbP3X/szoDQ8hF+rbL3MfNm+MqAAAAAAAAAAAAAAAAAAAWrldCfsy8mXSit6svZfkB8fW3qQ9mPkXS1bepD2Y+RcKJIAAAEAb+h6sfZj5IuotUPVh7MfJF1FRJKIKkARJCJA985Dfu2y9xA3po+Q/7usfu9PyN4ZUAAAAAAAAAAAAAAAAAAApnwfgyoiXBgfHlv6kPZj5FwoprCXgiooAAAAAN/Q9WHsx8kXEWqHqx9mPki6ioqJRSiQKiSkkD3/kR+7rH7tS/Kbs0vIv93WP3aj+RG6MqAAAAAAAAAAAAAAAAAAAQyQwPj7AKqi6UvF+ZSUAAAIJIA39B9GPsx8kXDHptKNNtpJKOjxhtxwl83+BkIqJRKIRIEkkEgfQXIxfq6x+60PyI3JqOR6/V9h90t/7cTbmVAAAAAAAAAAAAAAAZAAZGQAGQB8hXCxOftz/ADMtl68X0tX3lT8zLJQAAEAADO2g+hb+9oeTNqanaHqUPfUP8m2KJRKIJQRJJaq1YwWW+5drfYja7O2fCcHOrPc00UdcPv7X3fiB7ryS/wCgsfult/biV7d29bWMI1LmpzcZzVKmlGU5TqPLUYxim3wfy1PM6PLK6p0aVClKMKdGlTpRkqaUnGEFHLy3q8Z4mFtijW5uF1Um58+4x5zrl0FLG/1paxaeNYkivUNm8q7W4rcxBzjVabip03FTxxUXwz3G8PnKVfclCWZRSnHpwWZQedJ8eCeG+5M9w5G7dV9awqPStHoV48MVF147Hx+a6iDegZAAAAAAAAAAgkgAAAALdevCmt6c4049spKK+bNFfcsrOlopyrS7KUd5fzPC/ED5o2gvpq3vqv55GOX76W9VrPgpVasvnNssFAgkgAAQwM3aHqUPfUDbmn2h6lD31A25QZrts3LhTlhtOXRWOOpnTkaPa1Te08SCzY1HOcd5t47Xk9F2XVobkoz1nCm5JOpzVOKSzmUsNr4Jnm+yn0kZ+1YNt6vdljg+wDrf0mMn0crRPD/w+st1b+c6SUJucEpSpwc5bkZta6dTzo/A1lltKSt4wnuuMW3nc+k4aRcuvTL/APpPPZeYya3cpuOVGSfVquHyZUZjqtvMViDi04yUXKOXGSeUnqt3GjSeTqPRhtVW17GO/mjeqEZLKxCpKKcNOp72mP8Auz1nJVdvU6caVBKSm5ZnPeap6p6SSfS1a4p4SLslKjOPSjvaTTptYTeqenB9ZN7DLlfSpJgbDv1c21Cuv4tOE33Sx0l8HlGeRQAAAAAAAA117tu2oZVStBSXGKe/NeMY5aNiYd7syhXWKtKFTvcekvCS1QHNX3LylHKo0p1H9qbUI/JZfkc7f8s7uplKcaMeynFJ/wAzy/I6HaPIKlLLoVZ0X9ma5yHhnRr5s5La3JG+o5fNc/BfWovnP6eP4Aam6vpze9Ocqku2cnJ/NmHO5Ma5m4txknGS0cWmmn2NPga+vc4A5u4fTn3zn5lBNTWTffJ/iUlAEAAAAMzaHqUPfUP8m2bNTtD1Lf31D/JtJsoxrmphGluHq32Js2F7M1VzPSXhj/nzIKtm6NG9gk+OporE3FOYFd3Pd5t6bkZ9PKWFFxlFt+GcmbcUopQlCrGopRzuxx0X1p4ehZsbeVaapxajnjKWd2K+08JvHwPQdg8idlJJ3O0Oc63TpwdtT8HKSbfit0Dy+pRzJ8cPjhtfPuM+E11Y+GEvwOm9LXJu0oxo3OzZ0pW8Y81cUqddVJQlnoVmm22nlxb7o9rPP9lXGJYzo9Pj1P8A52gfRvomunU2cov+FWqQXg8T85M7Q5D0W7Nlb7OpuacZV5yuMPioSwofOMU/ideQAAAAAAAACCSAAAAwtpbJt7lbtxRp1l1b8E2vB8V8Dh9veia1rJu1rVbSfUpL9IpfJtS/qPRQB85bd9F21rZuUKML2l9q2qb08drpyw89yycXXhKnJ06kJ0qq406kJU5rxjJJo+wTC2psi2u4bl1Qo3MOqNWlGph9qytH3gfJOQe77d9C+z62ZWlSvYVHnCjJ16Oe+E3n5SR5/tv0TbWtsulCjtCkuDoT3KuO+nPGvcmyjiAVXVGpRnzdelVt6q/h1qcqcvFJ8UUgZ1/6tv76j5M2VUw69CU4Ut3XclSqP2Vo3+JlU5OrPm6EKlzW/wBOhTlWn8VHh8cFGqvOJqKsstrtZ6ZYeizat2t6dOjYQw2v0irvVHpp0KaeNe1r/Bxm1uT9awquld0p0KqbS5xdGffCXCa71kgwbdYwbCkYMakVxzHxTOi5Ocnru/ko2lGdWL41Wt2jFd9R6fBZfcBd2ZPcWnF6tmzldPHE73YXolhDEry4lUlxdOhHcgu7flly+UTudlcnrO0xzFvTpyWm/jfqfzyy/wASDxe25LbRulmla1NyWm9U3aMWn7bWV8zY7B9C1VVoVbitSt4RlGbp0s15PDzjpJRj/Uu49rABIkgkAAAAAAAAAQSAIBIAgEgCASAIBIAxNobOoXMHTuKNK4pvjCrTjUj8pI4TbXod2bXzK356wm9fop85Sz3055wu5NHowA8+2P6JNnUd13DrbQmsaVqm5SXhShhNdzydvYWFG3gqdClSt6a4QpU404r4RRlACC3XoQqRcakI1IPjGcVKL+DLoA1NLkzs+Et+NjZQn9qNnQUvmom0jFJJJJJcElhIqAEAkAQCQBBIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//9k=" class="produit_image" alt="Console xbox">
            </div>
            <div class="titre_description">
                <h2 class="details">Console Microsoft Xbox Series X :</h2>
                <p class="description_complete">
                    Plongez dans des univers ultra détaillés avec une résolution native 4K HDR . Compatible avec la technologie 8K HDR en connectant votre Xbox Series X à votre téléviseur 8K 
                    <br>
                    pour jouer dans les meilleures conditions grâce à la mise à l'échelle (4320p)
                    <br>
                    La Xbox Series S permet un rendu encore plus fluide et dynamique allant jusqu’à 120 images par seconde (compatible Fortnite, Call of Duty : Warzone , Rocket League etc)
                    <br>
                    Disque SSD 1To - Profitez d’un espace de stockage important pour tous vos jeux avec le disque SSD de 1 To pour des chargements rapides et des reprises de jeux instantanées
                    <br>
                    100% Rétrocompatible - Profitez d'une large sélection de vos anciens jeux Xbox (100% des jeux Xbox One, des centaines de jeux Xbox 360 & Xbox originale) directement sur votre Xbox Series X
                    <br>
                    Raytracing - Encore plus d’immersion avec le Raytracing qui permet d’afficher des lumières et reflets réalistes, pour des environnements plus vrais que nature sur les jeux Xbox Series X compatibles
                    <br>
                    Smart Delivery 
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">799,99€</p>
                <form action="../../panier.php">
                    <input class="ajouter_panier" type="submit" value="Ajouter au panier">
                </form>
                <select name="Nombre d'ajouts" id="nbre_panier">
                    <option value="">--Quantité--</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="0">6</option>
                    <option value="1">7</option>
                    <option value="2">8</option>
                    <option value="3">9</option>
                    <option value="4">10</option>
                </select>
            </div>
            <!--Commentaires sur l'article-->
            <form action="../../../php/recup_com.php" method="POST">
                <textarea class="ajouter_commentaire" name="commentaire"
                rows="5" cols="33" placeholder="Ajoutez un commentaire..."></textarea>
            <form action="....">
                <input class="ajouter_liste_souhaits" type="submit" value="Ajouter à la Liste des Souhaits">
            </form>
            <!--Bouton-->
                <input class="bt_send_com" type="submit" value="Envoyer">
            </form>   
        </div>
        <div class="signature">Standaert-De Clercq Simon, Demets Junior et Koch Ugo </div>           
    </body>
</html>