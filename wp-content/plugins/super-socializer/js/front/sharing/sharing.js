/**
 * Show more sharing services popup
 */
function theChampMoreSharingPopup(elem, postUrl, postTitle, twitterTitle){
	concate = '</ul></div><div class="footer-panel"><p></p></div></div>';
	var theChampMoreSharingServices = {
	  facebook: {
		title: "Facebook",
		locale: "en-US",
		redirect_url: "http://www.facebook.com/sharer.php?u=" + postUrl + "&t=" + postTitle + "&v=3",
	  },
	  twitter: {
		title: "Twitter",
		locale: "en-US",
		redirect_url: "http://twitter.com/intent/tweet?text=" + (twitterTitle ? twitterTitle : postTitle) + " " + postUrl,
	  },
	  google: {
		title: "Google plus",
		locale: "en-US",
		redirect_url: "https://plus.google.com/share?url=" + postUrl,
	  },
	  linkedin: {
		title: "Linkedin",
		locale: "en-US",
		redirect_url: "http://www.linkedin.com/shareArticle?mini=true&url=" + postUrl + "&title=" + postTitle,
	  },
	  pinterest: {
		title: "Pinterest",
		locale: "en-US",
		redirect_url: "https://pinterest.com/pin/create/button/?url=" + postUrl + "&media=${media_link}&description=" + postTitle,
		bookmarklet_url: "javascript:void((function(){var e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','//assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)})());"
	  },
	  yahoo_bookmarks: {
		title: "Yahoo",
		locale: "en-US",
		redirect_url: "http://bookmarks.yahoo.com/toolbar/savebm?u=" + postUrl + "&t=" + postTitle,
	  },
	  email: {
		title: "Email",
		locale: "en-US",
		redirect_url: "mailto:?subject=" + postTitle + "&body=Link: " + postUrl,
	  },
	  delicious: {
		title: "Delicious",
		locale: "en-US",
		redirect_url: "http://delicious.com/save?url=" + postUrl + "&title=" + postTitle,
	  },
	  reddit: {
		title: "Reddit",
		locale: "en-US",
		redirect_url: "http://reddit.com/submit?url=" + postUrl + "&title=" + postTitle,
	  },
	  float_it: {
		title: "Float it",
		locale: "en-US",
		redirect_url: "http://www.designfloat.com/submit.php?url=" + postUrl + "&title=" + postTitle,
	  },
	  google_mail: {
		title: "Google Gmail",
		locale: "en-US",
		redirect_url: "https://mail.google.com/mail/?ui=2&view=cm&fs=1&tf=1&su=" + postTitle + "&body=Link: " + postUrl,
	  },
	  google_bookmarks: {
		title: "Google Bookmarks",
		locale: "en-US",
		redirect_url: "http://www.google.com/bookmarks/mark?op=edit&bkmk=" + postUrl + "&title=" + postTitle,
	  },
	  digg: {
		title: "Digg",
		locale: "en-US",
		redirect_url: "http://digg.com/submit?phase=2&url=" + postUrl + "&title=" + postTitle,
	  },
	  stumbleupon: {
		title: "Stumbleupon",
		locale: "en-US",
		redirect_url: "http://www.stumbleupon.com/submit?url=" + postUrl + "&title=" + postTitle,
	  },
	  printfriendly: {
		title: "PrintFriendly",
		locale: "en-US",
		redirect_url: "http://www.printfriendly.com/print?url=" + postUrl,
	  },
	  print: {
		title: "Print",
		locale: "en-US",
		redirect_url: "http://www.printfriendly.com/print?url=" + postUrl,
	  },
	  tumblr: {
		title: "Tumblr",
		locale: "en-US",
		redirect_url: "http://www.tumblr.com/share?v=3&u=" + postUrl + "&t=" + postTitle,
		bookmarklet_url: "javascript:var d=document,w=window,e=w.getSelection,k=d.getSelection,x=d.selection,s=(e?e():(k)?k():(x?x.createRange().text:0)),f='http://www.tumblr.com/share',l=d.location,e=encodeURIComponent,p='?v=3&u='+e(l.href) +'&t='+e(d.title) +'&s='+e(s),u=f+p;try{if(!/^(.*\\.)?tumblr[^.]*$/.test(l.host))throw(0);tstbklt();}catch(z){a =function(){if(!w.open(u,'t','toolbar=0,resizable=0,status=1,width=450,height=430'))l.href=u;};if(/Firefox/.test(navigator.userAgent))setTimeout(a,0);else a();}void(0);"
	  },
	  vk: {
		title: "Vkontakte",
		locale: "ru",
		redirect_url: "https://vk.com/share.php?url=" + postUrl + "&title=" + postTitle,
	  },
	  evernote: {
		title: "Evernote",
		locale: "en-US",
		redirect_url: "https://www.evernote.com/clip.action?url=" + postUrl + "&title=" + postTitle,
		bookmarklet_url: "javascript:(function(){EN_CLIP_HOST='http://www.evernote.com';try{var x=document.createElement('SCRIPT');x.type='text/javascript';x.src=EN_CLIP_HOST+'/public/bookmarkClipper.js?'+(new Date().getTime()/100000);document.getElementsByTagName('head')[0].appendChild(x);}catch(e){location.href=EN_CLIP_HOST+'/clip.action?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title);}})();"
	  },
	  amazon_us_wish_list: {
		title: "Amazon Wish List",
		locale: "en-US",
		redirect_url: "http://www.amazon.com/wishlist/add?u=" + postUrl + "&t=" + postTitle,
		bookmarklet_url: "javascript:(function(){var w=window,l=w.location,d=w.document,s=d.createElement('script'),e=encodeURIComponent,x='undefined',u='http://www.amazon.com/gp/wishlist/add';if(typeof s!='object')l.href=u+'?u='+e(l)+'&t='+e(d.title);function g(){if(d.readyState&&d.readyState!='complete'){setTimeout(g,200);}else{if(typeof AUWLBook==x)s.setAttribute('src',u+'.js?loc='+e(l)),d.body.appendChild(s);function f(){(typeof AUWLBook==x)?setTimeout(f,200):AUWLBook.showPopover();}f();}}g();}())"
	  },
	  wordpress_blog: {
		title: "WordPress",
		locale: "en-US",
		redirect_url: "http://www.addtoany.com/ext/wordpress/press_this?linkurl=" + postUrl + "&linkname=" + postTitle,
	  },
	  whatsapp: {
		title: "Whatsapp",
		locale: "en-US",
		redirect_url: "whatsapp://send?text=" + postTitle + " " + postUrl,
	  },
	  diigo: {
		title: "Diigo",
		locale: "en-US",
		redirect_url: "http://www.diigo.com/post?url=" + postUrl + "&title=" + postTitle,
	  },
	  yc_hacker_news: {
		title: "Hacker News",
		locale: "en-US",
		redirect_url: "http://news.ycombinator.com/submitlink?u=" + postUrl + "&t=" + postTitle,
	  },
	  box_net: {
		title: "Box.net",
		locale: "en-US",
		redirect_url: "https://www.box.net/api/1.0/import?url=" + postUrl + "&name=" + postTitle + "&import_as=link",
	  },
	  aol_mail: {
		title: "AOL Mail",
		locale: "en-US",
		redirect_url: "http://webmail.aol.com/25045/aol/en-us/Mail/compose-message.aspx?subject=" + postTitle + "&body=" + postUrl,
	  },
	  yahoo_mail: {
		title: "Yahoo Mail",
		locale: "en-US",
		redirect_url: "http://compose.mail.yahoo.com/?Subject=" + postTitle + "&body=Link: " + postUrl,
	  },
	  instapaper: {
		title: "Instapaper",
		locale: "en-US",
		redirect_url: "http://www.instapaper.com/edit?url=" + postUrl + "&title=" + postTitle,
	  },
	  plurk: {
		title: "Plurk",
		locale: "en-US",
		redirect_url: "http://www.plurk.com/m?content=" + postUrl + "&qualifier=shares",
	  },
	  wanelo: {
		title: "Wanelo",
		locale: "en-US",
		redirect_url: "http://wanelo.com/p/post?bookmarklet=&images%5B%5D=&url=" + postUrl + "&title=" + postTitle + "&price=&shop=",
		bookmarklet_url: "javascript:void ((function(url){if(!window.waneloBookmarklet){var productURL=encodeURIComponent(url),cacheBuster=Math.floor(Math.random()*1e3),element=document.createElement('script');element.setAttribute('src','//wanelo.com/bookmarklet/3/setup?*='+cacheBuster+'&url='+productURL),element.onload=init,element.setAttribute('type','text/javascript'),document.getElementsByTagName('head')[0].appendChild(element)}else init();function init(){window.waneloBookmarklet()}})(window.location.href))"
	  },
	  aim: {
		title: "AIM",
		locale: "en-US",
		redirect_url: "http://share.aim.com/share/?url=" + postUrl + "&title=" + postTitle,
	  },
	  stumpedia: {
		title: "Stumpedia",
		locale: "en-US",
		redirect_url: "http://www.stumpedia.com/submit?url=" + postUrl + "&title=" + postTitle,
	  },
	  viadeo: {
		title: "Viadeo",
		locale: "en-US",
		redirect_url: "http://www.viadeo.com/shareit/share/?url=" + postUrl + "&title=" + postTitle,
	  },
	  yahoo_messenger: {
		title: "Yahoo Messenger",
		locale: "en-US",
		redirect_url: "ymsgr:sendim?m=" + postUrl,
	  },
	  pinboard_in: {
		title: "Pinboard",
		locale: "en-US",
		redirect_url: "http://pinboard.in/add?url=" + postUrl + "&title=" + postTitle,
	  },
	  blogger_post: {
		title: "Blogger Post",
		locale: "en-US",
		redirect_url: "http://www.blogger.com/blog_this.pyra?t=&u=" + postUrl + "&l&n=" + postTitle,
	  },
	  typepad_post: {
		title: "TypePad Post",
		locale: "en-US",
		redirect_url: "http://www.typepad.com/services/quickpost/post?v=2&qp_show=ac&qp_title=" + postTitle + "&qp_href=" + postUrl + "&qp_text=" + postTitle,
	  },
	  buffer: {
		title: "Buffer",
		locale: "en-US",
		redirect_url: "http://bufferapp.com/add?url=" + postUrl + "&text=" + postTitle,
	  },
	  flipboard: {
		title: "Flipboard",
		locale: "en-US",
		redirect_url: "https://share.flipboard.com/bookmarklet/popout?v=2&url=" + postUrl + "&title=" + postTitle,
	  },
	  mail: {
		title: "Email",
		locale: "en-US",
		redirect_url: "mailto:?subject=" + postTitle + "&body=Link: " + postUrl,
	  },
	  pocket: {
		title: "Pocket",
		locale: "en-US",
		redirect_url: "https://readitlaterlist.com/save?url=" + postUrl + "&title=" + postTitle,
	  },
	  fark: {
		title: "Fark",
		locale: "en-US",
		redirect_url: "http://cgi.fark.com/cgi/fark/submit.pl?new_url=" + postUrl,
	  },
	  yummly: {
		title: "Yummly",
		locale: "en-US",
		redirect_url: "http://www.yummly.com/urb/verify?url=" + postUrl + "&title=" + postTitle,
	  },
	  app_net: {
		title: "App.net",
		locale: "en-US",
		redirect_url: "https://account.app.net/login/",
	  },
	  baidu: {
		title: "Baidu",
		locale: "en-US",
		redirect_url: "http://cang.baidu.com/do/add?it=" + postTitle + "&iu=" + postUrl,
	  },
	  balatarin: {
		title: "Balatarin",
		locale: "en-US",
		redirect_url: "https://www.balatarin.com/login",
	  },
	  bibSonomy: {
		title: "BibSonomy",
		locale: "en-US",
		redirect_url: "http://www.bibsonomy.org/login",
	  },
	  Bitty_Browser: {
		title: "Bitty Browser",
		locale: "en-US",
		redirect_url: "http://www.bitty.com/manual/?contenttype=&contentvalue=" + postUrl,
	  },
	  Blinklist: {
		title: "Blinklist",
		locale: "en-US",
		redirect_url: "http://blinklist.com/blink?t=" + postTitle + "&d=&u=" + postUrl,
	  },
	  BlogMarks: {
		title: "BlogMarks",
		locale: "en-US",
		redirect_url: "http://blogmarks.net/my/new.php?mini=1&simple=1&title=" + postTitle + "&url=" + postUrl,
	  },
	  Bookmarks_fr: {
		title: "Bookmarks.fr",
		locale: "en-US",
		redirect_url: "http://www.bookmarks.fr/Connexion/?action=add&address=" + postUrl + "&title=" + postTitle,
	  },
	  BuddyMarks: {
		title: "BuddyMarks",
		locale: "en-US",
		redirect_url: "http://buddymarks.com/login.php?bookmark_title=" + postTitle + "&bookmark_url=" + postUrl + "&bookmark_desc=&bookmark_tags=",
	  },
	  Care2_news: {
		title: "Care2 News",
		locale: "en-US",
		redirect_url: "http://www.care2.com/passport/login.html?promoID=10&pg=http://www.care2.com/news/compose?sharehint=news&share[share_type]news&bookmarklet=Y&share[title]=" + postTitle + "&share[link_url]=" + postUrl + "&share[content]=",
	  },
	  CiteULike: {
		title: "Cite U Like",
		locale: "en-US",
		redirect_url: "http://www.citeulike.org/posturl?url=" + postUrl + "&title=" + postTitle,
	  },
	  Diary_Ru: {
		title: "Diary.Ru",
		locale: "en-US",
		redirect_url: "http://www.diary.ru/?newpost&title=" + postTitle + "&text=" + postUrl,
	  },
	  diHITT: {
		title: "diHITT",
		locale: "en-US",
		redirect_url: "http://www.dihitt.com/submit?url=" + postUrl + "&title=" + postTitle,
	  },
	  dzone: {
		title: "DZone",
		locale: "en-US",
		redirect_url: "http://www.dzone.com/links/add.html?url=" + postUrl + "&title=" + postTitle,
	  },
	  Folkd: {
		title: "Folkd",
		locale: "en-US",
		redirect_url: "http://www.folkd.com/page/social-bookmarking.html?addurl=" + postUrl,
	  },
	  Hatena: {
		title: "Hatena",
		locale: "en-US",
		redirect_url: "http://b.hatena.ne.jp/bookmarklet?url=" + postUrl + "&btitle=" + postTitle,
	  },
	  Jamespot: {
		title: "Jamespot",
		locale: "en-US",
		redirect_url: "//my.jamespot.com/",
	  },
	  Kakao: {
		title: "Kakao",
		locale: "en-US",
		redirect_url: "https://story.kakao.com/share?url=" + postUrl,
	  },
	  Kindle_It: {
		title: "Kindle_It",
		locale: "en-US",
		redirect_url: "//fivefilters.org/kindle-it/send.php?url=" + postUrl,
	  },
	  Known: {
		title: "Known",
		locale: "en-US",
		redirect_url: "https://withknown.com/share/?url=" + postUrl + "&title=" + postTitle,
	  },
	  Line: {
		title: "Line",
		locale: "en-US",
		redirect_url: "line://msg/text/" + postTitle + "! " + postUrl,
	  },
	  LiveJournal: {
		title: "LiveJournal",
		locale: "en-US",
		redirect_url: "http://www.livejournal.com/update.bml?subject=" + postTitle + "&event=" + postUrl,
	  },
	  Mail_Ru: {
		title: "Mail.Ru",
		locale: "en-US",
		redirect_url: "http://connect.mail.ru/share?share_url=" + postUrl,
	  },
	  Mendeley: {
		title: "Mendeley",
		locale: "en-US",
		redirect_url: "https://www.mendeley.com/sign-in/",
	  },
	  Meneame: {
		title: "Meneame",
		locale: "en-US",
		redirect_url: "https://www.meneame.net/submit.php?url=" + postUrl,
	  },
	  Mixi: {
		title: "Mixi",
		locale: "en-US",
		redirect_url: "https://mixi.jp/share.pl?mode=login&u=" + postUrl,
	  },
	  MySpace: {
		title: "MySpace",
		locale: "en-US",
		redirect_url: "https://myspace.com/post?u=" + encodeURIComponent(postUrl) + "&t=" + postTitle + "&l=3&c=" + postTitle,
	  },
	  Netlog: {
		title: "Netlog",
		locale: "en-US",
		redirect_url: "http://www.netlog.com/go/manage/links/view=save&origin=external&url=" + postUrl + "&title=" + postTitle + "&description=",
	  },
	  Netvouz: {
		title: "Netvouz",
		locale: "en-US",
		redirect_url: "http://www.netvouz.com/action/submitBookmark?url=" + postUrl + "&title=" + postTitle + "&popup=no&description=",
	  },
	  NewsVine: {
		title: "NewsVine",
		locale: "en-US",
		redirect_url: "http://www.newsvine.com/_tools/seed?popoff=0&u=" + postUrl + "&h=" + postTitle,
	  },
	  NUjij: {
		title: "NUjij",
		locale: "en-US",
		redirect_url: "http://www.nujij.nl/nieuw-bericht.2051051.lynkx?title=" + postTitle + "&url=" + postUrl + "&bericht=&topic=",
	  },
	  Odnoklassniki: {
		title: "Odnoklassniki",
		locale: "en-US",
		redirect_url: "https://connect.ok.ru/dk?cmd=WidgetSharePreview&st.cmd=WidgetSharePreview&st.shareUrl=" + postUrl + "&st.client_id=-1",
	  },
	  Oknotizie: {
		title: "Oknotizie",
		locale: "en-US",
		redirect_url: "//oknotizie.virgilio.it/post?url=" + postUrl + "&title=" + postTitle,
	  },
	  Outlook_com: {
		title: "Outlook.com",
		locale: "en-US",
		redirect_url: "https://mail.live.com/default.aspx?rru=compose?subject=" + postTitle + "&body=" + postUrl + "&lc=1033&id=64855&mkt=en-us&cbcxt=mai",
	  },
	  Protopage_Bookmarks: {
		title: "Protopage_Bookmarks",
		locale: "en-US",
		redirect_url: "http://www.protopage.com/add-button-site?url=" + postUrl + "&label=&type=page",
	  },
	  Pusha: {
		title: "Pusha",
		locale: "en-US",
		redirect_url: "//www.pusha.se/posta?url=" + postUrl,
	  },
	  Qzone: {
		title: "Qzone",
		locale: "en-US",
		redirect_url: "http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url=" + postUrl,
	  },
	  Rediff_MyPage: {
		title: "Rediff MyPage",
		locale: "en-US",
		redirect_url: "//share.rediff.com/bookmark/addbookmark?bookmarkurl=" + postUrl + "&title=" + postTitle,
	  },
	  Renren: {
		title: "Renren",
		locale: "en-US",
		redirect_url: "//www.connect.renren.com/share/sharer?url=" + postUrl + "&title=" + postTitle,
	  },
	  Segnalo: {
		title: "Segnalo",
		locale: "en-US",
		redirect_url: "http://segnalo.virgilio.it/post.html.php?url=" + postUrl + "&title=" + postTitle,
	  },
	  Sina_Weibo: {
		title: "Sina Weibo",
		locale: "en-US",
		redirect_url: "//service.weibo.com/share/share.php?url=" + postUrl + "&title=" + postTitle,
	  },
	  SiteJot: {
		title: "SiteJot",
		locale: "en-US",
		redirect_url: "http://www.sitejot.com/loginform.php?iSiteAdd=&iSiteDes=",
	  },
	  Slashdot: {
		title: "Slashdot",
		locale: "en-US",
		redirect_url: "//slashdot.org/submission?url=" + postUrl,
	  },
	  Svejo: {
		title: "Svejo",
		locale: "en-US",
		redirect_url: "https://svejo.net/story/submit_by_url?url=" + postUrl + "&title=" + postTitle + "&summary=",
	  },
	  Symbaloo_Feeds: {
		title: "Symbaloo_Feeds",
		locale: "en-US",
		redirect_url: "//www.symbaloo.com/",
	  },
	  Tuenti: {
		title: "Tuenti",
		locale: "en-US",
		redirect_url: "https://www.tuenti.com/share?p=b5dd6602&url=" + postUrl,
	  },
	  Twiddla: {
		title: "Twiddla",
		locale: "en-US",
		redirect_url: "//www.twiddla.com/New.aspx?url=" + postUrl + "&title=" + postTitle,
	  },
	  Webnews: {
		title: "Webnews",
		locale: "en-US",
		redirect_url: "//www.webnews.de/login",
	  },
	  Wykop: {
		title: "Wykop",
		locale: "en-US",
		redirect_url: "//www.wykop.pl/dodaj?url=" + postUrl + "&title=" + postTitle,
	  },
	  Yoolink: {
		title: "Yoolink",
		locale: "en-US",
		redirect_url: "//yoolink.to/addorshare?url_value=" + postUrl + "&title=" + postTitle,
	  },
	  YouMob: {
		title: "YouMob",
		locale: "en-US",
		redirect_url: "//youmob.com/startmob.aspx?cookietest=true&mob=" + postUrl,
	  }
	}
	var theChampMoreSharingServicesHtml = '<button id="the_champ_sharing_popup_close" class="close-button separated"><img src="'+ theChampCloseIconPath +'" /></button><div id="the_champ_sharing_more_content"><div class="filter"><input type="text" onkeyup="theChampFilterSharing(this.value.trim())" placeholder="Search" class="search"></div><div class="all-services"><ul class="mini">';
	for(var i in theChampMoreSharingServices){
		var tempTitle = theChampCapitaliseFirstLetter(theChampMoreSharingServices[i].title.replace(/[_. ]/g, ""));
		theChampMoreSharingServicesHtml += '<li><a rel="nofollow" title="'+ theChampMoreSharingServices[i].title +'" alt="'+ theChampMoreSharingServices[i].title +'" ';
		if(theChampMoreSharingServices[i].bookmarklet_url){
			theChampMoreSharingServicesHtml += 'href="' + theChampMoreSharingServices[i].bookmarklet_url + '" ';
		}else{
			theChampMoreSharingServicesHtml += 'onclick="theChampPopup(\'' + theChampMoreSharingServices[i].redirect_url + '\')" href="javascript:void(0)" ';
		}
		theChampMoreSharingServicesHtml += '"><i style="width:22px;height:22px" title="'+ theChampMoreSharingServices[i].title +'" class="theChampSharing theChamp' + tempTitle + 'Background"><ss style="display:block;width:100%;height:100%;" class="theChampSharingSvg theChamp' + tempTitle + 'Svg"></ss></i>' + theChampMoreSharingServices[i].title + '</a></li>';
	}
	theChampMoreSharingServicesHtml += concate;
	
	var mainDiv = document.createElement('div');
	mainDiv.innerHTML = theChampMoreSharingServicesHtml;
	mainDiv.setAttribute('id', 'the_champ_sharing_more_providers');
	var bgDiv = document.createElement('div');
	bgDiv.setAttribute('id', 'the_champ_popup_bg');
	jQuery('body').append(mainDiv).append(bgDiv);
	document.getElementById('the_champ_sharing_popup_close').onclick = function(){
		mainDiv.parentNode.removeChild(mainDiv);
		bgDiv.parentNode.removeChild(bgDiv);
	}
}

