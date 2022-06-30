<?php
namespace App\Database\Migrations;
class Tips extends \CodeIgniter\Database\Migration
{


public function up()
{
$this->forge->addField([
'id' => [
'type' => 'INT',
'constraint' => 11,
'unsigned' => TRUE,
'auto_increment' => TRUE,
],
'judul' => [
'type' => 'VARCHAR',
'constraint' => 100,
],
'link' => [
'type' => 'TEXT'
],

'role' => [
'type' => 'INT',
'constraint' => 1,
'default' => 1,
],
'created_by' => [
'type' => 'INT',
'constraint' => 11,
],
'created_date' => [
'type' => 'DATETIME',

],
'updated_by' => [
'type' => 'INT',
'constraint' => 11,
'null' => TRUE,
],
'updated_date' => [
'type' => 'DATETIME',
'null' => TRUE,
]
]);
$this->forge->addKey('id', TRUE);
$this->forge->createTable('tips');
}
public function down()
{
$this->forge->dropTable('tips');
}
}