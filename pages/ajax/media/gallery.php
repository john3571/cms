  <div class="gallery" style="width:<?=$_POST['image_width']?>px; overflow:hidden;">  
	
    <div class="slides" style="width:<?=$_POST['image_width']?>px; height:<?=$_POST['image_height']?>px; overflow:hidden;">
<?  
	$vfolder = media::get_vfolder($_POST['vfolder']);
	if ($vfolder['items']) foreach ($vfolder['items'] as $item) {
		$img = media::get_item($item['media_item_id'],$_POST['image_width'],$_POST['image_height'],true);
?>
		<div class="slide"><img align="left" src="<?=$img['src']?>" width="<?=$_POST['image_width']?>" height="<?=$_POST['image_height']?>" /></div>
<?		
	}
	else exit('No Images');
?>
 
    </div>
    
    <div class="gallery-menu">
    
    <ul>
        <li class="fbar">&nbsp;</li>
<?
	foreach($vfolder['items'] as $item) {
		$img = media::get_item($item['media_item_id'],$_POST['thumb_width'],$_POST['thumb_height'],true);
?>	
		<li class="menuItem"><a href=""><?=$img['html']?></a></li>
<?
	}
?>
    </ul>
	
    </div>
    
  </div>
    
</div>