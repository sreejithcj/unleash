<?php

require_once APPPATH . 'controllers/Base_controller.php';

/**
 * Message class
 * Controller class to handle all message related events like compose, edit etc
 *  
 * @category Class
 * @package Demo
 * @author Sreejith C J <sreejith@orchidapps.com>
 *
 */
class Message extends Base_controller
{
    /**
    *
    * @param type $label  inbox/draft/sent
    * @param type $offset For pagination
    */
    public function index($label = INBOX, $offset = 1)
    {
      //  $this->output->enable_profiler(TRUE); Enable the CI profiler 
        try {
            if ( ! $this->session->userdata('logged_in')) {
                redirect('users/login');
            }
            $data['title'] = $label;
            $msg_array = $this->messages_model->get_messages_list($this->session->userdata('userId'),$label, $offset, LIMIT);

            $data['messages'] = $msg_array[1];
            $data['count'] = $msg_array[0];
            $data['limit'] = LIMIT;
            $data['currentpage'] = $offset;
            $data['currentFolder'] = $label;
            $data['path'] = 'messages/process/';
            $this->load_view('message/message', $data);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Function that will send or save the message based on User action.
     * If user clicks 'Save' button, message will be saved to Draft. Message will be
     * moved to 'Sent' if user has clicked 'Send' from the 'Compose' page.
     *
     * @param type $to_user_id User Id to send the message to
     */
    public function compose($to_user_id = 0)
    {
        $this->form_validation->set_rules('to', 'To', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('body', 'Message', 'required');

        try {
            if ($this->form_validation->run() === FALSE) {
                $result = $this->users_model->get_full_name($to_user_id);
                $data['name'] = $result[0]['firstname'] . ' ' . $result[0]['lastname'];
                $data['userId'] = $to_user_id;
                $data['authorId'] = $this->session->userdata('userId');
                $this->load_view('message/compose', $data);
            } else {
                $this->session->set_flashdata('message_store', $this->messages_model->store($_POST));
                redirect('messages/inbox/1');
            }
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Function that handles editing of an already drafted message. Actions can be 'Save' or 'Send'
     *
     * @param type $offset     current page number
     * @param type $message_id id of the message that needs to edited
     */
    public function edit($offset, $message_id = 0)
    {
        try {
            $this->form_validation->set_rules('to', 'To', 'required');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('body', 'Message', 'required');

            if ($this->form_validation->run() === FALSE) {
                $data['message'] = $this->messages_model->get_single_message($message_id)[0];
                $data['offset'] = $offset;
                $this->load_view('message/edit', $data);
            } else {
                $this->session->set_flashdata('message_store', $this->messages_model->store($_POST));
                redirect('messages/draft/' . $offset);
            }
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Function that decides whether this is for editing a message or for reading the
     * message.
     *
     * @param type $label      inbox/draft/sent
     * @param type $offset     page number
     * @param type $message_id Id of the message to process.
     */
    public function process($label, $offset, $message_id)
    {
        switch ($label) {
            case 'draft':
                $this->edit($offset, $message_id);
            default:
                $this->_read($message_id);
        }
    }

    /**
     * Mark a message as read
     *
     * @param type $message_id    id of the selected message
     * @param type $current_label inbox/draft/sent
     * @param type $current_page  current page
     */
    public function mark_as_read($message_id = 0, $current_label = 0, $current_page = 0)
    {
        try {
            $this->messages_model->mark_as_read($message_id);
            redirect('messages' . '/' . $current_label . '/' . $current_page);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Mark a message as unread
     *
     * @param type $message_id    id of the selected message
     * @param type $current_label inbox/draft/sent
     * @param type $current_page  current page
     */
    public function mark_as_unread($message_id = 0, $current_label = 0, $current_page = 0)
    {
        try {
            $this->messages_model->mark_as_unread($message_id);
            redirect('messages' . '/' . $current_label . '/' . $current_page);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Delete a message
     *
     * @param type $message_id    id of the selected message
     * @param type $current_label inbox/draft/sent
     * @param type $current_page  current page
     */
    public function delete($message_id = 0, $current_label = 0, $current_page = 0)
    {
        try {
            $this->messages_model->delete($message_id);
            redirect('messages' . '/' . $current_label . '/' . $current_page);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Star the selected message
     *
     * @param type $message_id    id of the selected message
     * @param type $current_label inbox/draft/sent
     * @param type $current_page  current page
     */
    public function star($message_id = 0, $current_label = 0, $current_page = 0)
    {
        try {
            $this->messages_model->star($message_id);
            redirect('messages' . '/' . $current_label . '/' . $current_page);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }

    /**
     * Function to retrieve fields of a single message
     *
     * @param type $message_id id of the message to read
     */
    private function _read($message_id = 0)
    {
        try {
            $message = $this->messages_model->get_single_message($message_id);
            $this->messages_model->mark_as_read($message_id);
            $data['message'] = $message[0];
            $this->load_view('message/read', $data);
        } catch (Exception $exception) {
            error_log($exception->getMessage(), 0);
        }
    }
}
//End of file Message.php