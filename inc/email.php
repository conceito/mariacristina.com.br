<?php
/**
 * E-mail configuration
 */

return array(
	'host' => 'smtp.conceito-online.com.br',
	'user' => 'dev@conceito-online.com.br',
	'pass' => 'conceito',
	'port' => 587,
	'encr' => '', // tsc

	'to' => array(
		'name' => 'Maria Cristina Matteotti Geraldo', // leave empty to use $titleSite
		'email' => 'dev@conceito-online.com.br' // can be overridden by $toMail
	),

	'from' => array(
		'name' => '', // leave empty to use formName
		'email' => 'dev@conceito-online.com.br' // leave empty to use formEmail
	),

	'copies' => array()
);
