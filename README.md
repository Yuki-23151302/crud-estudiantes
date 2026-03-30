# 🎓 Proyecto: CRUD de Estudiantes

Este proyecto consiste en el desarrollo de un **sistema CRUD (Create, Read, Update, Delete)** utilizando **Laravel** y **Tailwind CSS**.
El objetivo es aplicar los conocimientos sobre **arquitectura MVC**, manejo de base de datos, validaciones y creación de interfaces funcionales para gestionar una lista de estudiantes.

---

## 📖 Descripción general

### 🧩 Vista previa del proyecto

Agrega aquí una **captura de pantalla** de tu sistema funcionando (tabla de estudiantes o formulario).

![Registrar Estudiante](image.png)
![Lista Estudiante](image-1.png)
![Tabla Estudiantes](image-2.png)
---

### 🔗 Enlaces del proyecto

* **Repositorio en GitHub:** [Agrega aquí tu enlace]
* **Sitio desplegado (opcional):** [Si lo despliegas, agrégalo aquí]

---

## 🧠 Proceso de desarrollo

### 🛠️ Tecnologías utilizadas

Las herramientas y tecnologías utilizadas en este proyecto fueron:

* Laravel 12
* PHP 8.2
* MySQL (XAMPP)
* Tailwind CSS
* Blade (motor de plantillas)
* HTML5

---

## ⚙️ Funcionamiento del sistema

El sistema permite gestionar estudiantes mediante las siguientes operaciones:

### 🟢 Crear (Create)

Se pueden registrar nuevos estudiantes mediante un formulario que solicita:

* Nombre
* Correo electrónico
* Carrera
* Semestre

Los datos son validados antes de guardarse en la base de datos.

---

### 📋 Leer (Read)

Se muestra una tabla con todos los estudiantes registrados, donde se visualiza:

* Número (numeración visual)
* Nombre
* Correo
* Carrera
* Semestre

---

### ✏️ Actualizar (Update)

Permite editar la información de un estudiante:

* Se cargan los datos actuales en un formulario
* Se pueden modificar los campos
* Los cambios se guardan en la base de datos

---

### ❌ Eliminar (Delete)

Permite eliminar estudiantes desde la tabla:

* Se elimina el registro seleccionado
* La tabla se actualiza automáticamente

---

## ⚠️ Nota importante

En la tabla de estudiantes se muestra una **numeración visual** para mejorar la presentación de los datos en la interfaz.

Esta numeración se genera dinámicamente en la vista utilizando herramientas de Blade, por lo que:

* ✔ Se muestra de forma consecutiva (1, 2, 3, 4…)
* ✔ Se actualiza automáticamente al eliminar registros
* ❌ **No corresponde al ID real de la base de datos**

Es importante aclarar que:

> El ID original de cada estudiante en la base de datos **no se modifica ni se reordena** al eliminar registros, ya que forma parte de la clave primaria y garantiza la integridad de la información.

Esta decisión sigue buenas prácticas de desarrollo, separando la lógica de presentación (interfaz) de la estructura real de los datos.


## 🧱 Project Structure

La estructura principal del proyecto sigue el patrón MVC de Laravel:

```bash
crud-estudiantes/
│
├── app/
│   ├── Models/
│   │   ├── Estudiante.php
│   │   └── Carrera.php
│   │
│   └── Http/
│       └── Controllers/
│           └── EstudianteController.php
│
├── database/
│   └── migrations/
│       ├── create_carreras_table.php
│       └── create_estudiantes_table.php
│
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       │
│       └── estudiantes/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
│
├── routes/
│   └── web.php
│
└── .env
```

---

## 🧠 Lo que aprendí

Durante el desarrollo de este proyecto reforcé mis conocimientos sobre el uso del framework Laravel y su arquitectura MVC. Aprendí a conectar modelos con la base de datos, crear controladores para manejar la lógica del sistema y desarrollar vistas dinámicas con Blade.

También practiqué la implementación de relaciones entre tablas, en este caso entre estudiantes y carreras, lo cual me permitió comprender mejor cómo funcionan las llaves foráneas en bases de datos.

Además, trabajé con Tailwind CSS para diseñar una interfaz moderna y consistente, utilizando una paleta de colores basada en tonos rojos, negros y grises.

---

## 🚀 Áreas de mejora

Algunos aspectos que podrían mejorarse en futuros proyectos son:

* Implementar paginación en la tabla de estudiantes
* Agregar un buscador para filtrar registros
* Mejorar la validación con mensajes personalizados
* Implementar autenticación de usuarios
* Mejorar la experiencia del usuario con animaciones

---

## 📚 Recursos útiles

Durante el desarrollo del proyecto se consultaron diversas documentaciones y recursos:

* [Documentación oficial de Laravel](https://laravel.com/docs)
* [Tailwind CSS](https://tailwindcss.com/docs)
* [MDN Web Docs](https://developer.mozilla.org/es/)

---

## 👩‍💻 Autor

* Nombre completo: Elvia Yuridia Flores Dueñas
* Carrera: TICS
* Grupo: --
* Correo institucional: [23151302@aguascalientes.tecnm.mx](mailto:23151302@aguascalientes.tecnm.mx)

---

## ✨ Reflexión final

Este proyecto me permitió comprender de manera más clara el funcionamiento completo de un sistema CRUD utilizando Laravel. A diferencia de proyectos más simples de maquetación, aquí pude trabajar tanto en la lógica del backend como en la interfaz del usuario.

Una de las partes más interesantes fue la conexión entre el controlador, los modelos y las vistas, ya que pude ver cómo fluye la información dentro de la aplicación. También disfruté trabajar con Tailwind CSS para darle un diseño más atractivo al sistema.

En general, este proyecto fortaleció mis habilidades en desarrollo web y me dio una mejor comprensión del funcionamiento de aplicaciones dinámicas conectadas a una base de datos.
