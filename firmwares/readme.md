1. Set on preferences `Show verbose ouput during compilation`.

2. Compile the code


3. Get the path to your Arduino compile temp folder.


4. Generate the `bin` file using `avr-obj` tool.

	`objcopy -R .eeprom -O binary *.elf *.bin`

	Example: 
	
	`/Applications/Arduino.app/Contents/Resources/Java/hardware/tools/avr/bin/avr-objcopy -O binary -R .eeprom /var/folders/0w/z91mcwks11b_r7x7rcd_bbbr0000gn/T/build1728129573977959159.tmp/sketch_jan27a.cpp.elf /var/folders/0w/z91mcwks11b_r7x7rcd_bbbr0000gn/T/build1728129573977959159.tmp/sketch_jan27a.cpp.bin` 
	


5. Upload the file on to the ftp...