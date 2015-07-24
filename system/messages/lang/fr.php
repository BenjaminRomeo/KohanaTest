<?php defined('SYSPATH') OR die('No direct script access.');

return array(
	'not_empty'     => ':field ne doit pas être vide',
	'phone'         => ':field doit contenir un numéro de téléphone valide',
	'email'         => ':field doit contenir une adresse email valide',
	'email_domain'  => ':field doit contenir un domaine email valide',
	'regex'         => ':field n\'est pas au bon format',
	'date'          => ':field doit contenir une date',
	
	//Non traduit pour le moment
	'alpha'         => ':field must contain only letters',
	'alpha_dash'    => ':field must contain only numbers, letters and dashes',
	'alpha_numeric' => ':field must contain only letters and numbers',
	'color'         => ':field must be a color',
	'credit_card'   => ':field must be a credit card number',
	'decimal'       => ':field must be a decimal with :param2 places',
	'digit'         => ':field must be a digit',
	'equals'        => ':field must equal :param2',
	'exact_length'  => ':field must be exactly :param2 characters long',
	'in_array'      => ':field must be one of the available options',
	'ip'            => ':field must be an ip address',
	'matches'       => ':field must be the same as :param3',
	'min_length'    => ':field must be at least :param2 characters long',
	'max_length'    => ':field must not exceed :param2 characters long',
	'numeric'       => ':field must be numeric',
	'range'         => ':field must be within the range of :param2 to :param3',
	'url'           => ':field must be a url',
);
