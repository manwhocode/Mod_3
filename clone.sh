#!/bin/bash

cp -R module $1
find $1 -type f -exec rename "s/\[modulename\]/$1/" '{}' \;
find $1 -type f -exec sed -i "s/\[modulename\]/$1/g" {} +
