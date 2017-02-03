<?php

# Время жизни сессии (30 минут)
ini_set('session.gc_maxlifetime', 1800);

# Время жихни cookie (30 минут)
ini_set('session.cookie_lifetime', 1800);

# Путь хранения сессий
ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'] .'/cartridjes/session/');

# Старт сессии
session_start();

?>