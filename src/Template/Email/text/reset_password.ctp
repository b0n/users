<?php
/**
 * @var \Users\Model\Entity\User $user
 */

use Cake\Routing\Router;

$url = Router::url(array(
    'plugin' => 'Users',
    'controller' => 'Users',
    'action' => 'reset',
    $user->username,
    $user->token,
), true);

echo $url;
