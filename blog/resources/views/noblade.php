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
    <h1 class="text-3xl font-bold mb-5 text-center">Laravel Theory,Coding Questions and Answers</h1>

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

      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">Question 4:What is the execution flow of a Laravel application?</h2>
        <p class="mt-2 text-gray-600">

        <ul class="text-gray-600">
          <li>
            Request Lifecycle:<br>
            When a user sends a request (e.g., entering a URL in a browser), it first hits the public/index.php file,
            which acts as the entry point for the application.
          </li>

          <li>
            Bootstrapping:<br>
            Laravel initializes the application by bootstrapping the framework. This involves loading the necessary
            configurations and registering service providers.
          </li>

          <li>
            Routing:<br>
            The incoming request is matched against the defined routes in routes/web.php or routes/api.php. Middleware
            associated with the route is executed at this stage.
          </li>

          <li>
            Controller Handling:<br>
            If the route points to a controller, the corresponding method is invoked. The controller handles the
            business logic,
            which may involve fetching or manipulating data using models.</li>
          <li>
            View Rendering:<br>If the response requires rendering a view, Laravel uses the Blade templating engine to
            compile the view located in
            resources/views. Data is passed from the controller to the view.
          </li>
          <li>
            Response Generation:<br>
            The final output is generated, whether it’s an HTML page, JSON response, or a file download. Any response
            middleware is executed before sending the response back.
          </li>
          <li>
            Sending the Response:<br>
            The generated response is sent back to the user's browser, completing the request cycle
          </li>
          <li>Additional Features:<br>
            Laravel provides error handling, logging, and session management to enhance the application's robustness.
          </li>
        </ul>
        <b>Summary</b>
        <ul class="text-gray-600">
          <li>
          </li>
        </ul>
        </p>
      </li>


      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">Question 5:What is routing in Laravel?</h2>
        <p class="mt-2 text-gray-600">

        <ul class="text-gray-600">
          <li>
            Routing in Laravel refers to the mechanism that maps HTTP requests to specific controller actions or
            closures. It allows you to define how the application responds to various URL patterns, helping to manage
            the flow of traffic within your application.

            In Laravel, routes are typically defined in the routes/web.php file for web applications and routes/api.php
            for API requests. Each route can specify the HTTP method (GET, POST, PUT, DELETE, etc.) and can include
            parameters, middleware, and other attributes.
          </li>
        </ul>
        <ul class="text-gray-600">
          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">For example, a simple route in Laravel might look like this:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                <code class="language-php">
Route::get('/users', [UserController::class, 'index']);

