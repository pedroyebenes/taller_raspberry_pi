#!/usr/bin/python

from sense_hat import SenseHat

sense = SenseHat()

humidity = sense.get_humidity()
temp = sense.get_temperature()
pressure = sense.get_pressure()

print (humidity)
print (temp)
print (pressure)
