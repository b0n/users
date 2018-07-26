<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\Utility\Inflector;

$this->extend('Cirici/AdminLTE./Common/form');

$this->Breadcrumbs
    ->add(__d('funayaki', 'Users'), ['action' => 'index'])
    ->add(__d('funayaki', 'Change Password'));

$this->assign('form-start', $this->Form->create($user, ['novalidate' => true]));

$this->start('form-content');
echo $this->Form->control('password', ['type' => 'password']);
echo $this->Form->control('verify_password', ['type' => 'password']);
$this->end();

$this->start('form-button');
echo $this->Form->button(__d('funayaki', 'Submit'));
$this->end();

$this->assign('form-end', $this->Form->end());
