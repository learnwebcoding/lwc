<?php
/* -------------------- INTRODUCTION -------------------- */

/* File: /web_server_root_directory/bom/versions_ie_ed_windows_sections.php.
 * Purpose: Web page <section></section> sections.
 * Used in: /web_server_root_directory/bom/versions_ie_ed_windows.php.
 * Last reviewed/updated: 07 Jan 2023.
 * Published: 21 Sep 2016. */
return
   "<section>

     <h2><a id='introduction'></a>1. Introduction</h2>

     <p>Web browsers differ with respect to their web language support. Therefore, before writing any code, an author needs to determine which web browsers need to be supported. With respect to Internet Explorer and Edge, simply knowing the version of Windows the users are running may suffice. For example, if users are running Windows 10 Version 2004, then they are using Edge Legacy 18, Internet Explorer 11, and/or Edge 79+ because Windows 10 Version 2004 supports Edge Legacy 18, Internet Explorer 11, and Edge 79+.</p>

     <p>Windows 98/ME/2000/XP/Vista/7/8/8.1/10, not Windows 11, include Internet Explorer. Windows 7/8.1, not Windows 8, support Edge. Windows 10 Versions 1507 - 2004 include Edge Legacy and Internet Explorer, with Edge Legacy being the default web browser, and support Edge 79+. Windows 10 Versions 20H2 and newer include Edge and Internet Explorer, with Edge being the default web browser. Windows 11 includes Edge, not Internet Explorer.</p>

     <h3><a id='releaseDate'></a>1.1. Release Date Of Internet Explorer 7+ And Edge Standalone Installers</h3>

     <p>The following table lists the release date of Internet Explorer 7+ and Edge standalone installers, not the release date of Internet Explorer 7+ and Edge as included with the release of Windows:</p>

     <table>
      <caption>Release Date Of Internet Explorer 7+ And Edge Standalone Installers</caption>
      <thead>
       <tr>
        <th>Version</th>
        <th>IE7</th>
        <th>IE8</th>
        <th>IE9</th>
        <th>IE10</th>
        <th>IE11</th>
        <th>ED12 - 18<br />
         (Edge Legacy 12 - 18)<br />
         (EdgeHTML based)</th>
        <th>ED79+<br />
         (Edge 79+)<br />
         (Chromium based)</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>Released</th>
        <td>06 May 2008</td>
        <td>19 Mar 2009</td>
        <td>14 Mar 2011</td>
        <td>25 Feb 2013</td>
        <td>06 Nov 2013</td>
        <td>-</td>
        <td>15 Jan 2020</td>
       </tr>
      <tbody>
     </table>

<!-- All operating system installations fresh/clean/custom (not upgrade) using default/recommended settings. -->

