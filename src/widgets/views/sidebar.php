<?php

use yii\helpers\Html;
?>
<div class="sidebar-widget">
    <ul class="list-group">
        <li class="list-group-item"><?= Html::a('Уведомления для рейсов', ['/notification']) ?></li>
        <li class="list-group-item"><?= Html::a('Черный список рейсов', ['/blacklist']) ?></li>
        <li class="list-group-item"><?= Html::a('Список статичных маршрутов', ['/route-static']) ?></li>
        <li class="list-group-item"><?= Html::a('Статистика поиска рейсов', ['/search-statistic']) ?></li>
    </ul>
</div>