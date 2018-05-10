Contents:
  Overview
  Repo Folder Structure
  Starting the development environment
  User Accounts
  Drupal
  Installed Modules
    Notes
    Module List
    Field Types
  Site Structure
    Front Page
    General Page Design
    Blocks
  Content Types
    Notes
    Content Type
      Fields
    Form Display Order
    View Modes
    Media Types
    User Profiles
  Taxonomies
    Notes
    Vocabulary Listing
  Views
  Roles
    Notes
    Roles and Permissions
  Account Settings
  Multilingual
  Deliverables
  Additional Notes
  Technical Notes



----------------------------------
Overview



----------------------------------
Repo Folder Structure
  In the root of the repo there is:
    ASSESSMENT.txt (this file),
    readme.md - the Readme file (duplicates the contents of this file),
    - the latest version of the db for importing into Lando to start the site
    /db_backups - a folder which contains copies of the Drupal database from during the development process,
    /drupal - the folder which contains the Drupal installation and files.
  .gitignore
  .lando.yml - used to start the Lando instance that the site is run on.



----------------------------------
Starting the development environment
  ***This installation assumes you have Lando installed. In a normal team situation, I would assume there is a common local development environment across the entire team to ensure consistency when passing files around. Since I don't know what your preferred environment is, I chose Lando as my local development environment because it's fairly straightforward and is becoming more common now.***
  **If you do not have Lando installed, please download it at https://github.com/lando/lando/releases and install the appropriate version for your computer**
  To start the site:
      $ lando start
    Lando will install the environment then get it started. This may take a few minutes due to downloading the appropriate containers
      $ lando db-import unimooc.sql.gz
    Navigate to the appropriate url that Lando tells you when it finishes starting and you should see the front page of the site

  To stop the environment:
    On the command line, type: lando poweroff
      This will shut down the virtual environment



----------------------------------
User Accounts
  To test the site, there are 4 user accounts set up for you to explore the various roles and functionality. To see the full list of different permissions, please see the "Roles" section below.
    Role                     Username                    Password
    Administrator            Admin                       Admin1.
    Client Administrator     ClientAdmin                 Password1.
    Editor                   EmilyEditor                 Password1.
    Authenticated User       Rob                         Password1.




----------------------------------
Drupal
  For this project, I installed Drupal 8. It is currently on version 8.5.3



----------------------------------
Installed Modules (/admin/modules)
  Normally I try to only install modules that have a full release. This prevents most issues with compatibility and other random errors. In this case I tried to install and use the Entity Browser for use with selecting images for the course listing. However, I was unable to get this functioning due to an upload error that I couldn't get rid of. The Entity Browser has a full release, however some of the associated modules with it are not, including Dropzonejs and Entity Embed. I suspect with additional time and troubleshooting I could have figured out the file upload problem and gotten it working, however for the purposes of this assessment, I elected to find an alternative. Further explanation about this and the editorial experience will be listed below with the description of the content type.

  Modules that do not have a full release are noted as such.

  All modules were installed via Composer, except for the Flag module. Apparently that module doesn't exist on packagist and is currently listed as a "virtual package". So that module was installed manually.

  The Flag module is used to add the wishlist capability. Despite being in alpha, it appears to be stable. Further testing might be necessary to verify that it would continue to work in a production situation.

  Honeypot is used for basic spam filtering on the user registration form. A more robust solution might be necessary in the future, but this module is minimally intrusive and would be a good starting point for potential future protection. If possible, I try to keep the user experience as free from disruptions as possible and using a Captcha form or similar would add user frustration. After the site is launched I would monitor the registrations to see if there are spam problems with the user registration process and if there are, we can consider adding more robust protection.

  The requirements listed a link to register for the courses. I assumed, based on the requirement wording, that the registration would be done on the client's system and not through this site. So I did not install the Webform module that I would have otherwise used for that purpose.

  There are a number of other modules that are installed but not fully configured due to the limited information in the requirements. Modules such as Google Analytics, Metatag, and Redirect/Redirect 404.

  Module List:
    Responsive Image
    Admin Toolbar
      Admin Toolbar Extra Tools
    Chaos Tools
    Devel
      Devel Generate
      Devel Kint
    Entity Embed
    Flag - 8.x-4.0-alpha3
      Flag Bookmark - 8.x-4.0-alpha3
    Dropzonejs
      Dropzonejs entity browser widget
    Entity browser
      Entity browser example
    Configuration translation
    Content translation
    Interface translation
    Language
    Checklist API
    Entity Embed - 8.x-1.0.beta2
    Embed
    File browser
      File browser example
    Pathauto
    Redirect
    Redirect 404
    Metatag
    Metatag: Facebook
    Metatag: favicons
    Metatag: Google Custom Search Engine
    Metatag: Google Plus
    Metatag: Open Graph
    Metatag: Pinterest
    Metatag: Twitter Cards
    Metatag: Views
    SEO Checklist
    Token
    Honeypot
    Google Analytics

    Field Types
      Address
      Datetime
      Datetime Range
      File
      Image
      Link
      Options
      Telephone
      Text
      Video embed field



