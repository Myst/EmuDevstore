<?php
/**
* WoltLab Community Framework
* language: de
* encoding: UTF-8
* category: wcf.attachment
* generated at Tue, 13 Aug 2013 11:30:43 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.attachment.add'] = 'Dateianhänge hinzufügen';
$this->items[$this->languageID]['wcf.attachment.addUploadField'] = 'Uploadfeld hinzufügen';
$this->items[$this->languageID]['wcf.attachment.attachmentID'] = 'ID';
$this->items[$this->languageID]['wcf.attachment.attachmentName'] = 'Dateiname';
$this->items[$this->languageID]['wcf.attachment.attachmentSize'] = 'Größe';
$this->items[$this->languageID]['wcf.attachment.attachments'] = 'Dateianhänge';
$this->items[$this->languageID]['wcf.attachment.button.upload'] = 'Hochladen';
$this->items[$this->languageID]['wcf.attachment.containerType'] = 'Ort';
$this->items[$this->languageID]['wcf.attachment.delete.sure'] = 'Wollen Sie diesen Dateianhang wirklich löschen?';
$this->items[$this->languageID]['wcf.attachment.downloads'] = 'Downloads';
$this->items[$this->languageID]['wcf.attachment.fileType'] = 'Dateityp';
$this->items[$this->languageID]['wcf.attachment.files'] = '&raquo;{$author->username}&laquo; hat folgende Datei{if $attachments.$messageID.files|count > 1}en{/if} angehängt:';
$this->dynamicItems[$this->languageID]['wcf.attachment.files'] = '&raquo;<?php echo StringUtil::encodeHTML($this->v[\'author\']->username); ?>&laquo; hat folgende Datei<?php if (count($this->v[\'attachments\'][$this->v[\'messageID\']][\'files\']) > 1) { ?>en<?php } ?> angehängt:';
$this->items[$this->languageID]['wcf.attachment.images'] = '&raquo;{$author->username}&laquo; hat {if $attachments.$messageID.images|count == 1}folgendes Bild{else}folgende Bilder{/if} angehängt:';
$this->dynamicItems[$this->languageID]['wcf.attachment.images'] = '&raquo;<?php echo StringUtil::encodeHTML($this->v[\'author\']->username); ?>&laquo; hat <?php if (count($this->v[\'attachments\'][$this->v[\'messageID\']][\'images\']) == 1) { ?>folgendes Bild<?php } else { ?>folgende Bilder<?php } ?> angehängt:';
$this->items[$this->languageID]['wcf.attachment.info'] = '({@$attachment->attachmentSize|filesize} - <b>{#$attachment->downloads}</b> mal heruntergeladen{if $attachment->downloads > 0} - zuletzt: {@$attachment->lastDownloadTime|shorttime}{/if})';
$this->dynamicItems[$this->languageID]['wcf.attachment.info'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
if (!isset($this->pluginObjects[\'TemplatePluginModifierShorttime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierShorttime\'] = new TemplatePluginModifierShorttime;
}
?>(<?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'attachment\']->attachmentSize), $this); ?> - <b><?php echo StringUtil::formatNumeric($this->v[\'attachment\']->downloads); ?></b> mal heruntergeladen<?php if ($this->v[\'attachment\']->downloads > 0) { ?> - zuletzt: <?php echo $this->pluginObjects[\'TemplatePluginModifierShorttime\']->execute(array($this->v[\'attachment\']->lastDownloadTime), $this); ?><?php } ?>)';
$this->items[$this->languageID]['wcf.attachment.lastDownloadTime'] = 'Letzter Download';
$this->items[$this->languageID]['wcf.attachment.list.count'] = '{#$stats.count} {if $stats.count == 1}Dateianhang{else}Dateianhänge{/if} - {@$stats.size|filesize} - {#$stats.downloads} Download{if $stats.downloads != 1}s{/if}';
$this->dynamicItems[$this->languageID]['wcf.attachment.list.count'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
?><?php echo StringUtil::formatNumeric($this->v[\'stats\'][\'count\']); ?> <?php if ($this->v[\'stats\'][\'count\'] == 1) { ?>Dateianhang<?php } else { ?>Dateianhänge<?php } ?> - <?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'stats\'][\'size\']), $this); ?> - <?php echo StringUtil::formatNumeric($this->v[\'stats\'][\'downloads\']); ?> Download<?php if ($this->v[\'stats\'][\'downloads\'] != 1) { ?>s<?php } ?>';
$this->items[$this->languageID]['wcf.attachment.list.filter'] = 'Filter';
$this->items[$this->languageID]['wcf.attachment.list.filter.filename.contains'] = 'Dateiname enthält';
$this->items[$this->languageID]['wcf.attachment.list.filter.greaterThan'] = 'Dateigröße größer als';
$this->items[$this->languageID]['wcf.attachment.list.filter.isImage'] = 'Nur Bilder anzeigen';
$this->items[$this->languageID]['wcf.attachment.list.filter.period'] = 'Im Zeitraum';
$this->items[$this->languageID]['wcf.attachment.list.filter.period.end'] = 'bis:';
$this->items[$this->languageID]['wcf.attachment.list.filter.period.start'] = 'von:';
$this->items[$this->languageID]['wcf.attachment.list.filter.showThumbnail'] = 'Vorschaugrafiken anzeigen';
$this->items[$this->languageID]['wcf.attachment.list.noAttachments'] = 'Es wurden keine Dateianhänge gefunden.';
$this->items[$this->languageID]['wcf.attachment.list.stats'] = '{#$statsTotal.count} {if $statsTotal.count == 1}Dateianhang{else}Dateianhänge{/if} - {@$statsTotal.size|filesize} - {#$statsTotal.downloads} Download{if $statsTotal.downloads != 1}s{/if}';
$this->dynamicItems[$this->languageID]['wcf.attachment.list.stats'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
?><?php echo StringUtil::formatNumeric($this->v[\'statsTotal\'][\'count\']); ?> <?php if ($this->v[\'statsTotal\'][\'count\'] == 1) { ?>Dateianhang<?php } else { ?>Dateianhänge<?php } ?> - <?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'statsTotal\'][\'size\']), $this); ?> - <?php echo StringUtil::formatNumeric($this->v[\'statsTotal\'][\'downloads\']); ?> Download<?php if ($this->v[\'statsTotal\'][\'downloads\'] != 1) { ?>s<?php } ?>';
$this->items[$this->languageID]['wcf.attachment.moveUp'] = 'Nach vorne bewegen';
$this->items[$this->languageID]['wcf.attachment.upload.error.badImage'] = 'Sie haben ein beschädigtes Bild hochgeladen.';
$this->items[$this->languageID]['wcf.attachment.upload.error.doubleUpload'] = 'Die Datei {$error.attachmentName} wurde bereits hochgeladen.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.doubleUpload'] = 'Die Datei <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> wurde bereits hochgeladen.';
$this->items[$this->languageID]['wcf.attachment.upload.error.fileSize'] = 'Die Datei {$error.attachmentName} ist zu groß.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.fileSize'] = 'Die Datei <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> ist zu groß.';
$this->items[$this->languageID]['wcf.attachment.upload.error.fileSizePHP'] = 'Die Datei {$error.attachmentName} ist zu groß (PHP Limit).';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.fileSizePHP'] = 'Die Datei <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> ist zu groß (PHP Limit).';
$this->items[$this->languageID]['wcf.attachment.upload.error.illegalExtension'] = 'Die Datei {$error.attachmentName} hat eine ungültige Dateiendung.';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.error.illegalExtension'] = 'Die Datei <?php echo StringUtil::encodeHTML($this->v[\'error\'][\'attachmentName\']); ?> hat eine ungültige Dateiendung.';
$this->items[$this->languageID]['wcf.attachment.upload.files'] = 'Sie haben folgende Datei{if $attachments.$containerID|count > 1}en{/if} hochgeladen';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.files'] = 'Sie haben folgende Datei<?php if (count($this->v[\'attachments\'][$this->v[\'containerID\']]) > 1) { ?>en<?php } ?> hochgeladen';
$this->items[$this->languageID]['wcf.attachment.upload.limits'] = 'Maximale Anzahl an Dateianhängen: {#$maxUploads}<br />
				Maximale Dateigröße: {@$maxFileSize|filesize}<br />
				Erlaubte Dateiendungen: {$allowedExtensions}';
$this->dynamicItems[$this->languageID]['wcf.attachment.upload.limits'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierFilesize\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierFilesize.class.php\');
$this->pluginObjects[\'TemplatePluginModifierFilesize\'] = new TemplatePluginModifierFilesize;
}
?>Maximale Anzahl an Dateianhängen: <?php echo StringUtil::formatNumeric($this->v[\'maxUploads\']); ?><br />
				Maximale Dateigröße: <?php echo $this->pluginObjects[\'TemplatePluginModifierFilesize\']->execute(array($this->v[\'maxFileSize\']), $this); ?><br />
				Erlaubte Dateiendungen: <?php echo StringUtil::encodeHTML($this->v[\'allowedExtensions\']); ?>';
$this->items[$this->languageID]['wcf.attachment.uploadTime'] = 'Hochgeladen';
$this->items[$this->languageID]['wcf.attachment.containerType.pm'] = 'Private Nachricht';
$this->items[$this->languageID]['wcf.attachment.containerType.post'] = 'Beitrag';
?>