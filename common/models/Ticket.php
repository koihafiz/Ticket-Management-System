<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "ticket".
 *
 * @property int $id
 * @property string $tikcet_id
 * @property string $service_no
 * @property string $segment_group
 * @property string $product_name
 * @property string $remark
 * @property string $ticket_status
 * @property string $state
 * @property int $created_at
 * @property int $updated_at
 */
class Ticket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ticket';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tikcet_id','service_no','remark','ticket_status', 'state'], 'required'],
            [['remark'], 'string'],
            [['created_at', 'updated_at'], 'integer'],
            [['tikcet_id', 'service_no', 'segment_group', 'ticket_status', 'state'], 'string', 'max' => 17],
            [['product_name'], 'string', 'max' => 121],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tikcet_id' => Yii::t('app', 'Tikcet ID'),
            'service_no' => Yii::t('app', 'Service Number'),
            'segment_group' => Yii::t('app', 'Segment Group'),
            'product_name' => Yii::t('app', 'Product Name'),
            'remark' => Yii::t('app', 'Remark'),
            'ticket_status' => Yii::t('app', 'Ticket Status'),
            'state' => Yii::t('app', 'State'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return TicketQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TicketQuery(get_called_class());
    }
}
