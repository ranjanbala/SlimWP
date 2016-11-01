# SlimWP
Headless WordPress with Slim for Frontend.

## Folder Structure

####ProjectFolder####
--app                 - Contains Application Specifics
----content           - WP Content Directory
------plugins         - WP Plugins
------themes          - WP Themes
------Uploads         - WP Uploads
--cms                 - Content Management System
----wp                - WP Core
--config              - All application configurations saved in this folder
----env               - Environment Specific Config
--public              - Public folder exposed to the interner
----assets            - All assets of the application
------fonts          -  Fonts used
------images          - Images used in application frontend
------scripts         - js scripts
------styles          - css styles
--vendor              - Third party library. composer generated

## Install

`composer create-project ranjanbala/SlimWP your-project-directory`