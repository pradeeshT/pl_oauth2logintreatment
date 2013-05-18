<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.oauth2logintreatment
 *
 * @license     GNU General Public License version 2 or later
 */

defined('_JEXEC') or die;

/**
 * OAuth2 redirection for login treatment
 *
 * @package     Joomla.Plugin
 * @subpackage  System.oauth2logintreatment
 * @since       3.1
 */

class PlgSystemOauth2logintreatment extends JPlugin
{
	
	/**
	 * This method check if a token has been recevied in the $_REQUEST param.
	 * If yes, then it tries to login the user using a blank password and username, expectiong that
	 * an OAuth2 authentication will be able to use the token to authenticate the user. 
	 * 
	 * @access	public
	 */
	function onAfterInitialise(){
		
		//Check if isset the code in the URL
		if(isset($_REQUEST["code"]))
		{
			//Create an array credentials empty
			$credentials = array(
					"username" => "",
					"password" => "",
			);
			
			//Get the application
			$app = JFactory::getApplication();  
			
			//Now it only works if the application is the frontend. Needs a normal authentication for the backend.
			if($app->isSite()){
			
				//Through the login method. The authentication plugins will be called. One of them should be able to handle the login using the access token, instead of the credential array.
				$app->login($credentials);
				
			}
		}
		
	}
	
}