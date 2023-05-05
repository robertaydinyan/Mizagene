<?php

namespace app\modules\models;

use app\models\Country;
use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string $name
 * @property string|null $countries
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['countries'], 'safe'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'countries' => 'Countries',
        ];
    }

    public function getCountries() {
        $result = '';
        if ($this->countries) {
            is_string($this->countries) && $this->countries = array($this->countries);
            foreach ($this->countries as $country)
                $result .= Country::getCountries()[$country] . ', ';
        }
        return $result;
    }
}
