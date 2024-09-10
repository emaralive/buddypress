# Site Health Screen
> [!TIP]
> Detailed information regarding the **Site Health** screen can be found at [Support guides/Dashboard/Site Health screen](https://wordpress.org/documentation/article/site-health-screen/)

BuddyPress, currently, adds 2 (two) accordian panels to the **Site Health Info** tab:
1. **BuddyPress**
2. **BuddyPress Constants**
   
![site health screen example](assets/site-health-screen.png)
An example of the **Site Health** screen

### (1) BuddyPress
This panel contains details about your BuddyPress configuration depending upon which components are enabled.
| Attribute | Description | Component |
|:-------|:--------|:-------|
| Version | The installed version of BuddyPress. | |
| Active components | A list of active components. The defaults are **BuddyPress Core**, **Community Members**, **Extended Profiles**, **Account Settings**, **Activity Streams** & **Notifications**. Configurable from [BuddyPress Components](administration/settings/components.md) screen, with the exceptions of **BuddyPress Core** & **Community Members** which are **Must-Use** components. | |
| URL Parser | Indicates which URL Parser is in use. The default is **BP Rewrites API**. Can be changed to the **Legacy Parser** by installing the [BP Classic](https://wordpress.org/plugins/bp-classic/) add-on. | |
| Community visibility | Indicates whether the BuddyPress community is public (**Anyone**) or private (**Members Only**). The Default is public (**Anyone**). Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | BuddyPress Core |
| Active template pack | Indicates which BuddyPress template pack is in use. The Default is **BuddyPress Nouveau**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | BuddyPress Core |
| Toolbar | Indicates whether the WordPress **Toolbar** is shown on the frnnt-end for **logged out** users. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. See [Toolbar](https://wordpress.org/documentation/article/toolbar/) for additional information. | BuddyPress Core |
| Account Deletion | Indicates whether registered members are allowed to delete their own accounts. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | Account Settings |
| Members: Profile Photo Uploads | Indicates whether registered members are allowed to upload avatars. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | Community Members |
| Members: Cover Image Uploads | Indicates whether registered members are allowed to upload cover images. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | Community Members |
| Members: Invitations | Indicates whether registered members are allowed to nvite people to join the network. The Default is **disabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | Community Members |
| Members: Membership Requests | Indicates whether visitors are allowed to request site membership. If enabled, an administrator must approve each new site membership request. The Default is **disabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. ***Note**: The "**Anyone can register**" checkbox must be **disabled** in order to **enable** this feature (see [General Settings - Membership](https://wordpress.org/documentation/article/settings-general-screen/#membership) for where to **enable** or **disable** this checkbox)* | Community Members |
| Extended Profiles: Profile Syncing | Indicates whether BuddyPress to WordPress profile syncing is allowed. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | Extended Profiles |
| User Groups: Group Creation | Indicates whether group creation for all users is allowed. Administrators can always create groups, regardless of this setting. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | User Groups |
| User Groups: Group Photo Uploads | Indicates whether customizable avatars for groups is allowed. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | User Groups |
| User Groups: Group Cover Image Uploads | Indicates whether customizable cover images for groups is allowed. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | User Groups |
| User Groups: Group Activity Deletions | Indicates whether group administrators and moderators to delete activity items from their group's activity stream is allowed. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | User Groups |
| Activity Streams: Post Comments | Indicates whether activity stream commenting on posts and comments is allowed. The Default is **disabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. ***Note**: The Site Tracking component must be **active** in order to **enable** this feature*. |Activity Streams & Site Tracking |
| Activity Streams: Activity auto-refresh | Indicates whether a check for new items while viewing the activity stream is automatically allowed. The Default is **enabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. |Activity Streams |







### (2) BuddyPress Constants