if(typeof theChampHorizontalSharingCountEnable == 'undefined'){
	var theChampHorizontalSharingCountEnable = 0;
}
if(typeof theChampVerticalSharingCountEnable == 'undefined'){
	var theChampVerticalSharingCountEnable = 0;
}
if(theChampHorizontalSharingCountEnable || theChampVerticalSharingCountEnable){
	// get sharing counts on window load
	theChampLoadEvent(
		function(){
			// sharing counts
			theChampCallAjax(function(){
				theChampGetSharingCounts();
			});
		}
	);
}
	
/**
 * Search sharing services
 */
function theChampFilterSharing(val) {
	jQuery('ul.mini li a').each(function(){
		if (jQuery(this).text().toLowerCase().indexOf(val.toLowerCase()) != -1) {
			jQuery(this).parent().css('display', 'block');
		} else {
			jQuery(this).parent().css('display', 'none');
		}
	});
};

var heateorSsFacebookTargetUrls = [];

/**
 * Get sharing counts
 */
function theChampGetSharingCounts(){
	var targetUrls = [];
	jQuery('.the_champ_sharing_container').each(function(){
		if(typeof jQuery(this).attr('super-socializer-no-counts') == 'undefined'){
			var currentTargetUrl = jQuery(this).attr('super-socializer-data-href');
			if(currentTargetUrl != null && jQuery.inArray(currentTargetUrl, heateorSsUrlCountFetched) == -1){
				targetUrls.push(currentTargetUrl);
				heateorSsUrlCountFetched.push(currentTargetUrl);
			}
		}
	});
	if(targetUrls.length == 0){
		return;
	}
	jQuery.ajax({
		type: 'GET',
		dataType: 'json',
		url: theChampSharingAjaxUrl,
		data: {
			action: 'the_champ_sharing_count',
			urls: targetUrls,
		},
		success: function(data, textStatus, XMLHttpRequest){
			if(data.status == 1){
				for(var i in data.message){
					if(data.facebook){
						heateorSsFacebookTargetUrls.push(i);
					}
					var sharingContainers = jQuery("div[super-socializer-data-href='"+i+"']");

					jQuery(sharingContainers).each(function(){
						var totalCount = 0;
						for(var j in data.message[i]){
							if(j == 'google_plus'){
								var sharingCount = parseInt(data.message[i][j]) || 0;
							}else if(j == 'vkontakte'){
								var sharingCount = parseInt(data.message[i][j].replace('VK.Share.count(0, ', '').replace(');', ''));
							}else{
								var sharingCount = data.message[i][j];
							}

							var targetElement = jQuery(this).find('.the_champ_'+j+'_count');
							
							if(jQuery(targetElement).attr('ss_st_count')){
								sharingCount = parseInt(sharingCount) + parseInt(jQuery(targetElement).attr('ss_st_count'));
							}
							totalCount += parseInt(sharingCount);
							if(sharingCount < 1){ continue; }
							jQuery(targetElement).html(theChampCalculateApproxCount(sharingCount)).css({'visibility': 'visible', 'display': 'block'});
							
							if ( ( typeof theChampReduceHorizontalSvgWidth != 'undefined' && jQuery(this).hasClass('the_champ_horizontal_sharing') ) || ( typeof theChampReduceVerticalSvgWidth != 'undefined' && jQuery(this).hasClass('the_champ_vertical_sharing') ) ) {
								jQuery(targetElement).parents('li').find('.theChampSharingSvg').css('float', 'left');
							}
							if ( ( typeof theChampReduceHorizontalSvgHeight != 'undefined' && jQuery(this).hasClass('the_champ_horizontal_sharing') ) || ( typeof theChampReduceVerticalSvgHeight != 'undefined' && jQuery(this).hasClass('the_champ_vertical_sharing') ) ) {
								jQuery(targetElement).parents('li').find('.theChampSharingSvg').css('marginTop', '0');
							}
						}
						var totalCountContainer = jQuery(this).find('.theChampTCBackground');
						jQuery(totalCountContainer).each(function(){
							var containerHeight = jQuery(this).css('height');
							jQuery(this).html('<div class="theChampTotalShareCount" style="font-size: '+ (parseInt(containerHeight) * 62/100) +'px">' + theChampCalculateApproxCount(totalCount) + '</div><div class="theChampTotalShareText" style="font-size: '+ (parseInt(containerHeight) * 38/100) +'px">' + (totalCount == 0 || totalCount > 1 ? heateorSsSharesText : heateorSsShareText) + '</div>').css('visibility', 'visible');
						});
					});
				}
				if(heateorSsFacebookTargetUrls.length != 0){
					theChampFetchFacebookShares(heateorSsFacebookTargetUrls);
				}
			}
		}
	});
}

