<!DOCTYPE html>


    <html itemscope itemtype="https://schema.org/QAPage" class="html__responsive">

    <head>

        <title>javascript - HTML - How do I generate a progress bar circle with a percentage in and set the value with JS or jQuery? - Stack Overflow</title>
        <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196">
        <link rel="apple-touch-icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">
        <link rel="image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a"> 
        <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">
        <link rel="canonical" href="https://stackoverflow.com/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">
        <meta property="og:type" content= "website" />
        <meta property="og:url" content="https://stackoverflow.com/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the"/>
        <meta property="og:site_name" content="Stack Overflow" />
        <meta property="og:image" itemprop="image primaryImageOfPage" content="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon@2.png?v=73d79a89bded" />
        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:domain" content="stackoverflow.com"/>
        <meta name="twitter:title" property="og:title" itemprop="name" content="HTML - How do I generate a progress bar circle with a percentage in and set the value with JS or jQuery?" />
        <meta name="twitter:description" property="og:description" itemprop="description" content="I need to have a circular progress bar which I can use to show a user what percent they got in a test. Ideally, there would be some fixed HTML and then change the value in the JavaScript or jQuery...." />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://cdn.sstatic.net/Js/stub.en.js?v=fcbaf0ee9ccd"></script>
    
        <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/stacks.css?v=f0ad20c3c35c">
        <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Sites/stackoverflow/primary.css?v=57cf73133abb">

    
            <meta name="twitter:app:country" content="US" />
            <meta name="twitter:app:name:iphone" content="Stack Exchange iOS" />
            <meta name="twitter:app:id:iphone" content="871299723" />
            <meta name="twitter:app:url:iphone" content="se-zaphod://stackoverflow.com/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" />
            <meta name="twitter:app:name:ipad" content="Stack Exchange iOS" />
            <meta name="twitter:app:id:ipad" content="871299723" />
            <meta name="twitter:app:url:ipad" content="se-zaphod://stackoverflow.com/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" />
            <meta name="twitter:app:name:googleplay" content="Stack Exchange Android">
            <meta name="twitter:app:url:googleplay" content="https://stackoverflow.com/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the">
            <meta name="twitter:app:id:googleplay" content="com.stackexchange.marvin">
        <script>
            StackExchange.ready(function () {

                    StackExchange.using("snippets", function () {
                        StackExchange.snippets.initSnippetRenderer();
                    });
                    
                StackExchange.using("postValidation", function () {
                    StackExchange.postValidation.initOnBlurAndSubmit($('#post-form'), 2, 'answer');
                });


                StackExchange.question.init({showAnswerHelp:true,totalCommentCount:7,shownCommentCount:5,enableTables:true,questionId:49345858});

                styleCode();

                    StackExchange.realtime.subscribeToQuestion('1', '49345858');
                    StackExchange.using("gps", function () { StackExchange.gps.trackOutboundClicks('#content', '.js-post-body'); });



            });
        </script>

        
        
        
        <link rel="stylesheet" type="text/css" href="https://cdn.sstatic.net/Shared/Channels/channels.css?v=a4fa343ab089">
        
        
        


    <script>
        StackExchange.init({"locale":"en","serverTime":1616684973,"routeName":"Questions/Show","stackAuthUrl":"https://stackauth.com","networkMetaHostname":"meta.stackexchange.com","site":{"name":"Stack Overflow","description":"Q&A for professional and enthusiast programmers","isNoticesTabEnabled":true,"enableNewTagCreationWarning":true,"insertSpaceAfterNameTabCompletion":false,"id":1,"cookieDomain":".stackoverflow.com","childUrl":"https://meta.stackoverflow.com","styleCodeWithHighlightjs":true,"negativeVoteScoreFloor":null,"enableSocialMediaInSharePopup":true,"protocol":"https"},"user":{"fkey":"1c13a337a77a3fca73f989c2be69f4ebde5bdfefb024375a9b17d34f580f5cb4","tid":"b641d873-ab3a-7d05-f44f-1907e8f0b056","rep":0,"isAnonymous":true,"isAnonymousNetworkWide":true},"events":{"postType":{"question":1},"postEditionSection":{"title":1,"body":2,"tags":3}},"story":{"minCompleteBodyLength":75,"likedTagsMaxLength":300,"dislikedTagsMaxLength":300},"jobPreferences":{"maxNumDeveloperRoles":2,"maxNumIndustries":4},"svgIconPath":"https://cdn.sstatic.net/Img/stacks-icons","svgIconHash":"5acef7872715"}, {"userProfile":{"openGraphAPIKey":"4a307e43-b625-49bb-af15-ffadf2bda017"},"userMessaging":{"showNewFeatureNotice":true},"tags":{},"subscriptions":{"defaultBasicMaxTrueUpSeats":250,"defaultFreemiumMaxTrueUpSeats":50,"defaultMaxTrueUpSeats":1000},"snippets":{"renderDomain":"stacksnippets.net","snippetsEnabled":true},"slack":{"sidebarAdDismissCookie":"slack-sidebar-ad","sidebarAdDismissCookieExpirationDays":60.0},"site":{"allowImageUploads":true,"enableImgurHttps":true,"enableUserHovercards":true,"forceHttpsImages":true,"styleCode":true},"questions":{"enableQuestionTitleLengthLiveWarning":true,"maxTitleSize":150,"questionTitleLengthStartLiveWarningChars":50},"intercom":{"appId":"inf0secd","hostBaseUrl":"https://stacksnippets.net"},"paths":{},"monitoring":{"clientTimingsAbsoluteTimeout":30000,"clientTimingsDebounceTimeout":1000},"mentions":{"maxNumUsersInDropdown":50},"markdown":{"enableTables":true},"legal":{"oneTrustConfigId":"c3d9f1e3-55f3-4eba-b268-46cee4c6789c"},"flags":{"allowRetractingCommentFlags":true,"allowRetractingFlags":true},"comments":{},"accounts":{"currentPasswordRequiredForChangingStackIdPassword":true}});
        StackExchange.using.setCacheBreakers({"js/adops.en.js":"22a9bd59b1e9","js/ask.en.js":"91b4450eec6e","js/begin-edit-event.en.js":"7f52eac9bfd0","js/copy-transpiled.en.js":"87f69ea703fd","js/cm.en.js":"f7f003fad7eb","js/events.en.js":"ef4845c34d49","js/explore-qlist.en.js":"5c7424c271ef","js/full-anon.en.js":"94e6723ea2b8","js/full.en.js":"8c4ffc6bf0a0","js/help.en.js":"76e2886f2122","js/highlightjs-loader.en.js":"4b8808831fbc","js/inline-tag-editing.en.js":"815dc162a3ff","js/keyboard-shortcuts.en.js":"fed6493aca5b","js/markdown-it-loader.en.js":"4b3686ebe8c8","js/modElections.en.js":"4a8ff5e4ad57","js/mobile.en.js":"313d1c6e04f2","js/moderator.en.js":"15e6fcd24595","js/postCollections-transpiled.en.js":"e1ff766fca3e","js/post-validation.en.js":"8e311cecd65e","js/prettify-full.en.js":"cfbc73235d5c","js/question-editor.en.js":"","js/review.en.js":"0cc25007f447","js/review-v2-transpiled.en.js":"17c64383bf8a","js/revisions.en.js":"41714edcf185","js/stacks-editor.en.js":"3d6d771aea26","js/tageditor.en.js":"4b0bc69bc320","js/tageditornew.en.js":"28b1cf518b53","js/tagsuggestions.en.js":"4e6582be0533","js/wmd.en.js":"c2a035cb1226","js/snippet-javascript-codemirror.en.js":"cf965932b116"});
        StackExchange.using("gps", function() {
             StackExchange.gps.init(true);
        });
    </script>
    <noscript id="noscript-css"><style>body,.top-bar{margin-top:1.9em}</style></noscript>
    </head>
    <body class="question-page unified-theme">
    <div id="notify-container"></div>
    <div id="custom-header"></div>
        
<header class="top-bar js-top-bar top-bar__network _fixed">
    <div class="wmx12 mx-auto grid ai-center h100" role="menubar">
        <div class="-main grid--cell">
                <a href="#" class="left-sidebar-toggle p0 ai-center jc-center js-left-sidebar-toggle" role="menuitem" aria-haspopup="true" aria-controls="left-sidebar" aria-expanded="false"><span class="ps-relative"></span></a>
                <div class="topbar-dialog leftnav-dialog js-leftnav-dialog dno">
                    <div class="left-sidebar js-unpinned-left-sidebar" data-can-be="left-sidebar" data-is-here-when="sm"></div>
                </div>
                    <a href="https://stackoverflow.com" class="-logo js-gps-track"
                        data-gps-track="top_nav.click({is_current:false, location:2, destination:8})">
                        <span class="-img _glyph">Stack Overflow</span>
                    </a>



        </div>

            <ol class="list-reset grid gs4" role="presentation">

                    <li class="grid--cell md:d-none">
                        <a href="/company" class="-marketing-link js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:7})"
                            data-ga="[&quot;top navigation&quot;,&quot;about menu click&quot;,null,null,null]">About</a>
                    </li>

                <li class="grid--cell">
                    <a href="#"
                        class="-marketing-link js-gps-track js-products-menu"
                        aria-controls="products-popover"
                        data-controller="s-popover"
                        data-action="s-popover#toggle"
                        data-s-popover-placement="bottom"
                        data-s-popover-toggle-class="is-selected"
                        data-gps-track="top_nav.products.click({location:2, destination:1})"
                        data-ga="[&quot;top navigation&quot;,&quot;products menu click&quot;,null,null,null]">
                        Products
                    </a>
                </li>

                    <li class="grid--cell md:d-none">
                        <a href="/teams" class="-marketing-link js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:7})"
                            data-ga="[&quot;top navigation&quot;,&quot;learn more - teams&quot;,null,null,null]">For Teams</a>
                    </li>
            </ol>
            <div class="s-popover ws2 mtn2 p0"
                    id="products-popover"
                    role="menu"
                    aria-hidden="true">
                <div class="s-popover--arrow"></div>
                <ol class="list-reset s-anchors s-anchors__inherit">
                    <li class="m6">
                        <a href="/questions" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:2})"
                           data-ga="[&quot;top navigation&quot;,&quot;public qa submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Stack Overflow</span>
                            <span class="fs-caption d-block fc-light">Public questions &amp; answers</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="/teams" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:3})"
                           data-ga="[&quot;top navigation&quot;,&quot;teams submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Stack Overflow for Teams</span>
                            <span class="fs-caption d-block fc-light">Where developers &amp; technologists share private knowledge with coworkers</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="/jobs?so_source=ProductsMenu&so_medium=StackOverflow" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
                            data-gps-track="top_nav.products.click({location:2, destination:9})"
                            data-ga="[&quot;top navigation&quot;,&quot;jobs submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Jobs</span>
                            <span class="fs-caption d-block fc-light">Programming &amp; related technical career opportunities</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="https://stackoverflow.com/talent" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:5})"
                           data-ga="[&quot;top navigation&quot;,&quot;talent submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Talent</span>
                            <span class="fs-caption d-block fc-light">Recruit tech talent &amp; build your employer brand</span>
                        </a>
                    </li>
                    <li class="m6">
                        <a href="https://stackoverflow.com/advertising" class="bar-sm p6 d-block h:bg-black-100 js-gps-track"
                           data-gps-track="top_nav.products.click({location:2, destination:6})"
                           data-ga="[&quot;top navigation&quot;,&quot;advertising submenu click&quot;,null,null,null]">
                            <span class="fs-body1 d-block">Advertising</span>
                            <span class="fs-caption d-block fc-light">Reach developers &amp; technologists worldwide</span>
                        </a>
                    </li>
                    <li class="bg-black-025 bt bc-black-075 py6 px6 bbr-sm">
                        <a href="/company" class="fc-light d-block py6 px6 h:fc-black-800 js-gps-track"
                            data-gps-track="top_nav.products.click({location:2, destination:7})"
                            data-ga="[&quot;top navigation&quot;,&quot;about submenu click&quot;,null,null,null]">About the company</a>
                    </li>
                </ol>
            </div>

            <form id="search" role="search" action=/search class="grid--cell fl-grow1 searchbar px12 js-searchbar " autocomplete="off">
                    <div class="ps-relative">
                        <input name="q"
                               type="text"
                               placeholder="Search&#x2026;"
                               value=""
                               autocomplete="off"
                               maxlength="240"
                               class="s-input s-input__search js-search-field "
                               aria-label="Search"
                               aria-controls="top-search" 
                               data-controller="s-popover"
                               data-action="focus->s-popover#show"
                               data-s-popover-placement="bottom-start"/>
                        <svg aria-hidden="true" class="s-input-icon s-input-icon__search svg-icon iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 10-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 112 7a5 5 0 0110 0z"/></svg>
                        <div class="s-popover p0 wmx100 wmn4 sm:wmn-initial js-top-search-popover" id="top-search" role="menu">
    <div class="s-popover--arrow"></div>
    <div class="js-spinner p24 grid ai-center jc-center d-none">
        <div class="s-spinner s-spinner__sm fc-orange-400">
            <div class="v-visible-sr">Loading&#x2026;</div>
        </div>
    </div>

    <span class="v-visible-sr js-screen-reader-info"></span>
    <div class="js-ac-results overflow-y-auto hmx3 d-none"></div>

    <div class="js-search-hints" aria-describedby="Tips for searching"></div>
</div>
                    </div>
            </form>
        
        

<ol class="overflow-x-auto ml-auto -secondary grid ai-center list-reset h100 user-logged-out" role="presentation">
        <li class="-item searchbar-trigger"><a href="#" class="-link js-searchbar-trigger" role="button" aria-label="Search" aria-haspopup="true" aria-controls="search" title="Click to show search"><svg aria-hidden="true" class="svg-icon iconSearch" width="18" height="18" viewBox="0 0 18 18"><path d="M18 16.5l-5.14-5.18h-.35a7 7 0 10-1.19 1.19v.35L16.5 18l1.5-1.5zM12 7A5 5 0 112 7a5 5 0 0110 0z"/></svg></a></li>

            <li class="-ctas">
                            <a href="https://stackoverflow.com/users/login?ssrc=head&returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f49345858%2fhtml-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" class="login-link s-btn s-btn__filled py8 js-gps-track" rel="nofollow"
                               data-gps-track="login.click" data-ga="[&quot;top navigation&quot;,&quot;login button click&quot;,null,null,null]">Log in</a>
                            <a href="https://stackoverflow.com/users/signup?ssrc=head&returnurl=%2fusers%2fstory%2fcurrent" class="login-link s-btn s-btn__primary py8" rel="nofollow" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;Header&quot;,null,null]">Sign up</a>

            </li>

    <li class="js-topbar-dialog-corral" role="presentation">
            

    <div class="topbar-dialog siteSwitcher-dialog dno" role="menu">
        <div class="header">
            <h3>
                <a href="https://stackoverflow.com">current community</a>
            </h3>
        </div>
        <div class="modal-content bg-powder-050">
            <ul class="current-site">
                    <li class="grid">
                            <div class="fl1">
                <a href="https://stackoverflow.com"
       class="current-site-link site-link js-gps-track grid gs8 gsx"
       data-id="1"
       data-gps-track="site_switcher.click({ item_type:3 })">
        <div class="favicon favicon-stackoverflow site-icon grid--cell" title="Stack Overflow"></div>
        <span class="grid--cell fl1">
            Stack Overflow
        </span>
    </a>

    </div>
    <div class="related-links">
            <a href="https://stackoverflow.com/help" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:14 })">help</a>
            <a href="https://chat.stackoverflow.com/?tab=site&amp;host=stackoverflow.com" class="js-gps-track" data-gps-track="site_switcher.click({ item_type:6 })">chat</a>
    </div>

                    </li>
                    <li class="related-site grid">
                            <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                            <a href="https://meta.stackoverflow.com"
       class=" site-link js-gps-track grid gs8 gsx"
       data-id="552"
       data-gps-track="site.switch({ target_site:552, item_type:3 }),site_switcher.click({ item_type:4 })">
        <div class="favicon favicon-stackoverflowmeta site-icon grid--cell" title="Meta Stack Overflow"></div>
        <span class="grid--cell fl1">
            Meta Stack Overflow
        </span>
    </a>

                    </li>
            </ul>
        </div>

        <div class="header" id="your-communities-header">
            <h3>
