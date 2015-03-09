<?php

class Todo extends MY_Model {   
    
    public $id;
      
    public $priority;
      
    public $created_on;
     
    public $due_on;   
    
    public $last_modified_on;
    
    public $title;
    
    public $description;
    
    public $comment;
    
    public $status;
    
    public $deleted;  
}