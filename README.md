# Magento 2 Module Installation

## Option 1: Git Deployment

```bash
git pull origin <branch-name>
composer install
php bin/magento module:enable Vendor_ModuleName
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento indexer:reindex
php bin/magento cache:flush
```

## Option 2: Manual Installation

1. Copy module to:

```text
app/code/Vendor/ModuleName
```

2. Run:

```bash
composer install
php bin/magento module:enable Vendor_ModuleName
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy -f
php bin/magento indexer:reindex
php bin/magento cache:flush
```
