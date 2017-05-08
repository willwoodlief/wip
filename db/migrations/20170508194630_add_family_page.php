<?php

use Phinx\Migration\AbstractMigration;

class AddFamilyPage extends AbstractMigration
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
    protected $pageId = 64;
    protected $statusName = 'In Progress';

    public function change()
    {
        $singleRow =  ['id' => $this->pageId, 'page' => 'pages/join_our_family.php','private'=>1];
        $table = $this->table('pages');
        $table->insert($singleRow);
        $table->saveData();


        $singleRow = ['page_id' => $this->pageId, 'permission_id' => 2]; //admin

        $table = $this->table('permission_page_matches');
        $table->insert($singleRow);


        $singleRow = ['page_id' => $this->pageId, 'permission_id' => 1]; //user

        $table = $this->table('permission_page_matches');
        $table->insert($singleRow);

        $table->saveData();

    }
}
