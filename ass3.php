<?php
/* <ID:602110191>
   NAME:Wang Zexue
   Wechat name:Wang*/
$doc=STDOUT;
if($_SERVER['argc']==3){
      if(file_exists($_SERVER['argv'][1])){
      copy($_SERVER['argv'][1],$_SERVER['argv'][2]);
   }
   else  echo "Cannot open file  ", $_SERVER['argv'][1],"!!!";
}
else if($_SERVER['argc']>1&&$_SERVER['argc']<3){
      $doc=fopen($_SERVER['argv'][1],'w');
}
   else printf("invalid arguments\nuse ass03 [input_file] output_file");
   $n="";
   for($i=0;;$i++){
      
      if(!feof($doc)){
         $n=fgets(STDIN,4064);
      }
      fprintf($doc,"%s",$n);
   
     }  fclose($doc);

