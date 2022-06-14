<?php

function getTemperature()
{
    $output = exec('python3 ./python/main.py getTemperature');
    return ($output);
}

function getVoltage1()
{
    $output = exec('python3 ./python/main.py getVoltage1');
    return ($output);
}

function getVoltage2()
{
    $output = exec('python3 ./python/main.py getVoltage2');
    return ($output);
}

function getVoltage3()
{
    $output = exec('python3 ./python/main.py getVoltage3');
    return ($output);
}

function manager()
{
    $output = shell_exec('ls -ltr --time-style=\'+%s\'');
    // echo $output;
    $re = '/^((?!^total\s\d+).*).*\s+\d+\s+(.*)\s(\d+)\s+(\d+)\s+(\d+)\s(.*)$/m';
    preg_match_all($re, $output, $matches, PREG_SET_ORDER, 0);

    // Print the entire match result
    echo json_encode($matches);
}
