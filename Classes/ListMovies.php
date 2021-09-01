<?php

namespace Classes;

use Classes\ListMovies;

class ListMovies
{
    protected static $listMovies;

    public function __construct(array $_listMovies){
        self::$listMovies = $_listMovies;
    }

}