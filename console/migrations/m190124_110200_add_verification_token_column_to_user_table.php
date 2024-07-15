<?php

use \yii\db\Migration;

class m190124_110200_add_verification_token_column_to_user_table extends Migration
{
    public function up()
    {
        $this->addColumn('{{%user}}', 'is_admin', $this->boolean()->defaultValue(false)->after('id'));
    }

    public function down()
    {
        $this->dropColumn('{{%user}}', 'verification_token');
    }
}
