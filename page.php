<?php


class Page{

    private $title;
    private $body;
    private $footer;


    public function __construct($title, $body, $footer)
    {
        $this->title = $title;
        $this->body = $body;
        $this->footer = $footer;

    }

    public function getTitle()
    {
        return $this->title;
    }


    public function setTitle($value)
    {
        $this->title = $value;
    }


    public function getBody()
    {
        return $this->body;
    }


    public function setBody($value)
    {
        $this->body = $value;
    }


    public function getFooter()
    {
        return $this->footer;
    }


    public function setFooter($value)
    {
        $this->footer = $value;
    }

    public function displayPage(){

        return $this->title.$this->body.$this->footer;

    }





}

