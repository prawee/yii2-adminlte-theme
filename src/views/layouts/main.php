<?php
/**
 * Description of main.php
 * Created At 14/02/2020 11:39 AM
 * Author By Prawee Wongsa <konkeanweb@gmail.com>
 * action == [login, signup, index(dashboard)]
 */

$moduleList = ['app-backend', 'basic'];
if (!in_array(Yii::$app->controller->module->id, $moduleList)) {
    echo $this->render('dashboard', ['content' => $content]);
} else {
    $action = Yii::$app->controller->action->id;
    $viewList = ['signup', 'login'];

    echo $this->render(
        !in_array($action, $viewList) ? 'dashboard' : $action,
        ['content' => $content]
    );
}
