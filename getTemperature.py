#!/usr/bin/python

from sense_hat import SenseHat

sense = SenseHat()

temp = sense.get_temperature()

print (temp)
