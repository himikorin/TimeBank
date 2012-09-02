
<?php defined('SYSPATH') or die('No direct script access.');
 
class timebankhelper {
 	
	public static function getAllValunteerNumber()
	{
		return ORM::factory('user')->where('role', '=', '0')->count_all();
	}
	
	public static function getOpenEventNumber()
	{
		return ORM::factory('event')->where('status', '=', '1')->count_all();
	}
	
	public static function getClosedEventNumber()
	{
		return ORM::factory('event')->where('status', '=', '0')->count_all();
	}
	
	public static function getJoinedValunteerNumber()
	{
		return DB::select(array('SUM("volunteer_joined")', 'jointed'))
					->from('events')
					->where('status','=','0')->execute()->get('jointed', 0);
	}
	
	public static function getWantedTime()
	{
		$count = 0;
		$events = ORM::factory('event')->where('status', '=', '1')->find_all();
		foreach ($events as $event)
		{
			$count += $event->time_cost * $event->volunteer_need_count;
		}
		return $count;
	}
	
	public static function getDonatedTime()
	{
		return DB::select(array('SUM("hour")', 'time_donate'))
					->from('user_timebanks')
					->where('status','=','1')->execute()->get('time_donate', 0);
	}
	
	public static function getFinsihedTime()
	{
		$events = ORM::factory('event')->where('status', '=', '0')->find_all();
		$time_done  = 0;
		foreach($events as $event)
		{
			$time_done += $event->time_cost * $event->volunteer_joined;
		}
		return $time_done;
	}
	
	public static function getDaysNumber()
	{
		$days = array();
		for($i = 0; $i <= 30 ; $i++)
		{
			$days[$i + 1] = $i + 1;
		}
		return $days; 
	}
	
	public static function getYearsNumber()
	{
		$years = array();
		for($i = 0; $i <= 150 ; $i++)
		{
			$years[$i +2400] = $i +2400;
		}
		return $years; 
	}
	
	public static function getRecommendEvent()
	{
		$recommend_event = DB::select()->from('recommend_event')->execute()->as_array();
		if(count($recommend_event) >=3)
		{
			return ORM::factory('event')->where_open()
									   ->where('id', '=', $recommend_event[0]['event_id'])
									   ->or_where('id', '=', $recommend_event[1]['event_id'])
									   ->or_where('id', '=', $recommend_event[2]['event_id'])
									   ->where_close()->find_all();
		}
		else
		{
			return ORM::factory('event', -1);	
		}
	}
	
	public static function buildSkilsForm($skills = array())
	{
	   $skill = Kohana::$config->load('timebank')->get('all_skills'); 
	   $dict = Kohana::$config->load('timebank')->get('worddict');
	   foreach ($skill as $title => $value)
	   {
		 echo  '<p><label>'.$dict[$title].'</label><br />';
		 foreach ($value as $title2 => $value2)
		 {
			echo  '<label style="margin-left: 10px;" > - '.$dict[$title2].'</label> <br />'; 
			foreach ($value2 as $name)
			{
				$value = '';
				 $checked = '';
				 
				if(array_key_exists(trim($name), $skills))
				{
				  $value = $skills[$name];
				 
				  if($value <> '')
				  {
					 $checked = 'checked="'.$value.'"'; 
				  }
				}
				
				if(phphelp::endsWith($name, 'T'))
				{
					echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox"> <span>'.$dict[$name].'</span> <br />';
					echo  '<input name='.$name.' value="'.$value.'" type="text" style="display:inline;width:40%;margin-left: 50px;"><br />';
				}
				else
				{
					echo  '<input style="margin-left: 20px;" '. $checked .' type="checkbox" name='.$name.'> <span>'.$dict[$name].'</span> <br />';
				}
			}
		 }
		 echo '<p>';
	   }
	}
}
 
?>

 