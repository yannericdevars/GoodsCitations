<?php
// On soustrait du timestamp actuel celui de la dernière modification pour obtenir le nombre de secondes écoulées depuis la dernière modification

$fileName = __FILE__.".cache";
$cleanFileName = str_replace("/", "", $fileName);

$fileName = "cache/".$cleanFileName;


if (file_exists($fileName)) {
$modif_ago = time() - filemtime($fileName);
 } else {
        $modif_ago = 100000;
}


if($modif_ago > 5) { // SI le fichier a été modifié il y a plus d'une minute

        // On crée notre code xHTML

 $xHTML = "<strong>".time()."</strong>";
        // On enregistre notre code dans le fichier...
                // On va commencer par ouvrir le fichier en w+
                $fichier = fopen($fileName, 'w+');
                /* Rappel : l'option w+ ne nécessite pas le replacement du pointeur
                ni l'effacement du fichier. */

                // On écrit le code xHTML dans le fichier
                fwrite($fichier, $xHTML);

                // Pour finir, on coupe la communication avec le fichier
                fclose($fichier);
}

// On récupère le contenu de notre fichier
$message_aleatoire = file_get_contents($fileName);
// On l'affiche
echo $message_aleatoire;
?>
