<?php

namespace app\modules\models;

use app\models\Mizagene;
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

    private static $migrated_steps = array(
        1 => 'Migrated Base',
        2 => 'Translation',
        3 => 'Translation (check)',
        4 => 'Config',
        5 => 'Config (check)',
        6 => 'Result',
        7 => 'Result Translation',
        8 => 'Result (Check)',
        9 => 'Push'
    );

    private static $created_steps = array(
        1 => 'Creation Base',
        2 => 'Item Check',
        3 => 'Push'
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

    private static $genders = array(
        0 => 'both',
        1 => 'male',
        2 => 'female'
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
            [['e2e_item_id', 'item_id', 'source', 'check1', 'check2', 'check3', 'check4', 'deleted', 'priority', 'returned', 'gender', 'rule_id'], 'integer'],
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

        switch ($pill) {
            case 1:
                return $role == 1 ?
                    array(
                        array(
                            'item_id',
                            'persian',
                            'russian',
                            'english',
                            'results_description',
                            'results',
                            'gender_editable',
                            'rule_editable'
                        ),
                        '{disable} {update} {save} {mark}'
                    )
                : array(
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
                switch ($step) {
                    case 1:
                        $res = array(
                            array(
                                'item_id',
                                'russian',
                                'english',
                                'priority',
                                'results_description'
                            ),
                            '{delete} {update} {save} {parameterInfluence} {checkmarkPsychologist}'
                        );
                        break;
                    case 2:
                        $res = array(
                            array(
                                'item_id',
                                'persian_editable',
                                'russian',
                                'english',
                                'results_description'
                            ),
                            '{delete} {update} {save} {parameterInfluence} {checkmarkProfessor}'
                        );
                        break;
                    case 3:
                        $res = array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description'
                            ),
                            '{delete} {update} {save} {parameterInfluence} {checkmarkAdmin}'
                        );
                        break;
                }
                return $res;
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
                ), '{restore} {remove}');
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
                            $ic = ItemColors::find()->where(['item_id' => $this->id, 'sector_id' => ($i + 1)])->one() ?: new ItemColors();
                            $ic->item_id = $this->id;
                            $ic->sector_id = $i + 1;
                            isset($colorSectors['color_id']) && isset($colorSectors['color_id'][$i]) && $ic->color_id = $colorSectors['color_id'][$i];
                            isset($colorSectors['description_ru']) && isset($colorSectors['description_ru'][$i]) && $ic->description_ru = $colorSectors['description_ru'][$i];
                            isset($colorSectors['description_en']) && isset($colorSectors['description_en'][$i]) && $ic->description_en = $colorSectors['description_en'][$i];
                            $ic->save();
                        }
                    }
                    return 1;
                } else {
                    var_dump($this->errors);die();
                }
            }
            return false;
        }
    }

    public function getCheck() {
        return $this->{'check' . Yii::$app->admin->getIdentity()->role};
    }

    public static function getSteps($pill) {
        $role = Yii::$app->admin->getIdentity()->role;
        $migrated_steps = self::$migrated_steps;
        $created_steps = self::$created_steps;
        if ($pill == 3) {
            if ($role == 4) {
                unset($migrated_steps[1]);
                unset($migrated_steps[4]);
                unset($migrated_steps[5]);
                unset($migrated_steps[6]);
                unset($migrated_steps[8]);
                unset($migrated_steps[9]);
            } else if ($role == 2) {
                unset($migrated_steps[1]);
                unset($migrated_steps[2]);
                unset($migrated_steps[3]);
                unset($migrated_steps[4]);
                unset($migrated_steps[6]);
                unset($migrated_steps[7]);
                unset($migrated_steps[9]);
            } else if ($role == 3) {
                unset($migrated_steps[2]);
                unset($migrated_steps[5]);
                unset($migrated_steps[7]);
                unset($migrated_steps[8]);
                unset($migrated_steps[9]);
            }
            return $migrated_steps;
        } else if ($pill == 2) {
            if ($role == 2) {
                unset($created_steps[0]);
                unset($created_steps[2]);
            }

            return $created_steps;
        }

        return [];
    }

    public static function getActiveSteps() {
        $role = Yii::$app->admin->getIdentity()->role;
        $migrated_steps = self::$migrated_steps;
        if ($role == 4) {
            unset($migrated_steps[1]);
            unset($migrated_steps[3]);
            unset($migrated_steps[4]);
            unset($migrated_steps[5]);
            unset($migrated_steps[7]);
            unset($migrated_steps[8]);
        } else if ($role == 2) {
            unset($migrated_steps[1]);
            unset($migrated_steps[2]);
            unset($migrated_steps[3]);
            unset($migrated_steps[4]);
            unset($migrated_steps[6]);
            unset($migrated_steps[7]);
        } else if ($role == 3) {
            unset($migrated_steps[2]);
            unset($migrated_steps[5]);
            unset($migrated_steps[6]);
        } else {
            $migrated_steps = array();
        }

        return $migrated_steps;
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
        return ItemColors::find()->where(['item_id' => $this->id, 'sector_id' => $i])->one();
    }

    public function getColorSectors() {
        return $this->hasMany(ItemColors::class, ['item_id' => 'id']);
    }

    public static function getGenders() {
        return self::$genders;
    }

    public function fields() {
        $fields = parent::fields();
        $fields[] = 'type';
        return $fields;
    }

    /*
     * min - [29, -5]
     * max - [53, 15]
    */
    public function rangeCalculation($min, $max) {
        $this->min_r = $min[0];
        $this->min_delta_r = $min[1];
        $coefficient = ($max[1] - $min[1]) / ($max[0] - $min[0]);
        $this->coefficient = $coefficient;
        $this->save();
    }

    public static function getDataById($id, $language) {
        $item = Items::find()
            ->select([
                'items.id',
                'items.item_id as item_ID',
                'items.i_usg_type as i_usage_type',
                'items.i_type',
                'items.i_comb_type_id as subject_i_role',
                'items.i_comb_type_id as object_i_role',
                'item_title.title as i_title',
                'item_title.description as i_description',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 1) as i_zone_1_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 2) as i_zone_2_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 3) as i_zone_3_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 4) as i_zone_4_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 5) as i_zone_5_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 6) as i_zone_6_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 7) as i_zone_7_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 8) as i_zone_8_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 9) as i_zone_9_colour',
                '(SELECT color_id FROM `item_colors` WHERE `item_id` = 2 AND sector_id = 10) as i_zone_10_colour',
            ])
            ->joinWith([
                'itemTitles' => function ($query) use ($language) {
                    $query->where(['languageID' => $language]);
                },
            ], false)
            ->where(['items.id' => $id])
            ->asArray()->one();

        if (isset($item['i_usage_type'])) {
            if (is_string($item['i_usage_type'])) {
                $item['i_usage_type'] = array($item['i_usage_type']);
            } else {
                $item['i_usage_type'] = array_filter(json_decode($item['i_usage_type']), function($value) {
                    return $value !== "[]";
                });
            }
        } else {
            $item['i_usage_type'] = [];
        }

        if (isset($item['i_type'])) {
            if (is_string($item['i_type'])) {
                $item['i_type'] = array($item['i_type']);
            } else {
                $item['i_type'] = array_filter(json_decode($item['i_type']), function ($value) {
                    return $value !== "[]";
                });
            }
        } else {
            $item['i_type'] = [];
        }
        if (isset($item['subject_i_role']) AND $item['subject_i_role'] != '[]') {
            if (is_string($item['subject_i_role'])) {
                $item['subject_i_role'] = array($item['subject_i_role']);
            } else {
                $item['subject_i_role'] = array_filter(json_decode($item['subject_i_role']), function ($value) {
                    return $value !== "[]";
                });
            }
        } else {
            $item['subject_i_role'] = 0;
        }

        if (isset($item['object_i_role']) AND $item['object_i_role'] != '[]') {
            if (is_string($item['object_i_role'])) {
                $item['object_i_role'] = array($item['object_i_role']);
            } else {
                $item['object_i_role'] = array_filter(json_decode($item['object_i_role']), function ($value) {
                    return $value !== "[]";
                });
            }
        } else {
            $item['object_i_role'] = 0;
        }

        return $item;
    }
}