----------------------------------
Site Structure
  The site is not very deeply laid out due to the requirements only listing the need for course listings, course pages, and a front page (not specified but assumed).

  Front page
    Courses - This is a filterable view page with all of the courses listed and filters available to filter by price, topic, and difficulty.
      Course Topic Areas - On the front page there are links to the four topic areas which lead to taxonomy pages listing the courses available in each of the topic areas
        (individual course listings) - the individual course pages.

  The current general page design has:
    -A top navigation bar with the logo, a "Home" link, a "Courses" link, selectors for the languages, the search bar, and the user account links
    -Left sidebar with the course topic areas listed
    -Center area with the main page content. This includes:
      -A non-logged in (non-admin) user sees the "Create An Account To Start Your Own Wishlist" link
      -The page title
      -The page content
    -On a user page there is also a right sidebar with the wishlist content.

  Blocks:
    Navigation Bar:
      Site branding
      Main navigation
      Search
      User account menu
      Language switcher
    Offcanvas Navigation:
      Main navigation
      Language switcher
      User account menu
    Content:
      Register Now - This is a Menu block that adds the "Create An Account To Start Your Own Wishlist!" link, this block is hidden on the front page
      Page title
      Breadcrumbs
      Tabs
      Primary admin actions
      Status messages
      Help
      Main page content
    Left Sidebar:
      Course Topic Areas - This is a View list of the "Topic Areas" taxonomy vocabulary linking to the pages of courses for each term
    Right Sidebar:
      My wishlist - This is a View list of the user Wishlist and is only viewable on the User pages
    Footer:
      Main navigation - For user simplicity, I added the navigation in the footer so users would not have to scroll back up to the top to find the links
      User account menu - For user simplicity, duplicate of the top user account menu
      Footer menu



