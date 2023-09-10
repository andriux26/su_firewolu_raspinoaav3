#!/bin/bash
#
# Purpose: Decode a METEOR-M 2 false color image.
#
# Input parameters:
#   1. Input .dec file
#   2. Output filename for bmp image
#
# Example:
#   ./meteor_false_color_decode.sh /path/to/input.dec /path/to/output.bmp

# import common lib and settings
. "$HOME/.noaa-v2.conf"
. "$NOAA_HOME/scripts/common.sh"

# input params
INPUT_DEC=$1
OUTPUT_BMP=$2

# adjust -r 68 to -r 66 for summer colors if you are getting strange colors either side of ~ equinox.
# produce the output image - Winter Color Settings.
$MEDET_ARM "${INPUT_DEC}" "${OUTPUT_BMP}" -r 65 -g 65 -b 64 -d
# produce the output image - Summer Color Settings.
$MEDET_ARM "${INPUT_DEC}" "${OUTPUT_BMP}" -r 66 -g 65 -b 64 -d
