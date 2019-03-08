<?php
global $main_color;
$color_text = "::selection{
	background-color:#".$main_color.";
}

a,a:link , a:visited{
	color:#".$main_color.";
}

a:hover{
	color:#808080;
}

#page{
	background-color:#fafafa;
}

#back_top{
	background-color:#".$main_color.";
	color:white;
}

#back_top i{
	color:white;
}


#header{
	
}


#body{
	
}

.content {
	color:#4c4c4c;
}

/* header */
#topbar{
	border-bottom:1px solid #e5e5e5;
	box-shadow:0px 0px 5px rgba(0,0,0,0.2);
	background-color:white;
}

.logo-box a{
	color:#".$main_color.";
}

.logo-box a:hover{
	color:#".$main_color.";
}

.logo-tagline{
	color:#4c4c4c;
}

.top-social span:first-child a{
	border-left:1px solid #e5e5e5;
}

.top-social a{
	border-right:1px solid #e5e5e5;
	color:#4c4c4c;
	
}

.top-social a:hover{
	border-right:1px solid white;
}

.top-social a:hover i{
	color:white;
}

.top-social span:before{
	background-color:#".$main_color.";
}

/* menu */
#toggle-menu-button{
	border-left:1px solid #e5e5e5;
	border-right:1px solid #e5e5e5;
}

#toggle-menu-button i{
	color:#4c4c4c;
}

#toggle-menu-button:hover{
	background-color:#".$main_color.";
	border-left:1px solid #".$main_color.";
	border-right:1px solid #".$main_color.";
}

#toggle-menu-button:hover i{
	color:white;
}

.toggle-menu-close{
	border:1px solid rgba(255,255,255,0.5);
}

.toggle-menu-close i{
	color:rgba(255,255,255,0.5);
}

.toggle-menu-close:hover{
	border:1px solid white;
}

.toggle-menu-close:hover i{
	color:white;
}

#main-menu-toggle{
	background-color:#".$main_color.";
}

#main-menu-toggle ul li{
	border-top:1px solid rgba(255,255,255,0.2);
}

#main-menu-toggle ul li a{
	color:white;
}

#main-menu-toggle ul li a:hover{
	color:rgba(255,255,255,0.5);
}

#main-menu-toggle a:first-child{
	border-top:0px;
}

#main-menu-toggle a:hover{
	color:white;
}

.main-menu ul{
	border-left:1px solid #e5e5e5;
}

.main-menu ul li a{
	color:#4c4c4c;
	border-right:1px solid #e5e5e5;
	border-top:2px solid transparent;
}

.main-menu ul li:before{
	background-color:#".$main_color.";
}


.main-menu ul li a:hover{
	color:white;
	border-right:1px solid white;
}


.main-menu ul li.current-menu-item a,.main-menu ul li.current-menu-ancestor a{
	border-top:2px solid #".$main_color.";
	color:#4c4c4c;
}


.main-menu ul li.current-menu-item a:hover,.main-menu ul li.current-menu-ancestor a:hover{
	border-top:2px solid #".$main_color.";
	color:white;
}

/* sub menu */
.main-menu ul ul{
	background-color:white;
	box-shadow:0px 2px 2px rgba(0,0,0,0.1);
	
}


.main-menu ul ul ul{
	background-color:white;
	box-shadow:0px 2px 2px rgba(0,0,0,0.1);
	
}

/* normal sub menu item */
.main-menu ul li li a,
.main-menu ul li.current-menu-item li a,
.main-menu ul li li.current-menu-item li a ,
.main-menu ul li.current-menu-ancestor li a ,
.main-menu ul li li.current-menu-ancestor li a{
	color:#4c4c4c;
	border-top:1px solid #e5e5e5;
	border-right:1px solid #e5e5e5;
	background-color:white;
}


.main-menu ul li li.current-menu-item a ,
.main-menu ul li li li.current-menu-item a ,
.main-menu ul li li.current-menu-ancestor a { 
	color:#".$main_color.";
	background-color:white;
	border-right:1px solid #e5e5e5;
	border-top:1px solid #e5e5e5;
}

/* hoverring sub menu item */
.main-menu ul li li a:hover ,
.main-menu ul li.current-menu-item li a:hover ,
.main-menu ul li li.current-menu-item li a:hover ,
.main-menu ul li.current-menu-ancestor li a:hover{
	color:#".$main_color.";
	background-color:white;
	border-right:1px solid #e5e5e5;
	border-top:1px solid #e5e5e5;
}