your communities            </h3>

        </div>
        <div class="modal-content" id="your-communities-section">

                <div class="call-to-login">
<a href="https://stackoverflow.com/users/signup?ssrc=site_switcher&amp;returnurl=%2fusers%2fstory%2fcurrent" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:10 })">Sign up</a> or <a href="https://stackoverflow.com/users/login?ssrc=site_switcher&amp;returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f49345858%2fhtml-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" class="login-link js-gps-track" data-gps-track="site_switcher.click({ item_type:11 })">log in</a> to customize your list.                </div>
        </div>

        <div class="header">
            <h3><a href="https://stackexchange.com/sites">more stack exchange communities</a>
            </h3>
            <a href="https://stackoverflow.blog" class="fr">company blog</a>
        </div>
        <div class="modal-content">
                <div class="child-content"></div>
        </div>        
    </div>

    </li>
</ol>
    </div>
</header>

    <script>
        StackExchange.ready(function () { StackExchange.topbar.init(); });
StackExchange.scrollPadding.setPaddingTop(50, 10);    </script>



            

        
    
<div class="bg-black-025 bs-sm bt bc-black-100 ps-fixed l0 r0 b0 z-nav js-dismissable-hero" data-campaign-name="stk">
    <div class="grid wmx12 mx-auto px8 py12 jc-space-between ai-center lg:pl24 lg:pr24 md:fd-column sm:fd-row sm:ai-center">
        <div class="grid--cell fs-body2 fl1 mr16 md:mr0 md:mb12 sm:mb0 sm:mr16">
            <p class="mb0"><strong>Join Stack Overflow</strong> to learn, share knowledge, and build your career.</p>
        </div>

        <div id="openid-buttons" class="grid gs8 gsx ai-center sm:jc-space-between">
            <a class="grid--cell s-btn s-btn__filled ws-nowrap" href="/users/signup?ssrc=hero&returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f49345858%2fhtml-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" rel="nofollow" data-ga="[&quot;sign up&quot;,&quot;Sign Up Navigation&quot;,&quot;Question Hero&quot;,null,null]">
                    <span class="sm:d-none">Sign up with email</span>
                    <span class="d-none sm:d-inline">Sign up</span>
                
            </a>
                <button class="grid--cell ws-nowrap s-btn s-btn__icon s-btn__google ta-center js-major-provider sm:d-none" data-provider='google' data-oauthserver='https://accounts.google.com/o/oauth2/auth' data-oauthversion='2.0' data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Google&quot;,&quot;Question Hero&quot;,null,null]">
                    <svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18" viewBox="0 0 18 18"><path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 002.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"/><path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 01-7.18-2.54H1.83v2.07A8 8 0 008.98 17z" fill="#34A853"/><path d="M4.5 10.52a4.8 4.8 0 010-3.04V5.41H1.83a8 8 0 000 7.18l2.67-2.07z" fill="#FBBC05"/><path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 001.83 5.4L4.5 7.49a4.77 4.77 0 014.48-3.3z" fill="#EA4335"/></svg>
                    Sign up with Google
                </button>
                <button class="grid--cell ws-nowrap s-btn s-btn__icon s-btn__github ta-center js-major-provider sm:d-none" data-provider='github' data-oauthserver='https://github.com/login/oauth/authorize' data-oauthversion='2.0' data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - GitHub&quot;,&quot;Question Hero&quot;,null,null]">
                    <svg aria-hidden="true" class="svg-icon iconGitHub" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 00-2.53 15.59c.4.07.55-.17.55-.38l-.01-1.49c-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.42 7.42 0 014 0c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48l-.01 2.2c0 .21.15.46.55.38A8.01 8.01 0 009 1z" fill="#010101"/></svg>
                    Sign up with GitHub
                </button>
                <button class="grid--cell ws-nowrap s-btn s-btn__icon s-btn__facebook ta-center js-major-provider sm:d-none" data-provider='facebook' data-oauthserver='https://www.facebook.com/v2.0/dialog/oauth' data-oauthversion='2.0' data-ga="[&quot;sign up&quot;,&quot;Sign Up Started - Facebook&quot;,&quot;Question Hero&quot;,null,null]">
                    <svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18" viewBox="0 0 18 18"><path d="M3 1a2 2 0 00-2 2v12c0 1.1.9 2 2 2h12a2 2 0 002-2V3a2 2 0 00-2-2H3zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5z" fill="#4167B2"/></svg>
                    Sign up with Facebook
                </button>
                <button class="grid--cell s-btn s-btn__muted s-btn__icon px8 js-dismiss" title="Dismiss"><svg aria-hidden="true" class="svg-icon iconClear" width="18" height="18" viewBox="0 0 18 18"><path d="M15 4.41L13.59 3 9 7.59 4.41 3 3 4.41 7.59 9 3 13.59 4.41 15 9 10.41 13.59 15 15 13.59 10.41 9 15 4.41z"/></svg></button>
        </div>

        <form id="login-form" action="/users/signup?ssrc=hero&returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f49345858%2fhtml-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" method="POST">

            <input type="hidden" name="fkey" value="1c13a337a77a3fca73f989c2be69f4ebde5bdfefb024375a9b17d34f580f5cb4">

            <input type="hidden" name="ssrc" value="" />

            <input type="hidden" id="oauth_version" name="oauth_version" />
            <input type="hidden" id="oauth_server" name="oauth_server" />

            <div id="se-login-fields">
                <input type="hidden" name="legalLinksShown" value="0" />
            </div>
        </form>
        <script>
            StackExchange.ready(function () {
                StackExchange.InlineAuth.init();
            })
        </script>
    </div>
</div>

<script>
    StackExchange.ready(function () {
        StackExchange.Hero.init("stk", "a");

        var location = 0;
        if ($("body").hasClass("questions-page")) {
            location = 1;
        } else if ($("body").hasClass("question-page")) {
            location = 1;
        } else if ($("body").hasClass("faq-page")) {
            location = 5;
        } else if ($("body").hasClass("home-page")) {
            location = 3;
        }

        $('.js-cta-button').click(function () {
            StackExchange.using("gps", function () {
                StackExchange.gps.track("hero.action", { hero_action_type: 'cta', location: location }, true);
            });
        });

        // TODO: we should review the class names and whatnot in use here. Older heroes use id selectors, the newer
        // sticky question hero on SO has a .js-dismiss class instead, but it's apparently not used anywhere... 
        // It's not great. Ideally we'd have a set of classes in the partials above that would correspond to 
        // the behaviours we want here in a more clear way. 

        // sticky question-page hero at the bottom of the page on SO
        $('.js-dismiss').on('click', function () {
            StackExchange.using("gps", function () {
                StackExchange.gps.track("hero.action", { hero_action_type: "close", location: location }, true);
            });
            StackExchange.Hero.dismiss();
            $(".js-dismissable-hero").fadeOut("fast");
        });
    });
</script>



    <div class="container">
            


<div id="left-sidebar" data-is-here-when="md lg" class="left-sidebar js-pinned-left-sidebar ps-relative">
    <div class="left-sidebar--sticky-container js-sticky-leftnav">
        <nav role="navigation">
            <ol class="nav-links">
        <li class="">
            <a
               href="/"
               class="pl8 js-gps-track nav-links--link"
               
               data-gps-track="top_nav.click({is_current:false, location:2, destination:8})" 
               aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Home
                        </div>
                    </div>
            </a>
        </li>
                <li>
                    <ol class="nav-links">
                            <li class="fs-fine tt-uppercase ml8 mt16 mb4 fc-light">Public</li>

        <li class=" youarehere">
            <a id="nav-questions"
               href="/questions"
               class="pl8 js-gps-track nav-links--link -link__with-icon"
               
               data-gps-track="top_nav.click({is_current:true, location:2, destination:1})" 
               aria-controls="" data-controller="" data-s-popover-placement="right">
<svg aria-hidden="true" class="svg-icon iconGlobe" width="18" height="18" viewBox="0 0 18 18"><path d="M9 1a8 8 0 100 16A8 8 0 009 1zM8 15.32a6.4 6.4 0 01-5.23-7.75L7 11.68v.8c0 .88.12 1.32 1 1.32v1.52zm5.72-2c-.2-.66-1-1.32-1.72-1.32h-1v-2c0-.44-.56-1-1-1H6V7h1c.44 0 1-.56 1-1V5h2c.88 0 1.4-.72 1.4-1.6v-.33a6.4 6.4 0 012.32 10.24v.01z"/></svg>                    <span class="-link--channel-name">Questions</span>
            </a>
        </li>

        <li class="">
            <a id="nav-tags"
               href="/tags"
               class=" js-gps-track nav-links--link"
               
               data-gps-track="top_nav.click({is_current:false, location:2, destination:2})" 
               aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Tags
                        </div>
                    </div>
            </a>
        </li>
        <li class="">
            <a id="nav-users"
               href="/users"
               class=" js-gps-track nav-links--link"
               
               data-gps-track="top_nav.click({is_current:false, location:2, destination:3})" 
               aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Users
                        </div>
                    </div>
            </a>
        </li>
                            <li class="fs-fine tt-uppercase ml8 mt16 mb4 fc-light">Find a Job</li>
        <li class="">
            <a id="nav-jobs"
               href="/jobs?so_medium=StackOverflow&amp;so_source=SiteNav"
               class=" js-gps-track nav-links--link"
               
               data-gps-track="top_nav.click({is_current:false, location:2, destination:6})" 
               aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Jobs
                        </div>
                    </div>
            </a>
        </li>
        <li class="">
            <a id="nav-companies"
               href="/jobs/companies?so_medium=StackOverflow&amp;so_source=SiteNav"
               class=" js-gps-track nav-links--link"
               
               data-gps-track="top_nav.click({is_current:false, location:2, destination:12})" 
               aria-controls="" data-controller="" data-s-popover-placement="right">
                    <div class="grid ai-center">
                        <div class="grid--cell truncate">
                            Companies
                        </div>
                    </div>
            </a>
        </li>
                    </ol>
                </li>
                    <li>
                        <ol class="nav-links">
                                    

<div class="js-freemium-cta ps-relative">

    <div class="fs-fine tt-uppercase ml8 mt16 mb8 fc-light">Teams</div>

    <div class="bt bl bb bc-black-075 p12 pb6 fc-black-600 blr-sm overflow-hidden">
        <strong class="fc-black-750 mb6">Stack Overflow for Teams</strong>
        – Collaborate and share knowledge with a private group.
        
        <img class="wmx100 mx-auto my8 h-auto d-block" width="139" height="114" src="https://cdn.sstatic.net/Img/teams/teams-illo-free-sidebar-promo.svg?v=47faa659a05e" alt="">

        <a href="https://stackoverflow.com/teams/create/free?utm_source=so-owned&amp;utm_medium=side-bar&amp;utm_campaign=campaign-38&amp;utm_content=cta" 
           class="w100 s-btn s-btn__primary s-btn__xs js-gps-track"
           data-gps-track="teams.create.left-sidenav.click({ Action: 6 })"
           data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav free cta&quot;,&quot;stackoverflow.com/teams/create/free&quot;,null,null]">Create a free Team</a>
        <a href="https://stackoverflow.com/teams" 
           class="w100 s-btn s-btn__muted s-btn__xs js-gps-track"
           data-gps-track="teams.create.left-sidenav.click({ Action: 5 })"
           data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav free cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">What is Teams?</a>
    </div>
