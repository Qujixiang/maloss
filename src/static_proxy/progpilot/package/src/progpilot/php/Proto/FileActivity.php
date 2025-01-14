<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: behavior.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.FileActivity</code>
 */
class FileActivity extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string filename = 1;</code>
     */
    private $filename = '';
    /**
     * Generated from protobuf field <code>string filepath = 2;</code>
     */
    private $filepath = '';
    /**
     * Generated from protobuf field <code>string mode = 3;</code>
     */
    private $mode = '';
    /**
     * Generated from protobuf field <code>string permission = 4;</code>
     */
    private $permission = '';
    /**
     * Read information.
     *
     * Generated from protobuf field <code>string read_content = 5;</code>
     */
    private $read_content = '';
    /**
     * Generated from protobuf field <code>string read_content_size = 6;</code>
     */
    private $read_content_size = '';
    /**
     * Write to outside own folder.
     *
     * Generated from protobuf field <code>string add_content = 7;</code>
     */
    private $add_content = '';
    /**
     * Generated from protobuf field <code>int32 add_content_size = 8;</code>
     */
    private $add_content_size = 0;
    /**
     * Remove files outside own folder.
     *
     * Generated from protobuf field <code>string remove_content = 9;</code>
     */
    private $remove_content = '';
    /**
     * Generated from protobuf field <code>int32 remove_content_size = 10;</code>
     */
    private $remove_content_size = 0;
    /**
     * Encrypt files outside own folder.
     *
     * Generated from protobuf field <code>string modify_content = 11;</code>
     */
    private $modify_content = '';
    /**
     * Generated from protobuf field <code>int32 modify_content_size = 12;</code>
     */
    private $modify_content_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $filename
     *     @type string $filepath
     *     @type string $mode
     *     @type string $permission
     *     @type string $read_content
     *           Read information.
     *     @type string $read_content_size
     *     @type string $add_content
     *           Write to outside own folder.
     *     @type int $add_content_size
     *     @type string $remove_content
     *           Remove files outside own folder.
     *     @type int $remove_content_size
     *     @type string $modify_content
     *           Encrypt files outside own folder.
     *     @type int $modify_content_size
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Behavior::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string filename = 1;</code>
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Generated from protobuf field <code>string filename = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFilename($var)
    {
        GPBUtil::checkString($var, True);
        $this->filename = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string filepath = 2;</code>
     * @return string
     */
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Generated from protobuf field <code>string filepath = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFilepath($var)
    {
        GPBUtil::checkString($var, True);
        $this->filepath = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mode = 3;</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>string mode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string permission = 4;</code>
     * @return string
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Generated from protobuf field <code>string permission = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPermission($var)
    {
        GPBUtil::checkString($var, True);
        $this->permission = $var;

        return $this;
    }

    /**
     * Read information.
     *
     * Generated from protobuf field <code>string read_content = 5;</code>
     * @return string
     */
    public function getReadContent()
    {
        return $this->read_content;
    }

    /**
     * Read information.
     *
     * Generated from protobuf field <code>string read_content = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setReadContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string read_content_size = 6;</code>
     * @return string
     */
    public function getReadContentSize()
    {
        return $this->read_content_size;
    }

    /**
     * Generated from protobuf field <code>string read_content_size = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setReadContentSize($var)
    {
        GPBUtil::checkString($var, True);
        $this->read_content_size = $var;

        return $this;
    }

    /**
     * Write to outside own folder.
     *
     * Generated from protobuf field <code>string add_content = 7;</code>
     * @return string
     */
    public function getAddContent()
    {
        return $this->add_content;
    }

    /**
     * Write to outside own folder.
     *
     * Generated from protobuf field <code>string add_content = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAddContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->add_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 add_content_size = 8;</code>
     * @return int
     */
    public function getAddContentSize()
    {
        return $this->add_content_size;
    }

    /**
     * Generated from protobuf field <code>int32 add_content_size = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAddContentSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->add_content_size = $var;

        return $this;
    }

    /**
     * Remove files outside own folder.
     *
     * Generated from protobuf field <code>string remove_content = 9;</code>
     * @return string
     */
    public function getRemoveContent()
    {
        return $this->remove_content;
    }

    /**
     * Remove files outside own folder.
     *
     * Generated from protobuf field <code>string remove_content = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setRemoveContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->remove_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 remove_content_size = 10;</code>
     * @return int
     */
    public function getRemoveContentSize()
    {
        return $this->remove_content_size;
    }

    /**
     * Generated from protobuf field <code>int32 remove_content_size = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setRemoveContentSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->remove_content_size = $var;

        return $this;
    }

    /**
     * Encrypt files outside own folder.
     *
     * Generated from protobuf field <code>string modify_content = 11;</code>
     * @return string
     */
    public function getModifyContent()
    {
        return $this->modify_content;
    }

    /**
     * Encrypt files outside own folder.
     *
     * Generated from protobuf field <code>string modify_content = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setModifyContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->modify_content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 modify_content_size = 12;</code>
     * @return int
     */
    public function getModifyContentSize()
    {
        return $this->modify_content_size;
    }

    /**
     * Generated from protobuf field <code>int32 modify_content_size = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setModifyContentSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->modify_content_size = $var;

        return $this;
    }

}

