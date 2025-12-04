🚀 Despliegue Automatizado de WordPress con Vagrant (IaC)

Este repositorio contiene una infraestructura como código (IaC) totalmente automatizada para desplegar un entorno completo de WordPress utilizando Vagrant, VirtualBox, Ubuntu y scripts de aprovisionamiento en Bash.

El objetivo del proyecto es mostrar habilidades en:

Automatización y aprovisionamiento de servidores

Configuración de Apache, MySQL y PHP

Gestión del ciclo de vida de máquinas virtuales

Infraestructura como Código con Vagrant

Resolución de problemas en entornos Linux

🛠️ Tecnologías Utilizadas

Vagrant — Automatización del entorno mediante IaC

VirtualBox — Hipervisor para máquinas virtuales

Ubuntu 18.04 LTS — Sistema operativo del servidor

Bash Scripting — Automatización del aprovisionamiento

Apache 2 — Servidor web

MySQL — Servidor de base de datos

PHP — Requisito para WordPress

📦 Requisitos Previos

Antes de ejecutar el proyecto, instala:

Vagrant

VirtualBox

🚀 Uso del Proyecto

Clona el repositorio:

git clone <repository-url>
cd DevOps-WordPress-IaC


Inicia la máquina virtual y ejecuta el aprovisionamiento:

vagrant up


Cuando finalice el proceso, accede a WordPress desde tu navegador:

http://192.168.33.10

📁 Estructura del Proyecto
├── Vagrantfile               # Definición principal de la infraestructura
├── scripts/
│   └── install_wordpress.sh  # Script de aprovisionamiento automatizado
│
├── wordpress.conf            # Configuración VirtualHost de Apache
└── wp-config.php             # Configuración automatizada de WordPress

🧩 Problemas Resueltos y Aprendizajes Clave

Este proyecto permitió aplicar conocimientos fundamentales de DevOps/SysAdmin:

✔️ Corrección de errores de paquetes y comandos

Se solucionaron fallos causados por paquetes inexistentes y errores tipográficos.

✔️ Unificación de rutas en Apache

Se alineó el DocumentRoot con la ubicación real de WordPress para evitar errores 404.

✔️ Gestión de permisos en Linux

Se resolvieron problemas derivados de imágenes seguras de Ubuntu con restricciones de sudo.

✔️ Buenas prácticas con Vagrant

Uso de comandos clave para reprovisionar y sincronizar cambios:

vagrant reload --provision
vagrant rsync

✔️ Automatización completa de WordPress

Incluyendo:

Creación automática de la base de datos

Descarga y despliegue del CMS

Configuración del archivo wp-config.php

Inserción automática de claves de seguridad (mediante sed y curl)

🧭 Nota

Este proyecto forma parte de un roadmap práctico de DevOps, compuesto por varios entornos reproducibles orientados a demostrar progresión técnica en automatización e infraestructura.

👨‍💻 Autor

Rubén Ribes
🔗 LinkedIn: https://www.linkedin.com/in/ruben-ribes/