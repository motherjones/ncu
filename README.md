# Newsletter Curation Utility [NCU] (Previously known as Sir Simian)
## NCU: an online tool to make html newsletters
### Structure of NCU
* **index.php**: Main entry file. Contains input boxes for all newsletter elements
* *Individual newsletter template files*: Each contain newsletter specific code
	* **econundrum-template.php**
	* **food-redesign-template.php** (2016 redesigned version)
	* **food-template.php** (old version)
	* **inthemix-template.php**
	* **politics-template.php**
	* **breaking-news-template.php**
* **process_headlines.php**: Contains code common to all newsletters plus functions to write temp files & place finished newsletters into the archives directory
* **styles_includes.php**: CSS code for inline insertion into HTML code in PHP variables.
* **headlines_ajax_functions.php**: Code for writing out input boxes for each newsletter in the index.php page.
* **headlines_script.js**: Contains AJAX functions that fire off server side code in the **headlines_ajax_functions.php** file.
* **head_main.css**: NCU site CSS. Not for newsletter HTML code.
* **archives/index.php**: Code to control display & view of the archives section of Sir Simian.

### Directories and files not included in the repo that is necessary for Sir Simian function
* *temp*: This directory stores temporary files (snapshots) of newsletters in case of errors.
* *images*: NCU website images.
* *ckeditor*: CKEditor wysiwyg app directory.
* **credentials.inc**: Necessary for DB operations.

