<?php

use yii\db\Migration;

/**
 * Class m191212_112435_user_add_is_admin
 */
class m191212_112435_user_add_is_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->addColumn('user', 'is_admin', $this->boolean()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'is_admin');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191212_112435_user_add_is_admin cannot be reverted.\n";

        return false;
    }
    */
}
