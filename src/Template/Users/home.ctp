<?= $this->element('menu'); ?>
<h2>Hola usuario, <?= $this->Html->link($current_user['username'], ['controller' => 'Users', 'action' => 'view', $current_user['id_user']]); ?>.</h2>