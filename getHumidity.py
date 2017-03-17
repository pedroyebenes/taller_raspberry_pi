#!/usr/bin/python

from sense_hat import SenseHat

sense = SenseHat()

humidity = sense.get_humidity()

print (humidity)
