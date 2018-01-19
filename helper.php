<?php
/**
 * @package Module Horoscopo for Joomla! 1.5
 * @author Virtual Media
 * @copyright (C) 2010-Virtual Media
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined( '_JEXEC' ) or die( 'Restricted access' );

function isComponentInstalled(){
	return file_exists(COMPONENT_PATH);
}

function getImageLinks($params,$signs){

	$links = array();
	$style = $params->get( 'theme' );
	$linkType = $params->get ( 'linkType' );
	$imagePath = sprintf( MODULE_URL .'images/tp%d/',$style);
	$imageStyle = sprintf('height:%dpx;width:%dpx;margin-left:%dpx;margin-right:%dpx;margin-top:%dpx;margin-bottom:%dpx;',
						$params->get( 'height'),
						$params->get( 'width'),
						$params->get( 'marginLeft'),
						$params->get( 'marginRight'),
						$params->get( 'marginTop'),
						$params->get( 'marginBottom')
						);
	foreach ($signs as $index => $sign){
		if( $linkType == 'component' && isComponentInstalled()){
			$href = sprintf('index.php?option=com_horoscopo&sign=%s',$sign['pathName']);
		}else{
			$href = sprintf('%d/%s.php' ,$style,$sign['pathName']);
			$linkId = $sign['pathName'];
			$target = 'target="_blank"';
		}
		$image = '<img style="'.$imageStyle.'" src="'.$imagePath.$index.'.png" alt="'.$sign['name'].'"/>';
		$href =  JRoute::_($href);
		$links[$index] = "<a class='$linkId' $target href='$href'>$image</a>";
	}
	return $links;
}

function getSignsArray(){
	$signs = array(	1 => array('pathName' => JText::_( 'Oven' ),		'name' =>  JText::_( 'Овен' ) ),
					2 => array('pathName' => JText::_( 'Telec' ),		'name' => JText::_( 'Телец' ) ),
					3 => array('pathName' => JText::_( 'Bliznaci' ),		'name' => JText::_( 'Близнаци' ) ),
					4 => array('pathName' => JText::_( 'CANCER_PATH' ),		'name' => JText::_( 'CANCER' ) ),
					5 => array('pathName' => JText::_( 'LEO_PATH' ),			'name' => JText::_( 'LEO' ) ),
					6 => array('pathName' => JText::_( 'VIRGO_PATH' ),		'name' => JText::_( 'VIRGO' ) ),
					7 => array('pathName' => JText::_( 'LIBRA_PATH' ),		'name' => JText::_( 'LIBRA' ) ),
					8 => array('pathName' => JText::_( 'ESCORPIO_PATH' ),		'name' => JText::_( 'ESCORPIO' ) ),
					9 => array('pathName' => JText::_( 'SAGITARIO_PATH' ),	'name' => JText::_( 'SAGITARIO' ) ),
					10 => array('pathName' => JText::_( 'CAPRICORNIO_PATH' ),	'name' => JText::_( 'CAPRICORNIO' ) ),
					11 => array('pathName' => JText::_( 'ACUARIO_PATH' ),		'name' => JText::_( 'ACUARIO' ) ),
					12 => array('pathName' => JText::_( 'PISCIS_PATH' ),		'name' => JText::_( 'PISCIS' ) ), 
			);
	return $signs;
}

function checkUpdates($module,$params){
	$lastUpdate = $params->get('lastUpdateCheckTime');
	$checkTime = 7 * 24 * 60 * 60;

	if (! $params->get( 'updateCheck') || ( (!empty($lastUpdate)) && (time() - $lastUpdate ) < $checkTime ) ){
		return;
	}

	$updateData = getUpdateData($params->get( 'moduleVersion'));
	$notifiedVersion = '';
	if ($updateData->updated === FALSE && $params->get('lastNotifiedVersion') < $updateData->version ){
		global $mainframe;
		$sitename 		= $mainframe->getCfg( 'sitename' );
		$mailfrom 		= $mainframe->getCfg( 'mailfrom' );
		$fromname 		= $mainframe->getCfg( 'fromname' );
		$email			= $params->get('adminEmail');
		$subject = sprintf(JText::_( 'UPDATE_EMAIL_SUBJECT' ),$sitename);
		$message = sprintf ( JText::_( 'UPDATE_EMAIL_BODY' ), $updateData->updatelink, $updateData->changelog);
		$message = html_entity_decode($message, ENT_QUOTES);
		JUtility::sendMail($mailfrom, $fromname, $email, $subject, $message);
		$notifiedVersion = $updateData->version;
	}
	//Update last update parameter and lastNotified if necesary
	$parameter = new JParameter($module->params);
	if (!empty($notifiedVersion)){
		$parameter->set('lastNotifiedVersion',$notifiedVersion);
	}
	$parameter->set('lastUpdateCheckTime',time());
	$query = sprintf('Update #__modules set params="%s" Where id = %s ',$parameter->tostring(),$module->id);
	$db		=& JFactory::getDBO();
	$db->Execute($query);
}

function getUpdateData($moduleVersion){
	if ( !function_exists('json_decode') ){
		function json_decode($content, $assoc=false){
			require_once 'classes'.DS.'json.php';
			if ( $assoc ){
				$json = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
			} else {
				$json = new Services_JSON;
			}
			return $json->decode($content);
		}
	}
	$updateData = json_decode(file_get_contents( UPDATE_SERVICE_PATH . $moduleVersion));
	return $updateData;
}

function getLangCode(){
	$langObj = &JFactory::getLanguage();
	$langcode = substr($langObj->get('tag'),0,2);
	$redirectToEnglish = array('en');
	if(in_array($langcode,$redirectToEnglish)){
		return "en";
	} else {
		return "es";
	}
}

function getModuleUrl(){
	$relativePath =  str_replace(JPATH_BASE . DS,"", dirname(__FILE__));
	$relativePath = str_replace('\\', '/', $relativePath);
	$moduleURL = JURI::base() . $relativePath . '/';
	return $moduleURL ;
}