<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/user_interest_taxonomy_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\UserInterestTaxonomyTypeEnum;

/**
 * Enum containing the possible UserInterestTaxonomyTypes.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.UserInterestTaxonomyTypeEnum.UserInterestTaxonomyType</code>
 */
class UserInterestTaxonomyType
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
     * The affinity for this user interest.
     *
     * Generated from protobuf enum <code>AFFINITY = 2;</code>
     */
    const AFFINITY = 2;
    /**
     * The market for this user interest.
     *
     * Generated from protobuf enum <code>IN_MARKET = 3;</code>
     */
    const IN_MARKET = 3;
    /**
     * Users known to have installed applications in the specified categories.
     *
     * Generated from protobuf enum <code>MOBILE_APP_INSTALL_USER = 4;</code>
     */
    const MOBILE_APP_INSTALL_USER = 4;
    /**
     * The geographical location of the interest-based vertical.
     *
     * Generated from protobuf enum <code>VERTICAL_GEO = 5;</code>
     */
    const VERTICAL_GEO = 5;
    /**
     * User interest criteria for new smart phone users.
     *
     * Generated from protobuf enum <code>NEW_SMART_PHONE_USER = 6;</code>
     */
    const NEW_SMART_PHONE_USER = 6;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(UserInterestTaxonomyType::class, \Google\Ads\GoogleAds\V1\Enums\UserInterestTaxonomyTypeEnum_UserInterestTaxonomyType::class);

