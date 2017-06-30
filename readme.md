## Como instalar
- Descargar el git del proyecto
- Crear la base de datos Colegio (Create database colegio);

## Como crear al base de datos

Dentro de la carpeta ejecutar los siguientes comando

- php artisan migrate
- para la creación de roles: php artisan db:seed --class=RolsTableSeeder
- para la creación de usuario generico: php artisan db:seed --class=UsersTableSeeder