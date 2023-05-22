<?php 

if (!class_exists('SixbdigitalCustom_Nav_Walker')) {
    class SixbdigitalCustom_Nav_Walker extends Walker_Nav_Menu { 

        function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { 
            if (!$element)
                return;
            $id_field = $this->db_fields['id'];

            if (is_array($args[0]))
                $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
            else if (is_object($args[0]))
                $args[0]->has_children = !empty($children_elements[$element->$id_field]);
            $cb_args = array_merge(array(&$output, $element, $depth), $args);
            call_user_func_array(array(&$this, 'start_el'), $cb_args);

            $id = $element->$id_field;
            if (($max_depth == 0 || $max_depth > $depth + 1) && isset($children_elements[$id])) {

                foreach ($children_elements[$id] as $child) {

                    if (!isset($newlevel)) {
                        $newlevel = true;
                        $cb_args = array_merge(array(&$output, $depth), $args);
                        call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                    }
                    $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
                }
                unset($children_elements[$id]);
            }

            if (isset($newlevel) && $newlevel) {
                $cb_args = array_merge(array(&$output, $depth), $args);
                call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
            }

            $cb_args = array_merge(array(&$output, $element, $depth), $args);
            call_user_func_array(array(&$this, 'end_el'), $cb_args);
        }

        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { 
            if ((is_object($item) && $item->title == null) || (!is_object($item))) {
                return ;
            }

            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $li_attributes = '';
            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            if (is_object($args) && $args->has_children) {
                //$classes[] = 'dropdown';
                $li_attributes .= ' data-dropdown="dropdown"';
                $classes[] = 'relative flex dropdown';
            }
            $classes[] = 'menu-item-' . $item->ID;
            $classes[] = ($item->current) ? 'active' : '';

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = ' class="' . esc_attr($class_names) . '"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

            $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .=!empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .=!empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .=!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
            $attributes .= (is_object($args) && $args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

            $item_output = (is_object($args)) ? $args->before : '';
            $item_output .= '<a class="inline-flex w-full items-center border-b-2 border-transparent px-1 pt-1 text-base font-normal text-gray-500 hover:text-primary-600"' . $attributes . '>';
            $item_output .= (is_object($args) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (is_object($args) ? $args->link_after : '');
            $item_output .= (is_object($args) && $args->has_children) ? ' <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>' : '';
            $item_output .= '</a>';
            $item_output .= (is_object($args) ? $args->after : '');

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }


        public function start_lvl(&$output, $depth = 0, $args = array()) { 
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<div class=\"dropdown-menu absolute right-0 top-1 z-10 mt-5 flex w-screen max-w-min px-4\"><ul class=\"sub-menu dropdown-menu w-56 shrink rounded-xl bg-white p-4 text-base font-normal leading-6 text-gray-500 shadow-lg ring-1 ring-gray-900/5 \">\n";
        }


	}


    class SixbdigitalCustom_Nav_Walker_Mobile extends Walker_Nav_Menu { 

        function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output) { 
            if (!$element)
                return;
            $id_field = $this->db_fields['id'];

            if (is_array($args[0]))
                $args[0]['has_children'] = !empty($children_elements[$element->$id_field]);
            else if (is_object($args[0]))
                $args[0]->has_children = !empty($children_elements[$element->$id_field]);
            $cb_args = array_merge(array(&$output, $element, $depth), $args);
            call_user_func_array(array(&$this, 'start_el'), $cb_args);

            $id = $element->$id_field;
            if (($max_depth == 0 || $max_depth > $depth + 1) && isset($children_elements[$id])) {

                foreach ($children_elements[$id] as $child) {

                    if (!isset($newlevel)) {
                        $newlevel = true;
                        $cb_args = array_merge(array(&$output, $depth), $args);
                        call_user_func_array(array(&$this, 'start_lvl'), $cb_args);
                    }
                    $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
                }
                unset($children_elements[$id]);
            }

            if (isset($newlevel) && $newlevel) {
                $cb_args = array_merge(array(&$output, $depth), $args);
                call_user_func_array(array(&$this, 'end_lvl'), $cb_args);
            }

            $cb_args = array_merge(array(&$output, $element, $depth), $args);
            call_user_func_array(array(&$this, 'end_el'), $cb_args);
        }

        public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) { 
            if ((is_object($item) && $item->title == null) || (!is_object($item))) {
                return ;
            }

            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $li_attributes = '';
            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;
            if (is_object($args) && $args->has_children) {
                //$classes[] = 'dropdown';
                $li_attributes .= ' data-dropdown="dropdown"';
                $classes[] = '';
            }
            $classes[] = 'menu-item-' . $item->ID;
            $classes[] = ($item->current) ? 'active' : '';

            $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = ' class="' . esc_attr($class_names) . '"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

            $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .=!empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .=!empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .=!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';
            $attributes .= (is_object($args) && $args->has_children) ? ' class="dropdown-toggle" data-toggle="dropdown"' : '';

            $item_output = (is_object($args)) ? $args->before : '';
            $item_output .= '<a class="inline-flex w-full border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"' . $attributes . '>';
            $item_output .= (is_object($args) ? $args->link_before : '') . apply_filters('the_title', $item->title, $item->ID) . (is_object($args) ? $args->link_after : '');
            $item_output .= (is_object($args) && $args->has_children) ? ' <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>' : '';
            $item_output .= '</a>';
            $item_output .= (is_object($args) ? $args->after : '');

            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }


        public function start_lvl(&$output, $depth = 0, $args = array()) { 
            $indent = str_repeat("\t", $depth);
            $output .= "\n$indent<div class=\"dropdown-menu flex w-full px-4\"><ul class=\"sub-menu dropdown-menu  shrink  bg-white w-full text-base font-normal leading-6 text-gray-500 \">\n";
        }


	}
}