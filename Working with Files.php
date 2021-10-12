Which is the correct way to open the file "time.txt" as readable?
fopen("time.txt","r");



Fill in the blanks to read and output the content of the file "nums.txt".
$nums = file("nums.txt");
foreach($nums as $num) {
   echo $num."<br />";
}



Fill in the blanks to write the numbers 1 to 10 to the file.
$h = fopen('file.txt', 'a');
for($i=1;$i<=10; $i++) {
fwrite($h, $i);
}
fclose($h);