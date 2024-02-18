# Asset UKK-Perpustakaan

## Install
Clone Repo
```bash
  git clone https://github.com/N-old/assets-04-ukk.git
```

Move Directory to
```bash
  cd assets-04-ukk
```

Install Depedency
```bash
  composer install / update
  npm install
```

Salin file .env.example
```bash
  cp .env.example .env
```

Create Database and connect to .env
```bash
  DB_DATABASE=db-ukk-4-ukk
```

Running Server
```bash
  php artisan key:generate
  php artisan serve
  # start di terminal lain
  npm run dev
```
