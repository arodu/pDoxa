<div id="accordionContenido">
    <h3><?php echo __('Editar Tipo de Aula') ?></h3>
    <div class="tipoAulas form">

        <div class="acciones"><?php echo $this->Html->link($this->element('icono',array('icono'=>'listar','label'=>'Tipos de Aulas')), array('action' => 'index'),array('escape'=>false)); ?></div>
        <hr/>
        
    <?php echo $this->Form->create(array('id'=>'formularioAjax')); ?>
            <?php
                    echo $this->Form->input('id');
                    echo $this->Form->input('nombre');
                    echo $this->Form->input('descripcion');
                    echo $this->Form->input('modalidad',array('before'=>'Modalidad<br/>','separator' => '<br/>','type'=>'radio','options'=>$modalidades,'legend'=>false,));
            ?>
    <?php echo $this->Form->end(__('Guardar Datos')); ?> 
    </div>
</div>
