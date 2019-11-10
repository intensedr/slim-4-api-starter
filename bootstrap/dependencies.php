<?php

$container->set('config', function () use ($config) {
    return $config;
});