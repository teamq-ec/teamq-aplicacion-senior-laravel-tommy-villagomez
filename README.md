# Movie Api


## Requisitos

- PHP >= 7.4
- Composer
- MySQL

## Instalación

1. Clona el repositorio:

   ```bash
   git clone <URL del repositorio>
2. Instala las dependencias de Composer: `composer install`
3. Crea una bd en tu gestor mysql, de nombre `api`
4. Configura tu base de datos en el archivo `.env`.
5. Ejecuta los comandos para limpiar caché `php artisan cache:clear` y `php artisan config:clear`
6. Ejecuta las migraciones para crear las tablas en la base de datos: `php artisan migrate`
7. Ejecuta el seeder para poblar la base de datos con datos de ejemplo: `php artisan db:seed`

## Uso

1. php artisan serve
2. crea un usuario desde postman:  
endpoint:
{HOST_URL}/api/v1/users
body(json,raw)
ej: {
    "email": "admin@gmail.com",
    "password": "12345678",
    "name": "admin"
}
2. realiza el login:  
{HOST_URL}/api/login
body(json,raw)
ej: {
    "email": "admin@gmail.com",
    "password": "12345678",
    "name": "admin"
}
3. para usar el api de /api/v1/movies o /api/v1/movies/id/images, coloca el token en el header authorization bearer
ej: "bearer 3|HqwTtlJ5tj7nOKx8b5y1WgQPo03ftxGknspnWXdx"
4. testea el api :D

## Documentación API
se encuentra en la ruta public\docs\collection.json
adicional, las imagenes las encontrarás en \storage\app\public\images
