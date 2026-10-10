# TP 02 PHP - Programmation Web 2 (2026/2027)

- Nom : DAOUDI
- Prénom : Iman
- Groupe : G 4
- Titre du TP : TP 02 - PHP et GitHub

## Exécuter le projet
Depuis la racine du dépôt : `php -S localhost:8000`
puis ouvrir http://localhost:8000/index.php

## Liste des exercices
1. ex01.php : affichage et commentaires
2. ex02.php : variables et concaténation
3. ex03.php : constantes et calculs (TVA)
4. ex04.php : types et conversions
5. ex05.php : conditions if / elseif / else
6. ex06.php : switch et date()
7. ex07.php : boucles for (table, pyramide)
8. ex08.php : while, do-while, continue, break
9. ex09.php : tableau associatif et foreach
10. ex10_get / ex10_post : formulaires GET et POST

## Réponses courtes

### Exercice 2
`$note` et `$Note` sont deux variables différentes car les noms de variables
sont sensibles à la casse en PHP.
Noms valides : `$a`, `$_a`, `$a_a`, `$AAA`, `$a1`.
Noms invalides : `$a!` (le caractère ! est interdit) et `$1a`
(un nom de variable ne peut pas commencer par un chiffre).

### Exercice 4
`echo false` n'affiche rien (false est converti en chaîne vide), alors que
`echo true` affiche 1. `var_dump(false)` affiche `bool(false)` : il montre
le type et la vraie valeur.

### Exercice 5 (valeurs testées)
| Valeur | Message |
|---|---|
| -1 | Note invalide |
| 9 | Non validé |
| 10 | Passable |
| 12 | Assez bien |
| 14 | Bien |
| 16 | Très bien |
| 21 | Note invalide |

### Exercice 10
GET : les valeurs apparaissent dans l'URL, après le ?, sous la forme
`ex10_get.php?nom=...&prenom=...&groupe=...`.
POST : les valeurs sont envoyées dans le corps de la requête HTTP ;
l'URL reste `ex10_post.php` sans paramètres visibles.