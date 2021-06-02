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

To detach this extension from it's original repo:

```batch
git rm --cached packages/customer_sitepackage
rm -rf customer_sitepackage/.git
rm -rf customer_sitepackage/.github
rm -rf .git/modules/packages/customer_sitepackage (if you have installed it as submodule)
```

After you have detached it from the original repo, you can make your own repo out of it, with your own changes.

## Dependency

- [bk2k/bootstrap-package](https://extensions.typo3.org/extension/bootstrap_package): ^11
- [skom/skom-sitepackage](https://github.com/Starraider/skom_sitepackage): ^9.2.13

---

Developed 2020 by Sven Kalbhenn

If you have any questions about this project or just want to talk:
Send me a message [sven@skom.de](mailto:sven@skom.de)
