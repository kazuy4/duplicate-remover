<?php
// sorry code nya beratantakan xD
// author : NuLLByte31337
function banner(){
 return "_____               __ __              __
|     \.--.--.-----.|  |__|.----.---.-.|  |_.-----.
|  --  |  |  |  _  ||  |  ||  __|  _  ||   _|  -__|
|_____/|_____|   __||__|__||____|___._||____|_____|
             |__| Remover With PHP code";
}
echo banner();
echo "\n";
// end banner
function main(){
  echo "File => ";
  $input = trim(fgets(STDIN));
  $line = file($input);
  $line = array_unique($line);
  $lo = implode("", $line);
// save the file
  echo "Nama File : ";
  $nama = trim(fgets(STDIN));
  $open = fopen($nama, "w");
  fwrite($open, $lo);
  echo "\n(Saved) : " . $nama . "\n";
fclose($open);
}
main();
?>
