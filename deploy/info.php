<?php

/////////////////////////////////////////////////////////////////////////////
// General information
/////////////////////////////////////////////////////////////////////////////

$app['basename'] = 'software_repository';
$app['version'] = '1.6.0';
$app['release'] = '1';
$app['vendor'] = 'ClearFoundation';
$app['packager'] = 'ClearFoundation';
$app['license'] = 'GPLv3';
$app['license_core'] = 'LGPLv3';
$app['description'] = lang('software_repository_app_description');
$app['tooltip'] = lang('software_repository_app_tooltip');

/////////////////////////////////////////////////////////////////////////////
// App name and categories
/////////////////////////////////////////////////////////////////////////////

$app['name'] = lang('software_repository_app_name');
$app['category'] = lang('base_category_system');
$app['subcategory'] = lang('base_subcategory_operating_system');

/////////////////////////////////////////////////////////////////////////////
// Packaging
/////////////////////////////////////////////////////////////////////////////

$app['delete_dependency'] = array(
    'app-software-repository-core'
);

$app['core_requires'] = array(
    'app-base-core >= 1:1.6.0',
);
