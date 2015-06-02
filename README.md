![HelpDesk](http://angular.kobject.net/git/phalconist/helpdeskGitImage.png "HelpDesk")
# helpdesk
A Helpdesk Application for educational purposes using a micro-framework

    Projet de DION Guillaume et DUSSARTRE Mavel

# Répartition du travail et réalisation du projet :
Pour répartir le travail, l'option la plus évidente aurait été de prendre chacun une partie et de la réaliser chacun de notre côté afin de couper le temps de travail en deux et d'aller deux fois plus vite.
Mais aux vues du projet, nous avons décidé d'opérer autrement.

En effet, le projet est basé sur un framework. Etant donné que nous n'avions jamais fait de PHP orienté objet et que nous n'avions pas fait, et donc que nous ne connaissions pas, le framework, la plus grande difficulté était de comprendre son fonctionnement et d'apprendre à l'utiliser.
Dans ce cas de figure le plus long était donc de comprendre comment faire. C'est pourquoi nous avons décidé d'essayer de comprendre ensemble.

Nous avons donc procédé de la manière suivant :

1 - Dans un premier temps, nous avons commencé la partie 1 ensemble, que ce soit en TP, à l'IUT pendant une pause ou encore chez nous par écrans interposés (TeamViewer + Skype). Tout cela dans le but de comprendre plus vite le fonctionnement.

2 - Après avoir bien compris, donc à la fin de la partie 1, nous nous sommes répartis les différentes autres tâches, tout en s'aidant mutuellement lorsqu'un problème apparaissait.

3 - Pour finir, nous avons finalisé le projet encore une fois ensemble. Nous avons donc fixé quelques détails et écrit ce petit rapport.

Les modules de l'exercice 1 n'ont donc jamais réellement étés réalisés par une seule personne. Ensuite les modules de l'exercice 2 ont été réalisés à chaque fois avec l'aide de l'autre.
Néanmoins, on peut dire que les modules 2.1 et 3.2 ont principalement été réalisés par Guillaume DION et les 2.2, 2.3 et 3.1 par Mavel DUSSARTRE.

# Accès au projet :
Pour accéder à la page d'accueil du projet :
[URL/IP du site]/[Chemin du projet]/
Ce qui donne en local et avec le projet dans le dossier "helpdesk" : 
127.0.0.1/helpdesk/

Pour accéder à la page de test des fonctionnalités implantés :
[URL/IP du site]/[Chemin du projet]/tests
Ce qui donne en local et avec le projet dans le dossier "helpdesk" : 
127.0.0.1/helpdesk/tests

Les liens de modules sont également les suivants :

1.1 : 127.0.0.1/helpdesk/Tickets/frm

1.2 : 127.0.0.1/helpdesk/Messages/frm

1.3 : 127.0.0.1/helpdesk/Tickets/changerStatut

2.1 : 127.0.0.1/helpdesk/Faqs/frm

2.2 : 127.0.0.1/helpdesk/Faqs/showAll

2.3 : 127.0.0.1/helpdesk/Faqs/showOne

3.1 : 127.0.0.1/helpdesk/

3.2 : 127.0.0.1/helpdesk/tests


# Modifications apportées au projet


Partie 1 : 


1.1 : Ajout de la fonction Tickets/frm ainsi que de ses views ticket/vAdd et ticket/vDeco. Ajout également de la fonction SetValuesToObject pour les valeures popres au Ticket. 

1.2 : Ajout de la fonction Messages/frm ainsi que de ses views message/vSelectTicket, message/vMessages, message/vEdition, message/vAdd et message/vDeco. Ajout également de la fonction SetValuesToObject pour les valeures popres au Message. 

1.3 : Ajout de la fonction Tickets/changerStatut ainsi que de ses views statut/vSelectTicket, statut/vChangerStatut et statut/vDeco.


Partie 2 : 


2.1 : Ajout de la fonction Faqs/frm ainsi que de ses views faq/vAdd et faq/vDeco. Ajout également de la fonction SetValuesToObject pour les valeures popres à l'Article.

2.2 : Ajout de la fonction Faqs/showAll ainsi que de ses views faq/vParCategories, faq/vLesPlusRecents et faq/vLesPlusPop.

2.3 : Ajout de la fonction Faqs/showOne ainsi que sa view Faq/vShowOne


Partie 3 : 


3.1 : Modification de la fonction DefaultC/index et de sa view main/vDefault. Ajout de la view main/vDeco.

3.2 : Ajout de la classe Tests, de sa fonction Tests/index ainsi que de sa view test/vTests.