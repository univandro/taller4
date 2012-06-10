<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Taller IV',
	'language'=>'es',
	'sourceLanguage'=>'es',
	'theme'=>'shadow_dancer',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'taller',
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
                'widgetFactory'=>array(
		    'widgets'=>array(
		        'CGridView'=>array(
		            'htmlOptions'=>array('cellspacing'=>'0','cellpadding'=>'0'),
						'itemsCssClass'=>'item-class',
						'pagerCssClass'=>'pager-class'
		        ),
		        'CJuiTabs'=>array(
		            'htmlOptions'=>array('class'=>'shadowtabs'),
		        ),
		        'CJuiAccordion'=>array(
		            'htmlOptions'=>array('class'=>'shadowaccordion'),
		        ),
		        'CJuiProgressBar'=>array(
		           'htmlOptions'=>array('class'=>'shadowprogressbar'),
		        ),
		        'CJuiSlider'=>array(
		            'htmlOptions'=>array('class'=>'shadowslider'),
		        ),
		        'CJuiSliderInput'=>array(
		            'htmlOptions'=>array('class'=>'shadowslider'),
		        ),
		        'CJuiButton'=>array(
		            'htmlOptions'=>array('class'=>'shadowbutton'),
		        ),
		        'CJuiButton'=>array(
		            'htmlOptions'=>array('class'=>'shadowbutton'),
		        ),
		        'CJuiButton'=>array(
		            'htmlOptions'=>array('class'=>'button green'),
		        ),
		    ),
		),
        
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
//                        'showScriptName'=>false,
//                        'urlSuffix'=>'.html',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
		// uncomment the following to use a MySQL database
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=medico_db1',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'ilatina',
//			'password' => '',
			'charset' => 'utf8',
		),
		
		
//		 'coreMessege'=>array(
//		 	'bassePath'=>'protected/messages'
//		 
//		 ),
		
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
	
//	'defaultController'=>'controllers/admin',  //cambiar la vista por defecto
);
