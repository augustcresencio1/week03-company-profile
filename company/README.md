# Laravel Company Profile Website

## 1. Project Title

**Laravel Company Profile Website**

A simple company profile website developed using **Laravel, PHP, Blade, HTML, and Tailwind CSS**. The project demonstrates the basic implementation of Laravel's MVC architecture, routing, controllers, and Blade templating engine.

---

## 2. Introduction

### What is a Company Profile Website?

A **Company Profile Website** is a website that presents important information about a company, organization, or business. It usually contains information such as the company's background, services, contact details, and other information that helps visitors understand the business.

### Why Businesses Need One

Businesses need a company profile website because it provides an online presence where customers and potential clients can easily learn about the company. It can also help establish credibility, promote services, and make important business information accessible online.

### Purpose of the Project

The purpose of this project is to develop a simple company profile website using Laravel. It aims to demonstrate how Laravel's MVC architecture works by connecting routes, controllers, and Blade views to create multiple web pages.

The website contains four main pages:

* Home
* About
* Services
* Contact

---

## 3. Objectives

The following objectives were accomplished in this project:

* Create a Laravel-based company profile website.
* Implement Laravel MVC architecture.
* Create routes for different website pages.
* Create and use a `CompanyController`.
* Create controller methods for Home, About, Services, and Contact pages.
* Create reusable Blade layouts and components.
* Use Blade directives such as `@extends`, `@section`, `@yield`, and `@include`.
* Implement a navigation bar for switching between pages.
* Create a reusable footer.
* Organize the project according to Laravel's folder structure.
* Test the website using the Laravel development server.
* Manage the project using Git and GitHub.

---

# 4. MVC Architecture

## What is MVC?

**MVC** stands for **Model-View-Controller**. It is a software architecture pattern that separates an application into three main parts:

* **Model** – Handles data and database-related operations.
* **View** – Handles the user interface displayed to the user.
* **Controller** – Handles requests and connects the routes with the appropriate views or models.

In this project, the main focus is on the **Controller** and **View** because the website mainly displays company information.

## Why Laravel Uses MVC

Laravel uses MVC because it provides a clean and organized way of developing web applications. Instead of putting all the code in one file, Laravel separates different responsibilities into different parts of the application.

For example, the routes receive requests, the `CompanyController` processes those requests, and Blade views display the resulting pages.

## Advantages of MVC

MVC provides several advantages:

1. **Separation of concerns** – Each part of the application has a specific responsibility.
2. **Easier maintenance** – Developers can modify one part without affecting the entire application.
3. **Code reusability** – Components and layouts can be reused.
4. **Better organization** – Files are placed in appropriate folders.
5. **Scalability** – The structure can be expanded for larger applications.
6. **Easier debugging** – Errors can be isolated to routes, controllers, models, or views.

## Laravel Request Flow

```text
              Browser
                 │
                 ▼
              Route
             web.php
                 │
                 ▼
        CompanyController
                 │
                 ▼
            Blade View
                 │
                 ▼
          HTML Response
                 │
                 ▼
              Browser
```

### Architecture Diagram

The project architecture diagram is saved in:

```text
documentation/architecture-diagram.png
```

---

# 5. Laravel Routing

## What is Routing?

**Routing** is the process of defining how an application responds to different URLs or HTTP requests.

In Laravel, routes are commonly defined inside:

```text
routes/web.php
```

For this project, routes were created for the following pages:

| URL         | Page     | Controller Method |
| ----------- | -------- | ----------------- |
| `/`         | Home     | `home()`          |
| `/about`    | About    | `about()`         |
| `/services` | Services | `services()`      |
| `/contact`  | Contact  | `contact()`       |

## Named Routes

Named routes allow routes to have a specific name that can be used when creating links.

Example:

```php
Route::get('/', [CompanyController::class, 'home'])->name('home');
Route::get('/about', [CompanyController::class, 'about'])->name('about');
Route::get('/services', [CompanyController::class, 'services'])->name('services');
Route::get('/contact', [CompanyController::class, 'contact'])->name('contact');
```

Instead of manually typing URLs in Blade files, named routes can be referenced using:

```blade
{{ route('home') }}
```

## GET Requests

The project uses the `GET` HTTP method because the pages are primarily used to retrieve and display information.

Example:

```php
Route::get('/about', [CompanyController::class, 'about']);
```

This means that when the user visits `/about` using a GET request, Laravel calls the `about()` method of `CompanyController`.

## Route Definitions

The route definitions are located in:

```text
routes/web.php
```

### Screenshot

Add your screenshot here:

```text
screenshots/route-definitions.png
```

---

# 6. Controllers

## Purpose of Controllers

Controllers are responsible for handling application requests and determining what should happen when a specific route is accessed.

In this project, the controller used is:

```text
app/Http/Controllers/CompanyController.php
```

The `CompanyController` handles the four main pages of the website.

## Benefits of Controllers

Controllers provide several benefits:

* Keep route files organized.
* Separate application logic from views.
* Make code easier to maintain.
* Allow multiple methods to handle different requests.
* Improve the overall structure of the application.

