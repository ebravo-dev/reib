# REIB - Revista Científica

<div align="center">

![Laravel](https://img.shields.io/badge/Laravel-7.x-FF2D20?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-7.2+-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?logo=mysql&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-UI-7952B3?logo=bootstrap&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-yellow.svg)

**Plataforma web para revista científica: publicación, consulta y gestión de artículos científicos.**

</div>

---

## 📋 Descripción

REIB es una aplicación web desarrollada con **Laravel 7** diseñada para el funcionamiento de una **revista científica**. La plataforma permite la publicación, organización por ediciones, búsqueda y consulta de artículos científicos en español e inglés. Incluye un panel administrativo para gestionar ediciones, noticias, artículos y mensajes de contacto.

El sistema está estructurado para facilitar la difusión del conocimiento académico, ofreciendo acceso público a los artículos publicados y herramientas administrativas para la gestión editorial.

---

## 🚀 Características Principales

| Módulo | Descripción |
|--------|-------------|
| **📰 Gestión de Artículos** | Creación, almacenamiento y visualización de artículos científicos con metadatos completos: título, autores, institución, volumen, número, categoría, palabras clave (ES/EN), resúmenes (ES/EN) y enlaces a PDF. |
| **📅 Organización por Ediciones** | Los artículos se agrupan por ediciones mensuales/anuales, permitiendo navegar por archivos históricos de la revista de forma estructurada. |
| **🔍 Búsqueda Avanzada** | Motor de búsqueda para localizar artículos por título, autor, palabras clave, categoría o edición. |
| **📢 Noticias y Avisos** | Sistema de publicación de noticias editoriales, convocatorias y anuncios relevantes para la comunidad científica. |
| **📤 Carga de Artículos** | Formulario administrativo para el registro de nuevos artículos con validación de campos obligatorios. |
| **📧 Formulario de Contacto** | Sistema de mensajería para que lectores y autores se comuniquen con la editorial mediante correo electrónico. |
| **🌐 Soporte Bilingüe** | Artículos con resúmenes y palabras clave tanto en español como en inglés. |
| **📊 Panel Administrativo** | Acceso restringido para editores y administradores con funciones de gestión de contenido. |

---

## 🛠️ Stack Tecnológico

| Tecnología | Uso |
|------------|-----|
| **Laravel 7** | Framework PHP para la arquitectura MVC, routing, ORM y autenticación |
| **PHP 7.2+** | Lenguaje de programación del backend |
| **MySQL** | Base de datos relacional para artículos, ediciones, usuarios y noticias |
| **Eloquent ORM** | Mapeo objeto-relacional para consultas y relaciones entre modelos |
| **Blade** | Motor de plantillas de Laravel para las vistas |
| **Bootstrap** | Framework CSS para el diseño responsive de la interfaz |
| **Laravel UI** | Scaffolding de autenticación y paneles de administración |
| **Laravel CORS** | Configuración de políticas de acceso cruzado |
| **Mail (PHP native)** | Envío de correos electrónicos desde el formulario de contacto |
| **Laravel Mix** | Compilación de assets CSS/JS con Webpack |

---

## 📁 Estructura del Proyecto

```
reib/
├── app/
│   ├── Article.php                    # Modelo: Artículo científico
│   ├── Edition.php                    # Modelo: Edición de la revista
│   ├── Notice.php                     # Modelo: Noticia / Aviso editorial
│   ├── Product.php                    # Modelo: Producto editorial (opcional)
│   └── Http/Controllers/
│       ├── HomeController.php         # Controlador principal (inicio, contacto)
│       ├── ArticleController.php      # CRUD de artículos
│       ├── EditionController.php      # Gestión de ediciones
│       ├── NoticeController.php       # Gestión de noticias
│       ├── ShowarticleController.php  # Visualización de artículos por edición
│       ├── SearchBarController.php    # Motor de búsqueda
│       ├── Uploadarticle.php          # Formulario de carga de artículos
│       ├── MessageController.php      # Gestión de mensajes
│       └── UserController.php         # Gestión de usuarios
├── database/
│   └── migrations/
│       ├── 2020_08_03_112202_create_articles_table.php
│       ├── 2020_09_20_054736_create_editions_table.php
│       └── 2020_10_29_222747_create_notices_table.php
├── resources/
│   └── views/                         # Vistas Blade de la aplicación
│       ├── home/
│       ├── articles/
│       ├── editions/
│       └── notices/
├── routes/
│   └── web.php                        # Definición de rutas de la aplicación
├── public/                            # Assets públicos (CSS, JS, imágenes)
├── composer.json                      # Dependencias PHP
├── package.json                       # Dependencias Node.js
└── .env.example                       # Variables de entorno de ejemplo
```

---

## 📦 Instalación y Despliegue

### Requisitos Previos

- PHP `>= 7.2.5`
- Composer
- MySQL / MariaDB
- Node.js y npm (para compilar assets)
- Servidor web (Apache / Nginx)

### Pasos

```bash
# 1. Clonar el repositorio
git clone https://github.com/ebravo-dev/reib.git
cd reib

# 2. Instalar dependencias PHP
composer install

# 3. Instalar dependencias Node.js y compilar assets
npm install && npm run dev

# 4. Configurar variables de entorno
cp .env.example .env
php artisan key:generate

# 5. Configurar la base de datos en .env
# DB_DATABASE=reib
# DB_USERNAME=root
# DB_PASSWORD=tu_password

# 6. Ejecutar migraciones
php artisan migrate

# 7. Iniciar servidor de desarrollo
php artisan serve
```

---

## 🗺️ Rutas Principales

| Ruta | Método | Descripción |
|------|--------|-------------|
| `/home` | GET | Página de inicio con ediciones, noticias y artículos recientes |
| `/articles` | GET, POST | Listado y creación de artículos |
| `/editions` | GET, POST | Listado y creación de ediciones |
| `/editions/{year}/{month}` | GET | Ver artículos de una edición específica |
| `/notices` | GET | Listado de noticias editoriales |
| `/upload-article` | GET, POST | Formulario de carga de nuevos artículos |
| `/search` | GET, POST | Búsqueda de artículos |
| `/new-notice` | GET, POST | Creación de noticias |

---

## 🗺️ Roadmap

- [ ] Sistema de revisión por pares (peer review) con asignación de evaluadores
- [ ] DOI integration para artículos publicados
- [ ] Exportación de citas en formatos APA, MLA, Chicago, etc.
- [ ] Sistema de suscripción por correo electrónico para nuevas ediciones
- [ ] Panel de estadísticas: descargas, visitas, citas por artículo
- [ ] Soporte para archivos suplementarios (datasets, código, videos)
- [ ] ORCID integration para autores
- [ ] SEO avanzado con meta tags dinámicos por artículo
- [ ] RSS feed para nuevas publicaciones
- [ ] Sistema de comentarios moderados en artículos
- [ ] Multitenancy para gestionar múltiples revistas

---

## 🤝 Contribución

¡Las contribuciones son bienvenidas! Si deseas mejorar esta plataforma editorial:

1. Haz un **Fork** del repositorio
2. Crea una rama (`git checkout -b feature/nueva-funcionalidad`)
3. Haz commit de tus cambios (`git commit -m 'Agrega nueva funcionalidad'`)
4. Sube la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un **Pull Request**

---

## 📄 Licencia

Este proyecto está bajo la licencia **MIT**. Consulta el archivo [`LICENSE`](LICENSE) para más detalles.

---

## 👥 Contacto

**Eder J. Bravo** - [@ebravo-dev](https://github.com/ebravo-dev) - [ederjgb94@gmail.com](mailto:ederjgb94@gmail.com)

---

<div align="center">

**⭐ Si esta plataforma te es útil para la difusión del conocimiento científico, ¡dale una estrella! ⭐**

</div>
