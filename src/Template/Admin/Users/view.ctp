<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->extend('Cirici/AdminLTE./Common/view');

$this->assign('subtitle', __d('localized', 'View'));

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__d('localized', 'Users'), ['action' => 'index'])
    ->add(__d('localized', 'View'), null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();
?>

<?php $this->start('box-body'); ?>
<table class="table table-hover">
    <tbody>
    <tr>
        <th><?= __d('localized', 'Username') ?></th>
        <td><?= h($user->username) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Name') ?></th>
        <td><?= h($user->name) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Email') ?></th>
        <td><?= h($user->email) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Token') ?></th>
        <td><?= h($user->token) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Role') ?></th>
        <td><?= $user->has('role') ? $this->Html->link($user->role->title, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Id') ?></th>
        <td><?= $this->Number->format($user->id) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Created') ?></th>
        <td><?= h($user->created) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Modified') ?></th>
        <td><?= h($user->modified) ?></td>
    </tr>
    <tr>
        <th><?= __d('localized', 'Active') ?></th>
        <td><?= $user->active ? __d('localized', 'Yes') : __d('localized', 'No'); ?></td>
    </tr>
    </tbody>
</table>
<?php $this->end(); ?>
