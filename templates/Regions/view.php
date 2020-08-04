<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Region $region
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Region'), ['action' => 'edit', $region->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Region'), ['action' => 'delete', $region->id], ['confirm' => __('Are you sure you want to delete # {0}?', $region->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Regions'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Region'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="regions view content">
            <h3><?= h($region->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($region->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('Province') ?></th>
                    <td><?= h($region->province) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($region->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($region->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rain') ?></th>
                    <td><?= $this->Number->format($region->rain) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($region->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
