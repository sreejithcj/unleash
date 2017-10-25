<?php

/**
 * Command_chain class
 * Class to store and execute the commands
 * 
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
class Command_chain{
    private $_commands = array();
    
    /**
     * 
     * @param type $command command to add to commands array
     */
    public function add_command($command)
    {
        $this->_commands[] = $command;
    }
    
    /**
     * 
     * @param type $post      _POST array from the UI for Save or Send
     * @param type $msg_model Object of Messages_model 
     * @return type           returns the success message from the executed command (Save or Send)
     */
    public function run_command($post,$msg_model)
    {
        foreach($this->_commands as $command)
        {
            $output = $command->handle($post, $msg_model);
            if($output != FALSE)
                return $output;
        }
    }
}
//End of file Command_chain.php