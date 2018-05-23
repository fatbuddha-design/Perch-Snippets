<?php
        define('PERCH_LICENSE_KEY', 'P31803-TXY816-HPV688-LAM414-EGX027');
        $http_host = getenv('HTTP_HOST');
            switch($http_host)
            {
                case('xxxx.local') :
                define("PERCH_DB_USERNAME", 'xxxx');
                define("PERCH_DB_PASSWORD", 'xxxx');
                define("PERCH_DB_SERVER", "xxxx");
                define("PERCH_DB_DATABASE", "xxxx");
                define('PERCH_PRODUCTION_MODE', 'PERCH_DEVELOPMENT');
                define('PERCH_SSL', false);
                define('PERCH_DEBUG', true);
                break;

                case(‘mysite.my-staging-server.co.uk’) :
                define(“PERCH_DB_USERNAME”, ‘xxxx’);
                define(“PERCH_DB_PASSWORD”, ‘xxxx’);
                define(“PERCH_DB_SERVER”, “xxxx”);
                define(“PERCH_DB_DATABASE”, “xxxx”);
                define('PERCH_PRODUCTION_MODE', 'PERCH_PRODUCTION');
                define('PERCH_SSL', true);
                define('PERCH_DEBUG', false);
                break;
                            
                default :
                define("PERCH_DB_USERNAME", 'xxxx');
                define("PERCH_DB_PASSWORD", 'xxxx');
                define("PERCH_DB_SERVER", "xxxx");
                define("PERCH_DB_DATABASE", "xxxx");
                define('PERCH_PRODUCTION_MODE', 'PERCH_PRODUCTION');
                define('PERCH_SSL', true);
                define('PERCH_DEBUG', false);
                break;
            }
        define("PERCH_DB_PREFIX", "perch3_");
        define('PERCH_TZ', 'UTC');
        define('PERCH_EMAIL_FROM', 'me@gmail.com');
        define('PERCH_EMAIL_FROM_NAME', 'Me');
        define('PERCH_GMAPS_API_KEY', 'AIzaSyCw0j574HWCl-8HAeYQFh5CmseN_xxxxx');
        define('PERCH_RWD', true);
        define('PERCH_LOGINPATH', '/perch');
        define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
        define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');
        define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
        define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
        define('PERCH_FEATHERS', true);
        define('PERCH_TEMPLATE_FILTERS', true);
        define('PERCH_CUSTOM_EDITOR_CONFIGS', true);
        define('PERCH_HTML5', true);
