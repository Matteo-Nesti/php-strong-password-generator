<?php
$message = '';

if (is_numeric($characters_number)) {

    function random_password_generator($lenght)
    {
        $characters_str = 'abcdefgh!@#ABCtuvwD345678EFGH$%^RSTU&*ijklmoLMNOPpqrsxyzIJKQVWXYZ1290';
        $random_str = '';
        for ($i = 0; $i < $lenght; $i++) {
            $random_str .= $characters_str[rand(0, $lenght)];
        }
        return $random_str;
    }
} else {
    return $message = 'valori non validi';
}
