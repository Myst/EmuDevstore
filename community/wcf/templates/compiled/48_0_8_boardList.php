<?php
/**
* WoltLab Community Framework
* Template: boardList
* Compiled at: Thu, 15 Aug 2013 01:21:51 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'boardList';
?>
<?php
if (!isset($this->pluginObjects['TemplatePluginFunctionCycle'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionCycle.class.php');
$this->pluginObjects['TemplatePluginFunctionCycle'] = new TemplatePluginFunctionCycle;
}
if (!isset($this->pluginObjects['TemplatePluginFunctionCounter'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginFunctionCounter.class.php');
$this->pluginObjects['TemplatePluginFunctionCounter'] = new TemplatePluginFunctionCounter;
}
if (!isset($this->pluginObjects['TemplatePluginModifierShorttime'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierShorttime.class.php');
$this->pluginObjects['TemplatePluginModifierShorttime'] = new TemplatePluginModifierShorttime;
}
if (!isset($this->pluginObjects['TemplatePluginModifierEncodejs'])) {
require_once(WCF_DIR.'lib/system/template/plugin/TemplatePluginModifierEncodejs.class.php');
$this->pluginObjects['TemplatePluginModifierEncodejs'] = new TemplatePluginModifierEncodejs;
}
?><?php if (count($this->v['boards']) > 0) { ?>
	<script type="text/javascript" src="<?php echo RELATIVE_WBB_DIR; ?>js/BoardMarkAsRead.class.js"></script>
	<script type="text/javascript">
		//<![CDATA[
		var boards = new Hash();
		document.observe("dom:loaded", function() {
			new BoardMarkAsRead(boards);
		});
	//]]>
	</script>
	
	<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'boardlistCycle', 'values' => '1,2', 'advance' => false, 'print' => false), $this); ?>
	<ul id="boardlist">
		<?php
if (count($this->v['boards']) > 0) {
foreach ($this->v['boards'] as $this->v['child']) {
?>
			
			<?php $this->assign("depth", $this->v['child']['depth']); ?>
			<?php $this->assign("open", $this->v['child']['open']); ?>
			<?php $this->assign("hasChildren", $this->v['child']['hasChildren']); ?>
			<?php $this->assign("openParents", $this->v['child']['openParents']); ?>
			<?php $this->assign("board", $this->v['child']['board']); ?>
			<?php $this->assign("boardID", $this->v['board']->boardID); ?>
			<?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('assign' => 'boardNo', 'print' => false), $this); ?>
			<?php if ($this->v['board']->isBoard()) { ?>
				

				<li<?php if ($this->v['depth'] == 1) { ?> class="board border"<?php } ?>>
					<div class="boardlistInner container-<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'boardlistCycle'), $this); ?> board<?php echo $this->v['boardID']; ?>"<?php if ($this->v['board']->imageShowAsBackground) { ?><?php if ($this->v['board']->image || $this->v['newPosts'][$this->v['boardID']] && $this->v['board']->imageNew) { ?> style="background-image: url(<?php if ($this->v['newPosts'][$this->v['boardID']] && $this->v['board']->imageNew) { ?><?php echo StringUtil::encodeHTML($this->v['board']->imageNew); ?><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['board']->image); ?><?php } ?>); background-repeat: <?php echo StringUtil::encodeHTML($this->v['board']->imageBackgroundRepeat); ?>"<?php } ?><?php } ?>>
						<div class="boardlistTitle<?php if (BOARD_LIST_ENABLE_LAST_POST && BOARD_LIST_ENABLE_STATS) { ?> boardlistCols-3<?php } else { ?><?php if (BOARD_LIST_ENABLE_LAST_POST || BOARD_LIST_ENABLE_STATS) { ?> boardlistCols-2<?php } ?><?php } ?>">
							<div class="containerIcon">
								<img id="boardIcon<?php echo $this->v['boardNo']; ?>" src="<?php if ($this->v['newPosts'][$this->v['boardID']] && $this->v['board']->imageNew &&  ! $this->v['board']->imageShowAsBackground) { ?><?php echo StringUtil::encodeHTML($this->v['board']->imageNew); ?><?php } elseif ($this->v['board']->image &&  ! $this->v['board']->imageShowAsBackground) { ?><?php echo StringUtil::encodeHTML($this->v['board']->image); ?><?php } else { ?><?php ob_start(); ?><?php echo $this->v['board']->getIconName(); ?><?php if ($this->v['newPosts'][$this->v['boardID']]) { ?>New<?php } ?>M.png<?php $_icon7167bb3d0c32c3cf434af9077a32a11efc281d5b = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon7167bb3d0c32c3cf434af9077a32a11efc281d5b); ?><?php } ?>" alt="" <?php if ($this->v['newPosts'][$this->v['boardID']]) { ?>title="Segna forum come letti con un doppio click" <?php } ?>/>
							</div>
							
							<div class="containerContent">
								<?php if ($this->v['depth'] > 3) { ?><h6 class="boardTitle"><?php } else { ?><h<?php echo $this->v['depth']+2; ?> class="boardTitle"><?php } ?>
									<a id="boardLink<?php echo $this->v['boardNo']; ?>" <?php if ($this->v['newPosts'][$this->v['boardID']]) { ?>class="new" <?php } ?>href="index.php?page=Board&amp;boardID=<?php echo $this->v['boardID']; ?><?php echo SID_ARG_2ND; ?>"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_lang3752c0e68e28f9a0c2d65c2ade5c40174b2d88c8 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang3752c0e68e28f9a0c2d65c2ade5c40174b2d88c8, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?><?php if (isset($this->v['unreadThreadsCount'][$this->v['boardID']])) { ?><span>&nbsp;(<?php echo StringUtil::formatNumeric($this->v['unreadThreadsCount'][$this->v['boardID']]); ?>)</span><?php } ?></a>
								<?php if ($this->v['depth'] > 3) { ?></h6><?php } else { ?></h<?php echo $this->v['depth']+2; ?>><?php } ?>
								<?php if ($this->v['newPosts'][$this->v['boardID']]) { ?>
									<script type="text/javascript">
										//<![CDATA[
										boards.set(<?php echo $this->v['boardNo']; ?>, {
											'boardNo': <?php echo $this->v['boardNo']; ?>,
											'boardID': <?php echo $this->v['boardID']; ?>,
											'icon': '<?php if ($this->v['board']->image &&  ! $this->v['board']->imageShowAsBackground) { ?><?php echo StringUtil::encodeHTML($this->v['board']->image); ?><?php } else { ?><?php ob_start(); ?><?php echo $this->v['board']->getIconName(); ?>M.png<?php $_icone9974b9379c422c350742366fd3e054d273dc773 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icone9974b9379c422c350742366fd3e054d273dc773); ?><?php } ?>'
										});
										//]]>
									</script>
								<?php } ?>
								
								<?php if ($this->v['board']->description) { ?>
									<p class="boardlistDescription">
										<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php if ($this->v['board']->allowDescriptionHtml) { ?><?php echo $this->v['board']->description; ?><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['board']->description); ?><?php } ?><?php $_langbf9d5400e0d44bdbf59d93acfb4beaa032d46d2d = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langbf9d5400e0d44bdbf59d93acfb4beaa032d46d2d, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>
									</p>
								<?php } ?>
								
								<?php if (isset($this->v['subBoards'][$this->v['boardID']])) { ?>
									<div class="boardlistSubboards">
										<ul><?php
$this->v['tpl']['foreach']['subBoards']['total'] = count($this->v['subBoards'][$this->v['boardID']]);
$this->v['tpl']['foreach']['subBoards']['show'] = ($this->v['tpl']['foreach']['subBoards']['total'] > 0 ? true : false);
$this->v['tpl']['foreach']['subBoards']['iteration'] = 0;
if (count($this->v['subBoards'][$this->v['boardID']]) > 0) {
foreach ($this->v['subBoards'][$this->v['boardID']] as $this->v['subBoard']) {
$this->v['tpl']['foreach']['subBoards']['first'] = ($this->v['tpl']['foreach']['subBoards']['iteration'] == 0 ? true : false);
$this->v['tpl']['foreach']['subBoards']['last'] = (($this->v['tpl']['foreach']['subBoards']['iteration'] == $this->v['tpl']['foreach']['subBoards']['total'] - 1) ? true : false);
$this->v['tpl']['foreach']['subBoards']['iteration']++;
?><?php $this->assign("subBoardID", $this->v['subBoard']->boardID); ?><?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('assign' => 'boardNo', 'print' => false), $this); ?><li<?php if ($this->v['tpl']['foreach']['subBoards']['last']) { ?> class="last"<?php } ?>><?php if ($this->v['depth'] > 4) { ?><h6><?php } else { ?><h<?php echo $this->v['depth']+3; ?>><?php } ?><img id="boardIcon<?php echo $this->v['boardNo']; ?>" src="<?php ob_start(); ?><?php if ($this->v['subBoard']->isBoard()) { ?>board<?php if ($this->v['newPosts'][$this->v['subBoardID']]) { ?>New<?php } ?><?php } elseif ($this->v['subBoard']->isCategory()) { ?>category<?php } else { ?>boardRedirect<?php } ?>S.png<?php $_icon79c74197933429ecad519218001ef1ea53353794 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon79c74197933429ecad519218001ef1ea53353794); ?>" alt="" <?php if ($this->v['subBoard']->isBoard() && $this->v['newPosts'][$this->v['subBoardID']]) { ?>title="Segna forum come letti con un doppio click" <?php } ?>/>&nbsp;<a id="boardLink<?php echo $this->v['boardNo']; ?>" <?php if ($this->v['newPosts'][$this->v['subBoardID']]) { ?>class="new" <?php } ?><?php if ($this->v['subBoard']->isExternalLink()) { ?>class="externalURL" <?php } ?>href="index.php?page=Board&amp;boardID=<?php echo $this->v['subBoardID']; ?><?php echo SID_ARG_2ND; ?>"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['subBoard']->title); ?><?php $_langb4c2f7a0ab4f0fe5f4f87ea1a3e0a66762bb4097 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langb4c2f7a0ab4f0fe5f4f87ea1a3e0a66762bb4097, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?><?php if (isset($this->v['unreadThreadsCount'][$this->v['subBoardID']])) { ?> <span>(<?php echo StringUtil::formatNumeric($this->v['unreadThreadsCount'][$this->v['subBoardID']]); ?>)</span><?php } ?></a><?php if ($this->v['depth'] > 4) { ?></h6><?php } else { ?></h<?php echo $this->v['depth']+3; ?>><?php } ?><?php if ($this->v['newPosts'][$this->v['subBoardID']]) { ?><script type="text/javascript">
														//<![CDATA[
														boards.set(<?php echo $this->v['boardNo']; ?>, {
															'boardNo': <?php echo $this->v['boardNo']; ?>,
															'boardID': <?php echo $this->v['subBoardID']; ?>,
															'icon': '<?php ob_start(); ?><?php echo $this->v['subBoard']->getIconName(); ?>S.png<?php $_icon27f5829b876a46cd9804be6ca59126e4e4391d77 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon27f5829b876a46cd9804be6ca59126e4e4391d77); ?>'
														});
														//]]>
													</script><?php } ?></li><?php } } ?></ul>
									</div>
								<?php } ?>
								
								<?php if (isset($this->v['boardUsersOnline'][$this->v['boardID']]['users']) || isset($this->v['boardUsersOnline'][$this->v['boardID']]['guests'])) { ?>
									<p class="boardlistUsersOnline">
										<img src="<?php echo StyleManager::getStyle()->getIconPath('usersS.png'); ?>" alt="" />
										<?php if (isset($this->v['boardUsersOnline'][$this->v['boardID']]['users'])) { ?>
											<?php
$_length4bc6301e2485756879862b7226ff3d07df6255e1 = count($this->v['boardUsersOnline'][$this->v['boardID']]['users']);
$_i4bc6301e2485756879862b7226ff3d07df6255e1 = 0;
foreach ($this->v['boardUsersOnline'][$this->v['boardID']]['users'] as $this->v['userOnline']) { ?><a href="index.php?page=User&amp;userID=<?php echo $this->v['userOnline']['userID']; ?><?php echo SID_ARG_2ND; ?>"><?php echo $this->v['userOnline']['username']; ?></a><?php
if (++$_i4bc6301e2485756879862b7226ff3d07df6255e1 < $_length4bc6301e2485756879862b7226ff3d07df6255e1) { echo ', '; }
} ?>
										<?php } ?>
										<?php if (isset($this->v['boardUsersOnline'][$this->v['boardID']]['guests'])) { ?>
											<?php if (isset($this->v['boardUsersOnline'][$this->v['boardID']]['users'])) { ?>e<?php } ?> <?php echo StringUtil::encodeHTML($this->v['boardUsersOnline'][$this->v['boardID']]['guests']); ?> ospiti
										<?php } ?>
									</p>
								<?php } ?>
								
								<?php if (isset($this->v['moderators'][$this->v['boardID']])) { ?>
									<p class="moderators">
										<img src="<?php echo StyleManager::getStyle()->getIconPath('moderatorS.png'); ?>" alt="" />
										<?php
$_length20c9c68748c9a705dcc9262d278a5118162457e1 = count($this->v['moderators'][$this->v['boardID']]);
$_i20c9c68748c9a705dcc9262d278a5118162457e1 = 0;
foreach ($this->v['moderators'][$this->v['boardID']] as $this->v['moderator']) { ?><?php if ($this->v['moderator']->userID) { ?><a href="index.php?page=User&amp;userID=<?php echo $this->v['moderator']->userID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['moderator']); ?></a><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['moderator']); ?><?php } ?><?php
if (++$_i20c9c68748c9a705dcc9262d278a5118162457e1 < $_length20c9c68748c9a705dcc9262d278a5118162457e1) { echo ', '; }
} ?>
									</p>
								<?php } ?>
								
								<?php if (isset($this->v['child']['additionalBoxes'])) { ?><?php echo $this->v['child']['additionalBoxes']; ?><?php } ?>
							</div>
						</div>
						
						<?php if (isset($this->v['lastPosts'][$this->v['boardID']])) { ?>
							<div class="boardlistLastPost">								
								<div class="containerIconSmall"><a href="index.php?page=Thread&amp;threadID=<?php echo $this->v['lastPosts'][$this->v['boardID']]->threadID; ?>&amp;action=firstNew<?php echo SID_ARG_2ND; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('goToFirstNewPostS.png'); ?>" alt="" title="Vai al primo post non letto" /></a></div>
								<div class="containerContentSmall">
									<p>
										<span class="prefix"><strong><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['lastPosts'][$this->v['boardID']]->prefix); ?><?php $_lang8fb728b275dee39c00b2018b0c8a73a368e6d642 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang8fb728b275dee39c00b2018b0c8a73a368e6d642, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></strong></span>
										<a href="index.php?page=Thread&amp;threadID=<?php echo $this->v['lastPosts'][$this->v['boardID']]->threadID; ?>&amp;action=firstNew<?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['lastPosts'][$this->v['boardID']]->topic); ?></a>
									</p>
									<p>di
										<?php if ($this->v['lastPosts'][$this->v['boardID']]->lastPosterID != 0) { ?>
											<a href="index.php?page=User&amp;userID=<?php echo $this->v['lastPosts'][$this->v['boardID']]->lastPosterID; ?><?php echo SID_ARG_2ND; ?>"><?php echo StringUtil::encodeHTML($this->v['lastPosts'][$this->v['boardID']]->lastPoster); ?></a>
										<?php } else { ?>
											<?php echo StringUtil::encodeHTML($this->v['lastPosts'][$this->v['boardID']]->lastPoster); ?>
										<?php } ?>
										<span class="light">(<?php echo $this->pluginObjects['TemplatePluginModifierShorttime']->execute(array($this->v['lastPosts'][$this->v['boardID']]->lastPostTime), $this); ?>)</span>
									</p>
								</div>
							</div>
						<?php } ?>
						
						<?php if (isset($this->v['boardStats'][$this->v['boardID']])) { ?>
							<div class="boardlistStats">
								<dl>
									<dt><?php if ($this->v['boardStats'][$this->v['boardID']]['threads'] == 1) { ?>Thread<?php } else { ?>Threads<?php } ?></dt>
									<dd><?php echo StringUtil::formatNumeric($this->v['boardStats'][$this->v['boardID']]['threads']); ?></dd>
									<dt><?php if ($this->v['boardStats'][$this->v['boardID']]['posts'] == 1) { ?>Post<?php } else { ?>Posts<?php } ?></dt>
									<dd><?php echo StringUtil::formatNumeric($this->v['boardStats'][$this->v['boardID']]['posts']); ?></dd>
								</dl>
							</div>
						<?php } ?>
						<!--[if IE 7]><span> </span><![endif]-->
					</div>
			<?php } ?>
			
			<?php if ($this->v['board']->isCategory()) { ?>
				
				<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'boardlistCycle', 'advance' => false, 'print' => false, 'reset' => true), $this); ?>
				<li<?php if ($this->v['depth'] == 1) { ?> class="category border"<?php } ?>>
					<div class="containerHead boardlistInner board<?php echo $this->v['boardID']; ?>"<?php if ($this->v['board']->imageShowAsBackground) { ?><?php if ($this->v['board']->image || $this->v['newPosts'][$this->v['boardID']] && $this->v['board']->imageNew) { ?> style="background-image: url(<?php if ($this->v['newPosts'][$this->v['boardID']] && $this->v['board']->imageNew) { ?><?php echo StringUtil::encodeHTML($this->v['board']->imageNew); ?><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['board']->image); ?><?php } ?>); background-repeat: <?php echo StringUtil::encodeHTML($this->v['board']->imageBackgroundRepeat); ?>"<?php } ?><?php } ?>>
						<div class="boardlistTitle">
							<div class="containerIcon">
								<?php if ($this->v['open']) { ?>
									<?php ob_start(); ?>Apri categoria &quot;<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_lang38839ceb7d1e4fd0c4870ce710e89095c67c3e24 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang38839ceb7d1e4fd0c4870ce710e89095c67c3e24, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>&quot;<?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->assign('showCategoryTitle', $this->v['tpl']['capture']['default']);
?>
									<?php ob_start(); ?>Chiudi categoria &quot;<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_lang11d896f5f5113256865e58792609f60b02101e79 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang11d896f5f5113256865e58792609f60b02101e79, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>&quot;<?php
$this->v['tpl']['capture']['default'] = ob_get_contents();
ob_end_clean();
$this->assign('hideCategoryTitle', $this->v['tpl']['capture']['default']);
?>
									<a href="<?php echo StringUtil::encodeHTML($this->v['selfLink']); ?>&amp;closeCategory=<?php echo $this->v['boardID']; ?><?php echo SID_ARG_2ND; ?>#boardLink<?php echo $this->v['boardNo']; ?>" onclick="return !openList('category<?php echo $this->v['boardID']; ?>', { save: true, openTitle: '<?php echo $this->pluginObjects['TemplatePluginModifierEncodejs']->execute(array($this->v['showCategoryTitle']), $this); ?>', closeTitle: '<?php echo $this->pluginObjects['TemplatePluginModifierEncodejs']->execute(array($this->v['hideCategoryTitle']), $this); ?>' })"><img id="category<?php echo $this->v['boardID']; ?>Image" src="<?php echo StyleManager::getStyle()->getIconPath('minusS.png'); ?>" alt="" title="Chiudi categoria &quot;<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_langb301165f29b5351d642e618c30ba735f5a3511b7 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_langb301165f29b5351d642e618c30ba735f5a3511b7, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>&quot;" /></a>
								<?php } else { ?>
									<a href="<?php echo StringUtil::encodeHTML($this->v['selfLink']); ?>&amp;openCategory=<?php echo $this->v['boardID']; ?><?php echo SID_ARG_2ND; ?>#boardLink<?php echo $this->v['boardNo']; ?>"><img src="<?php echo StyleManager::getStyle()->getIconPath('plusS.png'); ?>" alt="" title="Apri categoria &quot;<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_lang001af837ce409b01c69ba88436ddda88e5c1d2ed = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang001af837ce409b01c69ba88436ddda88e5c1d2ed, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>&quot;" /></a>
								<?php } ?>
							</div>
							<div class="containerContent">
								<?php if ($this->v['depth'] > 3) { ?><h6 class="boardTitle"><?php } else { ?><h<?php echo $this->v['depth']+2; ?> class="boardTitle"><?php } ?>
									<a id="boardLink<?php echo $this->v['boardNo']; ?>" <?php if ($this->v['newPosts'][$this->v['boardID']]) { ?>class="new" <?php } ?>href="index.php?page=Board&amp;boardID=<?php echo $this->v['boardID']; ?><?php echo SID_ARG_2ND; ?>"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_lang691e2cc1205ed16405f32afbf8b220a74db134c1 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang691e2cc1205ed16405f32afbf8b220a74db134c1, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?><?php if (isset($this->v['unreadThreadsCount'][$this->v['boardID']])) { ?> (<?php echo StringUtil::formatNumeric($this->v['unreadThreadsCount'][$this->v['boardID']]); ?>)<?php } ?></a>
								<?php if ($this->v['depth'] > 3) { ?></h6><?php } else { ?></h<?php echo $this->v['depth']+2; ?>><?php } ?>
								<?php if ($this->v['board']->description) { ?>
									<p class="boardlistDescription">
										<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php if ($this->v['board']->allowDescriptionHtml) { ?><?php echo $this->v['board']->description; ?><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['board']->description); ?><?php } ?><?php $_lang10cc402247e6ac9319f75a9e9c388cfd07628eba = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang10cc402247e6ac9319f75a9e9c388cfd07628eba, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>
									</p>
								<?php } ?>
								
								<?php if (isset($this->v['subBoards'][$this->v['boardID']])) { ?>
									<div class="boardlistSubboards">
										<ul><?php
$this->v['tpl']['foreach']['subBoards']['total'] = count($this->v['subBoards'][$this->v['boardID']]);
$this->v['tpl']['foreach']['subBoards']['show'] = ($this->v['tpl']['foreach']['subBoards']['total'] > 0 ? true : false);
$this->v['tpl']['foreach']['subBoards']['iteration'] = 0;
if (count($this->v['subBoards'][$this->v['boardID']]) > 0) {
foreach ($this->v['subBoards'][$this->v['boardID']] as $this->v['subBoard']) {
$this->v['tpl']['foreach']['subBoards']['first'] = ($this->v['tpl']['foreach']['subBoards']['iteration'] == 0 ? true : false);
$this->v['tpl']['foreach']['subBoards']['last'] = (($this->v['tpl']['foreach']['subBoards']['iteration'] == $this->v['tpl']['foreach']['subBoards']['total'] - 1) ? true : false);
$this->v['tpl']['foreach']['subBoards']['iteration']++;
?><?php $this->assign("subBoardID", $this->v['subBoard']->boardID); ?><?php echo $this->pluginObjects['TemplatePluginFunctionCounter']->execute(array('assign' => 'boardNo', 'print' => false), $this); ?><li<?php if ($this->v['tpl']['foreach']['subBoards']['last']) { ?> class="last"<?php } ?>><?php if ($this->v['depth'] > 4) { ?><h6><?php } else { ?><h<?php echo $this->v['depth']+3; ?>><?php } ?><img id="boardIcon<?php echo $this->v['boardNo']; ?>" src="<?php ob_start(); ?><?php if ($this->v['subBoard']->isBoard()) { ?>board<?php if ($this->v['newPosts'][$this->v['subBoardID']]) { ?>New<?php } ?><?php } elseif ($this->v['subBoard']->isCategory()) { ?>category<?php } else { ?>boardRedirect<?php } ?>S.png<?php $_icon9413056d74405a9dba9118438a203270f3c4e1fd = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon9413056d74405a9dba9118438a203270f3c4e1fd); ?>" alt="" <?php if ($this->v['subBoard']->isBoard() && $this->v['newPosts'][$this->v['subBoardID']]) { ?>title="Segna forum come letti con un doppio click" <?php } ?>/>&nbsp;<a id="boardLink<?php echo $this->v['boardNo']; ?>" <?php if ($this->v['newPosts'][$this->v['subBoardID']]) { ?>class="new" <?php } ?><?php if ($this->v['subBoard']->isExternalLink()) { ?>class="externalURL" <?php } ?>href="index.php?page=Board&amp;boardID=<?php echo $this->v['subBoardID']; ?><?php echo SID_ARG_2ND; ?>"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['subBoard']->title); ?><?php $_lang25dc584bfd1a62c8b3027df417e2c6ca2b82865a = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang25dc584bfd1a62c8b3027df417e2c6ca2b82865a, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?><?php if (isset($this->v['unreadThreadsCount'][$this->v['subBoardID']])) { ?> <span>(<?php echo StringUtil::formatNumeric($this->v['unreadThreadsCount'][$this->v['subBoardID']]); ?>)</span><?php } ?></a><?php if ($this->v['depth'] > 4) { ?></h6><?php } else { ?></h<?php echo $this->v['depth']+3; ?>><?php } ?><?php if ($this->v['newPosts'][$this->v['subBoardID']]) { ?><script type="text/javascript">
															//<![CDATA[
															boards.set(<?php echo $this->v['boardNo']; ?>, {
																'boardNo': <?php echo $this->v['boardNo']; ?>,
																'boardID': <?php echo $this->v['subBoardID']; ?>,
																'icon': '<?php ob_start(); ?><?php echo $this->v['subBoard']->getIconName(); ?>S.png<?php $_icon5269b9574ee480d7887692c462ee7bc7eacfb9d9 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon5269b9574ee480d7887692c462ee7bc7eacfb9d9); ?>'
															});
															//]]>
														</script><?php } ?></li><?php } } ?></ul>
									</div>
								<?php } ?>
								
								<?php if (isset($this->v['child']['additionalBoxes'])) { ?><?php echo $this->v['child']['additionalBoxes']; ?><?php } ?>
							</div>
						</div>
					</div>
			<?php } ?>
			
			<?php if ($this->v['board']->isExternalLink()) { ?>	
				
				<li<?php if ($this->v['depth'] == 1) { ?> class="link border"<?php } ?>>
					<div class="container-<?php echo $this->pluginObjects['TemplatePluginFunctionCycle']->execute(array('name' => 'boardlistCycle'), $this); ?> boardlistInner board<?php echo $this->v['boardID']; ?>"<?php if ($this->v['board']->imageShowAsBackground && $this->v['board']->image) { ?> style="background-image: url(<?php echo StringUtil::encodeHTML($this->v['board']->image); ?>); background-repeat: <?php echo StringUtil::encodeHTML($this->v['board']->imageBackgroundRepeat); ?>"<?php } ?>>
						<div class="boardlistTitle<?php if (BOARD_LIST_ENABLE_LAST_POST && BOARD_LIST_ENABLE_STATS) { ?> boardlistCols-3<?php } else { ?><?php if (BOARD_LIST_ENABLE_LAST_POST || BOARD_LIST_ENABLE_STATS) { ?> boardlistCols-2<?php } ?><?php } ?>">
							<div class="containerIcon">
								<img src="<?php if ($this->v['board']->image &&  ! $this->v['board']->imageShowAsBackground) { ?><?php echo StringUtil::encodeHTML($this->v['board']->image); ?><?php } else { ?><?php echo StyleManager::getStyle()->getIconPath('boardRedirectM.png'); ?><?php } ?>" alt="" />
							</div>
							<div class="containerContent">
								<?php if ($this->v['depth'] > 3) { ?><h6 class="boardTitle"><?php } else { ?><h<?php echo $this->v['depth']+2; ?> class="boardTitle"><?php } ?>
									<a href="index.php?page=Board&amp;boardID=<?php echo $this->v['boardID']; ?><?php echo SID_ARG_2ND; ?>" class="externalURL"><?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php echo StringUtil::encodeHTML($this->v['board']->title); ?><?php $_lang9a3d5c1300669402efc7f193a3004c63ba0a2192 = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang9a3d5c1300669402efc7f193a3004c63ba0a2192, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?></a>
								<?php if ($this->v['depth'] > 3) { ?></h6><?php } else { ?></h<?php echo $this->v['depth']+2; ?>><?php } ?>
								
								<?php if ($this->v['board']->description) { ?>
									<p class="boardlistDescription">
										<?php $this->tagStack[] = array('lang', array()); ob_start(); ?><?php if ($this->v['board']->allowDescriptionHtml) { ?><?php echo $this->v['board']->description; ?><?php } else { ?><?php echo StringUtil::encodeHTML($this->v['board']->description); ?><?php } ?><?php $_lang74972bdc75f25465bb7f8b0c0e2db8f6a9b79fea = ob_get_contents(); ob_end_clean(); echo WCF::getLanguage()->getDynamicVariable($_lang74972bdc75f25465bb7f8b0c0e2db8f6a9b79fea, $this->tagStack[count($this->tagStack) - 1][1]); array_pop($this->tagStack); ?>
									</p>
								<?php } ?>
								
								<?php if (isset($this->v['child']['additionalBoxes'])) { ?><?php echo $this->v['child']['additionalBoxes']; ?><?php } ?>
							</div>
						</div>
						
						<?php if (isset($this->v['boardStats'][$this->v['boardID']])) { ?>
							<div class="boardlistStats">
								<dl>
									<dt>Clicks:</dt>
									<dd><?php echo StringUtil::formatNumeric($this->v['board']->getClicks()); ?></dd>
								</dl>
							</div>
						<?php } ?>
					</div>
			<?php } ?>
			
			<?php if ($this->v['hasChildren']) { ?><ul id="category<?php echo $this->v['boardID']; ?>"><?php } else { ?></li><?php } ?>
			<?php if ($this->v['openParents'] > 0) { ?><?php echo str_repeat("</ul></li>",$this->v['openParents']); ?><?php } ?>
		<?php } } ?>
	</ul>
<?php } ?>