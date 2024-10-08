<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/metric_value.proto

namespace Google\Cloud\ServiceControl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a single metric value.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.MetricValue</code>
 */
class MetricValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The labels describing the metric value.
     * See comments on [google.api.servicecontrol.v1.Operation.labels][google.api.servicecontrol.v1.Operation.labels] for
     * the overriding relationship.
     * Note that this map must not contain monitored resource labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     */
    private $labels;
    /**
     * The start of the time period over which this metric value's measurement
     * applies. The time period has different semantics for different metric
     * types (cumulative, delta, and gauge). See the metric definition
     * documentation in the service configuration for details. If not specified,
     * [google.api.servicecontrol.v1.Operation.start_time][google.api.servicecontrol.v1.Operation.start_time] will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    protected $start_time = null;
    /**
     * The end of the time period over which this metric value's measurement
     * applies.  If not specified,
     * [google.api.servicecontrol.v1.Operation.end_time][google.api.servicecontrol.v1.Operation.end_time] will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    protected $end_time = null;
    protected $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels describing the metric value.
     *           See comments on [google.api.servicecontrol.v1.Operation.labels][google.api.servicecontrol.v1.Operation.labels] for
     *           the overriding relationship.
     *           Note that this map must not contain monitored resource labels.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The start of the time period over which this metric value's measurement
     *           applies. The time period has different semantics for different metric
     *           types (cumulative, delta, and gauge). See the metric definition
     *           documentation in the service configuration for details. If not specified,
     *           [google.api.servicecontrol.v1.Operation.start_time][google.api.servicecontrol.v1.Operation.start_time] will be used.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The end of the time period over which this metric value's measurement
     *           applies.  If not specified,
     *           [google.api.servicecontrol.v1.Operation.end_time][google.api.servicecontrol.v1.Operation.end_time] will be used.
     *     @type bool $bool_value
     *           A boolean value.
     *     @type int|string $int64_value
     *           A signed 64-bit integer value.
     *     @type float $double_value
     *           A double precision floating point value.
     *     @type string $string_value
     *           A text string value.
     *     @type \Google\Cloud\ServiceControl\V1\Distribution $distribution_value
     *           A distribution value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\MetricValue::initOnce();
        parent::__construct($data);
    }

    /**
     * The labels describing the metric value.
     * See comments on [google.api.servicecontrol.v1.Operation.labels][google.api.servicecontrol.v1.Operation.labels] for
     * the overriding relationship.
     * Note that this map must not contain monitored resource labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels describing the metric value.
     * See comments on [google.api.servicecontrol.v1.Operation.labels][google.api.servicecontrol.v1.Operation.labels] for
     * the overriding relationship.
     * Note that this map must not contain monitored resource labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * The start of the time period over which this metric value's measurement
     * applies. The time period has different semantics for different metric
     * types (cumulative, delta, and gauge). See the metric definition
     * documentation in the service configuration for details. If not specified,
     * [google.api.servicecontrol.v1.Operation.start_time][google.api.servicecontrol.v1.Operation.start_time] will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The start of the time period over which this metric value's measurement
     * applies. The time period has different semantics for different metric
     * types (cumulative, delta, and gauge). See the metric definition
     * documentation in the service configuration for details. If not specified,
     * [google.api.servicecontrol.v1.Operation.start_time][google.api.servicecontrol.v1.Operation.start_time] will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The end of the time period over which this metric value's measurement
     * applies.  If not specified,
     * [google.api.servicecontrol.v1.Operation.end_time][google.api.servicecontrol.v1.Operation.end_time] will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The end of the time period over which this metric value's measurement
     * applies.  If not specified,
     * [google.api.servicecontrol.v1.Operation.end_time][google.api.servicecontrol.v1.Operation.end_time] will be used.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * A boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @return bool
     */
    public function getBoolValue()
    {
        return $this->readOneof(4);
    }

    public function hasBoolValue()
    {
        return $this->hasOneof(4);
    }

    /**
     * A boolean value.
     *
     * Generated from protobuf field <code>bool bool_value = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A signed 64-bit integer value.
     *
     * Generated from protobuf field <code>int64 int64_value = 5;</code>
     * @return int|string
     */
    public function getInt64Value()
    {
        return $this->readOneof(5);
    }

    public function hasInt64Value()
    {
        return $this->hasOneof(5);
    }

    /**
     * A signed 64-bit integer value.
     *
     * Generated from protobuf field <code>int64 int64_value = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * A double precision floating point value.
     *
     * Generated from protobuf field <code>double double_value = 6;</code>
     * @return float
     */
    public function getDoubleValue()
    {
        return $this->readOneof(6);
    }

    public function hasDoubleValue()
    {
        return $this->hasOneof(6);
    }

    /**
     * A double precision floating point value.
     *
     * Generated from protobuf field <code>double double_value = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * A text string value.
     *
     * Generated from protobuf field <code>string string_value = 7;</code>
     * @return string
     */
    public function getStringValue()
    {
        return $this->readOneof(7);
    }

    public function hasStringValue()
    {
        return $this->hasOneof(7);
    }

    /**
     * A text string value.
     *
     * Generated from protobuf field <code>string string_value = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * A distribution value.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Distribution distribution_value = 8;</code>
     * @return \Google\Cloud\ServiceControl\V1\Distribution|null
     */
    public function getDistributionValue()
    {
        return $this->readOneof(8);
    }

    public function hasDistributionValue()
    {
        return $this->hasOneof(8);
    }

    /**
     * A distribution value.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Distribution distribution_value = 8;</code>
     * @param \Google\Cloud\ServiceControl\V1\Distribution $var
     * @return $this
     */
    public function setDistributionValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ServiceControl\V1\Distribution::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->whichOneof("value");
    }

}

