import sys
import os
import json
import re


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
