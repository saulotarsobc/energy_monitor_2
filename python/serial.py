import serial
from time import sleep

PORTA_SERIAL = "/dev/ttyAMA0"
# PORTA_SERIAL = '/dev/ttyUSB0'
# PORTA_SERIAL = 'COM8'

SPEED = 115200

sleep(1)
comport = serial(PORTA_SERIAL, SPEED)
exit()

VALUE = comport.readline()
comport.close()

print(VALUE)
