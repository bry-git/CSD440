FROM mysql:latest
ENV MYSQL_ROOT_PASSWORD=root_password
ENV MYSQL_DATABASE=baseball_01
ENV MYSQL_USER=mstudent1
ENV MYSQL_PASSWORD=pass
COPY init.sql /docker-entrypoint-initdb.d/
EXPOSE 3306