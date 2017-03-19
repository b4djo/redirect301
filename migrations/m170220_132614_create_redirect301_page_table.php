<?php

use yii\db\Migration;

/**
 * Handles the creation of table `redirect301_page`.
 */
class m170220_132614_create_redirect301_page_table extends Migration {
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('redirect301_page', [
            'id'         => $this->primaryKey(),
            'source_url' => $this->text()->notNull(),
            'target_url' => $this->text()->notNull(),
        ]);
    }
    
    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('redirect301_page');
    }
}