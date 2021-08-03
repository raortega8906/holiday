<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Holiday

Holiday es un proyecto de prueba de acceso a prácticas laborales. Básicamente es un sistema sencillo de petición de vacaciones, que le ayuda al usuario a hacer petición de vacaciones, ser aprobadas o negadas, etc.

## Objetivos

* [x] El empleado podrá escoger dos días (inicio y fin) y agregar la razón o motivo de vacaciones.
* [x] Una vez cree la solicitud, debe llegar un correo a su jefe indicándole que debe entrar a la aplicación y aprobar o negar dicha solicitud.
* [x] El jefe podrá entrar a la aplicación y dado su rol podrá ver todas las solicitudes que estén a su cargo.
* [x] Cuando el jefe decida aprobar o negar dicha solicitud se debe enviar un correo al empleado indicándole la resolución de su solicitud.
* [x] El empleado podrá ver en su tablero o dashboard un calendario con las vacaciones y el historial de las mismas.
* [x] El administrador podrá dar permisos, registrar o eliminar nuevos usuarios y es el único que tendrá acceso a todas las funcionalidades del sistema.
* [x] Para lo anterior deberás crear una base de datos que contenga el requerimiento mencionado (usuarios, roles, solicitudes, etc).
* [x] Desplegar en un servidor web (Heroku, solución gratuita web).

## Notas añadidas

- No evaluaremos diseño pero sí funcionalidad y técnica. Podrás usar AdminLTE como base para facilitar el trabajo de diseño y estilos.
- Por último necesitaremos la documentación del código y ver la app en el servidor creado.

## Recursos para la creación del servidor web

En el siguiente video encontrarás como instalar Laravel en Heroku: https://www.youtube.com/watch?v=GE2Kmy8WL3g

## Como instalar

Para ejecutar este proyecto es necesario que tenga instalado PHP, MySQL, Apache o Nginx. Para mas información, consulte las recomendaciones de [Laravel](https://laravel.com/docs/8.x).

### Pasos:

1. Clonar el repositorio : `git clone https://github.com/raortega8906/holiday.git`
2. `$ cd holiday`
3. `$ composer install`
4. `$ cp .env.example .env`
5. `$ php artisan key:generate`
6. Crear BD en **MySQL** o **SQLite**
7. Credenciales de BD en el archivo `.env`
8. `$ php artisan migrate --seed`
9. `$ php artisan serve`
10. Iniciar sesión con:
    - email : `admin@admin.com`
    - password : `password`

## Demo desplegado

https://holidaysweb.herokuapp.com/

## Licencia 

El proyecto es de código abierto.

## Próximos pasos

Ahora puede comenzar a usar Holiday libremente.