----------------------------------
Content Types
  There is only one custom content type for this project based on the requirements. It's called "Course" and covers the information listed in the requirements.

  For the requirement that the editor be able to recenter the image, I wasn't sure the best way to make that happen since there wasn't a design involved. Depending on the page layout I would approach the requirement differently. The way I generally have approached this, especially if the image is going to be used as a hero image on the page, would be to set the image as the background of a div then add a dropdown for the editor to choose the focal area. This would then be used in the template to add an appropriate CSS class to the image to change the background position accordingly. While I tend to lean towards giving the editor as much control as possible, I would expect that giving them options for top-left, top-center, top-right, middle-left, middle, middle-right, bottom-left, bottom-center, bottom-right would be enough choice. For the purposes of this assessment, I had the image stay just as a normal image on the page, though it is using the Core responsive image setting, with the expectation that it could change based on the design requirements.

  For the image selection, I had planned on using Entity Browser to upload, select, and place the images, but I kept running into an error in the process. So I set the image selection widget to a select list. This means that the editorial experience is not what I would prefer. I was hoping to allow the editor to simply upload an image directly as they are creating a new node with this content type, but due to the above mentioned issue with Entity Browser, the process is a bit more involved. So to insert an image, the editor would first have to go to Content > Add Media > Image then upload the image there. Once the image is ready, the editor can go to add a new Course and when they get to the Primary Image field, they will see their new image listed.

  In the past I have just had this as a file upload field, which allows the editor the ease of adding an image during the process, but by trying to use the new Media Entity functionality in Core, this method is no longer ideal. Doing it that way means the image is not available for reuse which causes editorial frustration. Since this site is still in development I decided that it would be better to hand off the site to begin work on the theme and while that's being done, I or someone else could continue to work on the Entity Browser issue and hopefully have it working correctly before the site was handed over to the client. The end result for the themer is the image and the way the image is displayed should not change if the method of choosing the image changes. If there was a change, this would be communicated as appropriate to the themer to be able to tweak their files as necessary.

  The Course Downloads field has the same issue. The difference is that Course Downloads allows for multiple files to be selected. Instructions for selecting more than one file are included in the help text for that field.

  The Course content type also has a workflow attached to it of "Draft" -> "Published" -> "Archived". This is primarily to allow the editor to make draft changes to a page before publishing it live and allow for editorial flexibility while updating the site.

  The first language selector at the top of the page is to specify the language that the editor is entering the course in. The requirements specified that the admin area be in English so this is to accommodate that someone using the admin area in English could be entering a course in another language. It also means that someone using the admin area in another language can specify that they are entering an English course.


  // The content type name is followed by - machine_name - {Additional information about the content type}
  Course - course - {
    Title field label: "Course Title"
    preview before submitting - optional - this is because having the preview set to "required" tends to frustrate editors with the additional step
    Display author and date information not checked since courses would not normally need a known author or date of publication
    Menu settings - not available to add to any menu since these nodes will be a part of the taxonomy pages and the overall course listing, there is no current reason why a "course" would need to have a direct menu link
    }
    Fields:
    // Each field is followed by - machine_name - {Additional information about the field}
    -Course Cost - field_course-cost - {
      Field type: number (decimal)
      Required field
      Users may translate this field
      No default values
      Holds up to 10 digits with 2 digits to the right of the decimal
      No Prefix or suffix specified - The currency symbol would be added at the template level to add flexibility in displaying multiple currencies. See Taxonomies below for further explanation
      1 allowed value
    }
    -Course Description - body - {
      Field type: Text (formatted, long, with summary)
      Required field
      Users may translate this field
      No default value
      Summary input not allowed
    }
    -Course Downloads - field_course_downloads - {
      Field Type: Entity reference
      Entity Referenced: Media
      Not a required field
      Users may translate this field
      Media Type: File
      Sort by: Name - Ascending
      No default values
      Unlimited values
    }
    -Course Language - field_course_language -	{
      Field Type: Entity reference
      Entity Referenced: Taxonomy Term
      Required field
      Users may translate this field
      No default values
      Vocabulary: Languages
      1 allowed value
    }
    -Course Registration Link - field_register_now - {
      Field Type: Link
      Required field
      Users may translate this field
      Default value: URL - "<front>", Link text - "Register for this course"
      Internal and external links allowed
      Link text required
      1 allowed value
    }
    -Currency Type - field_currency_type - {
      Field Type: Entity reference
      Entity Referenced: Taxonomy Term
      Required field
      Users may translate this field
      Default value: "US Dollars"
      Vocabulary: Currency Type
      1 allowed value
    }
    -Difficulty Level - field_difficulty_level - {
      Field Type: Entity reference
      Entity Referenced: Taxonomy Term
      Required field
      Users may translate this field
      No default values
      Vocabulary: Difficulty Level
      1 allowed value
    }
    -External Information - field_external_information - {
      Field Type: Link
      Not a required field
      Users may translate this field
      No default values
      Internal and external links allowed
      Link text required
      Unlimited allowed values
    }
    -Introductory Text - field_introductory_text - {
      Field Type: Text (plain, long)
      Required field
      Users may translate this field
      No default value
      1 allowed value
    }
    -Primary Image - field_primary_image - {
      Field Type: Entity reference
      Entity referenced: Media
      Not a required field
      Users may not translate this field
      No default values
      Media type: Image
      1 allowed value
    }
    -Topic Area - field_topic_area - {
      Field Type: Entity reference
      Entity Referenced: Taxonomy Term
      Required field
      Users may translate this field
      Vocabulary: Topic Areas
      No default values
      1 allowed value
    }
    -Video Embed - field_video_embed - {
      Field Type: Video Embed
      Not a required field
      Users may translate this field
      No default values
      Unlimited allowed values
    }


  Form Display order:
    Language - Editorial widget: Language select (This is specifying the language the course description is being written in for instances when the editor is entering the content in a language other than English)
    Course Title - Editorial widget: Textfield - size: 60
    Topic Area - Editorial widget: Select List
    Course Language - Editorial widget: Select List
    Difficulty Level - Editorial widget: Select List
    Course Registration Link - Editorial widget: Link - No placeholders
    Introductory Text - Editorial widget: Text Area (multiple rows) - Number of rows: 5
    Primary Image - Editorial widget: Select list
    Course Description - Editorial widget: Text area with a summary - Number of rows - 9, Number of summary rows - 3
    Video Embed - Editorial widget: Video Textfield
    Course Downloads - Editorial widget: Select List
    External Information - Editorial widget: Link - No placeholders
    Translation
    Course Cost - Editorial widget: Number Field - No placeholder
    Currency Type - Editorial widget: Select list
    Moderation state - Editorial widget: Moderation state


  View Modes:
    For this project I kept the default view modes because there wasn't information in the requirements that would necessitate any additional view modes. The Teaser mode includes only the Title and Thumbnail of the course as specified. I would prefer to have a short description paragraph, the Topic Area, and/or Difficulty Level also listed for greater user clairity, but since they were not listed in the requirements, I did not keep them. I set the Search Index with the same settings as the Teaser.

    Default:
      Flag: Wishlist Item
      Moderation control
      Course Registration Link - Label: Hidden, Format: Link - Link text trimmed to 80 characters
      Topic Area - Label: Inline, Format: Label - Link to the referenced entity
      Difficulty Level - Label: Inline, Format: Label - Link to the referenced entity
      Course Language - Label: Inline, Format: Label - Link to the referenced entity
      Introductory Text - Label: Hidden, Format: Plain text
      Primary Image - Label: Hidden, Format: Rendered entity - Rendered as Default (See Media Types below for more information)
      Course Description - Label: Hidden, Format: Default
      Video Embed - Label: Hidden, Format: Video - Embedded Video (Responsive)
      Course Downloads - Label: Above, Format: Rendered Entity - Rendered as Defauly (See Media Types below for more information)
      External Information - Label: Hidden, Format: Link - Link text trimmed to 80 characters
      Course Cost - Label: Inline, Format: Default - 1234.12, Display with prefix and suffix
    Search Index:
      Primary Image - Label: Hidden, Format: Thumbnail - Image style: Thumbnail (100x100)
      Moderation control
    Teaser:
      Primary Image - Label: Hidden, Format: Thumbnail - Image style: Thumbnail (100x100)
      Moderation control


  Media types
    Audio - Default settings
    File - Default settings
    Image
      -Default settings except:
        -display setting format is set to "Responsive Image"
        -style set to "Wide" - Additional responsive image styles would be set up upon further design specifications and discussion with the themer.
        -the image does not link to anything
    Video - Default settings


  User Profiles
    Fields:
    // Each field is followed by - machine_name - {Additional information about the field}
      -First Name - field_first_name - {
        Field type: Text (plain)
        Form display widget: Textfield - textfield size: 60
        Display Label: Inline
        Display Format: Plain text
      }
      -Last Name - field_last_name - {
        Field type: Text (plain)
        Form display widget: Textfield - textfield size: 60
        Display Label: Inline
        Display Format: Plain text
      }



