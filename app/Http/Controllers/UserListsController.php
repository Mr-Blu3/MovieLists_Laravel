<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserListsController extends Controller
{
    public function Index(){
        // ToDo: Log in with gmails api /GooGle
        // ToDo: Login with database
        return view("User");
    }

    public function Register() {
        // ToDo: Use Laravel Auth to register to database
    }

    public function OtherUsers() {
        // ToDo: Take out all users and display them for other users
    }

    public function UserListInformation() {
        // ToDo: Fetch out list of user profile
    }
}