</div>

                                <li class="grid ai-center jc-space-between ml8 mt24 mb4 js-create-team-cta d-none">
                                    <div class="grid--cell tt-uppercase fs-fine fc-light">Teams</div>
                                    <div class="grid--cell fs-fine fc-light mr4">
                                        <a href="javascript:void(0)" class="s-link s-link__inherit js-gps-track"
                                            role="button"
                                            aria-controls="popover-teams-create-cta"
                                            data-controller="s-popover"
                                            data-action="s-popover#toggle"
                                            data-s-popover-placement="bottom-start"
                                            data-s-popover-toggle-class="is-selected"
                                            data-gps-track="teams.create.left-sidenav.click({ Action: ShowInfo })"
                                            data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav show teams info&quot;,null,null,null]">
                                            What&#x2019;s this?
                                        </a>

                                    </div>
                                </li>
                                <li class="ps-relative js-create-team-cta d-none">
                                    <a href="https://stackoverflow.com/teams/create/free?utm_source=so-owned&amp;utm_medium=side-bar&amp;utm_campaign=campaign-38&amp;utm_content=cta"
                                       class="pl8 js-gps-track nav-links--link"
                                       title="Stack Overflow for Teams is a private, secure spot for your organization's questions and answers."
                                       data-gps-track="teams.create.left-sidenav.click({ Action: FreemiumTeamsCreateClick })"
                                       data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav team click&quot;,&quot;stackoverflow.com/teams/create/free&quot;,null,null]">
                                        <div class="grid ai-center">
                                            <div class="grid--cell s-avatar va-middle bg-orange-400">
                                                <div class="s-avatar--letter mtn1">
                                                    <svg aria-hidden="true" class="svg-icon iconBriefcaseSm" width="14" height="14" viewBox="0 0 14 14"><path d="M4 3a1 1 0 011-1h4a1 1 0 011 1v1h.5c.83 0 1.5.67 1.5 1.5v5c0 .83-.67 1.5-1.5 1.5h-7A1.5 1.5 0 012 10.5v-5C2 4.67 2.67 4 3.5 4H4V3zm5 1V3H5v1h4z"/></svg>
                                                </div>
                                                <svg aria-hidden="true" class="native s-avatar--badge svg-icon iconShieldXSm" width="9" height="10" viewBox="0 0 9 10"><path d="M0 1.84L4.5 0 9 1.84v3.17C9 7.53 6.3 10 4.5 10 2.7 10 0 7.53 0 5.01V1.84z" fill="var(--white)"/><path d="M1 2.5L4.5 1 8 2.5v2.51C8 7.34 5.34 9 4.5 9 3.65 9 1 7.34 1 5.01V2.5zm2.98 3.02L3.2 7h2.6l-.78-1.48a.4.4 0 01.15-.38c.34-.24.73-.7.73-1.14 0-.71-.5-1.23-1.41-1.23-.92 0-1.39.52-1.39 1.23 0 .44.4.9.73 1.14.12.08.18.23.15.38z" fill="var(--black-500)"/></svg>
                                            </div>
                                            <div class="grid--cell pl6">
                                                Create free Team
                                            </div>
                                        </div>
                                    </a>
                                </li>
                        </ol>
                    </li>
            </ol>
        </nav>
    </div>



        <div class="s-popover"
             id="popover-teams-create-cta"
             role="menu"
             aria-hidden="true">
            <div class="s-popover--arrow"></div>

            <div class="ps-relative overflow-hidden">
                <p class="mb2"><strong>Teams</strong></p>
                <p class="mb12 fs-caption fc-black-400">Q&amp;A for work</p>
                <p class="mb12 fs-caption fc-medium">Connect and share knowledge within a single location that is structured and easy to search.</p>
                <a href="https://stackoverflow.com/teams"
                   class="js-gps-track s-btn s-btn__primary s-btn__xs"
                   data-gps-track="teams.create.left-sidenav.click({ Action: CtaClick })"
                   data-ga="[&quot;teams left navigation - anonymous&quot;,&quot;left nav cta&quot;,&quot;stackoverflow.com/teams&quot;,null,null]">
                    Learn more
                </a>
            </div>

            <div class="ps-absolute t8 r8">
                <svg aria-hidden="true" class="fc-orange-500 svg-spot spotPeople" width="48" height="48" viewBox="0 0 48 48"><path d="M13.5 28a4.5 4.5 0 100-9 4.5 4.5 0 000 9zM7 30a1 1 0 011-1h11a1 1 0 011 1v5h11v-5a1 1 0 011-1h12a1 1 0 011 1v10a2 2 0 01-2 2H33v5a1 1 0 01-1 1H20a1 1 0 01-1-1v-5H8a1 1 0 01-1-1V30zm25-6.5a4.5 4.5 0 109 0 4.5 4.5 0 00-9 0zM24.5 34a4.5 4.5 0 100-9 4.5 4.5 0 000 9z" opacity=".2"/><path d="M16.4 26.08A6 6 0 107.53 26C5.64 26.06 4 27.52 4 29.45V40a1 1 0 001 1h9a1 1 0 100-2h-4v-7a1 1 0 10-2 0v7H6v-9.55c0-.73.67-1.45 1.64-1.45H16a1 1 0 00.4-1.92zM12 18a4 4 0 110 8 4 4 0 010-8zm16.47 14a6 6 0 10-8.94 0A3.6 3.6 0 0016 35.5V46a1 1 0 001 1h14a1 1 0 001-1V35.5c0-1.94-1.64-3.42-3.53-3.5zM20 28a4 4 0 118 0 4 4 0 01-8 0zm-.3 6h8.6c1 0 1.7.75 1.7 1.5V45h-2v-7a1 1 0 10-2 0v7h-4v-7a1 1 0 10-2 0v7h-2v-9.5c0-.75.7-1.5 1.7-1.5zM42 22c0 1.54-.58 2.94-1.53 4A3.5 3.5 0 0144 29.45V40a1 1 0 01-1 1h-9a1 1 0 110-2h4v-7a1 1 0 112 0v7h2v-9.55A1.5 1.5 0 0040.48 28H32a1 1 0 01-.4-1.92A6 6 0 1142 22zm-2 0a4 4 0 10-8 0 4 4 0 008 0z"/><path d="M17 10a1 1 0 011-1h12a1 1 0 110 2H18a1 1 0 01-1-1zm1-5a1 1 0 100 2h12a1 1 0 100-2H18zm-4-4a1 1 0 00-1 1v12a1 1 0 001 1h5.09l4.2 4.2a1 1 0 001.46-.04l3.7-4.16H34a1 1 0 001-1V2a1 1 0 00-1-1H14zm1 12V3h18v10h-5a1 1 0 00-.75.34l-3.3 3.7-3.74-3.75a1 1 0 00-.71-.29H15z" opacity=".35"/></svg>
            </div>
        </div>

</div>



        <div id="content" class="snippet-hidden">

            
<div itemprop="mainEntity" itemscope itemtype="https://schema.org/Question">
    <link itemprop="image" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">

    <div class="inner-content clearfix">

        

            <div id="question-header" class="grid sm:fd-column">
                        <h1 itemprop="name" class="fs-headline1 ow-break-word mb8 grid--cell fl1"><a href="/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the" class="question-hyperlink">HTML - How do I generate a progress bar circle with a percentage in and set the value with JS or jQuery? [closed]</a></h1>
                <div class="ml12 aside-cta grid--cell print:d-none sm:ml0 sm:mb12 sm:order-first sm:as-end">
                        <a href="/questions/ask" class="ws-nowrap s-btn s-btn__primary">
        Ask Question
    </a>

                </div>
            </div>
            <div class="grid fw-wrap pb8 mb16 bb bc-black-075">
                    <div class="grid--cell ws-nowrap mr16 mb8" title="2018-03-18 08:20:40Z">
                        <span class="fc-light mr2">Asked</span>
                        <time itemprop="dateCreated" datetime="2018-03-18T08:20:40">3 years ago</time>
                    </div>
                    <div class="grid--cell ws-nowrap mr16 mb8">
                        <span class="fc-light mr2">Active</span>
                        <a href="?lastactivity" class="s-link s-link__inherit" title="2018-03-18 09:54:55Z">3 years ago</a>
                    </div>
                    <div class="grid--cell ws-nowrap mb8" title="Viewed 11,626 times">
                        <span class="fc-light mr2">Viewed</span>
                        12k times
                    </div>
            </div>
            <div id="mainbar" role="main" aria-label="question and answers">

                
<div class="question" data-questionid="49345858" data-ownerid="9244664" data-score="2"  id="question">
    <style>
    </style>
<div class="js-zone-container zone-container-main">
    <div id="dfp-tlb" class="everyonelovesstackoverflow everyoneloves__top-leaderboard everyoneloves__leaderboard"></div>
    <div class="js-report-ad-button-container " style="width: 728px"></div>
</div>

    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container grid jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="49345858">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This question shows research effort; it is useful and clear" aria-pressed="false" aria-label="Up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="2">2</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This question does not show any research effort; it is unclear or not useful" aria-pressed="false" aria-label="Down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>

        <button class="js-bookmark-btn s-btn s-btn__unset c-pointer py4 js-gps-track" 
                data-controller="s-tooltip" data-s-tooltip-placement="right" title="Bookmark this question."
                aria-pressed="false" aria-label="Bookmark" data-selected-classes="fc-yellow-600"
                data-gps-track="post.click({ item: 1, priv: 0, post_type: 1 })">
            <svg aria-hidden="true" class="svg-icon iconBookmark" width="18" height="18" viewBox="0 0 18 18"><path d="M6 1a2 2 0 00-2 2v14l5-4 5 4V3a2 2 0 00-2-2H6zm3.9 3.83h2.9l-2.35 1.7.9 2.77L9 7.59l-2.35 1.7.9-2.76-2.35-1.7h2.9L9 2.06l.9 2.77z"/></svg>
            <div class="js-bookmark-count mt4 d-none" data-value=""></div>
        </button>
    

    
        <a class="js-post-issue grid--cell s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/49345858/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18" viewBox="0 0 19 18"><path d="M3 9a8 8 0 113.73 6.77L8.2 14.3A6 6 0 105 9l3.01-.01-4 4-4-4h3L3 9zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5z"/></svg></a>

</div>
        </div>

        

<div class="postcell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
                    <div>
            <aside class="s-notice s-notice__info js-post-notice mb16" role="status">
        <div class="grid fd-column fw-nowrap">
            <div class="grid fw-nowrap">
                <div class="grid--cell wmn0 fl1 lh-lg">
                    <div class="grid--cell fl1 lh-lg">
                        <b>Closed</b>. This question needs to be more <a href="/help/closed-questions">focused</a>. It is not currently accepting answers.
                        
                    </div>
                </div>
            </div>
        </div>
            <hr class="my12 outline-none baw0 bb bc-powder-400" />
        <div class="grid fw-nowrap fc-black-600">
                <div class="grid--cell mr8">
                    <svg aria-hidden="true" class="svg-icon iconLightbulb" width="18" height="18" viewBox="0 0 18 18"><path d="M15 6.38A6.48 6.48 0 007.78.04h-.02A6.49 6.49 0 002.05 5.6a6.31 6.31 0 002.39 5.75c.49.39.76.93.76 1.5v.24c0 1.07.89 1.9 1.92 1.9h2.75c1.04 0 1.92-.83 1.92-1.9v-.2c0-.6.26-1.15.7-1.48A6.32 6.32 0 0015 6.37zM4.03 5.85A4.49 4.49 0 018 2.02a4.48 4.48 0 015 4.36 4.3 4.3 0 01-1.72 3.44c-.98.74-1.5 1.9-1.5 3.08v.1H7.2v-.14c0-1.23-.6-2.34-1.53-3.07a4.32 4.32 0 01-1.64-3.94zM10 18a1 1 0 000-2H7a1 1 0 100 2h3z"/></svg>
                </div>
            <div class="grid--cell lh-md">
                <p class="mb0">
                    <b>Want to improve this question?</b> Update the question so it focuses on one problem only by <a href="/posts/49345858/edit">editing this post</a>.
                </p>
                    <p class="mb0 mt6">Closed <span title="2018-03-25 13:29:39Z" class="relativetime">3 years ago</span>.</p>
            </div>
        </div>
            <div class="mt24 grid gsx gs8">
                    <a class="s-btn s-btn__outlined grid--cell js-post-notice-edit-post" href="/posts/49345858/edit">
                        Improve this question
                    </a>
            </div>
</aside>

    </div>

<p>I need to have a circular progress bar which I can use to show a user what percent they got in a test. Ideally, there would be some fixed HTML and then change the value in the JavaScript or jQuery. They could look like any of the circles below. 
<a href="https://i.stack.imgur.com/4NA2D.jpg" rel="nofollow noreferrer"><img src="https://i.stack.imgur.com/4NA2D.jpg" alt="like thisre"></a></p>

<hr>

<p>Thank you in advance.</p>
    </div>

        <div class="mt24 mb12">
            <div class="post-taglist grid gs4 gsy fd-column">
                <div class="grid ps-relative">
                    <a href="/questions/tagged/javascript" class="post-tag" title="show questions tagged &#39;javascript&#39;" rel="tag">javascript</a> <a href="/questions/tagged/jquery" class="post-tag" title="show questions tagged &#39;jquery&#39;" rel="tag">jquery</a> <a href="/questions/tagged/css" class="post-tag" title="show questions tagged &#39;css&#39;" rel="tag">css</a> <a href="/questions/tagged/progress-bar" class="post-tag" title="show questions tagged &#39;progress-bar&#39;" rel="tag">progress-bar</a> <a href="/questions/tagged/percentage" class="post-tag" title="show questions tagged &#39;percentage&#39;" rel="tag">percentage</a> 
                </div>
            </div>
        </div>

    <div class="mb0 ">
        <div class="mt16 grid gs8 gsy fw-wrap jc-end ai-start pt4 mb16">
            <div class="grid--cell mr16 fl1 w96">
                

<div class="js-post-menu pt2" data-post-id="49345858">
    <div class="grid d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="grid--cell">
            <a href="/q/49345858"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="Short permalink to this question"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 1 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Share a link to this question"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="question"
               data-se-share-sheet-social="facebook twitter devto"
               data-se-share-sheet-location="1"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Share</a>
        </div>




        <div class="grid--cell">
            <button type="button"
                    id="btnFollowPost-49345858" class="s-btn s-btn__link js-follow-post js-follow-question js-gps-track"
                    data-gps-track="post.click({ item: 14, priv: 0, post_type: 1 })"
                    data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                    data-s-popover-placement="bottom" aria-controls=""
                    title="Follow this question to receive notifications">
                Follow
            </button>
        </div>




    </div>
    <div class="js-menu-popup-container"></div>
</div>

            </div>

            <div class="post-signature owner grid--cell">
                <div class="user-info ">
    <div class="user-action-time">
        asked <span title="2018-03-18 08:20:40Z" class="relativetime">Mar 18 '18 at 8:20</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/9244664/benjamin-sommer"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/11f05d50e30bb2b23a1bbfbf2ed50665?s=32&amp;d=identicon&amp;r=PG&amp;f=1" alt="" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/9244664/benjamin-sommer">Benjamin Sommer</a><span class="d-none" itemprop="name">Benjamin Sommer</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">588</span><span title="3 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">3</span></span><span class="v-visible-sr">3 gold badges</span><span title="10 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">10</span></span><span class="v-visible-sr">10 silver badges</span><span title="24 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">24</span></span><span class="v-visible-sr">24 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">7</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-49345858" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="49345858" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="2"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-85691564" class="comment js-comment " data-comment-id="85691564" data-comment-owner-id="1594337" data-comment-score="2">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
                    <span title="number of &#x27;useful comment&#x27; votes received"
                            class="cool">2</span>
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy"><a href="https://codepen.io/anon/pen/OvbJER" rel="nofollow noreferrer">codepen.io/anon/pen/OvbJER</a> ?</span>
                
&ndash;&nbsp;<a href="/users/1594337/g-s"
                       title="6,404 reputation"
                       class="comment-user">G_S</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:26:03Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:26</span></span>
            </div>
        </div>
    </li>
    <li id="comment-85691580" class="comment js-comment " data-comment-id="85691580" data-comment-owner-id="9244664" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Can that start at the top instead of at 90 degrees?</span>
                
&ndash;&nbsp;<a href="/users/9244664/benjamin-sommer"
                       title="588 reputation"
                       class="comment-user owner">Benjamin Sommer</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:27:01Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:27</span></span>
            </div>
        </div>
    </li>
    <li id="comment-85691609" class="comment js-comment " data-comment-id="85691609" data-comment-owner-id="1594337" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">top ? can u elaborate? Ok you mean it should start at top rather than at the right half end?</span>
                
&ndash;&nbsp;<a href="/users/1594337/g-s"
                       title="6,404 reputation"
                       class="comment-user">G_S</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:29:02Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:29</span></span>
                        <span title="this comment was edited 1 time">
                            <svg aria-hidden="true" class="va-text-bottom o50 svg-icon iconPencilSm" width="14" height="14" viewBox="0 0 14 14"><path d="M11.1 1.71l1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0zM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88z"/></svg>
                        </span>
            </div>
        </div>
    </li>
    <li id="comment-85691670" class="comment js-comment " data-comment-id="85691670" data-comment-owner-id="9244664" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Yes that is correct</span>
                
&ndash;&nbsp;<a href="/users/9244664/benjamin-sommer"
                       title="588 reputation"
                       class="comment-user owner">Benjamin Sommer</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:32:40Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:32</span></span>
            </div>
        </div>
    </li>
    <li id="comment-85691797" class="comment js-comment " data-comment-id="85691797" data-comment-owner-id="1594337" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">May be this one ? <a href="https://codepen.io/anon/pen/aYBbPM" rel="nofollow noreferrer">codepen.io/anon/pen/aYBbPM</a></span>
                
&ndash;&nbsp;<a href="/users/1594337/g-s"
                       title="6,404 reputation"
                       class="comment-user">G_S</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:42:30Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:42</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-49345858" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link dno" title="Use comments to ask for more information or suggest improvements. Avoid answering questions in comments."  href="#" role="button"></a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link " title="Expand to show all comments on this post" href=# onclick="" role="button">Show <b>2</b> more comments</a>
        </div>         
    </div>
    </div>
</div>


