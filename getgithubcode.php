<?php
/**
 * Emerson Rocha Luiz { emerson@webdesign.eng.br - http://fititnt.org }
 * Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informacao.
 * GPL3
 */
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

/**
 * GetGitHub Content Plugin
 *
 * @since		1.6
 */
class plgContentExample extends JPlugin
{
	/**
	 * Example before display content method
	 *
	 * Method is called by the view and the results are imploded and displayed in a placeholder
	 *
	 * @param	string		The context for the content passed to the plugin.
	 * @param	object		The content object.  Note $article->text is also available
	 * @param	object		The content params
	 * @param	int			The 'page' number
	 * @return	string
	 * @since	1.6
	 */
	public function onContentBeforeDisplay($context, &$article, &$params, $limitstart)
	{
		$app = JFactory::getApplication();
                
                // simple performance check to determine whether bot should process further
		if (strpos($article->text, 'github') === false) {
			return true;
		}
                
		// expression to search for
		$regex		= '/{github\s+(.*?)}/i'; //@todo: change to real regex later
		$matches	= array();

		// find all instances of plugin and put in $matches
		preg_match_all($regex, $article->text, $matches, PREG_SET_ORDER);

		foreach ($matches as $match) {
			// $match[0] is full pattern match, $match[1] is the position
			$output = $this->_getGithubRawCode($match[1]);
			// We should replace only first occurrence in order to allow positions with the same name to regenerate their content:
			$article->text = preg_replace("|$match[0]|", $output, $article->text, 1);
		}
                
                

		return '';
	}
        
        protected function _getGithubRawCode($url){
            
            
            return $code;
        }
}
