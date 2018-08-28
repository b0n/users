<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Form->create($user, ['novalidate' => true]) ?>
<?= $this->Form->control('password', ['label' => false, 'value' => '', 'placeholder' => __d('localized', 'Password')]) ?>
<?= $this->Form->control('verify_password', ['label' => false, 'type' => 'password', 'value' => '', 'placeholder' => __d('localized', 'Verify Password')]); ?>
<div class="row">
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
        <?= $this->Form->button(__d('localized', 'Save'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>
    <!-- /.col -->
    <?= $this->Form->end() ?>
</div>
