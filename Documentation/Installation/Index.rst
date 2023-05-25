..  include:: /Includes.rst.txt


..  _installation:

============
Installation
============

Composer
========

If your TYPO3 installation works in composer mode, please execute
following command:

..  code-block:: bash

    composer req jweiland/powermail2salesforce
    vendor/bin/typo3 extension:setup --extension=powermail2salesforce

If you work with DDEV please execute this command:

..  code-block:: bash

    ddev composer req jweiland/powermail2salesforce
    ddev exec vendor/bin/typo3 extension:setup --extension=powermail2salesforce

ExtensionManager
================

On non composer based TYPO3 installations you can
install `powermail2salesforce` still over the ExtensionManager:

..  rst-class:: bignums

1.  Login

    Login to backend of your TYPO3 installation as an administrator
    or system maintainer.

2.  Open ExtensionManager

    Click on `Extensions` from the left menu to open the ExtensionManager.

3.  Update Extensions

    Choose `Get Extensions` from the upper selectbox and click on
    the `Update now` button at the upper right.

4.  Install `powermail2salesforce`

    Use the search field to find `powermail2salesforce`. Choose
    the `powermail2salesforce` line from the search result and click on
    the cloud icon to install `powermail2salesforce`.

Next step
=========

:ref:`Configure powermail2salesforce <configuration>`.
