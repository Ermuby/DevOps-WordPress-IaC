# 🚀 Despliegue Automatizado de WordPress con Vagrant (IaC)

Este repositorio contiene una infraestructura como código (IaC) totalmente automatizada para desplegar un entorno completo de **WordPress** utilizando **Vagrant**, **VirtualBox**, **Ubuntu** y scripts de aprovisionamiento en **Bash**.

El objetivo del proyecto es mostrar habilidades en:

- Automatización y aprovisionamiento de servidores  
- Configuración de Apache, MySQL y PHP  
- Gestión del ciclo de vida de máquinas virtuales  
- Infraestructura como Código con Vagrant  
- Resolución de problemas en entornos Linux  

## 🛠️ Tecnologías Utilizadas

- **Vagrant** — Automatización del entorno mediante IaC  
- **VirtualBox** — Hipervisor para máquinas virtuales  
- **Ubuntu 18.04 LTS** — Sistema operativo del servidor  
- **Bash Scripting** — Automatización del aprovisionamiento  
- **Apache 2** — Servidor web  
- **MySQL** — Servidor de base de datos  
- **PHP** — Requisito para WordPress  


## 📦 Requisitos Previos

Antes de ejecutar el proyecto, instala:

- **Vagrant**  
- **VirtualBox**  
## Instrucciones de Instalación y Uso


Sigue estos pasos para levantar el entorno completo:

1.  **Clonar el repositorio:** Abre tu terminal (Git Bash, PowerShell) y clona este proyecto:
    ```bash
    git clone github.com
    ```

2.  **Navegar a la carpeta del proyecto:**
    ```bash
    cd DevOps-WordPress-IaC
    ```

3.  **Iniciar la máquina virtual y ejecutar el aprovisionamiento:** Este comando descargará Ubuntu, instalará Apache, MySQL y WordPress automáticamente. La primera vez puede tardar varios minutos.
    ```bash
    vagrant up
    ```

4.  **Acceder al sitio web:** Una vez que el comando `vagrant up` termine sin errores, abre tu navegador web y visita la siguiente dirección IP:
    ```
    http://192.168.33.10
    ```
    Deberías ver la página de bienvenida para la instalación de WordPress.

## Estructura del Proyecto

├── Vagrantfile               # Definición principal de la infraestructura
├── scripts/
│   └── install_wordpress.sh  # Script de aprovisionamiento automatizado
├── wordpress.conf            # Configuración VirtualHost de Apache
└── wp-config.php             # Configuración automatizada de WordPress


## 🧩 Problemas Resueltos y Aprendizajes Clave

Este proyecto permitió aplicar conocimientos fundamentales de DevOps/SysAdmin:

✔️ Corrección de errores de paquetes y comandos

Se solucionaron fallos causados por nombres incorrectos de paquetes o comandos tipográficos.

✔️ Unificación de rutas en Apache

Se alineó el DocumentRoot con la ubicación real de WordPress para evitar errores 404.

✔️ Gestión de permisos en Linux

Se resolvieron problemas derivados de imágenes seguras de Ubuntu con restricciones de sudo.

✔️ Buenas prácticas con Vagrant

Se utilizaron comandos como:

vagrant reload --provision
vagrant rsync


Para aplicar cambios sin recrear la máquina.

✔️ Automatización completa de la instalación de WordPress

Incluyendo:

Creación de la base de datos

Descarga y configuración del CMS

Inserción automática de claves de seguridad

Mediante sed, curl, y plantillas de configuración.


## 👨‍💻 Autor

*   **Nombre:** Rubén [Tu Apellido]
*   **Contacto:** [Tu Email o Perfil de LinkedIn]