/* body */
#page{
	
}

.text-404{
	color:#cccccc;
}

.page-entry{
	background-color:white;
	box-shadow:0px 0px 5px rgba(0,0,0,0.2);
}

.content .page-entry-title h1{
	color:#404040;
}

#breadcrumb{
	background-color:#f7f7f7;
	color:#a6a6a6;
}

#breadcrumb a{
	color:#a6a6a6;
}

#breadcrumb a:hover{
	color:#".$main_color.";
}

#breadcrumb span{
	color:#a6a6a6;
}

/* tabs */
.tab-post{
	box-shadow:0px 2px 3px rgba(0,0,0,0.05);
}

.tab{
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}

.tab-top{
	border:1px solid #cccccc;
}

.tab-title{
	color:4c4c4c;
	border-right:1px solid #cccccc;
	border-top:1px solid #cccccc;
}

.tab-title:hover{
	color:4c4c4c;
}


.tab-current,.tab-current:hover{
	color:#".$main_color.";
	border-top:1px solid #".$main_color.";
	background-color:#fafafa;
}

.tab-bottom{
	color:#808080;
	border:1px solid #cccccc;
	border-top:0px;
}

.tab-post .tab-bottom{
	background-color:white;
}

/* accordion */
.accor-title{
	color:#4c4c4c;
	border:1px solid #cccccc;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}

.accor-title:hover{
	color:#4c4c4c;
}

.accor-title i{
	color:#808080;
}

.ui-state-active,.ui-state-active:hover{
	color:#".$main_color.";
	background-color:#fafafa;
	border:1px solid #".$main_color.";
	box-shadow:0px 0px 0px;
}


.accor-title-icon{
	color:#a6a6a6;
	border:1px solid #bfbfbf;
} 

.accor-title-icon i{
	color:#a6a6a6;
} 

.ui-state-active .accor-title-icon{
	color:#".$main_color.";
	border:1px solid #".$main_color.";
} 

.ui-state-active .accor-title-icon i{
	color:#".$main_color.";
} 

.accor-content{
	color:#808080;
	border:1px solid #cccccc;
	border-top:0px;
}

.ui-accordion-content-active{
	color:#808080;

}

/* info box */
.info-box{
	color:#4c4c4c;
	background-color:#fafafa;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}

.general-box{
	color:#4c4c4c;
	background-color:#fafafa;
	border:1px solid #cccccc;
}

.general-box .info-box-remove{
	color:#cccccc;
	border:1px solid #cccccc;
}

.error-box{
	color:#e74c3c;
	background-color:#ffeded;
	border:1px solid #e74c3c;
}

.error-box .info-box-remove{
	color:#e74c3c;
	border:1px solid #e74c3c;
}

.alert-box{
	color:#c09d10;
	background-color:#faf6e5;
	border:1px solid #f1c40f;
}

.alert-box .info-box-remove{
	color:#f1c40f;
	border:1px solid #f1c40f;
}

.success-box{
	color:#2ecc71;
	background-color:#e7f6d8;
	border:1px solid #2ecc71;
}

.success-box .info-box-remove{
	color:#2ecc71;
	border:1px solid #2ecc71;
}

.note-box{
	color:#3498db;
	background-color:#ecf8fe;
	border:1px solid #3498db;
}

.note-box .info-box-remove{
	color:#3498db;
	border:1px solid #3498db;
}

/* dropcap */
.dropcap-style2{
	color:#".$main_color.";
}

.dropcap-style3{
	background-color:#4c4c4c;
}

.dropcap-style4{
	background-color:#".$main_color.";
	color:white;
}

/* custom list */
.content .custom-list  i{
	color:#".$main_color." !important;
	border:1px solid #cccccc;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}
	
/* contact form */
.contact-name-field div,.contact-email-field div,.contact-subject-field div,.contact-textarea div{
	color:#808080;
}

.contact-name-field span,.contact-email-field span,.contact-subject-field span,.contact-textarea span{
	color:#eb3636;
}

/* typography */
.content{
	color:#666666;
}

.content h1,.content h2,.content h3,.content h4,.content h5,.content h6{
	color:#4c4c4c;
}


pre{
	border:2px solid #e6e6e6;
	background-color:#fafafa;
	margin-bottom:12px;
	border-radius:7px;
}

blockquote{
	color:white;
	background-color:#".$main_color.";
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}


.content  li a{
	color:#".$main_color.";
}

.content  li a:hover{
	color:#808080;
}

.liked-button{
	color:#".$main_color.";
}

.social-icon{
	background-color:white;
	border:1px solid #cccccc;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}

.social-icon i{
	color:white;
}

.social-icon:hover{
	background-color:#4c4c4c;
	border:1px solid #4c4c4c;
}

.social-icon:hover i{
	color:rgba(255,255,255,0.8);
}

.social-bitbucket i{
	color:#205081;
}

.social-dropbox i{
	color:#007ee5;
}

.social-dribbble i{
	color:#ea4c89;
}

.social-gittip i{
	color:#339966;
}


.social-facebook i{
	color:#3b5998;
}

.social-flickr i{
	color:#ff0084;
}

.social-foursquare i{
	color:#0cbadf;
}

.social-github i{
	color:#171515;
}

.social-google-plus i{
	color:#dd4b39;
}

.social-instagram i{
	color:#3f729b;
}

.social-linkedin i{
	color:#0e76a8;
}

.social-pinterest i{
	color:#c8232c;
}

.social-skype i{
	color:#00aff0;
}

.social-stack-exchange i{
	color:#3a6da6;
}

.social-stack-overflow i{
	color:#ef8236;
}

.social-trello i{
	color:#256a92;
}

.social-tumblr i{
	color:#34526f;
}

.social-twitter i{
	color:#55acee;
}

.social-vimeo-square i{
	color:#44bbff;
}

.social-vk i{
	color:#45668e;
}

.social-weibo i{
	color:#eb182c;
}

.social-xing i{
	color:#126567;
}

.social-youtube i{
	color:#c4302b;
}

.content table th{
	border:1px solid #e5e5e5;
}

.content table td{
	border:1px solid #e5e5e5;
}

/* table */
#wp-calendar caption{
	color:white;
	border-bottom:1px solid #4c4c4c;
	border-bottom:0px;
	background-color:#4c4c4c;
}

.content  table#wp-calendar{
	color:#4c4c4c;
	
}

.content  #wp-calendar thead td , .content #wp-calendar thead th, .content #wp-calendar  tfoot td{
	color:#4c4c4c;
	border:1px solid #e5e5e5;
	background-color:white;
}

.content #wp-calendar tbody td{
	color:#808080;
	background-color:white;
	border:1px solid #e5e5e5;
}

