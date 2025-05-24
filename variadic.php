<?php

function foo(...$args)
{
    print_r($args);
}

foo(1,'bar', sep:'Lolly!');