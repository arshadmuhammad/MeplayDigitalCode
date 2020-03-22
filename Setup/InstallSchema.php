<?php
/**
 * Created by PhpStorm.
 * User: amuh
 * Date: 3/21/2020
 * Time: 10:32 PM
 */

namespace MagArs\DigitalCodes\Setup;


use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface {

    public function install(
        SchemaSetupInterface $setup,
        ModuleContextInterface $context
    ) {

        $installer = $setup;
        $installer->startSetup();

        $table = $installer->getConnection()->newTable($installer->getTable('digital_codes'))
            ->addColumn(
                'pin_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'PIN ID'
            )->addColumn(
                'pin',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                100,
                ['unsigned' => true, 'nullable' => false],
                'PIN Value'
            )->addColumn(
                'serial_no',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '100',
                ['unsigned' => true, 'nullable' => false],
                'Serial NO'
            )->addColumn(
                'sku',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                50,
                ['unsigned' => true, 'nullable', false],
                'SKU'
            )->addColumn(
                'is_order',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                1,
                ['unsigned' => true, 'nullable', false],
                'IS Order'
            )->addColumn(
                'incremental_order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                50,
                ['unsigned' => true, 'nullable', false],
                'Sales Order ID'
            )->addColumn(
                'product_name',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                100,
                ['unsigned' => true, 'nullable', false],
                'Product Name'
            );
        $installer->getConnection()->createTable($table);

        $table = $installer->getConnection()->newTable($installer->getTable('product_codes'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'ID'
            )->addColumn(
                'product_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false],
                'Customer ID'
            )->addColumn(
                'code_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                '30',
                ['unsigned' => true, 'nullable' => false],
                'Code ID'
            )->addColumn(
                'position',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable', false],
                'Position'
            );
        $installer->getConnection()->createTable($table);

        $table = $installer->getConnection()->newTable($installer->getTable('product_codes_order'))
            ->addColumn(
                'order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Digital PIN Order ID'
            )->addColumn(
                'customer_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false],
                'Customer ID'
            )->addColumn(
                'customer_email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '30',
                ['unsigned' => true, 'nullable' => false],
                'Customer Email'
            )->addColumn(
                'path',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                null,
                ['unsigned' => true, 'nullable', false],
                'PDF Path'
            )->addColumn(
                'internal_order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '20',
                ['unsigned' => true, 'nullable', false],
                'Internal Order ID'
            )->addColumn(
                'internal_sales_order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable', false],
                'Internal Sales Order ID'
            );
        $installer->getConnection()->createTable($table);

        $table = $installer->getConnection()->newTable($installer->getTable('product_codes_order_item'))
            ->addColumn(
                'id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Digital PIN ID'
            )->addColumn(
                'digital_order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false],
                'PIN Order ID'
            )->addColumn(
                'ordered_item_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable', false],
                'Ordered Item ID'
            )->addColumn(
                'serial_no',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '100',
                ['unsigned' => true, 'nullable' => false],
                'Serial No'
            )->addColumn(
                'pin',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '50',
                ['unsigned' => true, 'nullable', false],
                'PIN Key'
            );
        $installer->getConnection()->createTable($table);

        $table = $installer->getConnection()->newTable($installer->getTable('product_codes_order_reference'))
            ->addColumn(
                'order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['identity' => true, 'nullable' => false, 'primary' => true],
                'Digital PIN Order ID'
            )->addColumn(
                'customer_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable' => false],
                'Customer ID'
            )->addColumn(
                'customer_email',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '30',
                ['unsigned' => true, 'nullable' => false],
                'Customer Email'
            )->addColumn(
                'internal_order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                '20',
                ['unsigned' => true, 'nullable', false],
                'Internal Order ID'
            )->addColumn(
                'internal_sales_order_id',
                \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                null,
                ['unsigned' => true, 'nullable', false],
                'Internal Sales Order ID'
            )->addColumn(
                'status',
                \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                50,
                ['unsigned' => true, 'nullable', false],
                'Status'
            )->addColumn(
                'create_at',
                \Magento\Framework\DB\Ddl\Table::TYPE_DATETIME,
                null,
                ['unsigned' => true, 'nullable', false],
                'Created At'
            );
        $installer->getConnection()->createTable($table);

        $installer->endSetup();

    }
}
