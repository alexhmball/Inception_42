IMAGES = $(shell docker images -q)

CONTAINERS = $(shell docker ps -a -q)

all: up

up:
	docker compose  -f ./srcs/docker-compose.yml up --detach  --build

down:
	docker compose -f ./srcs/docker-compose.yml down

prune:
	docker image prune -a
	docker image rm -f $(IMAGES)

fclean: down prune

re: fclean all