----------------------------------
Taxonomies
  Notes:
    There are 4 taxonomies set for this site, three are fairly obvious and are distinctly spelled out in the requirements. The fourth was for future site growth. Each of these are just the term, no additional fields added. All have been translated into French and German so users viewing the site in those languages will see the terms in their own language.

    The Currency Type taxonomy is used in the "Course" content type and is used along with the "Course price" field. The reason this is set up as a taxonomy is for the possible future expansion of the site to include the ability to view the prices in different currencies. To allow for this kind of feature, I added the taxonomy that could be used for template-level or scripted logic that would change the numerical value based on the currency entered. I.e., if the course was $100 but the user is in Europe and wants to see it in Euros, they could click a button and see it listed as 90€ or something like that. This comes from the requirement that the site be in French and German as well as English. Even though it appears the school is located in the United States, the multilingual focus of the site indicates an international perspective in the client that could necessitate further growth to accommodate international users. This is similar to the requirement that there be a listing of the course language of either English, French, or German. If the course is originally taught in a different language, there's the possibility that it's originating elsewhere as well, perhaps as a partnership with a European university or something. So the original price might be US Dollars, Euros, Canadian Dollars, etc. This is an example of future-proofing that I like to try to build into any project I do. If the client wants to go this direction, the infrastructure is there, if not, there is no change to the user or the editorial experience.

    This kind of enhancement, if the client wants it, can be a small way to give the client more than they expected for a minimal additional effort. If the option was offered to the client and they want to go with it, it's a way to show them how we're looking out for them. If the client doesn't want the enhancement, there is no negative impact on the site for the editor or user. For now, the field in the content type is defaulted to the singular term "US Dollars" so the editorial experience is unchanged from simply entering the number alone.

