<?php
/**
* WoltLab Community Framework
* Template: messageFormSettings
* Compiled at: Tue, 13 Aug 2013 11:30:44 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'messageFormSettings';
?>
<div id="settings">
	<fieldset class="noJavaScript">
		<legend class="noJavaScript">Einstellungen</legend>
		
			<div class="formCheckBox">
			<?php if ($this->v['canUseBBCodes']) { ?>
				<div class="formField">
					<label><input type="checkbox" name="parseURL" value="1" <?php if ($this->v['parseURL'] == 1) { ?>checked="checked" <?php } ?>/> URLs automatisch erkennen</label>
				</div>
				<div class="formFieldDesc">
					<p>Internet-Adressen werden automatisch erkannt und umgewandelt.</p>
				</div>
			<?php } ?>
			<?php if (MODULE_SMILEY == 1 && $this->v['canUseSmilies']) { ?>
				<div class="formField">
					<label><input type="checkbox" name="enableSmilies" value="1" <?php if ($this->v['enableSmilies'] == 1) { ?>checked="checked" <?php } ?>/> Darstellung von Smileys aktivieren</label>
				</div>
				<div class="formFieldDesc">
					<p>Smiley-Code wird in Ihrem Beitrag automatisch als Smiley-Grafik dargestellt.</p>
				</div>
			<?php } ?>
			<?php if ($this->v['canUseHtml']) { ?>
				<div class="formField">
					<label><input type="checkbox" name="enableHtml" value="1" <?php if ($this->v['enableHtml'] == 1) { ?>checked="checked" <?php } ?>/> Darstellung von HTML aktivieren</label>
				</div>
				<div class="formFieldDesc">
					<p>Wenn Sie diese Option aktiviert haben, können Sie HTML zur Formatierung verwenden.</p>
				</div>
			<?php } ?>
			<?php if ($this->v['canUseBBCodes']) { ?>
				<div class="formField">
					<label><input type="checkbox" name="enableBBCodes" value="1" <?php if ($this->v['enableBBCodes'] == 1) { ?>checked="checked" <?php } ?>/> Darstellung von BBCodes aktivieren</label>
				</div>
				<div class="formFieldDesc">
					<p>Sie können BBCodes zur Formatierung nutzen, sofern diese Option aktiviert ist.</p>
				</div>
			<?php } ?>
			<?php if (defined('MODULE_USER_SIGNATURE') && MODULE_USER_SIGNATURE && $this->v['showSignatureSetting'] && $this->v['this']->user->userID) { ?>
				<div class="formField">
					<label><input type="checkbox" name="showSignature" value="1" <?php if ($this->v['showSignature'] == 1) { ?>checked="checked" <?php } ?>/> Signatur anzeigen</label>
				</div>
				<div class="formFieldDesc">
					<p>Die im Profil eingestellte Signatur wird an diese Nachricht angehängt.</p>
				</div>
			<?php } ?>
			<?php if (isset($this->v['additionalSettings'])) { ?><?php echo $this->v['additionalSettings']; ?><?php } ?>
			</div>
		
	</fieldset>
</div>

<script type="text/javascript">
	//<![CDATA[
	tabbedPane.addTab('settings', false);
	//]]>
</script>