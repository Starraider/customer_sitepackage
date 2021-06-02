# customer_sitepackage

[![Donate](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://PayPal.me/SvenKalbhenn)
![GitHub](https://img.shields.io/github/license/Starraider/customer_sitepackage)
[![CodeFactor](https://www.codefactor.io/repository/github/starraider/customer_sitepackage/badge)](https://www.codefactor.io/repository/github/starraider/customer_sitepackage)
![GitHub issues](https://img.shields.io/github/issues/Starraider/customer_sitepackage)
![Lint Code Base](https://github.com/Starraider/customer_sitepackage/workflows/Lint%20Code%20Base/badge.svg)
![CodeQL](https://github.com/Starraider/customer_sitepackage/workflows/CodeQL/badge.svg)
![Check Commit](https://github.com/Starraider/customer_sitepackage/workflows/Check%20Commit/badge.svg)

Customer TYPO3-Sitepackage Template for SKom Projects.

Every new Project is build upon a stack of 3 TYPO3 extensions:

1. bootstrap_package as the basic
2. skom_sitepackage optimizes the setup and adds new features
3. customer_sitepackage hosts the configuration for each individual project

## Basic concept

This extensions is a kickstart sitepackage, which you can use to configure your own TYPO3 project (based on bootstrap_package).
Use this extension to apply your own changes, like colors, fonts, logos etc.

To do this, you should detache this exentsion from it's original git repository after you have installed it in your
project, because you don't want your own changes be overwriten by updating the git repo.

After you have detached it from the original repo, you can make your own git repo out of it, with your own changes.

## Installation

### Method 1: Cloning from github into packages folder (recommended)

Because you will make your own changes to this sitepackage, it's recommended to install it in your packages folder.

#### 1. Clone it from repo

```batch
mkdir packages (if not already exists)
cd packages
git clone https://github.com/Starraider/customer_sitepackage.git . [1]
```

[1]: If you get an error msg on MacOS, saying your folder is not empty: rm .DS_Store

#### 2. Add it to the composer.json of your project

```json
{
    "repositories": [
        {
            "type": "path",
            "url": "packages/*"
        },
    ],
    "require": {
        "skom/customer-sitepackage": "@dev"
    },
}
```

#### 3. Run composer update

The customer_sitepackage will autmaticly be symlinked into the typo3conf/ext/ folder.

#### 4. Include Static Template

#### 5. Detach this extension from it's original repo

```batch
git rm --cached packages/customer_sitepackage
rm -rf packages/customer_sitepackage/.git
rm -rf packages/customer_sitepackage/.github
```

#### 6. Make your own changes to the customer_sitepackage

### Method 2: Installation via composer

#### 1. composer require

```batch
composer req skom/customer-sitepackage
```

#### 2. Include Static Template

#### 3. Detach this extension from it's original repo

```batch
git rm --cached typo3conf/ext/customer_sitepackage
rm -rf typo3conf/ext/customer_sitepackage/.git
rm -rf typo3conf/ext/customer_sitepackage/.github
```

#### 4. Make your own changes to the customer_sitepackage

### Method 3: Installation via TER

#### 1. Install from TER

Go to the TYPO3 Extension-Manager and search for customer_sitepackage.
Klick install.

#### 2. Include Static Template

#### 3. Detach this extension from it's original repo

```batch
git rm --cached typo3conf/ext/customer_sitepackage
rm -rf typo3conf/ext/customer_sitepackage/.git
rm -rf typo3conf/ext/customer_sitepackage/.github
```

#### 4. Make your own changes to the customer_sitepackage

## Dependency

- [bk2k/bootstrap-package](https://extensions.typo3.org/extension/bootstrap_package): ^11
- [skom/skom-sitepackage](https://github.com/Starraider/skom_sitepackage): ^9.2.13

---

Developed 2020 by Sven Kalbhenn

If you have any questions about this project or just want to talk:
Send me a message [sven@skom.de](mailto:sven@skom.de)
