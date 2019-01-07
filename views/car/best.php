<?php
/* @var $models \app\models\Car[] */
$this->title =  'Лучшая машина ';
?>

<h1>Лучшие автомобили</h1>

<?php foreach ($models as $model): ?>
    <article>
        <h3><?= $model -> car ?></h3>
        <p><?= $model->id ?> </p>
    </article>
    <?php endforeach;  ?>
