<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: module.proto

namespace Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Summarize new sources, sinks and taint wrappers exposed by the current package, to enable module-based taint analysis
 *
 * Generated from protobuf message <code>proto.ModuleSummary</code>
 */
class ModuleSummary extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.proto.PackageInfo package_info = 1;</code>
     */
    private $package_info = null;
    /**
     * Generated from protobuf field <code>repeated .proto.ModuleSource sources = 2;</code>
     */
    private $sources;
    /**
     * Generated from protobuf field <code>repeated .proto.ModuleSink sinks = 3;</code>
     */
    private $sinks;
    /**
     * Generated from protobuf field <code>repeated .proto.ModuleTaintWrapper taint_wrappers = 4;</code>
     */
    private $taint_wrappers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Proto\PackageInfo $package_info
     *     @type \Proto\ModuleSource[]|\Google\Protobuf\Internal\RepeatedField $sources
     *     @type \Proto\ModuleSink[]|\Google\Protobuf\Internal\RepeatedField $sinks
     *     @type \Proto\ModuleTaintWrapper[]|\Google\Protobuf\Internal\RepeatedField $taint_wrappers
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Module::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.proto.PackageInfo package_info = 1;</code>
     * @return \Proto\PackageInfo
     */
    public function getPackageInfo()
    {
        return $this->package_info;
    }

    /**
     * Generated from protobuf field <code>.proto.PackageInfo package_info = 1;</code>
     * @param \Proto\PackageInfo $var
     * @return $this
     */
    public function setPackageInfo($var)
    {
        GPBUtil::checkMessage($var, \Proto\PackageInfo::class);
        $this->package_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ModuleSource sources = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ModuleSource sources = 2;</code>
     * @param \Proto\ModuleSource[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\ModuleSource::class);
        $this->sources = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ModuleSink sinks = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSinks()
    {
        return $this->sinks;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ModuleSink sinks = 3;</code>
     * @param \Proto\ModuleSink[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\ModuleSink::class);
        $this->sinks = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ModuleTaintWrapper taint_wrappers = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTaintWrappers()
    {
        return $this->taint_wrappers;
    }

    /**
     * Generated from protobuf field <code>repeated .proto.ModuleTaintWrapper taint_wrappers = 4;</code>
     * @param \Proto\ModuleTaintWrapper[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTaintWrappers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Proto\ModuleTaintWrapper::class);
        $this->taint_wrappers = $arr;

        return $this;
    }

}

