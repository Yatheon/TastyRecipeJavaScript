<?php

namespace TastyRecipe\Model;

class Comment implements \JsonSerializable
{

    private $username;
    private $comment;
    private $timestamp;
    private $created;
    private $deleted;

    public function __construct($username, $comment)
    {
        $this->username = $username;
        $this->comment = $comment;
        $this->timestamp = time();
        $this->created = date("Y-m-d H:i");
        $this->deleted = false;
    }

    /**
     * @return string The author's nick name.
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string The message.
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return int The time (on the server) when this entry was created.
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return The date and time when the comment was created in Y-m-d H:i format.
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return boolean True if the entry has been deleted.
     */
    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param boolean $deleted Set to true if the entry shall be deleted.
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }

    public function jsonSerialize()
    {
        $json_obj = new \stdClass;
        $json_obj->username = \json_encode($this->username);
        $json_obj->comment = \json_encode($this->comment, JSON_UNESCAPED_UNICODE);
        $json_obj->timestamp = \json_encode($this->timestamp);
        $json_obj->created = \json_encode($this->created);
        return $json_obj;
    }
}
