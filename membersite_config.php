<?PHP
require_once("./include/fg_membersite.php");
require_once("./include/headerc.php");
$fgmembersite = new FGMembersite();
$headerc = new headerc();
//Provide your site name here
$fgmembersite->SetWebsiteName('user11.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('XXXXXXXXXXX@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'password',
                      /*database name*/'my_proj',
                      /*table name*/'user_details_table');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>