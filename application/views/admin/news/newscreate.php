<div  id="tb_browse_searchResult" class="search">
  <div id="main" role="main">
<?php include Kohana::find_file('views', 'admin/menus') ?>
<h2>สร้าง "ข่าว"</h2>

<?= Form::open('admin/createnews', array('enctype' => 'multipart/form-data', 'id' => 'createtraining', "autocomplete" => "on")); ?>
    <?php include Kohana::find_file('views', 'admin/news/newsform') ?>
    <label>รูปประกอบ</label>
  	<p id='subimage'>
	
	</p>

    <input type="button" onclick="addInput()" name="add" value="เพิ่มรูปประกอบ" /><br />
    <p></p>
	<input type="submit" value="==สร้างข่าว==" />
    
<? Form::close(); ?>


<script language="javascript">
	fields = 0;
	function addInput() {
		var subimage = document.getElementById('subimage');//innerHTML += "<input type='file' value='' name=sub_"+ fields +" />";
		var newdiv = document.createElement('input');
		var divIdName = "sub_"+ fields ;
		newdiv.setAttribute('name', divIdName);
		newdiv.setAttribute('type', 'file');
		subimage.appendChild(newdiv);
		subimage.appendChild(document.createElement('br'));
		fields += 1;

	}
</script>

</div>
</div>