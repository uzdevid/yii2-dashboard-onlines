<?php

namespace uzdevid\dashboard\onlines\widgets\Onlines;

use uzdevid\dashboard\models\User;
use yii\base\Widget;
use yii\helpers\ArrayHelper;

class Onlines extends Widget {
    /**
     * @return string|void
     */
    public function run(): string {
        $user = Yii::$app->user->identity;

        $online_users = User::find()->where(['>', 'last_activity_time', time() - 60 * 2])->orderBy(['last_activity_time' => SORT_DESC])->all();
        $users = User::find()->where(['not in', 'id', ArrayHelper::map($online_users, 'id', 'id')])->orderBy(['last_activity_time' => SORT_DESC])->all();

        return $this->render('index', compact('user', 'online_users', 'users'));
    }
}