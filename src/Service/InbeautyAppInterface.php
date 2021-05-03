<?php


namespace App\Service;


class InbeautyAppInterface
{


//-----------------FUNCTION POUR COMMENCER AVEC UNE LETTRE MAJ

    public static function capitalize(string $mot)
    {
        return ucwords(mb_strtolower(trim($mot)));
    }

//-----------------FUNCTION POUR METTRE TOU EN MINUSCULE

    public static function lowercase(string $mot)
    {
        return mb_strtolower(trim($mot));

    }

//    public static function concactene(string )??????????????????????????????????
//    {
//        return
//    }
}