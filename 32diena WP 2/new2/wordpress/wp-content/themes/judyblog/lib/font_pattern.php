<?php
global $font_menu;
global $font_heading;
global $font_body;
$font_text = "#body{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-weight:400;
}

/* header */
#header .logo-text{
	font-family:'".$font_heading."',Arial !important;
	font-size:60px;
	line-height:60px;
	font-weight:900;
	text-transform:uppercase;
	letter-spacing:5px;
}

.logo-tagline{
	font-family:'".$font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:300;
	text-transform:uppercase;
	letter-spacing:3px;
}

#main-menu-toggle a{
	font-family:'".$font_menu."',Arial !important;
	font-size:12px;
	line-height:24px;
	font-style: normal;
	font-weight: 400;
	letter-spacing:1px;
	text-transform:uppercase;
}

.main-menu ul li a{
	font-family:'".$font_menu."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-style: normal;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:1px;
	
}

.main-menu ul li li a, .main-menu ul li.current-menu-item li a, .main-menu ul li.current-menu-ancestor li a{
	font-family:'".$font_menu."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-style: normal;
	font-weight: 400;
	text-transform:uppercase;
	letter-spacing:1px;
	
}

/* page */
.text-404{
	font-family:'".$font_body."',Arial !important;
	font-size:144px;
	line-height:160px;
	font-style:normal;
	font-weight:400;
	text-transform:uppercase;
}

.page-entry-title h1{
	font-family:'".$font_body."',Arial !important;
	font-size:30px;
	line-height:36px;
	font-style:normal;
	font-weight:400;
}


#breadcrumb{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:16px;
	font-style:normal;
	font-weight:400;
	text-transform:uppercase;
}

/* tabs */
.tab-title{
	font-size:16px;
	line-height:30px;
	font-family:'".$font_body."',Arial !important;
	font-weight:700;
}

.tab-content{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
}

.tab-post .tab-title{
	font-size:18px;
	line-height:24px;
	font-family:'".$font_body."',Arial !important;
	font-weight:700;
	letter-spacing:-1px;
}

/* accordion */
.accor-title{
	font-size:16px;
	line-height:30px;
	font-family:'".$font_body."',Arial !important;
	font-weight:700;

}

.accor-content{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
}

/* gallery */
div.pp_default .pp_description {
	font-family:'".$font_body."',Arial !important;
}

/* info box */
.info-box{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-style:normal;
	font-weight:400;
}

/* dropcap */
.dropcap{
	font-family:'".$font_heading."',Arial !important;
	font-style:normal;
	font-weight:700;
	text-transform:uppercase;
}

/*icon list */
.custom-list,.custom-list a{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
	font-weight:400;
}

/* typography */
.content{
	font-family:'".$font_body."',Arial !important;
	font-size: 16px;
	line-height:28px;
	font-weight:400;
}

blockquote{
	font-family:'".$font_body."',Arial !important;
	font-size:18px;
	line-height:28px;
	font-style:normal;
	font-weight:900;
	letter-spacing:-1px;
}

h1{
	font-family:'".$font_body."',Arial !important;
	font-size: 30px;
	line-height:36px;
	font-weight:900;
	letter-spacing:-1px;
}

h2{
	font-family:'".$font_body."',Arial !important;
	font-size:26px;
	line-height:32px;
	font-weight:900;
	letter-spacing:-1px;
}

h3{
	font-family:'".$font_body."',Arial !important;
	font-size: 22px;
	line-height:28px;
	font-weight:900;
	letter-spacing:-1px;
}

h4{
	font-family:'".$font_body."',Arial !important;
	font-size: 18px;
	line-height:24px;
	font-weight:900;
	letter-spacing:-1px;
}

h5{
	font-family:'".$font_body."',Arial !important;
	font-size: 14px;
	line-height:18px;
	font-weight:900;
	letter-spacing:-1px;
}

h6{
	font-family:'".$font_body."',Arial !important;
	font-size: 12px;
	line-height:14px;
	font-weight:900;
	letter-spacing:-1px;
}


/* button */
.content .small-button,
.content a.small-button{
	font-size:12px;
	line-height:18px;
	font-family:'".$font_heading."',Arial !important;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

a.small-button i{
	font-size:12px;
	line-height:18px;
}


.content input[type=submit],
.content button,
.content .normal-button,
.content a.normal-button{
	font-size: 14px;
	line-height:24px;
	font-family:'".$font_heading."',Arial !important;
	font-weight:700;
	text-transform:uppercase;
	letter-spacing:1px;
}

a.normal-button i{
	font-size: 14px;
	line-height:24px;
}

.content .big-button,
.content a.big-button{
	font-size:18px;
	line-height:28px;
	font-family:'".$font_heading."',Arial !important;
	font-weight:900;
	text-transform:uppercase;
	letter-spacing:1px;
}

a.big-button i{
	font-size:18px;
	line-height:28px;
}

/* calendar */
#wp-calendar caption{
	font-size:24px;
	line-height:30px;
	font-family:'".$font_body."',Arial !important;
	font-weight:700;
	letter-spacing:-1px;
	text-transform:capitalize;
}

.content  table#wp-calendar{
	font-size:14px;
	line-height:24px;
	font-family:'".$font_body."',Arial !important;
	font-weight:400;
	text-transform:uppercase;
}

.content  #wp-calendar thead td , .content #wp-calendar thead th, .content #wp-calendar  tfoot td{
	font-weight:700;
}

