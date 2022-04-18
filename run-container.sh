#!/bin/bash

docker pull ghcr.io/kaitoryouga/hire/hire:latest
docker rm -f hire-admin
docker run -d -p 3001:80 --name=hire-admin ghcr.io/kaitoryouga/hire/hire:latest
