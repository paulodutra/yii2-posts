<?php

namespace app\controllers;

use app\models\Clients;
use yii\web\NotFoundHttpException;

class ClientsController extends \yii\web\Controller
{

     /**
     * <b>actionIndex</b> Método responsável por realizar a listagem dos clientes
     */

    public function actionIndex()
    {
        $clients = Clients::find()->all();

        return $this->render('index', [
            'clients' => $clients
        ]);
    }


    /**
     * <b>actionCreate</b> Método responsável por realizar a criação de um novo cliente.
     * OBS: Para utilizar $model->attributes, deverá estar habilitado no model dentro do metodo rules os nomes do campo com o valor safe
     */
    public function actionCreate()
    {
        $request = \yii::$app->request;

        if($request->isPost)
        {
           $model = new Clients();

           //attributes é uma propriedade do active record ao passar $request->post() sem parametro exemplo $request->post('email') nem nada ele irá pegar todos os dados do post
           $model->attributes =  $request->post(); 
           //só grava se o metodo rules existir no modelo
           $model->save();           
           return $this->redirect(['clients/index']);

        }

        return $this->render('create');
    }


      /**
     * <b>actionUpdate</b> Método responsável em realizar a atualização do cliente, recebe o id como parametro (antes disso devera registrar a 
     * personalização de rota no arquivo config/web.php) dentro do array rules
     */
    public function actionUpdate($id)
    {
        $model = Clients::findOne($id);

        if(! $model)
        {
            throw new NotFoundHttpException("Página não encontrada");
        }

        $request = \yii::$app->request;
        
        if($request->isPost)
        {
           //attributes é uma propriedade do active record ao passar $request->post() sem parametro exemplo $request->post('email') nem nada ele irá pegar todos os dados do post
           $model->attributes =  $request->post(); 
           //irá identificar que o registro já existe
           $model->save();
           
           return $this->redirect(['clients/index']);

        }

        return $this->render('update', [
            'model' => $model
        ]);
    }


     /**
     * <b>actionDelete<b/> Método responsável por excluir um registro, recebe como parametro o id do mesmo como parametro. (antes disso devera registrar a 
     * personalização de rota no arquivo config/web.php) dentro do array rules 
     * 
     */
    public function actionDelete($id)
    {

        $model = Clients::findOne($id);

        if(! $model)
        {
            throw new NotFoundHttpException("Página não encontrada");
        }

        $model->delete();
        
        return $this->redirect(['clients/index']);
    }




}
