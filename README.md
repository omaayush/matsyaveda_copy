# matsyaveda_copy
instruction to run this website on your local.
1-clone the git from https://github.com/rajuknit/matsyaveda_copy.git
2-create new database with name matsyaveda.
3-import matsyaveda.sql in matsyaveda database.
4-run followoing queries on matsyaveda database
    update wp_options set option_value ='your_website_name' where option_id=1;
    update wp_options set option_value ='your_website_name' where option_id=1;
5-open wp-config.php ,,
  on line 30 set your mysql server password
  define('DB_PASSWORD', 'My_Password');

