<?php

namespace Classes;

use Classes\ListMovies;

class Movie extends ListMovies
{
    /* $listMovies (proprità della classe estesa) */
    public $title;
    public $trailer;

    public function __construct(array $list){
        //Richiamo il costruttore della classe estesa
        parent::__construct($list);
    }

    /**
     * Metodo per mostrare tutti i film e info
     */
    public function getAll() : array
    {
        return self::$listMovies;
    }

    /**
     * Metodo per mostrare i titoli della lista dei film
     */
    public function getInfo(string $key = '') : array
    {
        $listMovies = self::$listMovies;
        $titleMovies = [];

        foreach($listMovies as $movie){
            if(array_key_exists($key, $movie)){
                $titleMovies[] = $movie[$key];
            }
        }

        return $titleMovies;
    }

}