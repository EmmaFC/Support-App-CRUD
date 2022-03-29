# Support App - CRUD with PHP


## Contexto del proyecto
Desarrollar un MVP básico para que los empleados puedan realizar sus consultas y esas queden registradas en una base de datos MySQL. El software útilizará el patrón MVC (Model, View, Controler) y será una aplicación orientada a objetos.


## Requisitos mínmos:

#### Vistas: 
- Página 1: Lista de las solicitudes
- Página 2: Formulario para solicitar el soporte
- Página 3: Edición de una solicitud​

#### Contenido de la solicitud:
- Nombre del solicitante
- Fecha de la solicitud
- Tema de la consulta
- Descripción de la consulta
​
#### Listado de las solicitudes:
- Deben aparacer por orden de creación
​
#### Nueva cita:
- Todos los campos del formulario son obligatorios
- Botón para resetear los campos
- Botón para cancelar la creación y volver a la vista de la lista
- Botón para validar la solicitud

#### Edición de una solicitud ya registrada:
- Todos los campos del formulario son obligatorios
- Los campos deberán contener la información actual
- Botón de cancelar la edición
- Botón para enviar los cambios realizados

#### La aplicación deberá ser totalmente responsive.
​

## Tecnologías:

- Frontend: HTML, CSS, SCSS - Opcional: Framework de CSS.
- Backend: PHP.
- Bases de datos: MySQL
- No se pueden usar otras librerias o frameworks que los espicificados.
​

## Modalidades pedagógicas
Desarrollo en equipo Scrum. 1 Sprint de 2 semanas


## Criterios de rendimiento
- La aplicación será de tipo CRUD (create, read, update and delete)
- Se utilizará el patrón MVC
- Se hará el deploy en un servidor gratuito (Ej: Heroku)
- La aplicación debe estar acompañada de sus diagramas UML
- Tests unitarios con PhpUnit.


## Modalidades de evaluación
Demo del producto. Presentación oral de cada miembro del equipo así como presentación con diapositivas del flujo de trabajo. Code review.


## Entregables
Un link a un repositorio de github. Link a url del proyecto en producción. Presentación en diapositivas + Link. Demo y code review.


## Installation

>> composer install

### Run test

>> vendor/bin/phpunit
or
>> composer testphp

## By
Emma Fernández Corte

