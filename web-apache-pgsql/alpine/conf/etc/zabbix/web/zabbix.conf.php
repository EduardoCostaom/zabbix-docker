<?php
// Zabbix GUI configuration file.
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '{DB_SERVER_HOST}';
$DB['PORT']     = '{DB_SERVER_PORT}';
$DB['DATABASE'] = '{DB_SERVER_DBNAME}';
$DB['USER']     = '{DB_SERVER_USER}';
$DB['PASSWORD'] = '{DB_SERVER_PASS}';

// Schema name. Used for IBM DB2 and PostgreSQL.
$DB['SCHEMA'] = '';

$ZBX_SERVER      = '{ZBX_SERVER_HOST}';
$ZBX_SERVER_PORT = '{ZBX_SERVER_PORT}';
$ZBX_SERVER_NAME = '{ZBX_SERVER_NAME}';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>
