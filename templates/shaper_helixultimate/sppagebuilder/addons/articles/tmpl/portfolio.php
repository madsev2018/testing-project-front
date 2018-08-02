<?php 
       $path3 = JURI::base() .'templates/'.$template.'/sppagebuilder/addons/articles/js/isotope.pkgd.min.js';
    $document->addScript($path3);
      $document->addScriptdeclaration($js3);
      $output  .= '<div class="sppb-addon portfolio sppb-addon-articles ' . $class . '">';

      if($title) {
        $output .= '<'.$heading_selector.' class="sppb-addon-title">' . $title . '</'.$heading_selector.'>';
      }

      $output .= '<div class="sppb-addon-content">';
      $output .= '<div class="sorting" id="options">';
        $output .= '<ul id="filters">';
          $output .= '<li>';
          $output .= '<a class="filter is-checked" data-filter="*">'.JText::_('TPL_FILT_SHOW_ALL').'</a>';
          $output .= '</li>';
          $cat = array();
          foreach ($items as $key => $item) { 
           $cat[] = $item->category;
          }
          $cat = array_unique($cat);
          foreach ($cat as $key => $item) { 
            $category =  str_replace(" ","",$item);
            $category = mb_strtolower($category);
            $output .= '<li>';
              $output .= '<a class="filter" data-filter=".'.$category.'">'.$item.'</a>';
            $output .= '</li>';
          }
        $output .= '</ul>';
        $output .= '<ul id="sort">';
          $output .= '<li>';
              $output .= '<a class="sort block asc" data-sort-by="name" data-order="asc">'.JText::_('TPL_SORT_NAME').'</a>';
              $output .= '<a class="sort none desc" data-sort-by="name" data-order="desc">'.JText::_('TPL_SORT_NAME').'</a>';
          $output .= '</li>';
          $output .= '<li>';
              $output .= '<a class="sort block asc" data-sort-by="number" data-order="asc">'.JText::_('TPL_SORT_DATE').'</a>';
              $output .= '<a class="sort none desc" data-sort-by="number" data-order="desc">'.JText::_('TPL_SORT_DATE').'</a>';
          $output .= '</li>';
          $output .= '<li>';
              $output .= '<a class="sort block asc" data-sort-by="popularity" data-order="asc">'.JText::_('TPL_SORT_POPULARITY').'</a>';
              $output .= '<a class="sort none desc" data-sort-by="popularity" data-order="desc">'.JText::_('TPL_SORT_POPULARITY').'</a>';
          $output .= '</li>';
        $output .= '</ul>';
      $output .= '</div>';
      $output .= '<div id="isotopeContainer" class="izotop">';
      
      foreach ($items as $key => $item) {
        if($show_category) {
            if ($resource == 'k2') {
              $item->catUrl = urldecode(JRoute::_(K2HelperRoute::getCategoryRoute($item->catid.':'.urlencode($item->category_alias))));
            } else {
              $item->catUrl = JRoute::_(ContentHelperRoute::getCategoryRoute($item->catslug));
            }
          }
        $category =  str_replace(" ","",$item->category);
        $category = mb_strtolower($category);
        $data = Jhtml::_('date', $item->created, 'jnY');
        if($columns > 0) {
         $output .= '<div class="sppb-col-sm-'. round(12/$columns) .' gallery-item '.$category.'" data-category="'.$category.'">';
        }else {
         $output .= '<div class="sppb-col-sm-0 gallery-item '.$category.'" data-category="'.$category.'">';
        }
        $output .= '<div class="addon-article">';
        $output .= '<div class="hidden">';
          $output .= '<div class="name">' . $item->title . '</div>';
          $output .= '<div class="data">' . $data . '</div>';
          $output .= '<div class="popularity">'.$item->hits.'</div>';
          $output .= '<div class="ordering">'.$item->ordering.'</div>';
          $output .= '</div>';
        if(!$hide_thumbnail) {
          $image = '';
          if ($resource == 'k2') {
            if(isset($item->image_medium) && $item->image_medium){
              $image = $item->image_medium;
            } elseif(isset($item->image_large) && $item->image_large){
              $image = $item->image_medium;
            }
          } else {
            $image = $item->image_thumbnail;
              $item_images = json_decode($item->images);
              $item_images = $item_images->image_fulltext;
          }
            if(isset($image) && $image) {  


            $output .= '<div class="image-box">';    
            if($fancybox_icon){      
              $output .= '<a class="fancybox-thumb" data-title="'. $item->title .'" href="'.$item_images.'"><i class="fa fa-search-plus"></i></a>';
            }
            $output .= '<a href="'. $item->link .'" itemprop="url"><img class="sppb-img-responsive" src="'. $image .'" alt="'. $item->title .'" itemprop="thumbnailUrl"></a>';
            $output .= '</div>'; 
            }
        }
        $output .= '<div class="box-ind"><div class="name-team"><a  href="'. $item->link .'" itemprop="url">' . $item->title . '</a></div>';
       if($show_author || $show_category || $show_date || $show_tags) {
          $output .= '<div class="sppb-article-meta">';

          if($show_category) {

            if ($resource == 'k2') {
              $item->catUrl = urldecode(JRoute::_(K2HelperRoute::getCategoryRoute($item->catid.':'.urlencode($item->category_alias))));
            } else {
              $item->catUrl = JRoute::_(ContentHelperRoute::getCategoryRoute($item->catslug));
            }

            $output .= '<span class="sppb-meta-category"><a href="'. $item->catUrl .'" itemprop="genre">' . $item->category . '</a></span>';
          }
          if($show_author) {
            $output .= '<span class="sppb-meta-author" itemprop="name"><i class="linearicons-user"></i>' . $item->created_by_alias . '</span>';
          }
          if($show_date) {
            $output .= '<span class="sppb-meta-date" itemprop="dateCreated"><i class="linearicons-calendar-full"></i>' . Jhtml::_('date', $item->created, 'DATE_FORMAT_LC3') . '</span>';
          }
          if (class_exists('Komento') && Komento::loadApplication('com_content')) {
            require_once( JPATH_ROOT . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_komento' . DIRECTORY_SEPARATOR . 'bootstrap.php' );
            $commentsModel  = Komento::getModel( 'comments' );
            $commentCount = $commentsModel->getCount( 'com_content', $item->id );
              $output .= '<span class="komento">';
              $output .= '<i class="linearicons-bubble"></i>'.$commentCount;
              $output .= '</span>';
          }
          if($show_tags) {
            $tagsHelper = new JHelperTags;
            $tags = $tagsHelper->getItemTags('com_content.article', $item->id);
            $tagLayout = new JLayoutFile('joomla.content.tags');
            $output .= '<span class="sppb-tag">'.$tagLayout->render($tags).'</span>';
          }  

          $output .= '</div>';
        }

        if($show_intro) {
          $item->introtext = strip_tags($item->introtext);
          $output .= '<div class="sppb-article-introtext">'. Jhtml::_('string.truncate', ($item->introtext), $intro_limit) .'</div>';
        }

        if($show_readmore) {
            $output .= '<a class="sppb-readmore sppb-btn sppb-btn-link" href="'. $item->link .'" itemprop="url">'. $readmore_text .' <i class="fa fa-arrow-circle-o-right"></i></a>';
          }

        $output .= '</div>';$output .= '</div>';
        $output .= '</div>';
      }

      $output  .= '</div>';

      // See all link
      if($link_articles) {

        if($all_articles_btn_icon_position == 'left') {
          $all_articles_btn_text = ($all_articles_btn_icon) ? '<i class="fa ' . $all_articles_btn_icon . '"></i> ' . $all_articles_btn_text : $all_articles_btn_text;
        } else {
          $all_articles_btn_text = ($all_articles_btn_icon) ? $all_articles_btn_text . ' <i class="fa ' . $all_articles_btn_icon . '"></i>' : $all_articles_btn_text;
        }

        //$output  .= '<a href="' . JRoute::_(ContentHelperRoute::getCategoryRoute($catid)) . '" id="btn-' . $this->addon->id . '" class="sppb-btn' . $all_articles_btn_class . '">' . $all_articles_btn_text . '</a>';

        if ($resource == 'k2') {
          $output  .= '<a href="' . urldecode(JRoute::_(K2HelperRoute::getCategoryRoute($catid.':'.urlencode($catid)))) . '" " id="btn-' . $this->addon->id . '" class="sppb-btn' . $all_articles_btn_class . '">' . $all_articles_btn_text . '</a>';
        } else{
          $output  .= '<div class="clearfix"></div><a href="' . $item->catUrl . '" id="btn-' . $this->addon->id . '" class="sppb-btn' . $all_articles_btn_class . '">' . $all_articles_btn_text . '</a>';
        }

      }

      $output  .= '</div>';
      $output  .= '</div>';
?>