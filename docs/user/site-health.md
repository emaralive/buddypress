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
| Active components | A list of active components. The defaults are **BuddyPress Core**, **Community Members**, **Extended Profiles**, **Account Settings**, **Activity Streams** & **Notifications**. Configurable from [BuddyPress Components settings](administration/settings/components.md) screen, with the exceptions of **BuddyPress Core** & **Community Members** which are **Must-Use** components. | |
| URL Parser | Indicates which URL Parser is in use. The default is **BP Rewrites API**. Can be changed to the **Legacy Parser** by installing the [BP Classic](https://wordpress.org/plugins/bp-classic/) add-on. | |
| Community visibility | Indicates whether the BuddyPress community is public (**Anyone**) or private (**Members Only**). The Default is public (**Anyone**). Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | BuddyPress Core |
| Active template pack | Indicates which BuddyPress template pack is in use. The Default is **BuddyPress Nouveau**. Configurable from the [BuddyPress Options](administration/settings/options.md) screen. | BuddyPress Core |

### (2) BuddyPress Constants

