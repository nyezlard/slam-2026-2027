KOPATAKI
EDOUARD

TP1 - 

Que représente $demandes ? Que représente $demande pendant un tour de boucle ? 

    $demandes represente un tableau contenant l'ensemble des variables $demande, cette dernière étant la variable de cette itération précise

Combien de fois le foreach s'exécutera-t-il avec les données fournies plus bas ? 

    3 fois car il y a 3 lignes dans le tableau $demandes

À quel moment $compteur est-il incrémenté ? 

    Lorsque la demande itérée est marquée comme nouvelle et inférieure ou égale a 1000$

Sans exécuter le code, prédisez la valeur affichée. 

    1

En une phrase, quelle règle métier ce code applique-t-il ? 

    je ne sais pas

Écrivez d'abord l'expression booléenne avec ET / OU / parenthèses. 

    Si la demande est nouvelle ET l'utilisateur est actif ET l'utilisateur est un administrateur OU (l'utilisateur est un gestionnaire ET le montant de la demande est inferieure ou égale à 1000)

Modifiez la condition directement dans le foreach. Ne créez pas encore de fonction. 

    foreach ($demandes as $demande) {
    if (
        $demande["etat"] === "nouvelle"
        && $utilisateur["actif"] === true
        && ($utilisateur["role"] === "administrateur"
        || ($utilisateur["role"] === "gestionnaire"
        && $demande["montant"] <= 1000))
    ) {
        $compteur++;}
    }

Affichez pour chaque demande son id suivi de VALIDABLE ou NON VALIDABLE. 

Prédisez les trois résultats avant d'exécuter le programme. 