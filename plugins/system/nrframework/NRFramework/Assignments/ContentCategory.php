<?php

/**
 * @author          Tassos.gr <info@tassos.gr>
 * @link            http://www.tassos.gr
 * @copyright       Copyright © 2018 Tassos Marinos All Rights Reserved
 * @license         GNU GPLv3 <http://www.gnu.org/licenses/gpl.html> or later
 */

namespace NRFramework\Assignments;

defined('_JEXEC') or die;

use NRFramework\Assignments\ContentBase;

class ContentCategory extends ContentBase
{
    /**
	 *  Article Object
	 *
	 *  @var  object
	 */
    private $article;
    
    /**
	 *  Class constructor
	 *
	 *  @param  object  $assignment
	 *  @param  object  $factory
	 */
	public function __construct($assignment, $factory)
	{
		parent::__construct($assignment, $factory);
		$this->getItem();
    }
    
    /**
	 *  Pass check for Joomla! Categories
	 *
	 *  @return  bool
	 */
	public function pass()
	{
		$is_content  = $this->request->option == 'com_content' ? true : false;
		$is_category = $this->request->view == 'category' ? true : false;
		$is_item     = in_array($this->request->view, array('', 'article', 'item', 'form'));

		// Check if we have a valid context
		if ($is_content != 'com_content')
		{
			return false;
		}

		// Check if we have a valid selection
		if (empty($this->selection))
		{
			return false;
		}

		$inc_categories = true;
		$inc_articles   = true;

		if (isset($this->params->inc))
		{
			$this->params->inc = is_array($this->params->inc) ? $this->params->inc : $this->splitKeywords($this->params->inc);
			$inc_categories = in_array('inc_categories', $this->params->inc);
			$inc_articles   = in_array('inc_articles', $this->params->inc);
		}

		// Check we have a valid context
		if (!($inc_categories && $is_category) && !($inc_articles && $is_item))
		{
			return false;
		}

		$pass = false;

		$inc_children = isset($this->params->inc_children) ? $this->params->inc_children : false;

		$catids = $this->getCategoryIds($is_category);

		foreach ($catids as $catid)
		{
			if (!$catid)
			{
				continue;
			}

			$pass = in_array($catid, $this->selection);

			// Pass check on child items only
			if ($pass && $inc_children == 2)
			{
				$pass = false;
				continue;
			}

			// Pass check for child items
			if (!$pass && $inc_children)
			{
				$parent_ids = $this->getParentIDs($catid, 'categories');
				$parent_ids = array_diff($parent_ids, array('1'));

				foreach ($parent_ids as $id)
				{
					if (in_array($id, $this->selection))
					{
						$pass = true;
						break;
					}
				}

				unset($parent_ids);
			}
		}

		return $pass;
    }

    /**
     *  Returns the assignment's value
     * 
     *  @return array Category IDs
     */
    public function value()
    {
        $is_category = $this->request->view == 'category' ? true : false;
        $inc_children = isset($this->params->inc_children) ? $this->params->inc_children : false;

        $ids = $this->getCategoryIds($is_category);

        if ($inc_children) 
        {
            foreach ($ids as $catid)
            {
                $ids[] = $this->getParentIDs($catid, 'categories');
            }
        }

        return $ids;
    }
    
    /**
	 *  Returns category IDs based on active view
	 *
	 *  @param   boolean  $is_category  The current view is a category view
	 *
	 *  @return  array                  The IDs
	 */
	private function getCategoryIds($is_category = false)
	{
		// If we are in category view return category's id
		if ($is_category)
		{
			return (array) $this->request->id;
		}

		// If we are in article view return article's category id
		if ($this->article && $this->article->catid)
		{
			return (array) $this->article->catid;
		}

		return false;
	}

	/**
	 *  Get current Joomla article object
	 *
	 *  @return  object
	 */
	public function getItem()
	{
		if ($this->article)
		{
			return $this->article;
		}

		// Check we have right context
		if ($this->request->option != 'com_content' || $this->request->view != 'article' || !$this->request->id)
		{
			return false;
		}

		// Setup model
		if (defined('nrJ4'))
		{	
			$model = new \Joomla\Component\Content\Site\Model\ArticleModel(['ignore_request' => true]);
			$model->setState('article.id', $this->request->id);
			$model->setState('params', $this->app->getParams());
		} else 
		{
			require_once JPATH_SITE . '/components/com_content/models/article.php';
			$model = \JModelLegacy::getInstance('Article', 'ContentModel');
		}

		try
		{
			$this->article = $model->getItem($this->request->id);
		}
		catch (\JException $e)
		{
			return null;
		}

		return $this->article;
	}
}