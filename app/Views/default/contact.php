<!-- pour insérer un style--> 
<?php $this->start('style') ?>
	<script src="<?=$this->assetUrl('css/contactStyle.css'); ?>" type="text/css"></script>
<?php $this->stop('style') ?>
<!-- fin d'insersion du style--> 




<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
	<h2>Bonjour</h2>
	<p>Vous avez atteint la page de contact.</p>

<?php $this->stop('main_content') ?>
  

