
<h1>
    <img src="<?php echo base_url(); ?>assets/themes/default/images/status/<?php echo strtoupper($status); ?>.png" alt="" title="<?php echo $status; ?>" class="icon" />
    <?php echo ucfirst($status); ?> todos
</h1>
<?php
$this->table->set_heading('Title', 'Description', 'Status','Action');
$this->table->set_template($tbl_tmpl);
echo $this->table->generate($todos);
