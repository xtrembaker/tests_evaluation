<?php

/* 
 * - According to the code below, which error is going to be trigger ?
 */
// Controller code
class PagesController extends AppController{
    
    public $helpers = array(
        'Html', 'Time', 'Cache', 'Number', 'Paginator'
    );
    
    public function index(){
        
    }
    
}
?>
<!-- index View template -->
<div>
    <?php echo $this->Form->create('Review'); ?>
    
    <?php echo $this->Form->input('rate'); ?>
    
    <?php echo $this->Form->end(); ?>
</div>