<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/php/install_quickinstall_windows_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/php/install_quickinstall_windows.php
 * Last reviewed/updated: 22 Aug 2020.
 * Published: 21 Sep 2016.
 * NOTE: Blurry images are being shrunken to fit allowed page width. Images located deep in lists are first to appear blurry. */

return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>One solution for developing phpBB board styles locally requires a web server (including PHP interpreter), a SQL database server, and phpBB3 QuickInstall (QuickInstall). QuickInstall manages the installation of phpBB boards on the web server and SQL database server. The installed phpBB boards are fully functional: you can post, reply, login, access the User Control Panel, access the Administration Control Panel, create categories, create forums, create users, create groups, set permissions, etc. In addition, you can create any number of phpBB boards, including multiple instances of the same version of a phpBB board software. Moreover, you can install and develop any number of phpBB board styles on the phpBB boards.</p>

     <div class='note normal'>
      <ul>
       <li>In this example:
        <ul>
         <li>The web server (including PHP interpreter) and SQL database server are provided by <a href='https://www.apachefriends.org/'>Apache Friends XAMPP (apachefriends.org)</a>.</li>
         <li>The XAMPP web server is Apache HTTP Server (Apache) and the XAMPP SQL database server is MySQL.
<!-- Start similar content in install_quickinstall_windows.php, install_xampp_windows_sections.php, and simple_mysql_admin.php. -->
          <div class='note normal'>Actually, the XAMPP SQL database server is MariaDB, which is developed by the MariaDB Foundation, not MySQL, which is developed by Oracle. MariaDB is a drop in place replacement for MySQL. Therefore, for most practical purposes, the terms <q>MariaDB</q> and <q>MySQL</q> are interchangeable. In this example, <q>MySQL</q> is used throughout.</div>
<!-- End similar content in install_quickinstall_windows.php, install_xampp_windows_sections.php, and simple_mysql_admin.php. -->
         </li>
         <li>The root of the web server is <span class='filename'>C:\\xampp\\htdocs</span>.</li>
         <li>The URI for the root of the web server is http://localhost/.</li>
        </ul>
       </li>
       <li>Alternative solutions for developing phpBB board styles locally include the <a href='https://www.ampps.com/'>Softaculous AMPPS Stack (ampps.com)</a>, the <a href='https://bitnami.com/stack/phpbb'>Bitnami phpBB Stack (bitnami.com)</a>, and the <a href='https://bitnami.com/stack/xampp#phpbb'>Bitnami phpBB Module For XAMPP (bitnami.com)</a>. Although the installation and setup of the phpBB board software by the Softaculous and Bitnami products is more automated/less manual compared to QuickInstall, the Softaculous and Bitnami products share one downside: when a new version of the phpBB board software is released, it can take a couple of days to a week or more for Softaculous and Bitnami to build the new version of the phpBB board software into their products. In this example, new versions of the phpBB board software and phpBB board styles, including release candidates, can be installed as soon as they are released.</li>
       <li>QuickInstall 1.5.x supports phpBB 3.0.x, 3.1.x, 3.2.x, and 3.3.x. However, phpBB 3.0.x and 3.1.x have reached End Of Life. Therefore, this web page discusses using QuickInstall 1.5.x with phpBB 3.2.x and 3.3.x, not phpBB 3.0.x and 3.1.x. phpBB 3.2.x reaches End Of Life in November 2020.</li>
      </ul>
     </div>

<!-- Start similar content in install_quickinstall_windows.php, install_xampp_windows_sections.php, and simple_mysql_admin.php. -->

     <h3><a id='security'></a>1.1. Security</h3>

     <p>QuickInstall <em>is not</em> intended for installation on:</p>

     <ul>
      <li>A computer that is directly connected to the Internet (i.e., a computer assigned a public IP address because it is not behind a gateway/router).</li>
      <li>An Internet-facing server (i.e., a computer that provides a service over the Internet).</li>
      <li>A computer that stores or has access to important data.</li>
      <li>In other words, QuickInstall <em>is not</em> intended for use in public/Internet/online/production environments.</li>
     </ul>

     <p>QuickInstall <em>is</em> intended for installation on:</p>

     <ul>
      <li>A computer that is connected to a local network (i.e., a computer assigned a private IP address because it is behind a gateway/router).</li>
      <li>An Intranet-facing server (i.e., a computer that provides a service over an Intranet).</li>
      <li>A computer that does not store and does not have access to important data.</li>
      <li>In other words, QuickInstall <em>is</em> intended for use in private/Intranet/offline/development environments.</li>
     </ul>

