<?php

$db->Execute("UPDATE ".TABLE_CONFIGURATION." SET configuration_key = 'CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_DESCRIPTION' WHERE configuration_key='MODULE_SHIPPING_FREESHIPPER_TEXT_DESCRIPTION'");
$db->Execute("UPDATE ".TABLE_CONFIGURATION." SET configuration_key = 'CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_WAY' WHERE configuration_key='MODULE_SHIPPING_FREESHIPPER_TEXT_WAY'");
$db->Execute("UPDATE ".TABLE_CONFIGURATION." SET configuration_value = '1.0.3' WHERE configuration_key='CONFIGURATION_OVERRIDESHIPPING_NO_PRICE_VERSION'");

