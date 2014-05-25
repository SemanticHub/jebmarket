CREATE DATABASE  IF NOT EXISTS `jassifie_yii_jeb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `jassifie_yii_jeb`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: jebmarket.com    Database: jassifie_yii_jeb
-- ------------------------------------------------------
-- Server version	5.5.37-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `jebapp_auth_assignment`
--

DROP TABLE IF EXISTS `jebapp_auth_assignment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_auth_assignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_auth_assignment`
--

LOCK TABLES `jebapp_auth_assignment` WRITE;
/*!40000 ALTER TABLE `jebapp_auth_assignment` DISABLE KEYS */;
INSERT INTO `jebapp_auth_assignment` VALUES ('JebAdmin','40',NULL,'N;'),('Registered','65',NULL,'N;'),('Registered','66',NULL,'N;'),('Registered','56',NULL,'N;'),('Registered','36',NULL,'N;'),('Registered','67',NULL,'N;'),('Registered','68',NULL,'N;'),('Registered','69',NULL,'N;'),('Registered','70',NULL,'N;'),('Registered','71',NULL,'N;'),('Registered','72',NULL,'N;'),('Registered','73',NULL,'N;'),('Registered','74',NULL,'N;'),('Registered','75',NULL,'N;'),('Registered','83',NULL,'N;'),('Internal','56',NULL,'N;'),('Registered','84',NULL,'N;'),('Registered','77',NULL,'N;'),('Registered','78',NULL,'N;'),('Registered','79',NULL,'N;'),('Registered','80',NULL,'N;'),('Registered','81',NULL,'N;'),('Registered','85',NULL,'N;'),('Registered','94',NULL,'N;'),('Registered','82',NULL,'N;'),('Registered','86',NULL,'N;'),('Registered','87',NULL,'N;'),('Registered','88',NULL,'N;'),('Registered','89',NULL,'N;'),('Registered','90',NULL,'N;'),('Internal','90',NULL,'N;'),('Registered','76',NULL,'N;'),('Registered','91',NULL,'N;'),('Registered','92',NULL,'N;'),('Registered','93',NULL,'N;'),('Internal','92',NULL,'N;'),('Registered','95',NULL,'N;'),('Premium','95',NULL,'N;'),('Registered','96',NULL,'N;'),('Premium','96',NULL,'N;'),('Registered','97',NULL,'N;'),('Premium','97',NULL,'N;'),('Registered','98',NULL,'N;'),('Premium','98',NULL,'N;'),('Registered','99',NULL,'N;'),('Premium','99',NULL,'N;'),('Registered','100',NULL,'N;'),('Executive','100',NULL,'N;'),('Registered','101',NULL,'N;'),('Premium','101',NULL,'N;'),('Registered','102',NULL,'N;'),('Premium','102',NULL,'N;'),('Registered','103',NULL,'N;'),('Premium','103',NULL,'N;'),('Registered','104',NULL,'N;'),('Premium','104',NULL,'N;'),('Registered','105',NULL,'N;'),('Premium','105',NULL,'N;'),('Registered','106',NULL,'N;'),('Premium','106',NULL,'N;'),('Registered','107',NULL,'N;'),('Premium','107',NULL,'N;'),('Registered','108',NULL,'N;'),('Executive','108',NULL,'N;'),('Registered','109',NULL,'N;'),('Executive','109',NULL,'N;'),('Registered','110',NULL,'N;'),('Executive','110',NULL,'N;'),('Registered','111',NULL,'N;'),('Executive','111',NULL,'N;'),('Registered','112',NULL,'N;'),('Executive','112',NULL,'N;'),('Registered','113',NULL,'N;'),('Premium','113',NULL,'N;'),('Registered','114',NULL,'N;'),('Executive','114',NULL,'N;');
/*!40000 ALTER TABLE `jebapp_auth_assignment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_auth_item`
--

DROP TABLE IF EXISTS `jebapp_auth_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_auth_item`
--

LOCK TABLES `jebapp_auth_item` WRITE;
/*!40000 ALTER TABLE `jebapp_auth_item` DISABLE KEYS */;
INSERT INTO `jebapp_auth_item` VALUES ('Guest',2,'Role for all public users ( not registered nor loggedin )',NULL,'N;'),('JebAdmin',2,'Role for super admin users',NULL,'N;'),('Registered',2,'Role for registered users',NULL,'N;'),('EmailTemplate.View',0,'View Email Template, Which already created',NULL,'N;'),('EmailTemplate.Create',0,'Create New Email Template',NULL,'N;'),('EmailTemplate.Update',0,'Update Email Template Which already Created',NULL,'N;'),('EmailTemplate.Delete',0,'Delete Email Template, Which already Created',NULL,'N;'),('EmailTemplate.Index',0,'Show All Email Template For View',NULL,'N;'),('EmailTemplate.Admin',0,'Show all email template, we can update, delete, view, search all email template here',NULL,'N;'),('Faq.View',0,'The admin view of created or updated FAQ item',NULL,'N;'),('Faq.Create',0,'Create New Faq',NULL,'N;'),('Faq.Update',0,'Update Faqs, which already created',NULL,'N;'),('Faq.Delete',0,'Delete Faq, which already created',NULL,'N;'),('Faq.Index',0,'The front-end output of FAQ module',NULL,'N;'),('Faq.Admin',0,'Show all Faq, we can update, delete, view, search all Faq here',NULL,'N;'),('Menu.MenuItemOptions',0,'Condition for menu Item page, module, custom and default view',NULL,'N;'),('Menu.View',0,'View Menu, Which already created',NULL,'N;'),('Menu.Create',0,'Create New Menu',NULL,'N;'),('Menu.Update',0,'Update menu, Which already created',NULL,'N;'),('Menu.Delete',0,'Delete menu, Which already created',NULL,'N;'),('Menu.Index',0,'Show all menu for view',NULL,'N;'),('Menu.Admin',0,'Show all menu, we can update, delete, view, search all menu here',NULL,'N;'),('Page.View',0,'Front-end view of public pages ',NULL,'N;'),('Pages.View',0,'The admin view of created or updated page',NULL,'N;'),('Pages.Create',0,'Create new pages',NULL,'N;'),('Pages.Update',0,'Update pages, which already created',NULL,'N;'),('Pages.Delete',0,'Delete pages, Which already created',NULL,'N;'),('Pages.Admin',0,'Admin manage pages table list',NULL,'N;'),('Settings.View',0,'View settings, which already created',NULL,'N;'),('Settings.Create',0,'Create New Settings',NULL,'N;'),('Settings.Update',0,'Update Settings, Which already created',NULL,'N;'),('Settings.Delete',0,'Delete Settings, Which already created',NULL,'N;'),('Settings.Index',0,'Show all settings option, we can change settings value here',NULL,'N;'),('Settings.Admin',0,'Show all settings, we can update, delete, view, search all settings here',NULL,'N;'),('Slider.View',0,'View slider, Which already created',NULL,'N;'),('Slider.Create',0,'Create New Slider',NULL,'N;'),('Slider.Update',0,'Update Slider, Which already created',NULL,'N;'),('Slider.Delete',0,'Delete slider, Which already created',NULL,'N;'),('Slider.Index',0,'Show all Slider for view',NULL,'N;'),('Slider.Admin',0,'Show all Slider, we can update, delete, view, search all Slider here',NULL,'N;'),('User.Recoverpass',0,'Sends password recovery email with details',NULL,'N;'),('User.Edit',0,'Update User Profile Fields',NULL,'N;'),('User.Changepass',0,'Show change password form',NULL,'N;'),('User.Resetpass',0,'User reset forgotten password option',NULL,'N;'),('Dashboard.Index',0,'User Dashboard Landing Page',NULL,'N;'),('User.Profile',0,'User profile page, where show user profile details, user can change details here',NULL,'N;'),('User.View',0,'View user details, which already created',NULL,'N;'),('User.Create',0,'Create new user from admin panel',NULL,'N;'),('User.Update',0,'Update user details form admin panel',NULL,'N;'),('User.Delete',0,'Delete user, which already created',NULL,'N;'),('User.Activate',0,'Sends verification email for newly registered users',NULL,'N;'),('User.Sendemailverification',0,'Resends verification email',NULL,'N;'),('User.Admin',0,'Show all user, we can update, delete, view, search all user here',NULL,'N;'),('UserDetails.Edit',0,'Update user details from user profile fields',NULL,'N;'),('User.Location',0,'Edit User Location',NULL,'N;'),('Dashboard.userStatistics',0,'User Statistics Dashboard Widget for Admin',NULL,'N;'),('Dashboard.userStatus',0,'User Status Dashboard Widget',NULL,'N;'),('Dashboard.userTwitter',0,'User Twitter Dashboard Widget',NULL,'N;'),('Dashboard.userFacebook',0,'User Facebook Dashboard Widget',NULL,'N;'),('Internal',2,'This is the default role for the JebMarket Internal Users like Developers, Project Manager, etc.',NULL,'N;'),('AdminMenu.admin',0,'The Root Menu Item of Admin Menu',NULL,'N;'),('UserDetails.Uploadavater',0,'User profile image upload using JebUpload extension',NULL,'N;'),('Slider.Uploadslider',0,'Slider image upload using JebUpload extension',NULL,'N;'),('Reports.Default.Index',0,NULL,NULL,'N;'),('Reports.Visitor.VisitsSummary',0,NULL,NULL,'N;'),('Reports.Visitor.VisitorMap',0,NULL,NULL,'N;'),('Reports.Visitor.VisitorLocation',0,NULL,NULL,'N;'),('Reports.Visitor.VisitsScreen',0,NULL,NULL,'N;'),('Blog.BlogComment.View',0,NULL,NULL,'N;'),('Blog.BlogComment.Create',0,NULL,NULL,'N;'),('Blog.BlogComment.Update',0,NULL,NULL,'N;'),('Blog.BlogComment.Delete',0,NULL,NULL,'N;'),('Blog.BlogComment.Index',0,NULL,NULL,'N;'),('Blog.BlogComment.Admin',0,NULL,NULL,'N;'),('Blog.BlogOptions.View',0,NULL,NULL,'N;'),('Blog.BlogOptions.Create',0,NULL,NULL,'N;'),('Blog.BlogOptions.Update',0,NULL,NULL,'N;'),('Blog.BlogOptions.Delete',0,NULL,NULL,'N;'),('Blog.BlogOptions.Index',0,NULL,NULL,'N;'),('Blog.BlogOptions.Admin',0,NULL,NULL,'N;'),('Blog.BlogPost.View',0,NULL,NULL,'N;'),('Blog.BlogPost.Create',0,NULL,NULL,'N;'),('Blog.BlogPost.Update',0,NULL,NULL,'N;'),('Blog.BlogPost.Delete',0,NULL,NULL,'N;'),('Blog.BlogPost.Index',0,NULL,NULL,'N;'),('Blog.BlogPost.Admin',0,NULL,NULL,'N;'),('Blog.BlogTerms.Viewcategory',0,NULL,NULL,'N;'),('Blog.BlogTerms.Viewtag',0,NULL,NULL,'N;'),('Blog.BlogTerms.Createtag',0,NULL,NULL,'N;'),('Blog.BlogTerms.Createcategory',0,NULL,NULL,'N;'),('Blog.BlogTerms.Updatecategory',0,NULL,NULL,'N;'),('Blog.BlogTerms.Updatetag',0,NULL,NULL,'N;'),('Blog.BlogTerms.Delete',0,NULL,NULL,'N;'),('Blog.BlogTerms.Deletetag',0,NULL,NULL,'N;'),('Blog.BlogTerms.Deletecategory',0,NULL,NULL,'N;'),('Blog.BlogTerms.Index',0,NULL,NULL,'N;'),('Blog.BlogTerms.Admin',0,NULL,NULL,'N;'),('Blog.BlogTerms.Tag',0,NULL,NULL,'N;'),('Blog.BlogTerms.Category',0,NULL,NULL,'N;'),('Blog.Default.Index',0,NULL,NULL,'N;'),('Blog.Media.View',0,NULL,NULL,'N;'),('Blog.Media.Create',0,NULL,NULL,'N;'),('Blog.Media.Update',0,NULL,NULL,'N;'),('Blog.Media.Delete',0,NULL,NULL,'N;'),('Blog.Media.Index',0,NULL,NULL,'N;'),('Blog.Media.Admin',0,NULL,NULL,'N;'),('Blog.Media.Uploadmedia',0,NULL,NULL,'N;'),('Blog.Default.Admin',0,NULL,NULL,'N;'),('Blog.Default.View',0,NULL,NULL,'N;'),('Blog.Category.View',0,NULL,NULL,'N;'),('Blog.Tag.View',0,NULL,NULL,'N;'),('Basic',2,'Basic Membership Plan',NULL,'N;'),('Premium',2,'Premium Membership Plan',NULL,'N;'),('Executive',2,'Executive Member Plan',NULL,'N;'),('User.Step1',0,NULL,NULL,'N;'),('User.Step2',0,NULL,NULL,'N;'),('User.Step3',0,NULL,NULL,'N;'),('Website.Admin',0,NULL,NULL,'N;'),('Website.Logo',0,NULL,NULL,'N;'),('Website.Uploadlogo',0,NULL,NULL,'N;'),('Website.UploadFavicon',0,NULL,NULL,'N;'),('Pages.Pageins',0,NULL,NULL,'N;'),('Template.Modelview',0,NULL,NULL,'N;'),('Template.Index',0,NULL,NULL,'N;'),('Template.Admin',0,NULL,NULL,'N;'),('UserTemplate.Delete',0,NULL,NULL,'N;'),('UserTemplate.Active',0,NULL,NULL,'N;'),('UserTemplate.Select',0,NULL,NULL,'N;'),('UserTemplate.Admin',0,NULL,NULL,'N;');
/*!40000 ALTER TABLE `jebapp_auth_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_auth_item_child`
--

DROP TABLE IF EXISTS `jebapp_auth_item_child`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_auth_item_child`
--

