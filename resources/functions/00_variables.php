<?php

/**
 * variables
 */

define('SITE_NAME', get_bloginfo('name'));
define("SITE_DESC", get_bloginfo('description'));
define('PAGE_TITLE_DELIMITER', '｜');
define("NAME_CORP", "株式会社オーテック");
define("URL_CORP", "https://www.o-tec.co.jp/");

define("URL_ASSETS", get_template_directory_uri() . "/assets/");
define("URL_CSS", URL_ASSETS . "css/");
define("URL_JS", URL_ASSETS . "js/");
define("URL_STATIC", URL_ASSETS . "static/");
define("URL_IMAGES", URL_ASSETS . "images/");
define("URL_FILE", URL_ASSETS . "file/");
define("URL_FAVICON", "/favicon.ico");
define("URL_TOUCH_ICON", URL_STATIC . "apple-touch-icon.png");
define("URL_SVG", URL_ASSETS . "svg/");
define("URL_MOVIE", URL_ASSETS . "movie/");

define("URL_COMMON_IMAGES", URL_IMAGES . "common/");
define("URL_FRONT_PAGE_IMAGES", URL_IMAGES . "front-page/");
define("URL_MODEL_IMAGES", URL_IMAGES . "model/");
define("URL_PAGES_IMAGES", URL_IMAGES . "pages/");
define("URL_TEMP_IMAGES", URL_IMAGES . "temp/");
define("URL_CMS_IMAGES", URL_IMAGES . "cms/");

define("URL_LOGO", URL_SVG . "logo.svg");
define("URL_LOGO_SP", URL_SVG . "logo-sp.svg");
define("NAME_LOGO", "");
define("URL_SITE_TITLE", URL_SVG . "site-title.svg");

// url
define("URL_HOME", home_url("/"));
define("URL_404", URL_HOME . "404/");

define("URL_FAQ", URL_HOME . "faq/");
define("NAME_FAQ", "よくある質問");

define("URL_NEW_GRADUATE", URL_HOME . "newgraduate/");
define("NAME_NEW_GRADUATE", "新卒募集要項");

define("URL_CAREER", URL_HOME . "career/");
define("NAME_CAREER", "キャリア募集要項");

define("URL_DISABILITY", URL_HOME . "disability/");
define("NAME_DISABILITY", "障がい者募集要項");

define("URL_VOICE", URL_HOME . "voice/");
define("NAME_VOICE", "先輩社員に聞いてみた");

define("URL_INTERVIEW", URL_HOME . "interview/");
define("NAME_INTERVIEW", "仕事と人を知る");

define("URL_PEOPLE", URL_HOME . "people/");
define("NAME_PEOPLE", "社員紹介");

define("URL_CROSSTALK", URL_HOME . "crosstalk/");
define("NAME_CROSSTALK", "クロストーク");

define("URL_PROJECT_STORY", URL_HOME . "projectstory/");
define("NAME_PROJECT_STORY", "プロジェクトストーリー");

define("URL_MESSAGE", URL_HOME . "message/");
define("NAME_MESSAGE", "メッセージ");

define("URL_BUSINESS", URL_HOME . "business/");
define("NAME_BUSINESS", "事業紹介");

define("URL_TECHNOLOGY", URL_HOME . "technology/");
define("NAME_TECHNOLOGY", "オーテックの建物環境を支える技術");

define("URL_BENEFIT", URL_HOME . "benefit/");
define("NAME_BENEFIT", "福利厚生と働く環境");

define("URL_SUPPORT", URL_HOME . "support/");
define("NAME_SUPPORT", "教育制度・研修制度");

define("URL_KEYWORD", URL_HOME . "keyword/");
define("NAME_KEYWORD", "数字とキーワードでみる");

define("URL_CONTACT", "https://www.o-tec.co.jp/contact/");
define("NAME_CONTACT", "お問い合わせ");

define("URL_MYNAVI_2025", "https://job.mynavi.jp/25/pc/search/corp73290/outline.html");
define("URL_MYNAVI_2026", "https://job.mynavi.jp/26/pc/corpinfo/displayInternship/index?corpId=73290&optNo=Vj4VU");
define("URL_MYNAVI_2027", "https://job.mynavi.jp/27/pc/search/corp73290/outline.html");
define("URL_MYPAGE_2025", "https://mypage.3050.i-webs.jp/o-tec2025/");
define("URL_MYPAGE_2026", "https://mypage.3030.i-webs.jp/o-tec2026/");
define("URL_MYPAGE_2027", "https://mypage.3030.i-webs.jp/o-tec2027/");

