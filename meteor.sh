#!/bin/bash

# Set source and destination directories
SRC_DIR="/srv/images/"
DEST_DIR="/home/pi/Desktop/Meteor"

mkdir -p "$DEST_DIR"

# Find files over 1MB 
FILES=$(find "$SRC_DIR" -type f -size +1M -iname "*meteor*") 

# Loop through results and copy files
for FILE in $FILES
do
  FILENAME=$(basename "$FILE")
  cp "$FILE" "$DEST_DIR/$FILENAME"
done

echo "Copied ${#FILES[@]} meteor files over 1MB to $DEST_DIR"