LOCK TABLES `jebapp_auth_item_child` WRITE;
/*!40000 ALTER TABLE `jebapp_auth_item_child` DISABLE KEYS */;
INSERT INTO `jebapp_auth_item_child` VALUES ('Guest','Blog.Category.View'),('Guest','Blog.Default.Index'),('Guest','Blog.Default.View'),('Guest','Blog.Tag.View'),('Guest','Faq.Index'),('Guest','Page.View'),('Guest','Template.Index'),('Guest','Template.Modelview'),('Guest','User.Activate'),('Guest','User.Recoverpass'),('Guest','User.Resetpass'),('Guest','User.Sendemailverification'),('Guest','User.Step1'),('Internal','AdminMenu.admin'),('Internal','AdminMenu.emailtemplates'),('Internal','AdminMenu.faqs'),('Internal','AdminMenu.sliders'),('Internal','Blog.BlogComment.Admin'),('Internal','Blog.BlogComment.Create'),('Internal','Blog.BlogComment.Delete'),('Internal','Blog.BlogComment.Index'),('Internal','Blog.BlogComment.Update'),('Internal','Blog.BlogComment.View'),('Internal','Blog.BlogOptions.Admin'),('Internal','Blog.BlogOptions.Create'),('Internal','Blog.BlogOptions.Delete'),('Internal','Blog.BlogOptions.Index'),('Internal','Blog.BlogOptions.Update'),('Internal','Blog.BlogOptions.View'),('Internal','Blog.BlogPost.Admin'),('Internal','Blog.BlogPost.Create'),('Internal','Blog.BlogPost.Delete'),('Internal','Blog.BlogPost.Index'),('Internal','Blog.BlogPost.Update'),('Internal','Blog.BlogPost.View'),('Internal','Blog.BlogTerms.Admin'),('Internal','Blog.BlogTerms.Category'),('Internal','Blog.BlogTerms.Createcategory'),('Internal','Blog.BlogTerms.Createtag'),('Internal','Blog.BlogTerms.Delete'),('Internal','Blog.BlogTerms.Deletecategory'),('Internal','Blog.BlogTerms.Deletetag'),('Internal','Blog.BlogTerms.Index'),('Internal','Blog.BlogTerms.Tag'),('Internal','Blog.BlogTerms.Updatecategory'),('Internal','Blog.BlogTerms.Updatetag'),('Internal','Blog.BlogTerms.Viewcategory'),('Internal','Blog.BlogTerms.Viewtag'),('Internal','Blog.Category.View'),('Internal','Blog.Default.Admin'),('Internal','Blog.Default.Index'),('Internal','Blog.Default.View'),('Internal','Blog.Media.Admin'),('Internal','Blog.Media.Create'),('Internal','Blog.Media.Delete'),('Internal','Blog.Media.Index'),('Internal','Blog.Media.Update'),('Internal','Blog.Media.Uploadmedia'),('Internal','Blog.Media.View'),('Internal','Blog.Tag.View'),('Internal','Dashboard.Index'),('Internal','Dashboard.userFacebook'),('Internal','Dashboard.userStatistics'),('Internal','Dashboard.userStatus'),('Internal','Dashboard.userTwitter'),('Internal','EmailTemplate.Admin'),('Internal','EmailTemplate.Create'),('Internal','EmailTemplate.Delete'),('Internal','EmailTemplate.Index'),('Internal','EmailTemplate.Update'),('Internal','EmailTemplate.View'),('Internal','Faq.Admin'),('Internal','Faq.Create'),('Internal','Faq.Delete'),('Internal','Faq.Index'),('Internal','Faq.Update'),('Internal','Faq.View'),('Internal','Menu.Admin'),('Internal','Menu.Create'),('Internal','Menu.Delete'),('Internal','Menu.Index'),('Internal','Menu.MenuItemOptions'),('Internal','Menu.Update'),('Internal','Menu.View'),('Internal','Page.View'),('Internal','Pages.Admin'),('Internal','Pages.Create'),('Internal','Pages.Delete'),('Internal','Pages.Pageins'),('Internal','Pages.Update'),('Internal','Pages.View'),('Internal','Reports.Default.Index'),('Internal','Reports.Visitor.VisitorLocation'),('Internal','Reports.Visitor.VisitorMap'),('Internal','Reports.Visitor.VisitsScreen'),('Internal','Reports.Visitor.VisitsSummary'),('Internal','Settings.Admin'),('Internal','Settings.Create'),('Internal','Settings.Delete'),('Internal','Settings.Index'),('Internal','Settings.Update'),('Internal','Settings.View'),('Internal','Slider.Admin'),('Internal','Slider.Create'),('Internal','Slider.Delete'),('Internal','Slider.Index'),('Internal','Slider.Update'),('Internal','Slider.Uploadslider'),('Internal','Slider.View'),('Internal','Template.Admin'),('Internal','Template.Index'),('Internal','Template.Modelview'),('Internal','User.Activate'),('Internal','User.Admin'),('Internal','User.Changepass'),('Internal','User.Edit'),('Internal','User.Location'),('Internal','User.Profile'),('Internal','User.Recoverpass'),('Internal','User.Resetpass'),('Internal','User.Sendemailverification'),('Internal','User.Step1'),('Internal','User.Step2'),('Internal','User.Step3'),('Internal','User.View'),('Internal','UserDetails.Edit'),('Internal','UserDetails.Uploadavater'),('Internal','UserTemplate.Active'),('Internal','UserTemplate.Admin'),('Internal','UserTemplate.Delete'),('Internal','UserTemplate.Select'),('Internal','Website.Admin'),('Internal','Website.Logo'),('Internal','Website.UploadFavicon'),('Internal','Website.Uploadlogo'),('Registered','Blog.BlogComment.Admin'),('Registered','Blog.BlogComment.Create'),('Registered','Blog.BlogComment.Delete'),('Registered','Blog.BlogComment.Index'),('Registered','Blog.BlogComment.Update'),('Registered','Blog.BlogComment.View'),('Registered','Blog.BlogOptions.Admin'),('Registered','Blog.BlogOptions.Create'),('Registered','Blog.BlogOptions.Delete'),('Registered','Blog.BlogOptions.Index'),('Registered','Blog.BlogOptions.Update'),('Registered','Blog.BlogOptions.View'),('Registered','Blog.BlogPost.Admin'),('Registered','Blog.BlogPost.Create'),('Registered','Blog.BlogPost.Delete'),('Registered','Blog.BlogPost.Index'),('Registered','Blog.BlogPost.Update'),('Registered','Blog.BlogPost.View'),('Registered','Blog.BlogTerms.Admin'),('Registered','Blog.BlogTerms.Category'),('Registered','Blog.BlogTerms.Createcategory'),('Registered','Blog.BlogTerms.Createtag'),('Registered','Blog.BlogTerms.Delete'),('Registered','Blog.BlogTerms.Deletecategory'),('Registered','Blog.BlogTerms.Deletetag'),('Registered','Blog.BlogTerms.Index'),('Registered','Blog.BlogTerms.Tag'),('Registered','Blog.BlogTerms.Updatecategory'),('Registered','Blog.BlogTerms.Updatetag'),('Registered','Blog.BlogTerms.Viewcategory'),('Registered','Blog.BlogTerms.Viewtag'),('Registered','Blog.Category.View'),('Registered','Blog.Default.Admin'),('Registered','Blog.Default.Index'),('Registered','Blog.Default.View'),('Registered','Blog.Media.Admin'),('Registered','Blog.Media.Create'),('Registered','Blog.Media.Delete'),('Registered','Blog.Media.Index'),('Registered','Blog.Media.Update'),('Registered','Blog.Media.Uploadmedia'),('Registered','Blog.Media.View'),('Registered','Blog.Tag.View'),('Registered','Dashboard.Index'),('Registered','Dashboard.userFacebook'),('Registered','Dashboard.userStatus'),('Registered','Dashboard.userTwitter'),('Registered','Faq.Index'),('Registered','Menu.Admin'),('Registered','Menu.Create'),('Registered','Menu.Delete'),('Registered','Menu.Index'),('Registered','Menu.MenuItemOptions'),('Registered','Menu.Update'),('Registered','Menu.View'),('Registered','Page.View'),('Registered','Pages.Admin'),('Registered','Pages.Create'),('Registered','Pages.Delete'),('Registered','Pages.Pageins'),('Registered','Pages.Update'),('Registered','Pages.View'),('Registered','Reports.Default.Index'),('Registered','Reports.Visitor.VisitorLocation'),('Registered','Reports.Visitor.VisitorMap'),('Registered','Reports.Visitor.VisitsScreen'),('Registered','Reports.Visitor.VisitsSummary'),('Registered','Template.Admin'),('Registered','Template.Index'),('Registered','Template.Modelview'),('Registered','User.Activate'),('Registered','User.Changepass'),('Registered','User.Edit'),('Registered','User.Location'),('Registered','User.Profile'),('Registered','User.Recoverpass'),('Registered','User.Resetpass'),('Registered','User.Sendemailverification'),('Registered','User.Step1'),('Registered','User.Step2'),('Registered','User.Step3'),('Registered','UserDetails.Edit'),('Registered','UserDetails.Uploadavater'),('Registered','UserTemplate.Active'),('Registered','UserTemplate.Admin'),('Registered','UserTemplate.Delete'),('Registered','UserTemplate.Select'),('Registered','Website.Admin'),('Registered','Website.Logo'),('Registered','Website.UploadFavicon'),('Registered','Website.Uploadlogo');
/*!40000 ALTER TABLE `jebapp_auth_item_child` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_blog_comment`
--

DROP TABLE IF EXISTS `jebapp_blog_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_blog_comment` (
  `comment_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `comment_content` text NOT NULL,
  `comment_status` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `jebapp_blog_post_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `fk_jebapp_blog_comment_jebapp_blog_post1_idx` (`jebapp_blog_post_id`),
  CONSTRAINT `fk_jebapp_blog_comment_jebapp_blog_post1` FOREIGN KEY (`jebapp_blog_post_id`) REFERENCES `jebapp_blog_post` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_blog_comment`
--

LOCK TABLES `jebapp_blog_comment` WRITE;
/*!40000 ALTER TABLE `jebapp_blog_comment` DISABLE KEYS */;
INSERT INTO `jebapp_blog_comment` VALUES (1,'Zahangir Alam','zahangir060@gmail.com','www.zahangir.info','','Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.','1','',0,'2014-02-08 14:27:27','2014-02-08 14:27:27',40,6),(2,'test','test@gmail.com','test.com','','test','1','',0,'2014-02-12 20:57:06','2014-02-12 20:57:06',40,8);
/*!40000 ALTER TABLE `jebapp_blog_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_blog_options`
--

DROP TABLE IF EXISTS `jebapp_blog_options`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_blog_options` (
  `option_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `option_name` varchar(64) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes',
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`option_id`),
  UNIQUE KEY `option_name_UNIQUE` (`option_name`),
  KEY `fk_jebapp_blog_options_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_blog_options_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_blog_options`
--

LOCK TABLES `jebapp_blog_options` WRITE;
/*!40000 ALTER TABLE `jebapp_blog_options` DISABLE KEYS */;
/*!40000 ALTER TABLE `jebapp_blog_options` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_blog_post`
--

DROP TABLE IF EXISTS `jebapp_blog_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_blog_post` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `post_status` varchar(20) NOT NULL DEFAULT 'public',
  `comment_status` varchar(20) NOT NULL DEFAULT 'public',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  `tag` text,
  `category` text,
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jebapp_blog_post_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_blog_post_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_blog_post`
--

LOCK TABLES `jebapp_blog_post` WRITE;
/*!40000 ALTER TABLE `jebapp_blog_post` DISABLE KEYS */;
INSERT INTO `jebapp_blog_post` VALUES (6,'<p><img src=\"http://yii.jebmarket.com/trunk/webapp/media/upload/jebadmin/slider-1.jpg\" style=\"width: 500px; height: 185px;\" /></p>\r\n\r\n<p>teetee ete sa sadf sdaf sd fsda f</p>\r\n','Test Post','Test_Post','public','public','2014-02-05 17:47:08','2014-02-21 14:22:44',0,1,'3,5','4',40),(7,'<p><img alt=\"\" src=\"http://placehold.it/420x150\" style=\"width: 420px; height: 150px;\" /></p>\r\n\r\n<p><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;\">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</span></p>\r\n','Test blog post','Test-blog-post','public','public','2014-02-08 14:35:01','2014-02-08 14:35:01',0,0,'3,5','4',40),(8,'<p>asdf sd fasdfsdaf sda fdsafasdfsdaf dsaf sdaf sdaf sd fsdaf s fs af sfd sda fsdaf sdaf sdafsdafsdaf asdfsd fsda fsad fsda fsad fsda fsd fsd</p>\r\n','Test Post From zahangir060 Account','Test_Post_From_zahangir060_Account','public','private','2014-02-12 08:26:10','2014-02-16 20:01:56',0,1,'','',76);
/*!40000 ALTER TABLE `jebapp_blog_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_blog_terms`
--

DROP TABLE IF EXISTS `jebapp_blog_terms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_blog_terms` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `count` bigint(20) NOT NULL DEFAULT '0',
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`term_id`),
  KEY `fk_jebapp_blog__terms_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_blog__terms_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_blog_terms`
--

LOCK TABLES `jebapp_blog_terms` WRITE;
/*!40000 ALTER TABLE `jebapp_blog_terms` DISABLE KEYS */;
INSERT INTO `jebapp_blog_terms` VALUES (1,'Test Category','test-category','category','test category',0,0,76),(2,'Test Tag','test-tag','tag','test tag',0,0,76),(3,'Special Tag','special_tag','tag','Special Tag Description',0,0,40),(4,'Special Category','special_category','category','Special Category Description',0,0,40),(5,'aaaaaa','aaaaaaa','tag','aaaaaaaaaa',0,0,40);
/*!40000 ALTER TABLE `jebapp_blog_terms` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_email_template`
--

DROP TABLE IF EXISTS `jebapp_email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_email_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `body` text,
  `subject` varchar(100) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_email_template`
--

LOCK TABLES `jebapp_email_template` WRITE;
/*!40000 ALTER TABLE `jebapp_email_template` DISABLE KEYS */;
INSERT INTO `jebapp_email_template` VALUES (2,'signup_activation_email','<p>Hi ##USER##,<br />\r\nPlease confirm your email by clicking on the link below.<br />\r\n<br />\r\n##ACTIVATION_URL##<br />\r\n<br />\r\nThanks,<br />\r\n##APPLICATION_NAME## Team<br />\r\n##DATE_TIME##<br />\r\n##LOGO##</p>\r\n','Please confirm your email address','signup, verification'),(3,'password_recovery_email','<p>Hello <strong>##USER##</strong></p>\r\n\r\n<p>Someone probably you has requested for a password recovery for <strong>##APPLICATION_NAME## </strong>account. If its not you just ignore this email and nothing will happen to your account. Your account is always safe with us.</p>\r\n\r\n<p>To change your password click the link below or copy/past the URL to your browser address bar.<br />\r\n<strong>##RECOVERPASS_URL##</strong></p>\r\n','##APPLICATION_NAME## : Recover Lost Password ',''),(4,'contactus_confirmation_email','<pre class=\"text\" id=\"descriptionRow\" style=\"font-family: Arial, sans-serif; font-size: 12px; margin-top: 0px; margin-bottom: 0px; color: rgb(0, 0, 0); line-height: 16px;\">\r\n<strong>we have received your request/feedback and will respond back to you soon</strong></pre>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks,<br />\r\n##APPLICATION_NAME## Team<br />\r\n##DATE_TIME##<br />\r\n##LOGO##</p>\r\n','Jebmarket: we have received your request','contactus, confirmation'),(5,'contactus_form_email','<p>Thanks,<br />\r\n##APPLICATION_NAME## Team<br />\r\n##DATE_TIME##<br />\r\n##LOGO##</p>\r\n','(Customize Subject)','contactus, formemail');
/*!40000 ALTER TABLE `jebapp_email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_faq`
--

DROP TABLE IF EXISTS `jebapp_faq`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faq` tinytext COMMENT 'Question',
  `answer` text COMMENT 'Answer',
  `order` smallint(6) DEFAULT NULL COMMENT 'Order',
  `active` char(1) DEFAULT NULL COMMENT 'Active',
  `tag` varchar(45) DEFAULT NULL COMMENT 'Faq Tag',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_faq`
--

LOCK TABLES `jebapp_faq` WRITE;
/*!40000 ALTER TABLE `jebapp_faq` DISABLE KEYS */;
INSERT INTO `jebapp_faq` VALUES (1,'What is JebMarket ?','<p>JebMarket is a new age and revolutionary online Marketplace, which allows the Sellers/Service-providers to create their own online virtual shop within one of our Malls and let them market themselves to users globally.</p><p>Eventually the shop owners will be able to sell their products/services to any part of the world through their shop - Coming Soon !!</p> ',1,'1','jebmarket, about'),(2,'What is \'Beta\' next to the JebMarket logo?\r\n','<p><strong>Beta</strong> next to the logo denotes that we are currently in our Beta Phase. During the Beta Phase, you may encounter some occasional errors, which will go away once we exit Beta Phase.</p>\r\n\r\n<p>Also during our Beta, all of our features are not enabled and we will keep adding those as soon as possible.</p>\r\n\r\n<p>We would really appreciate your feedback, if you see any error or have any suggestions. Please submit your feedback here:</p>\r\n\r\n<p>http://www.jebmarket.com/contact</p>\r\n',2,'1','market'),(8,'What will be the permanent web address (URL) of my shop ?','<p>Your permanent web address (URL) for shop will be of the type your-shop-name.jebmarket.com. Ex, if your shop name is \'myshop\', then by default the URL will become myshop.jebmarket.com. You have the ability to change your shop URL to my-shop.jebmarket.com or whatever you would like it be. However, the shop URL has to be unique. That means if someone already registered my-shop.jebmarket.com as their shop URL, then you need choose something else for your shop. Also myshop.jebmarket.com,  my-shop.jebmarket.com or m-y-s-h-o-p.jebmarket.com are 3 different unique shop URLs.</p>\r\n<p>Please Note: JebMarket has some of the domains reserved for internal use like market.jebmarket.com or my.jebmarket.com. For the list of reserved domains, please contact us.</p>\r\n<p>Shop URL has a 255 character limit, so you need to choose your shop URL within 255 character. But shorter URL is always better for online and offline marketing reason. And of course, it is easy to remember a short shop URL.</p>',3,'1','URL, domain');
/*!40000 ALTER TABLE `jebapp_faq` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_location`
--

DROP TABLE IF EXISTS `jebapp_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(3) NOT NULL,
  `dial_code` varchar(45) DEFAULT NULL COMMENT 'Calling code',
  `next_level_name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `lang` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COMMENT='All location levels details above city will be in this table ';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_location`
--

LOCK TABLES `jebapp_location` WRITE;
/*!40000 ALTER TABLE `jebapp_location` DISABLE KEYS */;
INSERT INTO `jebapp_location` VALUES (6,'India','IN','91','State',NULL,NULL,NULL,''),(7,'West Bengal','','','City',6,NULL,NULL,NULL),(8,'Bangladesh','BN','88','Division',NULL,NULL,NULL,'bn'),(10,'Dhaka','','02','District',8,NULL,NULL,NULL),(12,'Dhaka','','','City',10,NULL,NULL,NULL),(19,'Kolkata','','33','',7,NULL,NULL,NULL),(33,'Dhaka','','02','',12,NULL,NULL,NULL),(34,'Jharkhand','JH','','City',6,NULL,NULL,'en'),(35,'United States','US','1','State',NULL,NULL,NULL,'en'),(36,'Jamshedpur','','','',34,NULL,NULL,'en'),(37,'California','CA','','City',35,NULL,NULL,'en'),(38,'Mountain View','','','',37,NULL,NULL,'en'),(39,'Sunnyvale','','','',37,NULL,NULL,'en');
/*!40000 ALTER TABLE `jebapp_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_media`
--

DROP TABLE IF EXISTS `jebapp_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` text NOT NULL,
  `alternative_text` text NOT NULL,
  `description` longtext NOT NULL,
  `url` varchar(255) NOT NULL,
  `upload_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jebapp_user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_jebapp_media_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_media_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_media`
--

LOCK TABLES `jebapp_media` WRITE;
/*!40000 ALTER TABLE `jebapp_media` DISABLE KEYS */;
INSERT INTO `jebapp_media` VALUES (6,'slider-1.jpg','slider-1.jpg','slider-1.jpg','slider-1.jpg','2014-02-02 18:41:30','2014-02-02 18:41:30',40),(8,'slider-3.jpg','slider-3.jpg','slider-3.jpg','slider-3.jpg','2014-02-02 18:42:02','2014-02-02 18:42:02',40),(9,'community_img.jpg','community_img.jpg','community_img.jpg','community_img.jpg','2014-02-16 15:21:20','2014-02-16 15:21:20',76),(10,'community_img.jpg','community_img.jpg','community_img.jpg','community_img.jpg','2014-03-14 14:43:36','2014-03-14 14:43:36',106);
/*!40000 ALTER TABLE `jebapp_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_menu`
--

DROP TABLE IF EXISTS `jebapp_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) DEFAULT NULL COMMENT 'Menu Item Label',
  `class` varchar(24) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL COMMENT 'Menu Item URL',
  `route` varchar(45) DEFAULT NULL,
  `default_home` int(11) DEFAULT '0',
  `target` varchar(45) DEFAULT NULL,
  `visibility` varchar(45) DEFAULT NULL COMMENT 'Menu Item Visibility',
  `active` varchar(1) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  `odr` tinyint(4) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jebapp_menu_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_menu_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_menu`
--

LOCK TABLES `jebapp_menu` WRITE;
/*!40000 ALTER TABLE `jebapp_menu` DISABLE KEYS */;
INSERT INTO `jebapp_menu` VALUES (14,'Benefits',NULL,'benefits',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'page',40),(17,'Plan & Pricing',NULL,'plans',NULL,0,NULL,'auto','1',NULL,'mainmenu',7,'page',40),(19,'FAQ',NULL,'faq',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',40),(21,'Company',NULL,'company',NULL,0,NULL,'auto','1',NULL,'mainmenu',6,'page',40),(24,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',1,'module',40),(25,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',1,'page',40),(26,'Privacy',NULL,'privacy',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',40),(27,'Terms',NULL,'terms',NULL,0,NULL,'auto','1',NULL,'footermenu',3,'page',40),(28,'Facebook','facebook','http://www.facebook.com/jebmarket',NULL,0,NULL,'auto','1',NULL,'topmenu',4,'social',40),(29,'Twitter','twitter','http://twitter.com/jebmarket',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',40),(30,'Google Plus','google','http://plus.google.com/jemarket',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'social',40),(35,'##USER##',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',0,'module',40),(36,'Home',NULL,'home-page-view',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',40),(37,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',35,'topmenu',4,'module',40),(38,'MarketPlace',NULL,'market',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',40),(44,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',35,'topmenu',0,'module',40),(45,'Blog',NULL,'blog','blog',0,NULL,'auto','1',NULL,'mainmenu',8,'module',40),(47,'blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',NULL,'module',76),(48,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',NULL,'module',76),(49,'About',NULL,'abouta',NULL,0,NULL,'auto','1',NULL,'footermenu',NULL,'page',76),(50,'##USER##',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',NULL,'module',76),(51,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',50,'topmenu',NULL,'module',76),(52,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',50,'topmenu',NULL,'module',76),(53,'About',NULL,'abouta',NULL,0,NULL,'auto','1',NULL,'mainmenu',NULL,'page',76),(54,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',NULL,'module',76),(55,'Facebook','facebook','http://www.facebook.com/jebmarket',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',76),(56,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',103),(57,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',103),(58,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',103),(59,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',103),(60,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',103),(61,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',103),(62,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',103),(63,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',103),(64,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',103),(65,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',103),(66,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',103),(67,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',104),(68,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',104),(69,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',104),(70,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',104),(71,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',104),(72,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',104),(73,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',104),(74,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',104),(75,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',104),(76,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',104),(77,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',104),(78,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',105),(79,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',105),(80,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',105),(81,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',105),(82,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',105),(83,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',105),(84,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',105),(85,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',105),(86,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',105),(87,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',105),(88,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',105),(89,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',106),(90,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',106),(91,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',106),(92,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',106),(93,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',106),(94,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',106),(95,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',106),(96,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',106),(97,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',106),(98,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',106),(99,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',106),(100,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',107),(101,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',107),(102,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',107),(103,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',107),(104,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',107),(105,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',107),(106,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',107),(107,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',107),(108,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',107),(109,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',107),(110,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',107),(111,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',108),(112,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',108),(113,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',108),(114,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',108),(115,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',108),(116,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',108),(117,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',108),(118,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',108),(119,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',108),(120,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',108),(121,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',108),(122,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',109),(123,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',109),(124,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',109),(125,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',109),(126,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',109),(127,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',109),(128,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',109),(129,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',109),(130,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',109),(131,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',109),(132,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',109),(137,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',110),(138,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',110),(139,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',110),(140,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',110),(141,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',110),(142,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',110),(143,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',110),(144,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',110),(145,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',110),(146,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',110),(147,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',110),(148,'New Page 1',NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'mainmenu',NULL,'page',110),(149,'New Page 2',NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'mainmenu',NULL,'page',110),(150,'New Page 3',NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,'mainmenu',NULL,'page',110),(151,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',111),(152,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',111),(153,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',111),(154,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',111),(155,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',111),(156,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',111),(157,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',111),(158,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',111),(159,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',111),(160,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',111),(161,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',111),(162,'Home',NULL,'home',NULL,0,NULL,'auto','1',NULL,'mainmenu',1,'page',112),(163,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'mainmenu',2,'page',112),(164,'Blog',NULL,'blog',NULL,0,NULL,'auto','1',NULL,'mainmenu',3,'module',112),(165,'Contact',NULL,'site/contact',NULL,0,NULL,'auto','1',NULL,'mainmenu',4,'module',112),(166,'About Us',NULL,'about',NULL,0,NULL,'auto','1',NULL,'footermenu',2,'page',112),(167,'Facebook','facebook','#',NULL,0,NULL,'auto','1',NULL,'topmenu',1,'custom',112),(168,'Twitter','twitter','#',NULL,0,NULL,'auto','1',NULL,'topmenu',2,'custom',112),(169,'Google Plus','google','#',NULL,0,NULL,'auto','1',NULL,'topmenu',3,'custom',112),(170,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,0,NULL,'public','1',NULL,'topmenu',4,'module',112),(171,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,0,NULL,'private','1',NULL,'topmenu',5,'module',112),(172,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,0,NULL,'private','1',NULL,'topmenu',6,'module',112),(173,'New Page 1',NULL,'new-page-1',NULL,0,NULL,NULL,NULL,NULL,'mainmenu',NULL,'page',112),(174,'Template',NULL,'template',NULL,0,NULL,'auto','1',NULL,'mainmenu',5,'module',40),(177,'Home',NULL,'home',NULL,1,NULL,'auto','1',NULL,'mainmenu',1,'page',113),(178,'About Us',NULL,'about',NULL,NULL,NULL,'auto','1',NULL,'mainmenu',2,'page',113),(179,'Blog',NULL,'blog','blog',NULL,NULL,'auto','1',NULL,'mainmenu',3,'module',113),(180,'Contact',NULL,'site/contact',NULL,NULL,NULL,'auto','1',NULL,'mainmenu',4,'module',113),(181,'About Us',NULL,'about',NULL,NULL,NULL,'auto','1',NULL,'footermenu',2,'page',113),(182,'Facebook','facebook','#',NULL,NULL,NULL,'auto','1',NULL,'topmenu',1,'social',113),(183,'Twitter','twitter','#',NULL,NULL,NULL,'auto','1',NULL,'topmenu',2,'social',113),(184,'Google Plus','google','#',NULL,NULL,NULL,'auto','1',NULL,'topmenu',3,'social',113),(185,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,NULL,NULL,'public','1',NULL,'topmenu',4,'module',113),(186,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,NULL,NULL,'private','1',NULL,'topmenu',5,'module',113),(187,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,NULL,NULL,'private','1',NULL,'topmenu',6,'module',113),(188,'Home',NULL,'home',NULL,1,NULL,'auto','1',NULL,'mainmenu',1,'page',114),(189,'About Us',NULL,'about',NULL,NULL,NULL,'auto','1',NULL,'mainmenu',2,'page',114),(190,'Blog',NULL,'blog','blog',NULL,NULL,'auto','1',NULL,'mainmenu',3,'module',114),(191,'Contact',NULL,'site/contact',NULL,NULL,NULL,'auto','1',NULL,'mainmenu',4,'module',114),(192,'About Us',NULL,'about',NULL,NULL,NULL,'auto','1',NULL,'footermenu',2,'page',114),(193,'Facebook','facebook','#',NULL,NULL,NULL,'auto','1',NULL,'topmenu',1,'social',114),(194,'Twitter','twitter','#',NULL,NULL,NULL,'auto','1',NULL,'topmenu',2,'social',114),(195,'Google Plus','google','#',NULL,NULL,NULL,'auto','1',NULL,'topmenu',3,'social',114),(196,'<span class=\"glyphicon glyphicon-user\"></span> Login / Register',NULL,'site/login',NULL,NULL,NULL,'public','1',NULL,'topmenu',4,'module',114),(197,'<span class=\"glyphicon glyphicon-log-out\"></span> Logout',NULL,'site/logout',NULL,NULL,NULL,'private','1',NULL,'topmenu',5,'module',114),(198,'<span class=\"glyphicon glyphicon-edit\"></span> My Account',NULL,'user/profile',NULL,NULL,NULL,'private','1',NULL,'topmenu',6,'module',114);
/*!40000 ALTER TABLE `jebapp_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_pages`
--

DROP TABLE IF EXISTS `jebapp_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `active` char(1) DEFAULT NULL,
  `title` varchar(255) NOT NULL COMMENT 'Page Title',
  `content` text COMMENT 'Page Content',
  `slug` varchar(255) NOT NULL COMMENT 'Slug (Friendly URL)',
  `meta_title` varchar(255) DEFAULT NULL COMMENT 'Meta Title',
  `meta_desc` tinytext COMMENT 'Meta Description',
  `meta_keywords` tinytext COMMENT 'Meta Keywords',
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jebapp_pages_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_pages_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_pages`
--

LOCK TABLES `jebapp_pages` WRITE;
/*!40000 ALTER TABLE `jebapp_pages` DISABLE KEYS */;
INSERT INTO `jebapp_pages` VALUES (2,'1','Privacy','<p>Privacy Policies Coming Soon</p>\r\n','privacy','jebmarket privacy policies','All the privacy policies of JebMarket.','jebmarket privacy policies',40),(3,'1','Terms & Conditions','<p>JebMarket Terms & Conditions coming soon</p>\r\n','terms','JebMarket Terms & Conditions','JebMarket Terms & Conditions','JebMarket terms & conditions',40),(4,'1','Benefits','<div class=\"container\">\n	<div class=\"row clearfix\">\n		<div class=\"col-md-12 column\">\n			<div class=\"container\">\n				<p>\n					A blog type landing page for summery of benefits and link for more details page.\n				</p>\n			</div>\n			<div class=\"row clearfix\">\n				<div class=\"col-md-12 column\">\n					<div class=\"carousel slide\" id=\"carousel-979004\">\n						<ol class=\"carousel-indicators\">\n							<li class=\"active\" data-slide-to=\"0\" data-target=\"#carousel-979004\">\n							</li>\n							<li data-slide-to=\"1\" data-target=\"#carousel-979004\">\n							</li>\n							<li data-slide-to=\"2\" data-target=\"#carousel-979004\">\n							</li>\n						</ol>\n						<div class=\"carousel-inner\">\n							<div class=\"item active\">\n								<img alt=\"\" src=\"http://lorempixel.com/1600/500/sports/1\">\n								<div class=\"carousel-caption\">\n									<h4>\n										First Thumbnail label\n									</h4>\n									<p>\n										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.\n									</p>\n								</div>\n							</div>\n							<div class=\"item\">\n								<img alt=\"\" src=\"http://lorempixel.com/1600/500/sports/2\">\n								<div class=\"carousel-caption\">\n									<h4>\n										Second Thumbnail label\n									</h4>\n									<p>\n										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.\n									</p>\n								</div>\n							</div>\n							<div class=\"item\">\n								<img alt=\"\" src=\"http://lorempixel.com/1600/500/sports/3\">\n								<div class=\"carousel-caption\">\n									<h4>\n										Third Thumbnail label\n									</h4>\n									<p>\n										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.\n									</p>\n								</div>\n							</div>\n						</div> <a class=\"left carousel-control\" href=\"#carousel-979004\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a> <a class=\"right carousel-control\" href=\"#carousel-979004\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>','benefits','','','',40),(7,'1','Membership Plans & Pricing','<p>Membership Plans & Pricing coming soon</p>','plans','Membership Plans & Pricing','Membership Plans & Pricing','Membership Plans & Pricing',40),(10,'1','Company','<p>Company Landing Page</p>\r\n','company','','','',40),(11,'1','Real Time MarketPlace','<div class=\"container\">\n	<div class=\"row clearfix\">\n		<div class=\"col-md-12 column\">\n			<div class=\"container\">\n				<div class=\"container\">\n					<div class=\"row clearfix\">\n						<div class=\"col-md-12 column\">\n							<h2 role=\"textbox\" class=\"cke_editable cke_editable_inline cke_contents_ltr cke_show_borders\">\n								Heading\n							</h2>\n							<p role=\"textbox\" class=\"cke_editable cke_editable_inline cke_contents_ltr cke_show_borders\">\n								Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.\n							</p>\n							<p>\n								 <a class=\"btn\" href=\"#\">View details »</a>\n							</p>\n						</div>\n					</div>\n				</div>\n			</div>\n		</div>\n	</div>\n</div>','market','Real Time MarketPlace','A Real Time MarketPlace for sellers and buyers.','Market, MarketPlace, Real Time Market, Buy, Sell, Shops',40),(14,'1','Home','<div class=\"container\">\n	<div class=\"row clearfix\">\n		<div class=\"col-md-12 column\">\n			<div class=\"carousel slide\" id=\"carousel-295776\">\n				<ol class=\"carousel-indicators\">\n					<li class=\"active\" data-slide-to=\"0\" data-target=\"#carousel-295776\">\n					</li>\n					<li data-slide-to=\"1\" data-target=\"#carousel-295776\">\n					</li>\n					<li data-slide-to=\"2\" data-target=\"#carousel-295776\">\n					</li>\n				</ol>\n				<div class=\"carousel-inner\">\n					<div class=\"item active\">\n						<img alt=\"\" src=\"http://lorempixel.com/1600/500/sports/1\">\n						<div class=\"carousel-caption\">\n							<h4>\n								First Thumbnail label\n							</h4>\n							<p>\n								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.\n							</p>\n						</div>\n					</div>\n					<div class=\"item\">\n						<img alt=\"\" src=\"http://lorempixel.com/1600/500/sports/2\">\n						<div class=\"carousel-caption\">\n							<h4>\n								Second Thumbnail label\n							</h4>\n							<p>\n								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.\n							</p>\n						</div>\n					</div>\n					<div class=\"item\">\n						<img alt=\"\" src=\"http://lorempixel.com/1600/500/sports/3\">\n						<div class=\"carousel-caption\">\n							<h4>\n								Third Thumbnail label\n							</h4>\n							<p>\n								Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.\n							</p>\n						</div>\n					</div>\n				</div> <a class=\"left carousel-control\" href=\"#carousel-295776\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a> <a class=\"right carousel-control\" href=\"#carousel-295776\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>\n			</div>\n		</div>\n	</div>\n</div>','home-page-view',NULL,'The online marketplace for buyer and seller','jebmarket, india, online market',40),(19,'1','about','<p>About Us Page Coming Soon</p>\r\n','abou',NULL,'All about JebMarket company and what it do','about Jebmarket, business solution, market',40),(20,'1','JebMarket Blog','<p>This is the blog page</p>\r\n','blog',NULL,'Blog for JebMarket','Blog',40),(21,'1','Abouta','<p>sdafsadfsad fsda fsad fsda fsda fsda&nbsp;</p>\r\n','abouta',NULL,'','',76),(22,'1','new','<div class=\"row\">\r\n<div class=\"col-lg-4 col-sm-4 price_box_left\">\r\n<div class=\"price_box1\">\r\n<h4><sup>$</sup>20<span>/month</span></h4>\r\n\r\n<h5>Basic</h5>\r\n\r\n<h6><a class=\"btn btn-primary btn-block start_now\" data-backdrop=\"static\" data-keyboard=\"false\" data-target=\"#signup_box\" data-toggle=\"modal\" href=\"/user/step1?name=Basic\">Start Now </a></h6>\r\n\r\n<ul>\r\n	<li>Unlimited bandwidth</li>\r\n	<li>Unlimited products</li>\r\n	<li>1 GB File storage</li>\r\n	<li>2.0% Transaction fee</li>\r\n	<li>Discount code engine</li>\r\n	<li>24x7 Phone support</li>\r\n	<li><s>Gift cards</s></li>\r\n	<li><s>Abandoned cart recovery</s></li>\r\n	<li><s>Professional reports</s></li>\r\n	<li><s>Advanced report builder</s></li>\r\n	<li><s>Real-time carrier shipping</s></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-sm-4 price_box_middle\">\r\n<div class=\"price_box3\">\r\n<p>Most Popular</p>\r\n\r\n<h4><sup>$</sup>70<span>/month</span></h4>\r\n\r\n<h5>Premium</h5>\r\n\r\n<h6><a class=\"btn btn-primary btn-block start_now\" data-backdrop=\"static\" data-keyboard=\"false\" data-target=\"#signup_box\" data-toggle=\"modal\" href=\"/user/step1?name=Premium\">Start Now </a></h6>\r\n\r\n<ul>\r\n	<li>Unlimited bandwidth</li>\r\n	<li>Unlimited products</li>\r\n	<li><span>5 GB</span> File storage</li>\r\n	<li><span>1.0%</span> Transaction fee</li>\r\n	<li>Discount code engine</li>\r\n	<li>24x7 Phone support</li>\r\n	<li>Gift cards</li>\r\n	<li>Abandoned cart recovery</li>\r\n	<li>Professional reports</li>\r\n	<li><s>Advanced report builder</s></li>\r\n	<li><s>Real-time carrier shipping</s></li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-lg-4 col-sm-4 price_box_right\">\r\n<div class=\"price_box2\">\r\n<h4><sup>$</sup>170<span>/month</span></h4>\r\n\r\n<h5>Executive</h5>\r\n\r\n<h6><a class=\"btn btn-primary btn-block start_now\" data-backdrop=\"static\" data-keyboard=\"false\" data-target=\"#signup_box\" data-toggle=\"modal\" href=\"/user/step1?name=Executive\">Start Now </a></h6>\r\n\r\n<ul>\r\n	<li>Unlimited bandwidth</li>\r\n	<li>Unlimited products</li>\r\n	<li><span>Unlimited</span> File storage</li>\r\n	<li><span>No</span> Transaction fee</li>\r\n	<li>Discount code engine</li>\r\n	<li>24x7 Phone support</li>\r\n	<li>Gift cards</li>\r\n	<li>Abandoned cart recovery</li>\r\n	<li>Professional reports</li>\r\n	<li>Advanced report builder</li>\r\n	<li>Real-time carrier shipping</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" class=\"modal fade\" id=\"signup_box\" role=\"dialog\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-lg\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header signup_step_head\">\r\n<ul class=\"list-inline signup_step\">\r\n	<li class=\"active\">\r\n	<p class=\"glyphicon glyphicon-th blue\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">1. Email Registration</p>\r\n	</li>\r\n	<li>\r\n	<p class=\"glyphicon glyphicon-briefcase\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">2. Initialize Business</p>\r\n	</li>\r\n	<li>\r\n	<p class=\"glyphicon glyphicon-saved\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">3. Select Template</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"modal-body\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" class=\"modal fade\" id=\"signup_box2\" role=\"dialog\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-lg\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header signup_step_head\">\r\n<ul class=\"list-inline signup_step\">\r\n	<li>\r\n	<p class=\"glyphicon glyphicon-th blue\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">1. Email Registration</p>\r\n	</li>\r\n	<li class=\"active\">\r\n	<p class=\"glyphicon glyphicon-briefcase\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">2. Initialize Business</p>\r\n	</li>\r\n	<li>\r\n	<p class=\"glyphicon glyphicon-saved\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">3. Select Template</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"modal-body\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" class=\"modal fade\" id=\"signup_box3\" role=\"dialog\" tabindex=\"-1\">\r\n<div class=\"modal-dialog modal-lg\">\r\n<div class=\"modal-content\">\r\n<div class=\"modal-header signup_step_head\">\r\n<ul class=\"list-inline signup_step\">\r\n	<li>\r\n	<p class=\"glyphicon glyphicon-th blue\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">1. Email Registration</p>\r\n	</li>\r\n	<li>\r\n	<p class=\"glyphicon glyphicon-briefcase\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">2. Initialize Business</p>\r\n	</li>\r\n	<li class=\"active\">\r\n	<p class=\"glyphicon glyphicon-saved\">&nbsp;</p>\r\n\r\n	<p class=\"step_name\">3. Select Template</p>\r\n	</li>\r\n</ul>\r\n</div>\r\n\r\n<div class=\"modal-body\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>','new',NULL,'','',40),(23,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,103),(24,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,103),(25,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,104),(26,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,104),(27,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,105),(28,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,105),(29,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,106),(30,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,106),(31,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,107),(32,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,107),(33,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,108),(34,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,108),(35,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,109),(36,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,109),(37,NULL,'New Page 1',NULL,'new-page-1',NULL,NULL,NULL,40),(38,NULL,'New Page 2',NULL,'new-page-2',NULL,NULL,NULL,40),(39,NULL,'New Page 3',NULL,'new-page-3',NULL,NULL,NULL,40),(40,NULL,'New Page 4',NULL,'new-page-4',NULL,NULL,NULL,40),(41,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,110),(42,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,110),(43,NULL,'New Page 1',NULL,'new-page-1',NULL,NULL,NULL,110),(44,NULL,'New Page 2',NULL,'new-page-2',NULL,NULL,NULL,110),(45,NULL,'New Page 3',NULL,'new-page-3',NULL,NULL,NULL,110),(46,NULL,'New Page 4',NULL,'new-page-4',NULL,NULL,NULL,110),(47,NULL,'New Page 5',NULL,'new-page-5',NULL,NULL,NULL,110),(48,NULL,'New Page 6',NULL,'new-page-6',NULL,NULL,NULL,110),(49,NULL,'New Page 7',NULL,'new-page-7',NULL,NULL,NULL,110),(50,NULL,'New Page 5',NULL,'new-page-5',NULL,NULL,NULL,40),(51,NULL,'New Page 6',NULL,'new-page-6',NULL,NULL,NULL,40),(52,NULL,'New Page 7',NULL,'new-page-7',NULL,NULL,NULL,40),(53,NULL,'New Page 8',NULL,'new-page-8',NULL,NULL,NULL,40),(54,NULL,'New Page 9',NULL,'new-page-9',NULL,NULL,NULL,40),(59,NULL,'New Page 10',NULL,'new-page-10',NULL,NULL,NULL,40),(60,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,111),(61,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,111),(62,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,112),(63,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,112),(64,NULL,'New Page 1',NULL,'new-page-1',NULL,NULL,NULL,112),(65,NULL,'New Page 10',NULL,'new-page-10',NULL,NULL,NULL,40),(66,NULL,'New Page 10',NULL,'new-page-10',NULL,NULL,NULL,40),(67,NULL,'New Page 10',NULL,'new-page-10',NULL,NULL,NULL,40),(68,NULL,'New Page 10',NULL,'new-page-10',NULL,NULL,NULL,40),(69,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,113),(70,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,113),(71,'1','About Us','<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','about',NULL,NULL,NULL,114),(72,'1','Home','<p><img alt=\"30.png\" class=\"thumb-image loaded\" data-image=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-image-dimensions=\"465x465\" data-image-focal-point=\"0.5,0.5\" data-image-id=\"527d3a50e4b04d1c0c14e385\" data-image-resolution=\"500w\" data-load=\"false\" data-src=\"http://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png\" data-type=\"image\" id=\"yui_3_10_1_1_1394392957326_912\" src=\"https://static.squarespace.com/static/4f6798afe4b097349e410d49/t/527d3a50e4b04d1c0c14e385/1383938643085/30.png?format=500w\" style=\"\" /></p>\n<h3><strong>There once was a man from down under...</strong></h3>\n<p>Pixel the rule of thirds jakob nielsen. Splash screen dribbble usability testing oblique complementary affordance jakob nielsen. Brainstorm modal delightful prototype navigation mockup script. Leading design thinking rounded corners type mental model. Bevel urbanized paper prototype heuristic photoshop usability. Helvetica color theory classical conditioning storyboard mockup abstraction coach marks fireworks delightful. Hover state usability testing balance sitemap golden ratio. Gradient cognitive dissonance modular scale sidebar jony ive hero message. Bauhaus focus group the user interface sidebar. Aspect ratio user-centered coach marks classical conditioning brainstorm. Palette steve jobs italic constraints icon braindump simplicity. Italic icon usability testing grouping figure-ground jony ive urbanized IDEO. Abstraction storyboard footer.</p>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">The&nbsp;<span style=\"font-weight: 700;\">About Us</span>&nbsp;page of your shop is vital because it&rsquo;s where users go when first trying to determine a level of trust. Since trust is such an important part of selling online, it&rsquo;s a good idea to give people a fair amount information about yourself and your shop. Here are a few things you should touch on:</p>\n<ul style=\"margin: 0px 0px 20px 20px; padding-right: 0px; padding-left: 0px; list-style-position: outside; list-style-image: none; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: 21.75px;\">\n	<li style=\"margin-bottom: 5px;\">Who you are</li>\n	<li style=\"margin-bottom: 5px;\">Why you sell the items you sell</li>\n	<li style=\"margin-bottom: 5px;\">Where you are located</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been in business</li>\n	<li style=\"margin-bottom: 5px;\">How long you have been running your online shop</li>\n	<li style=\"margin-bottom: 5px;\">Who are the people on your team</li>\n</ul>\n<p style=\"margin: 0px 0px 20px; line-height: 23px; color: rgb(85, 85, 85); font-family: Helvetica, Arial, sans-serif; font-size: 15px;\">To edit this information you can go to the&nbsp;<a href=\"https://sdgsdgdsg.myshopify.com/admin/pages\" style=\"color: rgb(244, 91, 79); text-decoration: none; outline: none;\">Pages section</a>&nbsp;of the administration menu.</p>','home',NULL,NULL,NULL,114);
/*!40000 ALTER TABLE `jebapp_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_rights`
--

DROP TABLE IF EXISTS `jebapp_rights`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_rights`
--

LOCK TABLES `jebapp_rights` WRITE;
/*!40000 ALTER TABLE `jebapp_rights` DISABLE KEYS */;
/*!40000 ALTER TABLE `jebapp_rights` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_settings`
--

DROP TABLE IF EXISTS `jebapp_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `options` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `validation` varchar(45) DEFAULT NULL,
  `tag` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_settings`
--

LOCK TABLES `jebapp_settings` WRITE;
/*!40000 ALTER TABLE `jebapp_settings` DISABLE KEYS */;
INSERT INTO `jebapp_settings` VALUES (13,'superAdminEmail','System Super Admin Email','','admin@jebmarket.com','text','','application-settings'),(19,'adminEmail','Application Admin Email','','support@jebmarket.com','text','','application-settings'),(20,'supportEmail','Support Email (use for reply to of all supports emails)','','support@jebmarket.com','text','','application-settings'),(21,'uploadPath','Media Upload Path','','media/upload/','text','','media-settings'),(22,'signupEmailTemplate','Signup Email Template Name','EmailTemplate::model()->findAll()','signup_activation_email','select','','email-template-settings'),(23,'passRecoveryEmailTemplate','Recovery Password Email Template Name','EmailTemplate::model()->findAll()','password_recovery_email','select','','email-template-settings'),(24,'emailVerificationLimit','Days Limit for Verify Email after Registration','','7','text','','application-settings'),(25,'sliderImageUrl','Image URL of slider images','','media/slider/','text','','media-settings'),(27,'contactusconfirmationemail','Contactus Confirmation Email Send','EmailTemplate::model()->findAll()','contactus_confirmation_email','select','','email-template-settings'),(28,'contactusformemail','Contactus Form Customize & Send','EmailTemplate::model()->findAll()','contactus_form_email','select','','email-template-settings'),(29,'avateruploadPath','avater image Upload Path','','media/avater/','text','','media-settings'),(32,'profileimagesizemin','Profile Image Minimum Size','','102','text','','media-settings'),(33,'sliderfilesizemin','Slider Image Minimum Size','','10240','text','','media-settings'),(34,'sliderfilesizemax','Slider Image Maximum Size','','10485760','text','','media-settings'),(35,'profileimagesizemax','Profile Image Maximum Size','','10485760','text','','media-settings'),(36,'piwikSuperAdminToken','Piwik Super Admin Token','','4954041b073a96a2fb58f5ec70d19a95','text','','application-settings'),(37,'piwikURL','Piwik Site Url','','http://analytics.jebmarket.com/','text','','application-settings');
/*!40000 ALTER TABLE `jebapp_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_slider`
--

DROP TABLE IF EXISTS `jebapp_slider`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `headline` varchar(255) DEFAULT NULL COMMENT 'Slider Headline',
  `content` tinytext COMMENT 'Slider Content',
  `image` varchar(255) DEFAULT NULL COMMENT 'Slider Image',
  `tag` varchar(45) DEFAULT NULL COMMENT 'Slider Tag',
  `order` tinyint(4) DEFAULT NULL COMMENT 'Slide Order',
  `class` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_slider`
--

LOCK TABLES `jebapp_slider` WRITE;
/*!40000 ALTER TABLE `jebapp_slider` DISABLE KEYS */;
INSERT INTO `jebapp_slider` VALUES (4,'Everything you need to sell online','and sell quickly','sloder1.jpg','home-slider',2,'slide-1'),(5,'Real Time Marketplace to shop comfortably','with best price and best product','slider-2.jpg','home-slider',3,'slide-3'),(6,'A Complete Business Solution','For all kinds of businesses','slider-3.jpg','home-slider',4,'slider-3');
/*!40000 ALTER TABLE `jebapp_slider` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_store`
--

DROP TABLE IF EXISTS `jebapp_store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `visibility` tinyint(4) DEFAULT NULL,
  `timezone` varchar(45) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `expire` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`),
  KEY `store_plan_idx` (`plan_id`),
  CONSTRAINT `store_plan` FOREIGN KEY (`plan_id`) REFERENCES `jebapp_store_plan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_store`
--

LOCK TABLES `jebapp_store` WRITE;
/*!40000 ALTER TABLE `jebapp_store` DISABLE KEYS */;
INSERT INTO `jebapp_store` VALUES (2,40,3,'JebBusiness',1,0,'Asia/Kolkata','2014-03-31 05:39:53',NULL,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `jebapp_store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_store_detail`
--

DROP TABLE IF EXISTS `jebapp_store_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_store_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(140) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `lat` varchar(45) DEFAULT NULL,
  `lon` varchar(45) DEFAULT NULL,
  `timetable` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `keyword` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_of_store_idx` (`store_id`),
  CONSTRAINT `detail_of_store` FOREIGN KEY (`store_id`) REFERENCES `jebapp_store` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_store_detail`
--

LOCK TABLES `jebapp_store_detail` WRITE;
/*!40000 ALTER TABLE `jebapp_store_detail` DISABLE KEYS */;
INSERT INTO `jebapp_store_detail` VALUES (2,2,36,NULL,'','','','','','','','','','','');
/*!40000 ALTER TABLE `jebapp_store_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_store_plan`
--

DROP TABLE IF EXISTS `jebapp_store_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_store_plan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `is_default` tinyint(1) DEFAULT '0',
  `description` varchar(255) DEFAULT NULL,
  `thumb_width_height` varchar(10) DEFAULT NULL,
  `image_width_height` varchar(10) DEFAULT NULL,
  `image_max_size` varchar(3) DEFAULT NULL,
  `image_per_product` tinyint(4) DEFAULT '5',
  `max_disk_space` smallint(6) DEFAULT NULL COMMENT 'In MB',
  `max_bandwidth` smallint(6) DEFAULT NULL COMMENT 'In MB',
  `product_per_store` tinyint(4) DEFAULT '99',
  `transaction_fee` decimal(20,6) DEFAULT NULL,
  `transaction_period` tinyint(1) DEFAULT NULL COMMENT ' 0 => monthly / 1=>yearly / 2 =>per transaction',
  `transaction_fee_type` tinyint(1) DEFAULT NULL COMMENT '0 => percentage / 1=>fixed ammount',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='each store belongs to one store plan';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_store_plan`
--

LOCK TABLES `jebapp_store_plan` WRITE;
/*!40000 ALTER TABLE `jebapp_store_plan` DISABLE KEYS */;
INSERT INTO `jebapp_store_plan` VALUES (3,'Unlimited',0,'The store plan for unlimited store functionality','400X400','600X600','10',99,0,NULL,99,0.000000,5,1);
/*!40000 ALTER TABLE `jebapp_store_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_store_product`
--

DROP TABLE IF EXISTS `jebapp_store_product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_store_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `store_id` int(11) NOT NULL,
  `manufacture_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `title` varchar(140) NOT NULL,
  `sku` varchar(64) DEFAULT NULL,
  `barcode_type` varchar(140) DEFAULT NULL,
  `barcode_value` varchar(64) DEFAULT NULL,
  `short_details` varchar(255) DEFAULT NULL,
  `added` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `published` datetime DEFAULT NULL,
  `price` decimal(20,6) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `default_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_store_product`
--

LOCK TABLES `jebapp_store_product` WRITE;
/*!40000 ALTER TABLE `jebapp_store_product` DISABLE KEYS */;
INSERT INTO `jebapp_store_product` VALUES (11,2,NULL,0,'new product',NULL,NULL,NULL,NULL,'2014-04-01 04:31:54',NULL,NULL,NULL,NULL,NULL),(12,2,NULL,0,'new product',NULL,NULL,NULL,NULL,'2014-04-01 07:51:42',NULL,NULL,NULL,NULL,NULL),(13,2,NULL,0,'new product',NULL,NULL,NULL,NULL,'2014-04-01 07:51:50',NULL,NULL,NULL,NULL,NULL),(14,2,NULL,0,'new product',NULL,NULL,NULL,NULL,'2014-04-01 07:52:12',NULL,NULL,NULL,NULL,NULL),(15,2,NULL,0,'new product',NULL,NULL,NULL,NULL,'2014-04-24 07:27:07',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `jebapp_store_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_store_product_detail`
--

DROP TABLE IF EXISTS `jebapp_store_product_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_store_product_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `description` text,
  `keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `buy_price` decimal(20,6) DEFAULT NULL,
  `page_title` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ref_detail_of_product_idx` (`product_id`),
  CONSTRAINT `ref_detail_of_product` FOREIGN KEY (`product_id`) REFERENCES `jebapp_store_product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_store_product_detail`
--

LOCK TABLES `jebapp_store_product_detail` WRITE;
/*!40000 ALTER TABLE `jebapp_store_product_detail` DISABLE KEYS */;
INSERT INTO `jebapp_store_product_detail` VALUES (10,11,NULL,NULL,NULL,NULL,NULL),(11,12,NULL,NULL,NULL,NULL,NULL),(12,13,NULL,NULL,NULL,NULL,NULL),(13,14,NULL,NULL,NULL,NULL,NULL),(14,15,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `jebapp_store_product_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_store_product_manufacture`
--

DROP TABLE IF EXISTS `jebapp_store_product_manufacture`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_store_product_manufacture` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `logo` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_store_product_manufacture`
--

LOCK TABLES `jebapp_store_product_manufacture` WRITE;
/*!40000 ALTER TABLE `jebapp_store_product_manufacture` DISABLE KEYS */;
/*!40000 ALTER TABLE `jebapp_store_product_manufacture` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_template`
--

DROP TABLE IF EXISTS `jebapp_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `price` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `columns` varchar(45) DEFAULT NULL,
  `layout` varchar(45) DEFAULT NULL,
  `categories` varchar(45) DEFAULT NULL,
  `sub_categories` varchar(45) DEFAULT NULL,
  `features` varchar(45) DEFAULT NULL,
  `owner_name` varchar(45) DEFAULT NULL,
  `owner_email` varchar(45) NOT NULL,
  `visibility` varchar(45) DEFAULT NULL,
  `active` int(1) DEFAULT '1',
  `create_date` datetime DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime DEFAULT '0000-00-00 00:00:00',
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`),
  KEY `fk_jebapp_template_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_template_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_template`
--

LOCK TABLES `jebapp_template` WRITE;
/*!40000 ALTER TABLE `jebapp_template` DISABLE KEYS */;
INSERT INTO `jebapp_template` VALUES (1,'jebmarket','Jebmarket Template','Jebmarket Template Description',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Jebmarket','test@test.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',40),(2,'theme-1','Test Template 1','Test Template 1 Description',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Test Template 1','test@test.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',40),(3,'theme-2','Test Template 2','Test Template 2 Description','10',NULL,NULL,NULL,NULL,NULL,NULL,'Test Template 1','test@test.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',40),(4,'theme-3','Test Template 3','Test Template 3 Description',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Test Template 1','test@test.com',NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',40);
/*!40000 ALTER TABLE `jebapp_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_user`
--

DROP TABLE IF EXISTS `jebapp_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `joined` datetime NOT NULL,
  `activationcode` varchar(255) DEFAULT NULL,
  `activationstatus` varchar(1) DEFAULT NULL,
  `resetcode` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `user_details_id` int(11) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  KEY `user_details_idx` (`user_details_id`),
  CONSTRAINT `user_details` FOREIGN KEY (`user_details_id`) REFERENCES `jebapp_user_details` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=115 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_user`
--

LOCK TABLES `jebapp_user` WRITE;
/*!40000 ALTER TABLE `jebapp_user` DISABLE KEYS */;
INSERT INTO `jebapp_user` VALUES (36,'emon','emon1@gmail.com','5deff72590970d099f7116dbfda5b4b2','523f3dc4894e28.70392375','2013-09-22 12:58:12','cc45989f164c3bced6673c90f06ada7b3809d79d','1',NULL,'2013-11-29 06:37:05','GMT + 6',53,'1'),(40,'jebadmin','admin@jebmarket.com','fdfeed8294ff1508724baff8565f6a32','524dd4a1951fb5.47093671','2013-10-03 14:33:37','e14213e1e01b68fb1ab031a45241bbca9dd27769','1',NULL,'2014-03-08 15:48:21','Asia/Kolkata',58,'1'),(56,'ekram','ekram.syed@gmail.com','db5cce0f6d7e2ca9ca2ebab646ee021d','529572931274a0.81815878','2013-12-18 16:12:03','8d0f9a2776be4a772789f2d1873f261116ac74bf','0',NULL,'2013-12-27 10:54:48','',87,'0'),(66,'rohit','jain.rohitraj@gmail.com','68010cd2684815d88ce4fb1fe4df8aa9','52955118e0b127.28048826','2013-10-15 01:27:23','f6af768f01bbefa971e374355f3f9cd13a755afb','1',NULL,'2013-12-29 19:19:44','Kolkata',123,'1'),(74,'neha84.jain','neha84.jain@gmail.com','9e867a9a397a8956c48a0787bdebc94a','52926f2364a0b1.86634331','2013-11-24 14:26:59','217d6deae4a584921892bddbc97ec7eb6742d52f','1',NULL,'2013-11-24 14:27:22',NULL,142,'1'),(75,'rohit1','test@rohit.com','e466185356e37798c7584b2f7f2ce519','529552e40de847.87118580','2013-11-26 19:03:16','2a97b6a0ba3c3e7b2cff831be7112fead9de14e2','0',NULL,'2014-01-02 01:59:01',NULL,148,'0'),(76,'zahangir060','zahangir060@gmail.com','9d29f3f8a23f11a7a8116b06d3367b03','52bdd1ca660102.84254657','2013-12-14 11:59:47','cd82833ff4a86116e52f0db9d123a4bf483d052b','1','ce53ba1e11103727f9d16291fbec03cc56a2b60c','2014-03-08 09:16:48','Pacific/Honolulu',159,'1'),(93,'username','username@jebmarket.com','a3250dfc42cc872099d28e90ba89e8a1','52cb19e5f03e71.11120218','2014-01-06 21:02:29','6b2c60c27d18d464578f98cefe6b64307c349209','0',NULL,'2014-01-06 21:02:48','Asia/Dhaka',197,'1'),(94,'zahangir1','zahangir060@ssss.com','f86909277f405f4d8e5093f39dd2afcc','52d8e1f5aa9c73.94647143','2014-01-17 07:55:33','e906e3f446f8ee6427bf0ae1389ff532b41450c1','0',NULL,'2014-01-17 08:29:26','Asia/Dhaka',198,'1'),(95,'test@test.com','test@test.com','4ca784c89b7a1fce6d09bcf502f09936','531b414c50e569.42942756','2014-03-08 16:11:56','86cf36c9d3f6b41df38fd8f68dd170caf3fd848b','0',NULL,'2014-03-08 16:11:59','Asia/Dhaka',199,'1'),(96,'jebadmin@dsfdsf.com','jebadmin@dsfdsf.com','00ab7c40a018855554ae15e6c29e3896','531b43200bdff8.79107253','2014-03-08 16:19:44','098f2af7ac9c88e3298e85a9a8d1a3728e63c8fd','0',NULL,'2014-03-08 16:19:47','Asia/Dhaka',200,'1'),(97,'trrr@ttt.com','trrr@ttt.com','bc31d69d617f911a98f02d2893c7c67b','531b44f6276206.40765053','2014-03-08 16:27:34','77945e35cf1441e00d41a2f8869ff920d93d4ab5','0',NULL,'2014-03-08 16:27:37','Asia/Dhaka',201,'1'),(98,'trdddrr@ttt.com','trdddrr@ttt.com','516de0829a1565d26624878a82e57eaa','531b45250354f6.85476780','2014-03-08 16:28:21','79dcbee1ce0fcee2c25b04f9f052fd9bcc2539e4','0',NULL,'2014-03-08 16:28:24','Asia/Dhaka',202,'1'),(99,'poei@eij.com','poei@eij.com','dbe5b38952f03d86ea4fcde975e99504','531b48c31065c5.68894412','2014-03-08 16:43:47','a9b2675ba41bedc4ebd3cedb1f8bfb3b554c976c','0',NULL,'2014-03-08 16:43:50','Asia/Dhaka',203,'1'),(100,'adfsd@gasdgsd.com','adfsd@gasdgsd.com','2180a793585092cc1f39d1e0f809d74e','531b7318962105.40805640','2014-03-08 19:44:24','df54cd4ba678aa91233a948d593e8925285d59c4','0',NULL,'2014-03-08 19:44:27','America/Los_Angeles',204,'1'),(101,'adsgfgdsg@gagsd.com','adsgfgdsg@gagsd.com','8da5f358ce54a3b24a4ecc71ae212ccd','531b7abb81d7c7.43618225','2014-03-08 20:16:59','0abc6e2511c6ec79782b7f7fc5403ff2c4bcb990','0',NULL,'2014-03-08 20:17:03','America/Los_Angeles',205,'1'),(102,'tstttt@tessst.com','tstttt@tessst.com','8fa2e8cc5df49681cea35a45ce7ab000','531f4ecdb96da1.17485068','2014-03-11 17:58:37','13f62aa78b0637c6935629965a20219f0b1db4c5','0',NULL,'2014-03-11 17:58:41','Asia/Dhaka',206,'1'),(103,'rwwqqwe@reeee.com','rwwqqwe@reeee.com','4e8168839692790128c67902a3ee2266','531f4f88a42fe1.85059389','2014-03-11 18:01:44','0fe44433547f7d30474a3bb3985a5018eded3bda','0',NULL,'2014-03-11 18:01:47','Asia/Dhaka',207,'1'),(104,'zahangir060@yahoo.com','zahangir060@yahoo.com','5601d23f45c54c09022b8a9225bd032a','531f504b01dc85.82254775','2014-03-11 18:04:59','a7f2fc359f0e39f6112b640e42c69ca84075ab18','0',NULL,'2014-03-11 19:03:27','Asia/Dhaka',208,'1'),(105,'adfadsf@hoblkjbl.com','adfadsf@hoblkjbl.com','152695043a8a5beb988a7f85672fd3b6','531fe964309585.50188118','2014-03-12 04:58:12','947f404339a58355c32a95579246d8c992a91d06','0',NULL,'2014-03-12 04:58:15','America/Los_Angeles',209,'1'),(106,'test4@gmail.com','test4@gmail.com','d1a6db7d9f9ffe2c24170be5e431107c','53231530cfbb86.22543127','2014-03-14 14:41:52','b54964a95257c6694c4d6e6f090cf86152f13328','0',NULL,'2014-03-14 14:41:56','Asia/Dhaka',210,'1'),(107,'testtest@test.com','testtest@test.com','be549f3e13f598116cca814bd946821c','532e4fd2e7f798.00398324','2014-03-23 03:06:58','af1a5d161a32709068f5404dc409096341768d24','0',NULL,'2014-03-23 03:07:02','America/Los_Angeles',211,'1'),(108,'testasd@gmail.com','testasd@gmail.com','204bb316bf10a443f1284febcd322540','532e5551ee9969.31167389','2014-03-23 03:30:25','aec442e861fd418fc78936b3634eb94048ae20ee','0',NULL,'2014-03-23 03:30:29','America/Los_Angeles',212,'1'),(109,'testtesttest@test.com','testtesttest@test.com','86eb7cb44c82a3cb0bb0eac3b675fd76','533106d27dedc3.00189853','2014-03-25 04:32:18','7347533399715719fc68ec86115dddffbbc453b4','0',NULL,'2014-03-25 04:32:21','America/Los_Angeles',213,'1'),(110,'neha@test.com','neha@test.com','509aeef299258b13a840bac5c9a232d8','5337a5de27daf7.77183383','2014-03-30 05:04:30','368c36b7b96ac1fa89cffd869f0f7fb161f09324','0',NULL,'2014-03-30 05:04:33','America/Los_Angeles',214,'1'),(111,'test123@test.com','test123@test.com','dc44e33e0a9b43f7a6a41958fd76f13a','533b9d953b7723.00136011','2014-04-02 05:18:13','aa2f63c185cd12d07cecaeddec5c0cdf41766cd7','0',NULL,'2014-04-02 05:18:17','America/Los_Angeles',215,'1'),(112,'test1234@test.com','test1234@test.com','eeb12bf23579588775434519974dde68','53420d46867cd0.74897554','2014-04-07 02:28:22','81ca1226ac0f3f798a2acc29bc1a015ac212d885','0',NULL,'2014-04-07 02:28:25','America/Los_Angeles',216,'1'),(113,'jebadminttt@fff.com','jebadminttt@fff.com','dfe18916552c87a22941f2ed64482bab','536d3a071b5da2.23044113','2014-05-09 20:26:47','dcc7d46fda7e7cec1c3302d82d3ddf6a2b5ce154','0',NULL,'2014-05-09 20:26:50','Asia/Dhaka',217,'1'),(114,'jebadmiss@ggg.com','jebadmiss@ggg.com','b2339e3f4b979edcd2024bc611c12e04','536d3ae143c6b3.32370924','2014-05-09 20:30:25','960b074d0f0cc369745373fa12b888ff2e5b6b63','0',NULL,'2014-05-09 20:30:28','Asia/Dhaka',218,'1');
/*!40000 ALTER TABLE `jebapp_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_user_details`
--

DROP TABLE IF EXISTS `jebapp_user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) DEFAULT NULL,
  `l_name` varchar(100) DEFAULT NULL,
  `organization` varchar(100) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `location` int(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zip` varchar(100) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `avater` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_user_details`
--

LOCK TABLES `jebapp_user_details` WRITE;
/*!40000 ALTER TABLE `jebapp_user_details` DISABLE KEYS */;
INSERT INTO `jebapp_user_details` VALUES (53,'Syed','Ekram Uddin Emon','BRAC','College Road','Uttara',NULL,'Bangladesh','Dhaka','Dhaka','1230','+8801733334444','+8809293945',NULL),(55,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(56,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(57,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,'Rohit','Jain','Jeb Cloud Solutions','D102, Vijay Heritage','Under the Sky',36,'World','Internet','JebMarket','831005','+919334638220',NULL,'avater.png'),(59,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(60,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(61,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(64,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(65,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(66,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(67,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(68,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(69,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(70,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(71,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(72,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(74,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(75,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(76,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(77,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(78,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(79,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(80,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(81,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(82,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(83,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(84,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(85,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(86,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(87,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(88,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(89,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(90,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(91,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(92,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(93,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(95,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(96,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(97,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(98,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(99,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(101,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(102,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(103,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(105,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(106,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(107,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(108,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(109,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(110,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(111,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(112,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(113,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(114,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(115,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(116,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(117,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(118,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(119,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(120,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(121,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(122,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(123,'Rohit','Jain',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(126,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(127,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(128,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(129,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(131,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(132,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(134,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(135,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(136,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(137,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(138,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(142,'Neha Jain','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(143,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(144,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(145,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(146,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(147,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(148,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(149,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(150,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(151,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(152,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(153,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(154,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(155,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(156,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(157,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(158,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(159,'asdfdsaf','sdafsdf','adf','asdfadsfhhhh',NULL,33,NULL,NULL,NULL,'1209','64655','4555454','zahangir060.jpg'),(160,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(161,'','','','dhaka',NULL,NULL,NULL,NULL,NULL,NULL,'hfdh','dhfhdhfdhdffdhdfhfdh',NULL),(162,'sdfasdf','asdfasdf','asdfa','dhaka',NULL,NULL,NULL,NULL,NULL,NULL,'hfdh','dhfhdhfdhdffdhdfhfdh',NULL),(164,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(165,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(166,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(167,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(168,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(169,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(170,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(171,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(172,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(174,'zahangir','alam','Dhaka','dhaka',NULL,NULL,NULL,NULL,NULL,NULL,'665','6565',NULL),(175,'zahangir','alam','Dhaka','dhaka',NULL,NULL,NULL,NULL,NULL,NULL,'665','6565',NULL),(176,'zahangir','alam','Dhaka','dhaka',NULL,NULL,NULL,NULL,NULL,NULL,'665','6565',NULL),(178,'First Name','Last Name','Organization','Address',NULL,NULL,NULL,NULL,NULL,NULL,'Phone','Fax',NULL),(180,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(182,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(186,'bbbbbbb','ccccccc','aaaaaaa','fdsdsf',NULL,33,NULL,NULL,NULL,NULL,'4545454','45455454',NULL),(187,'bbbbbbb','ccccccc','aaaaaaa','fdsdsf',NULL,33,NULL,NULL,NULL,NULL,'4545454','45455454',NULL),(191,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(197,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'+8801730302440','+88017',NULL),(198,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(199,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(200,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(201,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(202,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(203,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(204,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(205,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(206,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(207,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(208,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(209,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(210,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','','avater.png'),(211,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(212,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(213,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(214,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(215,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(216,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(217,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL),(218,'','','','',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL);
/*!40000 ALTER TABLE `jebapp_user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_user_template`
--

DROP TABLE IF EXISTS `jebapp_user_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_user_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `custom_template` text,
  `footer` text,
  `header` text,
  `custom_js` text,
  `custom_css` text,
  `type` varchar(45) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  `create_date` datetime DEFAULT '0000-00-00 00:00:00',
  `update_date` datetime DEFAULT '0000-00-00 00:00:00',
  `jebapp_template_id` int(11) NOT NULL,
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_jebapp_user_template_jebapp_template1_idx` (`jebapp_template_id`),
  KEY `fk_jebapp_user_template_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_user_template_jebapp_template1` FOREIGN KEY (`jebapp_template_id`) REFERENCES `jebapp_template` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jebapp_user_template_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_user_template`
--

LOCK TABLES `jebapp_user_template` WRITE;
/*!40000 ALTER TABLE `jebapp_user_template` DISABLE KEYS */;
INSERT INTO `jebapp_user_template` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL,0,'2014-05-09 20:25:37','2014-05-09 20:25:37',1,40),(2,NULL,NULL,NULL,NULL,NULL,NULL,0,'2014-05-09 20:25:54','2014-05-09 20:25:54',2,40),(3,NULL,NULL,NULL,NULL,NULL,NULL,1,'2014-05-09 20:31:37','2014-05-09 20:31:37',4,114),(4,NULL,NULL,NULL,NULL,NULL,NULL,1,'2014-05-09 20:56:16','2014-05-09 20:56:16',4,40);
/*!40000 ALTER TABLE `jebapp_user_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jebapp_website`
--

DROP TABLE IF EXISTS `jebapp_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jebapp_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `domain` varchar(200) NOT NULL,
  `description` tinytext,
  `email` varchar(45) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `favicon` varchar(200) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_desc` tinytext,
  `meta_keywords` tinytext,
  `jebapp_user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain_UNIQUE` (`domain`),
  KEY `fk_jebapp_website_jebapp_user1_idx` (`jebapp_user_id`),
  CONSTRAINT `fk_jebapp_website_jebapp_user1` FOREIGN KEY (`jebapp_user_id`) REFERENCES `jebapp_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jebapp_website`
--

LOCK TABLES `jebapp_website` WRITE;
/*!40000 ALTER TABLE `jebapp_website` DISABLE KEYS */;
INSERT INTO `jebapp_website` VALUES (1,'jebadmin','/',NULL,NULL,NULL,NULL,NULL,NULL,NULL,40),(2,'sdgsdgdsg','wewerewtewtewt',NULL,NULL,NULL,NULL,NULL,NULL,NULL,98),(3,'tererer','sdfdsfdsfdsf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,99),(4,'Test1','test1',NULL,NULL,NULL,NULL,NULL,NULL,NULL,100),(5,'Demo','demo',NULL,NULL,NULL,NULL,NULL,NULL,NULL,101),(6,'reeeee','wwwwww',NULL,NULL,'jebmarket_logo.png',NULL,NULL,NULL,NULL,103),(7,'Business Name','zahangir',NULL,NULL,'jebmarket_logo.png',NULL,NULL,NULL,NULL,104),(8,'Demo','test2',NULL,NULL,'jebmarket_logo.png',NULL,NULL,NULL,NULL,105),(9,'Business Name','domain3',NULL,NULL,'logo.png','favicon.ico',NULL,NULL,NULL,106),(10,'TestTest','rajweldstools',NULL,NULL,NULL,NULL,NULL,NULL,NULL,107),(11,'VasuCA','vasu',NULL,NULL,NULL,NULL,NULL,NULL,NULL,108),(12,'testtesttest','testtesttest',NULL,NULL,NULL,NULL,NULL,NULL,NULL,109),(13,'neha','neha',NULL,NULL,NULL,NULL,NULL,NULL,NULL,110),(14,'test123','test123','','','logo.jpg',NULL,'','','',111),(15,'test1234','test1234',NULL,NULL,NULL,NULL,NULL,NULL,NULL,112),(16,'sdfds','sssssff',NULL,NULL,NULL,NULL,NULL,NULL,NULL,113),(17,'sdgdsgdsg','sdgsdgdsg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,114);
/*!40000 ALTER TABLE `jebapp_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pcounter_save`
--

DROP TABLE IF EXISTS `pcounter_save`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcounter_save` (
  `save_name` varchar(10) NOT NULL,
  `save_value` int(10) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcounter_save`
--

LOCK TABLES `pcounter_save` WRITE;
/*!40000 ALTER TABLE `pcounter_save` DISABLE KEYS */;
INSERT INTO `pcounter_save` VALUES ('day_time',2456803),('max_count',4),('max_time',1400846400),('counter',71),('yesterday',1);
/*!40000 ALTER TABLE `pcounter_save` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pcounter_users`
--

DROP TABLE IF EXISTS `pcounter_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pcounter_users` (
  `user_ip` varchar(39) NOT NULL,
  `user_time` int(10) unsigned NOT NULL,
  UNIQUE KEY `user_ip` (`user_ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pcounter_users`
--

LOCK TABLES `pcounter_users` WRITE;
/*!40000 ALTER TABLE `pcounter_users` DISABLE KEYS */;
INSERT INTO `pcounter_users` VALUES ('\'180.234.100.125\'',1401002083),('\'24.6.173.48\'',1401048885);
/*!40000 ALTER TABLE `pcounter_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-26  2:23:55
