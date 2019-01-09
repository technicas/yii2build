<?php

use yii\db\Migration;

/**
 * Class m190109_093905_change_user_table
 */
class m190109_093905_change_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('user', 'role_id', $this->smallInteger(6)->defaultValue(10));
        $this->addColumn('user', 'user_type_id', $this->smallInteger()->defaultValue(10));
        $this->renameColumn('user', 'status', 'status_id');
        $this->alterColumn('user', 'status_id', $this->smallInteger(6)->defaultValue(10));
        $this->alterColumn('user', 'created_at', $this->dateTime());
        $this->alterColumn('user', 'updated_at', $this->dateTime());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('user', 'role_id');
        $this->dropColumn('user', 'user_type_id');
        $this->renameColumn('user', 'status_id', 'status');
        $this->alterColumn('user', 'status', $this->integer());
        $this->alterColumn('user', 'created_at', $this->integer());
        $this->alterColumn('user', 'updated_at', $this->integer());
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190109_093905_change_user_table cannot be reverted.\n";

        return false;
    }
    */
}
