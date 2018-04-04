<?php if($this->session->flashdata('success')) { ?>
<div class="alert alert-success">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php } ?>

<?php if($this->session->userdata('user_id') == null): ?>
	<h1>Welkom!</h1>
<?php ; else: ?>
	<h1>Welkom terug, <?php echo $this->session->userdata('user_name'); ?>!</h1>
<?php endif; ?>
