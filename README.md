# device_detect
Aplicacion web que detecta aplicación

Pasos para crear imagen

-mkdir public
- git clone -b devicedetect1.0 https://github.com/llagy/device_detect.git
-Docker build -t mriverar/app-devices:1.0 -f Dockerfile .

3.- sudo docker run -d  --name front-test  -p 2080:80 mriverar/app-devices:1.0
