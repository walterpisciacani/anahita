To view the detailed commits log go to https://github.com/anahitasocial/anahita/commits/master

Anahita 4.1.4 Birth Release
=============================
* fixed validation of whether an edge had the same node at both ends
* migration script to remove all the edges in the database which had the same node at both ends
* UI refinements
* migration script to change todos_todos table to InnoDB
* added an editable placeholder for the photos which had no title or description 

Anahita 4.1.3 Birth Release
=============================
* major updates to the Subscriptions app. We are now using it ourselves.
* fixed editable bug in Photos app set title and description
* removed access plugin from Subscriptions app
* deleted more Joomla legacy files such as com_cache
* added Pinnable behaviour so the Pages and Topics can use it
* fixed gist JQuery plugin which couldn't parse multiple urls
* fixed favicon overwrite bug


Anahita 4.1.2 Birth Release
=============================
* Upgraded facebook OAth API
* Upgraded linkedIn OAuth API 
* fixed inline edit and cancel issue where nested an-entity layers were being created
* major upgrade of the Subscriptions App. No it isn't ready yet. Wait for the next release.
* discontinued OpenSocial plugin
* apps can now be specific to what type of actors they can be assigned to. Subscriptions app can only be assigned to person actors

Anahita 4.1.1 Birth Release
=============================
* ability to run the entire site with SSL on
* fixed infinit scroll bugs in social graph and other entities
* fixed notification scroll bug
* fixed permalinks in comment stories and notifications
* fixed the default list limit bug in the admin back-end
* lots of development on the Subscriptions app, but sorry it isn't ready for this release yet.
* removed legacy force_ssl and implemented a global isSSL() auto detection method

Anahita 4.1.0 Birth Release
=============================
* all the mootools code has been removed
* the entire javascript library has been rewritten in JQuery
* added covers for the actor profiles and coverable behavior to the librariy which can be used for other types of nodes such as locations.
* improvements to the social graph API
* removed TinyMCE and instead developed a new lightweight html5 editor that is being used in Topics and Pages apps
* drag'n drop multiple file uploader in the Photos app
* improved usability of the user interfaces for mobile users
* added gist content plugin for sharing code snips
* simplified and improved the social graph API
* removed ptag content filter
* all comments do not support html content. They do however use content filters
* users can no longer add a and img tags in posts. 
* added grunt.js file for compressing the js files 

Anahita 4.0.4 Birth Release
============================
* removed routing from component configuration form in the admin back-end. The routing was preventing the form to save on some Nginx servers.

Anahita 4.0.3 Birth Release
============================
* minor but annoying mistake fixed. The error page wasn't loading the correct analytics template causing the error page to break.

Anahita 4.0.2 Birth Release
============================
* removed all JRoute::_ instances for the urls in the admin backend. We did that becuase some Nginx servers had problem routing the urls properly and were landing on 404 pages instead.
* analytics code is now a layout template inside the templates/base/html/tmpl and it can be customized within your tempalte.
* minor UI fixes

Anahita 4.0.1 Birth Release
============================
* version number is updated
* the broken layout of Page read view is fixed
* added permission method to make sure that only those with the edit access can set the privacy of a medium node.

Anahita 4.0.0 Birth Release
============================
* #hashtags implemented
* @mentions implemented
* com_tags implemented as the base component for different types of tagging
* Social graph in com_people refactored
* group admins or followers can now add additional followers to the group
* legacy com_menus has been removed
* com_search layout improved. Results are now loaded as infinit scroll
* menus are now hardcoded layouts in templates/base/html/menus
* viewer menu is now generated dynamically
* legacy com_modules has been removed
* removed all module positions from the Shiraz template
* no more support for <module> tags in the layouts. We are using generic Bootstrap grids from now on 
* removed milestones MVC from the Todos app
* refinements to the wysiwyg editor
* improvements to the Pages app
* general performance improvements
* a lot of legacy Joomla files and components are removed

Anahita 3.0.4
==============

* ed4f06f video links with both http and https are now being parsed
* ffa0586 A valid username starts with a letter and it may contain numbers

Anahita 3.0.3
==============

* d0c8fed added the publish template method back so admins can publish their own custom templates.
* 6bf4f87 Strict standard warning fixed.
* 9e92ddf removed the editor until we completely remove this legacy component in the next release.
* b17490f by default set the assignment to always
* 8cdf6f7 Strict standard warning fixed
* c9c4a71 Update avatar_edit.php
* 3935031 adds site:symlink command to console
* d013438 commented out line for @flash_message added back

Anahita 3.0.2
==============

