<?php

namespace app\models;
use  yii\db\ActiveRecord;


class Clients extends ActiveRecord
{
     /**
     * <b>tableName</b> Método estático que retorna o nome da tabela
     * @return string table
     */
    public static function tableName()
    {
        return 'clients';
    } 

    /**
     * <b>rules</b> Método responsável por realizar a validação dos dados recebidos, 
     * OBS: O tipo safe, informa que as colunas que podem ser informado os dados do formulário (Massive Assignment) atribuição da massiva
     */

     public function rules()
     {
         //informa que os dados podem ser gravados ao utilizar o   $model->attributes no controller
         return [
            [['name', 'email'], 'safe'],
            [['name', 'email'], 'required'],
            [['name', 'email'], 'string', 'max' => 255], 
         ];
     }
}
