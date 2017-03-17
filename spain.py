#!/usr/bin/python

from sense_hat import SenseHat

sense = SenseHat()

def setRow( row, colour ):
	sense.set_pixel(0, row, colour)
	sense.set_pixel(1, row, colour)
	sense.set_pixel(2, row, colour)
	sense.set_pixel(3, row, colour)
	sense.set_pixel(4, row, colour)
	sense.set_pixel(5, row, colour)
	sense.set_pixel(6, row, colour)
	sense.set_pixel(7, row, colour)
	return;


sense.clear(0, 0, 0)  # passing in r, g and b values of a colour

red = (255, 0, 0)
yellow = (255, 255, 0)

setRow(0, red )
setRow(1, red )
setRow(2, yellow )
setRow(3, yellow )
setRow(4, yellow )
setRow(5, yellow )
setRow(6, red )
setRow(7, red )