<!--
     <p class='subsectionTitle'><a id='toc1_2'></a>1.2.&nbsp;&nbsp;Windows 98/ME/2000/XP/Vista/7/8/8.1/10 Installations</p>

     <ul>
      <li>Windows 98 = Installed Windows 98 Second Edition English Upgrade Retail Part No. X04-14318.</li>
      <li>Windows ME = Installed Windows Millennium Edition English Upgrade Retail Part No. X05-60892.</li>
      <li>Windows 2000 Pro SP3 = Installed Windows 2000 Professional with Service Pack 3 English Upgrade Retail part No. X08-83652 Includes SP3 Retail.</li>
      <li>Windows 2000 Pro SP4 = Windows 2000 Pro SP3 (from above) plus installed Windows 2000 Service Pack 4 Network Install For IT Professionals 26 Jun 2003 W2KSP4_EN.EXE.</li>
      <li>Windows XP = Installed from MSDN subscriptions: 1.) Windows XP Home Edition (English) - ISO CD Image en_winxp_home_x86_build2600.iso, and 2.) Windows XP Professional (English) en_winxp_pro_x86_build2600_iso.img.</li>
      <li>Windows XP SP1 = Installed Windows XP Home Edition with Service Pack 1 English (x86) Upgrade Retail Part No. X08-88344 Volume Label XRMHCCP_EN, which includes Windows XP Service Pack 1, not Windows XP Service Pack 1a.</li>
      <li>Windows XP SP1a = 1.) Installed Windows XP Home Edition with Service Pack 1a English (x86) Upgrade Retail Part No. X08-88344 Volume Label X1AHCCP_EN, which includes Windows XP Service Pack 1a, not Windows XP Service Pack 1, and 2.) Windows XP Professional (from 'Windows XP' above) plus installed Windows XP Service Pack 1a Network Install 03 Feb 2003 xpsp1a_en_x86.exe.</li>
      <li>Windows XP SP2 = Installed from MSDN subscriptions: 1.) Windows XP Home Edition with Service Pack 2 (English) en_winxp_home_with_sp2.iso, and 2.) Windows XP Professional with Service Pack 2 (English) en_winxp_pro_with_sp2.iso.</li>
      <li>Windows XP SP3 = Installed from MSDN subscriptions: 1.) Windows XP Home with Service Pack 3 (x86) - CD (English) en_windows_xp_home_with_service_pack_3_x86_cd_x14-92413.iso, and 2.) Windows XP Professional with Service Pack 3 (x86) - CD (English) en_windows_xp_professional_with_service_pack_3_x86_cd_x14-80428.iso.</li>
      <li>Windows Vista = Installed Vista Home Basic and Vista Ultimate from MSDN subscriptions: 1.) Windows Vista (x86) - DVD (English) en_windows_vista_x86_dvd_x12-34293.iso, and 2.) Windows Vista (x64) - DVD (English) en_windows_vista_x64_dvd_x12-40712.iso.</li>
      <li>Windows Vista SP1 = Installed Windows Vista Home Basic from MSDN subscriptions: 1.) Windows Vista With Service Pack 1 (x86) - DVD (English) en_windows_vista_with_service_pack_1_x86_dvd_x14-29594.iso, and 2.) Windows Vista With Service Pack 1 (x64) - DVD (English) en_windows_vista_with_service_pack_1_x64_dvd_x14-29595.iso.</li>
      <li>Windows Vista SP2 = Installed Windows Vista Home Basic and Vista Ultimate from MSDN subscriptions: 1.) Windows Vista With Service Pack 2 (x86) - DVD (English) en_windows_vista_with_sp2_x86_dvd_342266.iso, and 2.) Windows Vista With Service Pack 2 (x64) - DVD (English) en_windows_vista_sp2_x64_dvd_342267.iso.</li>
      <li>Windows 7 = Installed from MSDN subscriptions: 1.) Windows 7 Home Premium (x86) - DVD (English) en_windows_7_home_premium_x86_dvd_x15-65732.iso, 2.) Windows 7 Home Premium (x64) - DVD (English) en_windows_7_home_premium_x64_dvd_x15-65733.iso, 3.) Windows 7 Professional (x86) - DVD (English) en_windows_7_professional_x86_dvd_x15-65804.iso, and 4.) Windows 7 Professional (x64) - DVD (English) en_windows_7_professional_x64_dvd_x15-65805.iso.</li>
      <li>Windows 7 SP1 = Installed from MSDN subscriptions: 1.) Windows 7 Home Premium With Service Pack 1 (x86) - DVD (English) Media Refresh en_windows_7_home_premium_with_sp1_x86_dvd_u_676701.iso, 2.) Windows 7 Home Premium With Service Pack 1 (x64) - DVD (English) Media Refresh en_windows_7_home_premium_with_sp1_x64_dvd_u_676549.iso, 3.) Windows 7 Professional With Service Pack 1 (x86) - DVD (English) Media Refresh en_windows_7_professional_with_sp1_x86_dvd_u_677056.iso, and 4.) Windows 7 Professional With Service Pack 1 (x64) - DVD (English) Media Refresh en_windows_7_professional_with_sp1_x64_dvd_u_676939.iso.</li>
      <li>Windows 8 = Installed Windows 8 Professional from MSDN subscriptions: 1.) Windows 8 (multiple editions) (x86) - DVD (English) en_windows_8_x86_dvd_915417.iso, and 2.) Windows 8 (multiple editions) (x64) - DVD (English) en_windows_8_x64_dvd_915440.iso.</li>
      <li>Windows 8.1 = Installed Windows 8.1 Professional from MSDN subscriptions: 1.) Windows 8.1 (multiple editions) (x86) - DVD (English) en_windows_8_1_x86_dvd_2707392.iso, and 2.) Windows 8.1 (multiple editions) (x64) - DVD (English) en_windows_8_1_x64_dvd_2707217.iso.</li>
      <li>Windows 8.1 Update Apr 2014 = Installed Windows 8.1 Professional from MSDN subscriptions: 1.) Windows 8.1 With Update (multiple editions) (x86) - DVD (English) en_windows_8_1_with_update_x86_dvd_4065105.iso, and 2.) Windows 8.1 With Update (multiple editions) (x64) - DVD (English) en_windows_8_1_with_update_x64_dvd_4065090.iso. NOTE: Update is Apr 2014 KB2919355.</li>
      <li>Windows 8.1 Update Nov 2014 = Installed Windows 8.1 Professional from MSDN subscriptions: 1.) Windows 8.1 With Update (multiple editions) (x86) - DVD (English) en_windows_8_1_with_update_x86_dvd_6051550.iso, and 2.) Windows 8.1 With Update (multiple editions) (x64) - DVD (English) en_windows_8_1_with_update_x64_dvd_6051480.iso. NOTE: Update is Nov 2014 KB3000850.</li>
      <li>Windows 10 Version 1507 (10.0.10240) = Installed Windows 10 Home and Windows 10 Professional from MSDN subscriptions: 1.) Windows 10 (Multiple Editions) (x86) - DVD (English) en_windows_10_multiple_editions_x86_dvd_6848465.iso, and 2.) Windows 10 (Multiple Editions) (x64) - DVD (English) en_windows_10_multiple_editions_x64_dvd_6846432.iso.</li>
      <li>Windows 10 Version 1511 (10.0.10586.0) = Installed Windows 10 Home and Windows 10 Professional from MSDN subscriptions: 1.) Windows 10 (Multiple Editions) Version 1511 (x86) - DVD (English) en_windows_10_multiple_editions_version_1511_x86_dvd_7223716.iso, and 2.) Windows 10 (Multiple Editions) Version 1511 (x64) - DVD (English) en_windows_10_multiple_editions_version_1511_x64_dvd_7223712.iso.</li>
      <li>Windows 10 Version 1607 (10.0.14393.0) = Installed Windows 10 Home and Windows 10 Professional from MSDN subscriptions: 1.) Windows 10 (Multiple Editions) Version 1607 (Updated Jul 2016) (x86) - DVD (English) en_windows_10_multiple_editions_version_1607_updated_jul_2016_x86_dvd_9053863.iso, and 2.) Windows 10 (Multiple Editions) Version 1607 (Updated Jul 2016) (x64) - DVD (English) en_windows_10_multiple_editions_version_1607_updated_jul_2016_x64_dvd_9058187.iso.</li>
      <li>Windows 10 Version 1703 (10.0.15063.0) = Installed Windows 10 Professional from MSDN subscriptions: 1.) Windows 10 (Multiple Editions) Version 1703 (Updated March 2017) (x86) - DVD (English) en_windows_10_multiple_editions_version_1703_updated_march_2017_x86_dvd_10188977.iso, and 2.) Windows 10 (Multiple Editions) Version 1703 (Updated March 2017) (x64) - DVD (English) en_windows_10_multiple_editions_version_1703_updated_march_2017_x64_dvd_10189288.iso.</li>

      Since the version of software included with Windows has been the same for Windows 32-bit and 64-bit, for now on check 64-bit, not 32-bit and 64-bit.

      <li>Windows 10 Version 1709 (10.0.16299.15) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (multi-edition) Version 1709 (Updated Sept 2017) (x64) - DVD (English) en_windows_10_multi-edition_version_1709_updated_sept_2017_x64_dvd_100090817.iso.</li>
      <li>Windows 10 Version 1803 (10.0.17134.1) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 1803 (Updated March 2018) (x64) - DVD (English) en_windows_10_consumer_editions_version_1803_updated_march_2018_x64_dvd_12063379.iso.</li>
      <li>Windows 10 Version 1809 v1 02Oct18 (10.0.17763.1) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer edition) Version 1809 (Updated Sept 2018) (x64) - DVD (English) en_windows_10_consumer_edition_version_1809_updated_sept_2018_x64_dvd_5c2f3f9a.iso.</li>
      <li>Windows 10 Version 1809 v2 13Nov18 (10.0.17763.107) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer edition) Version 1809 (Updated Sept 2018) (x64) - DVD (English) Win10_1809Oct_English_x64.iso.</li>
      <li>Windows 10 Version 1903 (10.0.18362.30) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 1903 (x64) - DVD (English) en_windows_10_consumer_editions_version_1903_x64_dvd_b980e68c.iso.</li>
      <li>Windows 10 Version 1909 (10.0.18363.418) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 1909 (x64) - DVD (English) en_windows_10_consumer_editions_version_1909_x64_dvd_be09950e.iso.</li>
      <li>Windows 10 Version 2004 (10.0.19041.264) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 2004 (updated May 2020) (x64) - DVD (English) en_windows_10_consumer_editions_version_2004_updated_may_2020_x64_dvd_36d61c40.iso.</li>
      <li>Windows 10 Version 20H2 (10.0.19042.508) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 20H2 (x64) - DVD (English) en_windows_10_consumer_editions_version_20h2_x64_dvd_ab0e3e0a.iso.</li>
      <li>Windows 10 Version 21H1 (10.0.19043.928) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 21H1 (x64) - DVD (English) en_windows_10_consumer_editions_version_21h1_x64_dvd_540c0dd4.iso.</li>
      <li>Windows 10 Version 21H2 (10.0.19044.1288) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 21H2 (x64) - DVD (English) en-us_windows_10_consumer_editions_version_21h2_x64_dvd_6cfdb144.iso.</li>
      <li>Windows 10 Version 22H2 (10.0.19045.2006) = Installed Windows 10 Professional from MSDN subscriptions: Windows 10 (consumer editions) Version 22H2 (x64) - DVD (English) en-us_windows_10_consumer_editions_version_22h2_x64_dvd_8da72ab3.iso.</li>
      <li>Windows 11 Version 21H2 (10.0.22000.194) = Installed Windows 11 Professional from MSDN subscriptions: Windows 11 (consumer editions) (x64) - DVD (English) en-us_windows_11_consumer_editions_x64_dvd_bd3cf8df.iso.</li>
      <li>Windows 11 Version 22H2 (10.0.22621.525) = Installed Windows 11 Professional from MSDN subscriptions: Windows 11 (consumer editions) Version 22H2 (Updated Sep 2022) (x64) - DVD (English) en-us_windows_11_consumer_editions_version_22h2_updated_sep_2022_x64_dvd_f408dad5.iso. NOTE: This is Windows 11 Version 22H2 28Sep22 build 10.0.22621.525, not Windows 11 Version 22H2 20Sep22 build 10.0.22621.521, the latter of which, apparently, was not released through official channels as a general availability ISO.)</li>
     </ul>
