<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MovieListsController extends Controller
{
    //
    public function Index(){
        // ToDo: Take out lists from imdbs api and show movies
        return view('MyMoviesList');
        return Auth::check() ? view('MyMoviesList') : redirect('/User');
    }

    public function MovieListId(){
        //ToDo: Take single movie and display them from imdbs api
    }

    public function MyMovieList() {
        // ToDo: Fetch out your added movie list from database from added favourite movies
    }

    public function MovieOtherLists() {
        // ToDo: Fetch out from database of added favourite movies for other user
    }

}
