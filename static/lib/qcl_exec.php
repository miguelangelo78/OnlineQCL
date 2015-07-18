<?php

class QCL {
	const QCL_FILEFORMAT = "qcl";
	private $TOP_DIR;
	private $EXEC_DIR;
	private $LIB_DIR;
	private $USR_PATH;
	
	public function __construct(){
		$this->TOP_DIR = getcwd();
		$this->EXEC_DIR = $this->TOP_DIR."\\compiler\\QCL\\bin";
	}
	
	public function execute($code, $is_guest){
		$this->write_prog($code, $is_guest);
		
		chdir($this->LIB_DIR);
		
		$dump_path = $this->USR_PATH."_dump.log";
		exec($this->EXEC_DIR."\\qclr.exe $this->USR_PATH.".self::QCL_FILEFORMAT." > $dump_path");
		
		return $this->sanitize_output($this->read_dump($dump_path),$this->USR_PATH.".".self::QCL_FILEFORMAT);
	}
	
	private function sanitize_output(&$output, $dump_path){
		$sanitized = $output;
		$sanitized = preg_replace("/! in ".str_replace(".","\\.",addslashes($dump_path)).",/", "", $sanitized);
		return $sanitized;
	}
	
	private function read_dump($dump_path){
		$dump_file = fopen($dump_path, "r") or die("Unable to read QCL dump file!");
		$dump_txt = fread($dump_file, filesize($dump_path));
		fclose($dump_file);
		return $dump_txt;
	}
	
	private function write_prog($code, $is_guest){
		$this->set_user_path($is_guest);
		
		$qcl_file = fopen($this->USR_PATH.".".self::QCL_FILEFORMAT, "w") or die("Unable to create QCL file!");
		
		fwrite($qcl_file, $code);
		fclose($qcl_file);
	}
	
	private function set_user_path($is_guest){
		// If it's not a guest create user directory if it doesn't exist and put the program there, this also requires the program's name
		$this->USR_PATH = $this->TOP_DIR.($is_guest ? "\\guest_realm\\guest_".$_SERVER['REMOTE_ADDR'] : "");
		$this->LIB_DIR = $this->TOP_DIR .($is_guest ? "\\guest_realm\\lib": "");	
	}
}

?>