<?php

namespace App\Services\Helpers;

class ValidationCommonHelper
{
    public function prepareInteger($input)
    {
        return preg_replace('/[^0-9]+/', '', $input);
    }

    public function prepareSlug($slug, $title, $model)
    {
        $slug = trim($slug);
        if ($slug == null) {
            $slug = $title;
        }
        $slug = \Str::slug($slug, '-', NULL);
        $selected_slug = $slug;
        $slug_counter = 1;
        do {
            $slug_exists = $model::query()->where('slug', $selected_slug)->count();
            if ($slug_exists) {
                $selected_slug = $slug . "-" . $slug_counter++;
            }
        } while ($slug_exists);

        return $selected_slug;
    }
}
