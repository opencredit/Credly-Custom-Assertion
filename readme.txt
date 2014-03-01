=== Credly Custom Badge Assertion Shortcode ===
Contributors: learningtimes, webdevstudios, rzen
Donate link: http://badgeos.org/contribute/donate/
Tags: badge, badges, openbadges, learningtimes, OBI, mozilla, open badges, achievement, award, reward, engagement, submission, nomination, API, open credit, credit, badgeOS
Requires at least: 3.5
Tested up to: 3.7.0
Stable tag: 1.0.0
License: GNU AGPLv3
License URI: http://www.gnu.org/licenses/agpl-3.0.html

Easily create an official Credly Badge Assertion page on your site.

== Description ==

For Credly Pro members: Easily creates a page on your site for displaying official Credly Badge Assertions. Just add the shortcode to any page or post.

The page will then dynamically embed the official badge information for any of your issued Credly badges, when a visitor is redirected to your site from a recipient's shared badge.

This shortcode provides WordPress support for the Credly "Custom Assertion Location" feature, available to Pro members in their Credly "Account Settings."

= What is Custom Assertion? =

The Custom Assertion Location feature allows Credly Pro and Premium members to redirect accepted badges they issue to their own website.  This means that badges shown on a user’s Credly profile or that they share on social networks will redirect when clicked to the website URL the issuer provides, instead of to Credly. In this manner, issuers can enjoy several benefits, such as: 

* **Extra Validity**: The validity and authenticity of the credit is reinforced, as the badge assertion is displayed on your domain.
* **Enhanced Branding**: White label the badge assertion page by placing it on your site.
* **Additional Context**: Customize where and how you display credit on your site, offering additional information about your programs and offerings, enrollment opportunities, or other information for observers when they click through to learn about earned badges.
* **Your Analytics**: With badges redirected to your site, you can leverage your own web site analytics to track traffic directly to your site from badges you issue.

= What does a Custom Assertion Location look like in action? =

First let’s look at the default behavior when an accepted badge is clicked. Without a Custom Assertion Location activated, badges link to the standard Credly assertion page.  Here is an example: [https://credly.com/credit/10318](https://credly.com/credit/10318 "Standard Assertion")

When a Custom Assertion Location is in place, click-throughs from accepted badges that you have issued are redirected to the website you specify in your Account Settings. Credly appends the ID number of the badge to the URL you provide in your Account Settings. Here is an example of a Custom Assertion Location, whereby a badge is redirected to a non-Credly website: [http://aaslhcommunity.org/cert/?ID=26312](http://aaslhcommunity.org/cert/?ID=26312 "Credly Custom Assertion Location")

= How does it work? =

It's very easy. Essentially, all you do is place a shortcode on any page on your WordPress site. Here are the details:

1. Put the shortcode on any page or post on your site:  [credly_assertion_page] 

2. Copy the permalink of the page you used and append "/?CID={id}" to the end of it.  For example, if the link to your page is www.yoursiteurl.com/certificate, your link format would be:  www.yoursiteurl.com/certificate?CID={id}

3. Paste the full link into the "Custom Assertion Location" field in the Account Settings area of your [Credly](https://credly.com/ "Credly web site") Pro account. Save your Account Settings. 

That's it! All of your Credly badges will be re-routed to your designated WordPress page and will display the official badge information automatically. You don't need to do anything else.

Example:

* [https://credly.com/credit/26312](https://credly.com/credit/26312 "Credly Custom Assertion Location") automatically redirects to [http://aaslhcommunity.org/cert/?ID=26312](http://aaslhcommunity.org/cert/?ID=26312 "Credly Custom Assertion Location")

This shortcode is already available in the [BadgeOS](http://wordpress.org/extend/plugins/badgeos/ "BadgeOS") plugin. So if you already have BadgeOS activated, you do not need this standalone plugin. 

Note: Custom Assertion Location requires a [Pro](http://credly.com/upgrade "Credly Pro") or higher level membership to Credly.


= Resources / Helpful Links =

Learn more about how Custom Assertion Location works:
[Background on Custom Assertion Location](http://blog.credly.com/custom-assertion-location/ "Background on Custom Assertion Location")

This plugin is made available by [LearningTimes, LLC](http://www.LearningTimes.com/ "LearningTimes web site"). Here are some ways to stay connected and to see what else we are up to:

* [BadgeOS.org](http://badgeos.org/ "BadgeOS web site") - Contact Us, Video Tutorials, Examples, News
* [LearningTimes](http://www.learningtimes.com/ "LearningTimes web site") - Bringing people together through engaging online conferences, events and activities.
* [Credly.com](https://credly.com/ "Credly web site") - Recognize, manage and share lifelong achievement
* [BadgeOS on GitHub](https://github.com/opencredit/badgeos "BadgeOS on GitHub") - Report issues, contribute code
* [Upgrade to Credly Pro](http://credly.com/upgrade "Credly Pro") - Get higher bulk issuing capacity, support, and identity verification

= License Info =

LearningTimes, LLC licenses this plugin to you under the terms of the GNU Affero General Public License, version 3, as published by the Free Software Foundation.

There is NO WARRANTY for this software, express or implied, including the implied warranties of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License, version 3, at [www.gnu.org/licenses/agpl-3.0.html](http://www.gnu.org/licenses/agpl-3.0.html "License") for more details.


== Installation ==

1. Upload 'credly-custom-assertion' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Place the shortcode [credly_assertion_page] on any page or post.
4. Copy the full link to your page and append "/?CID={id}" to the end of it. For example, if the link to your page is yoursiteurl.com/certificate, your link format would be:  yoursiteurl.com/certificate?CID={id}
5. Paste the link from step 4 into the "Custom Assertion Location" field in the Account Settings area of your [Credly](https://credly.com/ "Credly web site") Pro account. Save Account Settings.

When someone earns and shares a badge from you via Credly and shares it on any site or social network, the link will redirect to your page.

== Frequently Asked Questions ==

= Is this plugin just a shortcode? =
Yes, it's just a simple shortcode to complement the Credly Pro "Custom Assertion Location" function. It makes redirecting Credly badges to your WordPress site super-easy.


== Screenshots ==

1. Example of a Custom Assertion Location page in action.

2. A standard assertion page on Credly when "Custom Assertion" is **not** activated.

2. Credly Pro and Pro Premium members will see a Custom Assertion Location option in the “Account Settings” area of their account. Just put the shortcode on any page of your site, and put the link to the page into your Account Settings and you are all set. (See "Installation" section for details.)

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
* Initial release
