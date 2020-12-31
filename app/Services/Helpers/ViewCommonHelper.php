<?php

namespace App\Services\Helpers;

class ViewCommonHelper
{
    function category_select_options($categories, $current = "", $prefix = "")
    {
        $response = "";
        foreach ($categories as $category) {
            $selected = ($category->id == $current) ? "selected='selected'" : "";
            $title = $category->title;
            if ($prefix != "")
                $title = $prefix . " " . $title;
            $response .= "<option value='{$category->id}' {$selected}>{$title}</option>";

            if ($category->has('children'))
                $response .= $this->category_select_options($category->children, $current, $prefix . "--");
        }

        return $response;
    }

    function category_checkboxes($categories, $current, $prefix="")
    {
        ($current == null) ? $current = [] : $current;

        $response = "";
        foreach ($categories as $category) {
            $checked = ( in_array( $category->id, $current ) ) ? "checked='checked'" : "";
            $title = $category->title;
            $response .= "<p class='mb-0'>
                {$prefix}<input type='checkbox' name='categories[]' id='category_{$category->id}' value='{$category->id}' {$checked}>
                <label for='category_{$category->id}'>{$title}</label></p>";

            if ($category->has('children'))
                $response .= $this->category_checkboxes($category->children, $current, $prefix . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
        }
        return $response;
    }
}
