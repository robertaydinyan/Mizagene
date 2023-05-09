<?php

namespace app\modules\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property int|null $e2e_item_id
 * @property int $item_id
 * @property string $i_usg_type
 * @property int $i_type
 * @property string $i_comb_type_id
 * @property int|null $source
 * @property int $check1
 * @property int $check2
 * @property int $check3
 * @property int $check4
 * @property int $deleted
 * @property string|null $comment
 * @property int $priority
 *
 * @property ItemTitle[] $itemTitles
 */
class Items extends \yii\db\ActiveRecord
{
    private static $tabs = array(
        1 => array('Active Items', 'active.png'),
        3 => array('Migrated Base', 'migrate.png'),
        2 => array('Creation', 'create.png'),
        4 => array('Archive', 'archive.png'),
        5 => array('Deleted', 'archive.png'),
    );

    private static $steps = array(
        1 => 'Migrated Base',
        2 => 'Translation',
        3 => 'Translation (check)',
        4 => 'Config',
        5 => 'Config (check)',
        6 => 'Result',
        7 => 'Result Translation',
        8 => 'Result (Check)',
//        9 => 'Results (Edits Translate)',
        9 => 'Push'
    );

    private static $ITypes = array(
        1 => 'single',
        2 => 'multiple'
    );

    private static $IUsgTypes = array(
        1 => 'Cհaracter (general)',
        2 => 'Character (positive)',
        3 => 'Character (negative)',
        4 => 'Psyche (general)',
        5 => 'Psyche (endurance)',
        6 => 'Psyche (dependence)',
        7 => 'Psyche (emotion)',
        8 => 'Psyche (behavior)',
        9 => 'Psyche (wp&control)',
        10 => 'Preferences',
        11 => 'Intellect',
        12 => 'Communication',
        13 => 'Food&Diet',
        14 => 'Health',
        15 => 'Job & Career',
        16 => 'Talents',
        17 => 'Sports',
        18 => 'Science',
        19 => 'Profession',
        20 => 'Study',
        21 => 'Industrial',
        22 => 'HR',
        23 => 'Friendship',
        24 => 'Love',
        25 => 'Relationships in Family',
        26 => 'Relationships at Work',
        27 => 'Relationships in Business',
        28 => 'Intimate',
        29 => 'Child',
    );

    private static $ICombTypes = array(
        1 => 'friend',
        2 => 'partner',
        3 => 'spouse',
        4 => 'child',
        5 => 'foster child',
        6 => 'biological father',
        7 => 'biological mother',
        8 => 'foster father',
        9 => 'foster mother',
        10 => 'father in law',
        11 => 'mother in law',
        12 => 'daughter or son in law',
        13 => 'biological brother',
        14 => 'biological syster',
        15 => 'stepbrother',
        16 => 'stepsister',
        17 => 'relative',
        18 => 'subordinate',
        19 => 'manager',
        20 => 'colleague',
        21 => 'business partner',
        22 => 'customer',
        23 => 'contractor',
    );

    private static $priorities = array(
        0 => 'Regular',
        1 => 'High priority',
        2 => 'Very high priority'
    );

