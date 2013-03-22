<?php
/**
 * News model class for data returned from a news web service.
 * 
 * @todo Build out the members & methods that should exist in this model
 * @version 1.0
 * @author Brandon Turner
 * @var Pretty self-explanatory
 */
class NewsModel
{
	public $title;
	public $description;
	public $link;
	public $pubDate;

	public function __construct($item) 
	{
		$this->title = (string) $item->title;
		$this->description = (string) $item->description;
		$this->link = (string) $item->link;
		$this->pubDate =  (string) $item->pubDate;
	}

}
