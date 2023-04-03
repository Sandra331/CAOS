<?php

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' == $urlPath) {
    // envoie accueil
} elseif ('/questions' === $urlPath) {
    // envoie questions
} elseif ('/resultats' === $urlPath) {
    // envoie resultats
} else {
    // envoie accueil / 404
}