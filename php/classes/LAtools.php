<?php
class LAtools
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }

    public function cHTML($htmlString){
    	echo htmlspecialchars($htmlString);
    }

    public function requireDir($dir){
    	if ($handle = opendir($dir)) {
    		while (false !== ($entry = readdir($handle))) {
        		if ($entry != "." && $entry != "..") {
        			$t = new LAtools();
            		require_once($dir.$entry);
        		}
    		}
    	closedir($handle);
		}
    }
}
?>