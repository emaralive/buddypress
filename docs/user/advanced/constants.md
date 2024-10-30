# BuddyPress Constants
> [!Note]
> *A constant is an identifier (name) for a simple value. As the name suggests, that value cannot change during the execution of the script (except for magic constants, which aren't actually constants). Constants are case-sensitive. By convention, constant identifiers are always uppercase.*
> 
> [PHP Manual - Constants](https://www.php.net/manual/en/language.constants.php)

> [!TIP]
> *Constants can be defined using the const keyword, or by using the [define()](https://www.php.net/manual/en/function.define.php)-function. While [define()](https://www.php.net/manual/en/function.define.php) allows a constant to be defined to an arbitrary expression, the const keyword has restrictions as outlined in the next paragraph...*
>
> *When using the const keyword, only scalar ([bool](https://www.php.net/manual/en/language.types.boolean.php), [int](https://www.php.net/manual/en/language.types.integer.php), [float](https://www.php.net/manual/en/language.types.float.php) and [string](https://www.php.net/manual/en/language.types.string.php)) expressions and constant [arrays](https://www.php.net/manual/en/language.types.array.php) containing only scalar expressions are accepted. It is possible to define constants as a [resource](https://www.php.net/manual/en/language.types.resource.php), but it should be avoided, as it can cause unexpected results.*
>
> [PHP Manual - Syntax](https://www.php.net/manual/en/language.constants.php)


### User-Definable
These constants are avaiable to alter the behavior or where and how parts of BuddyPress are loaded. 

| Constant                              | Default Value | Description |
| :------------------------------------ | :------------ | :----------- |
| BP_AVATAR_DEFAULT                     | undefined |             |
| BP_AVATAR_DEFAULT_THUMB               | undefined     |             |
| BP_AVATAR_FULL_HEIGHT                 | 150 (pixels) |             |
| BP_AVATAR_FULL_WIDTH                  | 150 (pixels) |             |
| BP_AVATAR_ORIGINAL_MAX_FILESIZE       | 5120000 (bits)  |             |
| BP_AVATAR_ORIGINAL_MAX_WIDTH          | 450 (pixels) |             |
| BP_AVATAR_THUMB_HEIGHT                | 50 (pixels) |             |
| BP_AVATAR_THUMB_WIDTH                 | 50 (pixels) |             |
| BP_AVATAR_UPLOAD_PATH                 | The&nbsp;filesystem&nbsp;directory&nbsp;path for Avatar uploads |             |
| BP_AVATAR_URL                         | The&nbsp;URL&nbsp;directory&nbsp;path for Avatar uploads |             |
| BP_DEFAULT_COMPONENT                  | undefined |             |
| BP_DISABLE_AUTO_GROUP_JOIN            | undefined |             |
| BP_EMBED_DISABLE_ACTIVITY             | undefined |             |
| BP_EMBED_DISABLE_ACTIVITY_REPLIES     | undefined |             |
| BP_EMBED_DISABLE_PRIVATE_MESSAGES     | undefined |             |
| BP_ENABLE_MULTIBLOG                   | undefined |             |
| BP_ENABLE_ROOT_PROFILES               | undefined |             |
| BP_ENABLE_USERNAME_COMPATIBILITY_MODE | undefined |             |
| BP_FORUMS_PARENT_FORUM_ID             | 1 (integer) |             |
| BP_FORUMS_SLUG                        | forums (string) |             |
| BP_GROUPS_DEFAULT_EXTENSION           | undefined |             |
| BP_IGNORE_DEPRECATED                  | undefined     |Setting the value to **true** (**enabled**) will  prohibit the loading of any/all deprecated functions. Leaving the value **undefined** (**disabled**) or setting the value to **false** (**disabled**) will allow the loading of any/all deprecated functions depending on the value of the **`BP_LOAD_DEPRECATED`** Constant.  |
| BP_LOAD_DEPRECATED                    | undefined     |Setting the value to **true** (**enabled**) will  allow the loading of all deprecated functions, given that the **`BP_IGNORE_DEPRECATED`** Constant is **disabled**. Leaving the value **undefined** (**disabled**) or setting the value to **false** (**disabled**) will allow for the loading of the last 2 versions of deprecated functions, if and only if the **`BP_IGNORE_DEPRECATED`** Constant is **disabled**.   |
| BP_MEMBERS_REQUIRED_PASSWORD_STRENGTH | undefined |             |
| BP_MESSAGES_AUTOCOMPLETE_ALL          | undefined |             |
| BP_PLUGIN_DIR                         |The&nbsp;filesystem&nbsp;directory&nbsp;path (with trailing slash) for the BuddyPress plugin |             |
| BP_PLUGIN_URL                         | The&nbsp;URL&nbsp;directory&nbsp;path (with trailing slash) for the BuddyPress plugin |             |
| BP_ROOT_BLOG                          | 1 (integer) |The Site/Blog ID of the multisite network BuddyPress content will be generated|
| BP_SEARCH_SLUG                        | search (string) |             |
| BP_SHOW_AVATARS                       | 1 (integer) |             |

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
