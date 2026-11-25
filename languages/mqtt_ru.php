<?php
$dictionary=array(
'NEW_MQTT_CLIENT' => 'Имя клиента',
'NEW_MQTT_HOST' => 'Хост',
'NEW_MQTT_PORT' => 'Порт',
'NEW_MQTT_QUERY' => 'Путь подписки',
'MQTT_STATUS_TOPIC' => 'Тема статуса (birth/LWT)',
'MQTT_RETAIN' => 'Сохранять publishes с retain по умолчанию',
'NEW_MQTT_REQ_AUTH' => 'требуется авторизация',
'NEW_MQTT_USERNAME' => 'Имя пользователя',
'NEW_MQTT_PASSWORD' => 'Пароль',
'MQTT_WRITE_METHOD' => 'Способ записи:',
'MQTT_INSTANT' => 'Немедленно (новое соединение)',
'MQTT_QUEUE' => 'Очередь',
'MQTT_SELECT' => 'выбрать',
'MQTT_QOS' => 'QoS:',
'MQTT_RETAIN' => 'Retain:',
'MQTT_REPLACE_LIST' => 'Заменить список:',
'MQTT_PAGES' => 'Страницы:',
);

foreach ($dictionary as $k=>$v) { if (!defined("LANG_".$k)) { define("LANG_".$k, $v); } }

if (!defined('LANG_MQTT_MANUAL')) define('LANG_MQTT_MANUAL', 'Мануал');
if (!defined('LANG_MQTT_MANUAL_TEXT')) define('LANG_MQTT_MANUAL_TEXT', 'Instruction is available below.');
if (!defined('LANG_MQTT_MANUAL_STEP1')) define('LANG_MQTT_MANUAL_STEP1', 'Use read-only discovery first.');
if (!defined('LANG_MQTT_MANUAL_STEP2')) define('LANG_MQTT_MANUAL_STEP2', 'Сначала используйте поиск только для чтения.');
if (!defined('LANG_MQTT_MANUAL_STEP3')) define('LANG_MQTT_MANUAL_STEP3', 'Спочатку використовуйте пошук лише для читання.');
if (!defined('LANG_MQTT_MANUAL_FULL')) define('LANG_MQTT_MANUAL_FULL', 'Полный мануал');
