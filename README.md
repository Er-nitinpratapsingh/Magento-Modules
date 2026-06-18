# Magento 2 Module Installation

1. Download the module repository as a **ZIP** file from GitHub.
2. Extract the ZIP file.
3. Copy the module folder to:

```text
app/code/Vendor/ModuleName
```

4. Run the following commands:

```bash
composer install 
php bin/magento module:enable Vendor_ModuleName
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento indexer:reindex
php bin/magento cache:flush
```