function theChampFetchFacebookShares(targetUrls){
	var loopCounter = 0;
	for(var j in targetUrls){
		loopCounter++;
		theChampFBShareJSONCall(targetUrls[j], loopCounter, targetUrls.length);
	}
}

function theChampFBShareJSONCall(targetUrl, loopCounter, targetUrlsLength) {
	jQuery.getJSON('//graph.facebook.com/?id=' + targetUrl, function(data){
	    if(data.share && data.share.share_count){
	    	var sharingContainers = jQuery("div[super-socializer-data-href='"+targetUrl+"']");

			jQuery(sharingContainers).each(function(){
				var targetElement = jQuery(this).find('.the_champ_facebook_count');
				var sharingCount = parseInt(data.share.share_count);

				if(jQuery(targetElement).attr('ss_st_count') !== undefined){
					sharingCount += parseInt(jQuery(targetElement).attr('ss_st_count'));
				}

				jQuery(targetElement).html(theChampCalculateApproxCount(sharingCount)).css({'visibility': 'visible', 'display': 'block'});
				jQuery(this).find('i.theChampFacebookBackground').attr('heateor-ss-fb-shares', sharingCount);
				if ( ( typeof theChampReduceHorizontalSvgWidth != 'undefined' && jQuery(this).hasClass('the_champ_horizontal_sharing') ) || ( typeof theChampReduceVerticalSvgWidth != 'undefined' && jQuery(this).hasClass('the_champ_vertical_sharing') ) ) {
					jQuery(targetElement).parents('li').find('.theChampSharingSvg').css('float', 'left');
				}
				if ( ( typeof theChampReduceHorizontalSvgHeight != 'undefined' && jQuery(this).hasClass('the_champ_horizontal_sharing') ) || ( typeof theChampReduceVerticalSvgHeight != 'undefined' && jQuery(this).hasClass('the_champ_vertical_sharing') ) ) {
					jQuery(targetElement).parents('li').find('.theChampSharingSvg').css('marginTop', '0');
				}
				var totalCountContainer = jQuery(this).find('.theChampTCBackground');
				jQuery(totalCountContainer).each(function(){
					var totalShareCountElem = jQuery(this).find('.theChampTotalShareCount');
					var totalShareCount = jQuery(totalShareCountElem).text();
					var newTotalCount = theChampCalculateActualCount(totalShareCount) + sharingCount;
					jQuery(totalShareCountElem).text(theChampCalculateApproxCount(newTotalCount));
					jQuery(this).find('.theChampTotalShareText').text(newTotalCount == 0 || newTotalCount > 1 ? heateorSsSharesText : heateorSsShareText);
				});
			});
		}
		
		if(loopCounter == targetUrlsLength){
			setTimeout(function(){
				var facebookShares = {};
				for(var i in heateorSsFacebookTargetUrls){
					var sharingContainers = jQuery("div[super-socializer-data-href='"+heateorSsFacebookTargetUrls[i]+"']");
					jQuery(sharingContainers).each(function(){
						var facebookCountElement = jQuery(this).find('.the_champ_facebook_count');
						var facebookCountElementBg = jQuery(this).find('i.theChampFacebookBackground');
						var shareCountString = typeof jQuery(facebookCountElementBg).attr('heateor-ss-fb-shares') != 'undefined' ? jQuery(facebookCountElementBg).attr('heateor-ss-fb-shares').trim() : '';
						if(shareCountString != ''){
							var shareCount = parseInt(theChampCalculateActualCount(shareCountString));
							if(jQuery(facebookCountElement).attr('ss_st_count') !== undefined){
								var startingCount = parseInt(jQuery(facebookCountElement).attr('ss_st_count').trim());
								shareCount = Math.abs(shareCount - startingCount);
							}
							facebookShares[heateorSsFacebookTargetUrls[i]] = shareCount;
							return;
						}
					});
				}
				if(!jQuery.isEmptyObject(facebookShares)){
					theChampSaveFacebookShares(facebookShares);
				}
			}, 1000);
		}
	});
}

