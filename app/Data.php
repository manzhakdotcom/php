<?php

namespace App;


class Data
{
    protected $data;

    public function __construct($post)
    {
        if (isset($_POST['data']) && !empty($_POST['data'])){
            $this->data = $_POST['data'];
        }
    }

    public function get_data()
    {
        return $this->data;
    }

    public function get_clean_data()
    {
        $bad_words = array('fuck', 'dick');
        $hide_words = array('f**k', 'd**k');
        return str_replace($bad_words, $hide_words, $this->get_data());

    }
}