define("URL_PRIVACY", "https://www.o-tec.co.jp/company/policy/privacypolicy/");
define("URL_TERMS", "https://www.o-tec.co.jp/company/policy/terms/");

// sns

// share
define("URL_TWITTER_SHARE", "https://twitter.com/intent/tweet");
define("URL_FACEBOOK_SHARE", "https://www.facebook.com/sharer/sharer.php");
define("URL_LINE_SHARE", "https://social-plugins.line.me/lineit/share");

// Break points
define("BP_HD", "1280");
define("BP_TAB", "1024");
define("BP_SP", "768");

// get_template_partの簡略化
define("COMPONENTS", "components/");

define("LAYOUTS", COMPONENTS . "layout/");
define("ARTICLE_HEAD", LAYOUTS . "article-head");
define("SECTION_HEAD", LAYOUTS . "section-head");

define("OBJECTS", COMPONENTS . "object/");

define("PICTURES", OBJECTS . "picture/");
define("PICTURE", PICTURES . "picture");

define("BUTTONS", OBJECTS . "button/");
define("BUTTON", BUTTONS . "button");
define("BUTTON_ARROW", BUTTONS . "button-arrow");
define("BUTTON_EXTERNAL", BUTTONS . "button-external");
define("BUTTON_MENU", BUTTONS . "button-menu");
define("BUTTON_PICTURE", BUTTONS . "button-picture");
define("BUTTON_SECOND_NAV", BUTTONS . "button-second-nav");

define("ICONS", OBJECTS . "icon/");
define("ICON_ARROW", ICONS . "arrow");
define("ICON_EXTERNAL", ICONS . "external");
define("ICON_MENU", ICONS . "menu");
define("ICON_DEP", ICONS . "deployment");
define("ICON_RIBBON", ICONS . "ribbon");
define("ICON_TOGGLE", ICONS . "toggle");

define("TYPOGRAPHIES", OBJECTS . "typography/");
define("TYPO", TYPOGRAPHIES . "typo");
define("TYPO_EN", TYPOGRAPHIES . "typo-en");
define("SHOULDER", TYPOGRAPHIES . "shoulder");
define("ARTICLE_HEAD_HD", TYPOGRAPHIES . "article-head-hd");

define("CARDS", OBJECTS . "card/");
define("CARD", CARDS . "card");
define("CARD_SYSTEM", CARDS . "card-system");

define("MODELS", COMPONENTS . "model/");
define("NAV_BASIC", MODELS . "nav-basic");
define("NEWS_ITEM", MODELS . "news-item");
define("TOPICPATH", MODELS . "topic-path");
define("FAQ_CARD", MODELS . "faq-card");
define("INFORMATION", MODELS . "information");
define("PEOPLE_CARD", MODELS . "people-card");
define("RELATED_POSTS", MODELS . "related-posts");

define("PAGES", COMPONENTS . "pages/");

define("BUSINESS_ITEM", PAGES . "business/business-item");
define("BUSINESS_SLIDE", PAGES . "business/business-slide");

define("CROSSTALK_ITEM", PAGES . "crosstalk/crosstalk-item");
define("CROSSTALK_SECTION", PAGES . "crosstalk/crosstalk-section");

define("P_PEOPLE", PAGES . "people/");
define("PEOPLE_TITLES", P_PEOPLE . "people-titles");

define("P_TECHNOLOGY", PAGES . "technology/");
define("TECH_INFO", P_TECHNOLOGY . "tech-info");
define("TECH_ITEM", P_TECHNOLOGY . "tech-item");

define("P_PROJECTSTORY", PAGES . "projectstory/");
define("PROJECTSTORY_STAFF", P_PROJECTSTORY . "projectstory-staff");
define("PROJECTSTORY_INFO_HEAD", P_PROJECTSTORY . "projectstory-info-head");
define("PROJECTSTORY_FLOW_COL", P_PROJECTSTORY . "projectstory-flow-col");
define("PROJECTSTORY_OTHER_CARD", P_PROJECTSTORY . "projectstory-other-card");

// vite setting
define("IS_TYPE", wp_get_environment_type());
define("IS_TYPE_LOCAL", IS_TYPE === "local" ? true : false);
define("IS_TYPE_PRODUCTION", IS_TYPE === "production" ? true : false);
define("VITE_SERVER", "http://localhost:3000");