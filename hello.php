<?php

// We return a JSON file
header('Content-Type: application/json; charset=utf-8');

// Disallow non-GET requests
if ($_SERVER["REQUEST_METHOD"] != "GET")
{
    // Kill connection and return "invalid request" JSON
    die('{"error": "Invalid request method", "data": null}');
}

// Kill connection and return "request with data" JSON
die('{"error": null, "data": "Hello world!"}');