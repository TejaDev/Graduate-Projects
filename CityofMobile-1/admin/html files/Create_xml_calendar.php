<?php
//File to create XML file.
include ("Connection.php");
$myFile = "events.xml";
$fh = fopen($myFile, 'w') or die("can't open file");
$event_txt = "";
$event_txt .= '<?xml version="1.0"?>';

$event_txt .= '<monthly>';
    $query = Select("SELECT 	cal_events.event_id as id,
								cal_events.categories as color,
								cal_events.title as title,
								cal_dates.date as startdate
					FROM cal_events Inner join cal_dates
								ON cal_events.event_id = cal_dates.event"); 
    while($values_query = mysqli_fetch_assoc($query))
    {
        $event_txt .= '<event>';

        $event_txt .= '<id>' .$values_query['id']. '</id>';
        $event_txt .= '<name>' .$values_query['title']. '</name>';
        $event_txt .= '<startdate>' .$values_query['startdate']. '</startdate>';
		if($values_query['color'] == "Arts and Culture")
		{$event_txt .= '<color>' ."#ffb128". '</color>';}
		if($values_query['color'] == "Business Events")
		{$event_txt .= '<color>' ."#28cbff". '</color>';}
		if($values_query['color'] == "Sporting Events")
		{$event_txt .= '<color>' ."#9cc370". '</color>';}
		if($values_query['color'] == "City Special Events")
		{$event_txt .= '<color>' ."#9f4b99". '</color>';}
		$event_txt .= '<url>' ."Detail.php?id=".$values_query['id']. '</url>';

        $event_txt .= '</event>';
    }
$event_txt .= '</monthly>';

fwrite($fh, $event_txt);

fclose($fh);
?>