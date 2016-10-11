<?php

//define uma constante com escopo global no projeto
define('__APP_ROOT__','/home/william/Devlopment/github.com/phpzm/aula-3');

function post($index) {
    return $_POST[$index];
}
