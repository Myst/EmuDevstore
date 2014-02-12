<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Shows the board mark as read link on search result page.
 * 
 * @author 	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	WoltLab Burning Board License <http://www.woltlab.com/products/burning_board/license.php>
 * @package	com.woltlab.wbb
 * @subpackage	system.event.listener
 * @category 	Burning Board
 */
class SearchResultPageMarkAsReadListener implements EventListener {
	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName) {
		if ($eventName == 'assignVariables') {
			WCF::getTPL()->append('additionalOptions', WCF::getTPL()->fetch('boardMarkAllAsReadOption'));
		}
	}
}
?>