## Controller Methods

The `CompanyController` contains the following methods:

```php
public function home()
{
    return view('pages.home');
}

public function about()
{
    return view('pages.about');
}

public function services()
{
    return view('pages.services');
}

public function contact()
{
    return view('pages.contact');
}
```

Each method returns a specific Blade view.

For example:

```php
return view('pages.home');
```

loads:

```text
resources/views/pages/home.blade.php
```

### Screenshot

Add your controller screenshot here:

```text
screenshots/CompanyController.png
```

---

# 7. Blade Templating Engine

## What is Blade?

**Blade** is Laravel's templating engine. It allows developers to create dynamic and reusable HTML layouts.

Blade files use the:

```text
.blade.php
```

extension.

For this project, Blade was used to create reusable page layouts, navigation, footer, and individual pages.

## Blade Layouts

A Blade layout contains common elements that are shared by multiple pages.

For example, the layout can contain:

* HTML structure
* Navigation bar
* Main content area
* Footer

Instead of creating the same navigation and footer on every page, they can be placed in a reusable layout.

## Blade Components

Blade components allow reusable UI elements to be separated into their own files.

Examples include:

```text
resources/views/components/
```

Components can be reused throughout different pages of the application.

## `@extends`

The `@extends` directive allows a page to inherit a Blade layout.

Example:

```blade
@extends('layouts.app')
```

This means that the page uses the `app.blade.php` layout.

## `@section`

The `@section` directive defines the content that will be placed inside a section of the layout.

Example:

```blade
@section('content')

<h1>Welcome to Our Company</h1>

@endsection
```

## `@yield`

The `@yield` directive creates a placeholder inside the layout.

Example:

```blade
@yield('content')
```

The content from `@section('content')` will appear in this location.

## `@include`

The `@include` directive allows another Blade file to be inserted into a page.

Example:

```blade
@include('components.navbar')
```

This can be used for reusable elements such as navigation bars and footers.

## Sample Blade Structure

```blade
@extends('layouts.app')

@section('content')

    <h1>Welcome to Our Company</h1>

    <p>We provide quality services for our customers.</p>

@endsection
```

A layout may contain:

```blade
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>

<body>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
```

### Blade Screenshots

Add the screenshots to:

```text
screenshots/blade-layout.png
screenshots/navbar.png
screenshots/footer.png
```

---

# 8. Laravel Folder Structure

Laravel organizes the project into different folders, with each folder having a specific purpose.

## `app/`

The `app/` folder contains the main application code.

For this project, the controller is located at:

```text
app/Http/Controllers/CompanyController.php
```

## `routes/`

The `routes/` folder contains the application's route definitions.

The main route file used in this project is:

```text
routes/web.php
```

## `resources/`

The `resources/` folder contains resources such as Blade views, CSS, and JavaScript files.

The project's Blade pages are located inside:

```text
resources/views/
```

## `public/`

The `public/` folder contains publicly accessible files such as assets and the main entry point of the Laravel application.

## `bootstrap/`

The `bootstrap/` folder contains files needed to bootstrap the Laravel framework and application.

## `config/`

The `config/` folder contains configuration files for different parts of the Laravel application.

Examples include application, database, cache, mail, and session configuration.

### Laravel Folder Structure Screenshot

Add the screenshot here:

```text
screenshots/laravel-folder-structure.png
```

---

# 9. Screenshots

The following screenshots should be included in the `screenshots/` folder.

## Website Screenshots

### Home Page

```text
screenshots/home-page.png
```

### About Page

```text
screenshots/about-page.png
```

### Services Page

```text
screenshots/services-page.png
```

### Contact Page

```text
screenshots/contact-page.png
```

### Navigation Bar

```text
screenshots/navbar.png
```

### Footer

```text
screenshots/footer.png
```

## Development Screenshots

### Route Definitions

```text
screenshots/route-definitions.png
```

### CompanyController

```text
screenshots/CompanyController.png
```

### Blade Layout

```text
screenshots/blade-layout.png
```

### VS Code Project

```text
screenshots/vscode-project.png
```

### Laravel Folder Structure

```text
screenshots/laravel-folder-structure.png
```

### GitHub Repository

```text
screenshots/github-repository.png
```

### Browser Output

```text
screenshots/browser-output.png
```

---

# 10. Problems Encountered

## Problem 1: Route Not Found

One challenge encountered during development was when a page could not be accessed through its expected URL. This happened when the route was not properly defined in `web.php` or when the route definition did not match the expected URL.

## Problem 2: View Not Found

Another problem was encountering a view-related error. Laravel could not find a Blade file when the controller attempted to return a view.

For example:

```php
return view('pages.about');
```

requires the corresponding file:

```text
resources/views/pages/about.blade.php
```

If the filename or folder structure is incorrect, Laravel will return a view-not-found error.

## Problem 3: Controller Issues

Another challenge involved connecting the routes to `CompanyController`. Incorrect namespaces, imports, controller names, or method names can prevent Laravel from properly finding the controller.

## Problem 4: Blade Syntax Errors

