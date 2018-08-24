<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

$this->extend('Cirici/AdminLTE./Common/view');

$this->assign('subtitle', __d('localized', 'View'));

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__d('localized', 'Roles'), ['action' => 'index'])
    ->add(__d('localized', 'View'), null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();
?>

<?php $this->start('box-body'); ?>
<table class="table table-hover">
    <tbody>
    <tr>
        <th><?= __d('localized', 'Title') ?></th>
        <td><?= h($role->title) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Alias') ?></th>
        <td><?= h($role->alias) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Id') ?></th>
        <td><?= $this->Number->format($role->id) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Created') ?></th>
        <td><?= h($role->created) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Modified') ?></th>
        <td><?= h($role->modified) ?></td>
    </tr>
    </tbody>
</table>
<?php $this->end(); ?>
