<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */

$this->extend('Cirici/AdminLTE./Common/index');

$this->Breadcrumbs
    ->add(__d('funayaki', 'Roles'), $this->request->getRequestTarget());

$this->start('page-numbers');
echo $this->Paginator->numbers();
$this->end();

$this->append('header-actions');
echo $this->Html->link(__d('fuyayaki', 'New Role'),
    ['action' => 'add'],
    ['class' => 'btn btn-default pull-right']
);
$this->end();
?>

<?php $this->start('table-header'); ?>
<thead>
<tr>
    <th><?= $this->Paginator->sort('id') ?></th>
    <th><?= $this->Paginator->sort('title') ?></th>
    <th><?= $this->Paginator->sort('alias') ?></th>
    <th><?= $this->Paginator->sort('created') ?></th>
    <th><?= $this->Paginator->sort('modified') ?></th>
    <th><?= __d('funayaki', 'Actions') ?></th>
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
            <?= $this->Html->link(__d('funayaki', 'View'), ['action' => 'view', $role->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Html->link(__d('funayaki', 'Edit'), ['action' => 'edit', $role->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Form->postLink(__d('funayaki', 'Delete'), ['action' => 'delete', $role->id], ['confirm' => __d('funayaki', 'Are you sure you want to delete # {0}?', $role->id), 'class' => 'btn btn-danger btn-xs']) ?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
<?php $this->end(); ?>
