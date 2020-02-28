#!/usr/bin/env php
<?php

declare(strict_types=1);

$http = new Swoole\Http\Server("0.0.0.0", 9501);
$http->on(
    "request",
    function (Swoole\Http\Request $request, Swoole\Http\Response $response) {
        $response->end(
           (microtime(true) - $_SERVER['REQUEST_TIME_FLOAT'])
        );
    }
);
$http->start();
