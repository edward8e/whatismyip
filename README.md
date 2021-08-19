# whatismyip
Nginx webserver to know the public ip of the container. Useful to know if the container is backed correctly behind VPN.

## Docker Build multiple images
docker buildx build --push --platform linux/arm/v7,linux/arm64/v8,linux/amd64 \ --tag edward8e/webpage:buildx-latest .
