<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m210117_102129_sellers
 */
class m210117_102129_sellers extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sellers', [
            'name' => 'VARCHAR(100)' . ' NOT NULL',
            'email'=> Schema::TYPE_STRING . ' NOT NULL',
            'address'=> Schema::TYPE_STRING . ' NOT NULL',
            'phonenumber'=> Schema::TYPE_STRING . ' NOT NULL',
            'authorname' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->addPrimaryKey('seller_pk','sellers','name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('seller_pk', 'sellers');
        $this->dropTable('sellers');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210117_102129_sellers cannot be reverted.\n";

        return false;
    }
    */
}
