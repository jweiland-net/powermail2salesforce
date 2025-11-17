# TYPO3 Extension `powermail2salesforce`

[![CI](https://github.com/jweiland-net/powermail2salesforce/actions/workflows/ci.yml/badge.svg)](https://github.com/jweiland-net/powermail2salesforce/actions/workflows/ci.yml)

`powermail2salesforce` is an extension for TYPO3 CMS. It contains a finisher
class for powermail to send data of a form to salesforce Web-to-Case endpoint.

It does not use the Salesforce `/services/data/` API but sends the data
form-encoded to a Web-to-Case HTTP form endpoint.

## 1 Features

* Send data of a powermail form to salesforce Web-to-Case endpoint.

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using Composer.

Run the following command within your Composer based TYPO3 project:

```
composer require jweiland/powermail-salesforce
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install `powermail2salesforce` with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension.
2) Set TypoScript constants.
3) Configure powermail form as described in our documentation.

## Note

Please check existing forms for marker names. This extension removes the
limitation of lowercase markers that are set by powermail. Make sure to check
your markers after activating/reactivating this extension.

If your used API is case-sensitive some markers would not be interpreted by
your API because of this.

## Support

Free Support is available via [Github Issue Tracker](https://github.com/jweiland-net/powermail2salesforce/issues).

For commercial support, please contact us at [support@jweiland.net](support@jweiland.net).
