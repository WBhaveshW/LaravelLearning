@extends('layouts.dummy_app')
@section('title', 'User Create')

@section('content')
<div class="container mx-auto">
  @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="max-w-md mx-auto mt-10 p-6 bg-white shadow-md rounded-lg">
    <h1 class="text-2xl font-bold mb-6 text-center">Create User</h1>

    <form action="{{ route('user.add') }}" method="POST">
      @csrf

      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input type="text" class="block w-full border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2"
          name="name" id="name" required>
      </div>

      <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" class="block w-full border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2"
          name="email" id="email" required>
      </div>

      <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input type="password"
          class="block w-full border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2" name="password"
          id="password" required>
      </div>

      <div class="mb-4">
        <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
        <select class="block w-full border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2"
          name="gender" id="gender" required>
          <option value="">Select Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
        </select>
      </div>

      <div class="mb-4">
        <label for="birthdate" class="block text-sm font-medium text-gray-700 mb-2">Birthdate</label>
        <div class="relative">
          <input type="text"
            class="block w-full border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2"
            name="birthdate" id="birthdate" placeholder="Select a date" required>
          <svg
            class="absolute inset-y-0 right-3 top-1/2 transform -translate-y-1/2 h-5 w-5 text-gray-400 cursor-pointer"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" id="calendar-icon">
            <path
              d="M10 2a1 1 0 011 1v1h-2V3a1 1 0 011-1zM3 6a1 1 0 011-1h12a1 1 0 011 1v1H3V6zM1 8h18a1 1 0 011 1v10a1 1 0 01-1 1H2a1 1 0 01-1-1V9a1 1 0 011-1zm0 2v8h18V10H1z" />
          </svg>
        </div>
      </div>

      <div class="mb-4">
        <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
        <textarea class="block w-full border-b-2 border-gray-300 focus:border-blue-500 focus:outline-none p-2"
          name="bio" id="bio"></textarea>
      </div>

      <button type="submit"
        class="w-full py-2 px-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition duration-200">Create
        User</button>
    </form>
  </div>

  <script>
    // Initialize Flatpickr on the input field
    const flatpickrInstance = flatpickr("#birthdate", {
      dateFormat: "Y-m-d", // Customize date format
      allowInput: true, // Allow manual input
    });

    // Optional: Open the calendar when the icon is clicked
    document.getElementById('calendar-icon').addEventListener('click', function () {
      flatpickrInstance.open();
    });
  </script>
  @endsection