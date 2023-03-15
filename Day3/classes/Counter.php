<?php
class Counter{
    private $_count;
    public function __construct(){
        $this->_count =$this->get_count();
    }
    public function get_count(){
        if(file_exists(_Counter_File_)){
            return intval(file_get_contents(_Counter_File_));
        }
        else{
            return 0;
        }
    } 
    public function increment(){
      if(!isset($_SESSION[_Session_Key_Counter_])){
        $this->_count++;
        $_SESSION[_Session_Key_Counter_]=true;
        return $this->_count;
      }
      else{
        return false;
      }
    }

    public function update_counter(){
        $fp=fopen(_Counter_File_,"w+");
        fwrite($fp,$this->_count);
        fclose($fp);
    }
    public function increment_and_update(){
        if($this->increment() != false){
            $this->update_counter();
        }
    }
} 

?>