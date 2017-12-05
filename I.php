

<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
	</head>
	<body>
<form action="" method="get">
	
	<input type="text" name="num" value="请输入数字"/>
	<input type="submit"/>
</form>		
	</body>
</html>

<!--写一个表单，可以输入一个数字，提交后判断该数字是否是一个“素数”。如果是，就输出“数字xx是素数”，否则就输出“数字xx不是素数”。
提示：素数的概念（含义）是：只能被1和它自己本身整除——在大于1的整数范围内。-->

<?php
	
	
	
	@$sz= $_GET[num];

  if(is_numeric($sz)){
	
	for( $s=2 ; $s<$sz;$s++){
		
		if($sz % $s==0){
			
			echo "这个数字".$sz."不是素数";
			
			exit;
			
		}
		
	}echo "这个数字".$sz."是素数";
	 
}else{
	
	echo "请输入数字";
	
}





?>