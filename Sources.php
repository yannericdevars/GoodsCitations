<?php

class Sources
{

    private static function getCitations()
    {

        $autors = array();

        $aRibery[] = "C'est vrai qu'on vient de jouer contre une équipe qui sont vraiment très forte";
        $aRibery[] = "Il fait attention pour qu'on a du peps";
        $aRibery[] = "Inconsciemment, il faut pas s'endormir";
        $aRibery[] = "Je pense qu'on espère qu'on va gagner";
        $aRibery[] = "On est des joueurs qu'on va vite avec le ballon";
        $aRibery[] = "Au niveau des sensations, je n'ai rien ressenti";
        $aRibery[] = "C'est vrai que Scolari est un grand joueur";
        $aRibery[] = "Maintenant il faudra faire avec sans Zizou";
        $aRibery[] = "J'ai couru jusqu'à quand ce que je pouvais";
        $aRibery[] = "Je suis un mec simple, y'a pas plus compliqué que moi !";

        foreach ($aRibery as $value) {
            $autor = new Autor("Ribery", $value);
            $autors[] = $autor;
        }
        $aVanDamme[] = "Le ciment est composé de protons et de neutrons.";
        $aVanDamme[] = "13 pour moi ça représente... 13 ! 1 + 3 + 4.... Tu peux le diviser... Euh tu peux pas le diviser, tu peux le multiplier... Euh oui tu peux le diviser, bien sûr. Tu peux le diviser par 6,5, c'est correct ? C'est un chiffre. Le chiffre 7 est un chiffre très... Je sais pas pas... Quand j'y pense le 7... Les 7 étages, les 7 level, les 7 nains... Il y avait 7 nains dans Blanche-neige ?";
        $aVanDamme[] = "1 + 1 égale 1... On parle une... ou un quand on est ensemble... c'est l'amour... mais dans notre monde à 1 + 1 = 2, 2 + 2= 4 comme ça devient selfish, on prend du pognon et on partage pas... Mais si 1 + 1 = 1 ou 1 + 1 = 11, là c'est beau !";
        $aVanDamme[] = "Y'a des gens qui n'ont pas réussi car ils ne sont pas aware... ils ne sont pas au courant... Ils ne sont pas à l'attention de savoir qu'ils existent... Ils faut réveiller les gens !";
        $aVanDamme[] = "Quand j'étais jeune j'étais très con. Je suis restée très jeune.";
        $aVanDamme[] = "Quand je demande une question, tu sais à qui je demande ? Moi !";
        $aVanDamme[] = "La drogue c'est comme quand tu \"close your eyes\" et que tu traverses la rue.";
        $aVanDamme[] = "Si tu dis couic-couic quand tu marches, les gens pensent que t'as des chaussures neuves.";
        $aVanDamme[] = "Un biscuit ca n'a pas de spirit, c'est juste un biscuit. Mais, avant c'était du lait, des oeufs. Et, dans les oeufs, il y a la vie potentielle.";
        $aVanDamme[] = "J'adore les cacahuetes. Tu bois une biere et tu en as marre du gout. Alors tu manges des cacahuetes. Les cacahuetes c'est doux et salé, fort et tendre,comme une femme. Manger des cacahuetes, it's a really strong feeling. Et apres tu as de nouveau envie de boire de la bière. Les cacahuetes c'est le mouvement perpétuel à la portée de l'homme ";
        $aVanDamme[] = "Je suis fasciné par l'air. Si on enlevait l'air du ciel, tous les oiseaux tomberaient par terre....Et les avions aussi.... En meme temps l'air tu peux pas le toucher...ca existe et ca existe pas...Ca nourrit l'homme sans qu'il ait faim...It's magic...L'air c'est beau en meme temps tu peux pas le voir, c'est doux et tu peux pas le toucher.....L'air c'est un peu comme mon cerveau...";
        $aVanDamme[] = "Moi, Adam et Ève, j'y crois plus tu vois, parce que je suis pas un idiot : la pomme, ça peut pas être mauvais, c'est plein de pectine...";
        foreach ($aVanDamme as $value) {
            $autor = new Autor("VanDamme", $value);
            $autors[] = $autor;
        }

        return $autors;
    }

    public static function getOneCitation()
    {
        $aCitations = self::getCitations();

        return $aCitations[array_rand($aCitations)];
    }

}