Vocabulary Listing:
(The machine name for the vocabulary is listed after the name. The number in parenthesis is the term ID number for use when templating)
  -Difficulty Level - difficulty_level
    -Advanced (7)
    -Intermediate (6)
    -Introductory (5)
    -Specialty (8)

  -Languages - languages
    -English (12)
    -French (13)
    -German (14)

  -Topic Areas - topic_areas
    -Business Finance (2)
    -Business Management (1)
    -Entrepreneurship (4)
    -Innovation (3)

  -Currency Type - currency_type
    -US Dollars (9)

----------------------------------
Views
  I added some additional views and edited some of the default views for editorial and user enhancements.

  Content - content - Page(/admin/content)
    For editorial clarity, I added additional information to the general content view. The primary reason was to remove redundant nodes for the additional languages. So instead of listing all of the nodes, which would show three of the same item (one for each language), I filtered out any that weren't the originally entered version. This means that if a course was added in French (This was done with "La Finance 401") then that version shows up in the content listing. The reason I did this and not always having the default site language is because the original master should always be the starting point. If the editor wants to access the other language versions, they can click the "Translate" link in the content listing row and change the other language versions. My main intent here is to ensure that the originally entered language has priority since that's what the other translations will be based off. The editor can always change whatever language they want or need to, but I felt that since the original language version is the one that the others are linked back to as derivatives of the original, that original should be the one viewed and prioritized. Obviously if the client or team felt this should be different, I would change it, but this is my initial preference.

    Fields:
      Content: Node operations bulk form
      Content: Published (Status)
      Content: Title (Title)
      Content: Content type (Content type)
      Content: Topic Area (Topic Area)
      Content: Translation language (Original language)
      Content: Link to translate Content (Link to translate Content)
      Content: Operations links (Operations)
      (author) User: Name (Author)
      Content: Changed (Updated)

    Filter Criteria:
      Content: Title (exposed)
      Content: Content type (exposed)
      Content: Published (grouped)
      Content: Translation language (exposed)
      Content: Published status or admin user
      Content: Default translation (= True)


  Course Listing - course_listing - Page(/courses)
    Page machine name: page_1
    This is a fairly straightforward view of the courses listed by topic area then alphabetically. It includes some exposed filters as per the listed requirements. It displays an unformatted list to allow the themer more flexibility in displaying the content. I would have set it to display as a grid but since the themer will probably want to use some kind of responsive display option (i.e. Flexbox or Grid), outputting as an unformatted list would allow the greatest control in the templates. Any settings changes necessary would be done as needed at the request of the themer. The filtering is set to show the translation appropriate for the language the user is viewing the site on. The view is set to show 25 items then use a pager for subsequent items.

    Title: Courses
    Format: Unformatted list
    Show: Content - Teaser
    Fields: (n/a)
    Filter Criteria:
      Content: Published (= Yes)
      Content: Content type (= Course)
      Content: Translation language (= Interface text language selected for page)
      Content: Topic Area (exposed)
      Content: Difficulty Level (exposed)
      Content: Course Cost (grouped)
    Sort Criteria:
      Content: Topic Area (ascending)
      Content: Title (ascending)


  Course Topic Areas - course_topic_areas - Block
    Block machine name: block_1
    This view simply shows the four topic areas already defined filtered to the language the user is viewing the site in. It is set to show all of the terms and not use a pager. This also displays an unformatted list for theming flexibility.

    Title: Course Topic areas
    Format: Unformatted list
    Show: Taxonomy term
    Fields: (n/a)
    Filter Criteria:
      Taxonomy term: Vocabulary (= Topic Areas)
      Taxonomy term: Translation language (= Interface text language selected for page)


  My Wishlist - my_wishlist - Block
    Block machine name: block_1
    This view displays the wishlist of the user whose profile page is being viewed. It uses a Contextual Filter based on the User ID that flagged a flag and a relationship based on Flags to connect the user ID of the profile page being viewed and filter out any flags that haven't been flagged by that ID. This also displays an unformatted list for theming flexibility. It is also set to ensure that only the version of the course in the language the user is viewing the site in is visible.

    Title: My Wishlist
    Format: Unformatted list
    Fields:
      Content: Title
    Filter Criteria:
      Content: Published (= Yes)
      Content: Content type (=Course)
      Content: Translation language (= Interface text language selected for page)
    Sort Criteria:
      Content: Title (ascending)
    No Results Behavior:
      Global: Text area (Global: Text area)
        Content: "You haven't added any courses to your wishlist yet. Click the "Add to Wishlist" link at the top of the course listing to add them to this list."
    Contextual Filters
      (Flags) Flagging: User ID
        Relationship: Flags
        When the filter value is not available: Provide default value - User ID from route context
    Relationships: Flags
      Include only flagged content - checked
      Flag: Wishlist Item
      By: Any user


  Taxonomy Term - taxonomy_term - Page, Feed
    Page machine name: page_1
    This is generally the default taxonomy term page, but tweaked to show only courses that match the language the user is viewing the site in. It is using an unformatted list for theming flexibility. After 10 items it will use a pager. This probably would be changed pending theming input.

    Title: None
    Format: Unformatted list
    Shot: Content - Teaser
    Fields: (n/a)
    Filter Criteria:
      Content: Translation language (= Content language selected for page)
      Taxonomy term: Publish status (= Yes)
    Sort Criteria:
      Taxonomy term: Sticky status (descending)
      Content: Title (ascending)



