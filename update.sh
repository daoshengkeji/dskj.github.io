#!/bin/sh
git checkout master
git fetch --all
git reset --hard origin/master
git pull
echo '********** update success **********'