Route::get('/', function () {
    return view('firstview');
});
                </code>
            </pre>
              </div>



            </div>
          </li>
        </ul>
        </p>
      </li>


      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">Question 6:In Laravel, you can define redirects directly in your routes. Here
          are a
          few examples of how to set up redirects in your
          routes/web.php</h2>
        <p class="mt-2 text-gray-600">
        <ul class="text-gray-600">
          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Basic Redirect
                To redirect from one URL to another:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                <code class="language-php">
  Route::get('/old-url', function () {
  return redirect('/new-url');
  });

              </code>
            </pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Redirect with Named Routes
                To redirect to a named route:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                    <code class="language-php">
    Route::get('/old-route', function () {
    return redirect()->route('new.route.name');
    });

    
                  </code>
                </pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Redirect with Route Parameters
                If you need to redirect and pass route parameters:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                        <code class="language-php">
      Route::get('/old-route/{id}', function ($id) {
      return redirect()->route('new.route.name', ['id' => $id]);
      });

                      </code>
                    </pre>
              </div>
            </div>
          </li>



          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Redirecting All Requests from One URI to Another
                You can use a Route::redirect() method for a quick redirect:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                        <code class="language-php">
      Route::redirect('/old-url', '/new-url');
                      </code>
                    </pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Redirect with Flash Data
                To redirect and flash session data:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                            <code class="language-php">
          Route::get('/old-url', function () {
          return redirect('/new-url')->with('message', 'Redirected successfully!');
          });

                          </code>
                        </pre>
              </div>
            </div>
          </li>


        </ul>
        </p>
      </li>



      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">Question 7:In Laravel, basic redirection and named route redirection seem
          similar.
          Why are there two different methods? <br>While both methods serve the purpose of redirecting users, they have
          different use cases:</h2>
        <p class="mt-2 text-gray-600">
        <ul class="text-gray-600">
          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Basic Redirection:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                <code class="language-php">Route::get('/old-url', function () {
return redirect('/new-url');
});</code>
            </pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Named Route Redirection:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                    <code class="language-php">
    Route::get('/old-route', function () {
    return redirect()->route('new.route.name');
    });
    
    Route::get('/new-route', function () {
    return 'This is the new route.';
    })->name('new.route.name');

    
                  </code>
                </pre>
              </div>
            </div>




            <ul>
              <li>This method uses a named route, making it more maintainable.</li>
              <li>
                If the URL for new.route.name changes, you only need to update it in one place, reducing the risk of
                errors.
              </li>
              <li>
                It enhances code readability and organization, especially in larger applications.</li>
            </ul>

            <b>Summary</b>
            <ul>
              <li>While both approaches achieve redirection, using named routes offers better
                maintainability
                and
                clarity,
                especially as applications grow or URLs change frequently.</li>
            </ul>
          </li>


        </ul>
        </p>
      </li>




      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">Question 8:What are the different ways to check if a view exists in Laravel?
        </h2>
        <p class="mt-2 text-gray-600">
        <ul class="text-gray-600">
          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Using view()->exists() Method:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                <code class="language-php">if (view()->exists('your.view.name')) {
                // The view exists
                }
</code>
            </pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Using the Blade Facade:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                    <code class="language-php">
    use Illuminate\Support\Facades\Blade;
    
    if (Blade::check('your.view.name')) {
    // The view exists
    }
                  </code>
                </pre>
              </div>
            </div>
          </li>

          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Using the View Facade:</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                        <code class="language-php">
      use Illuminate\Support\Facades\View;
      
      if (View::exists('your.view.name')) {
      // The view exists
      }

                      </code>
                    </pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Using Try-Catch with view():</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                            <code class="language-php">
          try {
          $view = view('your.view.name');
          // The view exists
          } catch (\Exception $e) {
          // The view does not exist
          }

    
                          </code>
                        </pre>
              </div>
            </div>
          </li>

          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Directly Checking the File System (Not Recommended):</h1>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre>
                                <code class="language-php">
            if (file_exists(resource_path('views/your/view/name.blade.php'))) {
            // The view exists
            }

    
        
                              </code>
                            </pre>
              </div>
            </div>
          </li>

          <ul>
            <li>If you want to handle exceptions, you can wrap it in a try-catch block. This is less common but can be
              useful
              if you
              want to handle errors:</li>
          </ul>

          <b>Summary</b>
          <ul>
            <li>The most commonly used methods are the first three (view()->exists(), View::exists(), and
              Blade::check()).
              They all
              achieve the same goal and are integrated within Laravel’s view system, making them the best options for
              checking
              view
              existence.</li>
            <li>
              <ul>
                You might use the View::exists() condition in several scenarios, such as:
                <li>
                  Dynamic View Loading: If your application allows users to select or customize views (e.g., themes or
                  layouts), you can check if the selected view exists before rendering it, preventing errors.
                </li>
                <li>
                  Feature Toggles: When implementing feature flags, you can check if a view related to a feature is
                  available. If it's not, you can provide a fallback view or redirect users to a different page.
                </li>
                <li>
                  Error Handling: When rendering error pages or custom views based on user actions, you can ensure the
                  specified view exists before attempting to load it, improving robustness.
                </li>
                <li>
                  Conditional Rendering: In some cases, you might want to display different views based on certain
                  conditions (like user roles or settings). Checking for view existence allows you to ensure you're not
                  trying to render a non-existent view.
                </li>
                <li>
                  These checks can enhance your application's flexibility and user experience by gracefully handling
                  scenarios where views may not be present.
                </li>
              </ul>
            </li>
          </ul>
        </ul>
        </p>
      </li>


      <!-- Question Item -->
      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">
          Question 9: What is a Blade template in Laravel, and how can it be utilized?
          <br>
          Blade is Laravel's templating engine that facilitates the creation of dynamic and reusable views within your
          application.
        </h2>

        <ul class="mt-2 text-gray-600">
          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Using view()->exists() Method:</h1>
              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <ul>
                  <li><b>Creating a Blade View:</b> Blade views are saved in the resources/views directory with a
                    .blade.php extension. For instance, you might create a file named welcome.blade.php that contains
                    your HTML structure.</li>
                  <li><b>Rendering a View:</b> You can render a Blade view from a controller using the view() helper,
                    such as return view('welcome');.</li>
                </ul>
              </div>
            </div>
          </li>

          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Blade Syntax:</h1>
              <p><b>Variables:</b> Use double curly braces to display variables, e.g., <code>Hello, {{ $name }}!</code>.
              </p>
              <p><b>Control Structures:</b> Blade supports control structures like if statements and loops:</p>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>If Statements:</p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