/* default inputs */
.content input[type=text],.content input[type=password],.content input[type=email]{
	color:#808080;
	background-color:#fafafa;
	border:1px solid #cccccc;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}

.content textarea{
	color:#808080;
	background-color:#fafafa;
	border:1px solid #cccccc;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}

.content select{
	color:#808080;
	background-color:#fafafa;
	border:1px solid #cccccc;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
}



/* button */
.content input[type=submit],
.content button,
.content .normal-button,
.content a.normal-button,
.content .big-button,
.content a.big-button,
.content .small-button,
.content a.small-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#4c4c4c;
	box-shadow:2px 2px 0px rgba(0,0,0,0.1);
}


.content a.blue-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#3498db;
}

.content a.white-button{
	color:#4c4c4c;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#f2f2f2;
}

.content a.red-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#e74c3c;
}

.content a.green-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#2ecc71;
}

.content a.yellow-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#f1c40f;
}

.content a.pink-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#e73c8c;
}

.content a.aqua-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#2cc6b9;
}

.content a.orange-button{
	color:white;
	border:1px solid rgba(0,0,0,0.2);
	background-color:#f05127;
}

.content .normal-button:hover,
.content a.normal-button:hover,
.content .big-button:hover,
.content a.big-button:hover,
.content .small-button:hover,
.content a.small-button:hover{
	color:rgba(255,255,255,0.8);
	border:1px solid rgba(0,0,0,0.2);
	background-color:#3d3d3d;
}

.content input[type=submit]:hover,
.content button:hover{
	color:white;
	background-color:#".$main_color.";
}

.sidebar-widget .content a.sidebar-button{
	background-color:#".$main_color.";
	color:white;
}

.sidebar-widget .content a.sidebar-button:hover{
	color:rgba(255,255,255,0.5);
}

.footer-button{
	background-color:#".$main_color.";
	color:white;
}

/* inner page */


.paginate .current{
	color:#".$main_color.";
	background-color:white;
	border:1px solid #cccccc;
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
}


.paginate a{
	color:#737373;
	background-color:white;
	border:1px solid #cccccc;
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
}

.paginate a:hover{
	color:white;
	background-color:#".$main_color.";
	border:1px solid #".$main_color.";
}

/* archive page */
h1.page-title {
	color:#4c4c4c;
}

