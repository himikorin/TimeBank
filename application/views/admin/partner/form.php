    <label>ชื่อ : </label><?= Form::input('alias', '', array('style' => 'width: 400px')); ?>
   <br />
    <label>เว็บไซต : </label><?= Form::input('link' , '', array('style' => 'width: 400px')); ?>
    <br />
    <label>รูปประกอบ</label><?= Form::file('image', array('style' => 'width: 400px')); ?>
  	<br />
  