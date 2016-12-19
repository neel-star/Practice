<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('Neelay.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('neelaykumar11@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'root',
                      /*password*/'',
                      /*database name*/'my_proj',
                      /*table name*/'user_details');

$fgmembersite->SetRandomKey('qSRcVS6DrTzrPvr');

?>