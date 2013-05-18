README
======

OAuth2 Redirection Login Treatment is a plugin designed for Joomla CMS 3.1 that will handle the redirection of the [OAuth2
client](https://github.com/joomla/joomla-cms/tree/master/libraries/joomla/oauth2) of the Joomla Library.

**Functionality**

The plugin will be triggered at "OnAfterInitiallise" event of Joomla CMS, checking if a code has been received in the URL.
If there is a code, it will call the login method of the app. Be sure to have an authentication plugin activated 
that is able to handle the OAuth2 authentication, like the [facebook authentication plugin](#).

**OAuth2 Redirection Login Treatment 0.0.1**

- Call the login method of the app when a code is received in the URL.
- The login method will be called only at the frontend.