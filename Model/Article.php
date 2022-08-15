<?php

class Article
{
    private $id;
    private $category;
    private $subject;
    private $text;
    private $date_pub;

    /**
     * @param $category
     * @param $subject
     * @param $text
     * @param $date_pub
     */
    public function __construct($category, $subject, $text, $date_pub)
    {
        $this->category = $category;
        $this->subject = $subject;
        $this->text = $text;
        $this->date_pub = $date_pub;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getDatePub()
    {
        return $this->date_pub;
    }

    /**
     * @param mixed $date_pub
     */
    public function setDatePub($date_pub)
    {
        $this->date_pub = $date_pub;
    }




}