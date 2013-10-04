This is a complete Drupal installation for the 2013 Pearson Coding Contest.

The pearson_mp module can be added to a university Drupal site, enabled, and bring in Pearson information.
The entire Drupal install exists here because it is deployed to a Windows Azure site, but the vast majority of the work will be in the module, located in:
sites/all/modules/pearson_mp

There are a few main things added in here.

The main one is the "pearson_mp" custom Drupal module.
This uses cURL to make OAuth1 and OAuth2 requests to the Pearson LearningStudio WSOD. (Web Services on Demand)

The module installs roles, content types (also called bundles), and rules.

Two libraries are added to this repository:
Twilio (for SMS text messaging)
CryptLib (for OAuth)

Aloha