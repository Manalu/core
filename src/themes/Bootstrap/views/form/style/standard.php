<form<?php echo isset($el->method) ? ' method="'.$el->method.'"' : ' method="post"'; ?> action="<?php echo $el->getTarget(); ?>"<?php echo ! $el->isEmpty('role') ? ' role="'.$el->get('role').'"' : ' role="form"' ; ?><?php echo ! $el->isEmpty('id') ? ' id="'.$el->get('id').'"' : ' id="TheForm"' ;?><?php echo ! $el->isEmpty('class') ? ' class="'.$el->get('class').'"' : '' ;?><?php echo ! $el->isEmpty('enctype') ? ' enctype="'.$el->get('enctype').'"' : '' ;?><?php echo ! is_null($params->get('additional')) ? $params->get('additional') : '' ; ?>>
    <div class='container-fluid'>
    	<div class='well'> 
    	<?php $this->render('form.style.elements', $el); ?>	
        </div>
    </div>
</form><!-- bootstrap.form.style.standard --><?php
$id = ! $el->isEmpty('id') ? $el->get('id') : "TheForm" ;
$this->addScript("
<script>
$(document).ready(function() {
    $('#".$id."').formValidation(".$this->session->get('form.validation.extra').");
});
</script>
");
$this->session->clear('form.validation.extra');