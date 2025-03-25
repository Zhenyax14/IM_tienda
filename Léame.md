## Para iniciar la app:
* IMPORTANTE: si no os funciona avisadme, porque a mí se me ha roto en PhpStorm y tampoco funciona, pero en VisualStudio Code funciona bién, como antes.
* Run `composer install`
* Vincular con DB en /configs/app.php
* Desde la carpeta IM_trimestre2 ejecuta `php -S 127.0.0.1:8000 -t public` para iniciar el servidor y que coga la carpeta public como la principal.

## Notas:
* Faltaría sacar una gran parte de código desde los controladores a los servicios correspondientes, solo lo hice con 3 de momento: 2 index y un show
* Falta añadir imagenes de la forma que requiere mi BD: relacion M:N entre Propiedades e Imagenes;
* Faltaría implementar transacciones en un futuro para Usuarios > Agentes y Propiedades > Casas
* Faltaría sacar header y footer en un unico template para no repetir el código, pero desconozco de momento como se hace