Blade syntax can also cause errors when directives such as `@extends`, `@section`, `@yield`, and `@include` are not properly written or closed.

---

# 11. Solutions

## Solution to Route Issues

The routes in `routes/web.php` were checked to ensure that the URLs correctly pointed to the appropriate controller methods.

Example:

```php
Route::get('/about', [CompanyController::class, 'about']);
```

The route was then tested through the browser.

## Solution to View Issues

The Blade file names and folder locations were checked to make sure they matched the view names used by the controller.

For example:

```php
return view('pages.services');
```

requires:

```text
resources/views/pages/services.blade.php
```

## Solution to Controller Issues

The controller namespace and import statements were checked. The controller methods were also checked to ensure that their names matched the route definitions.

## Solution to Blade Issues

Blade directives were checked for correct syntax and proper opening and closing of sections.

For example:

```blade
@extends('layouts.app')

@section('content')

    <!-- Page content -->

@endsection
```

After correcting the syntax, the pages were tested again in the browser.

---

# 12. Reflection

Developing this Laravel Company Profile Website helped me understand how the MVC architecture works in an actual web development project. Before working with Laravel, I understood MVC mostly as a concept, but implementing routes, controllers, and Blade views helped me see how each part has a specific responsibility. MVC stands for Model, View, and Controller. The Model is responsible for handling data and database-related operations, the View handles what the user sees, and the Controller manages requests and connects the application logic to the appropriate views.

One of the most important things I learned is the importance of separation of concerns. Instead of putting all of the website's code in one file, Laravel allows developers to organize different responsibilities into different files and folders. For example, the routes are placed in `web.php`, the page-handling logic is placed inside `CompanyController`, and the user interface is created using Blade views. This makes the project easier to understand, modify, and debug.

I also learned how routes, controllers, and views work together. When a user visits a URL, Laravel first checks the route definition. The route determines which controller method should handle the request. The controller then processes the request and returns the appropriate Blade view. The Blade view generates the HTML that is sent back to the browser. In this project, visiting `/about`, for example, triggers the `about()` method in `CompanyController`, which then returns the `pages.about` view.

Another important lesson was the use of reusable Blade layouts and components. Using `@extends`, `@section`, `@yield`, and `@include` makes it possible to avoid repeating common elements such as the navigation bar and footer. This makes the website more organized and reduces duplicate code.

The MVC architecture can also be applied to larger enterprise systems. A large application may contain many controllers, models, views, services, and database operations, but the same principle of separating responsibilities can still be applied. Different developers can work on different parts of the system without constantly modifying the same files. This improves teamwork, maintainability, scalability, and debugging.

Overall, this project gave me practical experience with Laravel's structure and MVC architecture. I learned that organizing code properly is just as important as making the website function. The project also gave me a better foundation for developing more complex Laravel applications in the future.

---

# 13. References

Laravel. (n.d.). *Laravel documentation*. Retrieved August 14, 2026, from https://laravel.com/docs

PHP Documentation Group. (n.d.). *PHP manual*. Retrieved August 14, 2026, from https://www.php.net/docs.php

Mozilla Developer Network. (n.d.). *MDN Web Docs*. Retrieved August 14, 2026, from https://developer.mozilla.org/

Tailwind Labs. (n.d.). *Tailwind CSS documentation*. Retrieved August 14, 2026, from https://tailwindcss.com/docs

---

# Project Documentation Structure

The recommended project documentation structure is:

```text
project/
│
├── app/
├── bootstrap/
├── config/
├── public/
├── resources/
├── routes/
│
├── documentation/
│   └── architecture-diagram.png
│
├── screenshots/
│   ├── home-page.png
│   ├── about-page.png
│   ├── services-page.png
│   ├── contact-page.png
│   ├── navbar.png
│   ├── footer.png
│   ├── route-definitions.png
│   ├── CompanyController.png
│   ├── blade-layout.png
│   ├── vscode-project.png
│   ├── laravel-folder-structure.png
│   ├── github-repository.png
│   └── browser-output.png
│
└── README.md
```

## Architecture Diagram

The Laravel request flow used in this project is:

```text
┌──────────────────┐
│  Client/Browser  │
└────────┬─────────┘
         │ HTTP Request
         ▼
┌──────────────────┐
│  Route           │
│  routes/web.php  │
└────────┬─────────┘
         │
         ▼
┌────────────────────────┐
│   CompanyController     │
│   app/Http/Controllers/ │
└────────┬───────────────┘
         │
         ▼
┌────────────────────────┐
│      Blade View         │
│   resources/views/      │
└────────┬───────────────┘
         │
         ▼
┌──────────────────┐
│   HTML Response  │
└────────┬─────────┘
         │
         ▼
┌──────────────────┐
│  Client/Browser  │
└──────────────────┘
```

Save the completed diagram as:

```text
documentation/architecture-diagram.png
```

---

## Conclusion

This project demonstrates the basic implementation of a Laravel Company Profile Website using MVC architecture. It shows how routes, controllers, and Blade views work together to deliver different pages to users while maintaining an organized and reusable code structure.
