
$(document).ready(function () {
    $('.stepper').mdbStepper();
    })
    
    function someFunction21() {
    setTimeout(function () {
    $('#horizontal-stepper').nextStep();
    }, 2000);
    }


    <div class="col-lg-10 shadow-lg p-3 mb-5 bg-white rounded">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>
                
                <?= $form->field($model, 'firstName')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'lastName')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>
                
                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>