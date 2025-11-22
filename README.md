# Portafolio Personal y desplegado (PHP + Docker) [https://apeb1vgmilweb.infinityfreeapp.com/](https://apeb1vgmilweb.infinityfreeapp.com/)
Entorno de desarrollo y despliegue para un portafolio personal simple, construido con Docker, que incluye un stack Apache, PHP y MySQL.

## 🚀 Características

-   **Dockerizado**: Todo el entorno está contenido en contenedores Docker, garantizando consistencia y facilidad de despliegue.
-   **Stack Clásico**: Utiliza Apache para servir una aplicación PHP 8.0 y MySQL 5.7 como base de datos.
-   **Formulario de Contacto**: Incluye una página de contacto funcional que guarda los mensajes directamente en la base de datos.
-   **Base de Datos Inicializada**: El script `init.sql` crea automáticamente la tabla `mensajes` necesaria para el formulario.
-   **phpMyAdmin**: Incluye phpMyAdmin para una gestión gráfica y sencilla de la base de datos.

## 🛠️ Stack Tecnológico

-   **Backend**: PHP 8.0
-   **Servidor Web**: Apache
-   **Base de Datos**: MySQL 5.7
-   **Herramienta de Gestión de BD**: phpMyAdmin
-   **Orquestación**: Docker & Docker Compose

## 📋 Prerrequisitos

Asegúrate de tener instalados los siguientes programas en tu sistema:

-   [Docker](https://docs.docker.com/get-docker/)
-   [Docker Compose](https://docs.docker.com/compose/install/)

## ⚙️ Instalación e Inicio

Sigue estos pasos para poner en marcha el entorno de desarrollo local:

1.  **Clona el repositorio:**
    ```bash
    git clone https://github.com/VGMil/PersonalPortfolio.git
    cd PersonalPortfolio
    ```

2.  **Levanta los contenedores:**
    Desde la raíz del proyecto, ejecuta el siguiente comando para construir e iniciar todos los servicios en segundo plano:
    ```bash
    docker-compose up -d
    ```

3.  **Accede a la aplicación:**
    -   **Sitio Web**: Abre tu navegador y ve a [http://localhost:8080](http://localhost:8080)
    -   **phpMyAdmin**: Accede al gestor de la base de datos en [http://localhost:8081](http://localhost:8081)
        -   **Servidor**: `db`
        -   **Usuario**: `user` (el definido en `docker-compose.yml`)
        -   **Contraseña**: `password` (la definida en `docker-compose.yml`)

## 📁 Estructura del Proyecto
```
PersonalPortfolio/
├── src/
│   ├── lib/              # Lógica de backend (conexión, guardar)
│   │   ├── conexion.php
│   │   └── guardar.php
│   ├── assets/           # Recursos estáticos (imágenes, etc.)
│   │   └── me.jpeg
│   ├── confirmar.php     # Página de confirmación de envío
│   ├── contacto.php      # Página y formulario de contacto
│   ├── index.php         # Página de inicio
│   └── style.css         # Estilos globales
├── db/
│   └── init.sql          # Script de inicialización de la BD
├── docker-compose.yml    # Orquestación de servicios Docker
└── README.md             # Este archivo
```

## 🛠️ Comandos Útiles de Docker

-   **Ver los logs de los contenedores en tiempo real:**
    ```bash
    docker-compose logs -f
    ```
-   **Detener los servicios:**
    ```bash
    docker-compose stop
    ```
-   **Detener y eliminar los contenedores, redes y volúmenes (¡cuidado, borra los datos de la BD!):**
    ```bash
    docker-compose down -v
    ```