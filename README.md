# device_detect
Aplicacion web que detecta aplicación

Pasos para crear imagen

- crear carpeta: mkdir public
- Clonar la rama de git :git clone -b devicedetect1.0 https://github.com/llagy/device_detect.git

-Crear la imagen: sudo docker build -t mriverar/app-devices:1.0 -f Dockerfile .

 Crear contenedor: sudo docker run -d  --name front-test  -p 2080:80 mriverar/app-devices:1.0
