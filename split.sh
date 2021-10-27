#!/bin/bash

mkdir data_split

FILENAME=./data/kvk-open-data-set-handelsregister.csv
FILE_HEADER=$(head -1 $FILENAME)

split -l 10000 $FILENAME xyz

n=1

for f in xyz*
do
    if [ $n -gt 1 ]; then 
        echo $FILE_HEADER > ./data_split/KvK-OD-${n}.csv
    fi
    cat $f >> ./data_split/KvK-OD-${n}.csv
    rm $f
    ((n++))
done