<div class="js-zone-container zone-container-responsive">
    <div id="dfp-isb" class="everyonelovesstackoverflow everyoneloves__inline-sidebar mx-auto"></div>
    <div class="js-report-ad-button-container mx-auto" style="width: 300px"></div>
</div>

                <div id="answers">

                    <a name="tab-top"></a>
                    <div id="answers-header">
                        <div class="answers-subheader grid ai-center mb8">
                            <div class="grid--cell fl1">
                                <h2 class="mb0" data-answercount="3">
                                        3 Answers
                                    <span style="display:none;" itemprop="answerCount">3</span>
                                </h2>
                            </div>
                            <div class="grid--cell">
                                <div class=" grid s-btn-group js-filter-btn">
        <a class="grid--cell s-btn s-btn__muted s-btn__outlined" href="/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the?answertab=active#tab-top" data-nav-xhref="" title="Answers with the latest activity first" data-value="active" data-shortcut="A">
            Active</a>
        <a class="grid--cell s-btn s-btn__muted s-btn__outlined" href="/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the?answertab=oldest#tab-top" data-nav-xhref="" title="Answers in the order they were provided" data-value="oldest" data-shortcut="O">
            Oldest</a>
        <a class="youarehere is-selected grid--cell s-btn s-btn__muted s-btn__outlined" href="/questions/49345858/html-how-do-i-generate-a-progress-bar-circle-with-a-percentage-in-and-set-the?answertab=votes#tab-top" data-nav-xhref="" title="Answers with the highest score first" data-value="votes" data-shortcut="V">
            Votes</a>
</div>

                            </div>
                        </div>
                            
                    </div>


                                          
<a name="49346497"></a>
<div id="answer-49346497" class="answer accepted-answer" data-answerid="49346497" data-ownerid="1594337" data-score="4" itemprop="acceptedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container grid jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="49346497">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This answer is useful" aria-pressed="false" aria-label="Up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="4">4</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This answer is not useful" aria-pressed="false" aria-label="Down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>

    
            <div class="js-accepted-answer-indicator grid--cell fc-green-500 py6 mtn8" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue grid--cell s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/49346497/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18" viewBox="0 0 19 18"><path d="M3 9a8 8 0 113.73 6.77L8.2 14.3A6 6 0 105 9l3.01-.01-4 4-4-4h3L3 9zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5z"/></svg></a>

</div>
        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>You might be looking for this one </p>

<p><div class="snippet" data-lang="js" data-hide="false" data-console="true" data-babel="false">
<div class="snippet-code">
<pre class="snippet-code-js lang-js prettyprint-override"><code>var svg ;

function drawProgress(end){ 
d3.select("svg").remove() 
  if(svg){
  svg.selectAll("*").remove();
  
}
var wrapper = document.getElementById('radialprogress');
var start = 0;
 
var colours = {
  fill: '#FF0000',
  track: '#555555',
  text: '#00C0FF',
  stroke: '#FFFFFF',
}

var radius = 80;
var border = 12;
var strokeSpacing = 4;
var endAngle = Math.PI * 2;
var formatText = d3.format('.0%');
var boxSize = radius * 2;
var count = end;
var progress = start;
var step = end &lt; start ? -0.01 : 0.01;

//Define the circle
var circle = d3.svg.arc()
  .startAngle(0)
  .innerRadius(radius)
  .outerRadius(radius - border);

//setup SVG wrapper
svg = d3.select(wrapper)
  .append('svg')
  .attr('width', boxSize)
  .attr('height', boxSize);

  
// ADD Group container
var g = svg.append('g')
  .attr('transform', 'translate(' + boxSize / 2 + ',' + boxSize / 2 + ')');

//Setup track
var track = g.append('g').attr('class', 'radial-progress');
track.append('path')
  .attr('fill', colours.track)
  .attr('stroke', colours.stroke)
  .attr('stroke-width', strokeSpacing + 'px')
  .attr('d', circle.endAngle(endAngle));

//Add colour fill
var value = track.append('path')
  .attr('fill', colours.fill)
  .attr('stroke', colours.stroke)
  .attr('stroke-width', strokeSpacing + 'px');

//Add text value
var numberText = track.append('text')
  .attr('fill', colours.text)
  .attr('text-anchor', 'middle')
  .attr('dy', '.5rem'); 

  //update position of endAngle
  value.attr('d', circle.endAngle(endAngle * end));
  //update text value
  numberText.text(formatText(end));
  
}

$('#submitClick').click(function(){
  var val = parseInt($('#percent').val());
   drawProgress(val/100)
})
 
drawProgress(10/100)</code></pre>
<pre class="snippet-code-html lang-html prettyprint-override"><code>&lt;script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.11/d3.min.js"&gt;&lt;/script&gt;
&lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"&gt;&lt;/script&gt;
 

&lt;label for="percent"&gt;Type a percent!&lt;/label&gt;
&lt;input id="percent" name="percent" value=10&gt;
&lt;button id='submitClick' name='submitButton' &gt;Render&lt;/button&gt;


&lt;div id="radialprogress" 
&lt;/div&gt; </code></pre>
</div>
</div>
</p>
    </div>
    <div class="mt24">
        <div class="grid fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-03-18T09:46:32"></time>
            <div class="grid--cell mr16" style="flex: 1 1 100px;">
                

<div class="js-post-menu pt2" data-post-id="49346497">
    <div class="grid d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="grid--cell">
            <a href="/a/49346497"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="Short permalink to this answer"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Share a link to this answer"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter devto"
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Share</a>
        </div>




        <div class="grid--cell">
            <button type="button"
                    id="btnFollowPost-49346497" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                    data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                    data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                    data-s-popover-placement="bottom" aria-controls=""
                    title="Follow this answer to receive notifications">
                Follow
            </button>
        </div>




    </div>
    <div class="js-menu-popup-container"></div>
</div>

            </div>
            <div class="post-signature grid--cell fl0">
<div class="user-info ">
    <div class="user-action-time">
        <a href="/posts/49346497/revisions" title="show all edits to this post"
                         class="js-gps-track"
                         data-gps-track="post.click({ item: 4, priv: 0, post_type: 2 })">edited <span title="2018-03-18 09:54:55Z" class="relativetime">Mar 18 '18 at 9:54</span></a>
    </div>
    <div class="user-gravatar32">
        
    </div>
    <div class="user-details">
        
        <div class="-flair">
            
        </div>
    </div>
</div>
            </div>


            <div class="post-signature grid--cell fl0">
                <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2018-03-18 09:46:32Z" class="relativetime">Mar 18 '18 at 9:46</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/1594337/g-s"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/2ed37728fc365c5815b32e75ae03b690?s=32&amp;d=identicon&amp;r=PG&amp;f=1" alt="" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/1594337/g-s">G_S</a><span class="d-none" itemprop="name">G_S</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">6,404</span><span title="2 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">2</span></span><span class="v-visible-sr">2 gold badges</span><span title="17 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">17</span></span><span class="v-visible-sr">17 silver badges</span><span title="46 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">46</span></span><span class="v-visible-sr">46 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount"></span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-49346497" class="comments js-comments-container bt bc-black-075 mt12  dno" data-post-id="49346497" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

            </ul>
	    </div>

        <div id="comments-link-49346497" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>
<div class="js-zone-container zone-container-main">
    <div id="dfp-mlb" class="everyonelovesstackoverflow everyoneloves__mid-leaderboard everyoneloves__leaderboard"></div>
    <div class="js-report-ad-button-container " style="width: 728px"></div>
</div>
                                          
<a name="49345972"></a>
<div id="answer-49345972" class="answer" data-answerid="49345972" data-ownerid="4672474" data-score="6" itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container grid jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="49345972">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This answer is useful" aria-pressed="false" aria-label="Up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="6">6</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This answer is not useful" aria-pressed="false" aria-label="Down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>

    
            <div class="js-accepted-answer-indicator grid--cell fc-green-500 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue grid--cell s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/49345972/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18" viewBox="0 0 19 18"><path d="M3 9a8 8 0 113.73 6.77L8.2 14.3A6 6 0 105 9l3.01-.01-4 4-4-4h3L3 9zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5z"/></svg></a>

</div>
        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Progress bar Circle using HTML5 and CSS3</p>

