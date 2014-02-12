<?php
/**
* WoltLab Community Framework
* language: en
* encoding: UTF-8
* category: wbb.thread
* generated at Tue, 13 Aug 2013 17:19:26 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wbb.thread.button.reply'] = 'Reply';
$this->items[$this->languageID]['wbb.thread.button.replyWithQuotes'] = '"Reply" + (this.count > 0 ? " ("+this.count+" Quote"+(this.count > 1 ? "s" : "")+")" : "")';
$this->items[$this->languageID]['wbb.thread.deletedPost'] = 'This post{if $post->subject} &quot;{$post->subject}&quot;{/if} by &quot;{$post->username}&quot; ({@$post->time|time}) has been deleted by {if $post->userID == $post->deletedByID}the author himself{else}user &quot;{$post->deletedBy}&quot;{/if} ({@$post->deleteTime|time}){if $post->deleteReason} with the following reason: {$post->deleteReason}{/if}';
$this->dynamicItems[$this->languageID]['wbb.thread.deletedPost'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierTime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierTime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierTime\'] = new TemplatePluginModifierTime;
}
?>This post<?php if ($this->v[\'post\']->subject) { ?> &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->subject); ?>&quot;<?php } ?> by &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&quot; (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->time), $this); ?>) has been deleted by <?php if ($this->v[\'post\']->userID == $this->v[\'post\']->deletedByID) { ?>the author himself<?php } else { ?>user &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->deletedBy); ?>&quot;<?php } ?> (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->deleteTime), $this); ?>)<?php if ($this->v[\'post\']->deleteReason) { ?> with the following reason: <?php echo StringUtil::encodeHTML($this->v[\'post\']->deleteReason); ?><?php } ?>';
$this->items[$this->languageID]['wbb.thread.feed'] = 'Feed of this thread';
$this->items[$this->languageID]['wbb.thread.ignoredPost'] = 'This post{if $post->subject} &quot;{$post->subject}&quot;{/if} by: {$post->username} ({@$post->time|time}) is hidden, because you ignore user {$post->username}.';
$this->dynamicItems[$this->languageID]['wbb.thread.ignoredPost'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierTime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierTime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierTime\'] = new TemplatePluginModifierTime;
}
?>This post<?php if ($this->v[\'post\']->subject) { ?> &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->subject); ?>&quot;<?php } ?> by: <?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?> (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->time), $this); ?>) is hidden, because you ignore user <?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>.';
$this->items[$this->languageID]['wbb.thread.ipAddress'] = 'IP address of this post: {$ipAddress}';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress'] = 'IP address of this post: <?php echo StringUtil::encodeHTML($this->v[\'ipAddress\']); ?>';
$this->items[$this->languageID]['wbb.thread.ipAddress.otherAddresses'] = 'Other IP addresses of: &quot;{$post->username}&quot;';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress.otherAddresses'] = 'Other IP addresses of: &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&quot;';
$this->items[$this->languageID]['wbb.thread.ipAddress.otherUsers'] = 'Other users of the IP address &quot;{$ipAddress.ipAddress}&quot;';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress.otherUsers'] = 'Other users of the IP address &quot;<?php echo StringUtil::encodeHTML($this->v[\'ipAddress\'][\'ipAddress\']); ?>&quot;';
$this->items[$this->languageID]['wbb.thread.ipAddress.title'] = 'IP Address of: &quot;{$post->username}&quot;';
$this->dynamicItems[$this->languageID]['wbb.thread.ipAddress.title'] = 'IP Address of: &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->username); ?>&quot;';
$this->items[$this->languageID]['wbb.thread.markAsReadByDoubleClick'] = 'Mark thread as read by double click';
$this->items[$this->languageID]['wbb.thread.permalink'] = 'Permalink to post #{#$startIndex}';
$this->dynamicItems[$this->languageID]['wbb.thread.permalink'] = 'Permalink to post #<?php echo StringUtil::formatNumeric($this->v[\'startIndex\']); ?>';
$this->items[$this->languageID]['wbb.thread.post.button.edit'] = 'Edit';
$this->items[$this->languageID]['wbb.thread.post.button.quote'] = 'Quote';
$this->items[$this->languageID]['wbb.thread.post.button.quoteMultiple'] = '"Quote" + (this.data[id]["quotes"] > 0 ? " ("+this.data[id]["quotes"]+")" : "")';
$this->items[$this->languageID]['wbb.thread.post.button.report'] = 'Report';
$this->items[$this->languageID]['wbb.thread.post.deleteNote'] = 'Deleted by {if $post->userID == $post->deletedByID}the author himself{else} &quot;{$post->deletedBy}&quot;{/if} ({@$post->deleteTime|time}){if $post->deleteReason}: {$post->deleteReason}{/if}
		{if THREAD_EMPTY_RECYCLE_BIN_CYCLE > 0}<br />This post will be deleted finally in {@$post->deleteTime+THREAD_EMPTY_RECYCLE_BIN_CYCLE*86400|datediff}.{/if}';
$this->dynamicItems[$this->languageID]['wbb.thread.post.deleteNote'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierTime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierTime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierTime\'] = new TemplatePluginModifierTime;
}
if (!isset($this->pluginObjects[\'TemplatePluginModifierDatediff\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierDatediff.class.php\');
$this->pluginObjects[\'TemplatePluginModifierDatediff\'] = new TemplatePluginModifierDatediff;
}
?>Deleted by <?php if ($this->v[\'post\']->userID == $this->v[\'post\']->deletedByID) { ?>the author himself<?php } else { ?> &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->deletedBy); ?>&quot;<?php } ?> (<?php echo $this->pluginObjects[\'TemplatePluginModifierTime\']->execute(array($this->v[\'post\']->deleteTime), $this); ?>)<?php if ($this->v[\'post\']->deleteReason) { ?>: <?php echo StringUtil::encodeHTML($this->v[\'post\']->deleteReason); ?><?php } ?>
		<?php if (THREAD_EMPTY_RECYCLE_BIN_CYCLE > 0) { ?><br />This post will be deleted finally in <?php echo $this->pluginObjects[\'TemplatePluginModifierDatediff\']->execute(array($this->v[\'post\']->deleteTime+THREAD_EMPTY_RECYCLE_BIN_CYCLE*86400), $this); ?>.<?php } ?>';
$this->items[$this->languageID]['wbb.thread.post.editNote'] = 'This post has been edited {$post->editCount} times, last edit by &quot;{$post->editor}&quot; ({@$post->lastEditTime|shorttime}){if $post->editReason} with the following reason: {$post->editReason}{/if}';
$this->dynamicItems[$this->languageID]['wbb.thread.post.editNote'] = '<?php
if (!isset($this->pluginObjects[\'TemplatePluginModifierShorttime\'])) {
require_once(WCF_DIR.\'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php\');
$this->pluginObjects[\'TemplatePluginModifierShorttime\'] = new TemplatePluginModifierShorttime;
}
?>This post has been edited <?php echo StringUtil::encodeHTML($this->v[\'post\']->editCount); ?> times, last edit by &quot;<?php echo StringUtil::encodeHTML($this->v[\'post\']->editor); ?>&quot; (<?php echo $this->pluginObjects[\'TemplatePluginModifierShorttime\']->execute(array($this->v[\'post\']->lastEditTime), $this); ?>)<?php if ($this->v[\'post\']->editReason) { ?> with the following reason: <?php echo StringUtil::encodeHTML($this->v[\'post\']->editReason); ?><?php } ?>';
$this->items[$this->languageID]['wbb.thread.post.mark'] = 'Mark post';
$this->items[$this->languageID]['wbb.thread.post.quote.markPostToQuote'] = 'Multi-quote post';
$this->items[$this->languageID]['wbb.thread.post.quote.markTextToQuote'] = 'Multi-quote text';
$this->items[$this->languageID]['wbb.thread.post.quote.quotePostDirectly'] = 'Quote post';
$this->items[$this->languageID]['wbb.thread.post.quote.quoteTextDirectly'] = 'Quote text';
$this->items[$this->languageID]['wbb.thread.post.quote.removeQuotes'] = 'Remove quotes';
$this->items[$this->languageID]['wbb.thread.quickReply'] = 'Quick reply';
$this->items[$this->languageID]['wbb.thread.quickReply.title'] = 'Click here to open or close quick reply.';
$this->items[$this->languageID]['wbb.thread.rate'] = 'Rate this thread';
$this->items[$this->languageID]['wbb.thread.search.query'] = 'Search thread';
$this->items[$this->languageID]['wbb.thread.showPost'] = 'Shows the content of this post';
$this->items[$this->languageID]['wbb.thread.similarThreads'] = 'Similar threads';
$this->items[$this->languageID]['wbb.thread.starter'] = '&quot;{$username}&quot; started this thread';
$this->dynamicItems[$this->languageID]['wbb.thread.starter'] = '&quot;<?php echo StringUtil::encodeHTML($this->v[\'username\']); ?>&quot; started this thread';
$this->items[$this->languageID]['wbb.thread.subscribe'] = 'Add to favorites';
$this->items[$this->languageID]['wbb.thread.unsubscribe'] = 'Remove from favorites';
$this->items[$this->languageID]['wbb.thread.usersOnline'] = '{$usersOnlineTotal} {if $usersOnlineTotal == 1}user apart from you is{else}users apart from you are{/if} browsing this thread:';
$this->dynamicItems[$this->languageID]['wbb.thread.usersOnline'] = '<?php echo StringUtil::encodeHTML($this->v[\'usersOnlineTotal\']); ?> <?php if ($this->v[\'usersOnlineTotal\'] == 1) { ?>user apart from you is<?php } else { ?>users apart from you are<?php } ?> browsing this thread:';
?>