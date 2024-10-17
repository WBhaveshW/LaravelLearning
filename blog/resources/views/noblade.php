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
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
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
        <h2 class="text-xl font-semibold">Question 3: Give detailed overview of the typical structure of a Laravel
          project, including explanations for the main files and directories you'll encounter</h2>
        <p class="mt-2 text-gray-600">
        <ul class="text-gray-600">
          <li>
            1. app/
            This directory contains the core code of your application.

            Console/: Contains all console commands for your application.
            Exceptions/: Contains custom exception handling logic.
            Http/: Contains controllers, middleware, and requests.
            Controllers/: Define your application’s business logic.
            Middleware/: Filters HTTP requests entering your application.
            Requests/: Form request validation logic.
            Models/: Contains Eloquent models representing your database tables.</li>
          <li>
            2. bootstrap/
            This directory contains the files required to bootstrap your application.

            app.php: The application bootstrap file. It initializes the framework.
            cache/: Stores framework-generated files for performance optimization.</li>
          <li>
            3. config/
            This directory holds all the configuration files for your application.

            Each file (e.g., app.php, database.php, mail.php) corresponds to different aspects of your application,
            allowing you to configure settings like database connections, mail services, etc.</li>
          <li>
            4. database/
            Contains everything related to your database.

            factories/: Contains model factories for testing and seeding.
            migrations/: Contains migration files for creating and modifying database tables.
            seeds/: Contains database seeders for populating the database with initial data.</li>
          <li>
            5. public/
            This is the entry point for your application.

            index.php: The front controller for your application.
            .htaccess: Contains rules for URL rewriting.
            css/, js/, images/: Typically holds public assets like stylesheets, JavaScript files, and images.</li>
          <li>
            6. resources/
            Contains your application’s views and other assets.

            views/: Holds Blade templates for your application's UI.
            lang/: Holds language files for localization.
            sass/ and js/: Typically used for compiling front-end assets.</li>
          <li>
            7. routes/
            Contains the route definitions for your application.

            web.php: Defines web routes (for browser requests).
            api.php: Defines API routes (for API requests).
            console.php: Defines console-based routes for command line operations.</li>
          <li>
            8. storage/
            Contains logs, compiled Blade templates, file uploads, and other files.

            app/: For application files like uploaded files.
            framework/: Contains cache files, sessions, and compiled views.
            logs/: Stores log files generated by the application.</li>
          <li>
            9. tests/
            Contains automated tests for your application.

            Feature/: Contains feature tests, which test larger parts of the application.
            Unit/: Contains unit tests, which test individual components.
            Root Files
            .env: Contains environment-specific variables. This is where you set your database connection, app key, and
            other environment settings.
            artisan: The command-line interface for Laravel. You can use it to run tasks, create controllers, migrate
            databases, etc.
            composer.json: Lists the dependencies required by your Laravel application and contains metadata about your
            project.
            package.json: Contains metadata for Node.js packages if you’re using npm for front-end assets.
            webpack.mix.js: A file for configuring Laravel Mix, which is used for compiling CSS and JavaScript assets.
          </li>
        </ul>
        <b>Summary</b>
        <ul class="text-gray-600">
          <li>
            This structure helps to separate concerns within your application, making it more maintainable and
            scalable.
            Each directory and file has a specific role, allowing you to build robust web applications efficiently.
          </li>
        </ul>
        </p>
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