<?php
/*
Name: 			Newsletter Subscribe
Written by: 	Okler Themes - (http://www.okler.net)
Version: 		3.7.0
*/

require_once('mailchimp/mailchimp.php');

// Step 1 - Set the apiKey - How get your Mailchimp API KEY - http://kb.mailchimp.com/article/where-can-i-find-my-api-key
$apiKey 	= '7bbcd6471f955ce2e02c59c44a5833e3-us10';

// Step 2 - Set the listId - How to get your Mailchimp LIST ID - http://kb.mailchimp.com/article/how-can-i-find-my-list-id
$listId 	= 'e03c6a858c';

// Get Name and split it if possible
$name = $_POST['name'];
$split_names = explode(' ', $name, 2);
$fName = $split_names[0];
$lName = '';
if (count($split_names) > 1) {
	$lName = $split_names[1];
}

// Step 3 (Optional) - Vars - More Information - http://kb.mailchimp.com/merge-tags/using/getting-started-with-merge-tags
$mergeVars  = array('FNAME'=>$fName, 'LNAME'=>$lName);

$MailChimp = new \Drewm\MailChimp($apiKey);

$result = $MailChimp->call('lists/subscribe', array(
                'id'                => $listId,
                'email'             => array('email'=>$_POST['email']),
                'merge_vars'        => $mergeVars,
                'double_optin'      => false,
                'update_existing'   => true,
                'replace_interests' => false,
                'send_welcome'      => true,
            ));

if (in_array('error', $result)) {
    $arrResult = array ('response'=>'error','message'=>$result['error']);
} else {
    $arrResult = array ('response'=>'success');
}

echo json_encode($arrResult);