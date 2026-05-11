# QCAS — Quantum Care Appointment System

A modern, full-stack **healthcare appointment scheduling platform** that simplifies booking between patients and healthcare providers. QCAS lets patients discover providers, schedule appointments, reschedule or cancel them, and pay online — all from any device, whether a desktop computer or a mobile phone.

Built with **Laravel** on the backend and a responsive Bootstrap + Vue frontend, QCAS supports SMS notifications via **Twilio**, secure online payments via **Stripe**, and calendar synchronization via the **Google API**.

---

## Table of Contents

- [Overview](#overview)
- [Key Features](#key-features)
- [Tech Stack](#tech-stack)
- [System Screenshots](#system-screenshots)
  - [Homepage](#homepage)
  - [About Us](#about-us-section)
  - [Features](#features-section)
  - [Services](#services-section)
  - [Service Providers](#service-provider-section)
  - [Book Appointment](#book-appointment-section)
  - [Contact](#contact-section)
  - [Login](#login-form)
  - [Register](#register-form)
- [Project Structure](#project-structure)
- [Installation](#installation)
- [Environment Variables](#environment-variables)
- [Running the App](#running-the-app)
- [License](#license)

---

## Overview

QCAS (Quantum Care Appointment System) was designed to remove the friction of traditional appointment booking in healthcare. Patients no longer need to call clinics or wait in line — they can browse available providers, view services, and instantly reserve a slot online.

The system serves two main user groups:

- **Patients** — register, browse healthcare providers and services, and book/cancel/reschedule appointments
- **Healthcare Providers** — manage their schedules, view upcoming appointments, and communicate with patients

Notifications are delivered via **email and SMS (Twilio)**, payments are processed securely through **Stripe**, and provider availability syncs with **Google Calendar** for accurate, real-time scheduling.

---

## Key Features

### For Patients
- **User registration & login** with secure authentication
- **Browse healthcare providers** by specialization
- **Service catalog** with pricing and descriptions
- **Real-time slot availability** via interactive calendar
- **One-click booking** with instant confirmation
- **Reschedule or cancel** appointments anytime
- **Online payment** through Stripe
- **Email & SMS notifications** for reminders and confirmations

### For Providers
- **Provider dashboard** to manage schedules and services
- **Calendar view** of upcoming appointments
- **Google Calendar sync** for two-way scheduling
- **Patient appointment history**
- **Earnings overview** from completed appointments

### Platform
- **Mobile-responsive design** — works on phones, tablets, and desktops
- **Role-based access control** (patient / provider / admin)
- **XSS protection** via `masterro/laravel-xss-filter`
- **CORS-ready** for API integrations
- **API authentication** via Laravel Sanctum
- **Server-side validation** for all inputs

---

## Tech Stack

**Backend**
- **PHP** 7.2.5+ / 8.x
- **Laravel** 7.x / 8.x
- **Laravel Sanctum** — API token authentication
- **LaravelCollective/HTML** — form & HTML helpers
- **Stripe PHP SDK** — payment processing
- **Twilio SDK** — SMS notifications
- **Google API Client** — Google Calendar integration
- **Guzzle HTTP** — external API requests
- **Ziggy** — Laravel routes in JavaScript

**Frontend**
- **Blade templating** (Laravel views)
- **Vue.js** 2.x
- **Bootstrap** 4
- **jQuery** 3.x
- **Axios** — HTTP client
- **Laravel Mix / Webpack** — asset compilation
- **AOS, Owl Carousel, FullCalendar, Flatpickr, Toastr, Venobox** — UI enhancements
- **Remixicon / Boxicons / Glyphicons / Icofont** — icon libraries

**Tooling & QA**
- **PHPUnit** — automated testing
- **Mockery** — mocking framework
- **FakerPHP** — test data generation
- **Laravel Sail** — Docker development environment
- **Ignition** — error pages with stack traces

---

## System Screenshots

### Homepage

The QCAS landing page introduces the platform with a clean hero section and clear calls-to-action — patients can immediately start booking or learn more about available services.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/QCAS%20-%20HOMEPAGE.png" alt="QCAS Homepage" width="100%"/>
</p>

---

### About Us Section

Explains the mission, vision, and value proposition of QCAS — building trust before the user commits to registering.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/ABOUT%20US%20SECTION.png" alt="About Us Section" width="100%"/>
</p>

---

### Features Section

A breakdown of what makes QCAS stand out — online booking, secure payments, SMS reminders, and cross-device support.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/FEATURES%20SECTION.png" alt="Features Section" width="100%"/>
</p>

---

### Services Section

Lists the healthcare services offered through QCAS — patients can browse what's available before choosing a provider.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/SERVICE%20SECTION.png" alt="Services Section" width="100%"/>
</p>

---

### Service Provider Section

Displays the directory of healthcare providers on the platform with their specializations and availability.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/SERVICE%20PROVIDER%20SECTION.png" alt="Service Provider Section" width="100%"/>
</p>

---

### Book Appointment Section

Interactive booking flow — pick a provider, choose a service, select a date and time slot, and confirm.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/BOOK%20APPOINTMENT%20SECTION.png" alt="Book Appointment Section" width="100%"/>
</p>

---

### Contact Section

Contact form and reachability info for patients who need help or have inquiries.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/CONTACT%20SECTION.png" alt="Contact Section" width="100%"/>
</p>

---

### Login Form

Secure authentication for returning patients and providers — supports email + password and remembers session state.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/LOGIN%20FORM.png" alt="Login Form" width="100%"/>
</p>

---

### Register Form

Onboarding form for new patients — collects personal details, contact info, and creates an account.

<p align="center">
  <img src="QCAS%20SYSTEM%20SCREENSHOTS/REGISTER%20FORM.png" alt="Register Form" width="100%"/>
</p>

---

## Project Structure

```
QCAS-Quantum-Care-Appointment-System/
├── app.php                       # Application bootstrap
├── artisan                       # Laravel CLI
├── server.php                    # Built-in PHP server entry point
├── composer.json                 # PHP dependencies
├── package.json                  # Frontend dependencies
├── webpack.mix.js                # Laravel Mix asset pipeline
├── phpunit.xml                   # PHPUnit configuration
├── Console/                      # Artisan commands
├── Entities/                     # Eloquent models
├── Exceptions/                   # Exception handlers
├── Http/                         # Controllers, middleware, requests
├── Observers/                    # Eloquent model observers
├── Policies/                     # Authorization policies
├── Providers/                    # Service providers
├── Repositories/                 # Data-access layer
├── Rules/                        # Custom validation rules
├── Traits/                       # Reusable PHP traits
├── config/                       # Application config files
├── database/                     # Migrations, seeders, factories
├── resources/                    # Blade views, raw JS/CSS, lang files
├── routes/                       # Web & API routes
├── tests/                        # PHPUnit test suite
├── views/                        # Compiled Blade views
├── sessions/                     # File-based session storage
├── js/, fonts/                   # Static assets
├── *.css                         # Page-specific stylesheets
└── QCAS SYSTEM SCREENSHOTS/      # System screenshots used in this README
```

---

## Installation

### Prerequisites
- **PHP** 7.2.5 or higher (8.x recommended)
- **Composer** 2.x
- **Node.js** 14+ and **npm** (or Yarn)
- **MySQL** 5.7+ / MariaDB 10.3+
- **Stripe account** (for payment processing)
- **Twilio account** (for SMS notifications)
- **Google Cloud project** with Calendar API enabled (optional)

### Setup

```bash
# 1. Clone the repository
git clone https://github.com/JeraldSpares/QCAS-Quantum-Care-Appointment-System.git
cd QCAS-Quantum-Care-Appointment-System

# 2. Install PHP dependencies
composer install

# 3. Install frontend dependencies
npm install

# 4. Copy the environment file and generate an app key
cp .env.example .env
php artisan key:generate

# 5. Configure your .env file (see below)

# 6. Run database migrations and seeders
php artisan migrate --seed

# 7. Compile frontend assets
npm run dev

# 8. Start the development server
php artisan serve
```

The application will be available at **http://localhost:8000**.

---

## Environment Variables

Configure these keys in your `.env` file:

```env
# Application
APP_NAME=QCAS
APP_ENV=local
APP_KEY=base64:generated-by-artisan
APP_DEBUG=true
APP_URL=http://localhost:8000

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=qcas
DB_USERNAME=root
DB_PASSWORD=

# Mail (for appointment confirmations & resets)
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-mail-user
MAIL_PASSWORD=your-mail-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@qcas.test
MAIL_FROM_NAME="${APP_NAME}"

# Stripe (payments)
STRIPE_KEY=<your-stripe-publishable-key>
STRIPE_SECRET=<your-stripe-secret-key>

# Twilio (SMS notifications)
TWILIO_SID=<your-twilio-account-sid>
TWILIO_AUTH_TOKEN=<your-twilio-auth-token>
TWILIO_FROM=<your-twilio-phone-number>

# Google Calendar (optional)
GOOGLE_CLIENT_ID=your-google-client-id
GOOGLE_CLIENT_SECRET=your-google-client-secret
GOOGLE_REDIRECT_URI=http://localhost:8000/google/callback
```

---

## Running the App

| Command | Description |
|---------|-------------|
| `php artisan serve` | Start the Laravel development server |
| `php artisan migrate` | Run database migrations |
| `php artisan migrate --seed` | Migrate and seed the database |
| `php artisan db:seed` | Seed the database |
| `php artisan tinker` | Open an interactive REPL |
| `php artisan route:list` | List all registered routes |
| `npm run dev` | Compile assets for development |
| `npm run watch` | Watch and recompile on changes |
| `npm run prod` | Build assets for production |
| `vendor/bin/phpunit` | Run the PHPUnit test suite |

---

## License

This project is open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.

---

### Acknowledgements

- Built with the **[Laravel](https://laravel.com)** framework
- Payment infrastructure by **[Stripe](https://stripe.com)**
- SMS messaging by **[Twilio](https://www.twilio.com)**
- Calendar integration by **[Google Calendar API](https://developers.google.com/calendar)**
