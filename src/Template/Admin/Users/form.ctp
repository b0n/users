<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\Utility\Inflector;

$this->extend('Cirici/AdminLTE./Common/form');

$this->Breadcrumbs
    ->add(__d('funayaki', 'Users'), ['action' => 'index']);

if ($this->request->param('action') == 'edit') {
    $this->Breadcrumbs->add(__d('funayaki', 'Edit'), $this->request->getRequestTarget());
}

if ($this->request->param('action') == 'add') {
    $this->Breadcrumbs->add(__d('funayaki', 'Add'), $this->request->getRequestTarget());
}

$this->assign('form-start', $this->Form->create($user, ['novalidate' => true]));

$this->start('form-content');
echo $this->Form->control('username');
echo $this->Form->control('name');
echo $this->Form->control('password', ['type' => 'password']);
echo $this->Form->control('verify_password', ['type' => 'password']);
echo $this->Form->control('email');
echo $this->Form->control('token');
echo $this->Form->control('role_id', ['options' => $roles]);
echo $this->Form->control('active');
$this->end();

$this->start('form-button');
echo $this->Form->button(__d('funayaki', 'Submit'));
$this->end();

$this->assign('form-end', $this->Form->end());
