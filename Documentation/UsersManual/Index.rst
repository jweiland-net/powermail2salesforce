..  include:: /Includes.rst.txt


.. _users-manual:

============
Users manual
============

Usage
=====

Create a new field for your form. Set the marker equal to the equivalent
salesforce field.

..  figure:: /Images/AdministratorManual/CustomMarker.png
    :width: 500px
    :alt: Set custom marker

..  note::

    Because salesforce uses case-sensitive Variables, powermails
    lower-case conversion is deactivated by default.

..  warning::

    Please check existing forms for marker names. This extension removes the
    limitation of lowercase markers that are set by powermail. Make sure to
    check your markers after activating/reactivating this extension. If your
    used API is case-sensitive some markers would not be interpreted by your
    API because of this.
