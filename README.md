# anti-xss

# English
This script in php secure your site against flaws "xss" which consists of in an echo of a GET or POST to write a script.

To use this tool uses antixss ($ input). Here are some uses: if(antixss($_POST['name']) != ""){ echo antixss($_POST['name']); }

It can be easily used by including it with include "antixss.php";

# Français
Ce script en php sécurise votre site contre les failles "xss" qui consiste à dans un echo d'un GET ou un POST d'écrire un script.

Pour utiliser cette outil utilise antixss($input). voici une utilisations: if(antixss($_POST['name']) != ""){ echo antixss($_POST['name']); }

On peut l'utiliser facilement en l'incluant avec include "antixss.php";
