# Magento 2 Module Installation Steps

# Method 1: Using Git Pull

## Step 1: Pull Latest Code

```bash
git pull origin <branch-name>
```

---

## Step 2: Install Composer Dependencies

```bash
composer install
```

---

## Step 3: Enable Module

```bash
php bin/magento module:enable Vendor_ModuleName
```

---

## Step 4: Run Setup Upgrade

```bash
php bin/magento setup:upgrade
```

---

## Step 5: Compile Dependency Injection

```bash
php bin/magento setup:di:compile
```

---

## Step 6: Deploy Static Content

```bash
php bin/magento setup:static-content:deploy -f
```

---

## Step 7: Reindex

```bash
php bin/magento indexer:reindex
```

---

## Step 8: Flush Cache

```bash
php bin/magento cache:flush
```

---

# Method 2: Manual Module Installation

## Step 1: Copy Module

Copy module to:

```text
app/code/Vendor/ModuleName
```

---

## Step 2: Install Composer Dependencies

```bash
composer install
```

---

## Step 3: Enable Module

```bash
php bin/magento module:enable Vendor_ModuleName
```

---

## Step 4: Run Setup Upgrade

```bash
php bin/magento setup:upgrade
```

---

## Step 5: Compile Dependency Injection

```bash
php bin/magento setup:di:compile
```

---

## Step 6: Deploy Static Content

```bash
php bin/magento setup:static-content:deploy -f
```

---

## Step 7: Reindex

```bash
php bin/magento indexer:reindex
```

---

## Step 8: Flush Cache

```bash
php bin/magento cache:flush
```
