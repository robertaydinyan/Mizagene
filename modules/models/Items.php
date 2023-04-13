<?php

namespace app\modules\models;

use Yii;
use yii\rbac\Item;

/**
 * This is the model class for table "items".
 *
 * @property int $id
 * @property int|null $e2e_item_id
 * @property int|null $item_id
 * @property string|null $i_type
 * @property string|null $i_usg_type
 * @property string|null $i_comb_type_id
 * @property string|null $e2e_item_ru
 * @property string|null $e2e_i_description_ru
 * @property string|null $e2e_item_en
 * @property string|null $e2e_i_description_en
 * @property string|null $e2e_item_ir
 * @property string|null $e2e_i_description_ir
 * @property string|null $i_result_sector1_colorid
 * @property string|null $i_result_sector2_colorid
 * @property string|null $i_result_sector3_colorid
 * @property string|null $i_result_sector4_colorid
 * @property string|null $i_result_sector5_colorid
 * @property string|null $i_result_sector6_colorid
 * @property string|null $i_result_sector7_colorid
 * @property string|null $i_result_sector8_colorid
 * @property string|null $i_result_sector9_colorid
 * @property string|null $i_result_sector10_colorid
 * @property int|null $source
 * @property int|null $check1
 * @property int|null $check2
 * @property int|null $check3
 * @property int|null $check4
 */
class Items extends \yii\db\ActiveRecord
{
    private static $COLOR_RANGE = array(
        0 => '',
        '' => '',
        'critical' => 'critical',
        'bad' => 'bad',
        'notenough' => 'notenough',
        'good' => 'good',
        'verygood' => 'verygood'
    );

    private static $tabs = array(
        1 => 'Pushed items',
        2 => 'Created items',
        3 => 'Migrated items',
        4 => 'Archive',
    );

    private static $steps = array(
        1 => 'Filtering',
        2 => 'Translating',
        3 => 'Accept translation',
        4 => 'Configuring',
        5 => 'Professor checking',
        6 => 'Translating parameters',
        7 => 'Accept translation of parameters',
        8 => 'Waiting for push'
    );

    private static $ITypes = array(
        0 => '',
        1 => 'single',
        2 => 'multiple'
    );

    private static $IUsgTypes = array(
        0 => '',
        1 => 'Single (children only)',
        2 => 'Single (adults only)',
        3 => 'Single (talents)',
        4 => 'Single (sports)',
        5 => 'Single (science)',
        6 => 'Single (profession)',
        7 => 'Single (study)',
        8 => 'Single (intimate preferences)',
        9 => 'Friendship',
        10 => 'Love',
        11 => 'Relationships in Family',
        12 => 'Relationships at Work',
        13 => 'Relationships in Business',
        14 => 'Intimate',
        15 => 'Child',
    );

