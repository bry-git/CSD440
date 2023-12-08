#!/bin/bash

FRONTEND_CONTAINER_NAME="mod9-xamp"
DATABASE_CONTAINER_NAME="mod9-database"
COMPOSE_FILE="mod9-docker-compose.yml"

function throw_exception(){
  local message="$1"
  echo "ERROR: ${message}"
  exit 1
}

function check_deps(){
  which docker > /dev/null || throw_exception "docker not installed"
}

function create_containers() {
  docker-compose -f $COMPOSE_FILE build || throw_exception "failed to build project"
  docker-compose -f $COMPOSE_FILE up -d || throw_exception "failed to start project"
  rm -rf src
}

function build(){
  # check if container exists and is running
  for container_name in "$FRONTEND_CONTAINER_NAME" "$DATABASE_CONTAINER_NAME"; do
      local up=$(docker inspect --format="{{ .State.Running }}" $container_name)
      local image=$(docker image ls | grep $container_name | awk '{print $3}')

      # if so rebuild and restart
      if [[ "$up" == "true" ]] || [ -n "$image" ]; then
        clean
      fi
  done

  create_containers
}

function clean_container() {
  local container_name="$1"
  local container=$(docker ps -a | grep "$container_name" | awk '{print $1}')
  local image=$(docker image ls | grep "$container_name"  | awk '{print $3}')
  [ -n "$container" ] && docker stop "$container" && docker rm "$container"
  [ -n "$image" ] && docker image rm "$image"
}

function clean() {
  clean_container $FRONTEND_CONTAINER_NAME
  clean_container $DATABASE_CONTAINER_NAME
  [ -d src/ ] && rm -rf src
}

function main() {
  check_deps

  if [ "$#" -eq 0 ]; then
    build
  else
    while true; do
      case "$1" in
        --clean      ) clean ; exit ;;
        --help       ) show_help ; exit ;;
        -- ) shift; break ;;
      * ) break ;;
      esac
    done
  fi
}
main "$@"