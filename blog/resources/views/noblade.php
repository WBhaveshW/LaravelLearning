<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Code Highlighting with Copy</title>
  <link href="../css/app.css" rel="stylesheet">
  <script src="../js/app.js" defer></script>
  <style>
    .tooltip {
      display: none;
      position: absolute;
      top: 10px;
      left: 2px;
      background-color: rgba(0, 0, 0, 0.6);
      color: white;
      padding: 0px 10px;
      border-radius: 4px;
      font-size: 0.875rem;
      transition: opacity 0.2s;
    }

    .tooltip.show {
      display: block;
    }
  </style>
</head>

<body class="bg-gray-100">
  <div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-5 text-center">Laravel Theory Questions and Answers</h1>

    <ul class="space-y-4">
      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105">
        <h2 class="text-xl font-semibold">Question 1:What happens if we don't use the .blade extension for view
          files in Laravel?</h2>
        <p class="mt-2 text-gray-600">In Laravel, if you don't use the .blade.php extension for your view files, the
          framework will not recognize them as Blade templates. Instead, they will be treated as plain PHP files.
          This means you won't be able to utilize Blade's powerful templating features, such as directives, template
          inheritance, or easy variable handling. To take full advantage of Laravel's templating system, it's best
          to use the .blade.php extension for your view files.</p>
      </li>

      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105">
        <h2 class="text-xl font-semibold">Question 2: What is MVC?</h2>
        <p class="mt-2 text-gray-600">
          In Laravel, MVC stands for Model-View-Controller, which is a design pattern used
          to separate the application logic into three interconnected components:
        <ul class="text-gray-600">
          <li>
            1. Model
            Represents the data and business logic of the application.
            Interacts with the database, manages data retrieval and storage, and defines the relationships between
            different data entities.
            In Laravel, models are typically defined as Eloquent models, which provide an expressive and easy-to-use way
            to interact with the database.
          </li>
          <li>
            2. View
            Represents the user interface of the application.
            Contains the HTML and any embedded PHP code necessary to display data to the user.
            In Laravel, views are usually created using Blade, Laravel's templating engine, which allows for easy
            rendering of dynamic content.
          </li>
          <li>
            3. Controller
            Acts as an intermediary between the Model and the View.
            Handles user input, processes it (often involving model interactions), and returns the appropriate view.
            In Laravel, controllers are defined as classes that can group related request handling logic, making the
            code
            more organized.
          </li>
        </ul>
        <b>Summary</b>
        <ul class="text-gray-600">
          <li>By following the MVC pattern, Laravel helps developers maintain a clear separation of concerns, making the
            application easier to manage, test, and scale. This architecture promotes a more organized codebase,
            facilitating collaboration among developers.</li>
          <li class="flex justify-center items-center"><img src="../img/MVC.PNG" alt=""></li>
        </ul>
        </p>
      </li>

      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105">
        <h2 class="text-xl font-semibold">Question 3: What are utility classes?</h2>
        <p class="mt-2 text-gray-600">Utility classes are single-purpose classes that apply one specific style to an
          element.</p>
      </li>

      <!-- Add more question items as needed -->
    </ul>
  </div>

  <div class="container mx-auto p-5">
    <h1 class="text-2xl font-bold mb-4">Laravel Coding Questions</h1>

    <div class="relative bg-white pt-8 rounded shadow-md mb-4">
      <button
        class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
        onclick="copyCode('.language-javascript', event)">Copy Code</button>
      <div class="tooltip" id="tooltip">Copied!</div>
      <pre>
            <code class="language-javascript">
const greeting = 'Hello, World!';
console.log(greeting);
            </code>
        </pre>
    </div>



  </div>

  <script>
    function copyCode(languageClass, event) {
      const code = document.querySelector(`code${languageClass}`).textContent;
      navigator.clipboard.writeText(code).then(() => {
        // Show tooltip
        const tooltip = event.target.nextElementSibling;
        tooltip.classList.add('show');

        // Hide tooltip after 2 seconds
        setTimeout(() => {
          tooltip.classList.remove('show');
        }, 1000);
      }).catch(err => {
        console.error('Error copying code: ', err);
      });
    }
  </script>
</body>

</html>