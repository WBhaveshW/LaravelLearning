<!DOCTYPE html>
<html>

<!-- CHNAGE BELOW TO  -->
<?php 
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
// { {
// var_dump($data);
// die;
//     }
//   }
?>
<!-- TO THIS -->

<head>
  <title>User Profile</title>
  <link href="../css/app.css" rel="stylesheet">
  <script src="../js/app.js" defer></script>
</head>

<body>

  <div class="container mx-auto px-4">
    @if(isset($data) && count($data) > 0)
    <div
      class="grid lg:grid-cols-[repeat(auto-fill,minmax(200px,1fr))] xs:grid-cols-[repeat(auto-fill,minmax(auto,1fr))] md:grid-cols-[repeat(auto-fill,minmax(150px,1fr))] gap-4">
      @foreach ($data as $users_arr)
      <div class="flex flex-col shadow-md rounded-lg h-35 "> <!-- Set fixed height here -->
      <h1 class="bg-slate-400 p-2 rounded-tl-lg rounded-tr-lg">User Profile {{ $users_arr['id'] }}</h1>
      <div class="flex flex-col bg-slate-300 p-3 rounded-bl-lg rounded-br-lg flex-1">
      <!-- flex-1 to allow for growth -->
      <div>Name: {{ $users_arr['name'] }}</div>
      <div>Email: {{ $users_arr['email'] }}</div>
      </div>
      </div>
    @endforeach
    </div>
  @else
  <p>No users found.</p>
@endif
  </div>

</body>

</html>