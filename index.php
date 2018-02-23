<?php
header("Content-Type: text/html;charset=UTF-8");
include "credentials.inc";
$today = date("Y-m-d", time());
?>
<!DOCTYPE html>
<html>
<head>
  <title>MoJo Newsletter Curation Utility</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="head_main.css" />
  <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
  <script type="text/javascript" language="javascript" src="headlines_script.js"></script>
  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <script type="text/javascript">
  CKEDITOR.config.customConfig = 'custom-config.js';
    function makeEditor(numId) {
      var editor_height = 0;
      if(numId == "conundrum_dek" || numId == "maindish_dek" || numId == "twmustread_dek" || numId == "topstory_dek" || numId == "fft_hidden_kitchen" || numId == "fft_ioe_item1" || numId == "fft_ioe_item2" || numId == "fft_ioe_item3" || numId == "lift_note" || numId == "main_text" || numId == "trum_main_dek" || numId == "trump_main2_dek") {
          CKEDITOR.replace(numId, {
              width: 410,
              height: 200
            });
          CKEDITOR.config.scayt_autoStartup = true;
        	CKEDITOR.config.scayt_sLang = 'en_US';
          CKEDITOR.config.extraPlugins = 'autogrow,justify';
          CKEDITOR.config.autoGrow_minHeight = 200;
          CKEDITOR.config.autoGrow_maxHeight = 400;
          CKEDITOR.config.resize_enabled = true;
          CKEDITOR.instances[numId].on('blur', function(e) {
             var temp_text = CKEDITOR.instances[numId].getData();
             var clean_text = cleanstring(temp_text);
             CKEDITOR.instances[numId].setData(clean_text);
          });
      }
      else if(numId == "fft_article_1" || numId == "fft_article_2" || numId == "fft_article_3" || numId == "fft_article_4" || numId == "fft_article_5" || numId == "fft_article_6" || numId == "fft_snack_box" || numId == "fft_sb_attr" || numId == "fft_hk_leadin" || numId == "fft_bite_add" || numId == "membership_slot" || numId == "topnews1_dek" || numId == "topnews2_dek" || numId == "topnews3_dek" || numId == "topnews4_dek" || numId == "topnews5_dek" || numId == "wors1_dek" || numId == "wors2_dek" || numId == "wors3_dek" || numId == "wors4_dek") {
          CKEDITOR.replace(numId, {
              width: 410,
              height: 100
            });
          CKEDITOR.config.scayt_autoStartup = true;
        	CKEDITOR.config.scayt_sLang = 'en_US';
          CKEDITOR.config.extraPlugins = 'autogrow,justify';
          CKEDITOR.config.autoGrow_minHeight = 100;
          CKEDITOR.config.autoGrow_maxHeight = 200;
          CKEDITOR.config.resize_enabled = true;
          CKEDITOR.instances[numId].on('blur', function(e) {
             var temp_text = CKEDITOR.instances[numId].getData();
             var clean_text = cleanstring(temp_text);
             CKEDITOR.instances[numId].setData(clean_text);
          });
      }
      else {
        editor_height = "200";
      }
    }
    </script>
