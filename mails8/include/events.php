<?php 
class eventsBase
{
	var $events = array();
	var $captchas = array();
	var $maps = array();
	function exists($event, $table = "") 
	{ 
		if($table == "")
			return (array_key_exists($event,$this->events)!==FALSE);
		else 
			return isset($this->events[$event]) && isset($this->events[$event][$table]);
	}

	function existsMap($page)
	{
		return (array_key_exists($page,$this->maps)!==FALSE);
	}
		
	function existsCAPTCHA($page)
	{
		return (array_key_exists($page,$this->captchas)!==FALSE);
	}
	
	function callCAPTCHA(&$pageObject)
	{
		if($pageObject->pageType == "add")
			$this->displayCaptchaOnAdd();
		elseif($pageObject->pageType == "edit")
			$this->displayCaptchaOnEdit();
		elseif($pageObject->pageType == "register")
			$this->displayCaptchaOnRegister();
	}
}

class class_GlobalEvents extends eventsBase
{ 
	function class_GlobalEvents()
	{
	// fill list of events

		$this->events["ModifyMenuItem"]=true;

		$this->events["BeforeShowLogin"]=true;


//	onscreen events


	
	
		}
// Captchas functions	
//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Menu item: Modify
function ModifyMenuItem(&$menuItem)
{

		
$respuesta = true;

if($menuItem->getTable() == 'enviomail') {
	if(!$_SESSION['UserRights'][$_SESSION['UserID']]['.IsAdmin']) $respuesta = false;
}

return $respuesta;
;		
} // function ModifyMenuItem

		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowLogin(&$xt, &$templatefile, &$pageObject)
{

		
$xt->assign('guestlink_block', false);

;		
} // function BeforeShowLogin

		
		
		
		
		
		

//	onscreen events

} 
?>
