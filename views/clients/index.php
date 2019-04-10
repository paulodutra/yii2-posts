<?php
    use yii\helpers\Url;
    /* @var $this yii\web\View */
?>
<h1 class="text text-center">Clientes</h1>

<a href="<?= Url::to(['clients/create']);?>" class="btn btn-success">Novo Cliente</a>

<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Email</th>
        <th>-</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($clients as $client): ?>
            <tr>
                <td><?= $client->id; ?></td>
                <td><?= $client->name; ?></td>
                <td><?= $client->email; ?></td>
                <td>
                    <a href="<?= Url::to(['clients/update', 'id' => $client->id]);?>">Editar</a> |
                    <a href="<?= Url::to(['clients/delete', 'id' => $client->id]);?>">Excluir</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>