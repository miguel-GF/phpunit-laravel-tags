# Pruebas unitarias en laravel con PHPUnit

Pequeño proyecto con laravel y php unit para hacer pruebas unitarias básicas de http, store y delete, se usa tailwind para darle encanto visual =).


Tech Stack
Laravel, PHPUnit, TailwindCSS

## Run Locally

Clonar proyecto

```bash
  git clone https://github.com/miguel-GF/phpunit-laravel-tags.git
```

Ir al directorio del proyecto

```bash
  cd my-project
```

Instala dependencias

```bash
  composer install
```

Crea tu archivo .env

```bash
  Copy .env.example like .env
```

Configura tu base de datos

```bash
DB_CONNECTION=mysql
DB_CONNECTION=mysql
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tags
DB_USERNAME=root
DB_PASSWORD=
```


Ejecuta la migración 

```bash
  php artisan migrate
```

Por ultimo levanta el servidor para verlo en tu navegador

```bash
  php artisan serve
```

Abre tu navegador con http://localhost:8000

## Running Tests

Aplica el siguiente comando para todas las pruebas

```bash
  php artisan test
```

Aplica el siguiente comando para aplicar uno en especifico

```bash
  php artisan test --filter testName
  ejemplo:
  php artisan test --filter testEmpty
```

