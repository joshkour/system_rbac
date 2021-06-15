## Design patterns that have been used:
When designing and implementing system, I will at minimum adhere to TDD, SOLID and DRY.

### MVC
Used to separate applications concerns. i.e Controllers / Model / Views. i.e Laravel, Zend etc.

### Facade

Using a facade helps to remove complex subsystems from the client caller.
Used here to the hide the complex subsystem of retrieving data for dashboard from cache or database, saving to cache and any other related funtionalities.

### Repository

Mediates between the domain and data mapping layers using a collection-like interface for accessing domain objects.

### RBAC

RBAC (Role-based access control) to provide a form of security layer based on permissions to restrict certain access to system components and data. This will provide a more manageable way of providing access to users of the system. When the number of new users increases, the use of RBAC significantly reduces the complexities around managing access. Once a Role is given to a user, they automatically are given the permissions to access the system and no extra requirements or management is needed. When a new permission is created and added to a Role, all existing users will gain this permission. Thus, RBAC roles provide both effective and efficients means of controlling access to various components and data of a system.

Example roles:
- Admin
- Organisation
- User

Example access for view components:
- view_dashboard_index
- view_users_index
- view_profile_activity_block

Example access for action:
- action_add_user
- action_edit_user
- action_delete_user

Example access for data:
- data_events_all
- data_events_organisation
- data_events_user

