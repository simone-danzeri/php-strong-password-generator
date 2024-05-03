<?php
    // Creo la pw con $passwordLength caratteri presi random dall'array $characters
    function getRandomPassword($length, $array)
    {
        $randomPassword = '';
        for($i = 0; $i < $length; $i++) {
            $randomIndex = array_rand($array);
            $randomPassword = $randomPassword . $array[$randomIndex];
        }
        return $randomPassword;
    }
    $userPassword = getRandomPassword($passwordLength, $characters);
?>