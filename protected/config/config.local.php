<?php 
$THEME_NAME = 'raovat';
$THEME		= 'raovat';
$TABLE_PREFIX = 'bds2';
   
include 'config_host/host.php';

//All defined items in Yii-core
//Please do not change if not require
define('DA_DUYET', 1);
define('CHUA_DUYET', 0);
define('KHONG_DUYET', 2);


define('NHA_BAN_GAP', 1);
define('DAT_BAN_GAP', 2);



define('BE', 1);
define('FE', 2);

define('ROLE_MANAGER', 1);
define('ROLE_ADMIN', 2);
define('ROLE_MEMBER', 3);




//max records in logger table
define('LOGGER_TABLE_MAX_RECORDS', 2000);

define('PASSW_LENGTH_MIN', 6);
define('PASSW_LENGTH_MAX', 32);

define('VERZ_COOKIE_ADMIN', md5('verz_cookie_admin'));
define('VERZ_COOKIE', md5('verz_cookie'));
define('VERZLOGIN', md5('verz_login'));
define('VERZLPASS', md5('verz_pass'));

define('VERZ_COOKIE_MEMBER', md5('verz_cookie_member'));
define('VERZLOGIN_MEMBER', md5('verz_login_member'));
define('VERZLPASS_MEMBER', md5('verz_pass_member'));

define('STATUS_INACTIVE', 0);
define('STATUS_ACTIVE', 1);
define('STATUS_NEW', 2);
define('STATUS_WAIT_ACTIVE_CODE', 3);

define('TYPE_YES', 1);
define('TYPE_NO', 0);

define('BANNER_1_WIDTH', 960);
define('BANNER_1_HEIGHT', 300);

define('BANNER_2_WIDTH', 230);
define('BANNER_2_HEIGHT', 69);

define('BANNER_3_WIDTH', 229);
define('BANNER_3_HEIGHT', 119);

define('ADS_HOME_WIDTH', 260);
define('ADS_HOME_HEIGHT', 170);
define('ADS_HOME_THUMBS_WIDTH', 131);
define('ADS_HOME_THUMBS_HEIGHT', 86);

define('ADS_INSIDE_PAGE_WIDTH', 281);
define('ADS_INSIDE_PAGE_HEIGHT', 241);
define('ADS_INSIDE_PAGE_THUMBS_WIDTH', 131);
define('ADS_INSIDE_PAGE_THUMBS_HEIGHT', 112);

define('ADS_BLOG_TOP_WIDTH', 728);
define('ADS_BLOG_TOP_HEIGHT', 90);
define('ADS_BLOG_TOP_THUMBS_WIDTH', 281);
define('ADS_BLOG_TOP_THUMBS_HEIGHT', 35);

define('IMAGE_ADMIN_WIDTH', 260);
define('IMAGE_ADMIN_HEIGHT', 200);

define('IMAGE_ADMIN_THUMB_WIDTH', 117);
define('IMAGE_ADMIN_THUMB_HEIGHT', 90);

//block
define('BLOCK_WIDTH', 100);
define('BLOCK_HEIGHT', 100);

//menu
//define('MENU_QUICK_LINKS', 5);
define('MENU_LEFT', 1); //footer left
define('MENU_RIGHT', 2); //footer right
define('MENU_MAIN', 7);

//CMS
define('EXTERNAL_PAGE', 14);
define('PAGE_SUCCESS_SIGN_UP', 8);
define('PAGE_SUCCESS_RESET_PASSWORD', 13);

//mail
define('MAIL_REGISTER_SUCCEED_TO_MEMBER', 1);
define('MAIL_REGISTER_SUCCEED_TO_ADMIN', 2);
define('MAIL_FORGET_PASSWORD', 3);
define('MAIL_CONTACT_US_TO_ADMIN',4);   //contact us send admin
define('MAIL_CONTACT_US_TO_USER',5);	//contact us send User
define('MAIL_CHANGE_PASSWORD_TO_USER',6);
define('MAIL_VERIFY_TO_RESET_PASSWORD_TO_ADMIN',7);
define('MAIL_RESET_PASSWORD_TO_ADMIN',8);
define('MAIL_CHANGE_PASSWORD_TO_ADMIN',9);
define('MAIL_ADMIN_RESET_PASS', 28);
define('MAIL_ADMIN_REQUEST', 30);
define('MAIL_USER_REQUEST', 31);

//max time for failed login to show captcha required
define('MAX_TIME_TO_SHOW_CAPTCHA', 2);

//Vnguyen
define('SUBSCRIBER_GROUP_PUBLIC_USER', 1);
define('SUBSCRIBER_GROUP_MEMBER', 2);
?>