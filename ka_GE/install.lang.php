<?php
// +-----------------------------------------------------------------------+
// | Phyxo - Another web based photo gallery                               |
// | Copyright(C) 2014-2015 Nicolas Roudaire         http://www.phyxo.net/ |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2014 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+

$lang['Installation'] = 'დაყენება';
$lang['Basic configuration'] = 'საბაზო გასწორება';
$lang['Default gallery language'] = 'პრიორიტეტული ენა';
$lang['Database configuration'] = 'მონაცემთა ბაზის გასწორება';
$lang['Admin configuration'] = 'ადმინისტრირების გასწორება';
$lang['Start Install'] = 'დავიწყოთ დაყენება';
$lang['It will be shown to the visitors. It is necessary for website administration'] = 'მას დაინახავენ მნახველები.საჭიროა საიტის ადმინისტრირებისათვის';
$lang['Connection to server succeed, but it was impossible to connect to database'] = 'წარმატებით დაუკავშირდით სერვერს,მაგრამ მონაცემთა ბაზასთან დაკავშირება შეუძლებელია';
$lang['Can\'t connect to server'] = 'შეუძლებელია სერვერთან დაკავშირება';
$lang['Host'] = 'MySQL ხოსტი';
$lang['User'] = 'მომხმარებელი';
$lang['user login given by your host provider'] = 'სახელი(ლოგინი),რომელიც პროვაიდერმა მოგცათ';
$lang['user password given by your host provider'] = 'პაროლი,რომელიც პროვაიდერმა მოგცათ';
$lang['Database name'] = 'მონაცემთა ბაზის სახელი';
$lang['also given by your host provider'] = 'ასევე გაიცემა პროვაიდერის მიერ.ხშირად ემთხვევა სახელს(ლოგინს)';
$lang['Database table prefix'] = 'ცხრილის პრეფიქსი მონაცემთა ბაზაში';
$lang['database tables names will be prefixed with it (enables you to manage better your tables)'] = 'ცხრილის სათაური დაიწყება ამითი(რაც გააადვილებს მის მომსახურებას)';
$lang['enter a login for webmaster'] = 'საჭიროა შეიყვანოთ ლოგინი ვებმასტერისათვის';
$lang['webmaster login can\'t contain characters \' or "'] = 'ლოგინი ვებმასტერისათვის არ უნდა შეიცავდეს სიმბოლოებს  \' ან "';
$lang['please enter your password again'] = 'პაროლი კიდევ ერთხელ';
$lang['Keep it confidential, it enables you to access administration panel'] = 'არ გაუმხილოთ არავის,იგი საჭიროა ადმინისტრირების პანელთან დასაშვებად';
$lang['Password [confirm]'] = 'გაიმეორეთ პაროლი';
$lang['verification'] = 'კიდევ ერთხელ,შეცდომის გამოსარიცხად';
$lang['Need help ? Ask your question on <a href="%s">Piwigo message board</a>.'] = 'გჭირდებათ დახმარება?დასვით შეკითხვები <a href="%s">Piwigo–ს ფორუმზე</a>.';
$lang['Visitors will be able to contact site administrator with this mail'] = 'გამოყენებული იქნება მომხმარებლების მიერ ადმინისტრატორთან კავშირისათვის';
$lang['PHP 5 is required'] = 'საჭიროა PHP 5';
$lang['It appears your webhost is currently running PHP %s.'] = 'სავარაუდოდ თქვენი ხოსტინგი ამჟამად იყენებს PHP %s.';
$lang['Piwigo may try to switch your configuration to PHP 5 by creating or modifying a .htaccess file.'] = 'Piwigo–ს შეუძლია შეეცადოს გადართოს თქვენი კონფიგურაცია PHP 5, .htaccess ფაილს შექმნით ან შეცვლით.';
$lang['Note you can change your configuration by yourself and restart Piwigo after that.'] = 'აღნიშნეთ,რომ თქვენ შეგიძლიათ თქვენით შეცვალოთ კონფიგურაცია და ამის შემდეგ ახლიდან გაუშვით Piwigo.';
$lang['Try to configure PHP 5'] = 'შვეცადოთ PHP 5 გადაკონფიგურირება';
$lang['Sorry!'] = 'ბოდიში!';
$lang['Piwigo was not able to configure PHP 5.'] = 'Piwigo–ს არ შეუძლია PHP 5 გადაკონფიგურირება.';
$lang['You may referer to your hosting provider\'s support and see how you could switch to PHP 5 by yourself.'] = 'თქვენ უნდა მიმართოთ პროვაიდერს დახმარებისა და განმარტებისათვის ტუ როგორ მოახერხოთ PHP 5 ზე გადართვა.';
$lang['Hope to see you back soon.'] = 'იმედი გავქვს მალე შემოგვიერთდებით.';
$lang['Congratulations, Phyxo installation is completed'] = 'გილოცავთ,Phyxo–ს დაყენება დამთავრებულია';
$lang['An alternate solution is to copy the text in the box above and paste it into the file "local/config/database.inc.php" (Warning : database.inc.php must only contain what is in the textarea, no line return or space character)'] = 'ალტერნატიული გადაწყვეტილება მდგომარეობს შემდეგში,შეგიძლიათ დააკოპიროთ ტექსტი მაღლა ბლოკიდან და ჩასვათ ამ ფაილში "local/config/database.inc.php"   (გაფრთხილება: database.inc.php უნდა შეიცავდეს მხოლოდ იმას რაც წერია textarea–ში, თავისუფალი ადგილების და დაბრუნების ხაზების გარეშე)';
$lang['Creation of config file local/config/database.inc.php failed.'] = 'კონფიგურაციის ფაილის local/config/database.inc.php შექმნა არ მოხერხდა.';
$lang['Download the config file'] = 'ავტვირთოთ კონფიგურაციის ფაილი';
$lang['You can download the config file and upload it to local/config directory of your installation.'] = 'თქვენ შეგიძლიათ ატვირთოთ კონფიგურაციის ფაილი და გადასცეთ იგი local/config directory ში.';
$lang['Don\'t hesitate to consult our forums for any help : %s'] = 'ნუ მოგერიდებათ დახმარებისა და კონსულტაციისათვის მოგვმართოთ ჩვენს ფორუმზე: %s';
$lang['Just another Phyxo gallery'] = 'Phyxo -ს კიდევ ერთი გალერეა';
$lang['Welcome to my photo gallery'] = 'კეთილი იყოს ჩემს ფოტო გალერეაში თქვენი მობრძანება';
$lang['Welcome to your new installation of Phyxo!'] = 'კეთილი იყოს თქვენს მიერ Phyxo -ს დაყენება!';
