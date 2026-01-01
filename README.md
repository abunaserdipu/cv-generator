# LinkedIn CV Generator (Laravel Blade)

## 📌 Project Overview

This project is a **Laravel Blade–based CV Generator** where a user can submit a **LinkedIn profile URL**, and the system generates a **styled CV template** using data fetched from a third-party LinkedIn data provider.

Due to LinkedIn’s data access restrictions, the application is designed using a **service-based architecture** that supports:

-   Mock data (for local/demo use)
-   Third-party LinkedIn data APIs (Proxycurl)

The UI is built with **Blade + CSS** for a clean and professional look.

---

## 🚀 Features

-   LinkedIn profile URL input form
-   Server-side validation
-   Service-layer LinkedIn data fetching
-   Styled CV template view
-   Clean separation of concerns
-   API-ready architecture
-   Graceful error handling

---

## 🛠️ Tech Stack

-   **Laravel 12**
-   **PHP 8.2**
-   **Blade Templating**
-   **CSS**
-   **Proxycurl API (Third-party LinkedIn data provider)**

---

## 📂 Project Structure (Relevant Files)

```text
app/
 └── Services/
     └── LinkedinService.php   # Handles LinkedIn data fetching

app/
 └── Http/
     └── Controllers/
         └── LinkedinCvController.php

resources/
 └── views/
     ├── layouts/
     │   └── app.blade.php
     └── linkedin/
         ├── form.blade.php    # LinkedIn URL input
         └── cv.blade.php      # CV template

routes/
 └── web.php
```