-->

     <h3><a id='abbreviations'></a>1.2. Abbreviations</h3>

     <ul>
      <li>IE = Internet Explorer.</li>
      <li>ED = Edge Legacy 12 - 18 (EdgeHTML based) and Edge 79+ (Chromium based).</li>
      <li>SP# = Service Pack #.</li>
      <li>98 = Windows 98 = Windows 98 Second Edition.</li>
      <li>ME = Windows ME = Windows Millennium Edition.</li>
      <li>2000 = 2000 Pro = Windows 2000 Pro = Windows 2000 Professional.</li>
     </ul>

    </section>
    <hr />
    <section>

     <h2><a id='w98wme'></a>2. Versions Of Internet Explorer Included With And Supported By Windows 98/ME</h2>

     <table>
      <caption>Versions Of Internet Explorer Included With And Supported By Windows 98/ME</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>98<br />
         (4.10.2222 A)</th>
        <th>ME<br />
         (4.90.3000)</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>30 Jun 1998</td><!-- http://support.microsoft.com/lifecycle/?p1=6898 -->
        <td>31 Dec 2000</td><!-- http://support.microsoft.com/lifecycle/?p1=6519 -->
       </tr>
       <tr>
        <th>Included With<br />
         (Cipher Strength)</th>
        <td>IE5.00.2614.3500<br />
         (40-bit)</td>
        <td>IE5.50.4134.0100<br />
         (128-bit)</td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>IE5.5, IE6</td>
        <td>IE6</td>
       </tr>
      </tbody>
     </table>

     <h2><a id='w2kwxp'></a>3. Versions Of Internet Explorer Included With And Supported By Windows 2000/XP</h2>

     <table>
      <caption>Versions Of Internet Explorer Included With And Supported By Windows 2000/XP</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>2000 Pro SP3<br />
         (5.00.2195)</th>
        <th>2000 Pro SP4<br />
         (5.00.2195)</th>
        <th>XP<br />
         (5.1.2600)</th>
        <th>XP SP1/SP1a<br />
         (5.1.2600)</th>
        <th>XP SP2<br />
         (5.1.2600)</th>
        <th>XP SP3<br />
         (5.1.2600)</th>
        </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>01 Aug 2002</td><!-- http://support.microsoft.com/lifecycle/?p1=3074 -->
        <td>26 Jun 2003</td><!-- http://support.microsoft.com/lifecycle/?p1=3075 -->
        <td>31 Dec 2001</td><!-- http://support.microsoft.com/lifecycle/?p1=3223 -->
        <td>
         <ul>
          <li>SP1: 30 Aug 2002.</li>
          <li>SP1a: 03 Feb 2003.</li>
         </ul>
        </td><!-- XPSP1: http://support.microsoft.com/lifecycle/?p1=3224, XPSP1a: http://support.microsoft.com/lifecycle/?p1=3225 -->
        <td>17 Sep 2004</td><!-- http://support.microsoft.com/lifecycle/?p1=6794 -->
        <td>06 May 2008</td><!-- Secure Windows Installation (old version). -->
       </tr>
       <tr>
        <th>Included With<br />
         (Cipher Strength)</th>
        <td>IE5.00.3502.1000<br />
         (128-bit)</td>
        <td>IE5.00.3700.1000<br />
         (128-bit)</td>
        <td>IE6.0.2600.0000<br />
         (128-bit)</td>
        <td>IE6.0.2800.1106<br />
         (128-bit)</td>
        <td>IE6.0.2900.2180<br />
         (128-bit)</td>
        <td>IE6.0.2900.5512<br />
         (128-bit)</td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>IE5.5, IE6</td>
        <td>IE5.5, IE6</td>
        <td>-</td>
        <td>-</td>
        <td>IE7, IE8</td>
        <td>IE7, IE8</td>
       </tr>
      </tbody>
     </table>

     <h2><a id='wvistaw7'></a>4. Versions Of Internet Explorer Included With And Supported By Windows Vista/7</h2>

     <div class='note normal'>
      <ul>
       <li>On Windows Vista 64-bit, the default version of Internet Explorer is Internet Explorer 32-bit, not Internet Explorer 64-bit.</li>
       <li>On Windows 7 64-bit, the default version of Internet Explorer 8 - 9 is Internet Explorer 32-bit, not Internet Explorer 64-bit.</li>
       <li>Internet Explorer 10+ is available only as a 32-bit application, not as a 32-bit and a 64-bit application.</li>
      </ul>
     </div>

     <table>
      <caption>Versions Of Internet Explorer Included With And Supported By Windows Vista/7</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>Vista<br />
         (6.0.6000)</th>
        <th>Vista SP1<br />
         (6.0.6001)</th>
        <th>Vista SP2<br />
         (6.0.6002)</th>
        <th>7<br />
         (6.1.7600)</th>
        <th>7 SP1<br />
         (6.1.7601)</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>30 Jan 2007</td><!-- http://blogs.windows.com/windows/archive/b/windowsvista/archive/2007/01/30/it-s-here.aspx -->
        <td>18 Mar 2008</td><!-- http://blogs.windows.com/windows/archive/b/windowsvista/archive/2008/02/04/announcing-the-rtm-of-windows-vista-sp1.aspx,  http://blogs.windows.com/windows/archive/b/windowsvista/archive/2008/03/18/windows-vista-sp1-released-to-windows-update.aspx, http://www.microsoft.com/en-us/download/details.aspx?id=30 -->
        <td>26 May 2009</td><!-- http://blogs.windows.com/windows/archive/b/windowsvista/archive/2009/04/28/windows-vista-sp2-rtm-windows-vista-sp1-blocker-tool-removed.aspx, http://blogs.windows.com/windows/archive/b/windowsvista/archive/2009/05/26/windows-vista-and-windows-server-2008-sp2-rtw.aspx -->
        <td>22 Oct 2009</td><!-- http://blogs.windows.com/windows/archive/b/windows7/archive/2009/06/02/the-date-for-general-availability-ga-of-windows-7-is.aspx, http://support.microsoft.com/lifecycle/?p1=14481 -->
        <td>22 Feb 2011</td><!-- http://blogs.windows.com/windows/b/bloggingwindows/archive/2011/02/09/announcing-availability-of-windows-7-and-windows-server-2008-r2-sp1.aspx,
