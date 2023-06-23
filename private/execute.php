<?php

function executeQuery($cb)
{
    global $conn;

    do {
        if ($res = $conn->store_result()) {
            $res->free();
        }
    } while ($conn->more_results() && $conn->next_result());

    return $cb;
}