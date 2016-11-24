# matsyaveda_copy
instruction to run this website on your local.
* __clone the git from https://github.com/rajuknit/matsyaveda_copy.git__
* __create new database with name matsyaveda.__
* __import matsyaveda.sql in matsyaveda database.__
* __run followoing queries on matsyaveda database__
   *__update wp_options set option_value ='your_website_name' where option_id=1;__
       *__update wp_options set option_value ='your_website_name' where option_id=1;__
* __open wp-config.php __
  on line 30 set your mysql server password
  define('DB_PASSWORD', 'My_Password');

