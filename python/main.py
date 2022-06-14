import sys
import os
import json
import re


metodo = sys.argv[1]

if metodo == 'getTemperature':
    print(json.dumps('py getTemperature'))
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