/* default input */
.content input[type=text],.content input[type=password],.content input[type=email],.content select,.content textarea,.contact-form textarea{
	font-size:16px;
	line-height:24px;
	font-family:'".$font_body."',Arial !important;
	font-weight:400;
}

/* inner page */


.paginate{
	font-size: 0;
	letter-spacing:-2px;
}

.paginate .current{
	font-family:'".$font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-style:normal;
	font-weight:700;
}

.paginate a{
	font-family:'".$font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-style:normal;
	font-weight:700;
}


.paginate i{
	font-size:18px;
	line-height:24px;
}

/* search page */
.post-search-title{
	font-family:'".$font_body."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight:900;
	letter-spacing:-1px;
}

a.post-search-button{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

/* archive page */
h1.page-title {
	font-family:'".$font_body."',Arial !important;
	font-size:36px;
	line-height:48px;
	font-weight:900;
	letter-spacing:-1px;
}

/* blog page */
.post-entry-top{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

.post-entry-title a{
	font-family:'".$font_body."',Arial !important;
	font-size:30px;
	line-height:36px;
	font-weight:900;
	letter-spacing:-1px;
}

.post-entry-quote .post-entry-content p{
	font-family:'".$font_heading."',Arial !important;
	font-size:30px;
	line-height:36px;
	font-weight:900;
}

.post-entry-link{
	font-family:'".$font_heading."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:3px;
}

.post-entry-quote-author{
	font-family:'".$font_heading."',Arial !important;
	font-size:14px;
	line-height:18px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:3px;
}



.post-entry-content{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-style:normal;
	font-weight:400;
}


a.post-entry-button,.post-entry-author,.post-entry-date{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}


.post-entry-tags a,.sidebar-widget .tagcloud a{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px !important;
	line-height:14px !important;
	text-transform:uppercase;
	letter-spacing:1px;
}

/* author bio */

.author-bio{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
	font-style:normal;
}

.author-bio-title{
	font-family:'".$font_body."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:900;
	letter-spacing:-1px;
}

.author-bio-url a{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

/* post relative */
.post-relative-title{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:24px;
	font-weight:700;
	letter-spacing:-1px;
}

/* comment section */
.post-section-title ,h3#reply-title{
	font-family:'".$font_body."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight: 700;
	letter-spacing:-2px;
}

.comment-info{
	font-size:0px;
	line-height:0px;
}

.comment-author{
	font-family:'".$font_body."',Arial !important;
	font-size:18px;
	line-height:24px;
	font-weight:900;
	letter-spacing:-1px;
}

.comment-date{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

.comment-reply{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:14px;
	font-weight:400;
	text-transform:uppercase;
	letter-spacing:1px;
}

.comment-content{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
}


/* comment form */
.comment-notes{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
	font-weight:400;
}

.content .comment-form-author input , .content  .comment-form-email input , .content  .comment-form-url input {
	font-size:16px;
	line-height:24px;
	font-family:'".$font_body."',Arial !important;
	font-weight:400;
}

.comment-form-comment textarea{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
	font-weight:400;
}

.form-submit input[type=submit]{
	font-size:14px;
	line-height:24px;
	font-family:'".$font_heading."',Arial !important;
	font-weight:bold;
	text-transform:uppercase;
}

/* widget */

/* widget basic style */

.sidebar-widget{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
}

.sidebar-widget-title {
	font-size:24px;
	line-height:30px;
	font-family:'".$font_body."',Arial !important;
	font-weight: 700;
	letter-spacing:-2px;
}

.sidebar-widget ul li a{
	font-size:16px;
	line-height:30px;
	font-family:'".$font_body."',Arial !important;
}

/* footer widget */

.footer-widget{
	font-family:'".$font_body."',Arial !important;
	font-size:16px;
	line-height:28px;
}

.footer-widget-title {
	font-family:'".$font_body."',Arial !important;
	font-size:24px;
	line-height:30px;
	font-weight: 900;
	letter-spacing:-1px;
}

.footer-widget ul li a{
	font-size:16px;
	line-height:28px;
	font-family:'".$font_body."',Arial !important;
	font-weight: 400;
}


/* footer bottom*/
#footer-bottom{
	font-size:12px;
	line-height:14px;
	font-family:'".$font_heading."',Arial !important;
	font-weight: 400;
	font-style:normal;
	text-transform:uppercase;
	letter-spacing:1px;
}


/* tagcloud widget */
.tagcloud a{
	font-family:'".$font_heading."',Arial !important;
	font-size:12px;
	line-height:12px;
	text-transform:uppercase;
}

/* widget post */
.widget-post-title a{
	font-family:'".$font_body."',Arial !important;
	line-height:20px;
	font-size:16px;
	font-weight:400;
}

.widget-post-meta{
	font-family:'".$font_heading."',Arial !important;
	line-height:14px;
	font-size:12px;
	text-transform:uppercase;
}

/* twitter widget */
.footer-widget.widget_latest_tweets_widget ul li a time{
	font-family:'".$font_heading."',Arial !important;
	line-height:14px;
	font-size:12px;
	text-transform:uppercase;
	letter-spacing:1px;
}

.mc4wp-form h3{
	font-size:24px;
	line-height:30px;
	font-family:'".$font_body."',Arial !important;
	font-weight: 700;
	letter-spacing:-2px;
}

";

$parent_dir = dirname(dirname(__FILE__));
$font_file = $parent_dir.DS.'font-set'.DS."typography.css";
//file_put_contents($font_file,$font_text);
wp_write($font_file,$font_text);