# Usa la imagen base de Nginx
FROM nginx:alpine

# Copia el archivo index.html y otros archivos del repositorio en el directorio de Nginx
COPY . /usr/share/nginx/html

# Expone el puerto 80 para que Nginx esté accesible desde fuera del contenedor
EXPOSE 80

# Inicia Nginx cuando el contenedor se ejecute
CMD ["nginx", "-g", "daemon off;"]