    private static $ICombTypes = array(
        0 => '',
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
            [['i_type', 'i_usg_type', 'i_comb_type_id', 'e2e_item_id', 'item_id', 'source', 'check1', 'check2', 'check3', 'check4'], 'integer'],
            [['i_result_sector1_colorid', 'i_result_sector2_colorid', 'i_result_sector3_colorid', 'i_result_sector4_colorid', 'i_result_sector5_colorid', 'i_result_sector6_colorid', 'i_result_sector7_colorid', 'i_result_sector8_colorid', 'i_result_sector9_colorid', 'i_result_sector10_colorid'], 'string', 'max' => 255],
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
            'i_type' => 'I Type',
            'i_usg_type' => 'I Usg Type',
            'i_comb_type_id' => 'I Comb Type ID',
            'i_result_sector1_colorid' => 'I Result Sector1 Colorid',
            'i_result_sector2_colorid' => 'I Result Sector2 Colorid',
            'i_result_sector3_colorid' => 'I Result Sector3 Colorid',
            'i_result_sector4_colorid' => 'I Result Sector4 Colorid',
            'i_result_sector5_colorid' => 'I Result Sector5 Colorid',
            'i_result_sector6_colorid' => 'I Result Sector6 Colorid',
            'i_result_sector7_colorid' => 'I Result Sector7 Colorid',
            'i_result_sector8_colorid' => 'I Result Sector8 Colorid',
            'i_result_sector9_colorid' => 'I Result Sector9 Colorid',
            'i_result_sector10_colorid' => 'I Result Sector10 Colorid',
            'source' => 'Source',
            'check1' => 'check1',
            'check2' => 'check2',
            'check3' => 'check3',
            'check4' => 'check4'
        ];
    }

    public static function attributeLabelsCustom($pill = 1, $step = 1) {
        $role = Yii::$app->admin->getIdentity()->role;
        $titles = array('item_id', 'title_persian', 'title_russian', 'title_english', 'title_temp_russian', 'title_temp_english');
        $configurations = array('i_usg_type', 'i_type', 'i_comb_type_id', 'color1', 'color2', 'color3', 'color4', 'color5', 'color6', 'color7', 'color8', 'color9', 'color10');
        switch ($pill) {
            case 1:
                return array(array_merge($titles, $configurations), "");
            case 2;
                break;
            case 3;
                switch ($step) {
                    case 1:
                        return array(array_merge($titles, $configurations), '{view} {delete} {translate}');
                    case 2:
                        return array($titles, '{view} {checkmarkTranslator} {update} {delete}');
                    case 3:
                        return array($titles, '{view} {checkmarkPsychologist} {delete}');
                    case 4:
                        return array(array_merge($titles, $configurations), '{view} {update} {colors} {delete}');
                    case 5:
                        return array(array_merge($titles, $configurations), '{view} {update} {checkmarkProfessor} {delete}');
                    case 6:
                        return array($titles, '{view} {checkmarkTranslator} {update} {delete}');
                    case 7:
                        return array($titles, '{view} {checkmarkPsychologist} {update} {delete}');
                    case 8:
                        return array(array_merge($titles, $configurations), '{view} {checkmarkAdmin} {delete}');
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
        $this->checkDifferences($post);
        if ($this->load($post)) {
            if ($this->save()) {
                foreach ($post['Items']['title'] as $i => $t) {
                    $it = ItemTitle::find()->where(['itemID' => $this->id, 'languageID' => $i])->one() ?: new ItemTitle();
                    if ($it->description != $post['Items']['description'][$i] || $it->title != $t)
                        $this->check4 = 0;
                    $it->description = $post['Items']['description'][$i];
                    $it->title = $t;
                    $it->itemID = $this->id;
                    $it->languageID = $i;
                    $it->save();
                }
                return $this->save();
            }
        }
        return false;
    }

    public function checkDifferences($post) {
        if (
            $this->i_usg_type != $post['i_usg_type'] ||
            $this->i_type != $post['i_type'] ||
            $this->i_comb_type_id != $post['i_comb_type_id'] ||
            $this->i_result_sector1_colorid != $post['i_result_sector1_colorid'] ||
            $this->i_result_sector2_colorid != $post['i_result_sector2_colorid'] ||
            $this->i_result_sector3_colorid != $post['i_result_sector3_colorid'] ||
            $this->i_result_sector4_colorid != $post['i_result_sector4_colorid'] ||
            $this->i_result_sector5_colorid != $post['i_result_sector5_colorid'] ||
            $this->i_result_sector6_colorid != $post['i_result_sector6_colorid'] ||
            $this->i_result_sector7_colorid != $post['i_result_sector7_colorid'] ||
            $this->i_result_sector8_colorid != $post['i_result_sector8_colorid'] ||
            $this->i_result_sector9_colorid != $post['i_result_sector9_colorid'] ||
            $this->i_result_sector10_colorid != $post['i_result_sector10_colorid']
        ) {
            $this->check2 = 0;
        }

        if (
            $this->i_result_sector1_colorid_description != $post['i_result_sector1_colorid_description'] ||
            $this->i_result_sector2_colorid_description != $post['i_result_sector2_colorid_description'] ||
            $this->i_result_sector3_colorid_description != $post['i_result_sector3_colorid_description'] ||
            $this->i_result_sector4_colorid_description != $post['i_result_sector4_colorid_description'] ||
            $this->i_result_sector5_colorid_description != $post['i_result_sector5_colorid_description'] ||
            $this->i_result_sector6_colorid_description != $post['i_result_sector6_colorid_description'] ||
            $this->i_result_sector7_colorid_description != $post['i_result_sector7_colorid_description'] ||
            $this->i_result_sector8_colorid_description != $post['i_result_sector8_colorid_description'] ||
            $this->i_result_sector9_colorid_description != $post['i_result_sector9_colorid_description'] ||
            $this->i_result_sector10_colorid_description != $post['i_result_sector10_colorid_description']
        ) {
            $this->check4 = 2;
        }
    }

    public function getCheck() {
        return $this->{'check' . Yii::$app->admin->getIdentity()->role};
    }

    public static function getColorRange() {
        return self::$COLOR_RANGE;
    }

    public static function getSteps() {
        $role = Yii::$app->admin->getIdentity()->role;
        $steps = self::$steps;
        if ($role == 4) {
            unset($steps[1]);
            unset($steps[4]);
            unset($steps[5]);
            unset($steps[7]);
        } else if ($role == 2) {
            unset($steps[1]);
            unset($steps[2]);
            unset($steps[3]);
            unset($steps[4]);
            unset($steps[6]);
            unset($steps[7]);
        }

        return $steps;
    }

    public static function getTabs() {
        return self::$tabs;
    }

    public static function getITypes() {
        return self::$ITypes;
    }

    public static function getICombTypes() {
        return self::$ICombTypes;
    }

    public static function getIUsgTypes() {
        return self::$IUsgTypes;
    }

    public function getIType() {
        return self::$ITypes[$this->i_type];
    }

    public function getICombType() {
        return self::$ICombTypes[$this->i_comb_type_id];
    }

    public function getIUsgType() {
        return self::$IUsgTypes[$this->i_usg_type];
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
}
