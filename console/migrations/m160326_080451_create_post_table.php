<?php
use yii\db\Schema;
use yii\db\Migration;
class m160326_080451_create_post_table extends Migration {
public function up(){
$tableOptions = null;
if ($this->db->driverName === 'mysql') {
$tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci
ENGINE=InnoDB';
}
$this->createTable('{{%post}}', [
'id' => Schema::TYPE_PK,
'title' => Schema::TYPE_STRING.' NOT NULL DEFAULT ""',
'content' => Schema::TYPE_TEXT.' NOT NULL',
], $tableOptions);
}
public function down(){
$this->dropTable('{{%post}}');
//echo "m160131_082019_create_post_table cannot be reverted.\n";
//return false;
}
}