<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('password', ['label' => false, 'value' => '', 'placeholder' => __d('localized', 'Password')]) ?>
<?= $this->Form->control('verify_password', ['label' => false, 'type' => 'password', 'value' => '', 'placeholder' => __d('localized', 'Verify Password')]); ?>
<?= $this->Form->button(__d('localized', 'Save'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
<?= $this->Form->end() ?>
