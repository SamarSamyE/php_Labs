<?php
class Counter{
    private $_count;
    public function __construct(){
        $this->_count =$this->getCount();
    }
    public function getCount(){
        if(file_exists(_Counter_File_)){
            return intval(file_get_contents(_Counter_File_));
        }
        return 0;
    
    } 
    public function increment(){
    if(isset($_SESSION[_Session_Key_Counter_]))
        return false;
    $this->_count++;
    $_SESSION[_Session_Key_Counter_]=true;
    return $this->_count;
    }

    public function updateCounter(){
        $fp=fopen(_Counter_File_,"w+");
        fwrite($fp,$this->_count);
        fclose($fp);
    }
    public function incrementAndUpdate(){
        if($this->increment() != false){
            $this->updateCounter();
        }
    }
} 

?>