* cd92071 - added authentication to the auto login just in case if a bad cookie was handed in
* 902ad4d - Legacy joomla cleanup
* 197cf57 - Uses authentication and the remember me has been re-implemented
* feb2e93 - added login and logout functions
* edf907f - legacy joomla classes removed
* 733fc1f - The generated session for remember me was too long. It has been shortened quite a bit.
* 9e2e139 - Updated homepage description
* 78de1c2 - Added the fix suggested by @kulbakin that removes the index.php from the urls even when logging in and out.
* 53981e6 - improved the search query
* f90451c - the text highlight now has an additional variable to set the minimum length of a string that needs to be highlighted. By the default the value is 3 or more
* ac3a9cb - new migration makes the fields `email` and `username` unique in the #__users table.
* df44482 - fixed strict standard warnings
* 78095cc - entity title now wraps properly
* 61a9f3e - Fixed the issue with excessive br tags in the visual editor. It is a hack until we replace the editor with something better. Such as Markdown.
* 6e3ee50 - Made the description a bit more clear
* 270e89f - prompt messages show after the successful submission
* 3e97928 - alert colour is changed to success from the default blue.
* dbe8c9e - if response is not null and if it is successful
* 10af5a5 - invitation send prompt shows after a successful response
* f08b2e5 - Improved the authentication workflow in the Connect app. Although there is still room for improvement.
* 1710918 - fixed the bug in LinkedIn share feature
* 0a1febd - verifiable ssl must be off by default
* 9d9975f - all video links must use https.
* d1f85ea - added the AnFilterTerm class
* 8af510b - Fixed strict standard warning
* e9d949b - q request is now being sanitized
* 8feae12 - Fixed strict warning
* 48598cc - Search box utilizes the custom filter in com_search now
* 8bf2279 - added custom filters to session and search controllers
* f3ce28a - Fixed strict warning
* 807a091 - Added custom filters for search terms and session return values
* 8fdcd10 - new site.js has been compressed
* ad94d19 - Legacy and discontinued Anahita apps are removed.
* 1773531 - Fixed more strict standard warnings and errors
* c1379e9 - sanitize the session return value to prevent xss injection
* b787a11 - Fixing a whole bunch of strict standard warnings and errors
* b31cd83 - sessions wasn't being assigned to the view. Also fixed the invites.
* 0015caa - Added new methods to get facebook app id and friends
* 4690e60 - added data-request-redirect="true"
* e23a5f4 - There was an unnecessary repeated line of code. It i s removed.
* 6bec455 - Removed the scroll attribute
* fb94f27 - Action is now being called correctly
* e2192f1 - using secure connections to connect to twitter
* 315dbff - using secure connections to the services
* 0075750 - consider_html=true added to the truncate call
* 717d11f - The notification button no longer shows if the viewer isn't following a profile
* 41cf798 - removed legacy parameters
* 47f3f94 - User types are no longer hard coded to Registered upon registration and follow the setting in the global config file.
* 88fe2a0 - Fixed the permissions for actor creation as well as the available options for group creation permissions.
* 50f84da - statusUpdateTime misspelling is corrected
* 9c0040d - Fixed the bug that showed a 404 page to the blocked user rather than a permission denied message.
* 4097441 - Fixed the spelling of "matched"
* 7f98819 - added the item layout
* 26c3d64 - Checks to see if the response body is set, then concatenates it.
* 6c2a17d - Not sure why that variable was being used. Removed it.
* c7d3838 - legacy feature. Removed logo upload feature.
* b8b96ce - A list of strict standard issues are resolved. Had to modify the ordering methods to become more consistent with the Nooku method calls. The com_components lis
* 43630d4 - A list of strict standard warning issues are resolved. Mainly static method calls.
* bf7999b - Subtracted the Strict standard warnings from all the warnings.

Anahita 3.0.0
==============
* Removed the com_content, com_section, com_categories. If you have existing aricles you can migrate them into
html and use it within the com_html. Read https://github.com/anahitasocial/article-exporter/blob/master/README.md
After updating you need to resymlink the site using the command `php anahita site:init -n`
* Removed  back-end components: com_checking,com_admin and unused libraires (SimplePIE, DOMit, Geshi). Editors 
plugins, search and content plugins
If you are using these libriares in your apps then use the composer to install them  
* Moved the HTML component to the core that way the basic installation anahita can use the HTML component
for building landing pages. After updating you need to resymlink the site using the command `php anahita site:init -n`
* Prevent having dot in username. A migration has been added to remove all the dots in the username. A username
can only contain ^[A-Za-z0-9][A-Za-z0-9_-]*$. The migration will replace all the . with the work dot. If you want a different
strategy you need to rewrite this migration and add your own policy
* Removed Joomla Installer 
* Fixed a installation issue in the data.sql. Renamed all instances of com_posts in the 41 component record
to com_notes. Didn't write a migration for it since it was alreay in the migration 1  