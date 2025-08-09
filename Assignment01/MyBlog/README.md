# Assignment 1: Blade Template Mastering

This project is a conversion of a static HTML page into a fully dynamic and maintainable Laravel Blade template. The goal is to master **Blade layouts**, **components**, **directives**, and **form handling** in Laravel.

---

## 📋 Tasks Overview

### 1. Setup & Layout

-   Created a new Laravel project.
-   Made a **base Blade layout** with shared header, navigation, and footer.
-   Used Blade directives:
    -   `@extends` – to extend the base layout.
    -   `@section` – to define page-specific content.
    -   `@yield` – to specify content placeholders in the layout.

### 2. Components

-   Broke **header**, **navigation**, and **footer** into reusable Blade components.
-   Used:
    -   `@include` for partial views.
    -   `@include` for reusable UI elements.

### 3. Page Conversion

-   Created a **page view** that extends the base layout.
-   Moved the **registration form** and related content into this view.

### 4. Styling & Assets

-   Moved custom **CSS** and **JS** into Laravel’s `public/` folder.
-   Linked assets using:
    ```blade
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>
    ```
