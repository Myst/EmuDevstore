<?php
/**
* WoltLab Community Framework
* Template: contact
* Compiled at: Tue, 13 Aug 2013 11:11:22 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'contact';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginFunctionCounter'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionCounter.class.php');
$this->pluginObjects['TemplatePluginFunctionCounter'] = new TemplatePluginFunctionCounter;
}
?><?php
$outerTemplateName91f28efe131e847375046ef726561746fa224c43 = $this->v['tpl']['template'];
$this->includeTemplate("documentHeader", array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName91f28efe131e847375046ef726561746fa224c43;
$this->v['tpl']['includedTemplates']["documentHeader"] = 1;
?>
<head>
	<title>Kontaktformular - <?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langce564ccf09be457f22378bc55fc00a47071848f9 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langce564ccf09be457f22378bc55fc00a47071848f9, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></title>
	<?php
$outerTemplateNamef012fce108a57258d5747aac7b6d238c53f5b690 = $this->v['tpl']['template'];
$this->includeTemplate('headInclude', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateNamef012fce108a57258d5747aac7b6d238c53f5b690;
$this->v['tpl']['includedTemplates']['headInclude'] = 1;
?>
</head>
<body<?php if (isset($this->v['templateName'])) { ?> id="tpl<?php echo StringUtil::encodeHTML(ucfirst($this->v['templateName'])); ?>"<?php } ?>>
	
<?php
$outerTemplateName2e4d5c3ff3fe6683a682aea5a9c5d1151067efd0 = $this->v['tpl']['template'];
$this->includeTemplate('header', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName2e4d5c3ff3fe6683a682aea5a9c5d1151067efd0;
$this->v['tpl']['includedTemplates']['header'] = 1;
?>
	
<div id="main">
	
	<ul class="breadCrumbs">
		<li><a href="index.php?page=Index<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('indexS.png'); ?>" alt="" /> <span><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langd294d90cb74d061e13dddb50ab67ba4dc7356913 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langd294d90cb74d061e13dddb50ab67ba4dc7356913, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></span></a> &raquo;</li>
	</ul>
	
	<div class="mainHeadline">
		<img src="<?php echo StyleManager::getStyle()->getIconPath('contactL.png'); ?>" alt="" /> 
		<div class="headlineContainer">
			<h2>Kontaktformular</h2>
			<p></p>
		</div>
	</div>
	
	<?php if (isset($this->v['userMessages'])) { ?><?php echo $this->v['userMessages']; ?><?php } ?>
	
	<?php if ($this->v['errorField']) { ?>
		<p class="error">Ihre Angaben sind ungültig. Bitte überprüfen Sie die markierten Eingabefelder.</p>
	<?php } ?>
	
	<form method="post" action="index.php?form=Contact">
		<div class="border content">
			<div class="container-1">
				
				<?php if ( ! $this->v['this']->user->userID) { ?>
					<fieldset>
						<legend>Benutzerdaten</legend>

						<div class="formElement<?php if ($this->v['errorField'] == 'username') { ?> formError<?php } ?>">
							<div class="formFieldLabel">
								<label for="username">Name</label>
							</div>
							<div class="formField">
								<input type="text" class="inputText" name="username" value="<?php echo StringUtil::encodeHTML($this->v['username']); ?>" id="username" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" />
								<?php if ($this->v['errorField'] == 'username') { ?>
									<p class="innerError">
										<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
									</p>
								<?php } ?>
							</div>
						</div>

						<div class="formElement<?php if ($this->v['errorField'] == 'email') { ?> formError<?php } ?>">
							<div class="formFieldLabel">
								<label for="email">Ihre E-Mail-Adresse</label>
							</div>
							<div class="formField">
								<input type="text" class="inputText" name="email" value="<?php echo StringUtil::encodeHTML($this->v['email']); ?>" id="email" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" />
								<?php if ($this->v['errorField'] == 'email') { ?>
									<p class="innerError">
										<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
										<?php if ($this->v['errorType'] == 'notValid') { ?>Sie haben eine ungültige E-Mail-Adresse eingegeben.<?php } ?>
									</p>
								<?php } ?>
							</div>
						</div>
					</fieldset>
				<?php } ?>
				
				<fieldset>
					<legend>Nachricht</legend>
					
					<div class="formElement<?php if ($this->v['errorField'] == 'subject') { ?> formError<?php } ?>">
						<div class="formFieldLabel">
							<label for="subject">Betreff</label>
						</div>
						<div class="formField">
							<input type="text" class="inputText" name="subject" value="<?php echo StringUtil::encodeHTML($this->v['subject']); ?>" id="subject" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" />
							<?php if ($this->v['errorField'] == 'subject') { ?>
								<p class="innerError">
									<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
								</p>
							<?php } ?>
						</div>
					</div>

					<div class="formElement<?php if ($this->v['errorField'] == 'message') { ?> formError<?php } ?>">
						<div class="formFieldLabel">
							<label for="message">Nachricht</label>
						</div>
						<div class="formField">
							<textarea rows="15" cols="40" name="message" id="message" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>"><?php echo StringUtil::encodeHTML($this->v['message']); ?></textarea>
							<?php if ($this->v['errorField'] == 'message') { ?>
								<p class="innerError">
									<?php if ($this->v['errorType'] == 'empty') { ?>Bitte füllen Sie dieses Eingabefeld aus.<?php } ?>
								</p>
							<?php } ?>
						</div>
					</div>
				</fieldset>
				
				<?php if (isset($this->v['additionalFields'])) { ?><?php echo $this->v['additionalFields']; ?><?php } ?>
				
				<?php
$outerTemplateName92bf52eac083ac3ff29452c9ecd9efcaff79823c = $this->v['tpl']['template'];
$this->includeTemplate('captcha', array(), (1 ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName92bf52eac083ac3ff29452c9ecd9efcaff79823c;
$this->v['tpl']['includedTemplates']['captcha'] = 1;
?>
			</div>
		</div>
		
		<div class="formSubmit">
			<input type="submit" name="send" accesskey="s" value="Absenden" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" />
			<input type="reset" name="reset" accesskey="r" value="Zurücksetzen" tabindex="<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('name' => 'tabindex'), $this); ?>" />
			<?php echo SID_INPUT_TAG; ?>
		</div>
	</form>
</div>
	
<?php
$outerTemplateName665d09e3a46709b01c227a561f2c8ce052c6a03f = $this->v['tpl']['template'];
$this->includeTemplate('footer', array(), (false ? 1 : 0));
$this->v['tpl']['template'] = $outerTemplateName665d09e3a46709b01c227a561f2c8ce052c6a03f;
$this->v['tpl']['includedTemplates']['footer'] = 1;
?>
</body>
</html>