<?php define('C5_EXECUTE')or die ('Access Denied');

class PlayerPopupBlockController extends BlockController {
	protected $btDescription = "Creates a player display with an animated popup window.";
	protected $btName = "Player Popup";
	protected $btTable = "btPlayerBlock";
	protected $btInterfaceWidth = "600";
	protected $btInterfaceHeight = "600";
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = true;

	public function getBlockTypeDescription() {
		return t("Creates a player display with an animated popup window.");
	}
 
	public function getBlockTypeName() {
		return t("Player Popup");
	}	 
 
	public function __construct($obj = null) {		
		parent::__construct($obj); 
	}
}

?>