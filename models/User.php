<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%t_user}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $passwd
 * @property integer $row_add_timw
 * @property integer $delete_flag
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%t_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'passwd', 'row_add_timw', 'delete_flag'], 'required'],
            [['row_add_timw', 'delete_flag'], 'integer'],
            [['username', 'passwd'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', '用户名'),
            'passwd' => Yii::t('app', '用户密码'),
            'row_add_timw' => Yii::t('app', '添加时间'),
            'delete_flag' => Yii::t('app', '删除标识'),
        ];
    }
}
