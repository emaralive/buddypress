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
| Members: Membership Requests | Indicates whether visitors are allowed to request site membership. If enabled, an administrator must approve each new site membership request. The Default is **disabled**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | Community Members |







### (2) BuddyPress Constants

