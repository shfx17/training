<?php

use yii\db\Migration;

/**
 * Class m220124_122353_first_migration
 */
class m220124_122353_first_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
           'id' => $this->primaryKey(),
           'nick' => $this->string(55)->notNull(),
            'password' => $this->string(255)->notNull(),
            'auth_key' => $this->string(255)->notNull(),
            'access_token' => $this->string(255)->notNull()
        ]);

        $this->createTable('article', [
           'id' => $this->primaryKey(),
            'title' => $this->string(1024)->notNull(),
            'slug' => $this->string(1024)->notNull(),
            'body' => $this->text()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
            'created_by' => $this->integer()->notNull()
        ]);

        $this->addForeignKey('article_user_created_by_fk', 'article', 'created_by', 'user', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('article_user_created_by_fk', 'article');
        $this->dropTable('user');
        $this->dropTable('article');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220124_122353_first_migration cannot be reverted.\n";

        return false;
    }
    */
}
