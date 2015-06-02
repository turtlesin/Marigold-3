<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/

	"accepted"             => "The :attribute must be accepted.",
	"active_url"           => "The :attribute is not a valid URL.",
	"after"                => "The :attribute must be a date after :date.",
	"alpha"                => "The :attribute may only contain letters.",
	"alpha_dash"           => "The :attribute may only contain letters, numbers, and dashes.",
	"alpha_num"            => "The :attribute may only contain letters and numbers.",
	"array"                => "The :attribute must be an array.",
	"before"               => "The :attribute must be a date before :date.",
	"between"              => array(
		"numeric" => "Laukam :attribute jāsatur no :min līdz :max skaitļiem",
		"file"    => "The :attribute must be between :min and :max kilobytes.",
		"string"  => "The :attribute must be between :min and :max characters.",
		"array"   => "Laukam :attribute jābūt no :min līdz :max simboliem.",
	),
	"boolean"              => "The :attribute field must be true or false.",
	"confirmed"            => "Ievadītās paroles nesakrīt",
	"date"                 => "The :attribute is not a valid date.",
	"date_format"          => "The :attribute does not match the format :format.",
	"different"            => "The :attribute and :other must be different.",
	"digits"               => "Laukam [:attribute] jāsatur :digits cipari.",
	"digits_between"       => "The :attribute must be between :min and :max digits.",
	"email"                => ":attribute neatbilst epasta formai.",
	"exists"               => "The selected :attribute is invalid.",
	"image"                => "Izvēlētais attēls nav atbilstoša formāta. Atļautie formāti ir .jpg, .png un .gif!",
	"in"                   => "The selected :attribute is invalid.",
	"integer"              => "Laukam [:attribute] jāsatur tikai skaitļi.",
	"ip"                   => "The :attribute must be a valid IP address.",
	"max"                  => array(
		"numeric" => "Lauks :attribute nevar saturēt vairāk par :max cipariem.",
		"file"    => "The :attribute may not be greater than :max kilobytes.",
		"string"  => "Lauks [:attribute] nevar saturēt vairāk par :max simboliem.",
		"array"   => "The :attribute may not have more than :max items.",
	),
	"mimes"                => "The :attribute must be a file of type: :values.",
	"min"                  => array(
		"numeric" => "Lauks [:attribute] satur pārāk īsu vērtību. Minimālais lauka garums ir :min simboli.",
		"file"    => "The :attribute must be at least :min kilobytes.",
		"string"  => "Lauks [:attribute] satur pārāk īsu vērtību. Minimālais lauka garums ir :min simboli.",
		"array"   => "The :attribute must have at least :min items.",
	),
	"not_in"               => "The selected :attribute is invalid.",
	"numeric"              => "Laukam [:attribute] jāsatur tikai skaitļi.",
	"regex"                => "The :attribute format is invalid.",
	"required"             => "Lauks [:attribute] ir obligāti aizpildāms!",
	"required_if"          => "The :attribute field is required when :other is :value.",
	"required_with"        => "The :attribute field is required when :values is present.",
	"required_with_all"    => "The :attribute field is required when :values is present.",
	"required_without"     => "The :attribute field is required when :values is not present.",
	"required_without_all" => "The :attribute field is required when none of :values are present.",
	"same"                 => "Laukiem [:attribute] un [:other] jābūt aizpildītiem vienādiem.",
	"size"                 => array(
		"numeric" => "The :attribute must be :size.",
		"file"    => "The :attribute must be :size kilobytes.",
		"string"  => "The :attribute must be :size characters.",
		"array"   => "The :attribute must contain :size items.",
	),
	"unique"               => "Ievadītais :attribute jau ir reģistrēts sistēmā! Lūdzu pārbaudiet vai :attribute uzrakstīts pareizi!",
	"url"                  => "The :attribute format is invalid.",
	"timezone"             => "The :attribute must be a valid zone.",

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/

	'custom' => array(
		'title' => array(
			'unique' => 'Raksts ar tādu virsrakstu jau eksistē! Lūdzu, ievadiet citu virsrakstsu!',
		),
                'email' => array(
                        'unique' => 'Ievadītais e-pasts jau ir reģistrēts sistēmā! Lūdzu pārbaudiet vai e-pasts uzrakstīts pareizi!'
                ),
                'username' => array(
                        'unique' => 'Ievadītais lietotājvārds jau ir reģistrēts sistēmā! Lūdzu, ievadiet citu lietotājvārdu!'
                ),
                'telephone' => array(
                        'unique' => 'Ievadītais tālruņa numurs jau ir reģistrēts sistēmā! Lūdzu pārbaudiet vai tālruņa numurs uzrakstīts pareizi!'
                ),
                'name' => array(
                        'unique' => 'Ievadītā kategorija jau eksistē! Lūdzu, ievadiet citu!'
                ),
            
	),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(
            "firstname" => "Vārds",
            "lastname" => "Uzvārds",
            "username" => "Lietotājvārds",
            "email" => "E-pasts",
            "password" => "Parole",
            "password_confirmation" => "Parole atkārtoti",
            "telephone" => "Telefona numurs",
            "name" => "Nosaukums",
            "title" => "Nosaukums",
            "description" =>"Apraksts",
            "short_description" => "Īsais apraksts",
            "price" => "Cena",
            "old_password" => "Parole",
            "new_password" => "Jaunā parole",
            "new_password_again" => "Jaunā parole atkārtoti",
            
        ),

);
