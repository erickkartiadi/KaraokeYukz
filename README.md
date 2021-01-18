<p align="center"><a href="https://github.com/erickkartiadi/KaraokeYukz" target="_blank"><img src="screenshots/logo.png" width="400"></a></p><br/>

# KaraokeYukz

KaraokeYukz adalah sebuah website yang digunakan untuk memuat lirik lagu yang dibuat menggunakan Laravel

## Features

-   Add, update and delete a song
-   View lyric
-   Search song

## Prerequisites

Before you continue, ensure you have met the following requirements:

-   You have database called `KaraokeYukz`
-   Copy the `.env.example` file, and rename it to `.env`
-   After copy the .env file, you need to adjust the .env file with your local environment

## Installation

Install required dependencies with composer.

```bash
composer install
```

Generate key for your app.

```
php artisan key:generate
```

Run `migrations` and `seeders` command.

```bash
php artisan migrate:fresh --seed
```

## Screenshot

![](screenshots/home.png)
![](screenshots/lyric.png)

## Contact

If you want to contact me you can reach me at erickcartiady@gmail.com