    private static $statuses = array(
        1 => 'In process',
        2 => 'Returned'
    );

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['e2e_item_id', 'item_id', 'source', 'check1', 'check2', 'check3', 'check4', 'deleted', 'priority', 'returned'], 'integer'],
            [['item_id'], 'required'],
            [['i_type', 'i_usg_type', 'i_comb_type_id', 'activated_at'], 'safe'],
            [['comment'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'e2e_item_id' => 'E2e Item ID',
            'item_id' => 'Item ID',
            'i_usg_type' => 'I Usg Type',
            'i_type' => 'I Type',
            'i_comb_type_id' => 'I Comb Type ID',
            'source' => 'Source',
            'check1' => 'Check1',
            'check2' => 'Check2',
            'check3' => 'Check3',
            'check4' => 'Check4',
            'deleted' => 'Deleted',
            'comment' => 'Comment',
            'priority' => 'Priority',
            'returned' => 'Returned',
            'activated_at' => 'Activated At',
        ];
    }

    public static function attributeLabelsCustom($pill = 1, $step = 1) {
        $role = Yii::$app->admin->getIdentity()->role;
        $titles = array('item_id', 'title_persian', 'title_russian', 'title_english', 'title_temp_russian', 'title_temp_english');
        $configurations = array('i_usg_type', 'i_type', 'i_comb_type_id', 'color1', 'color2', 'color3', 'color4', 'color5', 'color6', 'color7', 'color8', 'color9', 'color10');
//        $view1 = array(
//            array(
//                'item_id',
//                'title_persian',
//                'description_persian',
//                '',
//                'title_temp_russian',
//                'title_temp_english',
//                'description_temp_russian',
//                'description_temp_english',
//                '',
//                'title_russian',
//                'title_english',
//                'description_russian',
//                'description_english'
//            ),
//            '{view} {translate} {delete}'
//        );

        $view1_editable = array(
            array(
                'item_id',
                'persian',
                'russian',
                'title_temp_english',
                'description_temp_english',
                '',
                'title_russian_editable',
                'title_english_editable',
                'description_russian_editable',
                'description_english_editable'
            ),
            '{view} {checkmarkTranslator} {delete}'
        );
        switch ($pill) {
            case 1:
                return array(
                    array(
                        'item_id',
                        'persian',
                        'russian',
                        'english',
                        'results_description'
                    ),
                    '{disable} {update}'
                );
            case 2;
                break;
            case 3;
                switch ($step) {
                    case 1:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian_temp',
                                'english_temp',
                                'comment',
                                'priority'
                            ),
                            '{delete} {save} {translate} {checkmarkAdmin}'
                        );
                        break;
                    case 2:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian_temp',
                                'russian_editable',
                                'english_temp',
                                'english_editable'
                            ),
                            '{delete} {save} {checkmarkTranslator} {checkmarkAdmin}'
                        );
                        break;
                    case 3:
                        $res = $role == 4 ?
                            array(
                                array(
                                    'item_id',
                                    'persian',
                                    'russian',
                                    'english'
                                ),
                                ''
                            ) :
                            array(
                                array(
                                    'item_id',
                                    'persian',
                                    'russian',
                                    'english',
                                    'comment'
                                ),
                                '{delete} {save} {declinePsychologist} {checkmarkPsychologist} {checkmarkAdmin}'
                            );
                        break;
                    case 4:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results',
                                'types'
                            ),
                            '{delete} {save} {colors} {checkmarkAdmin}'
                        );
                        break;
                    case 5:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results',
                                'types'
                            ),
                            '{delete} {save} {declineProfessor} {checkmarkProfessor} {checkmarkAdmin}'
                        );
                        break;
                    case 6:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description_ru_editable'
                            ),
                            '{delete} {checkmarkPsychologist} {checkmarkAdmin}'
                        );
                        break;
                    case 7:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description_en_editable'
                            ),
                            '{delete} {checkmarkTranslator} {checkmarkAdmin}'
                        );
                        break;
                    case 8:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description_en_check'
                            ),
                            '{delete} {declineProfessor} {checkmarkProfessor} {checkmarkAdmin}'
                        );
                        break;
                    case 9:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description'
                            ),
                            '{delete} {declineProfessor} {checkmarkAdmin}'
                        );
                        break;
                }
                if ($role == 1 and array_search('types', $res[0]) === false) {
                    $res[0][] = 'types';
                }
                return $res;
            case 4;
                return array(array(
                    'item_id',
                    'persian',
                    'russian',
                    'english',
                    'results_description',
                    'delete_date'
                ), '{restore} {delete}');
            case 5;
                return array(array(
                    'item_id',
                    'persian',
                    'russian',
                    'english',
                    'results_description',
                    'delete_date'
                ), '');
        }
    }

    public function getTitle($language = '') {
        if (!$language) return '';
        $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $language])->one();
        return $it ?: new ItemTitle();
    }

    public function getDescription($language = '') {
        if (!$language) return '';
        $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $language])->one();
        return $it ?: new ItemTitle();
    }

    public function saveData($items) {
        if (isset($items)) {
            if ($this->load($items, '')) {
                if ($this->save()) {
                    if (isset($items['title'])) {
                        foreach ($items['title'] as $i => $t) {
                            $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $i])->one() ?: new ItemTitle();
                            $it->description = $items['description'][$i];
                            $it->title = $t;
                            $it->itemID = $this->id;
                            $it->languageID = $i;
                            $it->save();
                        }
                    }
                    if (isset($items['colorSectors'])) {
                        $colorSectors = $items['colorSectors'];
                        for ($i = 0; $i < 10; $i++) {
                            $ic = ItemColors::find()->where(['item_id' => $this->item_id, 'sector_id' => ($i + 1)])->one();
                            isset($colorSectors['color_id']) && isset($colorSectors['color_id'][$i]) && $ic->color_id = $colorSectors['color_id'][$i];
                            isset($colorSectors['description_ru']) && isset($colorSectors['description_ru'][$i]) && $ic->description_ru = $colorSectors['description_ru'][$i];
                            isset($colorSectors['description_en']) && isset($colorSectors['description_en'][$i]) && $ic->description_en = $colorSectors['description_en'][$i];
                            $ic->save();
                        }
                    }
                    return 1;
                } else {
                    var_dump($this->errors);
                }
            }
            return false;
        }
    }

    public function getCheck() {
        return $this->{'check' . Yii::$app->admin->getIdentity()->role};
    }

    public static function getSteps() {
        $role = Yii::$app->admin->getIdentity()->role;
        $steps = self::$steps;
        if ($role == 4) {
            unset($steps[1]);
            unset($steps[4]);
            unset($steps[5]);
            unset($steps[6]);
            unset($steps[8]);
            unset($steps[9]);
        } else if ($role == 2) {
            unset($steps[1]);
            unset($steps[2]);
            unset($steps[3]);
            unset($steps[4]);
            unset($steps[6]);
            unset($steps[7]);
            unset($steps[9]);
        } else if ($role == 3) {
            unset($steps[2]);
            unset($steps[5]);
            unset($steps[7]);
            unset($steps[8]);
            unset($steps[9]);
        }

        return $steps;
    }

    public static function getActiveSteps() {
        $role = Yii::$app->admin->getIdentity()->role;
        $steps = self::$steps;
        if ($role == 4) {
            unset($steps[1]);
            unset($steps[3]);
            unset($steps[4]);
            unset($steps[5]);
            unset($steps[7]);
            unset($steps[8]);
        } else if ($role == 2) {
            unset($steps[1]);
            unset($steps[2]);
            unset($steps[3]);
            unset($steps[4]);
            unset($steps[6]);
            unset($steps[7]);
        } else if ($role == 3) {
            unset($steps[2]);
            unset($steps[5]);
            unset($steps[6]);
        } else {
            $steps = array();
        }

        return $steps;
    }

    public static function getTabs() {
        return self::$tabs;
    }

    public static function getITypes() {
        return self::$ITypes;
    }

    public function getType() {
        $types = '';
        !is_array($this->i_type) && $this->i_type = array($this->i_type);
        if ($this->i_type) {
            foreach ($this->i_type as $type) {
                if ($type) {
                    $types .= self::$ITypes[$type] . ' ';
                }
            }
        }

        return $types;
    }

    public static function getICombTypes() {
        return self::$ICombTypes;
    }

    public function getUsgType() {
        $result = '';
        !is_array($this->i_usg_type) && $this->i_usg_type = array($this->i_usg_type);
        foreach ($this->i_usg_type as $type) {
            $usg_type = UsgType::findOne(['id' => $type]);
            $result .= ($usg_type ? $usg_type->name : '') . ' ';
        }

        return $result;
    }

    public function getCombType() {
        $result = '';
        !is_array($this->i_comb_type_id) && $this->i_comb_type_id = array($this->i_comb_type_id);
        foreach ($this->i_comb_type_id as $type) {
            if ($type AND $type != '[]') {
                $result .= self::$ICombTypes[$type] . ' ';
            }
        }
        return $result;
    }

    public static function getIUsgTypes() {
        return ArrayHelper::map(UsgType::find()->asArray()->all(), 'id', 'name');
    }


    public function getIType() {
        return self::$ITypes[$this->i_type];
    }


    public function getStep() {
        if ($this->check2 == 0 AND $this->check3 == 0 AND $this->check4 == 0) return 1;
        if ($this->check2 == 0 AND $this->check3 == 0 AND $this->check4 == 1) return 2;
        if ($this->check2 == 0 AND $this->check3 == 0 AND $this->check4 == 2) return 3;
        if ($this->check2 == 0 AND $this->check3 == 1 AND $this->check4 == 2) return 4;
        if ($this->check2 == 1 AND $this->check3 == 1 AND $this->check4 == 2) return 5;
        if ($this->check2 == 2 AND $this->check3 == 1 AND $this->check4 == 2) return 6;
        if ($this->check2 == 2 AND $this->check3 == 1 AND $this->check4 == 3) return 7;
    }

    public static function getTabElCount($i) {
        $query = Items::find();
        $searchModel = new ItemsSearch();
        $searchModel->filterPills($query, $i);

        return $query->count();
    }
    public static function getStepElCount($pill, $step) {
        $query = Items::find();
        $searchModel = new ItemsSearch();
        $searchModel->filterPills($query, $pill);
        $searchModel->filterSteps($query, $step, $pill);

        return $query->count();
    }

    public static function getPriorities() {
        return self::$priorities;
    }

    public function getitemtitle() {
        return $this->hasMany(ItemTitle::class, ['itemID' => 'id']);
    }

    public function getItemTitles() {
        return $this->hasMany(ItemTitle::class, ['itemID' => 'id']);
    }

    public function getRussian() {
        return $this->hasOne(ItemTitle::class, ['itemID' => 'id'])
            ->where(['languageID' => 1]);
    }

    public function getEnglish() {
        return $this->hasOne(ItemTitle::class, ['itemID' => 'id'])
            ->where(['languageID' => 2]);
    }

    public function getColorSector($i) {
        return ItemColors::find()->where(['item_id' => $this->item_id, 'sector_id' => $i])->one();
    }

    public function getColorSectors() {
        return $this->hasMany(ItemColors::class, ['item_id' => 'item_id']);
    }

    public function fields() {
        $fields = parent::fields();
        $fields[] = 'type';
        return $fields;
    }

}
