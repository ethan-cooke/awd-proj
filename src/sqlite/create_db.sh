#!/bin/bash

db_file = "~/.sqlite/timewarp.db"
if [ -f "$db_file" ]; then
    rm "$db_file"
fi

sqlite3 "$db_file" < schema.sql

sqlite3 -csv -header "$db_file" ".import categories.csv categories"
sqlite3 -csv -header "$db_file" ".import products.csv products"