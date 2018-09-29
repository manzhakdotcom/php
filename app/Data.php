<?php

namespace App;


class Data
{
    protected $data;

    public function __construct($post)
    {
        $this->data = $post;
    }

    public function get_data()
    {
        if (isset($this->data['data']) && !empty($this->data['data'])){
            $bad_words = array('fuck', 'dick');
            $hide_words = array('f**k', 'd**k');
            $data = $this->data['data'];
            $data = str_replace($bad_words, $hide_words, $data);
            $view->data = $data;
        }
    }
}