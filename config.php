<?php

/**
 * SEOmatic Configuration
 *
 * Completely optional configuration settings for SEOmatic if you want to customize some
 * of its more esoteric behavior, or just want specific control over things.
 */

return array(

    /*
     * Controls whether SEOmatic will truncate the text in <title> tags to 70 characters.
     * It is HIGHLY recommended that you leave this on, as search engines do not want
     * <title> tags to be long, and long titles won't display well on mobile either.
     */
    'truncateTitleTags' => true,

	/*
     * Sets the maximum length for titles when `truncateTitleTags` is false.
     */
	'maxTitleLength' => 200,

	/*
     * Sets the maximum length for description text.
	 * It is generally recommended to restrict description text to no longer than about 155-160 characters.
	 * (In many cases, search engines may truncate description text to around this length, especially when using
	 * the description text as a SERP snippet.)
     */
	'maxDescriptionLength' => 160,

	/*
     * Sets the maximum length for keywords text.
     */
	'maxKeywordsLength' => 200,

    /*
     * SEOmatic will render the Google Analytics <script> tag and code for you, if you
     * enter a Google Analytics UID tracking code in the Site Identity settings.  It
     * does not render the <script> tag if devMode is on, but here is an additional
     * override for controlling it.
     */
    'renderGoogleAnalyticsScript' => true,

);