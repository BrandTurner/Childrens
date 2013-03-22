<?php
/**
 * Example data access object.
 *
 * Retrieves a new feed via webservice and loads the data into a models.
 * @author: Brandon Turner
 * Normally, we would use an ORM to handle this type of thing. Maybe I need to stop using frameworks as a crutch?
 * Also, if there was some sort of polymorphism in the class generation, I'd use the factory pattern.
 * However; this class is not that complex. 
 *
 * @see http://rssfeeds.webmd.com/rss/rss.aspx?RSSSource=RSS_PUBLIC
 * @todo Add code to retrieve data from the web service
 * @todo Add code to instantiate/populate model(s)
 */

define ("RSS_FEED", "http://rssfeeds.webmd.com/rss/rss.aspx?RSSSource=RSS_PUBLIC");
require 'model.php';

class NewsDao
{
	public $models = array(); 

    public static function getData()
    {
    	/* Retrive data from Web Service. Note: code only works if you set allow_furl_open=1 in your php.ini */

		$xml_source = simplexml_load_file(RSS_FEED);
		foreach ($xml_source->channel->item as $item) {
			$models[] = new NewsModel($item);
		}
		return $models;
	}
}