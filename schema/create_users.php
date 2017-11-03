<?php

$array  = [
            ['user' => 'test', 'password2' => crypt('rest'), 'password3' => crypt('best')],
            ['user' => 'test1', 'password2' => crypt('rest1'), 'password3' => crypt('best1')]
            ];
            // $array = array_unique($array);
        echo json_encode($array);
