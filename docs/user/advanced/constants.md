# BuddyPress Constants

### User-Definable
These constants are avaiable to alter the behavior or where and how parts of BuddyPress are loaded. 

| Constant                              | Default Value | Description |
| :------------------------------------ | :------------ | :----------- |
| BP_AVATAR_DEFAULT                     |               |             |
| BP_AVATAR_DEFAULT_THUMB               |               |             |
| BP_AVATAR_FULL_HEIGHT                 |               |             |
| BP_AVATAR_FULL_WIDTH                  |               |             |
| BP_AVATAR_ORIGINAL_MAX_FILESIZE       |               |             |
| BP_AVATAR_ORIGINAL_MAX_WIDTH          |               |             |
| BP_AVATAR_THUMB_HEIGHT                |               |             |
| BP_AVATAR_THUMB_WIDTH                 |               |             |
| BP_AVATAR_UPLOAD_PATH                 |               |             |
| BP_AVATAR_URL                         |               |             |
| BP_DEFAULT_COMPONENT                  |               |             |
| BP_DISABLE_AUTO_GROUP_JOIN            |               |             |
| BP_EMBED_DISABLE_ACTIVITY             |               |             |
| BP_EMBED_DISABLE_ACTIVITY_REPLIES     |               |             |
| BP_EMBED_DISABLE_PRIVATE_MESSAGES     |               |             |
| BP_ENABLE_MULTIBLOG                   |               |             |
| BP_ENABLE_ROOT_PROFILES               |               |             |
| BP_ENABLE_USERNAME_COMPATIBILITY_MODE |               |             |
| BP_FORUMS_PARENT_FORUM_ID             |               |             |
| BP_FORUMS_SLUG                        |               |             |
| BP_GROUPS_DEFAULT_EXTENSION           |               |             |
| BP_IGNORE_DEPRECATED                  |               |             |
| BP_LOAD_DEPRECATED                    |               |             |
| BP_MEMBERS_REQUIRED_PASSWORD_STRENGTH |               |             |
| BP_MESSAGES_AUTOCOMPLETE_ALL          |               |             |
| BP_PLUGIN_DIR                         |               |             |
| BP_PLUGIN_URL                         |               |             |
| BP_ROOT_BLOG                          |               |             |
| BP_SEARCH_SLUG                        |               |             |
| BP_SHOW_AVATARS                       |               |             |

### Core or Development
> [!CAUTION]
> These Constants are either predefined by the BuddyPress core or for use in a developent environment and are not classified as user-definable.

| Constant                        | Default Value | Description |
| :------------------------------ | :--------- | :---------- |
| BP_DB_VERSION                   |The installed database version of BuddyPress.| Unique database version identifier for each major release (see [Releases](https://codex.buddypress.org/releases/)).
| BP_LOAD_SOURCE                  |               |             |
| BP_REQUIRED_PHP_VERSION         |The minimum supported PHP version.|The minimum supported PHP version as determined by the [BuddyPress PHP Version Support](../../user/getting-started/php-version-support.md) policy, i.e., **Minimum PHP Version**.              |
| BP_SOURCE_SUBDIRECTORY          |               |             |
| BP_TESTS_DIR                    |               |             |
| BP_VERSION                      |The installed version of BuddyPress. |Unique version identifier for each major/minor/patch release (see [Releases](https://codex.buddypress.org/releases/) and [Version Numbering](../../contributor/project/version-numbering.md)).|
| BP_XPROFILE_BASE_GROUP_NAME     |If **Extended Profiles** component is active, this value will be the label of the primary group of xProfile fields (see [BuddyPress xProfile fields administration](../administration/users/xprofile.md)). Otherwise, the value is undefined.|"**Base**" is the initial value assigned to this Constant. However, this value can be changed via the "**Edit Group**" button (***Primary Tab***) within **`wp-admin/users.php?page=bp-profile-setup`** - Profile Fields administration.|
| BP_XPROFILE_FULLNAME_FIELD_NAME |If **Extended Profiles** component is active, this value will be the label of the primary xprofile field (see [BuddyPress xProfile fields administration](../administration/users/xprofile.md)). Otherwise, the value is undefined.|"**Name**" is the initial value assigned to this Constant. However, this value can be changed via the "**Edit**" button (***Primary Tab - [(Primary)(required)(Sign-up)] field***) within **`wp-admin/users.php?page=bp-profile-setup`** - Profile Fields administration.|

### Deprecated
> [!WARNING]
> Deprecated Constants are no longer supported. Furthermore, these Constants may be removed from future versions, therefore it is  recommended to update any code that uses them, appropriately.

| Constant                      | Default Value | Description |
| :---------------------------- | :------------ | :---------- |
| BP_ACTIVITY_SLUG              | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_BLOGS_SLUG                 | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_FRIENDS_DB_VERSION         | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_FRIENDS_SLUG               | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_GROUPS_SLUG                | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_MEMBERS_SLUG               | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_MESSAGES_SLUG              | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_NOTIFICATIONS_SLUG         | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_SETTINGS_SLUG              | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_SIGNUPS_SKIP_USER_CREATION | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_USE_WP_ADMIN_BAR           | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
| BP_XPROFILE_SLUG              | undefined     | If defined, a "**doing it wrong**" error notice is cast. |
