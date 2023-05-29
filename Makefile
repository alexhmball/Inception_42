all: up

up:
	docker compose  -f ./srcs/docker-compose.yml up --detach  --build

down:
	docker compose -f ./srcs/docker-compose.yml down

prune: down
	docker image prune -a -f
	docker volume prune -f
	docker system prune -a -f

fclean: down prune

re: fclean all