http://blogs.windows.com/windows/b/bloggingwindows/archive/2011/02/22/windows-7-sp1-now-available-for-everyone.aspx -->
       </tr>
       <tr>
        <th>Included With<br />
         (Cipher Strength)</th>
        <td>IE7.0.6000.16386<br />
         (256-bit)</td>
        <td>IE7.0.6001.18000<br />
         (256-bit)</td>
        <td>IE7.0.6002.18005<br />
         (256-bit)</td>
        <td>IE8.0.7600.16385<br />
         (256-bit)</td>
        <td>IE8.0.7601.17514<br />
         (256-bit)</td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>IE8</td>
        <td>IE8</td>
        <td>IE8, IE9</td>
        <td>IE9, ED79+</td>
        <td>IE9, IE10, IE11, ED79+</td>
       </tr>
      </tbody>
     </table>

     <h2><a id='w8w81'></a>5. Versions Of Internet Explorer Included With And Supported By Windows 8/8.1</h2>

     <div class='note normal'>
      <ul>
       <li>On Windows 8/8.1, the default version of Internet Explorer is Internet Explorer Desktop, not Internet Explorer Metro.</li>
       <li>On Windows 8/8.1 64-bit, Internet Explorer Desktop is 32-bit and Internet Explorer Metro is 64-bit.</li>
       <li>Internet Explorer 11.0 was released for Windows 7, not Windows 8.</li>
      </ul>
     </div>

     <table>
      <caption>Versions Of Internet Explorer Included With And Supported By Windows 8/8.1</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>8<br />
         (6.2.9200)</th>
        <th>8.1<br />
         (6.3.9600)</th>
        <th>8.1 Update Apr 2014<br />
         KB2919355<br />
         (6.3.9600)</th>
        <th>8.1 Update Nov 2014<br />
         KB3000850<br />
         (6.3.9600)</th>
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>26 Oct 2012</td><!-- http://blogs.windows.com/windows/b/bloggingwindows/archive/2012/07/18/windows-8-will-be-available-on.aspx -->
        <td>17 Oct 2013</td><!-- http://blogs.windows.com/windows/b/business/archive/2013/10/17/windows-8-1-one-vision-one-platform-for-everything-you-do-at-work.aspx -->
        <td>08 Apr 2014</td><!-- http://blogs.windows.com/windows/b/windowsexperience/archive/2014/04/02/windows-8-1-update-important-refinements-to-the-windows-experience.aspx,
