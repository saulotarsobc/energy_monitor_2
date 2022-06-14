<?php

function getTemperature()
{
    $output = shell_exec('python3 ./python/main.py getTemperature');
    return ($output);
}

function getVoltage1()
{
    $output = shell_exec('python3 ./python/main.py getVoltage1');
    return ($output);
}

function getVoltage2()
{
    $output = shell_exec('python3 ./python/main.py getVoltage2');
    return ($output);
}

function getVoltage3()
{
    $output = shell_exec('python3 ./python/main.py getVoltage3');
    return ($output);
}

function manager()
{
    $output = shell_exec("ls -ltr --time-style='+%s'");
    return json_encode($output);
}
