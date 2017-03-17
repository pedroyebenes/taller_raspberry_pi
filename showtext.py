#!/usr/bin/python

from sense_hat import SenseHat
import sys

sense = SenseHat()

if len(sys.argv) >= 2 :
	sense.show_message(sys.argv[1], text_colour=[255, 255, 255],  back_colour=[0, 0, 0])

sense.clear(0, 0, 0)  # passing in r, g and b values of a colour
