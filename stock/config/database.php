<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',

	// Config for MSSQL SERVER
	'hostname' => 'SAMITPCGENIUS\SQLEXPRESS',
	'username' => 'sa',
	'password' => '377040',
	'database' => 'mydb',
	'dbdriver' => 'sqlsrv',

	// Config for MySQL DB
	// 'hostname' => 'localhost',
	// 'username' => 'root',
	// 'password' => '1234',
	// 'database' => 'mydb',
	// 'dbdriver' => 'mysqli',

	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);

