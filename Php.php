<?php
     function proses($pilih){
          if ($pilih == "1") {
               m1();
          }else if ($pilih == "2"){
               m2();
          }else if ($pilih == "3"){
               m3();
          }else if ($pilih == "4"){
               m4();
          }else if ($pilih == "5"){
               m5();
          }else if ($pilih == "6"){
               m6();
          }else if ($pilih == "7"){
               m7();
          }else if ($pilih == "8"){
               m8();
          }else if ($pilih == "9"){
               m9();
          }else if ($pilih == "10"){
               m10();
          }else if ($pilih == "11"){
               m11();
          }else if ($pilih == "12"){
               m12();
          }else if ($pilih == "13"){
               m13();
          }else if ($pilih == "14"){
               m14();
          }else if ($pilih == "15"){
               m15();
          }else if ($pilih == "16"){
               m16();
          }else if ($pilih == "17"){
               m17();
          }else if ($pilih == "18"){
               m18();
          }else if ($pilih == "19"){
               m19();
          }else if ($pilih == "20"){
               m20();
          }else if ($pilih == "21"){
               m21();
          }else if ($pilih == "22"){
               m22();
          }else if ($pilih == "23"){
               m23();
          }else if ($pilih == "24"){
               m24();
          }else if ($pilih == "25"){
               m25();
          }else if ($pilih == "26"){
               m26();
          }else if ($pilih == "27"){
               m27();
          }else if ($pilih == "28"){
               m28();
          }else if ($pilih == "29"){
               m29();
          }else if ($pilih == "30"){
               m30();
          }else{
               echo"";
          }
     }

     function m1(){
          for ($i=0; $i<3 ; $i++) { 
               echo "*** <br>";
          }
     }
     function m2(){
          for ($i=1; $i<=5 ; $i++) { 
               for ($j=1; $j <=$i ; $j++) { 
                    echo "*";
               }
               echo "<br>";
          }
     }
     function m3(){
          for ($i=1; $i<=5 ; $i++) { 
               for ($j=5; $j>$i ; $j--) { 
                    echo "..";
               }
               for ($j=1; $j<=$i ; $j++) { 
                    echo "*";
               }
               for ($j=2; $j<=$i ; $j++) {
                    echo "*";
               }
               echo "<br>";
          }
     }
     function m4(){
          for ($x = 1; $x <= 5; $x++){
               for ($y = 1; $y<=5; $y++){
                    if ($y <= $x) {
                         echo $y;
                    }else{
                         echo "..";
                    }    
               }
               for ($y = 5; $y >= 1; $y--){
                    if ($y <= $x) {
                         echo $y;
                    }else{
                         echo "...";
                    }
               }
               echo "<br>";
          }
     }
     function m5(){
          for ($x = 1; $x <= 5; $x++){
               for ($y = $x; $y < 5; $y++){
                    echo "..";
               }
               for ($k = 1; $k < ($x * 2); $k++){
                    echo $k;
               }
               echo "<br>";
          }
          for ($x = 4; $x >= 1; $x--){
               for ($y = 5; $y > $x; $y--){
                    echo "..";
               }
               for ($k = 1; $k < ($x * 2); $k++){
                    echo $k;
               }
               echo "<br>";
          }
     }
     function m6(){
          $cntr = 0;
          $cntr1 = 0;
          $y = 0;
          for ($x = 1; $x <= 5; $x++){
               for ($s = 1; $s <= 5 - $x; $s++){
                    echo ".....";
                    $cntr++;
               }
               while ($y != 2 * $x - 1){
                    if ($cntr <= 5 - 1){
                         echo $x + $y;
                         $cntr++;
                    }
                    else{
                         $cntr1++;
                         echo ($x + $y - 2 * $cntr1);
                    }
                    $y++;
               }
               $cntr1 = $cntr = $y = 0;
               echo "<br>";
          }
     }
     function m7(){
          $n = 5;
          for ($x = 1; $x < $n; $x++){
               for ($y = 1; $y <= $x; $y++){
                    echo $y;
               }
               echo "<br>";
          }
          for ($x = $n; $x >= 0; $x--){
               for ($y = 1; $y <= $x; $y++){
                    echo $y;
               }
               echo "<br>";
          }
     }
     function m8(){
          $n = 5;
          for ($x = $n; $x >= 0; $x--){
               for ($y = 1; $y <= $x; $y++){
                    echo $y;
               }
               echo "<br>";
          }
          for ($x = 1; $x <= $n; $x++){
               for ($y = 1; $y <= $x; $y++){
                    echo $y;
               }
               echo "<br>";
          }
     }
     function m9(){
          $rows = 5;
          for ($i = 1; $i <= $rows; $i++) {
               for ($j = 1; $j <= $rows - $i; $j++) {
                    echo "..";
               }
               for ($k = 1; $k <= $i; $k++) {
                    echo $k; 
                    echo "..";
               }
               echo "<br>";
               $k = $k - 1;
          }          
     }
     function m10(){
          $rows = 5;
          $l = 1;
          for ($i = 1; $i <= $rows; $i++) {
               for ($j = 1; $j <= $rows - $i; $j++) {
                    echo "..";
               }
               for ($k = 1; $k <= $i; $k++, $l++) {
                    echo $l;
                    echo "..";
               }
               echo "<br>";
          }          
     }
     function m11(){
          $rows = 5;
          $count1 = 1;
          for ($i = 0; $i <= $rows; $i++) {
               for ($space = 1; $space <= $rows - $i; $space++) {
                    echo "..";
               }
               for ($j = 0; $j <= $i; $j++) {
                    if ($j == 0 || $i == 0){
                         $count1 = 1;
                    }
                    else{
                         $count1 = $count1 * ($i - $j + 1) / $j;
                    }
                    echo $count1;
                    echo "..";
               }
               echo "<br>";
          }          
     }
     function m12(){
          $n = 5;
          for ($i = 1; $i <= $n; $i++){
               for ($j = 1; $j <= $i; $j++){
                    echo "*..";
               }
               echo"<br>";
          }          
     }
     function m13(){
          $n = 5;
          for ($i = $n; $i >= 1; $i--){
               for ($j = 1; $j <= $i; $j++){
                    echo "*..";
               }
               echo "<br>";
          }
     }
     function m14(){
          $rows = 5;
          for($i = 1, $k = 0; $i <= $rows; ++$i, $k = 0){
              for($space = 1; $space <= $rows-$i; ++$space){
                    echo"....";
               }
               while($k != 2*$i-1){
                    echo "*..";
                    ++$k;
               }
               echo "<br>";
          }    
     }
     function m15(){
          $n = 5;
          for ($i = $n; $i >= 1; $i--){
               for ($s = $i; $s < $n; $s++)
                    echo"..";
               for ($j = 1; $j <= (2 * $i - 1); $j++)
                    echo"*..";
               echo"<br>";
          }          
     }
     function m16(){
          $n = 5;
          for ($i = $n; $i >= 1; $i--){
               for ($s = $i; $s < $n; $s++){
                    echo "..";
               }
               for ($j = 1; $j <= $i; $j++){
                    echo"*..";
               }
               echo"<br>";
          }
     }
     function m17(){
          $n = 5;
          for ($i = 1; $i <= $n; $i++){
               for ($s = $i; $s < $n; $s++){
                    echo"..";
               }
               for ($j = 1; $j <= $i; $j++){
                    echo"*..";
               }
               echo"<br>";
          }          
     }
     function m18(){
          $n = 5;
          for ($i = 0; $i <= $n; $i++){
               for ($s = $n; $s > $i; $s--)
                    echo"..";
               for ($j = 0; $j < $i; $j++)
                    echo"*..";
               echo"<br>";
          }
          for ($i = 1; $i < $n; $i++){
               for ($s = 0; $s < $i; $s++)
                    echo"..";
               for ($j = $n; $j > $i; $j--)
                    echo"*..";
               echo"<br>";
          }
     }
     function m19(){
          $n = 5;
          for ($i = 1; $i <= $n; $i++){
               for ($j = 1; $j <= $i; $j++){
                    echo"*";
               }
               echo"<br>";
          }
          for ($i = $n; $i >= 1; $i--){
               for ($j = 1; $j <= $i; $j++){
                    echo"*";
               }
               echo"<br>";
          }
     }
     function m20(){
          $n = 5;
          for ($i = 1; $i <= $n; $i++){
               for ($j = $i; $j < $n; $j++){
                    echo"..";
               }
               for ($j = 1; $j <= $i; $j++){
                    echo"*";
               }
               echo"<br>";
          }
          for ($i = $n; $i >= 1; $i--){
               for ($j = $i; $j <= $n; $j++){
                    echo"..";
               }
               for ($j = 1; $j < $i; $j++){
                    echo"*";
               }
               echo"<br>";
          }          
     }
     function m21(){
          $r = 5;
          for ($i = 1; $i <= $r; $i++){
               for ($s = $i; $s < $r; $s++){
                    echo "..";
               }
               for ($j = 1; $j <= (2 * $r - 1); $j++){
                    if ($i == $r || $j == 1 || $j == 2 * $i - 1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo"<br>";
          }     
     }
     function m22(){
          $rows = 5;
          for ($i = $rows; $i >= 1; $i--){
               for ($space = $i; $space < $rows; $space++){
                    echo "..";
               }
               for ($j = 1; $j <= 2 * $i - 1; $j++){
                    if ($i == $rows || $j == 1 || $j == 2 * $i - 1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
     }
     function m23(){
          $m = 1;
          $n = 5;
          for ($i = 0; $i <= $n; $i++){
               for ($j = $n; $j > $i; $j--){
                    echo "..";
               }
               echo "*";
               if ($i > 0){
                    for ($k = 1; $k <= $m; $k++){
                         echo "..";
                    }
                    $m += 2;
                    echo "*";
               }
               echo "<br>";
          }
          $m -= 4;
          for ($i = 0; $i <= $n - 1; $i++){
               for ($j = 0; $j <= $i; $j++){
                    echo "..";
               }
               echo "*";
               for ($k = 1; $k <= $m; $k++){
                    echo "..";
               }
               $m -= 2;
               if ($i != $n - 1){
                    echo"*";
               }
               echo "<br>";
          }
     }
     function m24(){
          $n = 5;
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < (2 * $n); $j++){
                    if ($i + $j <= $n - 1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
                    if (($i + $n) <= $j){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < (2 * $n); $j++){
                    if ($i >= $j){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
                    if ($i >= (2 * $n - 1) - $j){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }          
     }
     function m25(){
          $n = 5;
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < (2 * $n); $j++){
                    if ($i >= $j){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
                    if ($i >= (2 * $n - 1) - $j){
                         echo "*";
                    }  
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
          for ($i = 0; $i < $n; $i++){
              for ($j = 0; $j < (2 * $n); $j++){
                    if ($i + $j <= $n - 1){
                         echo "*";
                    }  
                    else{
                         echo "..";
                    }
                    if (($i + $n) <= $j){
                         echo "*";
                    }  
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
     }
     function m26(){
          $n = 5;  
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < $n; $j++){                 
                    if ($i == $j || $i + $j == $n - 1 || $i == 0 || $i == $n - 1 || $j == 0 || $j == $n - 1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
     }
     function m27(){
          $n = 6; 
          $num1 = $n / 2 * 3;
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < $n; $j++){                 
                    if ($i == $n / 2 || $j == $n / 2 || $i + $j == $n / 2 || $i - $j == $n / 2 || $j - $i == $n / 2 || $i + $j == $num1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
     }
     function m28(){
          $n = 6;  
          $num1 = $n / 2 * 3;
          echo "Panah kanan <br>";
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < $n; $j++){                 
                    if ($i == $n / 2 || $j - $i == $n / 2 || $i + $j == $num1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
           
          echo "Panah kiri <br>";
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < $n; $j++){                 
                    if ($i == $n / 2 || $i - $j == $n / 2 || $i + $j == $n / 2){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }          
     }
     function m29(){
          $n = 5;
          echo "Belah Ketupat Padat <br>";
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < $n - $i; $j++){
                    echo "..";
               }
               for ($j = 0; $j < $n; $j++){
                    echo "*..";
               }
               echo "<br>";
          }
     
          echo "Belah Ketupat berongga <br>";
          for ($i = 0; $i < $n; $i++){
               for ($j = 0; $j < $n - $i; $j++){
                    echo "..";
               }
               for ($j = 0; $j < $n; $j++){
                    if ($i == 0 || $i == $n - 1 || $j == 0 || $j == $n - 1){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
     }
     function m30(){
          $n = 5;
          for ($x = 1; $x <= $n; $x++){
               for ($y = 1; $y <= $n; $y++){
                    if ($y <= $x){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               for ($y = $n; $y >= 1; $y--){
                    if ($y <= $x){
                         echo "*";
                    }
                    else{
                         echo "..";
                    }
               }
               echo "<br>";
          }
     }
?>