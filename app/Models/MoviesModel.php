<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoviesModel extends Model
{
    public function InsertMovie() {
        // ToDo: Insert movie to database
    }

    public function GetMovies($user){
        // ToDo: Take out all movies depending on what user coming in and return the value in variable
    }

    public function GetMovie($user){
        // ToDo: Take out one movies depending on what value coming in and return the value in variable
    }
}
