<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

$info = array(
	'name' => t('Антиспам'),
	'description' => t('Отлавливает спам. Можно задать черные списки IP и запретных слов'),
	'version' => '1.2',
	'author' => 'Максим',
	'plugin_url' => '',
	'author_url' => '//maxsite.org/',
	'group' => 'security',
	'options_url' => getinfo('site_admin_url') . 'plugin_antispam',
);

# end of file