#!/bin/bash

CONTAINER_NAME="csd440-php"

function show_help() {
  echo
  echo "PHP classwork docker build system on PHP 8.1 Apache. To rebuild the container with updates"
  echo "to source, just run ./$(basename $0)."
  echo
  echo "Usage: "
  echo "  $(basename $0) <OPTIONS>"
  echo
  echo "  --clean                 remove the deployment of ${CONTAINER_NAME} from docker and image cache"
}

function throw_exception(){
  local message="$1"
  echo "ERROR: ${message}"
  exit 1
}

function check_deps(){
  local os=$(uname)
  if [[ "$os" != "Darwin" ]]; then
    throw_exception "this is only tested on macos and not $(uname)"
  fi
  which docker > /dev/null || throw_exception "docker not installed"
}

function create_container() {
  docker build -t "${CONTAINER_NAME}:latest" .
  docker run \
      -d \
      --name $CONTAINER_NAME \
      --publish 8080:80 \
      "${CONTAINER_NAME}:latest"
}

function build(){
  # check if container exists and is running
  local up=$(docker inspect --format="{{ .State.Running }}" $CONTAINER_NAME)
  local image=$(docker image ls | grep $CONTAINER_NAME | awk '{print $3}')
  # if so rebuild and restart
  if [[ "$up" == "true" ]] || [ -n "$image" ]; then
    clean
  fi
  create_container
}

function clean() {
  local container=$(docker ps -a | grep $CONTAINER_NAME | awk '{print $1}')
  local image=$(docker image ls | grep $CONTAINER_NAME | awk '{print $3}')
  [ -n "$container" ] && docker stop "$container" && docker rm "$container"
  [ -n "$image" ] && docker image rm "$image"
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