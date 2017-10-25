<?php

class Messages_model_test extends TestCase{
    
    public function setUp()
    {
        $this->obj = $this->newModel('Messages_model');
    }
    
    public function ntest_get_messages_list(){
        $expected = 5;
        $messages = $this->obj->get_messages_list(27,'sent',1,5);
        $this->assertEquals($expected,count($messages[1]));
    }
        
    public function ntest_store(){
        $expected_sent = 'Message sent successfully';
        $expected_save = 'Message saved successfully';
        $post_send_new = array(
                'to'=>'Ima Ammalu',
                'subject'=>'Sub-Send',
                'body'=>'Message-Send',
                'userId'=>'5',
                'authorId'=>'27',
                'send'=>''             
        );
        
        $post_save_new = array(
                'to'=>'Ima Ammalu',
                'subject'=>'Sub-Save',
                'body'=>'Message-Save',
                'userId'=>'5',
                'authorId'=>'27',
                'save'=>''             
        );
        
        $post_save_existing = array(
                'messageId'=>'224',
                'to'=>'Ima Ammalu',
                'subject'=>'New Compose9123',
                'body'=>'New Compose9123',
                'userId'=>'5',
                'authorId'=>'27',
                'save'=>''             
        );
        
        $post_send_existing = array(
                'messageId'=>'224',
                'to'=>'Ima Ammalu',
                'subject'=>'New Compose9123',
                'body'=>'New Compose9123',
                'userId'=>'5',
                'authorId'=>'27',
                'send'=>''             
        );
        
        $result = $this->obj->store($post_send_existing);
        $this->assertEquals($expected_sent,$result);
     }
     
    
      
      public function ntest_star(){
          $expected = true;
          $ret = $this->obj->star('80');
          $this->assertEquals($expected,$ret);
      }
      
      public function ntest_mark_as_read(){
          $expected = true;
          $ret = $this->obj->markAsread('160');
          $this->assertEquals($expected,$ret);
      }
      
      public function ntest_mark_as_unread(){
          $expected = true;
          $ret = $this->obj->markAsUnread('160');
          $this->assertEquals($expected,$ret);
      }
      
      public function ntest_delete(){
          $expected = true;
          $ret = $this->obj->delete('157');
          $this->assertEquals($expected,$ret);
      }
      
       public function ntest_get_single_message(){
          $expected = 'sd1';
          $ret = $this->obj->getSingleMessage('95');
          $this->assertEquals($expected,$ret[0]['subject']);
      }
      
      public function ntest_get_full_name(){
          $expected = 'Sreejith';
          $ret = $this->obj->GetFullName('1');
          $this->assertEquals($expected,$ret[0]['firstname']);
      }
}