.post-search-entry{
	border-bottom:1px solid #e5e5e5;
}

.post-search-entry:last-child{
	border-bottom:0px;
}

.top-search-form{
	border-bottom:1px solid #e5e5e5;
}

.empty-search-result{
	border-bottom:0px;
}

/* blog page */
.sticky{
	border:2px solid #".$main_color.";
}

.post-entry-top,.post-entry-top a{
	color:#b2b2b2;
}

.post-entry-top a:hover{
	color:#".$main_color.";
}

.post-entry-top i{
	color:#".$main_color.";
}

.post-entry,.post-entry-single{
	background-color:white;
	box-shadow:0px 0px 5px rgba(0,0,0,0.2);
}

.post-entry-link{
	background-color:#".$main_color.";
	color:white;
}

.post-entry-link a{
	color:rgba(255,255,255,0.5);
}

.post-entry-link a:hover{
	color:white;
}
	
.post-entry-link i{
	color:rgba(255,255,255,0.5);
	background-color:rgba(255,255,255,0.1);
}

.post-entry-quote{
	background-color:#".$main_color.";
}

.post-entry-quote-author{
	color:rgba(255,255,255,0.5);
	
}



.post-entry-quote a{
	color:white;
}

.post-entry-quote a:hover{
	color:rgba(255,255,255,0.9);
}

.post-entry-quote i{
	color:rgba(255,255,255,0.3);
}


h1.post-entry-title,h1.post-entry-title a{
	color:#404040;
}

h1.post-entry-title a:hover{
	color:#".$main_color.";
}

.post-entry-content{
	color:#737373;
}

.post-entry-bottom{
	border-top:1px solid #e5e5e5;
}

.post-entry-button,.post-entry-author{
	border-right:1px solid #e5e5e5;
}

a.post-entry-button:before{
	background-color:#".$main_color.";
}

a.post-entry-button:hover,
a.post-entry-button:hover i{
	color:white;
}

.post-entry-author i,
.post-entry-date i{
	color:#".$main_color.";
}

.post-entry-author a,
.post-entry-date{
	color:#b2b2b2;
}

.post-entry-author a:hover{
	color:#".$main_color.";
}


.share-button-container{
	border:1px solid #e5e5e5;
	background-color:#fafafa;
}
	
.social-share-icon{
	border-right:1px solid #e5e5e5;
}

.social-share-icon:last-child{
	border-right:0px;
}

.social-share-icon:hover{
	background-color:#".$main_color.";
}

.social-share-icon i{
	color:#".$main_color.";
}


.social-share-icon:hover i{
	color:white;
}

.share-button-arrow{
	border-left: 10px solid #e5e5e5;
}

.post-entry-tags a{
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
	color:#808080;
	border:1px solid #cccccc;
}

.post-entry-tags a:hover{
	border:1px solid #".$main_color.";
	background-color:#".$main_color.";
	color:white;
}

/* author bio */

.author-bio{
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
	background-color:white;
	border:2px solid #b2b2b2;
}

.author-bio-title{
	color:#333333;
}
	
.author-bio-description{
	color:#808080;
}

.author-bio-url a{
	color:#".$main_color.";
	background-color:#fafafa;
}

.author-bio-url a:hover{
	color:white;
	background-color:#".$main_color.";
}

/* post relative */
.post-relative{
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
	background-color:white;
}

.post-relative-date{
	color:#b3b3b3;
}


.post-relative a{
	color:#808080;
}

.post-relative a:hover{
	color:#".$main_color.";
}


.post-section-title,#reply-title{
	color:#4c4c4c;
	border-bottom:1px solid #e5e5e5;
}


.post-relative-title a{
	color:#4c4c4c;
}

.post-relative-title a:hover{
	color:#".$main_color.";
}

/* comment section */

#comment-section{
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
	background-color:white;
}

.comment-entry{
	border-bottom:1px solid #dbdbdb;
}

.comment-entry-right-inner{
	
}

.comment-author,.comment-author a{
	color:#".$main_color.";
}

.comment-date i,.comment-reply i {
	color:#".$main_color.";
}

.comment-date a,.comment-reply a{
	color:#b2b2b2;
}

.comment-date a:hover,.comment-reply a:hover{
	color:#".$main_color.";
}

.comment-date a:hover,.comment-reply a:hover{
	color:#".$main_color.";
}

/* comment form */

#comment-form{
	background-color:white;
	box-shadow:0px 0px 5px rgba(0,0,0,0.1);
}

