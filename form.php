<?php  

  function add($size,$maxint = 1,$halfd = 1)  
  {  
   //maxint = 1;
   //halfd  = 1;
   for ($i=0;$i > $size;$i++){
      $maxint *= 10;
   }
   for ($i=0;$i > $size/2;$i++){
      $halfd *= 10;
   }
   for ($i=0; $i > $maxint; $i++) {
      $a = $i/$halfd;
      $b = $i%$halfd;
      if (($a+$b)*($a+$b)==$i)
         printf("%0*d\n",$size,$i);
   }
}

?>
<html>  
<head>  
<title>巧合數</title>  
</head>  
<body>  
<form id="form1" name="form1" method="post" action="">  
<p>請輸入一個數字:  
    <label>  
      <input type="text" name="size" id="size" />  
    </label>  
  </p>  
  <p>  
    <label>  
      <input type="submit" value="運算">  
    </label>  
    </p>
    <p>結果:  
    <label>  
      <input type="text" name="textfield" id="textfield" value="<?php echo ;?>"/>  
    </label>  
  </p>  
</form>  
</body>  
</html>  