<!-- End similar content in install_quickinstall_windows.php, install_xampp_windows_sections.php, and simple_mysql_admin.php. -->

    </section>
    <hr />
    <section>

     <h2><a id='installQuickInstall'></a>2. Install phpBB3 QuickInstall</h2>

     <p>QuickInstall requires a web server (including PHP interpreter) and a SQL database server. The supported SQL database servers are <a href='https://www.mysql.com/'>MySQL (mysql.com)</a>, <a href='https://www.postgresql.org/'>PostgreSQL (postgresql.org)</a>, <a href='https://www.sqlite.org/'>SQLite (sqlite.org)</a>, and <a href='https://www.microsoft.com/en-us/sql-server/sql-server-2016'>MS SQL (microsoft.com)</a>.</p>

     <p>QuickInstall software refers to the files that constitute QuickInstall. The files that constitute QuickInstall are located in the QuickInstall software folder.</p>

     <p>QuickInstall software is installed on the web server. QuickInstall software is installed by simply copying the QuickInstall software folder to the root of the web server.</p>

     <p>To install QuickInstall:</p>

     <ol>
      <li>Download the source code (zip) file for the latest official version, not release candidate (RC) version, of QuickInstall from <a href='https://github.com/phpbb/quickinstall/releases'>GitHub phpBB QuickInstall Releases (github.com)</a>. In this example, the source code (zip) file for QuickInstall 1.5.0 was downloaded.</li>
      <li>Extract the downloaded file. In this example, the downloaded <span class='filename'>quickinstall_1.5.0.zip</span> file was extracted to the <span class='filename'>quickinstall</span> folder.</li>
      <li>Copy the <span class='filename'>quickinstall</span> QuickInstall software folder to the root of the web server. In this example, the <span class='filename'>quickinstall</span> QuickInstall software folder was copied to the root of XAMPP as <span class='filename'>C:\\xampp\\htdocs\\quickinstall</span>.</li>
      <li>The QuickInstall software is installed.</li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='installBoardSoftware'></a>3. Install phpBB Board Software</h2>

     <p>phpBB board software refers to the files that constitute a phpBB board. The files that constitute a phpBB board are located in a phpBB board software folder.</p>

     <p>phpBB board software is installed on QuickInstall. Multiple phpBB board software can be installed. phpBB board software is installed by simply copying the phpBB board software folder to the correct QuickInstall software <span class='filename'>sources</span> directory. The first phpBB board software to install is copied to the QuickInstall software <span class='filename'>sources</span> directory. Subsequent phpBB board software to install is copied to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory.</p>

     <p>The installed phpBB board software serves as source files for the creation of phpBB boards.</p>

     <h3><a id='installFirstBoardSoftware'></a>3.1. Install The First phpBB Board Software To The QuickInstall Software <span class='filename'>sources</span> Directory</h3>

     <p>When QuickInstall is run, if it does not find a phpBB board software folder named <span class='filename'>phpBB3</span> in the QuickInstall software <span class='filename'>sources</span> directory, it errors and cannot proceed. Therefore, the first phpBB board software to install must be a <span class='filename'>phpBB3</span> phpBB board software folder copied to the QuickInstall software <span class='filename'>sources</span> directory.</p>

     <p>To install the first phpBB board software to the QuickInstall software <span class='filename'>sources</span> directory:</p>

     <ol>
      <li>Download phpBB board software from <a href='https://www.phpbb.com/downloads/'>phpBB Downloads (phpbb.com)</a>. In this example, phpBB 3.3.1 was downloaded.</li>
      <li>Extract the downloaded file. In this example, the downloaded <span class='filename'>phpBB-3.3.1.zip</span> file was extracted to the <span class='filename'>phpBB3</span> folder.</li>
      <li>Copy the <span class='filename'>phpBB3</span> phpBB board software folder to the QuickInstall software <span class='filename'>sources</span> directory. In this example, the <span class='filename'>phpBB3</span> phpBB board software folder was copied to the QuickInstall software <span class='filename'>sources</span> directory as <span class='filename'>C:\\xampp\\htdocs\\quickinstall\\sources\\phpBB3</span>.</li>
      <li>The first phpBB board software is installed.</li>
     </ol>

     <h3><a id='installSubsequentBoardSoftware'></a>3.2. Install Subsequent phpBB Board Software To The QuickInstall Software <span class='filename'>sources\phpBB3_alt</span> Directory</h3>

     <p>The installation of subsequent phpBB board software differs from the installation of the first phpBB board software in the following ways:</p>

     <ul>
      <li>Subsequent phpBB board software is installed by copying the phpBB board software folder to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory, not the QuickInstall software <span class='filename'>sources</span> directory.</li>
      <li>Subsequent phpBB board software folders do not have to be named <span class='filename'>phpBB3</span>.</li>
     </ul>

     <p>To install subsequent phpBB board software to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory:</p>

     <ol>
      <li>Download phpBB board software from <a href='https://www.phpbb.com/downloads/'>phpBB Downloads (phpbb.com)</a> In this example, phpBB 3.2.10 was downloaded.</li>
      <li>Extract the downloaded file. In this example, the downloaded <span class='filename'>phpBB-3.2.10.zip</span> file was extracted to the <span class='filename'>phpBB3</span> folder.</li>
      <li><a id='subsequentPhpbbBoardSoftwareFolderName'></a>Rename the <span class='filename'>phpBB3</span> phpBB board software folder to something unique and descriptive about the phpBB board software. In this example, the <span class='filename'>phpBB3</span> folder was renamed <span class='filename'>phpbb3210</span>.</li>
      <li>Copy the phpBB board software folder to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory. In this example, the <span class='filename'>phpbb3210</span> phpBB board software folder was copied to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory as <span class='filename'>C:\\xampp\\htdocs\\quickinstall\\sources\\phpBB3_alt\\phpbb3210</span>.</li>
      <li>The subsequent phpBB board software is installed.</li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='createQuickInstallProfiles'></a>4. Create QuickInstall Profiles</h2>

     <p>Before a phpBB board can be created, at least one QuickInstall profile must be created. A QuickInstall profile stores default phpBB board settings that are to be applied to the created phpBB boards. Multiple QuickInstall profiles can be created. QuickInstall is run in a web browser.</p>

     <p>QuickInstall profiles are created in the QuickInstall Profiles tab. By default, the first time QuickInstall is run, and every time QuickInstall is run without creating a QuickInstall profile, the QuickInstall Profiles tab is selected.</p>

     <p>To create a QuickInstall profile:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to QuickInstall. In this example, QuickInstall is http://localhost/quickinstall/.</li>
      <li>The QuickInstall <b>Profiles</b> tab is selected:
       <img src='/images/install_quickinstall_windows/qi_profiles_tab_1024x215.gif' alt='phpBB3 QuickInstall Profiles Tab' class='box-shadow' />
      </li>
      <li>Go to the Database fieldset.
       <ol>
        <li>Database type selects the installed SQL database server to use. If MySQL 4.1.3 or later is installed, it is recommended that MySQLi (MySQL improved), not MySQL, is selected.
         <ul>
          <li>In the Database type dropdown, use the default (MySQLi) or select a different installed SQL database server. In this example, <kbd>MySQLi</kbd> was selected.</li>
         </ul>
        </li>
        <li>Database username/password refers to the username/password of a SQL database server user account with permissions to create databases.
         <ol>
          <li>In the Database username field, enter the username of a SQL database user account with permissions to create databases. In this example, <kbd>root</kbd> (the MySQL root user account username) was entered.</li>
          <li>In the Database password field, enter the password of the SQL database user account or check No password. In this example, <kbd>No password</kbd> (the MySQL root user account default password) was checked.</li>
         </ol>
        </li>
       </ol>
      </li>
      <li><a id='createQuickInstallProfiles_administratorUsernamePassword'></a>Go to the Admin account fieldset. Administrator username/password assigns a username/password to the phpBB board Administrator account. The phpBB board Administrator account has access to the phpBB board Administration Control Panel (ACP).
       <ol>
        <li>In the Administrator username field, use the default (admin) or enter a different username. In this example, <kbd>admin</kbd> was entered.</li>
        <li>In the Administrator password field, enter a password. In this example, <kbd>adminPass</kbd> was entered.</li>
       </ol>
      </li>
      <li>Go to the Board configuration fieldset. Time zone sets the default time zone.
       <ul>
        <li>In the Time zone dropdown, select the time zone for your location. In this example, <kbd>America/New York</kbd> was selected.</li>
       </ul>
      </li>
      <li>Go to the Install options fieldset. Alternate environment selects the installed phpBB board software to use as source files for the creation of the phpBB board. If only one phpBB board software is installed, the Alternate environment dropdown has only one option. If multiple phpBB board software are installed, the Alternate environment dropdown has multiple options. In either case, the Default environment (latest phpBB) option always refers to the phpBB board software installed to the QuickInstall software <span class='filename'>sources</span> directory. Whether or not it is the <q>latest phpBB</q> is never actually determined and, therefore, could be incorrect. Subsequent phpBB board software installed to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory are listed in the Alternate environment dropdown by their <a href='#subsequentPhpbbBoardSoftwareFolderName'>phpBB board software folder name (above)</a>.
       <ul>
        <li>In the Alternate environment dropdown:
         <ul>
          <li>If only one phpBB board software is installed, the Alternate environment dropdown has only one option and there is nothing to do. Go to the next step.</li>
          <li>If multiple phpBB board software are installed, select a phpBB board software. In this example, multiple phpBB board software are installed and <kbd>Default environment (latest phpBB)</kbd> was selected:
           <img src='/images/install_quickinstall_windows/qi_profiles_tab_install_options_alternate_environment_1024x260.gif' alt='phpBB3 QuickInstall Profiles Tab Install Options Alternate Environment' class='box-shadow' />
          </li>
         </ul>
        </li>
       </ul>
      </li>
      <li>Go to the Save profile fieldset. Save as new profile assigns a name to the QuickInstall profile. If an existing QuickInstall profile name is entered, the QuickInstall profile is overwritten.
       <ul>
        <li>In the Save as new profile field, use the default (default) or enter a QuickInstall profile name. In this example, <kbd>myProfile</kbd> was entered.</li>
       </ul>
      </li>
      <li>For all other settings use the default.</li>
      <li>Click <kbd>Save</kbd> (located in the Save profile fieldset).</li>
      <li>The <q>Your settings were successfully saved</q> report appears and the QuickInstall Boards tab appears to the left of the QuickInstall Profiles tab. If the QuickInstall Boards tab does not appear, press <kbd>F5</kbd> or click <kbd>Refresh/Reload</kbd>.</li>
      <li>The QuickInstall profile is created and ready for use.
       <div class='note normal'>In this example, the QuickInstall myProfile profile is stored in the QuickInstall software <span class='filename'>settings\myProfile.json</span> file. To delete a QuickInstall profile, close the web browser and delete the appropriately named QuickInstall profile file.</div>
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='createBoards'></a>5. Create phpBB Boards</h2>

     <p>After a QuickInstall profile is created, phpBB boards can be created. A phpBB board is a functional implementation of the phpBB board software.</p>

     <p>phpBB boards are created in the QuickInstall Boards tab. At the top of the QuickInstall Boards tab, a QuickInstall profile is selected. Some of the QuickInstall profile settings become the defaults in, and can be changed in, the QuickInstall Boards tab. This includes Alternate environment, which selects the installed phpBB board software to use as source files for the creation of a phpBB board.</p>

     <p>When a pbpBB board is created, the phpBB board software source files are copied from the QuickInstall <span class='filename'>sources</span> or <span class='filename'>sources\phpBB3_alt</span> directory to the QuickInstall <span class='filename'>boards</span> directory. The phpBB board software source files are not changed during this process, and, therefore, can serve repeatedly as original phpBB board software source files.</p>

     <p>To create phpBB boards:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to QuickInstall. In this example, QuickInstall is http://localhost/quickinstall/.</li>
      <li>The QuickInstall <b>Boards</b> tab is selected:
       <img src='/images/install_quickinstall_windows/qi_boards_tab_1024x270.gif' alt='phpBB3 QuickInstall Boards Tab' class='box-shadow' />
       <div class='note normal'>If the QuickInstall Boards tab is absent and the QuickInstall Profiles tab is selected, first create a QuickInstall profile per <a href='#createQuickInstallProfiles'>Create QuickInstall Profiles (above)</a>.</div>
      </li>
      <li>Go to the Profiles fieldset. Current profile selects the QuickInstall profile whose settings will be incorporated into the phpBB board.
       <ul>
        <li>In the Current profile dropdown:
         <ul>
          <li>If only one QuickInstall profile is created, the Current profile dropdown has only one option and there is nothing to do. Go to the next step. In this example, only one QuickInstall profile (myProfile) is created, it is the only option, and there is nothing to do. Go to the next step.</li>
          <li>If multiple QuickInstall profiles are created, select a QuickInstall profile.</li>
         </ul>
        </li>
       </ul>
      </li>
      <li>Go to the Create board fieldset.
       <ol>
        <li>Board name is the title that appears at the top of the phpBB board header.
         <ul>
          <li>In the Board name field, use the default (Testing Board) or enter a different name. In this example, <kbd>Testing Board</kbd> was entered.</li>
         </ul>
        </li>
        <li>Board description is the subtitle that appears underneath the board name in the phpBB board header.
         <ul>
          <li>In the Board description field, use the default (QuickInstall sandbox) or enter a different description. In this example, <kbd>For phpBB 3.3.1</kbd> was entered.</li>
         </ul>
        </li>
        <li><a id='createBoards_boardDatabaseAndDirectoryName'></a>Board database and directory name becomes: a.) The phpBB board database name, prefixed with <q>qi_</q>; b.) The directory under the QuickInstall <span class='filename'>boards</span> directory to which the phpBB board software source files are copied during the creation of the phpBB board (i.e., the phpBB board destination directory); and c.) The last directory in the phpBB board URI. Therefore, enter a name that makes sense for these purposes. It is recommended that the phpBB board software version is entered.
         <ul>
          <li>In the Board database and directory name field, enter a name. In this example, <kbd>phpbb331</kbd> was entered.</li>
         </ul>
        </li>
       </ol>
      </li>
      <li>Expand the Install options fieldset. Alternate environment selects the installed phpBB board software to use as source files for the creation of the phpBB board. If only one phpBB board software is installed, the Alternate environment dropdown has only one option. If multiple phpBB board software are installed, the Alternate environment dropdown has multiple options. In either case, the Default environment (latest phpBB) option always refers to the phpBB board software installed to the QuickInstall software <span class='filename'>sources</span> directory. Whether or not it is the <q>latest phpBB</q> is never actually determined and, therefore, could be incorrect. Subsequent phpBB board software installed to the QuickInstall software <span class='filename'>sources\phpBB3_alt</span> directory are listed in the Alternate environment dropdown by their <a href='#subsequentPhpbbBoardSoftwareFolderName'>phpBB board software folder name (above)</a>.
       <ul>
        <li>In the Alternate environment dropdown:
         <ul>
          <li>If only one phpBB board software is installed, the Alternate environment dropdown has only one option and there is nothing to do. Go to the next step.</li>
          <li>If multiple phpBB board software are installed, select a phpBB board software. In this example, multiple phpBB board software are installed and <kbd>Default environment (latest phpBB)</kbd> was selected:
           <img src='/images/install_quickinstall_windows/qi_boards_tab_create_board_install_options_alternate_environment_1024x120.gif' alt='phpBB3 QuickInstall Boards Tab Create Board Install Options Alternate Environment' class='box-shadow' />
          </li>
         </ul>
        </li>
       </ul>
      </li>
      <li>For all other settings use the default.</li>
      <li>Click <kbd>Create board</kbd> (located in the Create board fieldset) and be patient. The phpBB board creation can take a couple of minutes.</li>
      <li>Upon creating the phpBB board, QuickInstall loads the phpBB board into the web browser and logs into the phpBB board as the phpBB board Administrator using the <a href='#createQuickInstallProfiles_administratorUsernamePassword'>Administrator username/password (above)</a>:
       <img src='/images/install_quickinstall_windows/created_board_loaded_in_browser_1024x768.gif' alt='phpBB Board Successfully Created And Loaded In Web Browser' class='box-shadow' />
       <div class='note normal'>
        <ul>
         <li>The phpBB board URI paths through the QuickInstall software <span class='filename'>boards</span> directory, not the QuickInstall software <span class='filename'>sources</span> directory.</li>
         <li>The last directory in the phpBB board URI is the <a href='#createBoards_boardDatabaseAndDirectoryName'>board database and directory name (above)</a>.</li>
         <li>It is suggested that you add the phpBB board to your Favorites/Bookmarks.</li>
        </ul>
       </div>
      </li>
      <li>In the QuickInstall Boards tab left sidebar, the created phpBB boards are listed by their <a href='#createBoards_boardDatabaseAndDirectoryName'>board database and directory name (above)</a> and phpBB version:
       <img src='/images/install_quickinstall_windows/qi_installed_boards_arrow_1024x270.gif' alt='phpBB3 QuickInstall Installed Boards' class='box-shadow' />
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='installStyles'></a>6. Install phpBB Board Styles</h2>

     <p>A phpBB board style determines the look/appearance of a phpBB board. phpBB board style software refers to the files that constitute a phpBB board style. The files that constitute a phpBB board style are located in a phpBB board style software folder.</p>

     <p>phpBB board style software is installed on phpBB board software as phpBB board styles. Multiple phpBB board styles can be installed and each phpBB board has its own installed phpBB board style(s).</p>

     <p>phpBB board software includes a phpBB board style pre-configured as the phpBB board default style. More specifically, phpBB 3.2.x includes the phpBB prosilver 3.2.x board style pre-configured as the phpBB board default style. phpBB 3.3.x includes the phpBB prosilver 3.3.x board style pre-configured as the phpBB board default style.</p>

     <p>phpBB 3.2.x boards support phpBB 3.2.x board styles. phpBB 3.3.x boards support phpBB 3.3.x board styles.</p>

     <p>Some phpBB board styles are standalone styles and some are child styles. A standalone style is a fully developed/complete style that has no dependencies. The phpBB board default style, prosilver, is an example of a standalone style.</p>

     <p>Developing standalone styles from scratch is difficult. So, instead of developing standalone styles from scratch, most phpBB board style developers take an existing standalone style and modify it to their liking. There are two practical ways of doing this. First, edit the standalone style directly, thereby creating a fork/branch of the original standalone style. Second, do not edit the standalone style at all. Instead, create a separate phpBB board style that overlays/modifies the standalone style with the changes you would like to make. Here, the unmodified standalone style is known as the parent style, and the separate style that overlays/modifies the parent style is known as the child style. In this type of style relationship, the child style inherits the style of the parent style, and, therefore, the child style only needs to specify the changes to the parent style that you would like to make. As a result, however, the child style is only a partially developed/incomplete style that is dependent on the parent style. This means the use of a child style requires; 1.) installation of both the parent style and the child style, and 2.) that the child style, not the parent style, is selected as the phpBB board default style.</p>

     <p>prosilver Special Edition is an example of a child style. prosilver Special Edition is a child style of the phpBB standalone prosilver style. In other words, prosilver is the parent style of the prosilver Special Edition child style. When prosilver and prosilver Special Edition are installed and prosilver is selected as the phpBB board default style, prosilver functions as a standalone style. When prosilver and prosilver Special Edition are installed and prosilver Special Edition is selected as the phpBB board default style, prosilver functions as a parent style.</p>

     <p>Most phpBB board styles are child styles. Therefore, if you find a phpBB board style that you would like to modify, most likely that phpBB board style is a child style. To modify the child style, you can either edit the child style directly, or create a separate phpBB board style that overlays/modifies the child style with the changes you would like to make. The latter implies creating a child style of a child style (i.e., nesting child styles). Here, the unmodified child style serves as parent style, and the separate style that overlays/modifies the parent style is the child style of the child style. This means the use of the child style of the child style requires: 1.) installation of the parent style, the child style, and the child style of the child style; and 2.) that the child style of the child style, not the parent style or the child style, is selected as the phpBB board default style.</p>

     <p>Installing phpBB board styles is a two step process:</p>

     <ol>
      <li>Copy the phpBB board style software to the phpBB board software <span class='filename'>styles</span> directory.</li>
      <li>Install the phpBB board style via the phpBB board software Administration Control Panel (ACP).</li>
     </ol>

     <h3><a id='copyStyleSoftware'></a>6.1. Copy phpBB Board Style Software To The phpBB Board Software <span class='filename'>styles</span> Directory</h3>

     <p>The first step to installing phpBB board styles is to copy the phpBB board style software to the phpBB board software <span class='filename'>styles</span> directory. This makes the phpBB board style available to the phpBB board software Administration Control Panel (ACP) for installation.</p>

     <p>To copy phpBB board style software to the phpBB board software <span class='filename'>styles</span> directory:</p>

     <ol>
      <li>Download the phpBB board style software from <a href='https://www.phpbb.com/customise/db/styles/board_styles-12'>phpBB Board Styles (phpbb.com)</a>. If the phpBB board style is a child style and the parent style is not already installed on the phpBB board software, also download the parent style. In this example, the <a href='https://www.phpbb.com/customise/db/style/prosilver_special_edition/'>phpBB prosilver Special Edition 3.3.1 (phpbb.com)</a> style was downloaded. prosilver Special Edition 3.3.1 is a child style of prosilver 3.3.1. prosilver 3.3.1 is the phpBB 3.3.1 default style and, therefore, is already installed on phpBB 3.3.1 boards. As a result, in this example, there is no need to download a parent style.</li>
      <li>Extract the downloaded file(s). In this example, the downloaded <span class='filename'>prosilver_se_3.3.1.zip</span> file was extracted to the <span class='filename'>prosilver_se</span> folder.</li>
      <li>Copy the phpBB board style software folder(s) to the phpBB board software <span class='filename'>styles</span> directory. In this example, the <span class='filename'>prosilver_se</span> phpBB board style software folder was copied to the phpBB board software <span class='filename'>styles</span> directory as <span class='filename'>C:\\xampp\\htdocs\\quickinstall\\boards\\phpbb331\\styles\\prosilver_se</span>. As a result of the copy, the phpBB board software <span class='filename'>styles</span> directory contains the prosilver parent style (<span class='filename'>prosilver</span>) and the prosilver Special Edition child style (<span class='filename'>prosilver_se</span>):
       <img src='/images/install_quickinstall_windows/prosilver_se_copied_to_board_software_styles_directory_620x580.gif' alt='prosilver Special Edition Copied To phpBB Board Software styles Directory' class='box-shadow' />
       <div class='note normal'>The phpBB 3.2.x and 3.3.x board software <span class='filename'>styles\all</span> directory is not a phpBB board style software folder and can be ignored.</div>
      </li>
     </ol>

     <h3><a id='installStylesSubsec'></a>6.2. Install phpBB Board Styles</h3>

     <p>The second step to installing phpBB board styles is to formally install them. Installing phpBB board styles does two things:</p>

     <ul>
      <li>Lists the phpBB board styles in the phpBB board Administration Control Panel (ACP) | Customise | Style Management - Styles page.</li>
      <li>Activates the phpBB board styles. This lists the phpBB board styles as available options for selection as the phpBB board default style in all user contexts.</li>
     </ul>

     <p>To install phpBB board styles:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to the phpBB board. In this example, the phpBB board is http://localhost/quickinstall/boards/phpbb331/.</li>
      <li>Login to the Administration Control Panel (ACP) as the phpBB board Administrator:
       <ol>
        <li>Click <kbd>Login</kbd> in the board header. Login using the Administrator username/password entered in <a href='#createQuickInstallProfiles_administratorUsernamePassword'>Administrator username/password (above)</a>. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
        <li>Click <kbd>ACP</kbd> in the board header or <kbd>Administration Control Panel</kbd> at the bottom of the board. Login again using the Administrator username/password. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
       </ol>
      </li>
      <li>The ACP appears and the <b>General</b> tab is selected:
       <div class='note normal'>In this example, near the top of the APC the following message is displayed: <q>Your config file (<span class='filename'>config.php</span>) is currently world-writable. We strongly encourage you to change the permissions to 640 or at least to 644 (for example: <a href='https://en.wikipedia.org/wiki/Chmod'>chmod</a> 640 <span class='filename'>config.php</span>).</q> In this example, if you are using QuickInstall as <a href='#security'>intended (above)</a>, <span class='filename'>config.php</span> permissions are not important and the message can be ignored.</div>
      </li>
      <li>Click the <kbd>Customise</kbd> tab.</li>
      <li>The <b>Customise</b> web page appears. In the left sidebar under Style Management, click <kbd>Styles</kbd>.</li>
      <li>The <b>Styles</b> web page appears. Styles lists the installed phpBB board styles. In this example, the phpBB board default style, prosilver, is installed:
       <img src='/images/install_quickinstall_windows/apc_styles_prosilver_installed_1024x315.gif' alt='prosilver Style Installed' class='box-shadow' />
      </li>
      <li>In the left sidebar under Style Management, click <kbd>Install Styles</kbd>.</li>
      <li>The <b>Install styles</b> web page appears. Install styles lists the phpBB board styles that have been copied to the phpBB board software <span class='filename'>styles</span> directory, but have not been installed. For example, if a child style is listed and its parent style is not installed, the child style cannot be installed and it reports the required parent style. If the parent style is also listed, the child style is listed indented and underneath its parent style:
       <img src='/images/install_quickinstall_windows/apc_install_styles_parent_listed_not_installed_1024x404.gif' alt='Child And Parent Styles Copied But Not Installed' class='box-shadow' />
       If a child style is listed and its parent style is installed, the child style can be installed. In other words, when installing parent and child styles, the parent style must be installed first. In this example, because prosilver is already installed, prosilver is not listed and the copied prosilver Special Edition child style is listed as ready to be installed:
       <img src='/images/install_quickinstall_windows/apc_install_styles_prosilver_se_listed_1024x360.gif' alt='prosilver Special Edition Child Style Ready To Be Installed' class='box-shadow' />
      </li>
      <li>Under the Actions column, click <kbd>Install style</kbd>. Alternatively, check the prosilver Special Edition checkbox and click <kbd>Install styles</kbd>.</li>
      <li>The <q>Information: Style <q>style name</q> has been installed.</q> report appears. In this example, the <q>Information: Style <q>prosilver Special Edition</q> has been installed.</q> report appears:
       <img src='/images/install_quickinstall_windows/apc_install_styles_info_prosilver_se_installed_1024x315.gif' alt='Information prosilver Special Edition Child Style Installed' class='box-shadow' />
      </li>
      <li>The phpBB board style is installed.</li>
      <li>Click <kbd>Return to installed styles list</kbd>. Alternatively, in the left sidebar under Style Management, click <kbd>Styles</kbd>.</li>
      <li>The <b>Styles</b> web page appears. Styles lists the installed phpBB board styles. The phpBB board style you just installed is added to the list of installed phpBB board styles. In this example, the prosilver Special Edition child style is added to the list indented and underneath its prosilver parent style:
       <img src='/images/install_quickinstall_windows/apc_styles_both_installed_1024x360.gif' alt='prosilver And prosilver Special Edition Styles Installed' class='box-shadow' />
      </li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='selectDefaultStyle'></a>7. Select The phpBB Board Default Style For Different User Contexts</h2>

     <p>By default, installed phpBB board styles are activated. Activated phpBB board styles, not deactivated phpBB board styles, are listed as available options for selection as the phpBB board default style in the following user contexts:</p>

     <ul>
      <li>Guests (i.e., those who are not logged in). The phpBB board software allows the phpBB board Administrator to select the phpBB board default style for guests.</li>
      <li>New users (i.e., those who will register in the future). The phpBB board software allows the phpBB board Administrator to select the phpBB board default style for new users.</li>
      <li>Existing users (i.e., those who have registered). The phpBB board software allows logged in users to select a phpBB board default style for their own personal use.</li>
     </ul>

     <p>The phpBB board software provides a method for the phpBB board Administrator to select the phpBB board default style for guests and for new users, but not for existing users. Instead, the only apparent way for the phpBB board Administrator to select the phpBB board default style for existing users is an indirect, two step workaround which has the side effect of selecting the phpBB board default style for all users (i.e., guests, new users, and existing users). That this workaround selects the phpBB board default style for all users, not just for existing users, is probably of little consequence as the most likely reason for developing phpBB styles is to select them as the phpBB board default style for all users, not just for existing users.</p>

     <h3><a id='selectDefaultStyleGuests'></a>7.1. Select The phpBB Board Default Style For Guests</h3>

