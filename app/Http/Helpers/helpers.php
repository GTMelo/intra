<?php

function wryyyy()
{
    return 'Wryyyyyy!';
}

function createPath($path, $mode = 0755)
{

    if (is_dir($path)) return false;
    return mkdir($path, 0755, true);

}