function theChampSaveFacebookShares(facebookShares){
	jQuery.ajax({
		type: 'GET',
		dataType: 'json',
		url: theChampSharingAjaxUrl,
		data: {
			action: 'the_champ_save_facebook_shares',
			share_counts: facebookShares,
		},
		success: function(data, textStatus, XMLHttpRequest){}
	});
}

function theChampCalculateApproxCount(sharingCount){
	if(sharingCount > 999 && sharingCount < 10000){
		sharingCount = Math.round(sharingCount/1000) + 'K';
	}else if(sharingCount > 9999 && sharingCount < 100000){
		sharingCount = Math.round(sharingCount/1000) + 'K';
	}else if(sharingCount > 99999 && sharingCount < 1000000){
		sharingCount = Math.round(sharingCount/1000) + 'K';
	}else if(sharingCount > 999999){
		sharingCount = Math.round(sharingCount/1000000) + 'M';
	}
	return sharingCount;
}

function theChampCalculateActualCount(sharingCount){
	if(sharingCount.indexOf('K') > 0){
		sharingCount = parseInt(sharingCount.replace('K', '')) * 1000;
	}else if(sharingCount.indexOf('M') > 0){
		sharingCount = parseInt(sharingCount.replace('M', '')) * 1000000;
	}
	return parseInt(sharingCount);
}