----------------------------------
Roles (/admin/people/permissions)
  Notes:
    For the roles I kept the standard Anonymous, Authenticated, and Administrator user roles and added two client-level roles: Editor and Client Administrator. For these roles I tried to set the permissions appropriately to allow for editorial and content-level freedom that would not cause template-level problems. For instance, The Editor is not allowed to delete content, their own or any other. The Client Administrator is allowed to. The Client Administrator is not allowed to touch the "Currency Type" taxonomy or delete any taxonomy terms, but is allowed to create and edit the "Difficulty Level", "Languages", and "Topic Areas" vocabularies. This is because those other taxonomies allow for expanding the available options and are not used in any design-related functions. As mentioned above, the "Currency Type" vocabulary exists for the specific purpose of triggering template or script logic that would change the display of the course price listing.

    If this project was being done in the context of a larger team, I would assume many of these permissions decisions would be led by a team lead but for the purposes of this assessment, I went with what seemed like the best permissions to balance client freedom with avoiding design malfunctions.

  Anonymous User
    General non-logged-in user state
    Permissions:
      Use site-wide contact form
      View media
      View published content
      Use search

  Authenticated User
    Default user account type created when users register on the site
    Permissions:
      Use site-wide contact form
      Flag Wishlist item
      Unflag Wishlist item
      View media
      View published content
      Use search
      Cancel own user account
      Change own username
      View user information

  Editor
    Standard user account type for client staff who need to add, edit, remove content
    Permissions:
      Use site-wide contact form
      Editorial workflow: Use Archive transition
      Editorial workflow: Use Create New Draft transition
      Editorial workflow: Use Publish transition
      Editorial workflow: Use Restore transition
      Editorial workflow: Use Restore to Draft transition
      View any unpublished content
      View the latest version
      Create translations
      Edit translations
      Translate Basic page content
      Translate Course content
      Use contextual links
      Use the Basic HTML text format
      Use the Full HTML text format
      Flag Wishlist item
      Unflag Wishlist item
      Audio, File, Image, Video: Create new media
      Audio, File, Image, Video: Delete own media
      Audio, File, Image, Video: Edit any Media
      Audio, File, Image, Video: Edit own media
      Create media
      Delete own media
      Update any media
      Update own media
      View media revisions
      View media
      Article, Basic page, Course: Create new content
      Article, Basic page, Course: Delete own content
      Article, Basic page, Course: Edit any content
      Article, Basic page, Course: Edit own content
      Article, Basic page, Course: Revert revisions
      Article, Basic page, Course: View revisions
      Article, Basic page, Course: Access the Content overview page
      View published content
      View own unpublished content
      Access in-place editing
      Use search
      Use the administration pages and help
      View the administration theme
      Use the administration toolbar
      Cancel own user account
      Change own username
      View user information

  Client Administrator
    Client user account with additional permissions for running the site
    Permissions:
      Administer blocks
      Use site-wide contact form
      Editorial workflow: Use Archive transition
      Editorial workflow: Use Create New Draft transition
      Editorial workflow: Use Publish transition
      Editorial workflow: Use Restore transition
      Editorial workflow: Use Restore to Draft transition
      View any unpublished content
      View the latest version
      Create translations
      Delete translations
      Edit translations
      Translate Basic page content
      Translate Course content
      Translate Currency type taxonomy term
      Translate Difficulty Level taxonomy term
      Translate Languages taxonomy term
      Translate custom menu link
      Translate shortcut link
      Translate user
      Translate any entity
      Use contextual links
      Access the Files overview page
      Use the Basic HTML text format
      Use the Full HTML text format
      Flag Wishlist item
      Unflag Wishlist item
      Audio, File, Image, Video: Create new media
      Audio, File, Image, Video: Delete any media
      Audio, File, Image, Video: Delete own media
      Audio, File, Image, Video: Edit any Media
      Audio, File, Image, Video: Edit own media
      Create media
      Delete own media
      Update any media
      Update own media
      View media revisions
      View media
      Article, Basic page, Course: Create new content
      Article, Basic page, Course: Delete any content
      Article, Basic page, Course: Delete own content
      Article, Basic page, Course: Delete revisions
      Article, Basic page, Course: Edit any content
      Article, Basic page, Course: Edit own content
      Article, Basic page, Course: Revert revisions
      Article, Basic page, Course: View revisions
      Article, Basic page, Course: Access the Content overview page
      Administer content
      Delete all revisions
      Revert all revisions
      View all revisions
      View published content
      View own unpublished content
      Administer URL aliases
      Create and edit URL aliases
      Access in-place editing
      Use search
      Administer menus and menu items
      Link to any page
      Use the administration pages and help
      View the administration theme
      Difficulty Level, Languages, Topic Areas: Create terms
      Difficulty Level, Languages, Topic Areas: Edit terms
      Access the taxonomy vocabulary overview page
      Use the administration toolbar
      Cancel own user account
      Change own username
      View user information
      Administer workflows


  Administrator
    Agency staff administrator account
    Permissions:
      All



