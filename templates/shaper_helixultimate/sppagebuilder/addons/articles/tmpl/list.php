<?php 

      $output  .= '<div class="sppb-addon sppb-addon-articles ' . $class . '">';

      if($title) {
        $output .= '<'.$heading_selector.' class="sppb-addon-title">' . $title . '</'.$heading_selector.'>';
      }

      $output .= '<div class="sppb-addon-content">';
      if(!$used_masonry){
        $output .= '<div class="sppb-row blog-list">';
      }else {
        $output .= '<div class="grid">';
      }
      foreach ($items as $key => $item) {
        if(!$used_masonry){
          $output .= '<div class="sppb-col-sm-'. round(12/$columns) .'">';
        }else {
          if($columns > 0) {
           $output .= '<div class="sppb-col-sm-'. round(12/$columns) .' grid-item">';
          }else {
           $output .= '<div class="sppb-col-sm-0 grid-item">';
          }
        }
        $output .= '<div class="addon-article">';

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
              $output .= '<a data-fancybox-group="portfolio" data-fancybox-type="image" data-fancybox="fancybox-thumb" class="fancybox-thumb" data-title="'. $item->title .'" href="'.$item_images.'"><i class="fa fa-search-plus"></i></a>';
            }
            $output .= '<a href="'. $item->link .'" itemprop="url"><img class="sppb-img-responsive" src="'. JURI::base(true) . '/'. $image .'" alt="'. $item->title .'" itemprop="thumbnailUrl"></a>';
            $output .= '</div>'; 
            }
        }

        $output .= '<div class="title-blog-list"><a href="'. $item->link .'" itemprop="url">' . $item->title . '</a></div>';

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
          if($show_date) {
            $output .= '<span class="sppb-meta-date" itemprop="dateCreated">' . Jhtml::_('date', $item->created, 'DATE_FORMAT_LC3') . '</span>';
            if (class_exists('Komento') && Komento::loadApplication('com_content')) {
            require_once( JPATH_ROOT . DIRECTORY_SEPARATOR . 'components' . DIRECTORY_SEPARATOR . 'com_komento' . DIRECTORY_SEPARATOR . 'bootstrap.php' );
            $commentsModel  = Komento::getModel( 'comments' );
            $commentCount = $commentsModel->getCount( 'com_content', $item->id );
              $output .= '<span class="komento">';
              $output .= '<i class="linearicons-bubble"></i>'.$commentCount;
              $output .= '</span>';

            }
      
          }
          if($show_author) {
            $output .= '<span class="sppb-meta-author" itemprop="name">' . $item->created_by_alias . '</span>';
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

        if($show_readmore || $show_date) {
           $output .= '<div class="btn-pos">';
          if($show_readmore) {
            $output .= '<a class="sppb-readmore sppb-btn sppb-btn-link" href="'. $item->link .'" itemprop="url">'. $readmore_text .' <i class="fa fa-arrow-circle-o-right"></i></a>';
          }
          $output .= '</div>';
       }

        $output .= '</div>';
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