http://blogs.windows.com/windows/b/windowsexperience/archive/2014/04/08/why-i-love-today-s-windows-8-1-update.aspx -->
        <td>17 Nov 2014</td>
       </tr>
       <tr>
        <th>Included With</th>
        <td>IE10.0.9200.16384</td>
        <td>IE11.0.9600.16384</td>
        <td>IE11.0.9600.17031</td>
        <td>IE11.0.9600.17416</td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>-</td>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
       </tr>
      <tbody>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='w10'></a>6. Versions Of Edge And Internet Explorer Included With And Supported By Windows 10</h2>

     <div class='note normal'>
      <ul>
       <li>On Windows 10, the default web browser is Edge, not Internet Explorer.</li>
       <li>On Windows 10 64-bit, Edge is 64-bit and Internet Explorer is 32-bit.</li>
      </ul>
     </div>

     <table>
      <caption>Versions Of Edge And Internet Explorer Included With And Supported By Windows 10</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>10 Version 1507<br />
         (10.0.10240)</th><!-- Threshold 1. A.k.a., 10, 10 Initial Version, 10 Gold. -->
        <th>10 Version 1511<br />
         (10.0.10586.0)</th><!-- Threshold 2/November Update -->
        <th>10 Version 1607<br />
         (10.0.14393.0)</th><!-- Redstone 1/Anniversary Update -->
        <th>10 Version 1703<br />
         (10.0.15063.0)</th><!-- Redstone 2/Creators Update -->
        <th>10 Version 1709<br />
         (10.0.16299.15)</th><!-- Redstone 3/Fall Creators Update -->
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>29 Jul 2015</td>
        <td>12 Nov 2015</td>
        <td>02 Aug 2016</td>
        <td>11 Apr 2017</td>
        <td>17 Oct 2017</td>
       </tr>
       <tr>
        <th>Included With</th>
        <td>
         <ul>
          <li>ED12<br />
           (Edge 20.10240.16384.0)<br />
           (EdgeHTML 12.10240).</li>
          <li>IE11.0.10240.16384.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED13<br />
           (Edge 25.10586.0.0)<br />
           (EdgeHTML 13.10586).</li>
          <li>IE11.0.10586.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED14<br />
           (Edge 38.14393.0.0)<br />
           (EdgeHTML 14.14393).</li>
          <li>IE11.0.14393.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED15<br />
           (Edge 40.15063.0.0)<br />
           (EdgeHTML 15.15063).</li>
          <li>IE11.0.15063.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED16<br />
           (Edge 41.16299.15.0)<br />
           (EdgeHTML 16.16299).</li>
          <li>IE11.15.16299.0.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
       </tr>
      <tbody>
     </table>

     <table>
      <caption>Versions Of ED And IE Included With And Supported By Windows 10</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>10 Version 1803<br />
         (10.0.17134.1)</th><!-- Redstone 4/April 2018 Update -->
        <th>10 Version 1809 <a id='1_1809_return'></a><a href='#1_1809'>(1)</a><br />
         (10.0.17763.1)</th><!-- Redstone 5/October 2018 Update -->
        <th>10 Version 1809 <a id='2_1809_return'></a><a href='#2_1809'>(2)</a><br />
         (10.0.17763.107)</th><!-- Redstone 5/October 2018 Update -->
        <th>10 Version 1903<br />
         (10.0.18362.30)</th><!-- 19H1/May 2019 Update -->
        <th>10 Version 1909<br />
         (10.0.18363.418)</th><!-- 19H2/November 2019 Update -->
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>30 Apr 2018</td>
        <td>02 Oct 2018</td>
        <td>13 Nov 2018</td>
        <td>21 May 2019</td>
        <td>12 Nov 2019</td>
       </tr>
       <tr>
        <th>Included With</th>
        <td>
         <ul>
          <li>ED17<br />
           (Edge 42.17134.1.0)<br />
           (EdgeHTML 17.17134).</li>
          <li>IE11.1.17134.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED18<br />
           (Edge 44.17763.1.0)<br />
           (EdgeHTML 18.17763).</li>
          <li>IE11.1.17763.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED18<br />
           (Edge 44.17763.1.0)<br />
           (EdgeHTML 18.17763).</li>
          <li>IE11.55.17763.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED18<br />
           (Edge 44.18362.1.0)<br />
           (EdgeHTML 18.18362).</li>
          <li>IE11.1.18362.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED18<br />
           (Edge 44.18362.387.0)<br />
           (EdgeHTML 18.18363).</li>
          <li>IE11.418.18362.0.</li>
         </ul>
        </td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
        <td>ED79+</td>
       </tr>
      <tbody>
      <tfoot>
       <tr>
        <td colspan='6'>
         <a id='1_1809'></a><a href='#1_1809_return'>(1)</a><a id='2_1809'></a><a href='#2_1809_return'>(2)</a> There was two official releases of Windows 10 Version 1809; 1.) Build 10.0.17763.1 released 02 Oct 2018, and 2.) Build 10.0.17763.107 released 13 Nov 2018. For additional information, see <a href='https://blogs.windows.com/windowsexperience/2018/10/09/updated-version-of-windows-10-october-2018-update-released-to-windows-insiders/'>Updated Version Of Windows 10 October 2018 Update Released To Windows Insiders (blogs.windows.com)</a> and <a href='https://blogs.windows.com/windowsexperience/2018/11/13/resuming-the-rollout-of-the-windows-10-october-2018-update/'>Resuming The Rollout Of The Windows 10 October 2018 Update (blogs.windows.com)</a>.
        </td>
       </tr>
      </tfoot>
     </table>

     <table>
      <caption>Versions Of ED And IE Included With And Supported By Windows 10</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>10 Version 2004 <a id='1_W10_2004_return'></a><a href='#1_W10_2004'>(1)</a><br />
         (10.0.19041.264)</th><!-- 20H1/May 2020 Update -->
        <th>10 Version 20H2 <a id='2_W10_2004_return'></a><a href='#2_W10_2004'>(2)</a><br />
         (10.0.19042.508)</th><!-- 20H2/October 2020 Update -->
        <th>10 Version 21H1<br />
         (10.0.19043.928)</th><!-- 21H1/May 2021 Update -->
        <th>10 Version 21H2<br />
         (10.0.19044.1288)</th><!-- 21H2/November 2021 Update -->
        <th>10 Version 22H2<br />
         (10.0.19045.2006)</th><!-- 22H2/2022 Update -->
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>27 May 2020</td>
        <td>20 Oct 2020</td>
        <td>18 May 2021</td>
        <td>16 Nov 2021</td>
        <td>18 Oct 2022</td>
       </tr>
       <tr>
        <th>Included With</th>
        <td>
         <ul>
          <li>ED18<br />
           (Edge 44.19041.1.0)<br />
           (EdgeHTML 18.19041).</li>
          <li>IE11.264.19041.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED84.0.522.52.</li>
          <li>IE11.508.19041.0.</li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED89.0.774.68.</li>
          <li>IE11.?. <a id='3_W10_2004_return'></a><a href='#3_W10_2004'>(3)</a></li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED92.0.902.67.</li>
          <li>IE11.?. <a id='4_W10_2004_return'></a><a href='#4_W10_2004'>(4)</a></li>
         </ul>
        </td>
        <td>
         <ul>
          <li>ED92.0.902.67.</li>
          <li>IE11.?. <a id='5_W10_2004_return'></a><a href='#5_W10_2004'>(5)</a></li>
         </ul>
        </td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>ED79+</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
       </tr>
      <tbody>
      <tfoot>
       <tr>
        <td colspan='6'>
         <a id='1_W10_2004'></a><a href='#1_W10_2004_return'>(1)</a> Edge (Chromium based) was released 15 Jan 2020. Windows 10 Version 2004 was released 27 May 2020. Windows 10 Version 2004 includes Edge Legacy (EdgeHTML based), not Edge (Chromium based).<br />
         <a id='2_W10_2004'></a><a href='#2_W10_2004_return'>(2)</a> Windows 10 Version 20H2 includes Edge (Chromium based), not Edge Legacy (EdgeHTML based).<br />
         <a id='3_W10_2004'></a><a href='#3_W10_2004_return'>(3)</a><a id='4_W10_2004'></a><a href='#4_W10_2004_return'>(4)</a><a id='5_W10_2004'></a><a href='#5_W10_2004_return'>(5)</a> The Internet Explorer full version number (including version major, minor, and dot values) is obtained via <kbd>Tools | About Internet Explorer</kbd>. However, on Windows 10 Version 21H1 and 21H2, <kbd>Tools | About Internet Explorer</kbd> reports <span class='filename'>winver.exe</span> information, not the typical Internet Explorer information including the Internet Explorer full version number. Therefore, the Internet Explorer full version number is reported as <q>IE11.?</q>.
        </td>
       </tr>
      </tfoot>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='w11'></a>7. Versions Of Edge Included With And Supported By Windows 11</h2>

     <table>
      <caption>Versions Of Edge Included With And Supported By Windows 11</caption>
      <thead>
       <tr>
        <th>Windows<br />
         (Build)</th>
        <th>11 Version 21H2<br />
         (10.0.22000.194)</th><!-- 21H2/Original Release -->
        <th>11 Version 22H2 <a id='1_W11_21H2_return'></a><a href='#1_W11_21H2'>(1)</a><br />
         (10.0.22621.521)</th><!-- 22H2/Windows 11 2022 Update -->
       </tr>
      </thead>
      <tbody>
       <tr>
        <th>General<br />
         Availability</th>
        <td>04 Oct 2021</td>
        <td>20 Sep 2022 <a id='2_W11_21H2_return'></a><a href='#2_W11_21H2'>(2)</a></td>
       </tr>
       <tr>
        <th>Included With</th>
        <td>ED90.0.818.66</td>
        <td>ED100.0.1185.36</td>
       </tr>
       <tr>
        <th>Also Supports</th>
        <td>-</td>
        <td>-</td>
       </tr>
      <tbody>
      <tfoot>
       <tr>
        <td colspan='3'>
         <a id='1_W11_21H2'></a><a href='#1_W11_21H2_return'>(1)</a><a id='2_W11_21H2'></a><a href='#2_W11_21H2_return'>(2)</a> Windows 11 Version 22H2 general availability was announced on 20 Sep 2022 when Windows 11 Version 22H2 was at build 10.0.22621.521. However, apparently the first build of Windows 11 Version 22H2 released through official channels as a general availability ISO was 10.0.22621.525 on 28 Sep 2022, not 10.0.22621.521 on 20 Sep 2022. The Windows 11 Version 22H2 information presented in this table is from build 10.0.22621.525, not 10.0.22621.521.
        </td>
       </tr>
      </tfoot>
     </table>

    </section>
    <hr />
    <section>

     <h2><a id='resources'></a>8. Resources And Additional Information</h2>

     <ul class='link-list'>
      <li><a href='http://www.microsoft.com/en-us/download/internet-explorer-7-details.aspx'>Microsoft Download Center: Internet Explorer 7 (microsoft.com)</a></li>
      <li><a href='http://www.microsoft.com/en-us/download/internet-explorer-8-details.aspx'>Microsoft Download Center: Internet Explorer 8 (microsoft.com)</a></li>
      <li><a href='http://www.microsoft.com/en-us/download/internet-explorer-9-details.aspx'>Microsoft Download Center: Internet Explorer 9 (microsoft.com)</a></li>
      <li><a href='http://www.microsoft.com/en-us/download/internet-explorer-10-details.aspx'>Microsoft Download Center: Internet Explorer 10 (microsoft.com)</a></li>
      <li><a href='http://www.microsoft.com/en-us/download/details.aspx?id=40902'>Microsoft Download Center: Internet Explorer 11 for Windows 7 (microsoft.com)</a></li>
      <li><a href='https://blogs.windows.com/windowsexperience/2018/10/09/updated-version-of-windows-10-october-2018-update-released-to-windows-insiders/'>Updated Version Of Windows 10 October 2018 Update Released To Windows Insiders (blogs.windows.com)</a></li>
      <li><a href='https://blogs.windows.com/windowsexperience/2018/11/13/resuming-the-rollout-of-the-windows-10-october-2018-update/'>Resuming The Rollout Of The Windows 10 October 2018 Update (blogs.windows.com)</a></li>
      <li><a href='https://support.microsoft.com/en-us/help/4533505'>What is Microsoft Edge Legacy? (support.microsoft.com)</a></li>
      <li><a href='https://www.microsoft.com/en-us/edge/business/download'>Microsoft Edge For Business (microsoft.com)</a></li>
      <li><a href='https://docs.microsoft.com/en-us/deployedge/microsoft-edge-supported-operating-systems'>Microsoft Edge Supported Operating Systems (docs.microsoft.com)</a></li>
      <li><a href='https://blogs.windows.com/windowsexperience/2022/09/20/available-today-the-windows-11-2022-update/'>September 20, 2022 - Available Today: The Windows 11 2022 Update (blogs.windows.com)</a></li>
     </ul>

    </section>";
