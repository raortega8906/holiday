<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# Sobre “Laravel-Holiday”

Holidays es un sistema de petición de vacaciones, que le ayuda al usuario a hacer petición de vacaciones, ser aprobadas o negadas,    etc. El sistema es de código abierto y se puede ver y probar en https://github.com/raortega8906/holiday/

---

## Demo

https://github.com/raortega8906/holiday

---

## Funcionalidades

- El empleado podrá escoger dos días (inicio y fin) y agregar la razón o motivo de vacaciones.
- Una vez cree la solicitud, debe llegar un correo a su jefe indicándole que debe entrar a la aplicación y aprobar o negar dicha      solicitud.
- El jefe podrá entrar a la aplicación y dado su rol podrá ver todas las solicitudes que estén a su cargo.
- Cuando el jefe decida aprobar o negar dicha solicitud se debe enviar un correo al empleado indicándole la resolución de su          solicitud.
- El empleado podrá ver en su tablero o dashboard un calendario con las vacaciones y el historial de las mismas.
- El administrador podrá dar permisos, registrar o eliminar nuevos usuarios y es el único que tendrá acceso a todas las              funcionalidades del sistema.

---

## Empezar

http://holidaysweb.herokuapp.com/

---

## Retroalimentación

No dude en enviar comentarios y problemas encontrados vía email.

---


# Instalación

## Como hacerlo

- Insertar proyecto en carpeta vacía con el comando: git clone https://github.com/raortega8906/holiday/
- Crear una base de datos vacía.
- Copie el env.example a .env
- Configurar base de datos en config/database.php o en su archivo .env.
- Ejecute los siguientes comandos:
    - composer install
    - php artisan migrate --seed
    - php artisan key:generate
    - npm install
    - npm run dev
- Inicie sesión con las credenciales:
	- correo: admin@admin.com
	- pass: password
- Como admin podrá crear nuevos usuarios desde el sistema o registrar nuevos usuarios desde la pagina de registro, donde todos los      nuevos usuarios entraran con permiso de “empleado”.
- Hecho.

---

## Importante

Para lo anterior es necesario que tenga PHP, MySQL, etc, instalado localmente en su pc, para otras opciones, consulte las            recomendaciones de Laravel o si prefiere usar Docker.

---

## Próximos pasos

Ahora puede comenzar a usar Holiday libremente.
