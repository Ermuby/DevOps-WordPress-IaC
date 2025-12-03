# Proyecto 1: Despliegue Automatizado de WordPress (IaC)

## Descripción del Proyecto

Este repositorio contiene la infraestructura como código (IaC) para desplegar automáticamente un servidor de WordPress completamente funcional utilizando Vagrant y VirtualBox.

El objetivo de este proyecto es demostrar habilidades en automatización, *scripting* Bash, configuración de servidores (Apache, MySQL, PHP) y depuración de entornos de desarrollo.

## Tecnologías Utilizadas

*   **Vagrant:** Para la gestión y automatización de máquinas virtuales.
*   **VirtualBox:** Como hipervisor para ejecutar la VM.
*   **Ubuntu 18.04 LTS (Bionic Beaver):** El sistema operativo del servidor.
*   **Bash Scripting:** Para automatizar la instalación y configuración del software.
*   **Apache 2:** El servidor web.
*   **MySQL:** El servidor de base de datos.
*   **PHP:** El lenguaje de programación de WordPress.

## Requisitos Previos

Para ejecutar este proyecto en tu máquina local, necesitas tener instalados los siguientes programas:

*   [**Vagrant**](www.vagrantup.com)
*   [**VirtualBox**](www.virtualbox.org)

## Instrucciones de Instalación y Uso

Sigue estos pasos para levantar el entorno completo:

1.  **Clonar el repositorio:** Abre tu terminal (Git Bash, PowerShell) y clona este proyecto:
    ```bash
    git clone <repository-url>
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

*   `Vagrantfile`: El archivo principal de configuración de Vagrant. Define la VM y llama al script de instalación.
*   `scripts/install_wordpress.sh`: El script Bash que contiene todos los comandos para instalar y configurar el software.
*   `wordpress.conf`: El archivo de configuración (*Virtual Host*) para Apache.
*   `wp-config.php`: Archivo base de configuración de WordPress, usado para automatizar la configuración de la base de datos y la seguridad.

## Solución de Problemas y Aprendizajes Clave
Durante el desarrollo de este proyecto, se aplicaron habilidades esenciales de DevOps para asegurar un despliegue robusto. Los aprendizajes clave incluyen:

*   **Errores tipográficos:** Fallos en nombres de paquetes (`libapache2-mod-ph`) o comandos (`sudos ystemctl`) que causaban fallos en cadena.
*   **Inconsistencia de rutas:** El `DocumentRoot` de Apache no coincidía con la ubicación de descarga de WordPress. Se unificaron las rutas (`/srv/www/wordpress`) para asegurar la consistencia.
*   **Gestión de Permisos en Linux:** Se aprendió a identificar y resolver problemas de permisos (`sudo` fallido) en imágenes de Ubuntu seguras, seleccionando la imagen de Vagrant adecuada para el entorno de desarrollo.
*   **Uso Eficiente de Herramientas Vagrant:** Se utilizaron `vagrant reload --provision` y `vagrant rsync` para forzar la sincronización de archivos de configuración y la re-ejecución del aprovisionamiento, asegurando que los cambios se aplicaran correctamente.
*   **Automatización de Configuración:** Implementación de comandos `sed` y `curl | tee -a` para automatizar la configuración de la base de datos y la generación de claves de seguridad de WordPress, eliminando la intervención manual.

## Autor

*   **Nombre:** Rubén Ribes
*   **Contacto:** https://www.linkedin.com/in/ruben-ribes/