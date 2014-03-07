<?php
/**
 * mitarbeiterbereich2
 *
 * @author rok
 * @since 07.03.14
 */

namespace Ipunkt\LaravelAnalytics\Providers;


use Ipunkt\LaravelAnalytics\Contracts\AnalyticsProviderInterface;

class NoAnalytics implements AnalyticsProviderInterface {

	/**
	 * returns the javascript code for embedding the analytics stuff
	 *
	 * @return string
	 */
	public function render()
	{
		return '';
	}

	/**
	 * track an page view
	 *
	 * @param null|string $page
	 * @param null|string $title
	 * @param null|string $hittype
	 * @return void
	 */
	public function trackPage($page, $title, $hittype)
	{

	}

	/**
	 * track an event
	 *
	 * @param string $category
	 * @param string $action
	 * @param null|string $label
	 * @param null|int $value
	 * @return void
	 */
	public function trackEvent($category, $action, $label, $value)
	{

	}

	/**
	 * track any custom code
	 *
	 * @param string $customCode
	 * @return void
	 */
	public function trackCustom($customCode)
	{

	}

	/**
	 * enable auto tracking
	 *
	 * @return void
	 */
	public function enableAutoTracking()
	{

	}

	/**
	 * disable auto tracking
	 *
	 * @return void
	 */
	public function disableAutoTracking()
	{

	}

}