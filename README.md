# device_detect
Aplicacion web que detecta aplicación

Pasos para crear imagen

-mkdir public
- gitcclone
-Docker build -t mriverar/app-devices:1.0 -f Dockerfile .

3.- sudo docker run -d  --name front-test  -p 2080:80 mriverar/app-devices:1.0
