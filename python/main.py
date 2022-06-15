#!/usr/bin/python
# -*- coding: iso-8859-1 -*-
import sys
import os
import json
import re
import serial
from serial import SerialException

PORTA_SERIAL = '/dev/ttyUSB0'
SPEED = 115200


def get_serial_energia():
    try:
        comport = serial.Serial(PORTA_SERIAL, SPEED)
        comport.write("energia*")
        VALUE = comport.readline()
        comport.close()
        return VALUE

    except serial.SerialException:
        return 'Erro ao tentar comnicacao serial'


metodo = sys.argv[1]

# retornar temperaturas
if metodo == 'getTemperature':
    final = []
    print(json.dumps(final))
    exit()


if metodo == 'getVoltage1':
    print(json.dumps('py getVoltage1'))
    exit()


if metodo == 'getVoltage2':
    print(json.dumps('py getVoltage2'))
    exit()


if metodo == 'getVoltage3':
    print(json.dumps('py getVoltage3'))
    exit()


if metodo == 'teste':
    print(json.dumps('py teste'))
    exit(1234)
