<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

use Cake\Utility\Inflector;

$this->extend('Cirici/AdminLTE./Common/form');

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__d('funayaki', 'Roles'), ['action' => 'index']);

if ($this->request->param('action') == 'edit') {
    $this->Breadcrumbs->add(__d('funayaki', 'Edit'), $this->request->getRequestTarget());
}

if ($this->request->param('action') == 'add') {
    $this->Breadcrumbs->add(__d('funayaki', 'Add'), $this->request->getRequestTarget());
}

echo $this->Breadcrumbs->render();
$this->end();

$this->assign('form-start', $this->Form->create($role, ['novalidate' => true]));

$this->start('form-content');
echo $this->Form->control('title');
echo $this->Form->control('alias');
$this->end();

$this->start('form-button');
echo $this->Form->button(__('Submit'));
$this->end();

$this->assign('form-end', $this->Form->end());
