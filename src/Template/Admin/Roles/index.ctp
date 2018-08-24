<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */

$this->extend('Cirici/AdminLTE./Common/index');

$this->Breadcrumbs
    ->add(__d('localized', 'Roles'), $this->request->getRequestTarget());

$this->start('page-numbers');
echo $this->Paginator->numbers();
$this->end();
?>

<?php $this->start('table-header'); ?>
<thead>
<tr>
    <th><?= $this->Paginator->sort('id', __d('localized', 'Id')) ?></th>
    <th><?= $this->Paginator->sort('title', __d('localized', 'Title')) ?></th>
    <th><?= $this->Paginator->sort('alias', __d('localized', 'Alias')) ?></th>
    <th><?= $this->Paginator->sort('created', __d('localized', 'Created')) ?></th>
    <th><?= $this->Paginator->sort('modified', __d('localized', 'Modified')) ?></th>
    <th><?= __d('localized', 'Actions') ?></th>
</tr>
</thead>
<?php $this->end(); ?>

<?php $this->start('table-body'); ?>
<tbody>
<?php foreach ($roles as $role): ?>
    <tr>
        <td><?= $this->Number->format($role->id) ?></td>
        <td><?= h($role->title) ?></td>
        <td><?= h($role->alias) ?></td>
        <td><?= h($role->created) ?></td>
        <td><?= h($role->modified) ?></td>
        <td class="actions" style="white-space:nowrap">
            <?= $this->Html->link(__d('localized', 'View'), ['action' => 'view', $role->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Html->link(__d('localized', 'Edit'), ['action' => 'edit', $role->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Form->postLink(__d('localized', 'Delete'), ['action' => 'delete', $role->id], ['confirm' => __d('localized', 'Are you sure you want to delete # {0}?', $role->id), 'class' => 'btn btn-danger btn-xs']) ?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
<?php $this->end(); ?>
