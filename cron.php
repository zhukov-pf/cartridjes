<?php

// Очистка дириктории сессий
// 0 * * * *

# Читаем эту директорию 
$dir="./session";  

# время на удаление 
$todel=1800; 

if($OpenDir=opendir($dir)) {

    while(($file=readdir($OpenDir)) !== false) {

        if ($file != "." && $file != "..") {

            $dtime=intval(time()-filectime("{$dir}/{$file}")); 

            if ($dtime>=$todel) unlink("{$dir}/{$file}"); 
        }
    }

    closedir($OpenDir);  
} 

?>