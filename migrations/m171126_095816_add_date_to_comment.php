<?php

use yii\db\Migration;

/**
 * Class m171126_095816_add_date_to_comment
 */
class m171126_095816_add_date_to_comment extends Migration
{
    /**
     * @inheritdoc
     */


    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }
    public function down()
    {
        $this->dropColumn('comment','date');
    }
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    public function safeDown()
    {
    }
    */
}
