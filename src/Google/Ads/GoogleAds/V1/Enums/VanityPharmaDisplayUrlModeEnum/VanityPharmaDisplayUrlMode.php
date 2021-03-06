<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/vanity_pharma_display_url_mode.proto

namespace Google\Ads\GoogleAds\V1\Enums\VanityPharmaDisplayUrlModeEnum;

/**
 * Enum describing possible display modes for vanity pharma URLs.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.VanityPharmaDisplayUrlModeEnum.VanityPharmaDisplayUrlMode</code>
 */
class VanityPharmaDisplayUrlMode
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
     * Replace vanity pharma URL with manufacturer website url.
     *
     * Generated from protobuf enum <code>MANUFACTURER_WEBSITE_URL = 2;</code>
     */
    const MANUFACTURER_WEBSITE_URL = 2;
    /**
     * Replace vanity pharma URL with description of the website.
     *
     * Generated from protobuf enum <code>WEBSITE_DESCRIPTION = 3;</code>
     */
    const WEBSITE_DESCRIPTION = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VanityPharmaDisplayUrlMode::class, \Google\Ads\GoogleAds\V1\Enums\VanityPharmaDisplayUrlModeEnum_VanityPharmaDisplayUrlMode::class);