### Structure of the database
```
+---------------------------+
| Tables_in_headlines       |
+---------------------------+
| breaking_news             |
| econundrums_new           |
| food_for_thought_redesign |
| headlines                 |
| in_the_mix_new            |
| political_mojo_new        |
| trumpocracy               |
+---------------------------+
```
#### Structure of breaking_news table
```
+-----------------+--------------+------+-----+---------+----------------+
| Field           | Type         | Null | Key | Default | Extra          |
+-----------------+--------------+------+-----+---------+----------------+
| id              | int(11)      | NO   | PRI | NULL    | auto_increment |
| hed_date        | date         | YES  |     | NULL    |                |
| subject_line    | varchar(255) | YES  |     | NULL    |                |
| breaking        | text         | YES  |     | NULL    |                |
| breaking_url    | text         | YES  |     | NULL    |                |
| main_text       | text         | YES  |     | NULL    |                |
| more_news_1     | text         | YES  |     | NULL    |                |
| more_news_1_url | text         | YES  |     | NULL    |                |
| more_news_2     | text         | YES  |     | NULL    |                |
| more_news_2_url | text         | YES  |     | NULL    |                |
| more_news_3     | text         | YES  |     | NULL    |                |
| more_news_3_url | text         | YES  |     | NULL    |                |
| pixel_tracker   | text         | YES  |     | NULL    |                |
| pixel_tracker2  | text         | YES  |     | NULL    |                |
| lift_note       | text         | YES  |     | NULL    |                |
+-----------------+--------------+------+-----+---------+----------------+
```
#### Structure of econundrums_new table
```
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| id                 | int(11)      | NO   | PRI | NULL    | auto_increment |
| hed_date           | date         | YES  |     | NULL    |                |
| conundrum_hed      | varchar(255) | YES  |     | NULL    |                |
| conundrum_url      | text         | YES  |     | NULL    |                |
| conundrum_dek      | text         | YES  |     | NULL    |                |
| envirohealth1_hed  | varchar(255) | YES  |     | NULL    |                |
| envirohealth1_url  | text         | YES  |     | NULL    |                |
| envirohealth2_hed  | varchar(255) | YES  |     | NULL    |                |
| envirohealth2_url  | text         | YES  |     | NULL    |                |
| envirohealth3_hed  | varchar(255) | YES  |     | NULL    |                |
| envirohealth3_url  | text         | YES  |     | NULL    |                |
| envirohealth4_hed  | varchar(255) | YES  |     | NULL    |                |
| envirohealth4_url  | text         | YES  |     | NULL    |                |
| envirohealth5_hed  | varchar(255) | YES  |     | NULL    |                |
| envirohealth5_url  | text         | YES  |     | NULL    |                |
| moremojo_hed       | varchar(255) | YES  |     | NULL    |                |
| moremojo_url       | text         | YES  |     | NULL    |                |
| moremojo2_hed      | varchar(255) | YES  |     | NULL    |                |
| moremojo2_url      | text         | YES  |     | NULL    |                |
| moremojo3_hed      | varchar(255) | YES  |     | NULL    |                |
| moremojo3_url      | text         | YES  |     | NULL    |                |
| moremojo4_hed      | varchar(255) | YES  |     | NULL    |                |
| moremojo4_url      | text         | YES  |     | NULL    |                |
| moremojo5_hed      | varchar(255) | YES  |     | NULL    |                |
| moremojo5_url      | text         | YES  |     | NULL    |                |
| ad_link_bill       | text         | YES  |     | NULL    |                |
| ad_billboard       | text         | YES  |     | NULL    |                |
| ad_link_banner     | text         | YES  |     | NULL    |                |
| ad_banner          | text         | YES  |     | NULL    |                |
| ad_name            | varchar(255) | YES  |     | NULL    |                |
| subject_line       | varchar(255) | YES  |     | NULL    |                |
| ad_name2           | varchar(255) | YES  |     | NULL    |                |
| text_ad_dek        | text         | YES  |     | NULL    |                |
| conundrum_lead     | text         | YES  |     | NULL    |                |
| this_week          | varchar(255) | YES  |     | NULL    |                |
| envirohealth_title | varchar(255) | YES  |     | NULL    |                |
| moremojo_title     | varchar(255) | YES  |     | NULL    |                |
| sub_url            | text         | YES  |     | NULL    |                |
| sub_image          | text         | YES  |     | NULL    |                |
| sub_text           | varchar(255) | YES  |     | NULL    |                |
| sub_code           | text         | YES  |     | NULL    |                |
| lift_note          | text         | YES  |     | NULL    |                |
| pixel_tracker      | text         | YES  |     | NULL    |                |
| pixel_tracker2     | text         | YES  |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+
```
#### Structure of food_for_thought_redesign table
```
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| id                 | int(11)      | NO   | PRI | NULL    | auto_increment |
| hed_date           | date         | YES  |     | NULL    |                |
| fft_main_hed       | varchar(255) | YES  |     | NULL    |                |
| fft_main_hed_url   | text         | YES  |     | NULL    |                |
| fft_main_img       | text         | YES  |     | NULL    |                |
| fft_main_img_url   | text         | YES  |     | NULL    |                |
| fft_article_1      | text         | YES  |     | NULL    |                |
| fft_a1_source      | varchar(255) | YES  |     | NULL    |                |
| fft_a1_ital        | tinyint(1)   | YES  |     | NULL    |                |
| fft_a1_url         | text         | YES  |     | NULL    |                |
| fft_article_2      | text         | YES  |     | NULL    |                |
| fft_a2_source      | varchar(255) | YES  |     | NULL    |                |
| fft_a2_ital        | tinyint(1)   | YES  |     | NULL    |                |
| fft_a2_url         | text         | YES  |     | NULL    |                |
| fft_article_3      | text         | YES  |     | NULL    |                |
| fft_a3_source      | varchar(255) | YES  |     | NULL    |                |
| fft_a3_ital        | tinyint(1)   | YES  |     | NULL    |                |
| fft_a3_url         | text         | YES  |     | NULL    |                |
| fft_article_4      | text         | YES  |     | NULL    |                |
| fft_a4_source      | varchar(255) | YES  |     | NULL    |                |
| fft_a4_ital        | tinyint(1)   | YES  |     | NULL    |                |
| fft_a4_url         | text         | YES  |     | NULL    |                |
| fft_article_5      | text         | YES  |     | NULL    |                |
| fft_a5_source      | varchar(255) | YES  |     | NULL    |                |
| fft_a5_ital        | tinyint(1)   | YES  |     | NULL    |                |
| fft_a5_url         | text         | YES  |     | NULL    |                |
| fft_article_6      | text         | YES  |     | NULL    |                |
| fft_a6_source      | varchar(255) | YES  |     | NULL    |                |
| fft_a6_ital        | tinyint(1)   | YES  |     | NULL    |                |
| fft_a6_url         | text         | YES  |     | NULL    |                |
| snack_box          | varchar(255) | YES  |     | NULL    |                |
| fft_snack_box      | text         | YES  |     | NULL    |                |
| fft_sb_image       | text         | YES  |     | NULL    |                |
| fft_sb_attr        | varchar(255) | YES  |     | NULL    |                |
| in_our_ears        | varchar(255) | YES  |     | NULL    |                |
| fft_ioe_type       | int(11)      | YES  |     | NULL    |                |
| fft_ioe_item1      | text         | YES  |     | NULL    |                |
| fft_ioe1_source    | varchar(255) | YES  |     | NULL    |                |
| fft_ioe1_ital      | tinyint(1)   | YES  |     | NULL    |                |
| fft_ioe1_url       | text         | YES  |     | NULL    |                |
| fft_bite_add       | text         | YES  |     | NULL    |                |
| fft_bite_link      | text         | YES  |     | NULL    |                |
| fft_ioe_item2      | text         | YES  |     | NULL    |                |
| fft_ioe2_source    | varchar(255) | YES  |     | NULL    |                |
| fft_ioe2_ital      | tinyint(1)   | YES  |     | NULL    |                |
| fft_ioe2_url       | text         | YES  |     | NULL    |                |
| fft_ioe_item3      | text         | YES  |     | NULL    |                |
| fft_ioe3_source    | varchar(255) | YES  |     | NULL    |                |
| fft_ioe3_ital      | tinyint(1)   | YES  |     | NULL    |                |
| fft_ioe3_url       | text         | YES  |     | NULL    |                |
| hidden_kitchen     | varchar(255) | YES  |     | NULL    |                |
| fft_hk_leadin      | text         | YES  |     | NULL    |                |
| fft_hk_hed         | varchar(255) | YES  |     | NULL    |                |
| fft_hidden_kitchen | text         | YES  |     | NULL    |                |
| subject_line       | varchar(255) | YES  |     | NULL    |                |
| ad_name            | varchar(255) | YES  |     | NULL    |                |
| ad_billboard       | text         | YES  |     | NULL    |                |
| ad_link_bill       | text         | YES  |     | NULL    |                |
| ad_name2           | varchar(255) | YES  |     | NULL    |                |
| ad_link_banner     | text         | YES  |     | NULL    |                |
| ad_banner          | text         | YES  |     | NULL    |                |
| sub_url            | text         | YES  |     | NULL    |                |
| sub_image          | text         | YES  |     | NULL    |                |
| sub_text           | text         | YES  |     | NULL    |                |
| sub_code           | text         | YES  |     | NULL    |                |
| membership_slot    | text         | YES  |     | NULL    |                |
| lift_note          | text         | YES  |     | NULL    |                |
| pixel_tracker      | text         | YES  |     | NULL    |                |
| pixel_tracker2     | text         | YES  |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+
```
#### Structure of in_the_mix_new
```
+-------------------+--------------+------+-----+---------+----------------+
| Field             | Type         | Null | Key | Default | Extra          |
+-------------------+--------------+------+-----+---------+----------------+
| id                | int(11)      | NO   | PRI | NULL    | auto_increment |
| hed_date          | date         | YES  |     | NULL    |                |
| twmustread_hed    | varchar(255) | YES  |     | NULL    |                |
| twmustread_url    | text         | YES  |     | NULL    |                |
| twmustread_dek    | text         | YES  |     | NULL    |                |
| twmustread_title  | varchar(255) | YES  |     | NULL    |                |
| morefrommix1_hed  | varchar(255) | YES  |     | NULL    |                |
| morefrommix1_url  | text         | YES  |     | NULL    |                |
| morefrommix2_hed  | varchar(255) | YES  |     | NULL    |                |
| morefrommix2_url  | text         | YES  |     | NULL    |                |
| morefrommix3_hed  | varchar(255) | YES  |     | NULL    |                |
| morefrommix3_url  | text         | YES  |     | NULL    |                |
| morefrommix4_hed  | varchar(255) | YES  |     | NULL    |                |
| morefrommix4_url  | text         | YES  |     | NULL    |                |
| morefrommix5_hed  | varchar(255) | YES  |     | NULL    |                |
| morefrommix5_url  | text         | YES  |     | NULL    |                |
| morefrommix_title | varchar(255) | YES  |     | NULL    |                |
| fromarchive1_hed  | varchar(255) | YES  |     | NULL    |                |
| fromarchive1_url  | text         | YES  |     | NULL    |                |
| fromarchive2_hed  | varchar(255) | YES  |     | NULL    |                |
| fromarchive2_url  | text         | YES  |     | NULL    |                |
| fromarchive3_hed  | varchar(255) | YES  |     | NULL    |                |
| fromarchive3_url  | text         | YES  |     | NULL    |                |
| fromarchive4_hed  | varchar(255) | YES  |     | NULL    |                |
| fromarchive4_url  | text         | YES  |     | NULL    |                |
| fromarchive5_hed  | varchar(255) | YES  |     | NULL    |                |
| fromarchive5_url  | text         | YES  |     | NULL    |                |
| fromarchive_title | varchar(255) | YES  |     | NULL    |                |
| ad_name           | varchar(255) | YES  |     | NULL    |                |
| ad_link_bill      | text         | YES  |     | NULL    |                |
| ad_billboard      | text         | YES  |     | NULL    |                |
| ad_name2          | varchar(255) | YES  |     | NULL    |                |
| ad_link_banner    | text         | YES  |     | NULL    |                |
| ad_banner         | text         | YES  |     | NULL    |                |
| text_ad_dek       | text         | YES  |     | NULL    |                |
| subject_line      | varchar(255) | YES  |     | NULL    |                |
| sub_url           | text         | YES  |     | NULL    |                |
| sub_image         | text         | YES  |     | NULL    |                |
| sub_text          | varchar(255) | YES  |     | NULL    |                |
| twmustread_lead   | text         | YES  |     | NULL    |                |
| sub_code          | text         | YES  |     | NULL    |                |
| lift_note         | text         | YES  |     | NULL    |                |
| pixel_tracker     | text         | YES  |     | NULL    |                |
| pixel_tracker2    | text         | YES  |     | NULL    |                |
+-------------------+--------------+------+-----+---------+----------------+
```
#### Structure of political_mojo_new
```
+-------------------+--------------+------+-----+---------+----------------+
| Field             | Type         | Null | Key | Default | Extra          |
+-------------------+--------------+------+-----+---------+----------------+
| id                | int(11)      | NO   | PRI | NULL    | auto_increment |
| hed_date          | date         | YES  |     | NULL    |                |
| topstory_hed      | varchar(255) | YES  |     | NULL    |                |
| topstory_url      | text         | YES  |     | NULL    |                |
| topstory_dek      | text         | YES  |     | NULL    |                |
| topstory_byline   | text         | YES  |     | NULL    |                |
| topstory_title    | varchar(255) | YES  |     | NULL    |                |
| inothernews_hed   | varchar(255) | YES  |     | NULL    |                |
| inothernews_url   | text         | YES  |     | NULL    |                |
| inothernews2_hed  | varchar(255) | YES  |     | NULL    |                |
| inothernews2_url  | text         | YES  |     | NULL    |                |
| inothernews3_hed  | varchar(255) | YES  |     | NULL    |                |
| inothernews3_url  | text         | YES  |     | NULL    |                |
| inothernews4_hed  | varchar(255) | YES  |     | NULL    |                |
| inothernews4_url  | text         | YES  |     | NULL    |                |
| inothernews5_hed  | varchar(255) | YES  |     | NULL    |                |
| inothernews5_url  | text         | YES  |     | NULL    |                |
| inothernews_title | varchar(255) | YES  |     | NULL    |                |
| mostread1_hed     | varchar(255) | YES  |     | NULL    |                |
| mostread1_url     | text         | YES  |     | NULL    |                |
| mostread2_hed     | varchar(255) | YES  |     | NULL    |                |
| mostread2_url     | text         | YES  |     | NULL    |                |
| mostread3_hed     | varchar(255) | YES  |     | NULL    |                |
| mostread3_url     | text         | YES  |     | NULL    |                |
| mostread4_hed     | varchar(255) | YES  |     | NULL    |                |
| mostread4_url     | text         | YES  |     | NULL    |                |
| mostread5_hed     | varchar(255) | YES  |     | NULL    |                |
| mostread5_url     | text         | YES  |     | NULL    |                |
| mostread_title    | varchar(255) | YES  |     | NULL    |                |
| ad_link_bill      | text         | YES  |     | NULL    |                |
| ad_billboard      | text         | YES  |     | NULL    |                |
| ad_link_banner    | text         | YES  |     | NULL    |                |
| ad_banner         | text         | YES  |     | NULL    |                |
| ad_name           | varchar(255) | YES  |     | NULL    |                |
| ad_name2          | varchar(255) | YES  |     | NULL    |                |
| text_ad_dek       | text         | YES  |     | NULL    |                |
| subject_line      | varchar(255) | YES  |     | NULL    |                |
| sub_url           | text         | YES  |     | NULL    |                |
| sub_image         | text         | YES  |     | NULL    |                |
| sub_text          | varchar(255) | YES  |     | NULL    |                |
| topstory_lead     | text         | YES  |     | NULL    |                |
| sub_code          | text         | YES  |     | NULL    |                |
| lift_note         | text         | YES  |     | NULL    |                |
| pixel_tracker     | text         | YES  |     | NULL    |                |
| pixel_tracker2    | text         | YES  |     | NULL    |                |
+-------------------+--------------+------+-----+---------+----------------+
```
#### Structure of trumpocracy (for The Russian Connection)
```
+--------------------+--------------+------+-----+---------+----------------+
| Field              | Type         | Null | Key | Default | Extra          |
+--------------------+--------------+------+-----+---------+----------------+
| id                 | int(11)      | NO   | PRI | NULL    | auto_increment |
| hed_date           | date         | YES  |     | NULL    |                |
| subject_line       | varchar(255) | YES  |     | NULL    |                |
| trump_main_hed     | varchar(255) | YES  |     | NULL    |                |
| trum_main_url      | text         | YES  |     | NULL    |                |
| trum_main_dek      | text         | YES  |     | NULL    |                |
| trump_main_img     | text         | YES  |     | NULL    |                |
| trump_main_source  | varchar(255) | YES  |     | NULL    |                |
| trump_main_ital    | tinyint(1)   | YES  |     | NULL    |                |
| trump_main2_hed    | varchar(255) | YES  |     | NULL    |                |
| trump_main2_url    | text         | YES  |     | NULL    |                |
| trump_main2_img    | text         | YES  |     | NULL    |                |
| trump_main2_dek    | text         | YES  |     | NULL    |                |
| trump_main2_source | varchar(255) | YES  |     | NULL    |                |
| trump_main2_ital   | varchar(255) | YES  |     | NULL    |                |
| topnews_title      | varchar(255) | YES  |     | NULL    |                |
| topnews1_dek       | text         | YES  |     | NULL    |                |
| topnews1_source    | varchar(255) | YES  |     | NULL    |                |
| topnews1_ital      | tinyint(1)   | YES  |     | NULL    |                |
| topnews1_url       | text         | YES  |     | NULL    |                |
| topnews2_dek       | text         | YES  |     | NULL    |                |
| topnews2_source    | varchar(255) | YES  |     | NULL    |                |
| topnews2_ital      | tinyint(1)   | YES  |     | NULL    |                |
| topnews2_url       | text         | YES  |     | NULL    |                |
| topnews3_dek       | text         | YES  |     | NULL    |                |
| topnews3_source    | varchar(255) | YES  |     | NULL    |                |
| topnews3_ital      | tinyint(1)   | YES  |     | NULL    |                |
| topnews3_url       | text         | YES  |     | NULL    |                |
| topnews4_dek       | text         | YES  |     | NULL    |                |
| topnews4_source    | varchar(255) | YES  |     | NULL    |                |
| topnews4_ital      | tinyint(1)   | YES  |     | NULL    |                |
| topnews4_url       | text         | YES  |     | NULL    |                |
| topnews5_dek       | text         | YES  |     | NULL    |                |
| topnews5_source    | varchar(255) | YES  |     | NULL    |                |
| topnews5_ital      | tinyint(1)   | YES  |     | NULL    |                |
| topnews5_url       | text         | YES  |     | NULL    |                |
| wors_title         | varchar(255) | YES  |     | NULL    |                |
| wors1_dek          | text         | YES  |     | NULL    |                |
| wors1_source       | varchar(255) | YES  |     | NULL    |                |
| wors1_ital         | tinyint(1)   | YES  |     | NULL    |                |
| wors1_url          | text         | YES  |     | NULL    |                |
| wors2_dek          | text         | YES  |     | NULL    |                |
| wors2_source       | varchar(255) | YES  |     | NULL    |                |
| wors2_ital         | tinyint(1)   | YES  |     | NULL    |                |
| wors2_url          | text         | YES  |     | NULL    |                |
| wors3_dek          | text         | YES  |     | NULL    |                |
| wors3_source       | varchar(255) | YES  |     | NULL    |                |
| wors3_ital         | tinyint(1)   | YES  |     | NULL    |                |
| wors3_url          | text         | YES  |     | NULL    |                |
| wors4_dek          | text         | YES  |     | NULL    |                |
| wors4_source       | varchar(255) | YES  |     | NULL    |                |
| wors4_ital         | tinyint(1)   | YES  |     | NULL    |                |
| wors4_url          | text         | YES  |     | NULL    |                |
| ad_name            | varchar(255) | YES  |     | NULL    |                |
| ad_billboard       | text         | YES  |     | NULL    |                |
| ad_link_bill       | text         | YES  |     | NULL    |                |
| ad_name2           | varchar(255) | YES  |     | NULL    |                |
| ad_link_banner     | text         | YES  |     | NULL    |                |
| ad_banner          | text         | YES  |     | NULL    |                |
| sub_url            | text         | YES  |     | NULL    |                |
| sub_image          | text         | YES  |     | NULL    |                |
| sub_text           | text         | YES  |     | NULL    |                |
| sub_code           | text         | YES  |     | NULL    |                |
| membership_slot    | text         | YES  |     | NULL    |                |
| lift_note          | text         | YES  |     | NULL    |                |
| pixel_tracker      | text         | YES  |     | NULL    |                |
| pixel_tracker2     | text         | YES  |     | NULL    |                |
+--------------------+--------------+------+-----+---------+----------------+
```