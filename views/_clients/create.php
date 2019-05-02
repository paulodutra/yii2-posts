<?php
    /* @var $this yii\web\View */
    use yii\helpers\Url;
   
?>
<h1>Novo Cliente</h1>


<form name="form" method="post" action="<?= Url::to(['clients/create']); ?>">

   <input type="hidden" name="<?= \yii::$app->request->csrfParam; ?>" 
            value="<?= \yii::$app->request->csrfToken; ?>">

    <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Informe o nome">
    </div>
    <div class="form-group">
        <label for="email">email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Informe o email">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>