----------------------------------
Account Settings (/admin/config/people/accounts)
  Contact Settings:
    Personal contact form is not enabled for new users

  Registration and cancellation:
    Visitors can register accounts
    Email verification is not required when visitor creates an account
    Password strength indicator is enabled
    When cancelling a user account: Disable the account and unpublish its content



----------------------------------
Multilingual
  First off, I will start by apologizing to anyone who is fluent in either French or German and reading this site. I'm learning French, but I'm far from fluent so the entirety of the translations are done in Google Translate. I chose to substitute "Class" for "Course" in German because I wasn't sure the term was translating well. In an actual project I would expect to receive correctly translated terminology or have an external partner or the client translate the materials to the appropriate language(s).

  Drupal 8's built-in multilingual capabilities are very powerful and comprehensive, allowing me to easily add the multiple translations for all of the content of the site. This included the course content for each course node, taxonomy terms, view content, content type fields, block content, etc. I tried to ensure that there wouldn't be any place where English would show up that it shouldn't have. There was only one part that I couldn't figure out a way around. In the "Courses" view for the grouped filter for the course prices, I created a filter labeled "All Prices" to show all the prices. I haven't figured out a way to translate that value. There is a module "Better Exposed Filters" that is in Alpha that would solve this problem by, among other things, add a "Reset" button to the filters. Since this is currently in Alpha, I would prefer to wait for a more stable release, especially since this is non-essential functionality.

  At the top of the page on every page is the language selector menu. This works no matter if a user is logged in or not.

  When setting up the Pathauto patterns, I also created different ones for each language that would take into account the different words for "Course" depending on the language. So in German the pattern is: /klasse/[node:field_topic_area]/[node:title] and the conditions are: "the node bundle is course", "the language is German".

  The admin interface is also multilingual. This was not specified in the requirements, the requirements stated that the admin interface was to be in English. I didn't try to stop it from being able to change languages because the multilingual nature of the requirements indicated that the client would be dealing with multilingual content, which likely means there are individuals with the various linguistic backgrounds who would be using the site. Since some of the courses would be taught in other languages than English, it seemed like the client would potentially have people from other nationalities using the site and entering courses in. Giving those individuals the ability to use the admin interface in their native language seemed like the best course of action.

  If the admin interface needs to stay in English, the settings are available in: Home > Administration > Configuration > Regional and language > Languages and would potentially require other reconfiguration so that the menus and other parts continue to follow the correct language.



