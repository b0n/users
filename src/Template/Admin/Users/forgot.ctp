<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(); ?>
<?= $this->Form->control('username', ['label' => false, 'placeholder' => __d('localized', 'Username')]); ?>
<div class="row">
    <div class="col-xs-8">
    </div>
    <div class="col-xs-4">
        <?= $this->Form->button(__d('localized', 'Reset Password'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>
    <!-- /.col -->
</div>
<?= $this->Form->end() ?>
