<?php

namespace App;


class Data
{
    public function __construct()
    {
    }

    public static function get_clean_data($post)
    {
        if (isset($post) && !empty($post))
        {
            $bad_words = array('fuck', 'dick');
            $hide_words = array('f**k', 'd**k');
            return str_replace($bad_words, $hide_words,$post);
        }
        return 'Type text';
    }
}