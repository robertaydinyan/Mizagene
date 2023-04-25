<?php

namespace app\modules\models;

use Yii;

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
        0 => 'not set',
        1 => 'single',
        2 => 'multiple'
    );

    private static $IUsgTypes = array(
        1 => 'Caharacter (general)',
        2 => 'Character (positive)',
        3 => 'Character (negative)',
        4 => 'Psyche',
        5 => 'Emotion',
        6 => 'Intellect',
        7 => 'Communication',
        8 => 'Food&Diet',
        9 => 'Health',
        10 => 'Job & Career',
        11 => 'Children only',
        12 => 'Adult only',
        13 => 'Talents',
        14 => 'Sports',
        15 => 'Science',
        16 => 'Profession',
        17 => 'Study',
        18 => 'Single (intimate preferences)',
        19 => 'Industrial',
        20 => 'HR',
        21 => 'Friendship',
        22 => 'Love',
        23 => 'Relationships in Family',
        24 => 'Relationships at Work',
        25 => 'Relationships in Business',
        26 => 'Intimate',
        27 => 'Child',
    );

    private static $ICombTypes = array(
        35 => 'single',
        1 => 'friend-friend',
        2 => 'partner-partner',
        3 => 'spouse-spouse',
        4 => 'spouse-f_in_law',
        5 => 'spouse-m_in_law',
        6 => 'f_in_law-ch_in_law',
        7 => 'm_in_law-ch_in_law',
        8 => 'f_parent-child-ch_in_law',
        9 => 'm_parent-child-ch_in_law',
        10 => 'child-f_parent',
        11 => 'f_parent-child',
        12 => 'child-m_parent',
        13 => 'm_parent-child',
        14 => 'child-m_parent-f_f_parent',
        15 => 'child-f_parent-f_m_parent',
        16 => 'f_child-f_f_parent',
        17 => 'f_f_parent-f_child',
        18 => 'f_child-f_m_parent',
        19 => 'f_m_parent-f_child',
        20 => 'brother-brother',
        21 => 's_brother-s_brother',
        22 => 'brother-sister',
        23 => 's_brother-s_sister',
        24 => 'sister-brother',
        25 => 's_sister-s_brother',
        26 => 'sister-sister',
        27 => 's_sister-s_sister',
        28 => 'relative-relative',
        29 => 'subord-manager',
        30 => 'manager-subord',
        31 => 'coll-coll',
        32 => 'b_partner-b_partner',
        33 => 'b_cont-b_cust',
        34 => 'b_cust-b_cont',
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
            [['e2e_item_id', 'item_id', 'i_type', 'source', 'check1', 'check2', 'check3', 'check4', 'deleted', 'priority', 'returned'], 'integer'],
            [['item_id'], 'required'],
            [['i_usg_type', 'i_comb_type_id', 'activated_at'], 'safe'],
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
                    ''
                );
            case 2;
                break;
            case 3;
                switch ($step) {
                    case 1:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian_temp',
                                'english_temp',
                                'comment',
                                'usg_type',
                                'priority'
                            ),
                            '{delete} {save} {translate}'
                        );
                    case 2:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian_temp',
                                'russian_editable',
                                'english_temp',
                                'english_editable'
                            ),
                            '{delete} {save} {checkmarkTranslator}'
                        );
                    case 3:
                        return $role == 4 ?
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
                                '{delete} {save} {declinePsychologist} {checkmarkPsychologist}'
                            );
                    case 4:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results',
                                'types'
                            ),
                            '{delete} {save} {colors}'
                        );
                    case 5:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results',
                                'types'
                            ),
                            '{delete} {save} {declineProfessor} {checkmarkProfessor}'
                        );
                    case 6:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description_ru_editable'
                            ),
                            '{delete} {checkmarkPsychologist}'
                        );
                    case 7:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description_en_editable'
                            ),
                            '{delete} {checkmarkTranslator}'
                        );
                    case 8:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description_en_check'
                            ),
                            '{delete} {declineProfessor} {checkmarkProfessor}'
                        );
                    case 9:
                        return array(
                            array(
                                'item_id',
                                'persian',
                                'russian',
                                'english',
                                'results_description'
                            ),
                            '{delete} {declineProfessor} {checkmarkAdmin}'
                        );
                }
                break;
            case 4;
                return array($titles, '{restore}');
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

    public function saveData($post) {
        if (isset($post['Items'])) {
            if ($this->load($post, 'Items')) {
                if ($this->save()) {
                    if (isset($post['Items']['title'])) {
                        foreach ($post['Items']['title'] as $i => $t) {
                            $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $i])->one() ?: new ItemTitle();
                            $it->description = $post['Items']['description'][$i];
                            $it->title = $t;
                            $it->itemID = $this->id;
                            $it->languageID = $i;
                            $it->save();
                        }
                    }
                    if (isset($post['Items']['colorSectors'])) {
                        $colorSectors = $post['Items']['colorSectors'];
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
        return self::$ITypes[$this->i_type];
    }

    public static function getICombTypes() {
        return self::$ICombTypes;
    }

    public function getUsgType() {
        $result = '';
        foreach ($this->i_usg_type as $type)
            $result .= self::$IUsgTypes[$type] . ' ';

        return $result;
    }

    public function getCombType() {
        $result = '';
        foreach ($this->i_comb_type_id as $type)
            $result .= self::$ICombTypes[$type] . ' ';
        return $result;
    }

    public static function getIUsgTypes() {
        return self::$IUsgTypes;
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

    public function getColorSector($i) {
        return ItemColors::find()->where(['item_id' => $this->item_id, 'sector_id' => $i])->one();
    }

    public function getColorSectors() {
        return $this->hasMany(ItemColors::class, ['item_id' => 'item_id']);
    }
}
