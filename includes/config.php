<?php
       ///////////////////////////////////////////////////////////////////////////////////////////
      // mixerfy v1                                                                            //
     // Description: Simple  customizable one-page website template made for mixer streamers. //
    // Author: MSFTserver                                                                    //
   // Website: http://msft.online                                                           //
  // Support: sawyerlemmo@gmail.com                                                        //
 // Twitter: http://twitter.com/MSFTserver                                                //
///////////////////////////////////////////////////////////////////////////////////////////
?>
<?php
    ////////////////////////////////////////////////////////////////////////////////////////////
   // Welcome to the mixerfy config file. This is the only file you will ever have to touch. //
  //  I'm going to walk you step by step through every config option so you can get your    //
 //   own website setup in less than 5 minutes.                                            //
////////////////////////////////////////////////////////////////////////////////////////////

  /////////////////////
 // Website Options //
/////////////////////

          ///////////////////////////////////////////////////////////
	     // $beam_channel: Enter your mixer channel name below.   //
        //                 that you login to beam with.          //
       //                  Your channel name is your username   //
      //                   this will allocate all api info.    //
     //                    Do not enter the full URL.         //
    ///////////////////////////////////////////////////////////
  
	$mixer_channel = 'MSFTserver';

	    /////////////////////////////////////////////////////////////////////////////
	   // $site_tagline: Your tagline will show up in the title of your website.  // 
      //                 It could be your channel slogan                         //
     //                  or a short description of who you are.                 //
    /////////////////////////////////////////////////////////////////////////////
  
	$site_tagline = "mixer Streamer";

	    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	   // $site_description: By default your site description is automatically pulled from your profile bio from mixer.com. //
      //                     Set up your profile bio here: http://mixer.com/profile OR you can uncomment the line below    //
     //                      by deleteing the two slahes and enter a custom description.                                  //
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
 
	// $site_description = "enter your custom description here.";

	   //////////////////////////////////////////////////////////////////////
	  // $site_keywords: Give your website some keywords for search       // 
     //                  engines to pick up on. Seperate them by commas. //
    //////////////////////////////////////////////////////////////////////
   
	$site_keywords = "streamer,beam,beam streamer,live,live streamer,beam.pro,interactive stream,";

	    //////////////////////////////////////////////////////////////////
	   // $google_analytics: Want to have track website visitors?      //
      //                     Enter your Google Analytics UA-ID below. //
     //                      Ex. UA-XX-XXXXXXX                       //
    //////////////////////////////////////////////////////////////////
 
	$google_analytics = "";

  /////////////////////////
 // END Website Options //
/////////////////////////	
	
	
	
	
	
	
  ////////////////////	
 // Design Options //
////////////////////

        ///////////////////////////////////////////////////////////////////////////////
	   // $background_color: This is the background color of your website that will //
      //                     be under the image or video background you put in.    //
     //                      Default is black.                                    //
    ///////////////////////////////////////////////////////////////////////////////
 
	$background_color = '#0E162A';

            ///////////////////////////////////////////////////////////////////////////////////////////////////////////
           // $accent_color: The accent color is the color that will be used in various elements in the website.    //
          //	             To use uncooment the line below by deleting the slashes at the front                  //
         //                  This value must be in HEX color form. Ex. #6941a5.                                   //
        //                   (Pick a color here: http://www.colorpicker.com)                                     //
       //                    By default, this color is automatically pulled from the color you have set in your // 
      //                     "beam profile banner" on your beam profile page (http://cl.ly/YLVS).              //
     //                      To set a accent color, uncomment the line below and enter your custom hex value. //
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////  
 
	// $accent_color = '#6441a5';
	
      ///////////////////////
	 // keep overlay at 0 //
    ///////////////////////
   
	$overlay_opacity = '0';

	     /////////////////////////////////////////////////////////////////////////
	    //  $video_id: Use a YouTube video as your website background.         //
       //              Enter the Video ID of the YouTube video you            //
      //               want as your background. Do not enter the full URL.   //
     //    Suggestion: Use either a video background OR an image, not both. //
    /////////////////////////////////////////////////////////////////////////
  
	$video_id = '';
	
	   /////////////////////////////////////////////////////////////////////////////////////
	  //  $video_start: How many seconds into the video do you want it to start playing? //
     //                 (Good for skipping ads or game ratings)                         //
    /////////////////////////////////////////////////////////////////////////////////////
  
	$video_start = ''; 

	    /////////////////////////////////////////////////////////////////////////////////////////////
	   // Image Background: Enter the full URL of an image to use it for your website background. //
      //	                Example: https://i.imgur.com/J3t2X4U.jpg                             //
     //         Suggestion: Use either a video background OR an image background, not both.     //
    /////////////////////////////////////////////////////////////////////////////////////////////
	
	$image_url = '';
	
  ////////////////////////	
 // END Design Options //
