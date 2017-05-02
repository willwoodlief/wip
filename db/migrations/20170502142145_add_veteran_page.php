<?php

use Phinx\Migration\AbstractMigration;

class AddVeteranPage extends AbstractMigration
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

    protected $pageId = 63;
    protected $statusName = 'In Progress';

    public function up()
    {
        $singleRow =  ['id' => $this->pageId, 'page' => 'pages/veterans.php','private'=>1];
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

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->execute('Delete from permission_page_matches where page_id = ' . $this->pageId);
        $this->execute('Delete from pages where id = ' . $this->pageId);
    }
}
