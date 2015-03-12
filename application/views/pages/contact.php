<h1>Contact</h1>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
    <fieldset>
        <div class="field">
            <?php echo form_label('Name', 'name'); ?>
          <?php echo form_input('name', set_value('name')); ?>
            
        </div>
	<div class="field">
            <?php echo form_label('Email', 'email'); 
	    $email_data = array(
	    'name' => 'email',
	    'value' => set_value('email')
	);
	echo form_input($email_data);?>         
        </div>
        <div class="field">
            <?php echo form_label('Comment', 'comment'); ?>
            <?php echo form_textarea('comment', set_value('comment')); ?>
        </div>
        <div class="wrapper">
            <?php echo form_submit(array('name' => 'submit','class' => 'submit', 'value' => 'Send')); ?>
        </div>
    </fieldset>
</form><?php echo form_close(); ?>
 