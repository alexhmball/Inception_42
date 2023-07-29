# Inception - Exploring Docker and System Administration
<p align="center">
<img width="500" alt="expected configuration" src="https://github.com/alexhmball/Inception_42/assets/26721576/ae623d58-c366-40cd-8fb9-9013fcd65532">
</p>


The Inception project provided an exciting opportunity to delve into the world of system administration and gain hands-on experience with Docker. The main objective was to virtualize multiple Docker images and create a small infrastructure with specific rules, all within a personal virtual machine.

## Learning Goals
Throughout the Inception project, I focused on achieving the following learning goals, with a strong emphasis on Docker and system administration:

1. **Docker Virtualization:** I learned how to use Docker to virtualize multiple images, each representing a dedicated service within the infrastructure. The project was set up using Docker Compose for ease of management.

2. **Dockerfile Creation:** I wrote my own Dockerfiles for each service, adhering to best practices and guidelines. These Dockerfiles were used to build the custom Docker images required for the project. For performance optimization, I chose to use the penultimate stable version of Alpine as the base image, given its lightweight nature.

3. **Volume Management:** I created volumes for storing the WordPress database and website files. Understanding volume management was essential for data persistence and portability.

4. **Networking and Container Communication:** I established a dedicated docker-network to facilitate seamless communication between the containers. I ensured that the containers restarted automatically in case of a crash.

5. **Security and Best Practices:** I strictly followed security best practices for Docker container management. I avoided hacky patches and used recommended entrypoints and daemon practices.

6. **WordPress and MariaDB Configuration:** I successfully configured the WordPress container with php-fpm and the MariaDB container without nginx. I ensured that two users, one of them being the administrator, were present in the WordPress database.

7. **Domain Configuration:** I configured the domain name login.42.fr to point to the local IP address, making the application accessible via the custom domain name.

8. **Environment Variables:** I made effective use of environment variables in the Dockerfiles and configuration. I utilized a .env file to store environment variables securely.

## Reflection
The Inception project was a challenging yet rewarding experience in system administration and Docker virtualization. By selecting Alpine as the base image for the Docker containers, I optimized the performance and resource usage of the infrastructure. I successfully set up a small infrastructure with multiple services running in dedicated Docker containers. By writing custom Dockerfiles and avoiding ready-made images, I gained a deeper understanding of Docker and its underlying principles.

Implementing secure practices, such as using environment variables and avoiding publicly stored credentials, enhanced the overall robustness and security of the infrastructure. Additionally, I explored the best practices for writing Dockerfiles and handling container entrypoints, which added to my skills as a system administrator.

Through this project, I learned the significance of documentation reading, research, and the importance of adhering to best practices in a professional environment. Overall, the Inception project was a valuable experience that expanded my knowledge of Docker and system administration.

## References

[1] <https://devopswithdocker.com/>

[2] <https://medium.com/@audretschjames/understanding-docker-as-if-it-were-a-gameboy-96c96392efbf>

[3] <https://stackoverflow.com/questions/49950326/how-to-create-docker-volume-device-host-path>

[4] <https://vsupalov.com/docker-arg-env-variable-guide/#arg-and-env-availability>

[5] <https://www.techtarget.com/whatis/definition/daemon>

[6] <https://docs.docker.com/reference/>