<!-- 7.1 confirmed 14 Aug 2020. -->

     <p>Selecting the phpBB board default style for guests does not affect the phpBB board default style for new users or existing users.</p>

     <p>To select the phpBB board default style for guests:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to the phpBB board. In this example, the phpBB board is http://localhost/quickinstall/boards/phpbb331/.</li>
      <li>Login to the Administration Control Panel (ACP) as the phpBB board Administrator:
       <ol>
        <li>Click <kbd>Login</kbd> in the board header. Login using the Administrator username/password entered in <a href='#createQuickInstallProfiles_administratorUsernamePassword'>Administrator username/password (above)</a>. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
        <li>Click <kbd>ACP</kbd> in the board header or <kbd>Administration Control Panel</kbd> at the bottom of the board. Login again using the Administrator username/password. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
       </ol>
      </li>
      <li>The ACP appears and the <b>General</b> tab is selected. In the left sidebar under Board Configuration, click <kbd>Board settings</kbd>.</li>
      <li>The <b>Board settings</b> web page appears.</li>
      <li>Go to the Board style fieldset. The Guest style dropdown selects the phpBB board default style for guests.
       <ul>
        <li>In the Guest style dropdown, select the phpBB board style to use as the phpBB board default style for guests. In this example, <kbd>prosilver Special Edition</kbd> was selected:
           <img src='/images/install_quickinstall_windows/apc_board_settings_guest_style_prosilver_se_arrow_1024x180.gif' alt='prosilver Special Edition Selected As phpBB Board Default Style For Guests' class='box-shadow' />
        </li>
       </ul>
      </li>
      <li>Click <kbd>Submit</kbd>.</li>
      <li>The <q>Information: Configuration updated successfully.</q> report appears.</li>
      <li>The phpBB board default style for guests is selected.</li>
     </ol>

     <h3><a id='selectDefaultStyleNewUsers'></a>7.2. Select The phpBB Board Default Style For New Users</h3>