<p><div class="snippet" data-lang="js" data-hide="false" data-console="true" data-babel="false">
<div class="snippet-code">
<pre class="snippet-code-css lang-css prettyprint-override"><code>@import url(https://fonts.googleapis.com/css?family=Lato:700);
*,
*:before,
*:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html,
body {
  background: #ecf0f1;
  color: #444;
  font-family: 'Lato', Tahoma, Geneva, sans-serif;
  font-size: 16px;
  padding: 10px;
}

.set-size {
  font-size: 10em;
}

.charts-container:after {
  clear: both;
  content: "";
  display: table;
}

.pie-wrapper {
  height: 1em;
  width: 1em;
  float: left;
  margin: 15px;
  position: relative;
}

.pie-wrapper:nth-child(3n+1) {
  clear: both;
}

.pie-wrapper .pie {
  height: 100%;
  width: 100%;
  clip: rect(0, 1em, 1em, 0.5em);
  left: 0;
  position: absolute;
  top: 0;
}

.pie-wrapper .pie .half-circle {
  height: 100%;
  width: 100%;
  border: 0.1em solid #3498db;
  border-radius: 50%;
  clip: rect(0, 0.5em, 1em, 0);
  left: 0;
  position: absolute;
  top: 0;
}

.pie-wrapper .label {
  background: #34495e;
  border-radius: 50%;
  bottom: 0.4em;
  color: #ecf0f1;
  cursor: default;
  display: block;
  font-size: 0.25em;
  left: 0.4em;
  line-height: 2.6em;
  position: absolute;
  right: 0.4em;
  text-align: center;
  top: 0.4em;
}

.pie-wrapper .label .smaller {
  color: #bdc3c7;
  font-size: .45em;
  padding-bottom: 20px;
  vertical-align: super;
}

.pie-wrapper .shadow {
  height: 100%;
  width: 100%;
  border: 0.1em solid #bdc3c7;
  border-radius: 50%;
}

.pie-wrapper.style-2 .label {
  background: none;
  color: #7f8c8d;
}

.pie-wrapper.style-2 .label .smaller {
  color: #bdc3c7;
}

.pie-wrapper.progress-30 .pie .right-side {
  display: none;
}

.pie-wrapper.progress-30 .pie .half-circle {
  border-color: #3498db;
}

.pie-wrapper.progress-30 .pie .left-side {
  -webkit-transform: rotate(108deg);
  transform: rotate(108deg);
}

.pie-wrapper.progress-60 .pie {
  clip: rect(auto, auto, auto, auto);
}

.pie-wrapper.progress-60 .pie .right-side {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.pie-wrapper.progress-60 .pie .half-circle {
  border-color: #9b59b6;
}

.pie-wrapper.progress-60 .pie .left-side {
  -webkit-transform: rotate(216deg);
  transform: rotate(216deg);
}

.pie-wrapper.progress-90 .pie {
  clip: rect(auto, auto, auto, auto);
}

.pie-wrapper.progress-90 .pie .right-side {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.pie-wrapper.progress-90 .pie .half-circle {
  border-color: #e67e22;
}

.pie-wrapper.progress-90 .pie .left-side {
  -webkit-transform: rotate(324deg);
  transform: rotate(324deg);
}

.pie-wrapper.progress-45 .pie .right-side {
  display: none;
}

.pie-wrapper.progress-45 .pie .half-circle {
  border-color: #1abc9c;
}

.pie-wrapper.progress-45 .pie .left-side {
  -webkit-transform: rotate(162deg);
  transform: rotate(162deg);
}

.pie-wrapper.progress-75 .pie {
  clip: rect(auto, auto, auto, auto);
}

.pie-wrapper.progress-75 .pie .right-side {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.pie-wrapper.progress-75 .pie .half-circle {
  border-color: #8e44ad;
}

.pie-wrapper.progress-75 .pie .left-side {
  -webkit-transform: rotate(270deg);
  transform: rotate(270deg);
}

.pie-wrapper.progress-95 .pie {
  clip: rect(auto, auto, auto, auto);
}

.pie-wrapper.progress-95 .pie .right-side {
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}

.pie-wrapper.progress-95 .pie .half-circle {
  border-color: #e74c3c;
}

.pie-wrapper.progress-95 .pie .left-side {
  -webkit-transform: rotate(342deg);
  transform: rotate(342deg);
}

.pie-wrapper--solid {
  border-radius: 50%;
  overflow: hidden;
}

.pie-wrapper--solid:before {
  border-radius: 0 100% 100% 0%;
  content: '';
  display: block;
  height: 100%;
  margin-left: 50%;
  -webkit-transform-origin: left;
  transform-origin: left;
}

.pie-wrapper--solid .label {
  background: transparent;
}

.pie-wrapper--solid.progress-65 {
  background: -webkit-gradient(linear, left top, right top, color-stop(50%, #e67e22), color-stop(50%, #34495e));
  background: linear-gradient(to right, #e67e22 50%, #34495e 50%);
}

.pie-wrapper--solid.progress-65:before {
  background: #e67e22;
  -webkit-transform: rotate(126deg);
  transform: rotate(126deg);
}

.pie-wrapper--solid.progress-25 {
  background: -webkit-gradient(linear, left top, right top, color-stop(50%, #9b59b6), color-stop(50%, #34495e));
  background: linear-gradient(to right, #9b59b6 50%, #34495e 50%);
}

.pie-wrapper--solid.progress-25:before {
  background: #34495e;
  -webkit-transform: rotate(-270deg);
  transform: rotate(-270deg);
}

.pie-wrapper--solid.progress-88 {
  background: -webkit-gradient(linear, left top, right top, color-stop(50%, #3498db), color-stop(50%, #34495e));
  background: linear-gradient(to right, #3498db 50%, #34495e 50%);
}

.pie-wrapper--solid.progress-88:before {
  background: #3498db;
  -webkit-transform: rotate(43.2deg);
  transform: rotate(43.2deg);
}</code></pre>
<pre class="snippet-code-html lang-html prettyprint-override"><code>&lt;div class="set-size charts-container"&gt;
  &lt;div class="pie-wrapper progress-30"&gt;
    &lt;span class="label"&gt;30&lt;span class="smaller"&gt;%&lt;/span&gt;&lt;/span&gt;
    &lt;div class="pie"&gt;
      &lt;div class="left-side half-circle"&gt;&lt;/div&gt;
      &lt;div class="right-side half-circle"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="pie-wrapper progress-60"&gt;
    &lt;span class="label"&gt;60&lt;span class="smaller"&gt;%&lt;/span&gt;&lt;/span&gt;
    &lt;div class="pie"&gt;
      &lt;div class="left-side half-circle"&gt;&lt;/div&gt;
      &lt;div class="right-side half-circle"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="pie-wrapper progress-90"&gt;
    &lt;span class="label"&gt;90&lt;span class="smaller"&gt;%&lt;/span&gt;&lt;/span&gt;
    &lt;div class="pie"&gt;
      &lt;div class="left-side half-circle"&gt;&lt;/div&gt;
      &lt;div class="right-side half-circle"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="pie-wrapper progress-45 style-2"&gt;
    &lt;span class="label"&gt;45&lt;span class="smaller"&gt;%&lt;/span&gt;&lt;/span&gt;
    &lt;div class="pie"&gt;
      &lt;div class="left-side half-circle"&gt;&lt;/div&gt;
      &lt;div class="right-side half-circle"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="shadow"&gt;&lt;/div&gt;
  &lt;/div&gt;

  &lt;div class="pie-wrapper progress-75 style-2"&gt;
    &lt;span class="label"&gt;75&lt;span class="smaller"&gt;%&lt;/span&gt;&lt;/span&gt;
    &lt;div class="pie"&gt;
      &lt;div class="left-side half-circle"&gt;&lt;/div&gt;
      &lt;div class="right-side half-circle"&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="shadow"&gt;&lt;/div&gt;
  &lt;/div&gt;

 
&lt;/div&gt;</code></pre>
</div>
</div>
</p>
    </div>
    <div class="mt24">
        <div class="grid fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-03-18T08:37:47"></time>
            <div class="grid--cell mr16" style="flex: 1 1 100px;">
                

<div class="js-post-menu pt2" data-post-id="49345972">
    <div class="grid d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="grid--cell">
            <a href="/a/49345972"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="Short permalink to this answer"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Share a link to this answer"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter devto"
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Share</a>
        </div>




        <div class="grid--cell">
            <button type="button"
                    id="btnFollowPost-49345972" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                    data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                    data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                    data-s-popover-placement="bottom" aria-controls=""
                    title="Follow this answer to receive notifications">
                Follow
            </button>
        </div>




    </div>
    <div class="js-menu-popup-container"></div>
</div>

            </div>


            <div class="post-signature grid--cell fl0">
                <div class="user-info user-hover">
    <div class="user-action-time">
        answered <span title="2018-03-18 08:37:47Z" class="relativetime">Mar 18 '18 at 8:37</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/4672474/momin"><div class="gravatar-wrapper-32"><img src="https://lh6.googleusercontent.com/-88VL7qNfFOk/AAAAAAAAAAI/AAAAAAAAAkY/8rAQITfVC2g/photo.jpg?sz=32" alt="" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/4672474/momin">Momin</a><span class="d-none" itemprop="name">Momin</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">2,463</span><span title="3 gold badges" aria-hidden="true"><span class="badge1"></span><span class="badgecount">3</span></span><span class="v-visible-sr">3 gold badges</span><span title="25 silver badges" aria-hidden="true"><span class="badge2"></span><span class="badgecount">25</span></span><span class="v-visible-sr">25 silver badges</span><span title="33 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">33</span></span><span class="v-visible-sr">33 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount">2</span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-49345972" class="comments js-comments-container bt bc-black-075 mt12 " data-post-id="49345972" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

                        <li id="comment-85691817" class="comment js-comment " data-comment-id="85691817" data-comment-owner-id="9244664" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">Yours is pre-programmed and has a lot of CSS. Is there a way to make it more concise? And have a way of updating the value?</span>
                
&ndash;&nbsp;<a href="/users/9244664/benjamin-sommer"
                       title="588 reputation"
                       class="comment-user owner">Benjamin Sommer</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:44:04Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:44</span></span>
            </div>
        </div>
    </li>
    <li id="comment-85691882" class="comment js-comment " data-comment-id="85691882" data-comment-owner-id="4672474" data-comment-score="0">
        <div class="js-comment-actions comment-actions">
            <div class="comment-score js-comment-edit-hide">
            </div>
        </div>
        <div class="comment-text  js-comment-text-and-form">
            <div class="comment-body js-comment-edit-hide">
                
                <span class="comment-copy">In this case you have to need change css style to keep updated.</span>
                
&ndash;&nbsp;<a href="/users/4672474/momin"
                       title="2,463 reputation"
                       class="comment-user">Momin</a>
                <span class="comment-date" dir="ltr"><span title="2018-03-18 08:48:38Z, License: CC BY-SA 3.0" class="relativetime-clean">Mar 18 '18 at 8:48</span></span>
            </div>
        </div>
    </li>

            </ul>
	    </div>

        <div id="comments-link-49345972" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>
                                          
<a name="49346026"></a>
<div id="answer-49346026" class="answer" data-answerid="49346026" data-ownerid="9489403" data-score="0" itemprop="suggestedAnswer" itemscope itemtype="https://schema.org/Answer">
    <div class="post-layout">
        <div class="votecell post-layout--left">
            <div class="js-voting-container grid jc-center fd-column ai-stretch gs4 fc-black-200" data-post-id="49346026">
        <button class="js-vote-up-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This answer is useful" aria-pressed="false" aria-label="Up vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowUpLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 26h32L18 10 2 26z"/></svg></button>
        <div class="js-vote-count grid--cell fc-black-500 fs-title grid fd-column ai-center" itemprop="upvoteCount" data-value="0">0</div>
        <button class="js-vote-down-btn grid--cell s-btn s-btn__unset c-pointer" data-controller="s-tooltip" data-s-tooltip-placement="right" title="This answer is not useful" aria-pressed="false" aria-label="Down vote" data-selected-classes="fc-theme-primary"><svg aria-hidden="true" class="m0 svg-icon iconArrowDownLg" width="36" height="36" viewBox="0 0 36 36"><path d="M2 10h32L18 26 2 10z"/></svg></button>

    
            <div class="js-accepted-answer-indicator grid--cell fc-green-500 py6 mtn8 d-none" data-s-tooltip-placement="right" title="Loading when this answer was accepted&#x2026;" tabindex="0" role="note" aria-label="Accepted">
                <div class="ta-center">
                    <svg aria-hidden="true" class="svg-icon iconCheckmarkLg" width="36" height="36" viewBox="0 0 36 36"><path d="M6 14l8 8L30 6v8L14 30l-8-8v-8z"/></svg>
                </div>
            </div>

    
        <a class="js-post-issue grid--cell s-btn s-btn__unset c-pointer py6 mx-auto" href="/posts/49346026/timeline" data-shortcut="T" data-ks-title="timeline" data-controller="s-tooltip" data-s-tooltip-placement="right" title="Show activity on this post." aria-label="Timeline"><svg aria-hidden="true" class="mln2 mr0 svg-icon iconHistory" width="19" height="18" viewBox="0 0 19 18"><path d="M3 9a8 8 0 113.73 6.77L8.2 14.3A6 6 0 105 9l3.01-.01-4 4-4-4h3L3 9zm7-4h1.01L11 9.36l3.22 2.1-.6.93L10 10V5z"/></svg></a>

</div>
        </div>

        

<div class="answercell post-layout--right">
    
    <div class="s-prose js-post-body" itemprop="text">
<p>Using canvas. Change the percent for changing the angle.</p>

<p><div class="snippet" data-lang="js" data-hide="false" data-console="true" data-babel="false">
<div class="snippet-code">
<pre class="snippet-code-js lang-js prettyprint-override"><code>var canvas = document.getElementById("cvs");
canvas.width = innerWidth;
canvas.height = innerHeight;
var ctx = canvas.getContext("2d");

var percent = 90;

ctx.beginPath();
ctx.arc(innerWidth/2, innerHeight/2, 100, 0, Math.PI * 2);
ctx.strokeStyle = "#111";
ctx.lineWidth = 20;
ctx.stroke();
ctx.closePath();

var angle = percent/100 * 360;
ctx.beginPath();
ctx.arc(innerWidth/2, innerHeight/2, 100, -90 * Math.PI/180, (angle - 90) * Math.PI/180);
ctx.strokeStyle = "#fff";
ctx.lineWidth = 20;
ctx.stroke();
ctx.closePath();

ctx.textBaseline = "middle";
ctx.textAlign = "center";
ctx.font = "40px arial bold";
ctx.fillStyle = "#fff"
ctx.fillText(percent + "%", innerWidth/2, innerHeight/2);</code></pre>
<pre class="snippet-code-css lang-css prettyprint-override"><code>body {
  overflow: hidden;
  background: #000;
}</code></pre>
<pre class="snippet-code-html lang-html prettyprint-override"><code>&lt;body&gt;
  &lt;canvas id="cvs"&gt;&lt;/canvas&gt;
&lt;/body&gt;</code></pre>
</div>
</div>
</p>
    </div>
    <div class="mt24">
        <div class="grid fw-wrap ai-start jc-end gs8 gsy">
            <time itemprop="dateCreated" datetime="2018-03-18T08:46:23"></time>
            <div class="grid--cell mr16" style="flex: 1 1 100px;">
                

<div class="js-post-menu pt2" data-post-id="49346026">
    <div class="grid d-flex gs8 s-anchors s-anchors__muted fw-wrap">

        <div class="grid--cell">
            <a href="/a/49346026"
               rel="nofollow"
               itemprop="url"
               class="js-share-link js-gps-track"
               title="Short permalink to this answer"
               data-gps-track="post.click({ item: 2, priv: 0, post_type: 2 })"
               data-controller="se-share-sheet"
               data-se-share-sheet-title="Share a link to this answer"
               data-se-share-sheet-subtitle=""
               data-se-share-sheet-post-type="answer"
               data-se-share-sheet-social="facebook twitter devto"
               data-se-share-sheet-location="2"
               data-se-share-sheet-license-url="https%3a%2f%2fcreativecommons.org%2flicenses%2fby-sa%2f3.0%2f"
               data-se-share-sheet-license-name="CC BY-SA 3.0"
               data-s-popover-placement="bottom-start">Share</a>
        </div>




        <div class="grid--cell">
            <button type="button"
                    id="btnFollowPost-49346026" class="s-btn s-btn__link js-follow-post js-follow-answer js-gps-track"
                    data-gps-track="post.click({ item: 14, priv: 0, post_type: 2 })"
                    data-controller="s-tooltip " data-s-tooltip-placement="bottom"
                    data-s-popover-placement="bottom" aria-controls=""
                    title="Follow this answer to receive notifications">
                Follow
            </button>
        </div>




    </div>
    <div class="js-menu-popup-container"></div>
</div>

            </div>


            <div class="post-signature grid--cell fl0">
                <div class="user-info ">
    <div class="user-action-time">
        answered <span title="2018-03-18 08:46:23Z" class="relativetime">Mar 18 '18 at 8:46</span>
    </div>
    <div class="user-gravatar32">
        <a href="/users/9489403/badboy24"><div class="gravatar-wrapper-32"><img src="https://www.gravatar.com/avatar/0d1c8ef3c0699b6c97f8fe2cc2654cbb?s=32&amp;d=identicon&amp;r=PG&amp;f=1" alt="" width="32" height="32" class="bar-sm"></div></a>
    </div>
    <div class="user-details" itemprop="author" itemscope itemtype="http://schema.org/Person">
        <a href="/users/9489403/badboy24">badboy24</a><span class="d-none" itemprop="name">badboy24</span>
        <div class="-flair">
            <span class="reputation-score" title="reputation score " dir="ltr">193</span><span title="9 bronze badges" aria-hidden="true"><span class="badge3"></span><span class="badgecount">9</span></span><span class="v-visible-sr">9 bronze badges</span>
        </div>
    </div>
</div>


            </div>
        </div>
    </div>
    
</div>




            <span class="d-none" itemprop="commentCount"></span> 
    <div class="post-layout--right js-post-comments-component">
        <div id="comments-49346026" class="comments js-comments-container bt bc-black-075 mt12  dno" data-post-id="49346026" data-min-length="15">
            <ul class="comments-list js-comments-list"
                    data-remaining-comments-count="0"
                    data-canpost="false"
                    data-cansee="true"
                    data-comments-unavailable="false"
                    data-addlink-disabled="true">

            </ul>
	    </div>

        <div id="comments-link-49346026" data-rep=50 data-anon=true>
                    <a class="js-add-link comments-link disabled-link" title="Use comments to ask for more information or suggest improvements. Avoid comments like &#x201C;&#x2B;1&#x201D; or &#x201C;thanks&#x201D;."  href="#" role="button">Add a comment</a>
                <span class="js-link-separator dno">&nbsp;|&nbsp;</span>
            <a class="js-show-link comments-link dno" title="Expand to show all comments on this post" href=# onclick="" role="button"></a>
        </div>         
    </div>
    </div>
</div>




                            <h2 class="bottom-notice" data-loc="1">
Not the answer you&#x27;re looking for? Browse other questions tagged <a href="/questions/tagged/javascript" class="post-tag" title="show questions tagged &#39;javascript&#39;" rel="tag">javascript</a> <a href="/questions/tagged/jquery" class="post-tag" title="show questions tagged &#39;jquery&#39;" rel="tag">jquery</a> <a href="/questions/tagged/css" class="post-tag" title="show questions tagged &#39;css&#39;" rel="tag">css</a> <a href="/questions/tagged/progress-bar" class="post-tag" title="show questions tagged &#39;progress-bar&#39;" rel="tag">progress-bar</a> <a href="/questions/tagged/percentage" class="post-tag" title="show questions tagged &#39;percentage&#39;" rel="tag">percentage</a>  or <a href="/questions/ask">ask your own question</a>.                            </h2>
                </div>
            </div>
            <div id="sidebar" class="show-votes" role="complementary" aria-label="sidebar">
                    

                
<div class="s-sidebarwidget s-sidebarwidget__yellow s-anchors s-anchors__grayscale mb16" data-tracker="cb=1">
    <ul class="d-block p0 m0">
                    <div class="s-sidebarwidget--header s-sidebarwidget__small-bold-text fc-light d:fc-black-900 bb bbw1">
                        The Overflow Blog
                    </div>
        <li class="s-sidebarwidget--item grid px16">
            <div class="grid--cell1 fl-shrink0">
<svg aria-hidden="true" class="va-text-top svg-icon iconPencilSm" width="14" height="14" viewBox="0 0 14 14"><path d="M11.1 1.71l1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0zM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88z"/></svg>            </div>
            <div class="grid--cell wmn0 ow-break-word">
                <a href="https://stackoverflow.blog/2021/03/23/level-up-creative-coding-with-p5-js-part-2/" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;The Overflow Blog&quot;,&quot;https://stackoverflow.blog/2021/03/23/level-up-creative-coding-with-p5-js-part-2/&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 1, position: 0 })">Level Up: creative coding with p5.js – part 2</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item grid px16">
            <div class="grid--cell1 fl-shrink0">
<svg aria-hidden="true" class="va-text-top svg-icon iconPencilSm" width="14" height="14" viewBox="0 0 14 14"><path d="M11.1 1.71l1.13 1.12c.2.2.2.51 0 .71L11.1 4.7 9.21 2.86l1.17-1.15c.2-.2.51-.2.71 0zM2 10.12l6.37-6.43 1.88 1.88L3.88 12H2v-1.88z"/></svg>            </div>
            <div class="grid--cell wmn0 ow-break-word">
                <a href="https://stackoverflow.blog/2021/03/24/forget-moores-law-algorithms-drive-technology-forward/" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;The Overflow Blog&quot;,&quot;https://stackoverflow.blog/2021/03/24/forget-moores-law-algorithms-drive-technology-forward/&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 1, position: 1 })">Forget Moore’s Law. Algorithms drive technology forward</a>
            </div>
        </li>
                    <div class="s-sidebarwidget--header s-sidebarwidget__small-bold-text fc-light d:fc-black-900 bb bbw1">
                        Featured on Meta
                    </div>
        <li class="s-sidebarwidget--item grid px16">
            <div class="grid--cell1 fl-shrink0">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>            </div>
            <div class="grid--cell wmn0 ow-break-word">
                <a href="https://meta.stackexchange.com/questions/362203/stack-overflow-for-teams-is-now-free-for-up-to-50-users-forever" class="js-gps-track" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/362203/stack-overflow-for-teams-is-now-free-for-up-to-50-users-forever&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 2 })">Stack Overflow for Teams is now free for up to 50 users, forever</a>
            </div>
        </li>
        <li class="s-sidebarwidget--item grid px16">
            <div class="grid--cell1 fl-shrink0">
<div class="favicon favicon-stackexchangemeta" title="Meta Stack Exchange"></div>            </div>
            <div class="grid--cell wmn0 ow-break-word">
                <a href="https://meta.stackexchange.com/questions/362269/planned-maintenance-scheduled-for-saturday-march-27-2021-at-100-utc-friday-m" class="js-gps-track" title="Planned maintenance scheduled for Saturday, March 27, 2021 at 1:00 UTC (Friday March 26 9:00 PM US/EDT)" data-ga="[&quot;community bulletin board&quot;,&quot;Featured on Meta&quot;,&quot;https://meta.stackexchange.com/questions/362269/planned-maintenance-scheduled-for-saturday-march-27-2021-at-100-utc-friday-m&quot;,null,null]" data-gps-track="communitybulletin.click({ priority: 3, position: 3 })">Planned maintenance scheduled for Saturday, March 27, 2021 at 1:00 UTC&hellip;</a>
            </div>
        </li>
    </ul>
</div>


<div class="js-zone-container zone-container-sidebar">
    <div id="dfp-tsb" class="everyonelovesstackoverflow everyoneloves__top-sidebar"></div>
    <div class="js-report-ad-button-container " style="width: 300px"></div>
</div>
<div class="js-zone-container zone-container-sidebar">
    <div id="dfp-msb" class="everyonelovesstackoverflow everyoneloves__mid-sidebar"></div>
    <div class="js-report-ad-button-container " style="width: 300px"></div>
</div>
<div id="hireme"></div>                    <div class="module sidebar-linked">
	<h4 id="h-linked">Linked</h4>
	<div class="linked" data-tracker="lq=1">
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 49345858, target_question_id: 59959866, position: 0 })">
				<a href="/q/59959866" title="Vote score (upvotes - downvotes)">
					<div class="answer-votes answered-accepted default">-1</div>
				</a>
				<a href="/questions/59959866/how-to-make-a-percentage-circle-using-using-html-and-css-only-with-percentage-wr?noredirect=1" class="question-hyperlink">How to make a percentage circle using using html and css only with percentage written inside</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 49345858, target_question_id: 59721994, position: 1 })">
				<a href="/q/59721994" title="Vote score (upvotes - downvotes)">
					<div class="answer-votes  default">1</div>
				</a>
				<a href="/questions/59721994/how-can-i-make-a-percentage-circle-like-google?noredirect=1" class="question-hyperlink">How can I make a percentage circle like google?</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 49345858, target_question_id: 66205662, position: 2 })">
				<a href="/q/66205662" title="Vote score (upvotes - downvotes)">
					<div class="answer-votes answered-accepted default">1</div>
				</a>
				<a href="/questions/66205662/calculate-percentage-in-progress-circle?noredirect=1" class="question-hyperlink">calculate percentage in progress circle</a>
			</div>
            <div class="spacer js-gps-track" data-gps-track="linkedquestion.click({ source_post_id: 49345858, target_question_id: 65963944, position: 3 })">
				<a href="/q/65963944" title="Vote score (upvotes - downvotes)">
					<div class="answer-votes  default">0</div>
				</a>
				<a href="/questions/65963944/curving-the-borders-and-reducing-border-size-of-progress-bar-circle-with-percent?noredirect=1" class="question-hyperlink">Curving the borders and reducing border size of Progress Bar Circle with Percentage</a>
			</div>
	</div>
</div>


                    <div class="module sidebar-related">
                        <h4 id="h-related">Related</h4>
                        <div class="related js-gps-related-questions" data-tracker="rq=1">
                                <div class="spacer">
                                    <a href="/q/152975" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">2623</div>
                                    </a>
                                    <a href="/questions/152975/how-do-i-detect-a-click-outside-an-element" class="question-hyperlink">How do I detect a click outside an element?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/170986" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">1423</div>
                                    </a>
                                    <a href="/questions/170986/what-is-the-best-way-to-add-options-to-a-select-from-a-javascript-object-with-jq" class="question-hyperlink">What is the best way to add options to a select from a JavaScript object with jQuery?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/179713" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">1326</div>
                                    </a>
                                    <a href="/questions/179713/how-to-change-the-href-for-a-hyperlink-using-jquery" class="question-hyperlink">How to change the href for a hyperlink using jQuery</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/298503" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted large">815</div>
                                    </a>
                                    <a href="/questions/298503/how-can-you-check-for-a-hash-in-a-url-using-javascript" class="question-hyperlink">How can you check for a #hash in a URL using JavaScript?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/779379" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted large">936</div>
                                    </a>
                                    <a href="/questions/779379/why-is-settimeoutfn-0-sometimes-useful" class="question-hyperlink">Why is setTimeout(fn, 0) sometimes useful?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/1041344" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">2135</div>
                                    </a>
                                    <a href="/questions/1041344/how-can-i-select-an-element-with-multiple-classes-in-jquery" class="question-hyperlink">How can I select an element with multiple classes in jQuery?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/1458724" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">1287</div>
                                    </a>
                                    <a href="/questions/1458724/how-do-i-set-unset-a-cookie-with-jquery" class="question-hyperlink">How do I set/unset a cookie with jQuery?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/3239598" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">1480</div>
                                    </a>
                                    <a href="/questions/3239598/how-can-i-get-the-id-of-an-element-using-jquery" class="question-hyperlink">How can I get the ID of an element using jQuery?</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/3955229" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted large">991</div>
                                    </a>
                                    <a href="/questions/3955229/remove-all-child-elements-of-a-dom-node-in-javascript" class="question-hyperlink">Remove all child elements of a DOM node in JavaScript</a>
                                </div>
                                <div class="spacer">
                                    <a href="/q/5404839" title="Vote score (upvotes - downvotes)">
                                        <div class="answer-votes answered-accepted extra-large">2555</div>
                                    </a>
                                    <a href="/questions/5404839/how-can-i-refresh-a-page-with-jquery" class="question-hyperlink">How can I refresh a page with jQuery?</a>
                                </div>
                        </div>
                    </div>

                <div id="hot-network-questions" class="module tex2jax_ignore">
    <h4>
        <a href="https://stackexchange.com/questions?tab=hot"
           class="js-gps-track s-link s-link__inherit" 
           data-gps-track="posts_hot_network.click({ item_type:1, location:11 })">
            Hot Network Questions
        </a>
    </h4>
    <ul>
            <li >
                <div class="favicon favicon-codegolf" title="Code Golf Stack Exchange"></div><a href="https://codegolf.stackexchange.com/questions/221250/summon-the-sevens" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:200 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Summon the sevens
                </a>

            </li>
            <li >
                <div class="favicon favicon-electronics" title="Electrical Engineering Stack Exchange"></div><a href="https://electronics.stackexchange.com/questions/555226/resistor-in-shunt-regulator-not-following-ohms-law" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:135 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Resistor in shunt regulator not following Ohm&#x27;s law?
                </a>

            </li>
            <li >
                <div class="favicon favicon-security" title="Information Security Stack Exchange"></div><a href="https://security.stackexchange.com/questions/246484/securing-api-keys-for-a-twitter-account-for-a-program-to-be-run-on-other-pcs" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:162 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Securing API keys for a Twitter account for a program to be run on other PC&#x27;s
                </a>

            </li>
            <li >
                <div class="favicon favicon-codegolf" title="Code Golf Stack Exchange"></div><a href="https://codegolf.stackexchange.com/questions/221196/convert-a-decimal-to-a-fraction-approximately" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:200 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Convert a decimal to a fraction, approximately
                </a>

            </li>
            <li >
                <div class="favicon favicon-aviation" title="Aviation Stack Exchange"></div><a href="https://aviation.stackexchange.com/questions/85082/why-are-3-or-4-seat-gliders-so-rare" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:528 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Why are 3- or 4-seat gliders so rare?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-bicycles" title="Bicycles Stack Exchange"></div><a href="https://bicycles.stackexchange.com/questions/75770/cracked-rim-around-the-spoke" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:126 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Cracked rim around the spoke
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-codereview" title="Code Review Stack Exchange"></div><a href="https://codereview.stackexchange.com/questions/257629/given-two-vectors-of-ints-determine-whether-one-vector-is-a-prefix-of-the-other" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:196 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Given two vectors of ints, determine whether one vector is a prefix of the other
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-travel" title="Travel Stack Exchange"></div><a href="https://travel.stackexchange.com/questions/162982/my-bus-hasnt-left-salem-for-several-hours-no-eta-updated-its-hours-behind-s" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:273 }); posts_hot_network.click({ item_type:2, location:11 })">
                    My bus hasn&#x27;t left Salem for several hours, no ETA updated - It&#x27;s hours behind schedule, What should I do?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="https://academia.stackexchange.com/questions/164352/ethics-in-editorial-tasks-by-chinese-nationals" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:415 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Ethics in editorial tasks by Chinese nationals?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-worldbuilding" title="Worldbuilding Stack Exchange"></div><a href="https://worldbuilding.stackexchange.com/questions/198373/how-long-will-it-take-for-the-off-world-population-to-exceed-earths-population" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:579 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How long will it take for the off-World population to exceed Earth&#x27;s population?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-music" title="Music: Practice &amp; Theory Stack Exchange"></div><a href="https://music.stackexchange.com/questions/112145/making-sense-of-5-4-time-signature" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:240 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Making Sense of 5/4 Time Signature
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-workplace" title="The Workplace Stack Exchange"></div><a href="https://workplace.stackexchange.com/questions/170722/is-opting-out-of-fun-office-charity-activites-socially-and-professionally-acce" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:423 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is opting out of &quot;fun&quot; office charity activites socially and professionally acceptable in a small company?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-physics" title="Physics Stack Exchange"></div><a href="https://physics.stackexchange.com/questions/623146/if-electrons-can-be-created-and-destroyed-then-why-cant-charges-be-created-or" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:151 }); posts_hot_network.click({ item_type:2, location:11 })">
                    If electrons can be created and destroyed, then why can&#x27;t charges be created or destroyed?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-history" title="History Stack Exchange"></div><a href="https://history.stackexchange.com/questions/63328/did-saladin-speak-any-european-languages" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:324 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Did Saladin speak any European languages?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-puzzling" title="Puzzling Stack Exchange"></div><a href="https://puzzling.stackexchange.com/questions/108015/with-4-i-deliver-you-with-3-i-trouble-you-with-2-i-kill-you" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:559 }); posts_hot_network.click({ item_type:2, location:11 })">
                    With 4 I deliver you, With 3 I trouble you, With 2 I kill you
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-rpg" title="Role-playing Games Stack Exchange"></div><a href="https://rpg.stackexchange.com/questions/182262/how-should-my-warlock-player-use-their-familiar-during-battles" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:122 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How should my Warlock player use their familiar during battles?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-japanese" title="Japanese Language Stack Exchange"></div><a href="https://japanese.stackexchange.com/questions/84759/%e3%81%84%e3%81%9f%e3%81%a0%e3%81%8d%e3%81%be%e3%81%99-to-accept-to-a-food-offer" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:257 }); posts_hot_network.click({ item_type:2, location:11 })">
                    &#x300C;&#x3044;&#x305F;&#x3060;&#x304D;&#x307E;&#x3059;&#x300D; to accept to a food offer?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-superuser" title="Super User"></div><a href="https://superuser.com/questions/1635775/how-do-i-check-if-a-2-track-wav-file-is-really-in-stereo" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:3 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How do I check if a 2-track WAV file is &quot;really&quot; in stereo?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-pets" title="Pets Stack Exchange"></div><a href="https://pets.stackexchange.com/questions/29978/how-to-deal-with-newborn-kitten-bodily-waste" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:518 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How to deal with newborn kitten bodily waste?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-sitecore" title="Sitecore Stack Exchange"></div><a href="https://sitecore.stackexchange.com/questions/28209/sitecore-10-1-showing-subitems-icon-even-when-there-are-no-children" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:664 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Sitecore 10.1 showing subitems icon even when there are no children
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-electronics" title="Electrical Engineering Stack Exchange"></div><a href="https://electronics.stackexchange.com/questions/555124/is-auto-generated-projects-for-embedded-system-the-future" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:135 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is auto generated projects for embedded system the future?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-opensource" title="Open Source Stack Exchange"></div><a href="https://opensource.stackexchange.com/questions/11457/is-it-possible-that-a-future-gpl-version-removes-copyleft" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:619 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is it possible that a future GPL version removes copyleft?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-diy" title="Home Improvement Stack Exchange"></div><a href="https://diy.stackexchange.com/questions/219552/how-do-i-release-a-bit-from-a-jammed-keyless-drill-chuck" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:73 }); posts_hot_network.click({ item_type:2, location:11 })">
                    How do I release a bit from a jammed keyless drill chuck?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-law" title="Law Stack Exchange"></div><a href="https://law.stackexchange.com/questions/62509/is-marriage-automatically-cancelled-for-immigration-violation" class="js-gps-track question-hyperlink mb0" data-gps-track="site.switch({ item_type:11, target_site:617 }); posts_hot_network.click({ item_type:2, location:11 })">
                    Is marriage automatically cancelled for immigration violation?
                </a>

            </li>
    </ul>

        <a href="#" 
           class="show-more js-show-more js-gps-track" 
           data-gps-track="posts_hot_network.click({ item_type:3, location:11 })">
            more hot questions
        </a>
</div>

            </div>
    </div>
<script>StackExchange.ready(function(){$.get('/posts/49345858/ivc/143c');});</script>
<noscript><div><img src="/posts/49345858/ivc/143c" class="dno" alt="" width="0" height="0"></div></noscript><div style="display:none" id="js-codeblock-lang">lang-js</div></div>


        </div>
    </div>
        
<script>;try{(function(a){function b(a){return'string'==typeof a?document.getElementById(a):a}function c(a){return a=b(a),!!a&&'none'===getComputedStyle(a).display}function d(a){return!c(a)}function e(a){return!!a}function f(a){return /^\s*$/.test(b(a).innerHTML)}function g(a){var b=a.style;b.height=b.maxHeight=b.minHeight='auto',b.display='none'}function h(a){var b=a.style;b.height=b.maxHeight=b.minHeight='auto',b.display='none',[].forEach.call(a.children,h)}function i(a){var b=a.style;b.height=b.maxHeight=b.minHeight='auto',b.removeProperty('display')}function j(a,b){var c;return function(){return a&&(c=a.call(b||this,arguments),a=null),c}}function k(a){var b=document.createElement('script');b.src=a,document.body.appendChild(b)}function l(a){return m([],a)}function m(a,b){return a.push=function(a){return b(),delete this.push,this.push(a)},a}function n(){try{return!new Function('return async()=>{};')}catch(a){return!0}}function o(){return'undefined'!=typeof googletag&&!!googletag.apiReady}function p(){o()||(googletag={cmd:l(B)})}function q(){var a=document.createElement('div');a.className='adsbox',a.id='clc-abd',a.style.position='absolute',a.style.pointerEvents='none',a.innerHTML='&nbsp;',document.body.appendChild(a)}function r(){return Object.keys(F.ids).filter(function(a){return'clc-cpa'!=a})}function s(a){var b=a.split('_')[0],c=F.ids[b],d=F.slots[c];'function'==typeof d&&(d=d(b));return{path:'/'+C+'/'+E+'/'+c+'/'+D,sizes:d,zone:c}}function t(a){try{Array.isArray(clc.dfp.slotsRenderedEvents)||(clc.dfp.slotsRenderedEvents=[]),clc.dfp.slotsRenderedEvents.push(a);var b=a.slot.getSlotElementId(),c=[];b||c.push('id=0');var d=document.getElementById(b);if(!b||d?d.hasAttribute('data-clc-stalled')&&c.push('st=1'):c.push('el=0'),0!==c.length)return void G(c.join('&'));var e=s(b),f=e.zone;if(clc.collapse&&clc.collapse[f]&&a.isEmpty)return h(d),void d.setAttribute('data-clc-ready','true');if(-1!==y.dh.indexOf(a.lineItemId))h(d);else if(a.lineItemId){d.setAttribute('data-clc-prefilled','true');var j=d.parentElement;if(j.classList.contains('js-zone-container')){g(j);var k=j.querySelectorAll('.js-report-ad-button-container'),l=k[0];switch(l.style.height='24px',b){case'dfp-tlb':case'dfp-tag':{j.classList.add('mb8');break}case'dfp-mlb':case'dfp-smlb':case'dfp-bmlb':{j.classList.add('my8');break}case'dfp-isb':{j.classList.add('mt24');break}case'dfp-m-aq':{j.classList.add('my12'),j.classList.add('mx-auto');break}default:}i(j),i(d)}else i(d);if('dfp-msb'==b){var m=document.getElementById('hireme');h(m)}}d.setAttribute('data-clc-ready','true')}catch(a){var n=document.querySelector('#dfp-tsb, #dfp-isb, #clc-tsb');n&&n.setAttribute('data-clc-ready','true'),G('e=1')}}function u(a,b){'dfp-isb'===a&&b.setTargeting('Sidebar',['Inline']),'dfp-tsb'===a&&b.setTargeting('Sidebar',['Right']);var c=s(a),d=c.path,e=c.sizes,f=c.zone,g=googletag.defineSlot(d,e,a);g.addService(b),!1;var h=a.split('_');if('clc-cpa'==h[0]&&h[1]){var i=h[1];g.setTargeting('talent-company-id',i)}}function v(b){var c=a.dfp&&a.dfp.targeting||{};'SystemDefault'===c.ProductVariant&&(window.matchMedia&&window.matchMedia('(prefers-color-scheme: dark)').matches?c.ProductVariant='Dark':c.ProductVariant='Light'),Object.keys(c).forEach(function(a){b.setTargeting(a,c[a])})}function w(a){var g=a.map(b).filter(e);return{eligible:g.filter(f).filter(d),ineligible:g.filter(c)}}function x(b){void 0===b&&(b=r());var c=['dfp-mlb','dfp-smlb'];if(!o())return p(),void googletag.cmd.push(function(){return x(b)});var d=w(b),e=d.eligible,f=d.ineligible;if(e.forEach(function(a){g(a)}),f.forEach(h),0!==e.length){y.abd&&q();var i=googletag.pubads().getSlots(),j=i.filter(function(a){return 0<=b.indexOf(a.getSlotElementId())});googletag.destroySlots(j);var k=googletag.pubads();y.sf&&(k.setForceSafeFrame(!0),k.setSafeFrameConfig({allowOverlayExpansion:!0,allowPushExpansion:!0,sandbox:!0})),'undefined'!=typeof y.targeting_consent&&(k.setRequestNonPersonalizedAds(y.targeting_consent?0:1),!y.targeting_consent&&k.setPrivacySettings({limitedAds:!0})),y.ll||k.enableSingleRequest(),a.sreEvent||(k.addEventListener('slotRenderEnded',t),a.sreEvent=!0),v(k);var l=e.filter(function(a){return!y.ll||0>c.indexOf(a.id)}),m=e.filter(function(a){return!!y.ll&&0<=c.indexOf(a.id)});l.forEach(function(a){u(a.id,k),a.setAttribute('data-dfp-zone','true')}),googletag.enableServices(),l.forEach(function(a){googletag.display(a.id)}),y.ll&&(k.enableLazyLoad({fetchMarginPercent:0,renderMarginPercent:0}),m.forEach(function(a){u(a.id,k),a.setAttribute('data-clc-prefilled','true')}),m.forEach(function(a){googletag.display(a.id)}))}}var y=function(a){for(var b=[],c=1;c<arguments.length;c++)b[c-1]=arguments[c];for(var d,e=0,f=b;e<f.length;e++)for(var g in d=f[e],d)a[g]=d[g];return a}({"lib":"https://cdn.sstatic.net/clc/clc.min.js?v=0e634710bdce","style":"https://cdn.sstatic.net/clc/styles/clc.min.css?v=69a63cb1f209","u":"https://clc.stackoverflow.com/markup.js","wa":true,"kt":2000,"tto":true,"h":"clc.stackoverflow.com","allowed":"^(((talent\\.)?stackoverflow)|(blog\\.codinghorror)|(serverfault|askubuntu)|([^\\.]+\\.stackexchange))\\.com$","wv":true,"al":false,"dh":[5171832659],"abd":true},a.options||{}),z=j(function(){var a=y.lib;n()&&(a=a.replace(/(\.min)?\.js(\?v=[0-9a-fA-F]+)?$/,'.ie$1.js$2')),k(a)}),A=a.cmd||[];Array.isArray(A)&&(0<A.length?z():m(A,z));var B=j(function(){y.targeting_consent||'undefined'==typeof y.targeting_consent?k('https://securepubads.g.doubleclick.net/tag/js/gpt.js'):k('https://pagead2.googlesyndication.com/tag/js/gpt.js')}),C='248424177',D=/^\/tags\//.test(location.pathname)||/^\/questions\/tagged\//.test(location.pathname)?'tag-pages':/^\/$/.test(location.pathname)||/^\/home/.test(location.pathname)?'home-page':'question-pages',E=location.hostname;var F={slots:{lb:[[728,90]],mlb:[[728,90]],smlb:[[728,90]],bmlb:[[728,90]],sb:function(a){return'dfp-tsb'===a?[[300,250],[300,600]]:[[300,250]]},"tag-sponsorship":[[730,135]],"mobile-below-question":[[320,50],[300,250]],msb:[[300,250],[300,600]],"talent-conversion-tracking":[[1,1]]},ids:{"dfp-tlb":'lb',"dfp-mlb":'mlb',"dfp-smlb":'smlb',"dfp-bmlb":'bmlb',"dfp-tsb":'sb',"dfp-isb":'sb',"dfp-tag":'tag-sponsorship',"dfp-msb":'msb',"dfp-m-aq":'mobile-below-question',"clc-tlb":'lb',"clc-mlb":'mlb',"clc-tsb":'sb',"clc-cpa":'talent-conversion-tracking'}},G=function(a){new Image().src='https://'+y.h+'/stalled.gif?'+a};(function(){var b=y.al;b&&A.push(function(){return a.load()})})(),p(),a.dfp={load:x},a.options=y,a.cmd=A})(this.clc=this.clc||{})}catch(a){window.console.error(a)}</script><script>
    var clc = clc || {};
    clc.collapse = { sb: !0, 'tag-sponsorship': !0, lb: !0, mlb: !0, smlb: !0, bmlb: !0, 'mobile-below-question': !0 };
    clc.options = clc.options || {};
    clc.options.sf = !0;
    clc.options.hb = !1;
    clc.options.ll = !0;
    clc.options.targeting_consent = !0;
    clc.options.performance_consent = !0;
        clc.cmd = clc.cmd || [];
        clc.cmd.push(function () { window.clc_request='A5hsDf-f79gIAAAAAEL18AICAAAAAgAAAAABLwAAAHxqYXZhc2NyaXB0fGpxdWVyeXxjc3N8cHJvZ3Jlc3MtYmFyfHBlcmNlbnRhZ2V8AMOq9_QLAoZpnBc'; clc.load(); });
        clc.dfp = clc.dfp || {};
        clc.dfp.targeting = {Registered:['false'],'so-tag':['javascript','jquery','css','progress-bar','percentage'],'tag-reportable':['javascript','jquery','css','progress-bar','percentage'],'tag-non-reportable':['javascript','jquery','css','progress-bar','percentage'],NumberOfAnswers:['3']};
        clc.dfp.targeting.TargetingConsent = ['true'];

        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('dfptestads')) {
            const dfptestads = urlParams.get('dfptestads');
            clc.dfp.targeting.DfpTestAds = dfptestads;
        }
        
        var googletag = googletag || {};
        googletag.cmd = googletag.cmd || [];
        googletag.cmd.push(function () { clc.dfp.load(); });
        StackExchange.ready(function () { googletag.cmd.push(function () { StackExchange.ads.init(googletag, '/ads/report-ad', 'Report this ad') }) });
</script>

            <footer id="footer" class="site-footer js-footer" role="contentinfo">
        <div class="site-footer--container">
                <div class="site-footer--logo">
                    
                    <a href="https://stackoverflow.com"><svg aria-hidden="true" class="native svg-icon iconLogoGlyphMd" width="32" height="37" viewBox="0 0 32 37"><path d="M26 33v-9h4v13H0V24h4v9h22z" fill="#BCBBBB"/><path d="M21.5 0l-2.7 2 9.9 13.3 2.7-2L21.5 0zM26 18.4L13.3 7.8l2.1-2.5 12.7 10.6-2.1 2.5zM9.1 15.2l15 7 1.4-3-15-7-1.4 3zm14 10.79l.68-2.95-16.1-3.35L7 23l16.1 2.99zM23 30H7v-3h16v3z" fill="#F48024"/></svg></a>
                </div>
            <nav class="site-footer--nav">
                    <div class="site-footer--col site-footer--col__visible js-footer-col" data-name="default">
                        <h5 class="-title"><a href="https://stackoverflow.com" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 15})">Stack Overflow</a></h5>
                        <ul class="-list js-primary-footer-links">
                            <li class="-item"><a href="/questions" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 16})">Questions</a></li>
                                <li class="-item"><a href="https://stackoverflow.com/jobs" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 17})">Jobs</a></li>
                                <li class="-item"><a href="https://stackoverflow.com/jobs/directory/developer-jobs" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 11})">Developer Jobs Directory</a></li>
                                     <li class="-item"><a href="https://stackoverflow.com/jobs/salary" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 28})">Salary Calculator</a></li>
                                <li class="-item"><a href="/help" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 3 })">Help</a></li>
                                <li class="-item"><a onclick='StackExchange.switchMobile("on")' class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 12 })">Mobile</a></li>
                        </ul>
                    </div>
                    <div class="site-footer--col site-footer--col__visible js-footer-col" data-name="default">
                        <h5 class="-title"><a href="https://stackoverflowbusiness.com" class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 19 })">Products</a></h5>
                        <ul class="-list">
                            <li class="-item"><a href="https://stackoverflow.com/teams" class="js-gps-track -link" 
                                                 data-ga="[&quot;teams traffic&quot;,&quot;footer - site nav&quot;,&quot;stackoverflow.com/teams&quot;,null,{&quot;dimension4&quot;:&quot;teams&quot;}]"
                                                 data-gps-track="footer.click({ location: 2, link: 29 })">Teams</a></li>
                            <li class="-item"><a href="https://stackoverflow.com/talent" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 20 })">Talent</a></li>
                            <li class="-item"><a href="https://stackoverflow.com/advertising" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 21 })">Advertising</a></li>
                            <li class="-item"><a href="https://stackoverflow.com/enterprise" class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 22 })">Enterprise</a></li>
                        </ul>
                    </div>
                <div class="site-footer--col site-footer--col__visible js-footer-col" data-name="default">
                    <h5 class="-title"><a class="js-gps-track" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.com/company">Company</a></h5>
                    <ul class="-list">
                            <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 1 })" href="https://stackoverflow.com/company">About</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 27 })" href="https://stackoverflow.com/company/press">Press</a></li>
                            <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 9 })" href="https://stackoverflow.com/company/work-here">Work Here</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 7 })" href="https://stackoverflow.com/legal">Legal</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 8 })" href="https://stackoverflow.com/legal/privacy-policy">Privacy Policy</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 37 })" href="https://stackoverflow.com/legal/terms-of-service">Terms of Service</a></li>
                            <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 13 })" href="https://stackoverflow.com/company/contact">Contact Us</a></li>
                        <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link: 39 })" href="https://stackoverflow.com/legal/cookie-policy">Cookie Policy</a></li>
                    </ul>
                </div>
                <div class="site-footer--col site-footer--categories-nav site-footer--col__visible">
                    <a href="#" class="site-footer--back js-footer-back"><svg aria-hidden="true" class="svg-icon iconArrowLeftAlt" width="18" height="18" viewBox="0 0 18 18"><path d="M10.58 16L12 14.59 6.4 9 12 3.41 10.57 2l-7 7 7 7z"/></svg></a>
                    <div>
                        <h5 class="-title"><a href="https://stackexchange.com" data-gps-track="footer.click({ location: 2, link: 30 })">Stack Exchange<br> Network</a></h5>
                        <ul class="-list">
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Technology">Technology</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Life / Arts">Life / Arts</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Culture / Recreation">Culture / Recreation</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Science">Science</a></li>
                            <li class="-item"><a href="#" class="-link _expandable js-footer-category-trigger js-gps-track" data-gps-track="footer.click({ location: 2, link: 24 })" data-target="Other">Other</a></li>
                        </ul>
                    </div>
                </div>
                <div class="site-footer--categories">
                        <div class="site-footer--col site-footer--category js-footer-col" data-name="Technology">
        <ul class="-list">
                <li class="-item"><a href="https://stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professional and enthusiast programmers">Stack Overflow</a></li>
                <li class="-item"><a href="https://serverfault.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="system and network administrators">Server Fault</a></li>
                <li class="-item"><a href="https://superuser.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="computer enthusiasts and power users">Super User</a></li>
                <li class="-item"><a href="https://webapps.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="power users of web applications">Web Applications</a></li>
                <li class="-item"><a href="https://askubuntu.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Ubuntu users and developers">Ask Ubuntu</a></li>
                <li class="-item"><a href="https://webmasters.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="pro webmasters">Webmasters</a></li>
                <li class="-item"><a href="https://gamedev.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professional and independent game developers">Game Development</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://tex.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="users of TeX, LaTeX, ConTeXt, and related typesetting systems">TeX - LaTeX</a></li>
                <li class="-item"><a href="https://softwareengineering.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professionals, academics, and students working within the systems development life cycle">Software Engineering</a></li>
                <li class="-item"><a href="https://unix.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="users of Linux, FreeBSD and other Un*x-like operating systems">Unix &amp; Linux</a></li>
                <li class="-item"><a href="https://apple.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="power users of Apple hardware and software">Ask Different (Apple)</a></li>
                <li class="-item"><a href="https://wordpress.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="WordPress developers and administrators">WordPress Development</a></li>
                <li class="-item"><a href="https://gis.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="cartographers, geographers and GIS professionals">Geographic Information Systems</a></li>
                <li class="-item"><a href="https://electronics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="electronics and electrical engineering professionals, students, and enthusiasts">Electrical Engineering</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://android.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="enthusiasts and power users of the Android operating system">Android Enthusiasts</a></li>
                <li class="-item"><a href="https://security.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="information security professionals">Information Security</a></li>
                <li class="-item"><a href="https://dba.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="database professionals who wish to improve their database skills and learn from others in the community">Database Administrators</a></li>
                <li class="-item"><a href="https://drupal.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Drupal developers and administrators">Drupal Answers</a></li>
                <li class="-item"><a href="https://sharepoint.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="SharePoint enthusiasts">SharePoint</a></li>
                <li class="-item"><a href="https://ux.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="user experience researchers and experts">User Experience</a></li>
                <li class="-item"><a href="https://mathematica.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="users of Wolfram Mathematica">Mathematica</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://salesforce.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Salesforce administrators, implementation experts, developers and anybody in-between">Salesforce</a></li>
                <li class="-item"><a href="https://expressionengine.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="administrators, end users, developers and designers for ExpressionEngine&#xAE; CMS">ExpressionEngine&#xAE; Answers</a></li>
                <li class="-item"><a href="https://pt.stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="programadores profissionais e entusiastas">Stack Overflow em Portugu&#xEA;s</a></li>
                <li class="-item"><a href="https://blender.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people who use Blender to create 3D graphics, animations, or games">Blender</a></li>
                <li class="-item"><a href="https://networkengineering.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="network engineers">Network Engineering</a></li>
                <li class="-item"><a href="https://crypto.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="software developers, mathematicians and others interested in cryptography">Cryptography</a></li>
                <li class="-item"><a href="https://codereview.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="peer programmer code reviews">Code Review</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://magento.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="users of the Magento e-Commerce platform">Magento</a></li>
                <li class="-item"><a href="https://softwarerecs.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people seeking specific software recommendations">Software Recommendations</a></li>
                <li class="-item"><a href="https://dsp.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="practitioners of the art and science of signal, image and video processing">Signal Processing</a></li>
                <li class="-item"><a href="https://emacs.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="those using, extending or developing Emacs">Emacs</a></li>
                <li class="-item"><a href="https://raspberrypi.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="users and developers of hardware and software for Raspberry Pi">Raspberry Pi</a></li>
                <li class="-item"><a href="https://ru.stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="&#x43F;&#x440;&#x43E;&#x433;&#x440;&#x430;&#x43C;&#x43C;&#x438;&#x441;&#x442;&#x43E;&#x432;">Stack Overflow &#x43D;&#x430; &#x440;&#x443;&#x441;&#x441;&#x43A;&#x43E;&#x43C;</a></li>
                <li class="-item"><a href="https://codegolf.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="programming puzzle enthusiasts and code golfers">Code Golf</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://es.stackoverflow.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="programadores y profesionales de la inform&#xE1;tica">Stack Overflow en espa&#xF1;ol</a></li>
                <li class="-item"><a href="https://ethereum.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="users of Ethereum, the decentralized application platform and smart contract enabled blockchain">Ethereum</a></li>
                <li class="-item"><a href="https://datascience.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Data science professionals, Machine Learning specialists, and those interested in learning more about the field">Data Science</a></li>
                <li class="-item"><a href="https://arduino.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="developers of open-source hardware and software that is compatible with Arduino">Arduino</a></li>
                <li class="-item"><a href="https://bitcoin.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Bitcoin crypto-currency enthusiasts">Bitcoin</a></li>
                <li class="-item"><a href="https://sqa.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="software quality control experts, automation engineers, and software testers">Software Quality Assurance &amp; Testing</a></li>
                <li class="-item"><a href="https://sound.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="sound engineers, producers, editors, and enthusiasts">Sound Design</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Technology"><ul class="-list">
                <li class="-item"><a href="https://windowsphone.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="enthusiasts and power users of Windows Phone OS">Windows Phone</a></li>
                <li class="-item">
                    <a href="https://stackexchange.com/sites#technology" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 26 })">
                        <strong>
                            more (28)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Life / Arts">
        <ul class="-list">
                <li class="-item"><a href="https://photo.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professional, enthusiast and amateur photographers">Photography</a></li>
                <li class="-item"><a href="https://scifi.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="science fiction and fantasy enthusiasts">Science Fiction &amp; Fantasy</a></li>
                <li class="-item"><a href="https://graphicdesign.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Graphic Design professionals, students, and enthusiasts">Graphic Design</a></li>
                <li class="-item"><a href="https://movies.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="movie and TV enthusiasts">Movies &amp; TV</a></li>
                <li class="-item"><a href="https://music.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="musicians, students, and enthusiasts">Music: Practice &amp; Theory</a></li>
                <li class="-item"><a href="https://worldbuilding.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="writers/artists using science, geography and culture to construct imaginary worlds and settings">Worldbuilding</a></li>
                <li class="-item"><a href="https://video.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="engineers, producers, editors, and enthusiasts spanning the fields of video, and media creation">Video Production</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Life / Arts"><ul class="-list">
                <li class="-item"><a href="https://cooking.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professional and amateur chefs">Seasoned Advice (cooking)</a></li>
                <li class="-item"><a href="https://diy.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="contractors and serious DIYers">Home Improvement</a></li>
                <li class="-item"><a href="https://money.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people who want to be financially literate">Personal Finance &amp; Money</a></li>
                <li class="-item"><a href="https://academia.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="academics and those enrolled in higher education">Academia</a></li>
                <li class="-item"><a href="https://law.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="legal professionals, students, and others with experience or interest in law">Law</a></li>
                <li class="-item"><a href="https://fitness.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="physical fitness professionals, athletes, trainers, and those providing health-related needs">Physical Fitness</a></li>
                <li class="-item"><a href="https://gardening.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="gardeners and landscapers">Gardening &amp; Landscaping</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Life / Arts"><ul class="-list">
                <li class="-item"><a href="https://parenting.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="parents, grandparents, nannies and others with a parenting role">Parenting</a></li>
                <li class="-item">
                    <a href="https://stackexchange.com/sites#lifearts" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 26 })">
                        <strong>
                            more (10)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation">
        <ul class="-list">
                <li class="-item"><a href="https://english.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="linguists, etymologists, and serious English language enthusiasts">English Language &amp; Usage</a></li>
                <li class="-item"><a href="https://skeptics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="scientific skepticism">Skeptics</a></li>
                <li class="-item"><a href="https://judaism.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="those who base their lives on Jewish law and tradition and anyone interested in learning more">Mi Yodeya (Judaism)</a></li>
                <li class="-item"><a href="https://travel.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="road warriors and seasoned travelers">Travel</a></li>
                <li class="-item"><a href="https://christianity.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="committed Christians, experts in Christianity and those interested in learning more">Christianity</a></li>
                <li class="-item"><a href="https://ell.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="speakers of other languages learning English">English Language Learners</a></li>
                <li class="-item"><a href="https://japanese.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the Japanese language">Japanese Language</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://chinese.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the Chinese language">Chinese Language</a></li>
                <li class="-item"><a href="https://french.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the French language">French Language</a></li>
                <li class="-item"><a href="https://german.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="speakers of German wanting to discuss the finer points of the language and translation">German Language</a></li>
                <li class="-item"><a href="https://hermeneutics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professors, theologians, and those interested in exegetical analysis of biblical texts">Biblical Hermeneutics</a></li>
                <li class="-item"><a href="https://history.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="historians and history buffs">History</a></li>
                <li class="-item"><a href="https://spanish.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="linguists, teachers, students and Spanish language enthusiasts in general wanting to discuss the finer points of the language">Spanish Language</a></li>
                <li class="-item"><a href="https://islam.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="Muslims, experts in Islam, and those interested in learning more about Islam">Islam</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://rus.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="&#x43B;&#x438;&#x43D;&#x433;&#x432;&#x438;&#x441;&#x442;&#x43E;&#x432; &#x438; &#x44D;&#x43D;&#x442;&#x443;&#x437;&#x438;&#x430;&#x441;&#x442;&#x43E;&#x432; &#x440;&#x443;&#x441;&#x441;&#x43A;&#x43E;&#x433;&#x43E; &#x44F;&#x437;&#x44B;&#x43A;&#x430;">&#x420;&#x443;&#x441;&#x441;&#x43A;&#x438;&#x439; &#x44F;&#x437;&#x44B;&#x43A;</a></li>
                <li class="-item"><a href="https://russian.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="students, teachers, and linguists wanting to discuss the finer points of the Russian language">Russian Language</a></li>
                <li class="-item"><a href="https://gaming.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="passionate videogamers on all platforms">Arqade (gaming)</a></li>
                <li class="-item"><a href="https://bicycles.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people who build and repair bicycles, people who train cycling, or commute on bicycles">Bicycles</a></li>
                <li class="-item"><a href="https://rpg.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="gamemasters and players of tabletop, paper-and-pencil role-playing games">Role-playing Games</a></li>
                <li class="-item"><a href="https://anime.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="anime and manga fans">Anime &amp; Manga</a></li>
                <li class="-item"><a href="https://puzzling.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="those who create, solve, and study puzzles">Puzzling</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://mechanics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="mechanics and DIY enthusiast owners of cars, trucks, and motorcycles">Motor Vehicle Maintenance &amp; Repair</a></li>
                <li class="-item"><a href="https://boardgames.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people who like playing board games, designing board games or modifying the rules of existing board games">Board &amp; Card Games</a></li>
                <li class="-item"><a href="https://bricks.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="LEGO&#xAE; and building block enthusiasts">Bricks</a></li>
                <li class="-item"><a href="https://homebrew.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="dedicated home brewers and serious enthusiasts">Homebrewing</a></li>
                <li class="-item"><a href="https://martialarts.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="students and teachers of all martial arts">Martial Arts</a></li>
                <li class="-item"><a href="https://outdoors.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people who love being outdoors enjoying nature and wilderness, and learning about the required skills and equipment">The Great Outdoors</a></li>
                <li class="-item"><a href="https://poker.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="serious players and enthusiasts of poker">Poker</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Culture / Recreation"><ul class="-list">
                <li class="-item"><a href="https://chess.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="serious players and enthusiasts of chess">Chess</a></li>
                <li class="-item"><a href="https://sports.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="participants in team and individual sport activities">Sports</a></li>
                <li class="-item">
                    <a href="https://stackexchange.com/sites#culturerecreation" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 26 })">
                        <strong>
                            more (16)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Science">
        <ul class="-list">
                <li class="-item"><a href="https://mathoverflow.net" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professional mathematicians">MathOverflow</a></li>
                <li class="-item"><a href="https://math.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people studying math at any level and professionals in related fields">Mathematics</a></li>
                <li class="-item"><a href="https://stats.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="people interested in statistics, machine learning, data analysis, data mining, and data visualization">Cross Validated (stats)</a></li>
                <li class="-item"><a href="https://cstheory.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="theoretical computer scientists and researchers in related fields">Theoretical Computer Science</a></li>
                <li class="-item"><a href="https://physics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="active researchers, academics and students of physics">Physics</a></li>
                <li class="-item"><a href="https://chemistry.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="scientists, academics, teachers, and students in the field of chemistry">Chemistry</a></li>
                <li class="-item"><a href="https://biology.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="biology researchers, academics, and students">Biology</a></li>
                    </ul></div><div class="site-footer--col site-footer--category js-footer-col" data-name="Science"><ul class="-list">
                <li class="-item"><a href="https://cs.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="students, researchers and practitioners of computer science">Computer Science</a></li>
                <li class="-item"><a href="https://philosophy.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="those interested in the study of the fundamental nature of knowledge, reality, and existence">Philosophy</a></li>
                <li class="-item"><a href="https://linguistics.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="professional linguists and others with an interest in linguistic research and theory">Linguistics</a></li>
                <li class="-item"><a href="https://psychology.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="practitioners, researchers, and students in cognitive science, psychology, neuroscience, and psychiatry">Psychology &amp; Neuroscience</a></li>
                <li class="-item"><a href="https://scicomp.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="scientists using computers to solve scientific problems">Computational Science</a></li>
                <li class="-item">
                    <a href="https://stackexchange.com/sites#science" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 26 })">
                        <strong>
                            more (10)
                        </strong>
                    </a>
                </li>
        </ul>
    </div>
    <div class="site-footer--col site-footer--category js-footer-col" data-name="Other">
        <ul class="-list">
                <li class="-item"><a href="https://meta.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="meta-discussion of the Stack Exchange family of Q&amp;A websites">Meta Stack Exchange</a></li>
                <li class="-item"><a href="https://stackapps.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="apps, scripts, and development with the Stack Exchange API">Stack Apps</a></li>
                <li class="-item"><a href="https://api.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="programmatic interaction with Stack Exchange sites">API</a></li>
                <li class="-item"><a href="https://data.stackexchange.com" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 25 })" title="querying Stack Exchange data using SQL">Data</a></li>
        </ul>
    </div>

                </div>
            </nav>
            <div class="site-footer--copyright fs-fine">
                <ul class="-list">
                    <li class="-item"><a class="js-gps-track -link" data-gps-track="footer.click({ location: 2, link:4 })" href="https://stackoverflow.blog?blb=1">Blog</a></li>
                    <li class="-item"><a href="https://www.facebook.com/officialstackoverflow/" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 31 })">Facebook</a></li>
                    <li class="-item"><a href="https://twitter.com/stackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 32 })">Twitter</a></li>
                    <li class="-item"><a href="https://linkedin.com/company/stack-overflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 33 })">LinkedIn</a></li>
                    <li class="-item"><a href="https://www.instagram.com/thestackoverflow" class="-link js-gps-track" data-gps-track="footer.click({ location: 2, link: 36 })">Instagram</a></li>
                </ul>

                <p class="mt-auto mb24">
