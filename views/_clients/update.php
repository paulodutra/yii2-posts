<?php
    /* @var $this yii\web\View */
    use yii\helpers\Url;
?>
<h1>Atualizar Cliente</h1>


<form name="form" method="post" action="<?= Url::to(['clients/update', 'id' => $model->id]); ?>">

   <input type="hidden" name="<?= \yii::$app->request->csrfParam; ?>" 
            value="<?= \yii::$app->request->csrfToken; ?>">

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" 
                placeholder="Informe o nome" value="<?= $model->name; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email"
                placeholder="Informe o email" value="<?= $model->email; ?>">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>