<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Movie-journal
This web application enables users to manage their movie watchlist efficiently. Key features include:
- Displaying the movie poster
- Linking to the movie trailer on YouTube.
- Discovering movies from other users

## Requirements
Ensure the following are installed before setting up the application:
- PHP
- SQL
- Laravel
- Node
- Npm

## Installation
1. Clone the repository:

   ```bash
   git clone https://github.com/DankoKr/movie-journal.git
   ```

2. Fill in the .env file:

   Make sure you provide database details for:
   - DB_CONNECTION=mysql (or any other db you want to use)
   - DB_HOST=
   - DB_PORT=
   - DB_DATABASE=
   - DB_USERNAME=
   - DB_PASSWORD=

3. Navigate to the project directory:

   ```bash
   cd movie-journal
   ```

4. Run the db migrations:

   ```bash
   php artisan migrate 
   ```

5. Start the laravel app:

   ```bash
   php artisan serve
   ```

6. Start Vite:

   ```bash
   npm install
   ```

   ```bash
   npm run dev
   ```