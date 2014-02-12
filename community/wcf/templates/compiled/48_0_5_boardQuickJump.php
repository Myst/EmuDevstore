<?php
/**
* WoltLab Community Framework
* Template: boardQuickJump
* Compiled at: Tue, 13 Aug 2013 11:10:48 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'boardQuickJump';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginFunctionHtmloptions'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionHtmloptions.class.php');
$this->pluginObjects['TemplatePluginFunctionHtmloptions'] = new TemplatePluginFunctionHtmloptions;
}
?><form method="get" action="index.php" class="quickJump">
	<div>
		<input type="hidden" name="page" value="Board" />
		<select name="boardID" onchange="if (this.options[this.selectedIndex].value != 0) this.form.submit()">
			<option value="0">Bitte wählen:</option>
			<option value="0">-----------------------</option>
			<?php echo $this->pluginObjects['TemplatePluginFunctionHtmloptions']->execute(array('options' => $this->v['boardQuickJumpOptions'], 'selected' => $this->v['board']->boardID, 'disableEncoding' => true), $this); ?>
		</select>
		
		<?php echo SID_INPUT_TAG; ?>
		<input type="image" class="inputImage" src="<?php echo StyleManager::getStyle()->getIconPath('submitS.png'); ?>" alt="Absenden" />
	</div>
</form>