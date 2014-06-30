<?php

/**
 * Classe auteur
 */
class Autor
{

    public $name;
    public $texte;

    /**
     * Constructeur de l'auteur
     * @param string $name  Nom
     * @param string $texte Texte
     */
    public function __construct($name, $texte)
    {
        $this->name = $name;
        $this->texte = $texte;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    public function getTexte()
    {
        return $this->texte;
    }

}
