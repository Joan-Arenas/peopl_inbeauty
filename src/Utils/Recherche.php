<?php


namespace App\Utils;


class Recherche
{
    /**
     * @var string|null
     */
    private $chaine;

    /**
     * @var array|null
     */
    private $categories = [];

    /**
     * @var array|null
     */
    private $marques= [];

    /**
     * @return string|null
     */
    public function getChaine(): ?string
    {
        return $this->chaine;
    }

    /**
     * @param string|null $chaine
     */
    public function setChaine(?string $chaine): void
    {
        $this->chaine = $chaine;
    }

    /**
     * @return array|null
     */
    public function getCategories(): ?array
    {
        return $this->categories;
    }

    /**
     * @param array|null $categories
     */
    public function setCategories(?array $categories): void
    {
        $this->categories = $categories;
    }

    /**
     * @return array|null
     */
    public function getMarques(): ?array
    {
        return $this->marques;
    }

    /**
     * @param array|null $marques
     */
    public function setMarques(?array $marques): void
    {
        $this->marques = $marques;
    }

}