function theChampCapitaliseFirstLetter(e) {
    return e.charAt(0).toUpperCase() + e.slice(1)
}

jQuery(function(){
	var classes = ['the_champ_vertical_sharing', 'the_champ_vertical_counter'];
	for(var i = 0; i < classes.length; i++){
		if(jQuery('.' + classes[i]).length){
			jQuery('.' + classes[i]).each(function(){
				var verticalSharingHtml = jQuery(this).html();
				if(jQuery(this).attr('style').indexOf('right') >= 0){
					var removeClass = 'theChampPushIn', margin = 'Right', alignment = 'right', addClass = 'theChampPullOut';
				}else{
					var removeClass = 'theChampPullOut', margin = 'Left', alignment = 'left', addClass = 'theChampPushIn';
				}
				jQuery(this).html(verticalSharingHtml + '<div title="Hide" style="float:' + alignment + '" onclick="theChampHideSharing(this, \''+ removeClass +'\', \''+ addClass +'\',\'' + margin +'\', \'' + alignment + '\')" class="theChampSharingArrow ' + removeClass + '"></div>');
			});
		}
	}
});

function theChampHideSharing(elem, removeClass, addClass, margin, alignment){
	var animation = {}, counter = jQuery(elem).parent().hasClass('the_champ_vertical_counter'), offset = parseInt(jQuery(elem).parent().css('width')) + 10 - (counter ? 16 : 0);
	var ssOffset = jQuery(elem).parent().attr('ss-offset');
	if(ssOffset){
		var savedOffset = parseInt(ssOffset);
	}else{
		var savedOffset = (counter ? theChampCounterOffset : theChampSharingOffset);
	}
	if(jQuery(elem).attr('title') == 'Hide'){
		animation[alignment] = "-=" + (offset + savedOffset);
		jQuery(elem).parent().animate(animation, 400, function(){
			jQuery(elem).removeClass(removeClass).addClass(addClass).attr('title', 'Share');
			if(counter){
				var cssFloat = alignment == 'left' ? 'right' : 'left';
				jQuery(elem).css('float', cssFloat);
			}else{
				jQuery(elem).css('margin' + margin, offset + 'px')
			}
		});
	}else{
		animation[alignment] = "+=" + (offset + savedOffset); 
		jQuery(elem).parent().animate(animation, 400, function(){
			jQuery(elem).removeClass(addClass).addClass(removeClass).attr('title', 'Hide');
			if(counter){
				jQuery(elem).css('float', alignment);
			}else{
				jQuery(elem).css('margin' + margin, '0px');
			}
		});
	}
}