<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Data $data
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Data'), ['action' => 'edit', $data->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Data'), ['action' => 'delete', $data->id], ['confirm' => __('Are you sure you want to delete # {0}?', $data->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="data view content">
            <h3><?= h($data->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($data->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($data->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone No') ?></th>
                    <td><?= h($data->phone_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($data->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
