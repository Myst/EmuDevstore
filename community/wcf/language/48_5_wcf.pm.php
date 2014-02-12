<?php
/**
* WoltLab Community Framework
* language: de
* encoding: UTF-8
* category: wcf.pm
* generated at Tue, 13 Aug 2013 10:14:55 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.pm.addFolder'] = 'Neuen Ordner hinzufügen';
$this->items[$this->languageID]['wcf.pm.addFolder.color'] = 'Farbe:';
$this->items[$this->languageID]['wcf.pm.addFolder.color.blue'] = 'Blau';
$this->items[$this->languageID]['wcf.pm.addFolder.color.green'] = 'Grün';
$this->items[$this->languageID]['wcf.pm.addFolder.color.red'] = 'Rot';
$this->items[$this->languageID]['wcf.pm.addFolder.color.white'] = 'Weiß';
$this->items[$this->languageID]['wcf.pm.addFolder.color.yellow'] = 'Gelb';
$this->items[$this->languageID]['wcf.pm.addFolder.success'] = 'Der neue Ordner wurde erfolgreich angelegt.';
$this->items[$this->languageID]['wcf.pm.author'] = 'Autor';
$this->items[$this->languageID]['wcf.pm.author.system'] = 'System';
$this->items[$this->languageID]['wcf.pm.button.cancel'] = 'Annullieren';
$this->items[$this->languageID]['wcf.pm.button.download'] = 'Herunterladen';
$this->items[$this->languageID]['wcf.pm.button.downloadDialogue'] = 'Konversation herunterladen';
$this->items[$this->languageID]['wcf.pm.button.edit'] = 'Bearbeiten';
$this->items[$this->languageID]['wcf.pm.button.emptyRecycleBin'] = 'Papierkorb leeren';
$this->items[$this->languageID]['wcf.pm.button.forward'] = 'Weiterleiten';
$this->items[$this->languageID]['wcf.pm.button.markAll'] = 'Alle markieren';
$this->items[$this->languageID]['wcf.pm.button.markAsRead'] = 'Als gelesen markieren';
$this->items[$this->languageID]['wcf.pm.button.markAsUnread'] = 'Als ungelesen markieren';
$this->items[$this->languageID]['wcf.pm.button.moveTo'] = 'Verschieben in {literal}{$folder}{/literal}';
$this->dynamicItems[$this->languageID]['wcf.pm.button.moveTo'] = 'Verschieben in {$folder}';
$this->items[$this->languageID]['wcf.pm.button.newMessage'] = 'Neue Nachricht';
$this->items[$this->languageID]['wcf.pm.button.recover'] = 'Wiederherstellen';
$this->items[$this->languageID]['wcf.pm.button.reply'] = 'Antworten';
$this->items[$this->languageID]['wcf.pm.button.replyToAll'] = 'Allen antworten';
$this->items[$this->languageID]['wcf.pm.button.saveAsDraft'] = 'Entwurf speichern';
$this->items[$this->languageID]['wcf.pm.cancel.sure'] = 'Wollen Sie die Nachricht wirklich anullieren?';
$this->items[$this->languageID]['wcf.pm.cancelMarked.sure'] = 'Wollen Sie die markierten Nachrichten wirklich anullieren?';
$this->items[$this->languageID]['wcf.pm.date'] = 'Datum';
$this->items[$this->languageID]['wcf.pm.delete.sure'] = 'Wollen Sie die Nachricht wirklich löschen?';
$this->items[$this->languageID]['wcf.pm.deleteFolder'] = 'Ordner löschen';
$this->items[$this->languageID]['wcf.pm.deleteFolder.success'] = 'Der Ordner wurde erfolgreich gelöscht.';
$this->items[$this->languageID]['wcf.pm.deleteFolder.sure'] = 'Wollen Sie diesen Ordner wirklich löschen?';
$this->items[$this->languageID]['wcf.pm.deleteMarked.sure'] = 'Wollen Sie die markierten Nachrichten wirklich löschen?';
$this->items[$this->languageID]['wcf.pm.dialogue'] = 'Konversation';
$this->items[$this->languageID]['wcf.pm.download.message'] = 'Nachricht von: {$author}
Gesendet: {$date}
An: {$recipient}
Betreff: {$subject}

{$text}';
$this->dynamicItems[$this->languageID]['wcf.pm.download.message'] = 'Nachricht von: <?php echo StringUtil::encodeHTML($this->v[\'author\']); ?>
Gesendet: <?php echo StringUtil::encodeHTML($this->v[\'date\']); ?>
An: <?php echo StringUtil::encodeHTML($this->v[\'recipient\']); ?>
Betreff: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>

<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>';
$this->items[$this->languageID]['wcf.pm.drafts'] = 'Entwürfe';
$this->items[$this->languageID]['wcf.pm.editFolders'] = 'Ordner verwalten';
$this->items[$this->languageID]['wcf.pm.editRules'] = 'Regeln verwalten';
$this->items[$this->languageID]['wcf.pm.emptyRecycleBin.sure'] = 'Wollen Sie den Papierkorb wirklich leeren?';
$this->items[$this->languageID]['wcf.pm.error.addFolder.tooManyFolders'] = 'Sie können keine neuen Ordner mehr anlegen. Sie können maximal nur {#$this->user->getPermission(\'user.pm.maxFolders\')} Ordner anlegen.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.addFolder.tooManyFolders'] = 'Sie können keine neuen Ordner mehr anlegen. Sie können maximal nur <?php echo StringUtil::formatNumeric($this->v[\'this\']->user->getPermission(\'user.pm.maxFolders\')); ?> Ordner anlegen.';
$this->items[$this->languageID]['wcf.pm.error.mailboxIsFull'] = 'Ihr Postfach ist voll. Sie müssen alte Nachrichten löschen, bevor Sie wieder neue Nachrichten erstellen können.';
$this->items[$this->languageID]['wcf.pm.error.recipient.canNotUsePm'] = 'Der Benutzer &raquo;{$error.username}&laquo; kann keine Nachrichten empfangen.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.canNotUsePm'] = 'Der Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&laquo; kann keine Nachrichten empfangen.';
$this->items[$this->languageID]['wcf.pm.error.recipient.doesNotAcceptPm'] = 'Der Benutzer &raquo;{$error.username}&laquo; möchte keine Nachrichten empfangen.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.doesNotAcceptPm'] = 'Der Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&laquo; möchte keine Nachrichten empfangen.';
$this->items[$this->languageID]['wcf.pm.error.recipient.ignoresYou'] = 'Der Benutzer &raquo;{$error.username}&laquo; ignoriert Sie.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.ignoresYou'] = 'Der Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&laquo; ignoriert Sie.';
$this->items[$this->languageID]['wcf.pm.error.recipient.notFound'] = 'Der Benutzer &raquo;{$error.username}&laquo; existiert nicht.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.notFound'] = 'Der Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&laquo; existiert nicht.';
$this->items[$this->languageID]['wcf.pm.error.recipient.onlyAcceptsPmFromBuddies'] = 'Der Benutzer &raquo;{$error.username}&laquo; möchte nur Nachrichten von seinen Freunden empfangen.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.onlyAcceptsPmFromBuddies'] = 'Der Benutzer &raquo;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&laquo; möchte nur Nachrichten von seinen Freunden empfangen.';
$this->items[$this->languageID]['wcf.pm.error.recipient.recipientsMailboxIsFull'] = 'Der Posteingang des Benutzers &raquo;{$error.username}&laquo; ist voll.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.recipientsMailboxIsFull'] = 'Der Posteingang des Benutzers &raquo;<?php echo StringUtil::encodeHTML($this->v[\'error\'][\'username\']); ?>&laquo; ist voll.';
$this->items[$this->languageID]['wcf.pm.error.recipient.tooManyRecipients'] = 'Sie haben zu viele Empfänger gewählt. Das Maximum liegt bei {#$this->getUser()->getPermission(\'user.pm.maxRecipients\')} Empfängern.';
$this->dynamicItems[$this->languageID]['wcf.pm.error.recipient.tooManyRecipients'] = 'Sie haben zu viele Empfänger gewählt. Das Maximum liegt bei <?php echo StringUtil::formatNumeric($this->v[\'this\']->getUser()->getPermission(\'user.pm.maxRecipients\')); ?> Empfängern.';
$this->items[$this->languageID]['wcf.pm.existingFolders'] = 'Bestehende Ordner';
$this->items[$this->languageID]['wcf.pm.feed'] = 'Private Nachrichten abonnieren';
$this->items[$this->languageID]['wcf.pm.feed.description'] = 'Private Nachrichten von der Seite: {lang}{PAGE_TITLE}{/lang}';
$this->dynamicItems[$this->languageID]['wcf.pm.feed.description'] = 'Private Nachrichten von der Seite: <?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_lang9646b642cddccc78bdd87de43eb7deccab270675 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang9646b642cddccc78bdd87de43eb7deccab270675, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>';
$this->items[$this->languageID]['wcf.pm.feed.title'] = '{lang}{PAGE_TITLE}{/lang} - Private Nachrichten';
$this->dynamicItems[$this->languageID]['wcf.pm.feed.title'] = '<?php $this->tagStack[] = array(\'lang\', array()); ob_start(); ?><?php echo StringUtil::encodeHTML(PAGE_TITLE); ?><?php $_langb626b3b8a2ddbdb91d6d33bfdb24bb0b75cbd47f = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langb626b3b8a2ddbdb91d6d33bfdb24bb0b75cbd47f, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?> - Private Nachrichten';
$this->items[$this->languageID]['wcf.pm.filterBySender'] = 'Absender';
$this->items[$this->languageID]['wcf.pm.forward.subject'] = 'FW: {$subject}';
$this->dynamicItems[$this->languageID]['wcf.pm.forward.subject'] = 'FW: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>';
$this->items[$this->languageID]['wcf.pm.forward.text'] = '

[quote=\'{$author}\']
[i]Gesendet: {$date}
An: {$recipients}
Betreff: {$subject}[/i]

{$text}[/quote]';
$this->dynamicItems[$this->languageID]['wcf.pm.forward.text'] = '

[quote=\'<?php echo StringUtil::encodeHTML($this->v[\'author\']); ?>\']
[i]Gesendet: <?php echo StringUtil::encodeHTML($this->v[\'date\']); ?>
An: <?php echo StringUtil::encodeHTML($this->v[\'recipients\']); ?>
Betreff: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>[/i]

<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>[/quote]';
$this->items[$this->languageID]['wcf.pm.from'] = 'Von';
$this->items[$this->languageID]['wcf.pm.inbox'] = 'Posteingang';
$this->items[$this->languageID]['wcf.pm.information'] = 'Nachrichteninformationen';
$this->items[$this->languageID]['wcf.pm.invisibleRecipients'] = 'Unsichtbare Empfänger';
$this->items[$this->languageID]['wcf.pm.markAsReadByDoubleClick'] = 'Nachricht durch Doppelklick als gelesen markieren';
$this->items[$this->languageID]['wcf.pm.markedMessages'] = 'this.count == 1 ? "Eine Nachricht markiert" : this.count+" Nachrichten markiert"';
$this->items[$this->languageID]['wcf.pm.messageFrom'] = 'von';
$this->items[$this->languageID]['wcf.pm.moveMessageTo'] = 'Nachricht verschieben in:';
$this->items[$this->languageID]['wcf.pm.newMessage'] = 'Neue Nachricht erstellen';
$this->items[$this->languageID]['wcf.pm.noMessages'] = 'Dieser Ordner enthält keine Nachrichten.';
$this->items[$this->languageID]['wcf.pm.notification.cancel'] = 'Benachrichtung ausblenden';
$this->items[$this->languageID]['wcf.pm.notification.mail'] = 'Hallo {$recipient},

Sie haben eine neue private Nachricht von {$author} erhalten:
---------------------------------
Betreff: {$subject}
{$text}
---------------------------------

Benutzen Sie diesen Link um direkt zu Ihrem Posteingang zu springen. Dort können Sie auf die neue private Nachricht antworten.
{PAGE_URL}/index.php?page=PMList

Diese E-Mail ist eine automatische Benachrichtigung. BITTE ANTWORTEN SIE NICHT AUF DIESE E-MAIL.

Vielen Dank,
Ihr {PAGE_TITLE} Team';
$this->dynamicItems[$this->languageID]['wcf.pm.notification.mail'] = 'Hallo <?php echo StringUtil::encodeHTML($this->v[\'recipient\']); ?>,

Sie haben eine neue private Nachricht von <?php echo StringUtil::encodeHTML($this->v[\'author\']); ?> erhalten:
---------------------------------
Betreff: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>
<?php echo StringUtil::encodeHTML($this->v[\'text\']); ?>
---------------------------------

Benutzen Sie diesen Link um direkt zu Ihrem Posteingang zu springen. Dort können Sie auf die neue private Nachricht antworten.
<?php echo StringUtil::encodeHTML(PAGE_URL); ?>/index.php?page=PMList

Diese E-Mail ist eine automatische Benachrichtigung. BITTE ANTWORTEN SIE NICHT AUF DIESE E-MAIL.

Vielen Dank,
Ihr <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?> Team';
$this->items[$this->languageID]['wcf.pm.notification.report'] = 'Sie haben {#$this->user->getOutstandingNotifications()|count} ungelesene private Nachricht{if $this->user->getOutstandingNotifications()|count > 1}en{/if}:';
$this->dynamicItems[$this->languageID]['wcf.pm.notification.report'] = 'Sie haben <?php echo StringUtil::formatNumeric(count($this->v[\'this\']->user->getOutstandingNotifications())); ?> ungelesene private Nachricht<?php if (count($this->v[\'this\']->user->getOutstandingNotifications()) > 1) { ?>en<?php } ?>:';
$this->items[$this->languageID]['wcf.pm.notification.subject'] = 'Neue private Nachricht von {$author} auf der Website: {PAGE_TITLE}';
$this->dynamicItems[$this->languageID]['wcf.pm.notification.subject'] = 'Neue private Nachricht von <?php echo StringUtil::encodeHTML($this->v[\'author\']); ?> auf der Website: <?php echo StringUtil::encodeHTML(PAGE_TITLE); ?>';
$this->items[$this->languageID]['wcf.pm.originalMessage'] = 'Ursprüngliche Nachricht';
$this->items[$this->languageID]['wcf.pm.outbox'] = 'Postausgang';
$this->items[$this->languageID]['wcf.pm.profile.sendPM'] = 'Nachricht senden';
$this->items[$this->languageID]['wcf.pm.recipient'] = 'Empfänger';
$this->items[$this->languageID]['wcf.pm.recipientList'] = 'Empfänger:';
$this->items[$this->languageID]['wcf.pm.renameFolders.success'] = 'Die Ordner wurden erfolgreich umbenannt.';
$this->items[$this->languageID]['wcf.pm.reply.subject'] = 'RE: {$subject}';
$this->dynamicItems[$this->languageID]['wcf.pm.reply.subject'] = 'RE: <?php echo StringUtil::encodeHTML($this->v[\'subject\']); ?>';
$this->items[$this->languageID]['wcf.pm.search.folders'] = 'Folgende Ordner durchsuchen';
$this->items[$this->languageID]['wcf.pm.search.folders.all'] = 'Suche in allen Ordnern';
$this->items[$this->languageID]['wcf.pm.search.query'] = 'Nachrichten suchen';
$this->items[$this->languageID]['wcf.pm.search.result.sender'] = 'Private Nachricht von: <a href="index.php?page=User&amp;userID={@$item.message->userID}{@SID_ARG_2ND}">{$item.message->username}</a>';
$this->dynamicItems[$this->languageID]['wcf.pm.search.result.sender'] = 'Private Nachricht von: <a href="index.php?page=User&amp;userID=<?php echo $this->v[\'item\'][\'message\']->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v[\'item\'][\'message\']->username); ?></a>';
$this->items[$this->languageID]['wcf.pm.sortBy'] = 'Sortierung nach';
$this->items[$this->languageID]['wcf.pm.sortBy.isViewed'] = 'Gelesen';
$this->items[$this->languageID]['wcf.pm.sortBy.isViewedByAll'] = 'Gelesen';
$this->items[$this->languageID]['wcf.pm.sortBy.recipients'] = 'Empfänger';
$this->items[$this->languageID]['wcf.pm.sortBy.subject'] = 'Betreff';
$this->items[$this->languageID]['wcf.pm.sortBy.time'] = 'Datum';
$this->items[$this->languageID]['wcf.pm.sortBy.username'] = 'Autor';
$this->items[$this->languageID]['wcf.pm.sorting'] = 'Sortierung';
$this->items[$this->languageID]['wcf.pm.subject'] = 'Betreff';
$this->items[$this->languageID]['wcf.pm.subject.description'] = 'Geben Sie hier die Betreffzeile der Nachricht an.';
$this->items[$this->languageID]['wcf.pm.text'] = 'Nachricht';
$this->items[$this->languageID]['wcf.pm.text.description'] = 'Tragen Sie hier den Text der Nachricht ein, die Sie versenden möchten.';
$this->items[$this->languageID]['wcf.pm.title'] = 'Private Nachrichten';
$this->items[$this->languageID]['wcf.pm.trash'] = 'Papierkorb';
$this->items[$this->languageID]['wcf.pm.usage'] = '{@$usage*100|floor}% Speicherplatz belegt';
$this->dynamicItems[$this->languageID]['wcf.pm.usage'] = '<?php echo floor($this->v[\'usage\']*100); ?>% Speicherplatz belegt';
$this->items[$this->languageID]['wcf.pm.userMenu.mailboxIsFull'] = '(Postfach voll)';
$this->items[$this->languageID]['wcf.pm.visibleRecipients'] = 'Sichtbare Empfänger';
?>