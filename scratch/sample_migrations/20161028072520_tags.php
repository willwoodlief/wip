<?php

use Phinx\Migration\AbstractMigration;

/**
 * Change Method.
 *
 * Write your reversible migrations using this method.
 *
 * More information on writing migrations is available here:
 * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
 *
 * The following commands can be used in this method and Phinx will
 * automatically reverse them when rolling back:
 *
 *    createTable
 *    renameTable
 *    addColumn
 *    renameColumn
 *    addIndex
 *    addForeignKey
 *
 * Remember to call "create()" or "update()" and NOT "save()" when working
 * with the Table class.
 */

class Tags extends AbstractMigration
{

    public function change()
    {
        $files = $this->table('ht_tags');
        $files->addColumn('tag_name', 'string', array('limit' => 255,'null'=>false))
            ->addColumn('tag_notes', 'text', array('null'=>true,'default'=>null))
            ->addColumn('created_at_ts', 'integer', array('null'=>false))
            ->addIndex(array('tag_name'), array('unique' => true))
            ->create();

        $files = $this->table('ht_tag_job');
        $files->addColumn('ht_tag_id', 'integer', array('null'=>false))
            ->addColumn('ht_job_id', 'integer', array('null'=>false))
            ->addColumn('tag_value', 'text', array('null'=>true,'default'=>null))
            ->addIndex(array('ht_tag_id'), array('unique' => false))
            ->addIndex(array('ht_job_id'), array('unique' => false))
            ->addIndex(array('ht_tag_id', 'ht_job_id'), array('unique' => true))
            ->addForeignKey('ht_tag_id', 'ht_tags', 'id', array('delete'=> 'RESTRICT', 'update'=> 'CASCADE'))
            ->addForeignKey('ht_job_id', 'ht_jobs', 'id', array('delete'=> 'RESTRICT', 'update'=> 'CASCADE'))
            ->create();

        $table = $this->table('ht_jobs');
        $table->addColumn('notes', 'text', array('default'=>null,'null' => true))
            ->update();

        $table = $this->table('ht_waiting');
        $table->addColumn('notes', 'text', array('default'=>null,'null' => true))
            ->addColumn('tags_json', 'text', array('default'=>null,'null' => true))
            ->update();
    }
}
