<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ast.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>proto.SourceLocation</code>
 */
class SourceLocation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 row = 1;</code>
     */
    private $row = 0;
    /**
     * Generated from protobuf field <code>int32 column = 2;</code>
     */
    private $column = 0;
    /**
     * Generated from protobuf field <code>.proto.FileInfo file_info = 3;</code>
     */
    private $file_info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $row
     *     @type int $column
     *     @type \Proto\FileInfo $file_info
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Ast::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 row = 1;</code>
     * @return int
     */
    public function getRow()
    {
        return $this->row;
    }

    /**
     * Generated from protobuf field <code>int32 row = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRow($var)
    {
        GPBUtil::checkInt32($var);
        $this->row = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 column = 2;</code>
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Generated from protobuf field <code>int32 column = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkInt32($var);
        $this->column = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.proto.FileInfo file_info = 3;</code>
     * @return \Proto\FileInfo
     */
    public function getFileInfo()
    {
        return $this->file_info;
    }

    /**
     * Generated from protobuf field <code>.proto.FileInfo file_info = 3;</code>
     * @param \Proto\FileInfo $var
     * @return $this
     */
    public function setFileInfo($var)
    {
        GPBUtil::checkMessage($var, \Proto\FileInfo::class);
        $this->file_info = $var;

        return $this;
    }

}

