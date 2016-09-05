<?php

class File
{
	public function __construct($file_path)
	{
		$this->file_path = $file_path;
	}
	
	public function read()
	{
		$fp = fopen($this->file_path, "r");
		while($line = fgets($fp)){
			$content[] = trim($line);
		}
		fclose($fp);
		return $content;
	}

	public function write($result)
	{
		$fp = fopen($this->file_path, "a");
		foreach($result as $score){
			fwrite($fp, $score . "\n");
		}
		fclose($fp);
	}
}
