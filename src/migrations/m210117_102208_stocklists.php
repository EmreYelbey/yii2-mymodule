<?php

use yii\db\Migration;
use yii\db\Schema;
/**
 * Class m210117_102208_stocklists
 */
class m210117_102208_stocklists extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('stocklists', [
            'id' => Schema::TYPE_PK,
            'sellername' => 'VARCHAR(100)' . ' NOT NULL',
            'productsname' => 'VARCHAR(100)' . ' NOT NULL',
        ]);

        $this->addForeignKey(
            'sellername_fk',
            'stocklists',
            'sellername',
            'sellers',
            'name',
            'CASCADE'
        );
        $this->addForeignKey(
            'productsname_fk',
            'stocklists',
            'productsname',
            'products',
            'name',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('sellername_fk', 'stocklists');
        $this->dropForeignKey('productsname_fk', 'stocklists');

        $this->dropPrimaryKey('stocklists_pk', 'stocklists');
        $this->dropTable('stocklists');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210117_102208_stocklists cannot be reverted.\n";

        return false;
    }
    */
}
