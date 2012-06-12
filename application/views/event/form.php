<?
//build array of times.
$times = array();
$time = strtotime("00:00");
$times["00:00:00"] = date("H:i",$time);
for($i = 1;$i < 48;$i++) {
	$time = strtotime("+ 30 minutes",$time);
	$key = date("H:i",$time);
	$times[$key.':00'] = date("H:i",$time);
}
$times['23:59:59'] = '23:59';
?>
<div id="leftSide">
    <fieldset>
        <legend></legend>
        <p><label><strong>ชื่องานอาสา</strong>  ตย.อาสาช่วยคัดหนังสือเพื่อแบ่งปันให้น้องในพื้นที่ขาดแคลน</label></p>
        <p>
			<?= Form::input('name', HTML::chars($event->name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'name'); ?></font>
            </div>
        </p>
        <p><label><strong>ในโครงการ (ถ้ามี)</strong>  ตย.โครงการอ่านสร้างชาติ</label></p>
        <p>
        	<?= Form::input('project_name', HTML::chars($event->project_name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'project_name'); ?></font>
            </div>
        </p>
        <p><label><strong>โดยองค์กร</strong></label></p>
        <p><input type="text"></p>
        <p><strong>เปิดรับสมัคร</strong></p>
        <p><label>ตั้งแต่วันที่</label></p>
        <p>
			<?= Form::input('signup_begin_date', HTML::chars($event->signup_begin_date), array('class' => 'datepicker')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'signup_begin_date'); ?></font>
            </div>
		</p>
        <p><label>ถึงวันที่</label></p>
        <p>
			<?= Form::input('signup_end_date', HTML::chars($event->signup_end_date), array('class' => 'datepicker')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'signup_end_date'); ?></font>
            </div>        
        </p>
        <p><label>ตั้งแต่เวลา</label>
        	<?= Form::select('signup_begin_time', $times); ?>
        	<label>ถึง</label>
        	<?= Form::select('signup_end_time', $times, '23:59:59'); ?>
        </p>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <p><legend><strong>วันทำอาสา</strong></legend></p>
        <p><label>ตั้งแต่วันที่</label></p>
        <p>
			<?= Form::input('volunteer_begin_date', HTML::chars($event->volunteer_begin_date), array('class' => 'datepicker', 'id' => 'volunteer_begin_date', 'onChange' => 'difDateTIme()')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_begin_date'); ?></font>
            </div>           
        </p>
        <p><label>ถึงวันที่</label>
        </p>
        <p>
			<?= Form::input('volunteer_end_date', HTML::chars($event->volunteer_end_date), array('class' => 'datepicker', 'id' => 'volunteer_end_date', 'onChange' => 'difDateTIme()')); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_end_date'); ?></font>
            </div>           
        </p>
		<p><label>ตั้งแต่เวลา</label>
        	<?= Form::select('volunteer_begin_time', $times, '', array('id' => 'volunteer_begin_time', 'onChange' => 'difDateTIme()')); ?>
        	<label>ถึง</label>
        	<?= Form::select('volunteer_end_time', $times, '23:59:59', array('id' => 'volunteer_end_time', 'onChange' => 'difDateTIme()')); ?>
        </p>
        <p><?= Form::radio('day', 'every_day',($event->days == '')? true : false, array('id' => 'every_day', 'onChange' => 'everyDayChecked()')); ?>ทุกวัน (จันทร์ - อาทิตย์)</p>
        <p><?= Form::radio('day', 'day', ($event->days != '')? true : false, array('id' => 'day')); ?>ระบุวัน (เลือกได้มากกว่า 1)</p>
        
        <p style="margin:3px 0 3px 78px; width:250px;" >
        	<?php  
				$days = Kohana::$config->load('timebank')->get('days'); 
				for($i = 0 ; $i < sizeof($days) ; $i++){
					$checked = FALSE;
					if($event->days != '') {
						$pos = strpos($event->days, $days[$i]);
						if (  $pos > 0){
							$checked = TRUE;
						}
					}
					echo Form::checkbox($days[$i], $days[$i], $checked, array('id' => 'day'.$i, 'onChange' => 'eachDayChecked()')).''. Form::label($days[$i], $days[$i], array('class'=>'day'));
				}
            ?>
        </p>
        <p>รวม <input name='time_cost' id='time_cost'  varlue = "<?= $event->time_cost ?>" type="text" style="width:50px;margin:0;display:inline;"> ชม.(อัตโนมัติ)</p>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <legend></legend>
        <p><label>สถานที่</label>
			<?= Form::input('location_name', HTML::chars($event->location_name)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_name'); ?></font>
            </div>        
        </p>
        <p><label>จังหวัด</label>
        	<?php
				$provices = Kohana::$config->load('timebank')->get('provices'); 
				echo Form::select('location_province', $provices, $event->location_province, array ('class' => 'full'));
			?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_province'); ?></font>
            </div>           
        </p>
        <p><label>เขต</label>
			<?= Form::input('location_district', HTML::chars($event->location_district)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_district'); ?></font>
            </div>
        </p>
        <p><label>รหัสไปรษณีย์</label>
			<?= Form::input('location_postcode', HTML::chars($event->location_postcode)); ?>
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'location_postcode'); ?></font>
            </div>
        </p>
        <p><label>จำนวนอาสาสมัครที่ต้องการ </label>
        	<?= Form::input('volunteer_need_count', HTML::chars($event->volunteer_need_count)
							, array('style' =>'width:50px;margin:10px 0 0;display:inline;')); ?> คน
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'volunteer_need_count'); ?></font>
            </div>
        </p>
        <p><label>รายละเอียดของงานอาสา</label></p>
        <p>
			<?= Form::textarea('detail', HTML::chars($event->detail), array('rows' => 3)); ?>      
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'detail'); ?></font>
            </div>  
        </p>
        <p><label>ลักษณะการเดินทาง</label></p>
        <p>
        	<?= Form::textarea('travel_detail', HTML::chars($event->travel_detail), array('rows' => 3)); ?>    
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'travel_detail'); ?></font>
            </div>  
        </p>
        <p><label>ติดต่อสอบถามเพิ่มเติม</label></p>
        <p>
        	<?= Form::textarea('inquiry_detail', HTML::chars($event->inquiry_detail), array('rows' => 3)); ?>    
            <div class="error">
                <font color="red"><?= Arr::get($errors, 'inquiry_detail'); ?></font>
            </div>  
        </p>
    </fieldset>	
</div>
<div id="rightSide">
    <fieldset>
        <legend></legend>
        <p><label><strong>มีค่าใช้จ่ายหรือไม่?</strong></label></p>
        <p><?= Form::radio('is_need_expense', 0, !$event->is_need_expense); ?>ไม่มี</p>
        <p><?= Form::radio('is_need_expense', 1, $event->is_need_expense == 1 ? true : false); ?>มี (โปรดระบุรายละเอียด)</p>
        <p>
			<?= Form::textarea('expense_detail', HTML::chars($event->expense_detail), array('rows' => 3)); ?>            
        </p>
        <p><label><strong>ทักษะของอาสาสมัครที่ต้องการ</strong></label></p>
        <ol>
            <li><p>ความสามารถพิเศษ</p>
                <p><label>ทักษะทั่วไป (เลือกได้มากกว่า 1)</label></p>
                  <p style="width:250px">
                <?php  
                    $skills = Kohana::$config->load('timebank')->get('skills'); 
                    for($i = 0 ; $i < sizeof($skills) ; $i++){
                        $checked = FALSE;
                        if($event->skills != '') {
                            $pos = strpos(str_replace(' ', '_', $event->skills), $skills[$i]);
                            if ($pos > 0){
                                $checked = TRUE;
                            }
                        }//str_replace("world","Peter","Hello world!");
                        echo '<p>'.Form::checkbox(str_replace(' ','_',$skills[$i]), $skills[$i], $checked).''. Form::label($skills[$i], $skills[$i]).'</p>';
                    }
                ?>
                </p>
                <p><label>การใช้ภาษา (สื่อสารได้/อ่านเขียนได้/แปลได้) (เลือกได้มากกว่า 1)</label></p>
                <p style="width:250px">
                <?php  
                    $languates = Kohana::$config->load('timebank')->get('languates'); 
                    for($i = 0 ; $i < sizeof($languates) ; $i++){
                        $checked = FALSE;
                        if($event->languates != '') {
                            $pos = strpos($event->languates, $languates[$i]);
                            if (  $pos > 0){
                                $checked = TRUE;
                            }
                        }
                        echo Form::checkbox(str_replace(' ','_',$languates[$i]), $languates[$i], $checked).''. Form::label($languates[$i], $languates[$i], array('class'=>'job'));
                    }
                ?>
                </p>
                <input type="checkbox"> <label>อื่นๆ (ให้ระบุ) </label><input name='any_languate' type="text" style="width:50px;margin:0;display:inline;"></p>
            </li>
            <li><p>ทักษะวิชาชีพ (เลือกได้มากกว่า 1)</p>
                <p><label>งานช่างเทคนิค</label></p>
				 <p style="width:250px">
				 <?php  
                    $technicals = Kohana::$config->load('timebank')->get('technicals'); 
                    for($i = 0 ; $i < sizeof($technicals) ; $i++){
                        $checked = FALSE;
                        if($event->technical != '') {
                            $pos = strpos($event->technical, $technicals[$i]);
                            if (  $pos > 0){
                                $checked = TRUE;
                            }
                        }
                        echo Form::checkbox(str_replace(' ','_',$technicals[$i]), $technicals[$i], $checked).''. Form::label($technicals[$i], $technicals[$i], array('class'=>'job'));
                    }
                ?>
   				</p>
            </li>
        </ol>
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <p><legend><strong>Tag ความสนใจ  (เลือกได้มากกว่า 1)</strong></legend></p>
        
			<?php  
				$jobs = Kohana::$config->load('timebank')->get('jobs'); 
				for($i = 1 ; $i < sizeof($jobs) ; $i++){
					$checked = FALSE;
					if($event->tags != '') {
						$pos = strpos($event->tags, $jobs[$i]);
						if (  $pos > 0){
							$checked = TRUE;
						}
					}
					echo '<p>'.Form::checkbox(str_replace(' ','_',$jobs[$i]), $jobs[$i], $checked).''.$jobs[$i].'</p>';
				}
            ?> 
        <div class="line"></div>
    </fieldset>
    <fieldset>
        <legend>รูปภาพงานอาสา</legend>
        <?php if ($event->pic_1 != ''): ?>
        	<img src="<?= url::base().'media/upload/events/'.$event->pic_1; ?>" />
        <? endif ?>
		<?= Form::file('pic_1') ?>
        <div class="error">
            <font color="red"><?= Arr::get($errors, 'pic_1'); ?></font>
        </div>
    </fieldset>

<script>
	function eachDayChecked()
	{		
		checkDaySelect();
		 dayChecked();
		
	}
	function checkDaySelect()
	{
		var date_start  = $('#volunteer_begin_date').val();
		var date_end = $('#volunteer_end_date').val();
		
		if (date_start != '' && date_end != '')
		{
			 var volunteer_date_start = parseDate(date_start);
			 var volunteer_date_end = parseDate(date_end);

			 for( var i = 0 ; i < 7 ; i++)
			 {
				   if ( $('#day' + i).is(':checked') )
				   {
					   
					 if (CountDays(i, volunteer_date_start, volunteer_date_end) <=0 ){
						  $('#day' + i).prop("checked", false);
						 }
				   }
			 }
		 }	 
	}
	
	function dayChecked()
	{
		$("#day").prop("checked", true);
		difDateTIme();
	}
	
	function everyDayChecked()
	{
		$("#every_day").prop("checked", true);
		 for( var i = 0 ; i < 7 ; i++)
		 {
			  $('#day' + i).prop("checked", false);
		 }
			
		difDateTIme();
	}
	function difDateTIme()
	{
		checkDaySelect()

		var date_start  = $('#volunteer_begin_date').val();
		var date_end = $('#volunteer_end_date').val();
		var time_start  = $('#volunteer_begin_time').val();
		var time_end = $('#volunteer_end_time').val();
	
		if (date_start != '' && date_end != '')
		{

			 var volunteer_date_start = parseDate(date_start);
			 var volunteer_date_end = parseDate(date_end);
 			 var volunteer_time_start = parseTime(time_start);
			 var volunteer_time_end = parseTime((time_end == '23:59:59') ? '24:00:00' : time_end);
			 var diff = volunteer_time_end.getTime() - volunteer_time_start.getTime();
			 var day = 0;
		
			 
			 for( var i = 0 ; i < 7 ; i++)
			 {
				 	if( ( $('#day' + i).is(':checked') && $('#day').is(':checked')) || 
																			 ($('#every_day').is(':checked')))
					{
						day +=  CountDays(i, volunteer_date_start, volunteer_date_end);
					}
				 }
			 $('#time_cost').val( Math.ceil( diff/1000/60/60*10)/10 * day );
		}
	}
</script>