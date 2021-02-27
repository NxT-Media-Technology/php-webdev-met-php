<?php

function parseClass($p = '', $headerStyles = [])
{
    if(empty($headerStyles))
    {
        return '';
    }

    return empty($headerStyles[$p]) ? '' : ' '.$headerStyles[$p];
}
