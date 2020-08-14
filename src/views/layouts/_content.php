<?php
/**
 * Description of _content.php
 * Created At 14/02/2020 2:00 PM
 * Author By Prawee Wongsa <konkeanweb@gmail.com>
 */

use yii\bootstrap4\Breadcrumbs;
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        <?=isset($this->title) ? $this->title : null?>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <?=Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        'tag' => 'ol',
                        'options' => ['class' => 'breadcrumb float-sm-right']
                    ])?>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <?=$content?>
    </div>
</div>