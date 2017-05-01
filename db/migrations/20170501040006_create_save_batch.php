<?php

use Phinx\Migration\AbstractMigration;

class CreateSaveBatch extends AbstractMigration
{
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
    public function change()
    {
        $files = $this->table('note_batches');
        $files->addColumn('user_id', 'integer', array('null'=>false))
            ->addColumn('when_uploaded', 'datetime', array('null'=>false))
            ->addColumn('page_name', 'string', array('limit' => 100,'null'=>false))
            ->addIndex(array('user_id'), array('unique' => false))
            ->addIndex(array('when_uploaded'), array('unique' => false))
            ->addIndex(array('page_name'), array('unique' => false))
            ->addForeignKey('user_id', 'users', 'id', array('delete'=> 'RESTRICT', 'update'=> 'CASCADE'))
            ->create();

        $files = $this->table('notes');
        $files->addColumn('note_batch_id', 'integer', array('null'=>false))
            ->addColumn('full_note_id', 'string', array('limit' => 120,'null'=>false))
            ->addColumn('note', 'text', array('null'=>false))
            ->addIndex(array('note_batch_id'), array('unique' => false))
            ->addIndex(array('full_note_id'), array('unique' => false))
            ->addForeignKey('note_batch_id', 'note_batches', 'id', array('delete'=> 'RESTRICT', 'update'=> 'CASCADE'))
            ->create();

    }
}
