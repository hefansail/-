<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>删除文件夹</title>
</head>

<style type="text/css">
.content{
	
	margin:100px 100px ;
	height:90px;
	text-align: center;
	background: #DCDCDC;
	overflow:hidden;

}
.list{
	
	text-align:center;
	margin:20px;
}
.fileinput{
	
	padding-left: 20px;
	font-size: 16px;


}

.input_control{
	
	-webkit-appearance:none;
	border-radius: 5px;
	height: 30px;
	font-size :16px;
	

}

.buttonclass{

	height: 40px;
	width: 90px;
	background-color:#4876FF;
	border: none;
    color: white;
    border-radius: 5px;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
}
</style>
<body>
	<div class="content">
		
		<table class="list">
		<tr>
			
			<td class="fileinput">
				
				<span>需要删除的文件夹路径：</span>
				<input type="text" class="input_control" style=" width: 220px;" name="delurl">
			
			</td>
			<td class="fileinput">
				
				<span>保留的文件夹数量：</span>
				<input type="text" class="input_control" style=" width: 80px;"   name="filenum">

			</td>
			<td class="fileinput">
			
				<input type="button" class="buttonclass" onclick=" <?php  CleanPlots('D:\test','1');  ?>" value="提交">
			
			</td>
		</tr>
		</table>
	</div>

<?php

	function CleanPlots($PicPath, $max_outputs)
	{  
	
	// CHECK WHETHER TO CLEAN THE WORKING DIRECTORY  
	$fi = new FilesystemIterator($PicPath, FilesystemIterator::SKIP_DOTS);
	$ttl_pics = iterator_count($fi);
	if ($ttl_pics>= $max_outputs){
		
		$files = glob($PicPath.'/*'); // get all file names in an array
		$files = array_slice($files,0,intval($ttl_pics/2));
		
		foreach($files as $file){ // iterate file in the arrays

			if(is_file($file)){
				unlink($file); // delete file
			}    
		}    
	}

	}


?>


</body>
</html>