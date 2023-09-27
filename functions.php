<?php

function pwd_generator($password_length_input)
{
    $possible_chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!£$%&*()";
    $max_chars = (strlen($possible_chars));
    $generated_pwd = '';

    for ($i = 0; $i < $password_length_input; $i++) {
        $rand_index = rand(0, $max_chars);
        $generated_pwd
            .= $possible_chars[$rand_index];
    }
    return $generated_pwd;
}