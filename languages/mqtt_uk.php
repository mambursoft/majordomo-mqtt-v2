<?php
$dictionary=array(
'NEW_MQTT_CLIENT' => 'Назва клієнта',
'NEW_MQTT_HOST' => 'Хост',
'NEW_MQTT_PORT' => 'Порт',
'NEW_MQTT_QUERY' => 'Шлях підписки',
'NEW_MQTT_REQ_AUTH' => 'потрібна авторизація',
'NEW_MQTT_USERNAME' => 'Ім\'я користувача',
'NEW_MQTT_PASSWORD' => 'Пароль',
'MQTT_WRITE_METHOD' => 'Спосіб запису:',
'MQTT_INSTANT' => 'Негайно (нове з\'єднання)',
'MQTT_QUEUE' => 'Черга',
'MQTT_SELECT' => 'вибрати',
'MQTT_QOS' => 'QoS:',
'MQTT_RETAIN' => 'Retain:',
'MQTT_REPLACE_LIST' => 'Замінити список:',
'MQTT_PAGES' => 'Сторінки:',
);

foreach ($dictionary as $k=>$v) { if (!defined("LANG_".$k)) { define("LANG_".$k, $v); } }

if (!defined('LANG_MQTT_MANUAL')) define('LANG_MQTT_MANUAL', 'Мануал');
if (!defined('LANG_MQTT_MANUAL_TEXT')) define('LANG_MQTT_MANUAL_TEXT', 'Instruction is available below.');
if (!defined('LANG_MQTT_MANUAL_STEP1')) define('LANG_MQTT_MANUAL_STEP1', 'Save changes after validation only.');
if (!defined('LANG_MQTT_MANUAL_STEP2')) define('LANG_MQTT_MANUAL_STEP2', 'Сохраняйте изменения только после проверки.');
if (!defined('LANG_MQTT_MANUAL_STEP3')) define('LANG_MQTT_MANUAL_STEP3', 'Зберігайте зміни тільки після перевірки.');
if (!defined('LANG_MQTT_MANUAL_FULL')) define('LANG_MQTT_MANUAL_FULL', 'Повний мануал');
