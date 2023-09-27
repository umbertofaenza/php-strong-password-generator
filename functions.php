<?php

function pwd_generator($password_length_input)
{
    $possible_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!£$%&*()";
    $max_chars = (strlen($possible_chars));

    for ($i = 0; $i < $password_length_input; $i++) {
        $rand_index = rand(0, $max_chars);
        $_SESSION["generated_pwd"] .= $possible_chars[$rand_index];
    }
    return $_SESSION["generated_pwd"];
}