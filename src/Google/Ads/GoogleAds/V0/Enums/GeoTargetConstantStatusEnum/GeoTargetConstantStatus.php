<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v0/enums/geo_target_constant_status.proto

namespace Google\Ads\GoogleAds\V0\Enums\GeoTargetConstantStatusEnum;

/**
 * The possible statuses of a geo target constant.
 *
 * Protobuf type <code>google.ads.googleads.v0.enums.GeoTargetConstantStatusEnum.GeoTargetConstantStatus</code>
 */
class GeoTargetConstantStatus
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The geo target constant is valid.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * The geo target constant is obsolete and will be removed.
     *
     * Generated from protobuf enum <code>REMOVAL_PLANNED = 3;</code>
     */
    const REMOVAL_PLANNED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeoTargetConstantStatus::class, \Google\Ads\GoogleAds\V0\Enums\GeoTargetConstantStatusEnum_GeoTargetConstantStatus::class);

