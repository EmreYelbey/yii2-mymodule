<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210117_102157_products
 */
class m210117_102157_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('products', [
            'name' => 'VARCHAR(100)' . ' NOT NULL',
        ]);

        $this->addPrimaryKey('product_pk','products','name');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropPrimaryKey('product_pk', 'products');
        $this->dropTable('products');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210117_102157_products cannot be reverted.\n";

        return false;
    }
    */
}
