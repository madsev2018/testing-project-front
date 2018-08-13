<?php

/**
 * @author          Tassos.gr
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2018 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
*/

namespace NRFramework\Assignments;

defined('_JEXEC') or die;

use NRFramework\Assignments\K2;

class K2Item extends K2
{
    /**
     *  Pass check for K2 items
     *
     *  @return bool
     */
    public function pass()
    {
        // Check we are on the right context and we have a valid Item ID
        if (!$this->passContext() || !$id = $this->getItemID())
        {
            return false;
        }

        // check item's id
		$selection = is_array($this->selection) ? $this->selection : $this->splitKeywords($this->selection);
        $pass = $this->passSimple($id, $selection);

        // check items's text
        if (!empty($this->params->cont_keywords))
        {
            $keywords = $this->splitKeywords($this->params->cont_keywords);
            $pass     = $this->passContentKeywords($keywords);
        }
        
        // check item's metakeywords
        if (!empty($this->params->meta_keywords))
        {
            $meta = $this->splitKeywords($this->params->meta_keywords);
            $pass = $this->passMetaKeywords($meta);
        }

        return $pass;
    }

    /**
     *  Returns the assignment's value
     * 
     *  @return int K2 item ID
     */
	public function value()
	{
		return $this->getItemID();
	}

    /**
     *  Checks item's content for keywords.
     *  Used by pass()
     *  
     *  @param  string $keywords
     *  @return bool
     */
    protected function passContentKeywords($keywords)
    {
        $fields = ['introtext', 'fulltext'];
        $item = $this->getK2Item();
        if (!$item)
        {
            return false;
        }

        $text = '';
        foreach ($fields as $field)
        {
            if (!isset($item->{$field}))
            {
                return false;
            }

            $text = trim($text . ' ' . $item->{$field});
        }

        if (empty($text))
        {
            return false;
        }

        foreach ($keywords as $k)
        {
            $regex = '/' . preg_quote($k) . '/';
            if (!preg_match($regex, $text))
            {
                continue;
            }

            return true;
        }

        return false;
    }

    /**
     *  Checks item's meta keyywords.
     *  Used by pass()
     *
     *  @param  string $param_keywords
     *  @return bool
     */
    protected function passMetaKeywords($param_keywords)
    {
        // get current item's meta keywords
        $item = $this->getK2Item();
        if (!isset($item->metakey) || empty($item->metakey))
        {
            return false;
        }

        $keywords = $item->metakey;
        if (!is_string($keywords))
        {
            return false;
        }

        foreach($param_keywords as $pk)
        {
            if (empty($pk))
            {
                continue;
            }

            $regex = '/' . preg_quote($pk) . '/';
            if (!preg_match($regex, $keywords))
            {
                continue;
            }

            return true;
        }

        return false;
    }
}
