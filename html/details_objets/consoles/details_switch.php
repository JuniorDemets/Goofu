<?php

//Démarrage de la session 
session_start();

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
        <title>Nintendo Switch</title>
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
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTERYTFBQRFhMWFhEWGBYTFhYTFxYWFhYXFxYTFhYZHioiGRsnHhYWIzMjJystMDAwGCE2OzYuOiovMS0BCwsLDw4PHBERGy8eHigvLy8vLy8vLy8vLS8vLy8tLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vLy8vL//AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABQEDBAYHAgj/xABIEAABAwIDBAYFCQYDCAMAAAABAAIDBBEFEiEGMVFxEyJBYYGRBxQyUqEjYnKSorHB0fAkQoKTwtIzc7IVU2ODo7Ph8QgWQ//EABsBAQACAwEBAAAAAAAAAAAAAAADBAECBQYH/8QANBEAAgIBAgQBCgQHAAAAAAAAAAECAxEEIRIxQVEFE2FxgZGhscHR8CIjMlIUFTNCYnLh/9oADAMBAAIRAxEAPwDuKIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIrNRMGNLnbgLla3X7S30jBHedL/j9y1lOMeZNVRZb+hZNoc8DeQOeio14O4g8tVzubEJCb3F+NgT5nU+JXhtc4G53+83qPHJzbFRfxES7/K7cc0dKRahsxtDJJM6nls7qF8cg0JAsHMkG7MLggjeL3Atc7epYyUllFC2qVUuGawwiItiMIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgIHbGodHSSPbazbF2l7sv1gO87rrm0uHymr6UyHIL9VvV3CzWut7TRd58e5daxmm6WCWO18zHADibafGy5JU4mIadj3m3sxucRezxdriRcdrXaXChuTbWOux0dBOEVNzWUsS9mxh7T7SNp8zM2V+QOZ1c2Y31FuFgfG3fbJosWvAySQEP6MPe1oJtuzHuH67FGYRioq+k6QNc2N9mOte4PZbtPIa3VvFsPbVOIhnfGW2ZIwC24m1wdQd48O5QvC2ktl1XVnQjxtOVU8znhqMtsLr19ntJWqxIt6GqhcCWua5p3XHungCCQeZXZaSoEjGvb7L2tcOThcfeuK/7OEdL0bdzG2Hgul+jyu6XD4b747xHuyGzfs5U00vxNd9zXxer8qE+qeH69/jk2dERXDgBERAEREAREQBERAEREAREQBERAEREAREQBFh1+IxRNLpJGMa3eXODQOZOg8VoG0Hpio4bthD6h4/3Ysz+Y7S3e3MgOlqKxfaCmpm55po2D5zgL9wvvPcNV8/7QelavqLhj207OEQzP8AF7vvaGrSKid8ji97nvf2ve4vcebjcrODGTvtZ6XqZ8vQU4kc52YCQtysuATpm1vp2tsoaCZswmD2ts6Rzi3ePlLPJtwzl641S1GSRj/cex3g1wJHwXV8JktMR7zL/Udp/wBw+SivWa35i94dPh1MV3yvv1ou1uF/JZIiInBzXtLQLBzTcXHb/wClhbO4Q+Fz3yPzySEFx5bh8VK19XkA3XcbC+oGhJJHboN3EjdvWtV2N2IDHvzXAve9z3t9nyAVauqc4YzhHW1Os09F/E4cU8c10X1+T85t0gu0jiCpj0T1VnVFOewtkaOfVd/QtO2fxoVEWYgB4JDrbiR+8O4qX2SquixRnuzBzD42y/aa1RwbjYs9yzqoq/Rycd1jiXqOxIiLonkwiIgCIiAIiIAiIgCIiAIiIAi8PkA3kDmtY2g2+oaS7ZJmmQf/AJsu9/ixty3+IAd6A2pWZp2tF3EC2uvBcRx/01Svu2lhEY9+Y3d/LYbA/wAR5LnWNbRVNUf2ieSQE+wTlZ4Rts2/fa6A79j3pToKe4bJ0zxfqw2k1Hzgcg5FwK5vj/piq5btgayBuvWPysnMXGUciHc1zlkLj2WHfp8N6yIqRvaSfgPzTBtGDkUxHEp6h+aaSWZ+ts5L7fRbuaO4AKsWGyO32aO/U+QUlSgDQAAd2ik6eO61k30LtWki95Ms4RgMW9wLz87d9UfjdSG1VE31N2VoAjLHgNAAFjlNgO5xV2mfY2WdUs6WKSP32Pb4lpAPmonBqSlJ5OtCmHkZQiksp/fc5UV0bAau7aeQn3Gu7y4GO31nA+C5s0rbtm5iaZzR7THOy89HtPmfgp2spo85XZwTjPs0/ZubbtRTudEHMBLmE6DeWuFnW79AfBc5qa0B3VDi/cL6kHuA7eB7OF7W6yXhwDhucARyIuFEV2GFxzWtfttqfHtXPr1DrXC1k9PqfDIamasU+F+jOe3VbkDslG6Ntne043twHYP1xWxVkxY6KUe0x7COYII+5WqKgDFlV8V4iFBKTlLifM6kKYV1qtcksfU7jTyh7WvHsuAcORFx96vLW/R9XdLQQk+00dGf4NB9nKtkXWi8pM8LZB1zcH0bQREWTQIiIAiIgCIo3Fccp6dmeaWONvF7mtB7gSbE9yAkl5JtqVyzH/TRSx3bTxyTu163+Ez6zhm8mkd65tjvpMxCpuOl6Fhv1YRkNv8AMN3g/RLR3ID6DxvamkpW3nnjZwBcLn6Ld7vAFc3x/wBNrBdtLE559+X5NnMDVzuRDFxY5nkuOZzjqXOJJPeXHevbabifL8ygJ3Hdu66qv0k7msO9kN4m24Eg5nDuc4rXmRHsFh5BZLWtG4eO8o56yYLbYOJ8vzVwWG4frmrT5AN5C2rC/R1idQzOymcxhFwZnNhLuTXHN5gBAa4JF7a9ecToZqeZ0M8bo5GWzMda+uoII0IPYQbFWY3KRE1bJSncpynNgoKhGoUwHWC3hDmy/XYkj2ZNVnU1TZQpk1V5kq1nXksV6jDyajicOSaRvYHOtyJJb8CFLbIz2e9nFrXD+E2P+oLD2hb8sT7zWn+n+lW8Cmyzs4G7T4g2+NlFyZxbFibXnfxOp4DMDCy4vkJaRxDHFoHi0DzURT0kwne4yPeXuFyQ4AAOvfXTcALDh4rJ2cl1lZ3sf9duWw/l/FS9lz5zlXKcV1PTafT16qqm2beYr3rbf1o85UkHVPIr0sbEpwyNx7ToOZVU65tfofrbtni91zZB4gtd/pb5rpK5V6G6Y9JPJ2BrR4vN/wCj4rqq6enf5aPH+JpLVTx5vbhBERTFAIityPABJ3DVAUmla0XJsoaq2iY3cL9w18zuHhdQuLYkZXHWzewKAxWJ0jQ1skkQucxjyguHDMQcvMaroV6PbMt325HnNV41+JxqaS/c1n2L4GLtztlVNp5TG8R2cwAhrSWtc5jbAkanW9/nLi1XVvkeXyPfI873yOdI492ZxJXT9rI/2eoG/wCTDtfmAEHzYuUFVLoqNjS7nZ0Vjs01c28tpN+nG5lNpj2m3LVXGxNHZfnqvLHkgcgsiKje7stzUaTfIsOSjzZbL17bESpWkwU2ud69TURat/Jy6oqS1cM4iyIMKnNm8DgfHNVVRkFLT5AWxWEk8r/YgYf3eLj2AjdvGC6NbVgk2XCZ3NDS+mraGpAOoJJEbQ4dou371jhN4W5ZlRubNRYjTf7NZRBtGKiMGOTpnthkDy580oDpBo3s4rsWxVb02HUsp3vggJ+lkAd8QVynA9rZMTxVrJmNYyalq6VsbesLSM6Rxc47yeiHDcPG7glDXV2zlPBRyBkscz2SgvMRdG18hDcw3Wzxkjtt4HDjgsRaa2Mf/wCRVGGzUkwGr2TRuP8AluY5oJ/5j7eK5RTrsvpdwaWHA6RssnSzQSQtkkJJzZo3tdYnU6loudSAuLQS2WYtG2cE7QmxWTUVHYoNtSVmMkzBWapLkYV3QyWyK6JFhgr1nUvCSRsZi46L5TzH3EfcVFRvyuDvdIPkbqVxIXZyIP4fiokBVLo4kayeXk6Pgk1p28Hse3mRZ7fg1/mtlXPsOrMsMUu8x2J5N6rvhdTUmKvcQ1uYl24Rjff4nwuubqa25rhWco9B4Tqa4aeSsklwv4/9yT9RVsYOsfDt8lDvL6iQAA7wAwanU2At2kqRw7YjEaix6PoWm3WlJafI9f7I5rpGx+wkFD1/8Se2sjhYN4iNv7vPUlYhpXzk8G93jVcXiuPF53t97kjsdgnqlM1ht0jjmfb3iB1R3AADwJ7VPoiuJJLCPOznKcnOXN7hERZNQoXaioLIdN7iB4b1NLXtsh8i0/PA8wT+CloSdsU+5T8QlKOlscefCzmeIbRxsBJc4HM4NDTlAANg93Em1+FiNN6i8B2nMtQYnuBDrZRbUdXNcadtjcd+iw9pdnnhxkjaHtuTlLtRzZbrcw4DTUb7xGy+GPZOZZPb1AGhtc6uJHafxKswVyu3z8voc216G3RNQw0lt+5P45zz6Pfc3LH2ZxKz34C3z6UfiFx0FdhrXdZne148iPzXH3My6cNPLRRatYtf30LnhLzo4ev3No2jCKFphY/iPuJB+5Z8bNV62WZmomdz5R9on8V7cLOU8IfgTKVtrdk4vo2veZrBYKxPYq7n0WHM9ScBVhnJHVTbFbBsSwywYjTtBc+WkMjGje58D8zWgdpu9QFW5Y1HiMsErZYXujlYbte21wbWOh0IIuLG4KhnX0R09PLDTZmbB1Dm4pSuYC4idgIaC4hjz0b3EDsDXknkup+jnFoKJ2JwzyxQsir5XAyPDBll9gNvvuI9wWky7Y4tO4QtkipTKHkvbEIXSZQCbuDXPzWIIygE3WoigZIyCqlmdPJNUBssebNLkDiHG1zI9xAHWG7MBwKrT33Z0q1hYNr9MXpCjrslNTkmCN+d0hBb0sgBDQwHXIA52p3k91zz5uHyiETmN4hLsofbqk6/2uF912uG8FbhQwdA2WrpqcCnMBa0VU0UL5HwPBmMbX9aePqlr2tDc2Yjqnqq/iWytVFRTtlkDooGUslOWCJvTRvkGYkf4rmM9YcRc2BJ7gojd8jRYysiOSysmMg2III0IOhBG8EL00LeMsFaTM5lQO1eulbxWDdULlOrmOORk1EoLSOIKjFdklVpu5RWT4mTVt9SewJ2aJ7O8+Th+YK7X6ECz1SRmVofHLvsM2SRjXtBO+wJeByXDMAfaQji34g/+Su0+hgtBmAuHE5Xa6OyHOx1uIErx4DgoyQ6qiIsAIiIAiIgCgdsh+zE8HNPncfip5Qu1gvSSc4z/wBRqlpeLI+lfEq66PFprV/hL4HOp7WN93aouhqIJHObGbloa4/Rdezge0dUr3imJU9zA95u8hhA/ddIcguezX9b1Cuw51DE+SMvke5zQ5xbmc1gBt1W9g7uK6s7XlyjhxWc98nk9NpY+TVduYWTxwZ2jh9X9OfLuS2K6NYf+IR5sv8A0rk2JNtNKP8AiSf6iuiU1VLJStfKHA9MSM2jshzNbf6y0HHhaol+kD5tafxXP1T4pqXdI9F4THgodec8MpLPf7ybZsCb0sjeErvjHH+RV/ENHKP9Hsmkzf8AJcPtg/cFnYwdVco3qic65cOsmvQ/aky2yfRWpnKM9ZsVcFVdSrBN5Fp7Fal2imapkYjieGQ07JIzG7ppW53smDIzUMhuZMjHCR9zoQLjTqjXaicKZ/8AuDmUZp7zyF8T4SJZGmGNhJA6OIMzFwboC55DTqBuAqX89i9p1hPJN4ps7O6F0tTM9zqaHELxg5DC5nSQ0sjXDrFj307nam3VFtHax8WOMopnMieyCCqw1sgMQAMdQ+kAb8owGRvysZ0B3vJ71p+LbSVM3tzSH5GOA2OUOhjJLGPy2z6km7rkkqDVKRfibaNpaeSCLpqV0tVDC+CN5ltA5jnPc2SWMDM57TI7c4AnUrFGKTvfnzZHGCGncY7sL4omsawPI1JtFHc/NCh6WFZ7Zmt7fAaqFy6GWZAiubm5JuSTqSTvJKqadYr8R91vi78grDqiR5tcnub+Q3rKUmR8BfnaG9o/HyWI5yvMonHfZvM68iG3I8QFlw4ePnE9/V+AuT5hbmVWkRmT9FZDKN3aLfS08QN58AVsWF4HNK7LDE9ztNI2kkcy27rcyt1wb0UVT7GTJC3tzEF3PKy/xIQ3Ob0UHRuze06xtva0X0vrq7TssN66D6K698VY1p3SvaLWsDcFunK9/Nb7hPotpIrGR0krv5bfJvW+0tvw7CYIBaKKOPva0Anmd58UBnIiLBkIiIAiIgCjdoG3pZe5hP1dfwUksLF2XglHGOQfZKzF4kmaWR4oNd00cPrtnWPqOnu64OfISMpkBNncd6wcIxSolqnNeHCNrXhwc0tbmzDJoe0AG5Ghutluo7GOlEY6HNmMgByC5yWdfs07NV2raYxfGtsZeF1PGaXV2Wx8hPD4koqUv7Uvl7z3i7fkXd2Q+TmrmW0w/aD3tYfhb+ldIla/1R4ffOIpb3NzoCRc8rLne1LPlWniy3k4/mqWt3cZd0dvwT8MLK85xLmuT2xn14MzYKa00jfeiJ8nt/uKk8Zl1K1zZioyTgntZI34X/pWdiVc0kqTS2RVeH3ZtqKG9XxJc0vp8jCnKxJqot0G9eamsJ0asToyd6ju1C5ROnXWktypqHHtXkvJXtkKyY6R53NsOJs0HkTv8FTcmyVJIw+jJXpsVlKR4dxPkLfF27yKy6egFwGtu42AuMxPdY6HwCwCIjic7cCR3bhzO4K9HQE7yBy6x/t+K6BhPo6rp7HoSxvvTHJbwd1rcmlbphXodYLGoqHO3dWJoHhnfe/g0IDisVA3gTzN/gLAeJK2PBtkaqoA6GCRzT2huSM+OjPiu84TsTQU5vHTsL9+eS8zr8QZCcvIWC2NYMnG8H9EEhsZ5Y4x7rAZHcv3QPtLdsK9HdDDa8ZlPGU3H1GgN8wVtyIC1BAxgysa1rR2NAaPIK6iIAiIgCIiAIiIAiIgCtTsu0jiHDzCuqhQHFmnQcgqrLxWkMM74jpZxyfOjcbtI46acwsRejhJSSkj55ZW6pOEua2PE7btcOLHDzC5jtILiJ3c8f6T+a6g9wGpIA79FzbE2Nkblu4FpdqG3HDtI81z9ev0+s7/AIA/6i/1+ZARPyuDh2X+634r24ucdxJO4Ab+SlKTCw42Y18juDQ5x55WbvElbTg+wtbP7EOVp7XaA88ul/pELm5PRcKzk0aOhed4Dfpb/Fou4eSy48Pb2knyb+ZPwXZ8G9EIFjUSX+a3QciG/wBxW40ewdBGB+zxPy3Iztad++4t1v4roZPnvCsHlldlp4ZHu3fJMc4i/Fwu5o5kBbrhPoprZdZTFCDvznO/nlZe/i4LuUELWNDWNa1o3BoDQOQCurBk57g/omo47GZ0s7u89EzwDDm83FbnhuEQQC0MMUfHI1rSeZGp8VnIgKoqIgKoqIgKoqIgKoqIgKoqJdAVRURAVRURAVRUuiAXReHOXgvQEVtHs7FVsAcS17fYe3e3uPEdy57iexeIR3Ebulbxa4B3iHWPlddSfIVjTyy/utZ4uI/BTV3zgsJ7FPUaGm58Ulv3OR02wmITO60YjHvTSC3k27vgp6h9EMF8088jzvLYQI294JdmJ8Mq26aSr7GQfzHf2rFf69wh+uf7Vidsp8zenS11bx+/kSuH4LTQtDWRsAFva627t17dFJGcdy1RzK3hH9Y/kvBjq/meajwWTbTUjiFT1ocVqPRVXd5qnQ1Pd5pgG3GrHFeTWt4hal6vP+iUFNP+imAbZ683inrwWqCnm/RXsRTLANp9cC9CrC1hrZl7aJUBsvrQVfWQtcaZVda6RAT4qAq9MFBtc9XQ96AmOlCrnUSHOVwPcgJPMq5lGiRyuB5QGdmVcyww8r21xQGSCqqwHFe2lAXEXm6ICpC8FiuogLBYvJjWSqWQGKY1To1l2SyAxOiVOiWZlCZQgMPoE6BZmUJlCAwugT1dZtksgML1cL16uFl2SyAxPVk9W7ll2SyAxPVgq+rBZVksgMYU6qIFkogLHQBV6FXkQFnolURK6iAt9GnRq4iA8ZV6AVUQFLIqogCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgP//Z" class="produit_image" alt="switch console">
            </div>
            
            <div class="titre_description">
                <h2 class="details">Détails du produit :</h2>
                <p class="description_complete">
                    La console de Switch de Nintendo, c’est une petite révolution dans le monde du gaming ! Cette console portable dispose d’un grand écran tactile de 6,2 pouces et de manettes pouvant être scindées afin de pouvoir jouer à deux 
                    <br>
                    à certains jeux comme NBA 2K et Mario Kart. Tu es assis confortablement chez toi ? Pose la Switch sur son dock et continue ta partie sur ta télévision.
                    <br>
                    Les Joy-Con sont amovibles pour te permettre de jouer assis confortablement dans ton fauteuil… Mais si tu préfères les controllers plus classiques, choisis la manette Nintendo Switch Pro. Bien entendu, chaque joueur possédant une manette Switch peut jouer !
                    <br>
                    Les Joy-Con disposent d’un gyroscope et d’un accéléromètre. Grâce à ces ajouts, chaque manette peut être utilisée comme une épée, une raquette de tennis ou autre. Ensuite, la caméra de mouvement infrarouge enregistre chaque mouvement de main.
                </p>
                </div>
            </div>
            <div class="prix_panier">
                <p class="prix">299€</p>
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
                <textarea class="ajouter_commentaire" name="Commentaire"
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