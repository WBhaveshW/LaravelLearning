<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('firstview');
});

Route::get('/noblade', function () {
    return view('noblade');
});

Route::get('/users/{id?}', function ($id = null) {
    // Simulating user data retrieval (in a real app, you'd fetch from a database)
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

    // Check if user exists
    if (!array_key_exists($id, $users) && $id != null) {
        abort(404); // User not found
    }
    $passed_data = $users;
    if ($id != "") {
        $passed_data = [$id => $users[$id]];
    }
    return view('user.profile', ["data" => $passed_data]);
});


Route::get('/users', [UserController::class, 'index']);

Route::get('/', function () {
    return view('firstview');
});


Route::get('/users/{id}/flash', function ($id) {
    return redirect('/firstview')->with('message', "Redirected successfully! from <a href='/users/" . $id . "/flash'>/users/'" . $id . "'/flash to firstview");
});
Route::get('/firstview', function () {
    return view('firstview');
});


Route::get('/', function () {
    return redirect('/noblade');
});




// This is the new route
Route::get('/new_route', function () {
    return view('newrouteview');
})->name('new_route_name'); // Naming the route

// This is the old route
Route::get('/old_route', function () {
    // Redirecting to the new route using its name
    return redirect()->route('new_route_name')->with('message', "Redirect from /old_route to /new_route");
});

Route::get('/getUser/{name?}/', [UserController::class, 'getUser']);


Route::get('/dummy_profile/{id?}', [UserController::class, 'getDummyProfile']);

Route::post('/user/adduser', [UserController::class, 'addUser'])->name('user.add');
Route::get('/user/createuser', [UserController::class, 'createUser'])->name('users.createuser');


