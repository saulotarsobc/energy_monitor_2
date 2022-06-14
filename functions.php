<?php

function getTemperature()
{
    return (shell_exec('python3 ./python/main.py getTemperature'));
}

function getVoltage1()
{
    return (shell_exec('python3 ./python/main.py getVoltage1'));
}

function getVoltage2()
{
    return (shell_exec('python3 ./python/main.py getVoltage2'));
}

function getVoltage3()
{
    return (shell_exec('python3 ./python/main.py getVoltage3'));
}

function manager()
{
    return (shell_exec("ls -ltr --time-style='+%s'"));
}