@if($condition)
    <p>Condition is true!</p>
@else
    <p>Condition is false!</p>
@endif
                    </code></pre>
              </div>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>Loops:</p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
@foreach($items as $item)
    <li>{{ $item }}</li>
@endforeach
                    </code></pre>
              </div>
            </div>
          </li>


          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Layouts and Sections</h1>
              Blade makes it easy to create layouts and sections:

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>Defining a Layout::</p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

                    </code></pre>
              </div>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>Extending a Layout:</p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to the Home Page</h1>
@endsection

                    </code></pre>
              </div>
            </div>
          </li>



          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4"> Blade Components<br>Blade allows you to create reusable components:
                This creates a component class and a Blade view in resources/views/components/alert.blade.php
              </h1>
              <p><b>Creating a Component: </b> Run the artisan command: php artisan make:component Alert

              </p>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>Loops:</p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
@foreach($items as $item)
    <li>{{ $item }}</li>
@endforeach
                    </code></pre>
              </div>
            </div>
          </li>

          <li>
            <div class="container mx-auto p-5">
              <h1 class="text-2xl font-bold mb-4">Blade Components:</h1>
              <p>You can create reusable components, enhancing modularity. For example, create an Alert component and
                use it in your views with <code>&lt;x-alert type="success" :message="$message" /&gt;</code>.</p>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>Layouts and Sections:</p>
                <p>Define a layout using <code>@yield</code> and extend it in your views. This promotes a consistent
                  design across your application.</p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
<!-- In layout -->
@yield('content')
                    </code></pre>
              </div>

              <div class="relative bg-white pt-8 rounded shadow-md mb-4">
                <p>Blade Directives:</p>
                <p>Blade offers built-in directives like <code>@csrf</code> for CSRF tokens and <code>@auth</code> or
                  <code>@guest</code> for authentication checks.
                </p>
                <button
                  class="copy-button absolute top-2 right-2 bg-gray-300 hover:bg-gray-400 text-white font-bold py-1 px-2 rounded text-xs"
                  onclick="copyCode('.language-php', event)">Copy Code</button>
                <div class="tooltip" id="tooltip">Copied!</div>
                <pre><code class="language-php">
<!-- In layout -->
<!-- @yield('content') -->
                    </code></pre>
              </div>
            </div>
          </li>
        </ul>

        <b>Summary:</b>
        <ul>
          <li>Blade simplifies the process of building dynamic, maintainable views in Laravel, making it easier to
            manage your application's presentation layer.</li>
        </ul>
      </li>

      <li class="bg-white shadow-md rounded-lg p-4 transition-transform transform hover:scale-105 hover:shadow-inner">
        <h2 class="text-xl font-semibold">Question 10:Subview vs Component <br>Summary
          Subview: Part of a view hierarchy, focuses on layout.
          Component: Reusable unit of functionality and presentation, often includes its own logic.
        </h2>
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