<?php
    # PHP - Les fonctions
    //Exercice 1
    // Faire une fonction qui retourne **true**.
        echo 'Exo1: ';
        
        function testTrue()
        {
        echo TRUE;
        }

        testTrue();

    // ## Exercice 2 Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
        echo '<br>Exo2: ';
        
        function retourCaracteres($maVar) {
            echo $maVar;
        }

        retourCaracteres('abcdefg');

    ## Exercice 3 Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines
        echo '<br>Exo3: ';
        
        function concat($maVar1, $maVar2) {
            echo $maVar1.$maVar2;
        }
        
        concat('abcdefg', 'hijklm');

    ## Exercice 4
    // Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    // - **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
    // - **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
    // - **Les deux nombres sont identiques** si les deux nombres sont égaux
        echo '<br>Exo4 : ';
        function maFonction($maVar1, $maVar2) {
            $test=$maVar1-$maVar2;
            switch ($test) {
                case 0:
                echo 'Les deux nombres sont identiques';
                    break;
                case $test>0:
                    echo 'Le premier nombre est plus grand';
                    break;
                case $test<0:
                    echo 'Le premier nombre est plus petit';
                    break;
            }
        }
        maFonction(11,10);

    ## Exercice 5  Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
        echo '<br>Exo5: ';
            
        function concat2($maVar1, $maVar2) {
            if (!is_numeric($maVar1)) { // test si maVar1 n'est pas numérique
                echo 'La première valeur doit être un nombre';
            } elseif (!is_string($maVar2)) { // test si ma var2 contient des caractères
                echo 'La deuxième valeur doit être une chaine de caractères';
            } elseif (strlen($maVar2)===1) { // test si il y a plusieurs caractères dans la chaine
                echo 'La deuxième valeur doit comprendre plus d\'un caractère';
            } else {
                echo 'La chaîne concaténée : '.$maVar1.$maVar2;
            }
        }
        concat2(3, 'abc');

    ## Exercice 6
    // Faire une fonction qui prend trois paramètres : **nom**, **prenom** et **age**. Elle doit renvoyer une chaine de la forme :  
    // "Bonjour" + **nom** + **prenom** + ",tu as" + **age** + "ans".
        echo '<br>Exo6 : ';
        
        function maFonction2 ($leNom, $lePrenom, $leAge) {
            echo 'Bonjour '.$leNom.' '.$lePrenom.' tu as '.$leAge.' ans';
        }
        maFonction2('Barthès', 'Christophe', 46);

    ## Exercice 7
    // Faire une fonction qui prend deux paramètres : **age** et **genre**. Le paramètre **genre** peut prendre comme valeur :
    // - Homme
    // - Femme  

    // La fonction doit renvoyer en fonction des paramètres :
    // - **Vous êtes un homme et vous êtes majeur**
    // - **Vous êtes un homme et vous êtes mineur**
    // - **Vous êtes une femme et vous êtes majeur**
    // - **Vous êtes une femme et vous êtes mineur**

    // Gérer tous les cas.
        echo '<br>Exo 7: ';
        function test3($age, $genre) {
            if (!is_numeric($age)) { // test si maVar1 n'est pas numérique
                echo 'La première valeur doit être un nombre';
                return 'erreurAge';            
            } else if (!($genre=='Homme') and !($genre=='Femme')) {
                echo 'La deuxième valeur doit être Homme ou Femme';
                return 'erreurHF';
            } else {
                return $genre;
            }
        }     
        function maFonction3($age, $genre) {
            $result=(test3($age, $genre));
            // echo 'retourFonction '.$result;
            $reponse2= ($age >= 18) ? 'majeur' : 'mineur';  
            switch ($result) {
                case 'Homme':
                    echo $reponse='Vous êtes un Homme et vous êtes '.$reponse2;
                    // exit;
                    break;
                case 'Femme':
                    echo $reponse='Vous êtes une Femme et vous êtes '.$reponse2;
                    break;
            }

        }
        maFonction3(15, 'Home');  

    ## Exercice 8
    // Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.  
    // Tous les paramètres doivent avoir une valeur par défaut.
        echo '<br>Exo 8: ';    
        function maFonction4($nbr1=0, $nbr2=0, $nbr3=0) {
            $result=$nbr1+$nbr2+$nbr3;
            echo $result;
        }
        maFonction4(4, '', 2);

?>