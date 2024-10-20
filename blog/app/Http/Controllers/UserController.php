<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    public function getUser($name_is)
    {
        // return view('user.dummy', ['name' => $name_is]);
        // if (view()->exists('user.dummyyy')) {
        $view_name = 'user.dummy';
        // if (Blade::check($view_name)) {
        if (View::exists($view_name)) {
            return view($view_name, ['name' => $name_is]);
        } else {
            echo "View dosen't exists";
        }
    }

    public function addUser()
    {
        return "addUser";
    }

    public function createUser()
    {
        return view('user.user');
    }

    public function getDummyProfile($id = null)
    {
        $users = [
            1 => ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            2 => ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com'],
            3 => ['id' => 3, 'name' => 'Alice Smith', 'email' => 'alice@example.com'],
            4 => ['id' => 4, 'name' => 'Bob Johnson', 'email' => 'bob@example.com'],
            5 => ['id' => 5, 'name' => 'Charlie Brown', 'email' => 'charlie@example.com'],
            6 => ['id' => 6, 'name' => 'Diana Prince', 'email' => 'diana@example.com'],
            7 => ['id' => 7, 'name' => 'Eve Adams', 'email' => 'eve@example.com'],
            8 => ['id' => 8, 'name' => 'Frank Castle', 'email' => 'frank@example.com'],
            9 => ['id' => 9, 'name' => 'Grace Lee', 'email' => 'grace@example.com'],
            10 => ['id' => 10, 'name' => 'Henry Ford', 'email' => 'henry@example.com'],
            11 => ['id' => 11, 'name' => 'Ivy Chen', 'email' => 'ivy@example.com'],
            12 => ['id' => 12, 'name' => 'Jack Sparrow', 'email' => 'jack@example.com'],
            13 => ['id' => 13, 'name' => 'Karen Gillan', 'email' => 'karen@example.com'],
            14 => ['id' => 14, 'name' => 'Liam Neeson', 'email' => 'liam@example.com'],
            15 => ['id' => 15, 'name' => 'Mia Farrow', 'email' => 'mia@example.com'],
        ];


        $passed_data = $users;
        if ($id != "") {
            if (array_key_exists($id, $users) && $id != null) {
                $passed_data = [$id => $users[$id]];
            } else {
                $passed_data = [];
            }
        }
        return view('user.dummy_profile', ["data" => $passed_data]);
    }
}