<!-- 7.2 confirmed 14 Aug 2020. -->

     <p>Selecting the phpBB board default style for new users does not affect the phpBB board default style for guests or existing users.</p>

     <p>To select the phpBB board default style for new users:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to the phpBB board. In this example, the phpBB board is http://localhost/quickinstall/boards/phpbb331/.</li>
      <li>Login to the Administration Control Panel (ACP) as the phpBB board Administrator:
       <ol>
        <li>Click <kbd>Login</kbd> in the board header. Login using the Administrator username/password entered in <a href='#createQuickInstallProfiles_administratorUsernamePassword'>Administrator username/password (above)</a>. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
        <li>Click <kbd>ACP</kbd> in the board header or <kbd>Administration Control Panel</kbd> at the bottom of the board. Login again using the Administrator username/password. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
       </ol>
      </li>
      <li>The ACP appears and the <b>General</b> tab is selected</li>
      <li>There are two ways to select the phpBB board default style for new users:
       <ul>
        <li>Via General | Board Configuration - Board settings web page (recommended):
         <ol>
          <li>In the left sidebar under Board Configuration, click <kbd>Board settings</kbd>.</li>
          <li>The <b>Board settings</b> web page appears.</li>
          <li>Go to the Board style fieldset. The Default style dropdown selects the phpBB board default style for new users.
           <ul>
            <li>In the Default style dropdown, select the phpBB board style to use as the phpBB board default style for new users. In this example, <kbd>prosilver Special Edition</kbd> was selected:
           <img src='/images/install_quickinstall_windows/apc_board_settings_default_style_prosilver_se_arrow_1024x180.gif' alt='prosilver Special Edition Selected As The phpBB Board Default Style' class='box-shadow' />
            </li>
           </ul>
          </li>
          <li>Click <kbd>Submit</kbd>.</li>
          <li>The <q>Information: Configuration updated successfully.</q> report appears.</li>
          <li>The phpBB board default style for new users is selected.</li>
         </ol>
        </li>
        <li>Via Customise | Style Management - Styles web page:
         <ol>
          <li>Click the <kbd>Customise</kbd> tab.</li>
          <li>The <b>Customize</b> web page appears. In the left sidebar under Style Management, click <kbd>Styles</kbd>.</li>
          <li>The <b>Styles</b> web page appears. Under the Style Name column, the phpBB board default style for new users is listed in bold. In this example, prosilver is the phpBB board default style for new users:
           <img src='/images/install_quickinstall_windows/apc_styles_both_installed_prosilver_default_arrow_1024x360.gif' alt='prosilver And prosilver Special Edition Styles Installed With prosilver The phpBB Board Default Style' class='box-shadow' />
          </li>
          <li>To select the phpBB board default style for new users, under the Actions column, click <kbd>Details</kbd> corresponding to the phpBB board default style to use for new users. In this example, <kbd>Details</kbd> for prosilver Special Edition was clicked:
           <img src='/images/install_quickinstall_windows/apc_styles_both_installed_prosilver_default_prosilver_se_actions_details_arrow_1024x360.gif' alt='prosilver Special Edition Details' class='box-shadow' />
          </li>
          <li>The phpBB board style details appear. To use the phpBB board style as the phpBB board default style for new users, in the Make default style radio button group, check <kbd>Yes</kbd>:
           <img src='/images/install_quickinstall_windows/apc_styles_prosilver_se_details_arrow_1024x470.gif' alt='prosilver Special Edition Details Make Default Style Yes' class='box-shadow' />
          </li>
          <li>Click <kbd>Submit</kbd>.</li>
          <li>The phpBB board default style for new users is selected and the <b>Styles</b> web page appears. Under the Style Name column, the phpBB board default style for new users is listed in bold. If the phpBB board style you just selected to be the phpBB board default style for new users is not listed in bold, press <kbd>F5</kbd> or click <kbd>Refresh/Reload</kbd>. In this example, prosilver Special Edition is the phpBB board default style for new users:
           <img src='/images/install_quickinstall_windows/apc_styles_both_installed_prosilver_se_default_arrow_1024x360.gif' alt='prosilver And prosilver Special Edition Styles Installed With prosilver Special Edition The phpBB Board Default Style' class='box-shadow' />
          </li>
         </ol>
        </li>
       </ul>
      </li>
     </ol>

     <h3><a id='selectDefaultStyleAllUsers'></a>7.3. Select The phpBB Board Default Style For All Users</h3>

