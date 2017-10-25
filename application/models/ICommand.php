<?php
/**
 * ICommand
 * Interface for the commands
 * 
 * @category Interface
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 */
interface ICommand{
    public function handle($post,$msg_model);
}
//End of file ICommand.php