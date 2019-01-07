<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12/1/18
 * Time: 10:10 AM
 */

    ?>

<?php  $form = \yii\widgets\ActiveForm::begin()?>
    <?= $form->field($model, 'name')->textarea() ?>
    <?= $form->field($model, 'cost')->textInput() ?>
<?php  $form = \yii\widgets\ActiveForm::end()?>
