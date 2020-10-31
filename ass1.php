<?php
/* <ID:602110191>
   NAME:Wang Zexue
   Wechat name:Wang*/
   $doc=fopen("ass1-input-1.txt",'r');
   fscanf($doc,"%f",$n);
   printf("number of data %d \n",$n);
   $scores=[];
   for($i=0;$i<$n;$i++){
    fscanf($doc,"%s %f",$name,$score);
    printf("%-5s  : %f\n",$name,$score);
    $scores[]=$score;
   $total+=$scores[$i];
   }
   $average=$total/count($scores);
   fscanf($doc,"%f",$average);
   printf("Average score = %f ",$average);
   

   