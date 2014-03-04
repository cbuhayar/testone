<html>
<body>
<?php
  define('_VALID_INCLUDE', 1);
  define('DOC_ROOT', str_replace('\\', '/', dirname(dirname(__FILE__))) . '/');
  define('INCLUDES', DOC_ROOT . 'includes/');
  define('CLASSES', INCLUDES . 'classes/');
  define('PEAR', CLASSES . 'PEAR/');
//   include($_SERVER['DOCUMENT_ROOT'] . '/includes/classes/email.php');
//  ini_set('include_path', '.' . PATH_SEPARATOR . '/includes/classes/PEAR/');
//  ini_set('include_path', PATH_SEPARATOR . '/includes/classes/PEAR');

    include($_SERVER['DOCUMENT_ROOT'] . '/includes/classes/email.php');
//     require_once('email.php');  //Commented out b/c not working locally on bHs

    echo 'Action: ' . $action;
    if ($action == 'process') {
       $email =& new Email;
       $email->SetRecipient('test@test.com');
       $email->SetBlindCopy('test@test.com');
       $email->SetSubject('Test message');
       $email->SetMailer('Website mail program'); // this is optional but helpful
       $email->SetFrom('Website Mailer <test@test.com>');
       $email->SetText('This email should only be sent if the form is submitted.');
       $results = $email->SendMail();
       echo $results ? 'message sent' : 'error sending message';
    }
?>

    <form name="contact_form" method="post" action="/email_test/test.php">
        <input type="hidden" name="action" value="process" />
            <table style="margin-bottom: 0;">
                                <tr>
                  <td width="150">Type of request<span class="required">&nbsp;*</span></td>
                  <td>

                    <select name="Request">
                      <option selected value="comment">comment or question</option>
                      <option value="quote">website quote</option>
                    </select></td>
                </tr>
                <tr>
                  <td>Name<span class="required">&nbsp;*</span></td>

                  <td><input type="text" name="Name" /></td>
                </tr>
                <tr>
                  <td>Email<span class="required">&nbsp;*</span></td>
                  <td><input type="text" name="Email" /></td>
                </tr>
                <tr>
                  <td>City</td>

                  <td><input type="text" name="City" /></td>
                </tr>
                <tr>
                  <td>State</td>
                  <td><input type="text" name="State" /></td>
                </tr>
                <tr>
                  <td>Phone<span class="required">&nbsp;*</span></td>

                  <td><input type="text" name="Phone" size="12" maxlength="12" /></td>
                </tr>
                <tr>
                  <td>Comment<span class="required">&nbsp;*</span></td>
                  <td><textarea name="Comment" cols="40" rows="6"></textarea></td>
                </tr>
                <tr>

                    <td><input type="submit" name="Submit" value="Submit" /></td>
					<td>&nbsp;</td>
				</tr>
            </table>
		</form>


</body>
</html>