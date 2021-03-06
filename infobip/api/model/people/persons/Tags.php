<?php
/*
 * @package: Infobip
 * @class: infobip\api\model\people\persons
 * @author: Zain Baloch
 */

namespace infobip\api\model\people\persons;

/**
 * This is a generated class and is not intended for modification!
 */
class Tags implements \JsonSerializable
{
    /* @var $name string */
    private $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        return get_object_vars($this);
    }
}