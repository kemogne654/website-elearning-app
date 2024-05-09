<?php
// Serve static files for development
if (preg_match('/\.(?:html|css|js|jpg|png|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    include_once("contact.html");
}
