import serial

# PORTA_SERIAL = "/dev/ttyAMA0"
PORTA_SERIAL = '/dev/ttyUSB0'
# PORTA_SERIAL = 'COM8'

SPEED = 115200

comport = serial(PORTA_SERIAL, SPEED)
VALUE = comport.readline()
comport.close()

print(VALUE)
