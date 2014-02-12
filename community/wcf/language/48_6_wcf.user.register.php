<?php
/**
* WoltLab Community Framework
* language: en
* encoding: UTF-8
* category: wcf.user.register
* generated at Tue, 13 Aug 2013 11:36:41 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.user.register.activation'] = 'Finish registration';
$this->items[$this->languageID]['wcf.user.register.activation.code'] = '9-digit activation code';
$this->items[$this->languageID]['wcf.user.register.activation.error.code.notValid'] = 'You have entered an invalid activation code. Click <a href="index.php?page=Register&amp;action={if $action == \'activate\'}newActivationCode{else}newReactivationCode{/if}{@SID_ARG_2ND}">here</a> to get a new activation code.';
$this->dynamicItems[$this->languageID]['wcf.user.register.activation.error.code.notValid'] = 'You have entered an invalid activation code. Click <a href="index.php?page=Register&amp;action=<?php if ($this->v[\'action\'] == \'activate\') { ?>newActivationCode<?php } else { ?>newReactivationCode<?php } ?><?php echo SID_ARG_2ND; ?>">here</a> to get a new activation code.';
$this->items[$this->languageID]['wcf.user.register.activation.error.userID.notValid'] = 'You have entered an invalid user ID.';
$this->items[$this->languageID]['wcf.user.register.activation.redirect'] = 'Your user account has been successfully enabled. You can now login with your username.';
$this->items[$this->languageID]['wcf.user.register.activation.userID'] = 'User ID';
$this->items[$this->languageID]['wcf.user.register.awaitActivation'] = 'Thank you for registering, {$username}. Your account data will be checked by an administrator shortly.<br />
As soon as your account has been enabled, you will get a confirmation e-mail.';
$this->dynamicItems[$this->languageID]['wcf.user.register.awaitActivation'] = 'Thank you for registering, <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>. Your account data will be checked by an administrator shortly.<br />
As soon as your account has been enabled, you will get a confirmation e-mail.';
$this->items[$this->languageID]['wcf.user.register.confirmEmail.description'] = 'Please confirm your e-mail address!';
$this->items[$this->languageID]['wcf.user.register.confirmPassword.description'] = 'Please confirm your password!';
$this->items[$this->languageID]['wcf.user.register.disclaimer'] = '<p>The registration and use of this forum is completely free for you. Press &quot;Accept&quot; if you agree with the rules mentioned below. You will then be able to register.</p>
				
<p>Even though administrators and moderators from {lang}{PAGE_TITLE}{/lang} try to delete or edit all the unwanted posts, it is impossible for them to check all the posts. All the posts express the opinion of the author, the owners of {lang}{PAGE_TITLE}{/lang} and WoltLab GmbH (the developers of Burning Board) cannot be held responsible for the content of those posts.</p>

<p>By registering, you agree not to post messages that are vulgar, impolite, disrespectful or that express (extreme) political views or (verbal) law offences.</p>

<p>Additionally, the Administrators and Moderators of this board can edit or even delete your account for any reason.</p>

<p>Enjoy your stay at {lang}{PAGE_TITLE}{/lang}!</p>';
$this->dynamicItems[$this->languageID]['wcf.user.register.disclaimer'] = '<p>The registration and use of this forum is completely free for you. Press &quot;Accept&quot; if you agree with the rules mentioned below. You will then be able to register.</p>
				
<p>Even though administrators and moderators from <?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_lange0ec4b077bbb77da11f263e1459bf87019885812 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lange0ec4b077bbb77da11f263e1459bf87019885812, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?> try to delete or edit all the unwanted posts, it is impossible for them to check all the posts. All the posts express the opinion of the author, the owners of <?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langcb74daa3c40b1452ec411504fe0c1956a24acb20 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langcb74daa3c40b1452ec411504fe0c1956a24acb20, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?> and WoltLab GmbH (the developers of Burning Board) cannot be held responsible for the content of those posts.</p>

<p>By registering, you agree not to post messages that are vulgar, impolite, disrespectful or that express (extreme) political views or (verbal) law offences.</p>

<p>Additionally, the Administrators and Moderators of this board can edit or even delete your account for any reason.</p>

<p>Enjoy your stay at <?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_lange858a7941579257288090be5fb4c2871a1ec2139 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lange858a7941579257288090be5fb4c2871a1ec2139, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>!</p>';
$this->items[$this->languageID]['wcf.user.register.disclaimer.button.accept'] = 'Accept';
$this->items[$this->languageID]['wcf.user.register.disclaimer.button.decline'] = 'Decline';
$this->items[$this->languageID]['wcf.user.register.disclaimer.title'] = 'Disclaimer';
$this->items[$this->languageID]['wcf.user.register.email.description'] = 'Please enter your e-mail address!';
$this->items[$this->languageID]['wcf.user.register.error.disabled'] = 'The registration is currently disabled.';
$this->items[$this->languageID]['wcf.user.register.error.userAlreadyEnabled'] = 'This user has already been enabled.';
$this->items[$this->languageID]['wcf.user.register.invitation'] = 'Register now!';
$this->items[$this->languageID]['wcf.user.register.needActivation'] = 'Thank you for registering, {$username}. An e-mail with your account data has been sent to {$email}.<br />
To complete your registration you need to follow the link in this e-mail.';
$this->dynamicItems[$this->languageID]['wcf.user.register.needActivation'] = 'Thank you for registering, <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>. An e-mail with your account data has been sent to <?php echo StringUtil::encodeHTML($this->v[\'email\']); ?>.<br />
To complete your registration you need to follow the link in this e-mail.';
$this->items[$this->languageID]['wcf.user.register.needActivation.mail'] = 'Dear {$username},

thank you for registering at {PAGE_TITLE}. To enable your registration, you have to take one last step.

Please click on the following link to finish your registration:
{PAGE_URL}/index.php?page=Register&action=a&u={$userID}&a={$activationCode}

**** The link above does not work? ****
If the link above is not working, you should type the following address into your browser\'s location-bar:
{PAGE_URL}/index.php?page=Register&action=a

Please make sure that there are no blanks in the address.
Please enter the following information on the displayed page.

Your user id: 			{$userID}
Your activation code: 	{$activationCode}

If you have not registered at {PAGE_TITLE}, you can ignore this e-mail.

Please send an e-mail to a member of our support team, if you have problems with your activation.
-> {MAIL_ADMIN_ADDRESS}

Have a nice day,
Your {PAGE_TITLE} team';
$this->dynamicItems[$this->languageID]['wcf.user.register.needActivation.mail'] = 'Dear <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>,

thank you for registering at <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>. To enable your registration, you have to take one last step.

Please click on the following link to finish your registration:
<?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?page=Register&action=a&u=<?php echo StringUtil::encodeHTML($this->v[\'userID\']); ?>&a=<?php echo StringUtil::encodeHTML($this->v[\'activationCode\']); ?>

**** The link above does not work? ****
If the link above is not working, you should type the following address into your browser\'s location-bar:
<?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?page=Register&action=a

Please make sure that there are no blanks in the address.
Please enter the following information on the displayed page.

Your user id: 			<?php echo StringUtil::encodeHTML($this->v[\'userID\']); ?>
Your activation code: 	<?php echo StringUtil::encodeHTML($this->v[\'activationCode\']); ?>

If you have not registered at <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>, you can ignore this e-mail.

Please send an e-mail to a member of our support team, if you have problems with your activation.
-> <?php echo StringUtil::encodeHTML(MAIL_ADMIN_ADDRESS); ?>

Have a nice day,
Your <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?> team';
$this->items[$this->languageID]['wcf.user.register.needActivation.mail.subject'] = 'Enable your registration at {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.user.register.needActivation.mail.subject'] = 'Enable your registration at <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.user.register.needsActivation'] = 'Your account is not activated yet. Please <a href="index.php?page=Register&amp;action=enable{@SID_ARG_2ND}">finish activation</a> first, to be able to use all features of this site.';
$this->dynamicItems[$this->languageID]['wcf.user.register.needsActivation'] = 'Your account is not activated yet. Please <a href="index.php?page=Register&amp;action=enable<?php echo SID_ARG_2ND; ?>">finish activation</a> first, to be able to use all features of this site.';
$this->items[$this->languageID]['wcf.user.register.newActivationCode'] = 'Get new activation code';
$this->items[$this->languageID]['wcf.user.register.newActivationCode.email.description'] = 'You only need to enter a new e-mail address here, if you like to get the activation e-mail sent to this address, instead of the old address. An empty field means the e-mail will be sent to your old address.';
$this->items[$this->languageID]['wcf.user.register.newActivationCode.success'] = 'An e-mail with your new activation code has been sent to {$email}.';
$this->dynamicItems[$this->languageID]['wcf.user.register.newActivationCode.success'] = 'An e-mail with your new activation code has been sent to <?php echo StringUtil::encodeHTML($this->v[\'email\']); ?>.';
$this->items[$this->languageID]['wcf.user.register.notification.mail'] = 'Dear Administrator,

the user {$username} has registered at {PAGE_TITLE}.';
$this->dynamicItems[$this->languageID]['wcf.user.register.notification.mail'] = 'Dear Administrator,

the user <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?> has registered at <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>.';
$this->items[$this->languageID]['wcf.user.register.notification.mail.subject'] = 'New registration at {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.user.register.notification.mail.subject'] = 'New registration at <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.user.register.password.description'] = '{if REGISTER_ENABLE_PASSWORD_SECURITY_CHECK && REGISTER_PASSWORD_MIN_LENGTH}The password has to be {REGISTER_PASSWORD_MIN_LENGTH} letters long.{else}A safe password should be at least 8 characters long.{/if}';
$this->dynamicItems[$this->languageID]['wcf.user.register.password.description'] = '<?php if (REGISTER_ENABLE_PASSWORD_SECURITY_CHECK && REGISTER_PASSWORD_MIN_LENGTH) { ?>The password has to be <?php echo StringUtil::encodeHTML(REGISTER_PASSWORD_MIN_LENGTH); ?> letters long.<?php } else { ?>A safe password should be at least 8 characters long.<?php } ?>';
$this->items[$this->languageID]['wcf.user.register.success'] = 'Thank you for registration, {$username}. Your registration is now completely finished.';
$this->dynamicItems[$this->languageID]['wcf.user.register.success'] = 'Thank you for registration, <?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>. Your registration is now completely finished.';
$this->items[$this->languageID]['wcf.user.register.title'] = 'Register';
$this->items[$this->languageID]['wcf.user.register.username.description'] = 'The username has to be at least {REGISTER_USERNAME_MIN_LENGTH} and at most {REGISTER_USERNAME_MAX_LENGTH} letters long.';
$this->dynamicItems[$this->languageID]['wcf.user.register.username.description'] = 'The username has to be at least <?php echo StringUtil::encodeHTML(REGISTER_USERNAME_MIN_LENGTH); ?> and at most <?php echo StringUtil::encodeHTML(REGISTER_USERNAME_MAX_LENGTH); ?> letters long.';
$this->items[$this->languageID]['wcf.user.register.welcome'] = 'Dear visitor, welcome to {lang}{PAGE_TITLE}{/lang}. 
If this is your first visit here, please <a href="index.php?page=Help{@SID_ARG_2ND}">read the Help</a>. It explains in detail how this page works. 
To use all features of this page, you should consider registering. 
Please use the <a href="index.php?page=Register{@SID_ARG_2ND}">registration form</a>, to register here or <a href="index.php?page=Help&amp;item=user.login{@SID_ARG_2ND}">read more information</a> about the registration process. 
If you are already registered, please <a href="index.php?form=UserLogin{@SID_ARG_2ND}">login here</a>.';
$this->dynamicItems[$this->languageID]['wcf.user.register.welcome'] = 'Dear visitor, welcome to <?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langbc407b39e2fb7e61a989dd3f75701ee777231a80 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langbc407b39e2fb7e61a989dd3f75701ee777231a80, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>. 
If this is your first visit here, please <a href="index.php?page=Help<?php echo SID_ARG_2ND; ?>">read the Help</a>. It explains in detail how this page works. 
To use all features of this page, you should consider registering. 
Please use the <a href="index.php?page=Register<?php echo SID_ARG_2ND; ?>">registration form</a>, to register here or <a href="index.php?page=Help&amp;item=user.login<?php echo SID_ARG_2ND; ?>">read more information</a> about the registration process. 
If you are already registered, please <a href="index.php?form=UserLogin<?php echo SID_ARG_2ND; ?>">login here</a>.';
?>