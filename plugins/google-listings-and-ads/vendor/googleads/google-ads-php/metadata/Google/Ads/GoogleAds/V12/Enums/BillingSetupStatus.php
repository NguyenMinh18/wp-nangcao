<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v12/enums/billing_setup_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V12\Enums;

class BillingSetupStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v12/enums/billing_setup_status.protogoogle.ads.googleads.v12.enums"�
BillingSetupStatusEnum"o
BillingSetupStatus
UNSPECIFIED 
UNKNOWN
PENDING
APPROVED_HELD
APPROVED
	CANCELLEDB�
"com.google.ads.googleads.v12.enumsBBillingSetupStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v12/enums;enums�GAA�Google.Ads.GoogleAds.V12.Enums�Google\\Ads\\GoogleAds\\V12\\Enums�"Google::Ads::GoogleAds::V12::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

