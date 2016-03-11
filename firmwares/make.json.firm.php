<?php

$projectName = "sck_beta_k.1.0_v.0.9.0.json";

$arduinoCompilerELF= "/var/folders/0w/z91mcwks11b_r7x7rcd_bbbr0000gn/T/build7869240854402068297.tmp/sck_beta_v0_9.cpp.elf";
 
$objCopyPath = "/Applications/Arduino.app/Contents/Resources/Java/hardware/tools/avr/bin/avr-objcopy";

$localtempfolder = "temp";

$binfile =  $localtempfolder . "/bin_temp.bin";

$localjsonfolder = "json";

$jsonFile =  $localjsonfolder . "/". $projectName .".json";

exec("$objCopyPath -R .eeprom -O binary $arduinoCompilerELF $binfile");

$bin64 = base64_encode(file_get_contents($binfile));

$firmJson = array('project' => $projectName, 'bin' => $bin64);

$jsonFile = fopen($jsonFile, 'w');

fwrite($jsonFile, json_encode($firmJson));

fclose($jsonFile);

echo "Done!";
?>