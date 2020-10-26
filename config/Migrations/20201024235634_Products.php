<?php
use Migrations\AbstractMigration;

class Products extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'text',[
            'default'=> null,
            'null' => false,
            'limit' => 50,
        ]);

        $table->addColumn('units', 'string',[
            'default'=> null,
            'null' => false,
            
        ]);

        $table->addColumn('quantity', 'float',[
            'default'=> null,
            'null' => false,
            
        ]);

        $table->addColumn('price', 'float',[
            'default'=> null,
            'null' => false,
            
        ]);

        $table->addColumn('expiration_date', 'date',[
            'default'=> null,
            'null' => true,
            
        ]);

        $table->addColumn('Date_manufacturing', 'date',[
            'default'=> null,
            'null' => true,
            
        ]);

        $table->addTimestamps('created', 'modified');

        $table->create();
        
    }
}
