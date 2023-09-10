#!/bin/bash

cd ~

cd MeteorDemod/build
rm -rf *
cmake ../
make -j4
sudo make install

cd ~
