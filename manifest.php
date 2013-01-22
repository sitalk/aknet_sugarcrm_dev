<?php
$manifest = array(
	'name'							=> 'RUSSIAN UTF-8 LANGUAGE PACK',
	'description'					=> 'Русскоязычная UTF-8 версия',
	'type'							=> 'langpack',
	'is_uninstallable'				=> 'Yes',
	'acceptable_sugar_versions'		=> array (),
	'acceptable_sugar_flavors'		=> array('CE'),
	'author'						=> 'brandousov-scrm',
	'version'						=> '6.0.0rc1',
	'published_date'				=> '2010/06/14'
	);

$installdefs = array(
	'id'							=> 'ru_ru',
	'image_dir'						=> '<basepath>/images',
	'copy'							=> array(
			array('from'				=> '<basepath>/include','to'=>'include',),
			array('from'				=> '<basepath>/modules','to'=>'modules'),
			array('from'				=> '<basepath>/install','to'=>'install'),
	)
);
?>