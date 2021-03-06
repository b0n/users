<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create() ?>
<?= $this->Form->control('username', ['label' => false, 'placeholder' => __d('localized', 'Username')]) ?>
<?= $this->Form->control('password', ['label' => false, 'placeholder' => __d('localized', 'Password')]) ?>
<div class="row">
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
        <?= $this->Form->button(__d('localized', 'Sign In'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>
    <!-- /.col -->
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->link(__d('localized', 'Forgot your password?'), ['action' => 'forgot']); ?>
