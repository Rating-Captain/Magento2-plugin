<?php

namespace RatingCaptain\RatingCaptainIntegration\Helper;

use RatingCaptain\RatingCaptainIntegration\Helper\AbstractData;

class Data extends AbstractData
{
	const XML_PATH_GENERAL_ENABLED = 'ratingcaptain/general/is_enabled';
	const XML_PATH_GENERAL_MAIN_TRACKING = 'ratingcaptain/general/tracking_id';
	const XML_PATH_GENERAL_MAIN_PAGE_WIDGET = 'ratingcaptain/general/main_page_widget';
	const XML_PATH_GENERAL_DEBUG = 'ratingcaptain/general/debug';

	public function isEnabled($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_ENABLED, $storeId);

	}

	public function getMainTracking($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_MAIN_TRACKING, $storeId);
	}

	public function getMainPageWidget($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_MAIN_PAGE_WIDGET, $storeId);
	}

	public function getDebug($storeId = null)
	{
		return $this->getConfigValue(self::XML_PATH_GENERAL_DEBUG, $storeId);
	}
}