<!-- 7.3 confirmed 14 Aug 2020. -->

<!-- ACP | General | Board settings - Override user style does the following: 1.) Overrides existing user selected style, and 2.) Removes the UCP | Board preferences | Edit global settings - My board style dropdown. However, when turn off Override user style so that the My board style dropdown reappears, the existing user selected style returns to what they had selected; meaning, Override user style does just that, it overrides existing user selected style, it does not replace/change existing user selected style. Therefore, indeed the workaround described here is the proper way to actually change existing user selected style. -->

     <p>Unlike selecting the phpBB board default style for guests or new users, the phpBB board software does not provide a direct method for the phpBB board Administrator to select the phpBB board default style for all users. Instead, an indirect, two step workaround is used. First, the phpBB board style to use as the phpBB board default style for all users is selected as the phpBB board default style for new users. Then, all activated phpBB board styles except the phpBB board style for new users are deactivated. Deactivating all phpBB board styles except the phpBB board default style for new users forces the phpBB board default style for guests and for existing users to change to the phpBB board default style for new users. As a result of this two step workaround, the phpBB board default style for new users, guests, and existing users (i.e., all users) is selected.</p>

     <p>To select the phpBB board default style for all users:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to the phpBB board. In this example, the phpBB board is http://localhost/quickinstall/boards/phpbb331/.</li>
      <li>Login to the Administration Control Panel (ACP) as the phpBB board Administrator:
       <ol>
        <li>Click <kbd>Login</kbd> in the board header. Login using the Administrator username/password entered in <a href='#createQuickInstallProfiles_administratorUsernamePassword'>Administrator username/password (above)</a>. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
        <li>Click <kbd>ACP</kbd> in the board header or <kbd>Administration Control Panel</kbd> at the bottom of the board. Login again using the Administrator username/password. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
       </ol>
      </li>
      <li>The ACP appears and the <b>General</b> tab is selected.</li>
      <li>Select the phpBB board style to use as the phpBB board default style for all users as the phpBB board default style for new users per <a href='#selectDefaultStyleNewUsers'>Select The phpBB Board Default Style For New Users (above)</a>. In this example, prosilver Special Edition is the phpBB board style to use as the phpBB board default style for all users. Therefore, prosilver Special Edition was selected as the phpBB board default style for new users.</li>
      <li>Click the <kbd>Customise</kbd> tab.</li>
      <li>The <b>Customise</b> web page appears. In the left sidebar under Style Management, click <kbd>Styles</kbd>.</li>
      <li>The <b>Styles</b> web page appears. Under the Style Name column, the phpBB board default style for new users is listed in bold. In this example, prosilver Special Edition is the phpBB board default style for new users:
       <img src='/images/install_quickinstall_windows/apc_styles_both_installed_prosilver_se_default_arrow_1024x360.gif' alt='prosilver And prosilver Special Edition Styles Installed With prosilver Special Edition The phpBB Board Default Style' class='box-shadow' />
      </li>
      <li>For all of the phpBB board styles except the phpBB board default style for new users (i.e., for all of the phpBB styles listed with normal, not bold, text), under the Actions column, click <kbd>Deactivate</kbd>. In other words, deactivate all of phpBB board styles except the phpBB board default style for new users (i.e., deactivate all of phpBB board styles except the one listed in bold). In this example, <kbd>Deactivate</kbd> for prosilver was clicked:
       <img src='/images/install_quickinstall_windows/apc_styles_both_installed_prosilver_se_default_prosilver_actions_deactivate_arrow_1024x360.gif' alt='prosilver And prosilver Special Edition Styles Installed With prosilver Special Edition The phpBB Board Default Style Deactivate prosilver' class='box-shadow' />
      </li>
      <li>For all of the phpBB board styles just deactivated, under the Actions column, click <kbd>Activate</kbd>. In this example, <kbd>Activate</kbd> for prosilver was clicked:
       <img src='/images/install_quickinstall_windows/apc_styles_both_installed_prosilver_se_default_prosilver_actions_activate_arrow_1024x360.gif' alt='prosilver And prosilver Special Edition Styles Installed With prosilver Special Edition The phpBB Board Default Style Activate prosilver' class='box-shadow' />
      </li>
      <li>The phpBB board default style for all users is selected.</li>
     </ol>

    </section>
    <hr />
    <section>

     <h2><a id='developStyles'></a>8. Develop phpBB Board Styles</h2>

     <p>To reduce server-side processing load and to improve phpBB board performance, phpBB boards cache some files. Therefore, if an edit to a phpBB board style does not appear in the web browser after pressing <kbd>F5</kbd> or clicking <kbd>Refresh/Reload</kbd>, the phpBB board cache needs to be purged. Then press <kbd>F5</kbd> or click <kbd>Refresh/Reload</kbd>.</p>

     <p>To develop phpBB board styles:</p>

     <ol>
      <li>Start the web server and SQL database server. In this example, XAMPP Apache and MySQL were started.</li>
      <li>Point the web browser to the phpBB board. In this example, the phpBB board is http://localhost/quickinstall/boards/phpbb331/.</li>
      <li>Go to the web page(s) displaying the phpBB board styles that you want to develop.</li>
      <li>Edit the phpBB board styles.</li>
      <li>If you are not editing the phpBB board styles directly on the web server, then replace the original files on web server with the edited files.</li>
      <li>To see the effect of the edit, press <kbd>F5</kbd> or click <kbd>Refresh/Reload</kbd>.</li>
      <li>If the appearance of the web page does not change, purge the phpBB board cache:
       <ol>
        <li>Point the web browser to the phpBB board. In this example, the phpBB board is http://localhost/quickinstall/boards/phpbb331/.</li>
        <li>Login to the Administration Control Panel (ACP) as the phpBB board Administrator:
         <ol>
          <li>Click <kbd>Login</kbd> in the board header. Login using the Administrator username/password entered in <a href='#createQuickInstallProfiles_administratorUsernamePassword'>Administrator username/password (above)</a>. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
          <li>Click <kbd>ACP</kbd> in the board header or <kbd>Administration Control Panel</kbd> at the bottom of the board. Login again using the Administrator username/password. In this example, the <kbd>admin</kbd> username and <kbd>adminPass</kbd> password were entered.</li>
         </ol>
        </li>
        <li>The ACP appears and the <b>General</b> tab is selected.</li>
        <li>Go to the Resynchronise or reset statistics fieldset. For Purge the cache, click the <kbd>Run now</kbd> button.</li>
        <li>The <b>Confirm: Are you sure you wish to purge the cache?</b> dialog appears. Click <kbd>Yes</kbd>.</li>
        <li>The <q>Information: Cache successfully purged.</q> report appears. Click <kbd>Close</kbd> (the top right X).</li>
        <li>The phpBB board cache is purged.</li>
       </ol>
      </li>
      <li>Press <kbd>F5</kbd> or click <kbd>Refresh/Reload</kbd>.</li>
      <li>If the appearance of the web page still does not change, make sure the displayed web page is using the phpBB board styles that you are editing. One way to do this is to open the web browser DOM inspector and determine if the edits are present.</li>
     </ol>
    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>9. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='https://www.apachefriends.org/'>Apache Friends XAMPP (apachefriends.org)</a></li>
      <li><a href='https://www.phpbb.com/'>phpBB (phpbb.com)</a></li>
      <li><a href='https://github.com/phpbb/quickinstall/releases'>GitHub phpbb QuickInstall Releases (github.com)</a>
      <li><a href='https://www.phpbb.com/downloads/'>phpBB Downloads (phpbb.com)</a></li>
      <li><a href='https://www.phpbb.com/styles/'>phpBB Styles (phpbb.com)</a></li>
      <li><a href='https://www.phpbb.com/customise/db/styles/board_styles-12'>phpBB Board Styles (phpbb.com)</a></li>
      <li><a href='https://www.phpbb.com/customise/db/style/prosilver_special_edition/'>phpBB prosilver Special Edition (phpbb.com)</a></li>
      <li><a href='https://www.ampps.com/'>Softaculous AMPPS Stack (ampps.com)</a></li>
      <li><a href='https://bitnami.com/stack/phpbb'>Bitnami phpBB Stack (bitnami.com)</a></li>
      <li><a href='https://bitnami.com/stack/xampp#phpbb'>Bitnami phpBB Module For XAMPP (bitnami.com)</a></li>
      <li><a href='https://php.net/manual/en/book.mysqli.php'>MySQL Improved Extension (php.net)</a></li>
     </ul>

    </section>";