////////////////////////
	
	
	
	
	
	
    ////////////////////////////////////////////////////////////////////////////////////////
   // Social Link Options Displays icons/links to your favorite social media websites.   //
  //  Leaving an entry blank will make it not appear on your site.                      //
 //   Note: just enter the username for most of these options unless stated other wise //
////////////////////////////////////////////////////////////////////////////////////////

        ///////////////////////////////////////////
	   // Twitter: Enter your twitter username. // 
      //           Do not enter the full URL.  //
     //            http://twitter.com/xxxxxx  //
    ///////////////////////////////////////////
	
	$twitter_username = 'MSFTserver';

	    /////////////////////////////////////////////
	   // Facebook: Enter your facebook username. // 
      //            Do not enter the full URL.   //
     //	            http://facebook.com/xxxxxx  //
    /////////////////////////////////////////////
	 
	$facebook_username = '';

	      //////////////////////////////////////////////////////////////
	     //    Steam: Enter your steam community name.               //
        //            Do not enter the full URL.                    //
	   //             http://steamcommunity.com/xxxxxx             //
	  //  Suggestion: Either use $steam_username OR $steam_group, //
     //               NOT both because they use the same icon.   //
    //////////////////////////////////////////////////////////////
	
	$steam_username = '';

	      ///////////////////////////////////////////////////////////////
	     // Steam Group: Enter the name of your steam community.      //   
        //               Do not enter the full url.                  //
	   //                https://steamcommunity.com/groups/xxxxxx   //
	  //     Suggestion: Either use steam_username OR steam_group, //
	 //                  NOT both because they use the same icon. //
	///////////////////////////////////////////////////////////////
	
	$steam_group = '';

	    ///////////////////////////////////////////////
	   // YouTube: Enter your youtube channel name. //
	  //           Do not enter the full URL.      //
     //	           http://youtube.com/user/xxxxxx //
	///////////////////////////////////////////////
	
	$youtube_username = '';

	    ///////////////////////////////////////////////
	   // Flickr: Enter your flickr username        //
	  //          Do not enter the full URL.       //
     //           http://flickr.com/photos/xxxxxx //
    ///////////////////////////////////////////////
	
	$flickr_username = '';

	    /////////////////////////////////////////
	   // Github: Enter your github username. // 
	  //          Do not enter the full URL. // 
	 //           http://github.com/xxxxxx  //
	/////////////////////////////////////////
	
	$github_username = '';

	    ///////////////////////////////////////////////////
	   // Google Plus: Enter your google plus username. // 
	  //               Do not enter the full URL.      //
	 //                http://plus.google.com/xxxxxx  //
	///////////////////////////////////////////////////
	
	$gplus_username = '';

	    ///////////////////////////////////////////////
	   // Instagram: Enter your instagram username. // 
	  //             Do not enter the full URL.    //
	 //              http://instagram.com/xxxxxx  //
	///////////////////////////////////////////////
	
	$instagram_username = '';

	    ///////////////////////////////////////////////
	   // Pinterest: Enter your pinterest username. // 
	  //             Do not enter the full URL.    // 
	 //              http://pinterest.com/xxxxxx  //
	///////////////////////////////////////////////
	
	$pinterest_username = '';

	    //////////////////////////////////////////
	   // Reddit: Enter your reddit username.  //
	  //          Do not enter the full URL.  //
	 //           http://reddit.com/u/xxxxxx //
	//////////////////////////////////////////
	
	$reddit_username = '';

	    /////////////////////////////////////////////////
	   // Soundcloud: Enter your soundcloud username. // 
	  //              Do not enter the full URL.     //
	 //               http://soundcloud.com/xxxxxx  //
	/////////////////////////////////////////////////
	
	$soundcloud_username = '';

	    ////////////////////////////////////////////////////////
	   // Tumblr: Enter your tumblr username/blog name here. //
	  //          Do not enter the full URL.                //
	 //           http://xxxxxx.tumblr.com                 //
	////////////////////////////////////////////////////////
	
	$tumblr_username = '';

	   /////////////////////////////////////////////////////////////////////
	  // Tumblr Domain: Use a custom domain for your tumblr blog?        //
     //                 Enter the full URL. Ex. http://blog.msft.online //
    ///////////////////////////////////////////////////////////////////// 
	
	$tumblr_custom_domain = '';

	    ///////////////////////////////////////
	   // Vine: Enter your Vine username.   //
	  //        Do not enter the full URL. // 
	 //         https://vine.co/xxxxxx    //
	///////////////////////////////////////
	
	$vine_username = '';

	    ///////////////////////////////////////////////////
	   // Deviant Art: Enter your deviant art username. //
      //	           Do not enter the full URL.      //   
	 //                http://xxxxxx.deviantart.com   //
	///////////////////////////////////////////////////
	
	$deviantart_username = '';

	  ////////////////////////////////////////////
	 // Skype: Enter your skype username here. //
	////////////////////////////////////////////
	
	$skype_username = '';

	    /////////////////////////////////////////////
	   // Bandcamp: Enter your bandcamp username. //
	  //            Do not enter the full URL.   //
	 //             https://xxxxxx.bandcamp.com //
	/////////////////////////////////////////////
	
	$bandcamp_username = '';

	      /////////////////////////////////////////////////////////////////
	     // Email Contact: Want your viewers to be able to email you?   //
	    //                 Enter your full email address below:        //
	   //                  Ex. hello@gmail.com                        //
	  //       Suggestion: Either use beam_contact OR email_contact, // 
	 //                    NOT both because they use the same icon. //
	/////////////////////////////////////////////////////////////////
	
	$email_contact = 'sawyerlemmo@gmail.com';

	    /////////////////////////////////////////////////////////
	   // Forum URL: Have a forum for community interactment? //
	  //             Enter the full url below.               //
	 //              Ex: http://msft.online/forum/          //
	/////////////////////////////////////////////////////////
	
	$forum_url = '';

  ////////////////////////	
 // END Social Options //
