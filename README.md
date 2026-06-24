# Trabajo_final_metodologia
### Dificultad: 👹 Medio

El sistema de notas está diseñado para ayudar al usuario a organizar y gestionar información de manera sencilla y eficiente. A continuación, se describen las principales funcionalidades que ofrece la aplicación:


El usuario puede crear nuevas notas para registrar información importante, ideas, recordatorios o apuntes que desee conservar.


El usuario tiene la posibilidad de editar notas existentes, lo que le permite actualizar su contenido cuando la información cambia o necesita ser corregida.


El sistema permite eliminar notas, ayudando al usuario a mantener su espacio de trabajo ordenado y libre de información innecesaria.


Cada nota puede contar con etiquetas o categorías, facilitando la organización y el agrupamiento de notas por temas específicos.


El usuario puede visualizar un listado de todas sus notas, donde se muestra el título y la fecha de creación o última modificación, brindando una vista general del contenido almacenado.


El sistema ofrece una búsqueda por palabras clave en el título de las notas, permitiendo encontrar rápidamente una nota específica sin necesidad de revisar toda la lista.

#### Funcionalidades adicionales 

## Autenticación de usuarios

Inicio de sesión con usuario y contraseña. 
Cada usuario ve solo sus propias notas.

## Notas archivadas

Posibilidad de archivar notas en lugar de eliminarlas definitivamente.
Ayuda a conservar información sin que aparezca en la vista principal.

## Ordenamiento de notas

Ordenar por:
            Fecha de creación, Última modificación,  Título (A–Z / Z–A)

## Búsqueda avanzada

Búsqueda por: 
            Título, Contenido de la nota, Etiquetas o categorías

## Notas destacadas

Marcar una nota como “importante” o “favorita”.
Sección especial para notas destacadas.

## Fechas y recordatorios

Asignar una fecha límite o recordatorio a una nota.
Útil para tareas o pendientes.

## Aspectos técnicos

## Persistencia de datos

Uso de una base de datos Mariadb.

## Tablas sugeridas:

Usuarios
Notas
Categorías o etiquetas
se puede ampliar mas 

## Modelo CRUD

Create (crear nota)
Read (ver notas)
Update (editar nota)
Delete (eliminar nota)

## Validaciones

El título no puede estar vacío.
Longitud máxima del contenido.
Confirmación antes de eliminar una nota.

##### Requerimientos del sistema
 
## Requerimientos funcionales

El sistema permitirá crear, editar, eliminar y visualizar notas.
El sistema permitirá buscar notas por palabras clave en el título.
El sistema permitirá asignar etiquetas a las notas.

## Requerimientos no funcionales

El sistema debe ser fácil de usar.
El tiempo de respuesta debe ser menor a X segundos.
La información debe almacenarse de forma segura.

## cierre del trabajo

En conclusión, el sistema de notas propuesto brinda una solución sencilla y eficiente para la gestión de información personal, incorporando funcionalidades básicas y escalables, lo cual permite futuras mejoras según las necesidades del usuario.

# Instalación de proyecto siendep

Descargar un Proyecto Laravel desde GitHub y Ejecutarlo en XAMPP (PHP 8.5 + MariaDB).

Este tutorial explica desde cero cómo descargar un proyecto Laravel desde GitHub, configurarlo y ejecutarlo en un servidor XAMPP utilizando PHP 8.5 y MariaDB.

## 1. Requisitos Previos

Antes de comenzar debes tener instalado:

PHP 8.5

Composer

Git

XAMPP (Apache + MariaDB)

Laravel compatible con PHP 8.5

## 2. Iniciar XAMPP

Abrir el Panel de Control de XAMPP.

Iniciar:

Apache

MySQL (MariaDB)

Deben quedar en color verde.

## 3. Clonar el Proyecto desde GitHub

Abrir una terminal.

Ir a la carpeta donde guardarás el proyecto:

cd C:\xampp\htdocs.

Clonar el repositorio:

git clone https://github.com/usuario/proyecto.git

Entrar al proyecto:

cd siendep

## 4. Instalar Dependencias de Laravel

Dentro del proyecto ejecutar:

composer install

Este comando descargará:

Laravel

Dependencias

Librerías

Paquetes necesarios.

## 5. Crear el Archivo .env

Laravel normalmente incluye:

.env.example

Crear una copia:

Windows:

copy .env.example .env

## 6. Generar la Clave de la Aplicación

Ejecutar:

php artisan key:generate

Resultado:

Application key set successfully.

Laravel agregará automáticamente:

APP_KEY=xxxxxxxxxxxxxxxxxxxx

## 7. Crear la Base de Datos en MariaDB

Abrir:

http://localhost/phpmyadmin

Seleccionar:

Nueva

Crear una base de datos.

Ejemplo:

siendep_db

Collation recomendada:

utf8mb4_unicode_ci

Guardar.

## 8. Configurar el Archivo .env

Abrir:

.env

Buscar:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

Modificar:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistema_turnos
DB_USERNAME=root
DB_PASSWORD=

En XAMPP normalmente el usuario es:

root

Y no tiene contraseña.

## 9. Limpiar Configuración de Laravel

Ejecutar:

php artisan config:clear

php artisan cache:clear

php artisan route:clear

php artisan view:clear

## 10. Ejecutar Migraciones

Crear las tablas:

php artisan migrate

Si aparece:

Would you like to create it? (yes/no)

Responder:

yes

Resultado:

Migrated successfully.

## 11. Ejecutar Seeders (Opcional)

Si el proyecto posee datos de prueba:

php artisan db:seed

O

php artisan migrate:fresh --seed

## 12. Verificar Permisos

En Windows normalmente no es necesario.

## 13. Compilar Frontend (Si Usa Vite)

Instalar dependencias:

npm install

Compilar:

npm run build

O para desarrollo:

npm run dev

14. Ejecutar el Proyecto

Método recomendado para pruebas:

php artisan serve

Laravel mostrará:

INFO Server running on:

http://127.0.0.1:8000

Abrir:

http://127.0.0.1:8000

15. Ejecutar Directamente con Apache de XAMPP

Mover el proyecto a:

C:\xampp\htdocs\proyecto

Abrir:

http://localhost/proyecto/public

16. Reiniciar Apache

Desde XAMPP:

Stop Apache

Start Apache

Con estos pasos podrás descargar el proyecto siendep desde GitHub, configurarlo con PHP 8.5, conectarlo a MariaDB de XAMPP y ejecutarlo correctamente en tu entorno local.

