<?php
///////////////////////////////////////////////////////////////////////////////////////////
// Mixerfy v1                                                                            //
// Description: Simple  customizable one-page website template made for mixer streamers. //
// Author: MSFTserver                                                                    //
// Website: http://msft.online                                                           //
// Support: sawyerlemmo@gmail.com                                                        //
// Twitter: http://twitter.com/MSFTserver                                                //
///////////////////////////////////////////////////////////////////////////////////////////
?>
<?php include('includes/config.php'); include('includes/api.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if($custom_name) { echo $custom_name; } else { echo $display_name; } ?> | <?php echo $site_tagline; ?></title>
    <meta name="description" content="<?php echo $bio; ?>">
    <meta name="keywords" content="<?php echo $site_keywords; ?>">
    <meta name="author" content="MSFTserver">
    <meta name="robots" content="index,follow">
    <link href="css/style.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="https://mixer.com/_latest/assets/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="https://mixer.com/_latest/assets/favicons/favicon-16x16.png" sizes="16x16">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="https://mixer.com/_latest/assets/images/main/logos/ball.svg?5ee2b33">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
<script type="text/javascript">
$(document).ready(function(){
    $('#test').hide();
    $('#button1').click(function(){
        $('#test').toggle(500);
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#test1').hide();
    $('#button2').click(function(){
        $('#test1').toggle(500);
    });
});
</script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
      <?php if($profile_color): ?>
	     .accent, .btn:hover, #header ul#nav li a:hover { background: <?php echo $profile_color; ?>; }
         .btn:hover {border-color: <?php echo $profile_color; ?>;}
         .live { background: <?php echo $profile_color; ?>; border: none; }
        @-webkit-keyframes pulse {
		  from { opacity: 1.0; -webkit-box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		  50% { opacity: 0.8; -webkit-box-shadow: none; 0 0 0px <?php echo $profile_color; ?>;}
		  to { opacity: 1.0; -webkit-box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		}
        @-moz-keyframes pulse {
		  from { opacity: 1.0; -moz-box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		  50% { opacity: 0.8; -moz-box-shadow: none; 0 0 0px <?php echo $profile_color; ?>;}
		  to { opacity: 1.0; -moz-box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		}
        @-o-keyframes pulse {
		  from { opacity: 1.0; -o-box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		  50% { opacity: 0.8; -o-box-shadow: none; 0 0 0px <?php echo $profile_color; ?>;}
		  to { opacity: 1.0; -o-box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		}
		@keyframes pulse {
		  from { opacity: 1.0; box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		  50% { opacity: 0.8; box-shadow: none; 0 0 0px <?php echo $profile_color; ?>;}
		  to { opacity: 1.0; box-shadow: 0 0 15px <?php echo $profile_color; ?>; }
		}
      <?php endif; ?>
      <?php if($background_color): ?>
        body { background: <?php echo $background_color; ?> no-repeat center center; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; }
      <?php endif; ?>
      <?php if($overlay_opacity): ?>
        #content { background: rgba(0, 0, 0, <?php echo $overlay_opacity; ?>)}
      <?php endif; ?>
    </style>
	<script language="javascript"> 

// Lookup channel and parse data into variables
function channelLookup(username){
    // Reset Fields
    $('.info p').not('.uAvatarURL, .cThumbURL, .label, .uSocial').empty();
    $('.cOnline').removeClass('offline, online');
    $('.twitter').hide().attr("href",'');
    $('.youtube').hide().attr("href",'');
    $('.playerme').hide().attr("href",'');
    $('.discord').hide().attr("href",'');
    $('.lookup-info').removeClass('hidden');

    $.getJSON("https://mixer.com/api/v1/channels/" + username, function(data) {

        // User Info
        var uUserID = data.user.id;
        var uUsername = data.user.username;
        var uVerified = data.user.verified;
        var uSocial = data.user.social;
        var uExperience = data.user.experience;
        var uSparks = data.user.sparks;
        var uAvatarURL = data.user.avatarUrl;
		var uLevel = data.user.level;
        var uBio = data.user.bio;
        var uCreation = data.user.createdAt;
        var uUpdated = data.user.updatedAt;
        var uGroups = data.user.groups;

        // Channel Info
        var cID = data.id;
        var cToken = data.token;
        var cOnline = data.online;
        var cFeatured = data.featured;
        var cPartnered = data.partnered;
        var cTranscode = data.transcodingEnabled;
        var cSuspended = data.suspended;
        var cName = data.name;
        var cAudience = data.audience;
        var cViewersTotal = data.viewersTotal;
        var cViewersCurrent = data.viewersCurrent;
        var cNumFollowers = data.numFollowers;
        var cInteractive = data.interactive;
        var cTetrisGameId = data.tetrisGameId;
        var cFTL = data.ftl;
        var cDescriptionCreation = data.createdAt;
        var cDescriptionUpdated = data.updatedAt;
		
		if(data.thumbnail !== null){
			var cThumbURL = data.thumbnail.url;
			var cThumbCreation = data.thumbnail.createdAt;
			var cThumbUpdated = data.thumbnail.updatedAt;
		}
	var cGameName = data.type.name;
	var cGameDescription = data.type.description;
	var cGameDescriptionSource = data.type.source;
        var cShareText = data.preferences.sharetext;
        var cFollowMessage = data.preferences['channel:notify:followmessage'];
        var cSubscriberMessage = data.preferences['channel:notify:subscribemessage'];
        var cSubscriberMail = data.preferences['channel:partner:submail'];
        var cTweetText = data.preferences['channel:tweet:body'];
		
        // Convert to Human
        if(cOnline === false){
            var cOnline = 'offline';
            $('.cOnline').addClass('offline');
        }else{
            var cOnline = 'online';
            $('.cOnline').addClass('online');
        }

        if(cSuspended === false){
            var cSuspended = 'no';
        }else{
            var cSuspended = 'yes';
        }

        if(cInteractive === false){
            var cInteractive = 'Not interactive.';
        }else{
            var cInteractive = 'Interactive is on.';
        }

        if(cFeatured === false){
            var cFeatured = 'no';
        }else{
            var cFeatured = 'yes';
        }

        if(cPartnered === false){
            var cPartnered = 'no';
        }else{
            var cPartnered = 'yes';
        }

        if(cGameDescription == ""){
            var cGameDescription = "Description not available."
        }

        if(cFTL === -1){
            var cFTL = "FTL not active."
        } else{
            var cFTL = "FTL is active."
        }

        if(cTranscode === true){
            var cTranscode = "Transcoding is on."
        } else{
            var cTranscode = "Transcoding is off."
        }
		
		if (cGameName === undefined || cGameName === null){
			var cGameName = "No Game Set."
		}


        // Throw vars into fields for styling.
        $('.uUsername').text(uUsername+" - #"+uUserID);
        $('.uVerified').text(uVerified);

        $.each(uSocial, function(k,v){
            if(k == "twitter"){
                $('.twitter').show().attr("href",v);
            }else if(k == "youtube"){
                $('.youtube').show().attr("href",v);
            }else if(k == "player"){
                $('.playerme').show().attr("href",v);
            }
        })

        $('.uExperience').text(uExperience);
        $('.uSparks').text(uSparks);
        $('.uAvatarURL img').attr('src',uAvatarURL);
        $('.uBio').text(uBio);
        $('.uCreation').text(uCreation);
        $('.uUpdated').text(uUpdated);

        var newHTML = [];
        for (var i = 0; i < uGroups.length; i++) {
            newHTML.push('<span class="group">'+uGroups[i].name+'</span>');
        }
        $('.uGroups').html(newHTML.join(""));

        $('.cToken').text(cToken+' - #'+cID);
        $('.cOnline').text(cOnline);
        $('.cFeatured').text(cFeatured);
        $('.cPartnered').text(cPartnered);
        $('.cTranscode').text(cTranscode);
        $('.cSuspended').text(cSuspended);
        $('.cName').text(cName);
        $('.cAudience').text(cAudience);
        $('.cViewersTotal').text(cViewersTotal);
        $('.cViewersCurrent').text(cViewersCurrent);
        $('.cNumFollowers').text(cNumFollowers);
		$('.uLevel').text(uLevel);
        $('.cInteractive').text(cInteractive);
        $('.cTetrisGameId').text(cTetrisGameId);
        $('.cFTL').text(cFTL);
        $('.cDescriptionCreation').text(cDescriptionCreation);
        $('.cDescriptionUpdated').text(cDescriptionUpdated);
        $('.cThumbURL img').attr('src',cThumbURL);
        $('.cThumbCreation').text(cThumbCreation);
        $('.cThumbUpdated').text(cThumbUpdated);
        $('.cGameName').text(cGameName);
        $('.cGameDescription').text(cGameDescription);
        $('.cGameDescriptionSource').text(cGameDescriptionSource);
        $('.cShareText').text(cShareText);
        $('.cTweetText').text(cTweetText);
        $('.cFollowMessage').text(cFollowMessage);
        $('.cSubscriberMessage').text(cSubscriberMessage);
        $('.cSubscriberMail').text(cSubscriberMail);

        // Pull list of hosters
		hosters(cID);

        $('.cLink').html('<a href="http://mixer.com/'+cToken+'" target="blank">Go To Channel ></a>');    })

		var trimmedUsername = username.trim();
		// throw in profile links
		$('.links .direct .link').html('<a href="http://mixer.msft.online/mixer?username='+trimmedUsername+'">http://mixer.msft.online/mixer?username='+trimmedUsername+'</a>');
		$('.links .clean .link').html('<a href="http://mixer.msft.online/mixer?username='+trimmedUsername+'&clean=yes">http://mixer.msft.online/mixer/?username='+trimmedUsername+'&clean=yes</a>');
		$('.links').show();

}

//Find Hosters
function hosters(cID){
	$.getJSON("https://mixer.com/api/v1/channels/" + cID + "/hosters", function(data) {
		if(data.length){
			var i;
			for (i = 0; i < data.length; ++i) {
			    var streamer = data[i].token;
			    var viewers = data[i].viewersCurrent;
			    $('.cHosted').append('<span>'+streamer+' ('+viewers+')</span>');
			}
		} else {
			$('.cHosted').append('<span>None</span>');
		}		
	});
}

// Function to grab URL parameters
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
// Grab the parameters we need.
var username = "<?php echo $mixer_channel; ?>";
var cleanUI = getUrlParameter('clean');

// Check parameters and render something that won't break the page.
if (username != '' && username != null && username != undefined && cleanUI != 'yes'){
    channelLookup(username);
} else if ( username != '' && username != null && username != undefined && cleanUI == 'yes'){
    channelLookup(username);
    $('.top, .links').hide();
} else if ( username != '' || username === null || username === undefined && cleanUI == 'yes'){
    console.log('Defaulting to regular page layout.')
}

// Set initial show hide button text
function uiHider(){
    var visible = $('.top').is(':visible');
    if( visible == true){
        $('.uihide').text('Hide UI');
    } else {
        $('.uihide').text('Show UI');
    }
}

// Things to run on page load.
$( document ).ready(function() {
    uiHider();

    // Add Username
    $('.streamerinputaddbtn').click(function() {
        var username = $('.streamerinputadd').val();
        channelLookup(username);
    });

    // UI Hider
    $('.uihide').click(function() {
        $('.top').slideToggle();
        var btnText = $('.uihide').text();
        if (btnText == 'Hide UI'){
            $('.uihide').text('Show UI');
        }else{
            $('.uihide').text('Hide UI');
        }
    });
});




</script> 
  </head>
  <body id="live">
    <header id="header" role="banner" class="cf">
      <ul id="nav">
        <?php if($forum_url){ ?>
        	<li><a href="<?php echo $forum_url ?>" target="_blank" title="Forum" class="forum"><i class="fa fa-comments"></i></a></li>
        <?php } ?>
        <?php if($twitter_username){ ?>
        	<li><a href="http://twitter.com/<?php echo $twitter_username; ?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <?php } ?>
        <?php if($youtube_username){ ?>
        	<li><a href="http://youtube.com/user/<?php echo $youtube_username; ?>" target="_blank" title="YouTube"><i class="fa fa-youtube-play"></i></a></li>
        <?php } ?>
        <?php if($facebook_username){ ?>
        	<li><a href="http://facebook.com/<?php echo $facebook_username; ?>" target="_blank" title="Facebook"><i class="fa fa-facebook-square"></i></a></li>
        <?php } ?>
        <?php if($flickr_username){ ?>
        	<li><a href="http://flickr.com/photos/<?php echo $flickr_username; ?>" target="_blank" title="Flickr"><i class="fa fa-flickr"></i></a></li>
        <?php } ?>
        <?php if($github_username){ ?>
        	<li><a href="http://github.com/<?php echo $github_username; ?>" target="_blank" title="GitHub"><i class="fa fa-github"></i></a></li>
        <?php } ?>
        <?php if($gplus_username){ ?>
        	<li><a href="http://plus.google.com/<?php echo $gplus_username; ?>" target="_blank" title="Google Plus"><i class="fa fa-plus-square"></i></a></li>
        <?php } ?>
        <?php if($instagram_username){ ?>
        	<li><a href="http://instagram.com/<?php echo $instagram_username; ?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
        <?php } ?>
        <?php if($pinterest_username){ ?>
        	<li><a href="http://pinterest.com/<?php echo $pinterest_username; ?>" target="_blank" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
        <?php } ?>
        <?php if($reddit_username){ ?>
        	<li><a href="http://reddit.com/u/<?php echo $reddit_username; ?>" target="_blank" title="Reddit"><i class="fa fa-reddit-square"></i></a></li>
        <?php } ?>
        <?php if($soundcloud_username){ ?>
        	<li><a href="http://soundcloud.com/<?php echo $soundcloud_username; ?>" target="_blank" title="SoundCloud"><i class="fa fa-soundcloud"></i></a></li>
        <?php } ?>
        <?php if($tumblr_username){ ?>
        	<li><a href="http://<?php echo $tumblr_username; ?>.tumblr.com" target="_blank" title="Tumblr"><i class="fa fa-tumblr-square"></i></a></li>
        <?php } ?>
        <?php if($tumblr_custom_domain){ ?>
        	<li><a href="<?php echo $tumblr_custom_domain; ?>" target="_blank" title="Tumblr"><i class="fa fa-tumblr-square"></i></a></li>
        <?php } ?>
        <?php if($vine_username){ ?>
        	<li><a href="http://vine.co/<?php echo $vine_username; ?>" target="_blank" title="Vine"><i class="fa fa-vine"></i></a></li>
        <?php } ?>
        <?php if($steam_username){ ?>
        	<li><a href="http://steamcommunity.com/id/<?php echo $steam_username; ?>" target="_blank" title="Steam"><i class="fa fa-steam-square"></i></a></li>
        <?php } ?>
        <?php if($steam_group){ ?>
        	<li><a href="http://steamcommunity.com/groups/<?php echo $steam_group; ?>" target="_blank" title="Steam Group"><i class="fa fa-steam-square"></i></a></li>
        <?php } ?>
        <?php if($deviantart_username){ ?>
        	<li><a href="http://<?php echo $deviantart_username ?>.deviantart.com" target="_blank" title="Deviant Art"><i class="fa fa-deviantart"></i></a></li>
        <?php } ?>
        <?php if($skype_username){ ?>
        	<li><a href="skype:<?php echo $skype_username; ?>?chat" title="Skype"><i class="fa fa-skype"></i></a></li>
        <?php } ?>
        <?php if($bandcamp_username){ ?>
        	<li><a href="http://<?php echo $bandcamp_username; ?>.bandcamp.com" title="Bandcamp"><i class="fa fa-music"></i></a></li>
        <?php } ?>
        <?php if($amazon_affiliate_url){ ?>
        	<li><a href="<?php echo $amazon_affiliate_url; ?>" title="Amazon Affliate Link"><i class="fa fa-shopping-cart"></i></a></li>
        <?php } ?>
        <?php if($streamtip_username){ ?>
        	<li><a href="<?php echo $streamtip_username; ?>" target="_blank" title="Donate"><i class="fa fa-paypal"></i></a></li>
        <?php } ?>
        <?php if($deepbot_username){ ?>
        	<li><a href="http://deepbot.tv/donations/donate.php?s=<?php echo $deepbot_username; ?>" target="_blank" title="Donate"><i class="fa fa-paypal"></i></a></li>
        <?php } ?>
        <?php if($imraising_username){ ?>
        	<li><a href="http://imraising.tv/u/<?php echo $imraising_username; ?>" target="_blank" title="Donate"><i class="fa fa-paypal"></i></a></li>
        <?php } ?>
        <?php if($donationtracker_username){ ?>
        	<li><a href="http://www.donation-tracker.com/u/<?php echo $donationtracker_username; ?>" target="_blank" title="Donate"><i class="fa fa-paypal"></i></a></li>
        <?php } ?>
        <?php if($patreon_username){ ?>
        	<li><a href="http://patreon.com/<?php echo $patreon_username; ?>" target="_blank" title="Patreon"><i class="fa fa-paypal"></i></a></li>
        <?php } ?>
        <?php if($extra_life_url){ ?>
        	<li><a href="<?php echo $extra_life_url; ?>" target="_blank" title="Extra-Life"><i class="fa fa-heart"></i></a></li>
        <?php } ?>
        <?php if($steam_trade_gift){ ?>
        	<li><a href="<?php echo $steam_trade_gift; ?>" target="_blank" title="Steam Trade or Gift"><i class="fa fa-gift"></i></a></li>
        <?php } ?>
        <?php if($email_contact){ ?>
        	<li><a href="mailto:<?php echo $email_contact;?>" title="Email"><i class="fa fa-envelope"></i></a></li>
        <?php } ?>
      </ul>
    </header>
    <div id="content" role="main">
        <div class="container">
		  <h1 id="displayname">
        <a href="/"><?php if($custom_name) { echo $custom_name; } else { echo $display_name; } ?>&nbsp;<span class="label accent <?php if($online){ echo 'live'; }?>"><?php if($online){ echo '<span class="rec">•</span>live'; } else { echo 'offline'; } ?></span></a>
      </h1>
        <img src="<?php echo $avatar; ?>" class="avatar">
        <p><a href="https://mixer.com/<?php echo $url; ?>" class="btn <?php if($online){ echo 'live'; }?>" target="_blank"><?php if($online){ echo '<i class="fa fa-play-circle"></i>&nbsp; Watch Live'; } else { echo 'View Channel'; } ?></a></p>
		                                <div class="info c-partnered">
                                    <p class="label">Partnered</p>
                                    <p class="value cPartnered"></p>
                                </div>
    </div>
	<div class="middle">
                        <div class="info user-bio">
                            <p class="label">Bio</p>
                            <p class="value uBio"></p>
                        </div>
                           <div class="info c-name">
                            <p class="label">Stream Title</p>
                            <p class="value cName"></p>
                        </div>
                        <div class="info c-game">
                            <p class="label">Game Name</p>
                            <p class="value cGameName"></p>
                        </div>

                        <div class="info c-description">
                            <p class="label">Game Description</p>
                        </div>
						
						<div class="show">
						<p id="test" class="value cGameDescription" style="display: block;"></p>
                            <button id="button1">Show/Hide</button>
						</div>
                   </div>
				   <div class="rightright">
				    
								<div class="info c-current-viewers">
                                    <p class="label">Current Viewers</p>
                                    <p class="value cViewersCurrent"></p>
                                </div>
                                <div class="info c-total-viewers">
                                    <p class="label">Total Viewers</p>
                                    <p class="value cViewersTotal"></p>
                                </div>
                                <div class="info c-followers">
                                    <p class="label">Follower Count</p>
                                    <p class="value cNumFollowers"></p>
                                </div>
                                <div class="info c-rating">
                                    <p class="label">Rated</p><p class="value cAudience"></p>
                                </div>
<div class="info c-hosted">
                                    <p class="label">People Hosting</p>
                                    <div class="show">
						<p id="test1" class="value cHosted" style="display: block;"></p>
                            <button id="button2">Show/Hide</button>
						</div>
                                </div>
    </div>

    </div>
	<div class="live-video" >
                                    <iframe width="600px" height="337.5px" src="https://mixer.com/embed/player/<?php echo $display_name; ?>">
                                    &amp;lt;p&amp;gt;Your browser does not support iframes.&amp;lt;/p&amp;gt;
                                    </iframe>
                                </div>
								<div class="live-chat">
                                   <iframe margin-top="-7px" width="600px" height="210px" src="https://mixer.com/embed/chat/<?php echo $display_name; ?>">
                                   &lt;p&gt;Your browser does not support iframes.&lt;/p&gt;
                                   </iframe>
                                </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"></script>
    <?php if($video_id): ?>
    <script type="text/javascript" src="js/jquery.tubular.1.0.js" charset="utf-8" ></script>
    <?php endif;  ?>
    <script>
    {$().ready(function() {
        $('#content').tubular({videoId: '<?php echo $video_id; ?>', start: '<?php echo $video_start; ?>'});
    });}
    </script>
    <?php if($google_analytics): ?>
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', '<?php echo $google_analytics; ?>', 'auto');
	ga('send', 'pageview');
	</script>
	<?php endif;  ?>
<!-- mixerfy <?php echo $version ?> -->
</body>
<footer>
    <foot id="footer" class="cf">
    	<p class="left"><i class="fa fa-copyright"></i> <?php if($custom_name) { echo $custom_name; } else { echo $display_name; } ?>. All Rights Reserved.</p>
		<!-- Please bear in mind that I am not a company or a corporation. I’m just some guy who built this template to solve a problem for myself and other mixer streamers. -->
	    <p class="right"><a href="http://www.twitter.com/MSFTserver">made by MSFTserver</a></p>
    </foot>
</footer>
</html>