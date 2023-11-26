<?php
class Custom_WalkerNav extends Walker_Nav_Menu
{
    public $megaMenuID;
    public $subMenuID;
    public $count;
    public $flex;
    public function __construct()
    {
        $this->megaMenuID = 0;
        $this->subMenuID = 0;
        $this->count = 0;
        $this->flex = false;
    }
    function start_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        if ($depth == 1) {
            $output .= "\n$indent<ul class=\"sub-menu-2\"><div class=\"container-menu-2\">\n";
            
        }else{
            $output .= "\n$indent<ul class=\"sub-menu\"><div class=\"container-menu container-menu-styles\">\n";

        }


        if ($this->megaMenuID != 0 && $depth != 1) {
            $output .= "<li class=\"col col-". $this->count ."\"><ul>\n";
            // <h3 class=\"menu-titulo-interno\">TITULO</h3>
            $this->count++;
        }
    }
    
    public function end_lvl(&$output, $depth = 0, $args = array())
    {
        if ($this->megaMenuID != 0) {
            $output .= "</ul></li>";
        }
        $output .= "</div></ul>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {

        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Verifica si hay clases y haz algo con ellas
        if (!empty($classes)) {
            $class_string = ' class="' . esc_attr(implode(' ', $classes)) . '"';
        } else {
            $class_string = '';
        }
        $flex_start = array_search('flex-start', $classes);
        if ($flex_start !== false) {
            $output .= "<div class=\"flex\">\n";
        }

        if ($depth == 1) {
            $column_divider = array_search('column-divider', $classes);
            if ($column_divider !== false) {
                $output .= "</ul></li><li class=\"col col-". $this->count ."\"><ul>\n";
                $this->count++;
 
            }
        }

        if ( $this->megaMenuID != 0 && $this->megaMenuID === intval($item->menu_item_parent)) {



        }else {
            $this->megaMenuID = 0;
        }

        $megamenu = array_search('megamenu', $classes);
        $submenu = array_search('submenu', $classes);
        if ($megamenu !== false) {

            $this->megaMenuID = $item->ID;
            $this->count = 0;

        }



        $has_featured_image = array_search('featured-image', $classes);
        if ($has_featured_image !== false) {
            $postID = url_to_postid( $item->url );
            $indent = ($depth) ? str_repeat("\t", $depth) : '';
            $output .= $indent . '<li' . $class_string . '>';
            $output .= "<img src=\"" . get_the_post_thumbnail_url($postID) . "\"/>";
            $output .= '<a href="' . $item->url . '" class="featured-img-link"">' . $item->title . '</a>';
        }else{
            $description = array_search('description', $classes);
            if ($description !== false) {
                $output .= '<p class="item-description">'.$item->description.'</p>';
            }else{
                $titulo = array_search('titulo', $classes);
                if ($titulo !== false) {
                    $indent = ($depth) ? str_repeat("\t", $depth) : '';
                    $output .= $indent . '<li' . $class_string . '>';
                    $output .= '<h3 class="titulo-menu">' . $item->title . '</h3>';
                }else{
                    if ($megamenu !== false || $submenu !== false) {
                        $indent = ($depth) ? str_repeat("\t", $depth) : '';
                        $output .= $indent . '<li' . $class_string . '>';
                        $output .= '<a >' . $item->title . '</a>';
            
                    }else{
                        $indent = ($depth) ? str_repeat("\t", $depth) : '';
                        $output .= $indent . '<li' . $class_string . '>';
                        $output .= '<a href="' . $item->url . '">' . $item->title . '</a>';
                    }
                }

            }


        }


        $flex_end = array_search('flex-end', $classes);
        if ($flex_end !== false) {
            $output .= "</div>\n";
        }
    }


}