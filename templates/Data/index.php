<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Data> $data
 */
?>
<div class="data index content">
    <?= $this->Html->link(__('New Data'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Data') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('phone_no') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $data) : ?>
                    <tr>
                        <td><?= $this->Number->format($data->id) ?></td>
                        <td><?= h($data->name) ?></td>
                        <td><?= h($data->email) ?></td>
                        <td><?= h($data->phone_no) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $data->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $data->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $data->id], ['confirm' => __('Are you sure you want to delete # {0}?', $data->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>