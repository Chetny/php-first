<?php

declare(strict_types=1);

namespace App;

function dump($params)
{
    echo ('
    <div style ="
        display:inline-block;
        background: lightgray;
        border:1px solid gray;
        padding:10px;
    ">
    <pre>
    ');
    print_r($params);
    echo ('</pre></div><br>');
}