</head>
<body>
  <div id="header">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 813.67 165.61"><path d="M53.72 97.86h-.39l-8.05-86.64H0v152.49h28.78v-85.9l-1.67-36.19 2.05 14.73 14.39 107.36h19.18L77.12 56.35l2.05-14.73-1.66 36.19v-.04 85.94h28.77V11.22H62.54l-8.82 86.64M391.4 87.12c0-33.06-1.23-58.67-34-58.67S321 61.67 321 91.17c0 37.54 5.56 74.1 39.71 74.1 19.34 0 30.18-17.68 30.18-17.68v-31.07s-8.4 21.23-24.62 21.23c-11.32 0-17.65-10.58-17.65-27.83h42c.01-3.49.78-13.92.78-22.8zm-42.79-3.22c0-13.9 1.92-24.9 9.6-24.9 8.25 0 10.17 12.31 10.17 24.94zM148.49 28.44c-38.75 0-38.75 27.18-38.75 65.11 0 43.53 3.93 71.72 38.75 71.72s38.75-26 38.75-75c.01-35.87.01-61.83-38.75-61.83zm0 104.47c-9.21 0-10-5-10-36.06 0-29.34.77-36.06 10-36.06s10 7.08 10 36.06c-.02 27.23-.79 36.07-10 36.07zM442.34 28.44c-9.37 0-13.73 8.49-16 17.24l-2.56 19.49V30h-29v133.7h31.08V92.19c0-26 7.86-30.34 15.94-30.34 11.79 0 14.55 14.16 14.55 14.16V35.77s-5.48-7.33-14.01-7.33zm-145.72 0c-10.55 0-17.44 7.48-19.7 18.65l-2.17 12.5V11.22h-31.08v152.49h31.08V74.29c0-5.13.44-13.88 6.33-13.88s5.37 7.57 5.37 14.67v88.63h31.08V50.92c0-11.48-4.8-22.48-20.91-22.48zm261.29.34c-38.75 0-38.75 27.18-38.75 65.11 0 43.53 3.93 71.72 38.75 71.72s38.75-26 38.75-75c0-35.87 0-61.83-38.75-61.83zm0 104.47c-9.21 0-10-5-10-36.06 0-29.34.77-36.06 10-36.06s10 7.08 10 36.06c-.03 27.22-.8 36.06-10 36.06zm95.16-104.81c-10.55 0-17.44 7.48-19.7 18.65l-2.18 12.5V30h-31.07v133.7h31.08V74.29c0-5.13.44-13.88 6.33-13.88s5.37 7.59 5.37 14.67v88.63H674V50.92c0-11.48-4.82-22.48-20.93-22.48zm-196.65 91.04v35.95s5.38 9.57 24.19 9.57c28.22 0 35.09-23.13 35.09-48.79v-105h-28.78v92.09c0 26-7.86 30.34-15.94 30.34-11.8-.01-14.56-14.16-14.56-14.16zm294.37-2.96c2.8 10.71 8.62 21.34 21.82 21.34 8.73 0 12.83-3 13.24-11.5.89-18.69-34.34-27.06-34.34-59.75 0-28.46 13.87-38.16 33.77-38.16 11.63 0 23.26 7.85 26.62 15.53V76c-3.36-9.36-10.27-20.08-19.8-20.08-7.55 0-11.17 3.6-11.51 10.72-.92 19.3 33.09 26.18 33.09 56.64 0 25.71-9 42-34.34 42-20.13 0-28.54-17.68-28.54-17.68zm-2.95-29.4c0-33.06-1.23-58.67-34-58.67s-36.45 33.23-36.45 62.73c0 37.54 5.56 74.1 39.71 74.1 19.34 0 30.18-17.68 30.18-17.68v-31.08s-8.4 21.23-24.62 21.23c-11.32 0-17.65-10.58-17.65-27.83h42c.07-3.49.83-13.92.83-22.8zm-42.78-3.22c0-13.9 1.94-24.9 9.6-24.9 8.25 0 10.17 12.31 10.17 24.94z"></path><path class="cls-1" d="M221.79 0l-37 33.52s5.88 14.91 5.88 40.66v65.18c0 18.45 10.74 25.93 25.9 25.93 10.43 0 17.28-2.83 23.6-8.49v-27.63c-2.51 4.56-5.31 7-9.72 7-4.67 0-8.69-3.38-8.69-10.79V58.2h18.44V30h-18.41z"></path></svg>
    <h2 id="head_text"><em>MoJo</em> Newsletter Curation Utility [<strong>MNCU</strong>]</h2>
  </div>
  <nav id="button_bar">
  	<input id="breaking_news" type="button" value="Breaking News" class="news_btn">
  	<input id="econundrums_new" type="button" value="Econundrums" class="news_btn">
  	<input id="food_for_thought_redesign" type="button" value="Food for Thought" class="news_btn">
  	<input id="in_the_mix_new" type="button" value="In the Mix" class="news_btn">
  	<input id="political_mojo_new" type="button" value="Politial MoJo" class="news_btn">
  	<input id="trumpocracy" type="button" value="The Russian Connection" class="news_btn">
  </nav>
</body>
</html>