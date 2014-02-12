<?php
/**
* WoltLab Community Framework
* language: de-informal
* encoding: UTF-8
* category: wcf.usersOnline
* generated at Tue, 13 Aug 2013 11:37:05 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->items[$this->languageID]['wcf.usersOnline.location.help'] = '<a href="index.php?page=Help{SID_ARG_2ND}">Hilfe</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.help'] = '<a href="index.php?page=Help<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Hilfe</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.login'] = 'Anmeldung';
$this->items[$this->languageID]['wcf.usersOnline.location.logout'] = 'Abmeldung';
$this->items[$this->languageID]['wcf.usersOnline.location.lostPassword'] = 'Kennwort vergessen?';
$this->items[$this->languageID]['wcf.usersOnline.location.register'] = 'Registrierung';
$this->items[$this->languageID]['wcf.usersOnline.location.usercp'] = 'Benutzerprofil bearbeiten';
$this->items[$this->languageID]['wcf.usersOnline.location.search'] = '<a href="index.php?form=Search{SID_ARG_2ND}">Suche</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.search'] = '<a href="index.php?form=Search<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Suche</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.mail'] = 'E-Mail an: &raquo;{$user}&laquo; senden';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.mail'] = 'E-Mail an: &raquo;<?php echo StringUtil::encodeHTML($this->v[\'user\']); ?>&laquo; senden';
$this->items[$this->languageID]['wcf.usersOnline.location.membersList'] = '<a href="index.php?page=MembersList{SID_ARG_2ND}">Mitgliederliste</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.membersList'] = '<a href="index.php?page=MembersList<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Mitgliederliste</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.membersSearch'] = '<a href="index.php?form=MembersSearch{SID_ARG_2ND}">Mitgliedersuche</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.membersSearch'] = '<a href="index.php?form=MembersSearch<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Mitgliedersuche</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.profile'] = 'Benutzerprofil von: &raquo;{$user}&laquo;';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.profile'] = 'Benutzerprofil von: &raquo;<?php echo StringUtil::encodeHTML($this->v[\'user\']); ?>&laquo;';
$this->items[$this->languageID]['wcf.usersOnline.location.tagCloud'] = 'Tagwolke';
$this->items[$this->languageID]['wcf.usersOnline.location.taggedObjects'] = 'Ergebnisse für Tag &raquo;{$tag}&laquo;';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.taggedObjects'] = 'Ergebnisse für Tag &raquo;<?php echo StringUtil::encodeHTML($this->v[\'tag\']); ?>&laquo;';
$this->items[$this->languageID]['wcf.usersOnline.location.attachmentList'] = 'Liste der eigenen Dateianhänge';
$this->items[$this->languageID]['wcf.usersOnline.location.messenger'] = '&raquo;{$user}&laquo; über Instant Messenger kontaktieren';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.messenger'] = '&raquo;<?php echo StringUtil::encodeHTML($this->v[\'user\']); ?>&laquo; über Instant Messenger kontaktieren';
$this->items[$this->languageID]['wcf.usersOnline.guestname'] = 'Name';
$this->items[$this->languageID]['wcf.usersOnline.guests'] = 'Es {if $guests|count == 1}ist ein Gast{else}sind {#$guests|count} Gäste{/if} online';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.guests'] = 'Es <?php if (count($this->v[\'guests\']) == 1) { ?>ist ein Gast<?php } else { ?>sind <?php echo StringUtil::formatNumeric(count($this->v[\'guests\'])); ?> Gäste<?php } ?> online';
$this->items[$this->languageID]['wcf.usersOnline.invisible'] = ' (unsichtbar)';
$this->items[$this->languageID]['wcf.usersOnline.ipAddress'] = 'IP-Adresse';
$this->items[$this->languageID]['wcf.usersOnline.lastActivity'] = 'Letzte Aktion';
$this->items[$this->languageID]['wcf.usersOnline.location'] = 'Ort';
$this->items[$this->languageID]['wcf.usersOnline.location.usersOnline'] = '<a href="index.php?page=UsersOnline{SID_ARG_2ND}">&raquo;Wer ist online?&laquo;-Liste</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.usersOnline'] = '<a href="index.php?page=UsersOnline<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">&raquo;Wer ist online?&laquo;-Liste</a>';
$this->items[$this->languageID]['wcf.usersOnline.marking.friends'] = 'Freunde';
$this->items[$this->languageID]['wcf.usersOnline.marking.legend'] = 'Legende:';
$this->items[$this->languageID]['wcf.usersOnline.members'] = 'Es {if $users|count == 1}ist ein Mitglied{else}sind {#$users|count} Mitglieder{/if} online';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.members'] = 'Es <?php if (count($this->v[\'users\']) == 1) { ?>ist ein Mitglied<?php } else { ?>sind <?php echo StringUtil::formatNumeric(count($this->v[\'users\'])); ?> Mitglieder<?php } ?> online';
$this->items[$this->languageID]['wcf.usersOnline.spiderName'] = 'Name';
$this->items[$this->languageID]['wcf.usersOnline.spiders'] = 'Es {if $spiders|count == 1}ist ein Suchmaschinenroboter{else}sind {#$spiders|count} Suchmaschinenroboter{/if} online
({if $detailedSpiderList}<a href="index.php?page=UsersOnline&amp;sortField={$sortField}&amp;sortOrder={$sortOrder}&amp;detailedSpiderList=0{if $additionalParameters|isset}{@$additionalParameters}{/if}{@SID_ARG_2ND}">Details aus</a>{else}<a href="index.php?page=UsersOnline&amp;sortField={$sortField}&amp;sortOrder={$sortOrder}&amp;detailedSpiderList=1{if $additionalParameters|isset}{@$additionalParameters}{/if}{@SID_ARG_2ND}">Details an</a>{/if})';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.spiders'] = 'Es <?php if (count($this->v[\'spiders\']) == 1) { ?>ist ein Suchmaschinenroboter<?php } else { ?>sind <?php echo StringUtil::formatNumeric(count($this->v[\'spiders\'])); ?> Suchmaschinenroboter<?php } ?> online
(<?php if ($this->v[\'detailedSpiderList\']) { ?><a href="index.php?page=UsersOnline&amp;sortField=<?php echo StringUtil::encodeHTML($this->v[\'sortField\']); ?>&amp;sortOrder=<?php echo StringUtil::encodeHTML($this->v[\'sortOrder\']); ?>&amp;detailedSpiderList=0<?php if (isset($this->v[\'additionalParameters\'])) { ?><?php echo $this->v[\'additionalParameters\']; ?><?php } ?><?php echo SID_ARG_2ND; ?>">Details aus</a><?php } else { ?><a href="index.php?page=UsersOnline&amp;sortField=<?php echo StringUtil::encodeHTML($this->v[\'sortField\']); ?>&amp;sortOrder=<?php echo StringUtil::encodeHTML($this->v[\'sortOrder\']); ?>&amp;detailedSpiderList=1<?php if (isset($this->v[\'additionalParameters\'])) { ?><?php echo $this->v[\'additionalParameters\']; ?><?php } ?><?php echo SID_ARG_2ND; ?>">Details an</a><?php } ?>)';
$this->items[$this->languageID]['wcf.usersOnline.title'] = '&raquo;Wer ist online?&laquo;-Liste';
$this->items[$this->languageID]['wcf.usersOnline.userAgent'] = 'Browser-Kennung';
$this->items[$this->languageID]['wcf.usersOnline.username'] = 'Benutzername';
$this->items[$this->languageID]['wcf.usersOnline.location.attachment'] = 'Dateianhang';
$this->items[$this->languageID]['wcf.usersOnline.location.pollOverview'] = 'Umfrage';
$this->items[$this->languageID]['wcf.usersOnline.location.contact'] = '<a href="index.php?form=Contact{SID_ARG_2ND}">Kontaktformular</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.contact'] = '<a href="index.php?form=Contact<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Kontaktformular</a>';
$this->items[$this->languageID]['wcf.usersOnline.location.pmNew'] = 'Neue private Nachricht erstellen';
$this->items[$this->languageID]['wcf.usersOnline.location.pmView'] = 'Private Nachricht lesen';
$this->items[$this->languageID]['wcf.usersOnline.location.userGroups'] = 'Benutzergruppen-Verwaltung';
$this->items[$this->languageID]['wcf.usersOnline.location.userWarn'] = 'Benutzer verwarnen';
$this->items[$this->languageID]['wcf.usersOnline.location.teamPage'] = '<a href="index.php?page=Team{SID_ARG_2ND}">Team-Mitglieder</a>';
$this->dynamicItems[$this->languageID]['wcf.usersOnline.location.teamPage'] = '<a href="index.php?page=Team<?php echo StringUtil::encodeHTML(SID_ARG_2ND); ?>">Team-Mitglieder</a>';
?>