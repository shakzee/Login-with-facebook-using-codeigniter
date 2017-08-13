Logoin with facebook in codeigniter or CI
what you need..?
PHP 5.4+
CodeIgniter 3
CodeIgniter session library
Facebook PHP SDK v5
Composer 
Register your application on facebook

Steps
In your Codeigniter /application/config/config.php file set $config['composer_autoload'] to TRUE

Upload the Facebook.php from library folder to your application/library folder

Upload the facebook.php config file in /application/config/facebook.php with your facebook app detail.

$config['facebook_app_id'] = 'Your app id';
$config['facebook_app_secret'] = 'Your app secret';
$config['facebook_login_type'] = 'web';
$config['facebook_login_redirect_url'] = 'login_with_fb'; //login url
$config['facebook_logout_redirect_url'] = 'login_with_fb/login'; //logout url
$config['facebook_permissions'] = array('public_profile', 'publish_actions', 'email');
$config['facebook_graph_version'] = 'v2.6';
$config['facebook_auth_on_load'] = TRUE;

Set Facebook+session libraries and URL helper to autoload 

Read Blog
http://www.shakzee.com/blogs/readblog/14/login-with-facebook-using-codeigniter
 
Watch Tutorials Now on Shakzee
http://www.shakzee.com/courses/detail/19/login-with-facebook-using-codeigniter 