<?php

    $svetafor = '';

    switch ($svetafor) {
        case 'green':
            echo 'Светафор зеленый, я перехожу дорогу';
            break;
        case 'yellow':
            echo 'Сейчас cветафор желтый';
            break;
        case 'red':
            echo 'Жду когда загорится зеленый';
            break;    
        default:
            echo 'Светафор сломался..';
            break;
    }

?>