----------------------------------
Deliverables
  Here are the steps to test the functional requirements listed in the assessment document.

  Themable site: The site is currently using the UIKit base theme which is designed as a starting point for building sites.
    This can be viewed at Admin > Appearance > Installed themes : UIkit 8.x-3.0 (default theme)

  Multilingual Deliverables
    The user can view the courses site in:
      German
      French
      English
      -Steps to test:
        -On the homepage, at the top right corner, select "Deutsch" and the site will change to German
        -On the homepage, at the top right corner, select "Français" and the site will change to French
        -On the homepage, at the top right corner, select "English" and the site will change to English

    If the user is on a course and changes languages, the same course displays, but in the selected language
    -Steps to test:
      -On the homepage, on the top menu bar, select "Courses"
      -Scroll down and select "Management 301" (or any other course listed)
      -At the top right corner, select "Deutsch" and the page will change to German
      -Scroll down, at the beginning of the text blocks above and below the image the text will now say "Auf Deutsch" to indicate it is the German translation
      -At the top right corner, select "Français" and the page will change to French
      -Scroll down, at the beginning of the text blocks above and below the image the text will now say "En Français" to indicate it is the French translation
      -At the top right corner, select "English" and the page will change to English
      -Scroll down, at the beginning of the text blocks above and below the image the text will no longer have anything at the beginning aside from the filler text to indicate it is the English translation


    The administrator UI is in English



----------------------------------
Additional Notes

----------------------------------
Technical Notes
  Database Name: drupal8
  Database Username: drupal8
  Database Password: drupal8
  Host: database
  Port: 3306
  Drupal info:
    Admin login: Admin
    Admin Password: Admin1.
  Site address: http://unimooc.lndo.site (may change depending on Lando settings)
