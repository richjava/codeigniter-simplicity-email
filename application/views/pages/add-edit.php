<h1>
    <?php if ($edit): ?>
        <?php echo html_escape($todo->title); ?>
    <?php else: ?>
        Add new TODO
    <?php endif; ?> 
</h1>
<?php echo validation_errors(); ?>
<?php echo form_open(); ?>
    <fieldset>
        <div class="field">
            <?php echo form_label('Title', 'title'); ?>
          <?php echo form_input('title', $todo->title); ?>
            
        </div>
        <div class="field">
            <?php echo form_label('Description', 'description'); ?>
            <?php echo form_textarea('description', $todo->description); ?>
        </div>
        <div class="wrapper">
            <?php echo form_submit(array('name' => 'cancel','class' => 'submit', 'value' => 'Cancel')); ?>
            <?php echo form_submit(array('name' => 'save','class' => 'submit', 'value' => $edit ? 'EDIT' : 'ADD')); ?>
        </div>
    </fieldset>
</form><?php echo form_close(); ?>
 