# 📝 Ejemplo de blog con Laravel

Este proyecto es un ejemplo funcional de un blog hecho con **Laravel 12**, usando **Bootstrap** para el diseño. Incluye un panel de administración completo (CRUD de posts) y una interfaz pública de blog. Ideal para aprender Laravel desde cero o mostrar habilidades en tu portafolio.

> Cristian Hernan Gaitano Ornia @2024

---

## 🚀 ¿Qué incluye?

- CRUD completo de publicaciones (Crear, Editar, Ver, Borrar)
- Panel administrativo protegido
- Frontend público responsive con Bootstrap
- Comentarios detallados en el código para facilitar el aprendizaje
- Listo para subir a **Render.com** o correr en **Laragon (Windows)**

---

## 🧑‍💻 Tecnologías utilizadas

- PHP 8.3
- Laravel 12
- Bootstrap 5
- Blade (sistema de plantillas)
- SQLite/MySQL

---

## 📦 Instalación local (Laragon – Windows)

1. Cloná o descargá el proyecto y descomprimilo dentro de `C:\laragon\www`
2. Abrí la terminal en esa carpeta y ejecutá:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

3. Accedé a `http://localhost:8000` para ver el blog público.
4. Accedé a `http://localhost:8000/admin/posts` para la parte administrativa.

---

## ☁️ Subirlo a Render.com (Hosting gratuito)

1. Subí el código a un repositorio en GitHub
2. Entrá a [https://render.com](https://render.com) y creá una cuenta
3. Creá un nuevo servicio **Web Service** y conectá tu repositorio
4. Indicá los siguientes datos:

- Build Command: `composer install && php artisan migrate`
- Start Command: `php artisan serve --host=0.0.0.0 --port=10000`
- Runtime: PHP 8.3

5. Listo. El blog estará disponible en un dominio gratuito de Render.

---

## 📂 Estructura del proyecto

```
├── app/
├── resources/
│   ├── views/
│       ├── blog/         → vistas públicas
│       ├── posts/        → CRUD administrativo
│       └── layout.blade.php
├── routes/
│   └── web.php
├── database/
├── public/
└── .env.example
```


## 👀 Vista previa

Próximamente imágenes del frontend y backend.

---

## ✅ Recomendado para:

- Practicantes de Laravel
- Portafolios de programadores
- Estudiantes de desarrollo web

---

¡Gracias por visitar este proyecto! Si te resulta útil, no olvides dejar una ⭐ en GitHub.
