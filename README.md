# Haddis Jobs

A job board web application for browsing, posting, and managing job listings. Built with Laravel, it lets employers and recruiters share open roles while job seekers search and explore opportunities in one place.

## Features

- **Browse listings** — View all job postings on the homepage with pagination
- **Search & filter** — Find jobs by keyword (title, description, tags) or filter by tag
- **Job details** — View full listing information including company, location, contact email, website, and description
- **User accounts** — Register, log in, and log out with session-based authentication
- **Post jobs** — Authenticated users can create new job listings with an optional company logo
- **Manage listings** — View, edit, and delete your own postings from a dedicated dashboard
- **Ownership protection** — Only the user who created a listing can update or delete it

## Tech Stack

- **Backend:** Laravel 11, PHP 8.2
- **Frontend:** Blade templates, Tailwind CSS, Alpine.js
- **Database:** MySQL (production) or SQLite (local development)
- **Auth:** Laravel session authentication

## Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- Node.js & npm (for frontend assets)
- MySQL (or SQLite for local dev)

### Local Setup

1. Clone the repository and install dependencies:

```bash
composer install
npm install
```

2. Copy the environment file and generate an app key:

```bash
cp .env.example .env
php artisan key:generate
```

3. Configure your database in `.env`. For SQLite (default in `.env.example`):

```bash
touch database/database.sqlite
```

4. Run migrations and seed sample data:

```bash
php artisan migrate --seed
```

5. Link storage for logo uploads:

```bash
php artisan storage:link
```

6. Start the development server:

```bash
php artisan serve
```

Visit `http://localhost:8000` in your browser.

### Docker Setup

You can also run the app with Docker and MySQL:

```bash
docker compose up --build
```

The app will be available at `http://localhost:8000`. Migrations and seeding run automatically on container startup.

### Railway Deployment

Railway injects environment variables directly — there is no `.env` file in the container. Set these variables in your Railway project **before** deploying:

| Variable | Example | Required |
|----------|---------|----------|
| `APP_KEY` | `base64:...` | Yes |
| `APP_ENV` | `production` | Yes |
| `APP_DEBUG` | `false` | Yes |
| `APP_URL` | `https://your-app.up.railway.app` | Yes |
| `DB_CONNECTION` | `mysql` | Yes |
| `DB_HOST` | *(from Railway MySQL plugin)* | Yes |
| `DB_PORT` | `3306` | Yes |
| `DB_DATABASE` | `railway` | Yes |
| `DB_USERNAME` | `root` | Yes |
| `DB_PASSWORD` | *(from Railway MySQL plugin)* | Yes |
| `SESSION_DRIVER` | `database` | Yes |
| `CACHE_STORE` | `database` | Yes |
| `QUEUE_CONNECTION` | `database` | Yes |
| `RUN_SEED` | `true` | No (seed once on first deploy only) |

Generate an `APP_KEY` locally and paste it into Railway:

```bash
php artisan key:generate --show
```

Redeploy after adding the variables. The startup script runs migrations automatically; set `RUN_SEED=true` only on the first deploy if you want sample data.

## Default Seeded Account

After running the seeder, a sample user and 12 Ethiopian job listings are created:

- **Email:** `test@example.com`
- **Password:** `password`

## Project Structure

| Path | Description |
|------|-------------|
| `app/Http/Controllers/ListingController.php` | Job listing CRUD and search |
| `app/Http/Controllers/UserController.php` | Registration, login, logout |
| `app/Models/Listing.php` | Listing model with search/tag filters |
| `resources/views/listings/` | Listing pages (index, show, create, edit, manage) |
| `resources/views/users/` | Login and registration forms |
| `database/migrations/` | Users, listings, cache, and jobs tables |

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
