<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/insight.proto

namespace Google\Cloud\Recommender\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An insight along with the information used to derive the insight. The insight
 * may have associated recommendations as well.
 *
 * Generated from protobuf message <code>google.cloud.recommender.v1.Insight</code>
 */
class Insight extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the insight.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Free-form human readable summary in English. The maximum length is 500
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    protected $description = '';
    /**
     * Fully qualified resource names that this insight is targeting.
     *
     * Generated from protobuf field <code>repeated string target_resources = 9;</code>
     */
    private $target_resources;
    /**
     * Insight subtype. Insight content schema will be stable for a given subtype.
     *
     * Generated from protobuf field <code>string insight_subtype = 10;</code>
     */
    protected $insight_subtype = '';
    /**
     * A struct of custom fields to explain the insight.
     * Example: "grantedPermissionsCount": "1000"
     *
     * Generated from protobuf field <code>.google.protobuf.Struct content = 3;</code>
     */
    protected $content = null;
    /**
     * Timestamp of the latest data used to generate the insight.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_refresh_time = 4;</code>
     */
    protected $last_refresh_time = null;
    /**
     * Observation period that led to the insight. The source data used to
     * generate the insight ends at last_refresh_time and begins at
     * (last_refresh_time - observation_period).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration observation_period = 5;</code>
     */
    protected $observation_period = null;
    /**
     * Information state and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightStateInfo state_info = 6;</code>
     */
    protected $state_info = null;
    /**
     * Category being targeted by the insight.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Insight.Category category = 7;</code>
     */
    protected $category = 0;
    /**
     * Insight's severity.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Insight.Severity severity = 15;</code>
     */
    protected $severity = 0;
    /**
     * Fingerprint of the Insight. Provides optimistic locking when updating
     * states.
     *
     * Generated from protobuf field <code>string etag = 11;</code>
     */
    protected $etag = '';
    /**
     * Recommendations derived from this insight.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Insight.RecommendationReference associated_recommendations = 8;</code>
     */
    private $associated_recommendations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the insight.
     *     @type string $description
     *           Free-form human readable summary in English. The maximum length is 500
     *           characters.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $target_resources
     *           Fully qualified resource names that this insight is targeting.
     *     @type string $insight_subtype
     *           Insight subtype. Insight content schema will be stable for a given subtype.
     *     @type \Google\Protobuf\Struct $content
     *           A struct of custom fields to explain the insight.
     *           Example: "grantedPermissionsCount": "1000"
     *     @type \Google\Protobuf\Timestamp $last_refresh_time
     *           Timestamp of the latest data used to generate the insight.
     *     @type \Google\Protobuf\Duration $observation_period
     *           Observation period that led to the insight. The source data used to
     *           generate the insight ends at last_refresh_time and begins at
     *           (last_refresh_time - observation_period).
     *     @type \Google\Cloud\Recommender\V1\InsightStateInfo $state_info
     *           Information state and metadata.
     *     @type int $category
     *           Category being targeted by the insight.
     *     @type int $severity
     *           Insight's severity.
     *     @type string $etag
     *           Fingerprint of the Insight. Provides optimistic locking when updating
     *           states.
     *     @type array<\Google\Cloud\Recommender\V1\Insight\RecommendationReference>|\Google\Protobuf\Internal\RepeatedField $associated_recommendations
     *           Recommendations derived from this insight.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recommender\V1\Insight::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the insight.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the insight.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Free-form human readable summary in English. The maximum length is 500
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Free-form human readable summary in English. The maximum length is 500
     * characters.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Fully qualified resource names that this insight is targeting.
     *
     * Generated from protobuf field <code>repeated string target_resources = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTargetResources()
    {
        return $this->target_resources;
    }

    /**
     * Fully qualified resource names that this insight is targeting.
     *
     * Generated from protobuf field <code>repeated string target_resources = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTargetResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->target_resources = $arr;

        return $this;
    }

    /**
     * Insight subtype. Insight content schema will be stable for a given subtype.
     *
     * Generated from protobuf field <code>string insight_subtype = 10;</code>
     * @return string
     */
    public function getInsightSubtype()
    {
        return $this->insight_subtype;
    }

    /**
     * Insight subtype. Insight content schema will be stable for a given subtype.
     *
     * Generated from protobuf field <code>string insight_subtype = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setInsightSubtype($var)
    {
        GPBUtil::checkString($var, True);
        $this->insight_subtype = $var;

        return $this;
    }

    /**
     * A struct of custom fields to explain the insight.
     * Example: "grantedPermissionsCount": "1000"
     *
     * Generated from protobuf field <code>.google.protobuf.Struct content = 3;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getContent()
    {
        return $this->content;
    }

    public function hasContent()
    {
        return isset($this->content);
    }

    public function clearContent()
    {
        unset($this->content);
    }

    /**
     * A struct of custom fields to explain the insight.
     * Example: "grantedPermissionsCount": "1000"
     *
     * Generated from protobuf field <code>.google.protobuf.Struct content = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->content = $var;

        return $this;
    }

    /**
     * Timestamp of the latest data used to generate the insight.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_refresh_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastRefreshTime()
    {
        return $this->last_refresh_time;
    }

    public function hasLastRefreshTime()
    {
        return isset($this->last_refresh_time);
    }

    public function clearLastRefreshTime()
    {
        unset($this->last_refresh_time);
    }

    /**
     * Timestamp of the latest data used to generate the insight.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_refresh_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastRefreshTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_refresh_time = $var;

        return $this;
    }

    /**
     * Observation period that led to the insight. The source data used to
     * generate the insight ends at last_refresh_time and begins at
     * (last_refresh_time - observation_period).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration observation_period = 5;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getObservationPeriod()
    {
        return $this->observation_period;
    }

    public function hasObservationPeriod()
    {
        return isset($this->observation_period);
    }

    public function clearObservationPeriod()
    {
        unset($this->observation_period);
    }

    /**
     * Observation period that led to the insight. The source data used to
     * generate the insight ends at last_refresh_time and begins at
     * (last_refresh_time - observation_period).
     *
     * Generated from protobuf field <code>.google.protobuf.Duration observation_period = 5;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setObservationPeriod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->observation_period = $var;

        return $this;
    }

    /**
     * Information state and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightStateInfo state_info = 6;</code>
     * @return \Google\Cloud\Recommender\V1\InsightStateInfo|null
     */
    public function getStateInfo()
    {
        return $this->state_info;
    }

    public function hasStateInfo()
    {
        return isset($this->state_info);
    }

    public function clearStateInfo()
    {
        unset($this->state_info);
    }

    /**
     * Information state and metadata.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.InsightStateInfo state_info = 6;</code>
     * @param \Google\Cloud\Recommender\V1\InsightStateInfo $var
     * @return $this
     */
    public function setStateInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Recommender\V1\InsightStateInfo::class);
        $this->state_info = $var;

        return $this;
    }

    /**
     * Category being targeted by the insight.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Insight.Category category = 7;</code>
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Category being targeted by the insight.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Insight.Category category = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Recommender\V1\Insight\Category::class);
        $this->category = $var;

        return $this;
    }

    /**
     * Insight's severity.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Insight.Severity severity = 15;</code>
     * @return int
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * Insight's severity.
     *
     * Generated from protobuf field <code>.google.cloud.recommender.v1.Insight.Severity severity = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setSeverity($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Recommender\V1\Insight\Severity::class);
        $this->severity = $var;

        return $this;
    }

    /**
     * Fingerprint of the Insight. Provides optimistic locking when updating
     * states.
     *
     * Generated from protobuf field <code>string etag = 11;</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Fingerprint of the Insight. Provides optimistic locking when updating
     * states.
     *
     * Generated from protobuf field <code>string etag = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

    /**
     * Recommendations derived from this insight.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Insight.RecommendationReference associated_recommendations = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAssociatedRecommendations()
    {
        return $this->associated_recommendations;
    }

    /**
     * Recommendations derived from this insight.
     *
     * Generated from protobuf field <code>repeated .google.cloud.recommender.v1.Insight.RecommendationReference associated_recommendations = 8;</code>
     * @param array<\Google\Cloud\Recommender\V1\Insight\RecommendationReference>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAssociatedRecommendations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Recommender\V1\Insight\RecommendationReference::class);
        $this->associated_recommendations = $arr;

        return $this;
    }

}

