<?php

namespace b4djo\redirect301\models;

/**
 * This is the model class for table "redirect_page".
 *
 * @property integer $id
 * @property string $source_url
 * @property string $target_url
 */
class RedirectPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'redirect_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['source_url', 'target_url'], 'required'],
            [['source_url', 'target_url'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'source_url' => 'Source Url',
            'target_url' => 'Target Url',
        ];
    }
    
    /**
     * Возвращает url переадресации
     * @param string $source_url Исходный url
     * @return bool|static
     */
    public function getPageByAlias($source_url)
    {
        if (!$source_url) {
            return false;
        }
        
        return $page = self::findOne(['source_url' => $source_url]);
    }
}
