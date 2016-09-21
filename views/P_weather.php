<? //Chack condition data.
if($data2){//Exist ?>

	The weather of <?=$data2['name']?> at <?=date("d M Y")?> is <?=$data2['weather'][0]['main']?> <br>
	<a href='javascript:history.back()'> < Back </a>

<? } else {//Null ?>
	<form action="<?=site_url()?>" method="get"> 
		<select name='city'>
		
			<? //loop city from array
			foreach($city as $value){?>
			<option value="<?=$value?>"><?=$value?></option>
			<? } //end loop ?>
		
		</select>
		<input type='submit'value="GO!">
	</form>
<? } ?>