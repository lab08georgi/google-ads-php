<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/new_resource_creation_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\NewResourceCreationErrorEnum;

/**
 * Enum describing possible new resource creation errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.NewResourceCreationErrorEnum.NewResourceCreationError</code>
 */
class NewResourceCreationError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Do not set the id field while creating new resources.
     *
     * Generated from protobuf enum <code>CANNOT_SET_ID_FOR_CREATE = 2;</code>
     */
    const CANNOT_SET_ID_FOR_CREATE = 2;
    /**
     * Creating more than one resource with the same temp ID is not allowed.
     *
     * Generated from protobuf enum <code>DUPLICATE_TEMP_IDS = 3;</code>
     */
    const DUPLICATE_TEMP_IDS = 3;
    /**
     * Parent resource with specified temp ID failed validation, so no
     * validation will be done for this child resource.
     *
     * Generated from protobuf enum <code>TEMP_ID_RESOURCE_HAD_ERRORS = 4;</code>
     */
    const TEMP_ID_RESOURCE_HAD_ERRORS = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NewResourceCreationError::class, \Google\Ads\GoogleAds\V1\Errors\NewResourceCreationErrorEnum_NewResourceCreationError::class);

