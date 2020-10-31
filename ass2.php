<?php
/* <ID:602110191>
   NAME:Wang Zexue
   Wechat name:Wang*/
   $n=$_SERVER['argv'][1];
   printf("    |");
   for($j=2;$j<=$n;$j++){
      printf("%8d",$j);
      $a[$j]=$j;
   }
   printf("\n----+");
   for($j=1;$j<$n;$j++){
   printf("--------");
   }
   printf("\n");
   for($i=1;$i<=12;$i++){
      printf("%4d|",$i);
      $b[$i]=$i;
      for($j=2;$j<=$n;$j++){
         $m=$a[$j]*$b[$i];
         printf("%8d",$m);
      }
         printf("\n");
   }

  