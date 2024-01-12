<?php
require ('../model/database.php');
require ('../model/modify.php');

$action = filter_input (INPUT_POST, 'action');
if ($action == NULL) {
	$action = filter_input (INPUT_GET, 'action');
	if ($action == NULL) {
		$action = 'testPage';
	}
}

if ($action == 'testPage') {
	include ('../madlibs/testPage.php');
}

else if ($action == 'submit_test_form'){
	include('../madlibs/test_form.php');
}

else if ($action == 'loginHPage'){
	include('../controller/index.php');
}

else if ($action == 'vacation'){
	include ('../madlibs/vacation_form.php');
}

else if ($action == 'submit_vacation_form'){
	include ('../madlibs/vacationPage.php');
}

else if ($action == 'breakup'){
	include ('../madlibs/breakup_form.php');
}

else if ($action == 'submit_break_form'){
	include ('../madlibs/breakupPage.php');
}

else if ($action == 'allme'){
	include ('../madlibs/allme_form.php');
}

else if ($action == 'submit_allme_form'){
	include ('../madlibs/allmePage.php');
}

else if ($action == 'phpclass'){
	include ('../madlibs/phpclass_form.php');
}

else if ($action == 'submit_phpclass_form'){
	include ('../madlibs/phpclassPage.php');
}
?>