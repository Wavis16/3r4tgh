<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Отправка Form',
	'heading' => 'Отправка новой формы',
	'success_redirect' => 'thx.html',
	'resources' => array(
		'checkbox_checked' => 'Отмечено',
		'checkbox_unchecked' => 'Флажок не установлен',
		'submitted_from' => 'Формы, отправленные с веб-сайта: %s',
		'submitted_by' => 'IP-адрес посетителя: %s',
		'too_many_submissions' => 'Недопустимо высокое количество отправок с этого IP-адреса за последнее время',
		'failed_to_send_email' => 'Не удалось отправить сообщение эл. почты',
		'invalid_reCAPTCHA_private_key' => 'Недействительный закрытый ключ reCAPTCHA.',
		'invalid_reCAPTCHA2_private_key' => 'Недействительный закрытый ключ reCAPTCHA 2.0.',
		'invalid_reCAPTCHA2_server_response' => 'Недействительный ответ сервера reCAPTCHA 2.0.',
		'invalid_field_type' => 'Неизвестный тип поля \'%s\'.',
		'invalid_form_config' => 'Недопустимая конфигурация поля \"%s\".',
		'unknown_method' => 'Неизвестный метод запроса сервера'
	),
	'email' => array(
		'from' => 'maximhobit@yandex.ru',
		'to' => 'maximhobit@yandex.ru'
	),
	'fields' => array(
		'custom_U1413' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Κάντε κράτηση τώρα',
			'required' => true,
			'errors' => array(
				'required' => 'Поле \'Κάντε κράτηση τώρα\' не может быть пустым.'
			)
		),
		'custom_U1423' => array(
			'order' => 2,
			'type' => 'string',
			'label' => 'Сообщение',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