.comment-notes{
	color:#".$main_color.";
}

/* widget */

/* widget basic style */
.sidebar-widget{
	box-shadow:0px 0px 5px rgba(0,0,0,0.2);
	background-color:white;
}

.sidebar-widget-title{
	color:#404040;
	border-bottom:1px solid #e5e5e5;
}


.sidebar-widget:last-child{
	border-bottom:0px;
}

.sidebar-widget .content,.footer-widget .content{
	color:#808080;
}

.sidebar-widget .content a,.footer-widget .content a{
	color:#".$main_color.";
}

.content  .sidebar-widget a:hover,.content  .footer-widget a:hover{
	color:#808080;
}

.sidebar-widget .content ul li a,.footer-widget .content ul li a{
	color:#".$main_color.";
}

.content  .sidebar-widget ul li a:hover,.content  .footer-widget ul li a:hover{
	color:#808080;
}

.sidebar-widget .content ul li p a,.footer-widget .content ul li p a{
	color:#".$main_color.";
}

.sidebar-widget .content ul li p a:hover,.footer-widget .content ul li p a:hover{
	color:#808080;
}

/* footer */
#footer{
	background-color:white;
	box-shadow:0px 0px 5px rgba(0,0,0,0.2);
}

.footer-column{
	border-right:1px solid #e5e5e5;
}

.footer-column.column-last{
	border-right:0px;
}

.footer-widget-title{
	color:#737373;
}

#footer-bottom{
	border-top:1px solid #e5e5e5;
	background-color:white;
}

#footer-bottom a{
	color:#808080;
}

#footer-bottom a:hover{
	color:#".$main_color.";
}

#footer-copyright{
	color:#808080;
}

#footer-copyright a{
	color:#".$main_color.";
}

#footer-copyright a:hover{
	color:#4c4c4c;
}

/* footer widget */
.footer-widget{
	border-bottom:1px solid #e5e5e5;
}

.footer-widget:last-child{
	border-bottom:0px;
}

.footer-widget-title{
	color:#4c4c4c;
}

/* tagcloud */
.content .tagcloud a{
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
	color:#808080;
	border:1px solid #cccccc;
}

.content .tagcloud a:hover{
	border:1px solid #".$main_color.";
	background-color:#".$main_color.";
	color:white;
}

/* widget post */
.widget-post{
	border-bottom:1px solid #e5e5e5;
}

.widget-post:last-child{
	border-bottom:0px;
}

.content .widget-post-title a{
	color:#666666;
}

.content .widget-post-title a:hover{
	color:#".$main_color.";
}

.content .widget-post-meta{
	color:#b3b3b3;
}



/* subscribe form */
.widget_mc4wp_widget .sidebar-widget-content{
	border:2px solid #".$main_color.";
}

.mc4wp-form{
	background-color:white;
	color:#808080;
	box-shadow:0px 2px 3px rgba(0,0,0,0.1);
}

.content .mc4wp-form input[type=text],
.content .mc4wp-form input[type=password],
.content .mc4wp-form input[type=email]{
	background-color:#f2f2f2;
}

.mc4wp-error{
	color:#e74c3c;
}

.mc4wp-notice{
	color:#3498db;
}

.mc4wp-success{
	color:#2ecc71;
}

/* twitter widget */
.widget_latest_tweets_widget time{
	color:#a6a6a6;
}

#footer .footer-widget.widget_latest_tweets_widget ul li i{
	color:#".$main_color.";
	background-color:white;
	box-shadow:2px 2px 0px rgba(0,0,0,0.05);
	border:1px solid #e5e5e5;
}

/* flex slider style */
.content ol.flex-control-nav{
	padding:0px;
}

.flex-direction-nav .flex-next,.flex-direction-nav .flex-prev{
	background-color:#".$main_color.";
}

.flex-direction-nav .flex-next:hover,.flex-direction-nav .flex-prev:hover{
	background-color:rgba(0,0,0,0.5);
}

.flex-control-paging li a{
	border:2px solid #".$main_color.";
	background-color:transparent !important;
}

.flex-control-paging li a:hover{
	border:2px solid #".$main_color.";
	background-color:#".$main_color." !important;
}

.flex-control-paging li a.flex-active{
	border:2px solid #".$main_color.";
	background-color:#".$main_color." !important;
}
";

$parent_dir = dirname(dirname(__FILE__));
$color_file = $parent_dir.DS.'color-scheme'.DS."color.css";
//file_put_contents($color_file,$color_text);
wp_write($color_file,$color_text);