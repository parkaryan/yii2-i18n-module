<?php
/**
 * @var View $this
 * @var SourceMessage $model
 */

use yii\helpers\Html;
use yii\web\View;
use Zelenin\yii\modules\I18n\models\SourceMessage;
use Zelenin\yii\modules\I18n\Module;
use yii\widgets\ActiveForm;
//use Zelenin\yii\SemanticUI\collections\Breadcrumb;
//use Zelenin\yii\SemanticUI\Elements;
//use Zelenin\yii\SemanticUI\widgets\ActiveForm;


$this->title = Module::t('i18n','Update') . ': ' . $model->message;
$this->params['breadcrumbs'][] = ['label' => Module::t('i18n','Translations'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="content-form">
            <div class="row">

                    <?php $form = ActiveForm::begin(); ?>

                    <?php foreach ($model->messages as $language => $message) : ?>
                        <div>
                            <div class="col-md-1">
                                <?= $language ?>
                            </div>
                            <div class="col-md-11">
                                <?= $form->field($model->messages[$language], '[' . $language . ']translation')->textarea(['class' => 'col-md-8'])->label(false) ?>
                            </div>
                        </div>
                    <?php endforeach; ?>


            </div>
            <div class="row">
                        <div class="col-md-3">
                            <?= Html::submitButton(Module::t('i18n','Update'), ['class' => 'btn btn-success']) ?>
                        </div>
                <?php $form::end(); ?>
            </div>


</div>
