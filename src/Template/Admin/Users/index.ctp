<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */

$this->extend('Cirici/AdminLTE./Common/index');

$this->Breadcrumbs
    ->add(__d('localized', 'Users'), $this->request->getRequestTarget());

$this->start('page-numbers');
echo $this->Paginator->numbers();
$this->end();
?>

<?php $this->start('table-header'); ?>
<thead>
<tr>
    <th><?= $this->Paginator->sort('id', __d('localized', 'Id')) ?></th>
    <th><?= $this->Paginator->sort('username', __d('localized', 'Username')) ?></th>
    <th><?= $this->Paginator->sort('name', __d('localized', 'Name')) ?></th>
    <th><?= $this->Paginator->sort('email', __d('localized', 'Email')) ?></th>
    <th><?= $this->Paginator->sort('role_id', __d('localized', 'Role Id')) ?></th>
    <th><?= $this->Paginator->sort('active', __d('localized', 'Active')) ?></th>
    <th><?= $this->Paginator->sort('created', __d('localized', 'Created')) ?></th>
    <th><?= $this->Paginator->sort('modified', __d('localized', 'Modified')) ?></th>
    <th><?= __d('localized', 'Actions') ?></th>
</tr>
</thead>
<?php $this->end(); ?>

<?php $this->start('table-body'); ?>
<tbody>
<?php foreach ($users as $user): ?>
    <tr>
        <td><?= $this->Number->format($user->id) ?></td>
        <td><?= h($user->username) ?></td>
        <td><?= h($user->name) ?></td>
        <td><?= h($user->email) ?></td>
        <td><?= $user->has('role') ? $this->Html->link($user->role->title, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        <td><?= $user->active ? $this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-ok']) : '' ?></td>
        <td><?= h($user->created) ?></td>
        <td><?= h($user->modified) ?></td>
        <td class="actions" style="white-space:nowrap">
            <?= $this->Html->link(__d('localized', 'View'), ['action' => 'view', $user->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Html->link(__d('localized', 'Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Html->link(__d('localized', 'Change Password'), ['action' => 'change_password', $user->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Form->postLink(__d('localized', 'Delete'), ['action' => 'delete', $user->id], ['confirm' => __d('localized', 'Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-xs']) ?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
<?php $this->end(); ?>
