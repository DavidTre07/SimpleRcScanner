#!/usr/bin/python3

# https://github.com/DavidTre07
# Normalize pulse length with the new desired pulse length
# This usualy help to transmit a clean stream of codes
#
# Example  normalize.py 290 "300, 295, 610, 290, 590, 295"
#          This will output: 290, 290, 580, 290, 580, 290

import sys

if len(sys.argv) != 3:
    raise ValueError('Please provide: pulseLength stream')

pluseLength = int(sys.argv[1])
initialStream = sys.argv[2]
DEBUG=False

#Convert to a list of integers and remove uneeded spaces
cleanedStream = list(map(int,initialStream.replace(" ", "").split(',')))

if DEBUG :
    print("Cleaned stream:",cleanedStream)

print("\nNew stream:")

streamLength = len(cleanedStream)-1
for index, value in enumerate(cleanedStream):
    calculatedValue=round(value/pluseLength)*pluseLength
    if DEBUG :
        print(value, " = ", calculatedValue)
    if(index != streamLength):
        print(calculatedValue, end = ", ")
    else:
        print(calculatedValue)