////////////////////////
	
	
	
	
	
	
   //////////////////////////////////////////////////////////////////////////////
  // Donation/Tips Options: If you use a service to accept tips or donations, //
 //                         you can easily link to them.                     //
//////////////////////////////////////////////////////////////////////////////

      ////////////////////////////////////////////////////////
	 // Tip page: Enter your Tip page url(enter full URL). //
	////////////////////////////////////////////////////////
	
	$streamtip_username = '';

	     /////////////////////////////////////////////////
	    // ImRaising: Enter your ImRaising username.   //
	   //             usually your beam channel name. //
	  //              Do not enter the full URL.     //
	 //               http://imraising.tv/u/xxxxxx  //
	/////////////////////////////////////////////////
	
	$imraising_username = '';

	     ///////////////////////////////////////////////////////////////////
	    // Donation-Tracker: Enter your Donation-Tracker username        //
	   //                    usually your beam channel name.            //                          
	  //                     Do not enter the full URL.                //
	 //                      http://www.donation-tracker.com/u/xxxxxx //
	///////////////////////////////////////////////////////////////////
	
	$donationtracker_username = '';

	     /////////////////////////////////////////////////////////////////
	    // Deepbot: Enter your deepbot username                        //
	   //           usually your beam channel name.                   //
	  //            Do not enter the full URL.                       //
	 //             http://deepbot.tv/donations/donate.php?s=xxxxxx //
	/////////////////////////////////////////////////////////////////
	
	$deepbot_username = '';

	    ///////////////////////////////////////////
	   // Patreon: Enter your patreon username. // 
	  //           Do not enter the full URL.  // 
	 //            http://patreon.com/xxxxxx  //
	///////////////////////////////////////////
	
	$patreon_username = '';

  //////////////////////////	
 // END Donation Options //
//////////////////////////
	
	
	
	
	
	
  ///////////////////////
 // Misc Link Options //
///////////////////////

      //////////////////////////////////////////////////////
	 // Amazon: Enter your Amazon Affiliate referal URL. //
	//////////////////////////////////////////////////////
	
	$amazon_affiliate_url = '';

	  //////////////////////////////////////////////////////////
	 // Extra Life: Enter your Extra Life donation page URL. //
	//////////////////////////////////////////////////////////
	
	$extra_life_url = '';

	  //////////////////////////////////////////////////////////////////////
	 // Steam Gift & Trade: Enter your steam trade or gift complete URL. //
	//////////////////////////////////////////////////////////////////////
	
	$steam_trade_gift = '';
	
  ///////////////////////////
 // END Misc Link Options //
///////////////////////////

  //////////////////////////////////////////////////////////////////////////	
 // All done! Wasn't that easy? Save this file and refresh your website! //
//////////////////////////////////////////////////////////////////////////
?>