site design / logo &#169; 2021 Stack Exchange Inc; user contributions licensed under <a href="https://stackoverflow.com/help/licensing">cc by-sa</a>.                    <span id="svnrev">rev&nbsp;2021.3.25.38898</span>
                </p>
            </div>
        </div>

    </footer>

            <script>StackExchange.ready(function () { StackExchange.responsiveness.addSwitcher(); })</script>
    <noscript>
        <div id="noscript-warning">Stack Overflow works best with JavaScript enabled
            <img src="https://pixel.quantserve.com/pixel/p-c1rF4kxgLUzNc.gif" alt="" class="dno">
        </div>
    </noscript>

            <script>
(function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function() { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o),
                m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m);
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            StackExchange.ready(function () {

                StackExchange.ga.init({
                    autoLink: ["stackoverflow.blog","info.stackoverflowsolutions.com","stackoverflowsolutions.com"],
                    sendTitles: true,
                    tracker: window.ga,
                    trackingCodes: [
                        'UA-108242619-1'
                    ],
                        checkDimension: 'dimension42'
                });



                    StackExchange.ga.setDimension('dimension2', '|javascript|jquery|css|progress-bar|percentage|');


                    StackExchange.ga.setDimension('dimension3', 'Questions/Show');


                StackExchange.ga.trackPageView();
            });
            
            var _qevents = _qevents || [],
            _comscore = _comscore || [];
            (function() {
                var s = document.getElementsByTagName('script')[0],
                    qc = document.createElement('script');
 qc.async = true;
                    qc.src = 'https://secure.quantserve.com/quant.js';
                    s.parentNode.insertBefore(qc, s);
                    _qevents.push({ qacct: "p-c1rF4kxgLUzNc" }); var sc = document.createElement('script');
                    sc.async = true;
                    sc.src = 'https://sb.scorecardresearch.com/beacon.js';
                    s.parentNode.insertBefore(sc, s);
                    _comscore.push({ c1: "2", c2: "17440561" });            })();
                </script>

        
    <style>#consent-footer-link { display: none; visibility: hidden; }</style>

    
    </body>
    </html>

