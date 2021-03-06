<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/target_cpa_opt_in_recommendation_goal.proto

namespace Google\Ads\GoogleAds\V1\Enums\TargetCpaOptInRecommendationGoalEnum;

/**
 * Goal of TargetCpaOptIn recommendation.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.TargetCpaOptInRecommendationGoalEnum.TargetCpaOptInRecommendationGoal</code>
 */
class TargetCpaOptInRecommendationGoal
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Recommendation to set Target CPA to maintain the same cost.
     *
     * Generated from protobuf enum <code>SAME_COST = 2;</code>
     */
    const SAME_COST = 2;
    /**
     * Recommendation to set Target CPA to maintain the same conversions.
     *
     * Generated from protobuf enum <code>SAME_CONVERSIONS = 3;</code>
     */
    const SAME_CONVERSIONS = 3;
    /**
     * Recommendation to set Target CPA to maintain the same CPA.
     *
     * Generated from protobuf enum <code>SAME_CPA = 4;</code>
     */
    const SAME_CPA = 4;
    /**
     * Recommendation to set Target CPA to a value that is as close as possible
     * to, yet lower than, the actual CPA (computed for past 28 days).
     *
     * Generated from protobuf enum <code>CLOSEST_CPA = 5;</code>
     */
    const CLOSEST_CPA = 5;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TargetCpaOptInRecommendationGoal::class, \Google\Ads\GoogleAds\V1\Enums\TargetCpaOptInRecommendationGoalEnum_TargetCpaOptInRecommendationGoal::class);

