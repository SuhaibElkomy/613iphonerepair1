<?php

/*____________________________________________  Animations ______________________________________*/
global $vc_add_css_animation;

global $phonerepair_fonts_array;
$fontsSeraliazed = 'a:322:{i:0;s:7:"Default";i:1;s:4:"Abel";i:2;s:13:"Abril Fatface";i:3;s:8:"Aclonica";i:4;s:5:"Actor";i:5;s:7:"Adamina";i:6;s:15:"Aguafina Script";i:7;s:6:"Aladin";i:8;s:7:"Aldrich";i:9;s:5:"Alice";i:10;s:13:"Alike Angular";i:11;s:5:"Alike";i:12;s:5:"Allan";i:13;s:15:"Allerta Stencil";i:14;s:7:"Allerta";i:15;s:8:"Amaranth";i:16;s:9:"Amatic SC";i:17;s:6:"Andada";i:18;s:6:"Andika";i:19;s:24:"Annie Use Your Telescope";i:20;s:13:"Anonymous Pro";i:21;s:5:"Antic";i:22;s:5:"Anton";i:23;s:6:"Arapey";i:24;s:19:"Architects Daughter";i:25;s:5:"Arimo";i:26;s:8:"Artifika";i:27;s:4:"Arvo";i:28;s:5:"Asset";i:29;s:7:"Astloch";i:30;s:10:"Atomic Age";i:31;s:6:"Aubrey";i:32;s:7:"Bangers";i:33;s:7:"Bentham";i:34;s:5:"Bevan";i:35;s:11:"Bigshot One";i:36;s:6:"Bitter";i:37;s:13:"Black Ops One";i:38;s:13:"Bowlby One SC";i:39;s:10:"Bowlby One";i:40;s:7:"Brawler";i:41;s:14:"Bubblegum Sans";i:42;s:4:"Buda";i:43;s:15:"Butcherman Caps";i:44;s:15:"Cabin Condensed";i:45;s:12:"Cabin Sketch";i:46;s:5:"Cabin";i:47;s:10:"Cagliostro";i:48;s:14:"Calligraffitti";i:49;s:6:"Candal";i:50;s:9:"Cantarell";i:51;s:5:"Cardo";i:52;s:5:"Carme";i:53;s:10:"Carter One";i:54;s:6:"Caudex";i:55;s:18:"Cedarville Cursive";i:56;s:10:"Changa One";i:57;s:17:"Cherry Cream Soda";i:58;s:5:"Chewy";i:59;s:6:"Chicle";i:60;s:5:"Chivo";i:61;s:12:"Coda Caption";i:62;s:4:"Coda";i:63;s:9:"Comfortaa";i:64;s:11:"Coming Soon";i:65;s:12:"Contrail One";i:66;s:11:"Convergence";i:67;s:6:"Cookie";i:68;s:5:"Copse";i:69;s:6:"Corben";i:70;s:7:"Cousine";i:71;s:8:"Coustard";i:72;s:21:"Covered By Your Grace";i:73;s:12:"Crafty Girls";i:74;s:14:"Creepster Caps";i:75;s:12:"Crimson Text";i:76;s:7:"Crushed";i:77;s:6:"Cuprum";i:78;s:6:"Damion";i:79;s:14:"Dancing Script";i:80;s:20:"Dawning of a New Day";i:81;s:8:"Days One";i:82;s:17:"Delius Swash Caps";i:83;s:14:"Delius Unicase";i:84;s:6:"Delius";i:85;s:10:"Devonshire";i:86;s:13:"Didact Gothic";i:87;s:5:"Dorsa";i:88;s:11:"Dr Sugiyama";i:89;s:15:"Droid Sans Mono";i:90;s:10:"Droid Sans";i:91;s:11:"Droid Serif";i:92;s:11:"EB Garamond";i:93;s:10:"Eater Caps";i:94;s:13:"Expletus Sans";i:95;s:12:"Fanwood Text";i:96;s:8:"Federant";i:97;s:6:"Federo";i:98;s:9:"Fjord One";i:99;s:10:"Fondamento";i:100;s:16:"Fontdiner Swanky";i:101;s:5:"Forum";i:102;s:12:"Francois One";i:103;s:13:"Gentium Basic";i:104;s:18:"Gentium Book Basic";i:105;s:3:"Geo";i:106;s:12:"Geostar Fill";i:107;s:7:"Geostar";i:108;s:14:"Give You Glory";i:109;s:17:"Gloria Hallelujah";i:110;s:10:"Goblin One";i:111;s:10:"Gochi Hand";i:112;s:21:"Goudy Bookletter 1911";i:113;s:12:"Gravitas One";i:114;s:6:"Gruppo";i:115;s:15:"Hammersmith One";i:116;s:20:"Herr Von Muellerhoff";i:117;s:15:"Holtwood One SC";i:118;s:14:"Homemade Apple";i:119;s:18:"IM Fell DW Pica SC";i:120;s:15:"IM Fell DW Pica";i:121;s:22:"IM Fell Double Pica SC";i:122;s:19:"IM Fell Double Pica";i:123;s:18:"IM Fell English SC";i:124;s:15:"IM Fell English";i:125;s:23:"IM Fell French Canon SC";i:126;s:20:"IM Fell French Canon";i:127;s:23:"IM Fell Great Primer SC";i:128;s:20:"IM Fell Great Primer";i:129;s:7:"Iceland";i:130;s:11:"Inconsolata";i:131;s:12:"Indie Flower";i:132;s:12:"Irish Grover";i:133;s:9:"Istok Web";i:134;s:10:"Jockey One";i:135;s:12:"Josefin Sans";i:136;s:12:"Josefin Slab";i:137;s:6:"Judson";i:138;s:5:"Julee";i:139;s:4:"Jura";i:140;s:17:"Just Another Hand";i:141;s:23:"Just Me Again Down Here";i:142;s:7:"Kameron";i:143;s:10:"Kelly Slab";i:144;s:5:"Kenia";i:145;s:7:"Knewave";i:146;s:6:"Kranky";i:147;s:5:"Kreon";i:148;s:6:"Kristi";i:149;s:15:"La Belle Aurore";i:150;s:8:"Lancelot";i:151;s:4:"Lato";i:152;s:13:"League Script";i:153;s:12:"Leckerli One";i:154;s:6:"Lekton";i:155;s:5:"Lemon";i:156;s:9:"Limelight";i:157;s:11:"Linden Hill";i:158;s:11:"Lobster Two";i:159;s:7:"Lobster";i:160;s:4:"Lora";i:161;s:21:"Love Ya Like A Sister";i:162;s:17:"Loved by the King";i:163;s:12:"Luckiest Guy";i:164;s:13:"Maiden Orange";i:165;s:4:"Mako";i:166;s:12:"Marck Script";i:167;s:6:"Marvel";i:168;s:7:"Mate SC";i:169;s:4:"Mate";i:170;s:9:"Maven Pro";i:171;s:6:"Meddon";i:172;s:13:"MedievalSharp";i:173;s:6:"Megrim";i:174;s:12:"Merienda One";i:175;s:12:"Merriweather";i:176;s:11:"Metrophobic";i:177;s:8:"Michroma";i:178;s:16:"Miltonian Tattoo";i:179;s:9:"Miltonian";i:180;s:14:"Miss Fajardose";i:181;s:20:"Miss Saint Delafield";i:182;s:14:"Modern Antiqua";i:183;s:7:"Molengo";i:184;s:8:"Monofett";i:185;s:7:"Monoton";i:186;s:20:"Monsieur La Doulaise";i:187;s:6:"Montez";i:188;s:22:"Mountains of Christmas";i:189;s:10:"Mr Bedford";i:190;s:8:"Mr Dafoe";i:191;s:14:"Mr De Haviland";i:192;s:13:"Mrs Sheppards";i:193;s:4:"Muli";i:194;s:6:"Neucha";i:195;s:6:"Neuton";i:196;s:10:"News Cycle";i:197;s:7:"Niconne";i:198;s:9:"Nixie One";i:199;s:6:"Nobile";i:200;s:12:"Nosifer Caps";i:201;s:20:"Nothing You Could Do";i:202;s:8:"Nova Cut";i:203;s:9:"Nova Flat";i:204;s:9:"Nova Mono";i:205;s:9:"Nova Oval";i:206;s:10:"Nova Round";i:207;s:11:"Nova Script";i:208;s:9:"Nova Slim";i:209;s:11:"Nova Square";i:210;s:6:"Numans";i:211;s:6:"Nunito";i:212;s:15:"Old Standard TT";i:213;s:19:"Open Sans Condensed";i:214;s:9:"Open Sans";i:215;s:8:"Orbitron";i:216;s:6:"Oswald";i:217;s:16:"Over the Rainbow";i:218;s:3:"Ovo";i:219;s:15:"PT Sans Caption";i:220;s:14:"PT Sans Narrow";i:221;s:7:"PT Sans";i:222;s:16:"PT Serif Caption";i:223;s:8:"PT Serif";i:224;s:8:"Pacifico";i:225;s:11:"Passero One";i:226;s:12:"Patrick Hand";i:227;s:11:"Paytone One";i:228;s:16:"Permanent Marker";i:229;s:7:"Petrona";i:230;s:11:"Philosopher";i:231;s:6:"Piedra";i:232;s:13:"Pinyon Script";i:233;s:4:"Play";i:234;s:16:"Playfair Display";i:235;s:7:"Podkova";i:236;s:10:"Poller One";i:237;s:4:"Poly";i:238;s:8:"Pompiere";i:239;s:5:"Prata";i:240;s:8:"Prociono";i:241;s:7:"Puritan";i:242;s:17:"Quattrocento Sans";i:243;s:12:"Quattrocento";i:244;s:9:"Questrial";i:245;s:9:"Quicksand";i:246;s:6:"Radley";i:247;s:7:"Raleway";i:248;s:12:"Rammetto One";i:249;s:6:"Rancho";i:250;s:9:"Rationale";i:251;s:9:"Redressed";i:252;s:13:"Reenie Beanie";i:253;s:13:"Ribeye Marrow";i:254;s:6:"Ribeye";i:255;s:9:"Righteous";i:256;s:9:"Rochester";i:257;s:9:"Rock Salt";i:258;s:7:"Rokkitt";i:259;s:7:"Rosario";i:260;s:14:"Ruslan Display";i:261;s:5:"Salsa";i:262;s:8:"Sancreek";i:263;s:11:"Sansita One";i:264;s:7:"Satisfy";i:265;s:10:"Schoolbell";i:266;s:18:"Shadows Into Light";i:267;s:6:"Shanti";i:268;s:11:"Short Stack";i:269;s:10:"Sigmar One";i:270;s:16:"Signika Negative";i:271;s:7:"Signika";i:272;s:8:"Six Caps";i:273;s:7:"Slackey";i:274;s:6:"Smokum";i:275;s:6:"Smythe";i:276;s:7:"Sniglet";i:277;s:7:"Snippet";i:278;s:16:"Sorts Mill Goudy";i:279;s:13:"Special Elite";i:280;s:9:"Spinnaker";i:281;s:6:"Spirax";i:282;s:15:"Stardos Stencil";i:283;s:19:"Sue Ellen Francisco";i:284;s:9:"Sunshiney";i:285;s:16:"Supermercado One";i:286;s:18:"Swanky and Moo Moo";i:287;s:9:"Syncopate";i:288;s:9:"Tangerine";i:289;s:10:"Tenor Sans";i:290;s:14:"Terminal Dosis";i:291;s:18:"The Girl Next Door";i:292;s:6:"Tienne";i:293;s:5:"Tinos";i:294;s:10:"Tulpen One";i:295;s:16:"Ubuntu Condensed";i:296;s:11:"Ubuntu Mono";i:297;s:6:"Ubuntu";i:298;s:5:"Ultra";i:299;s:14:"UnifrakturCook";i:300;s:18:"UnifrakturMaguntia";i:301;s:7:"Unkempt";i:302;s:6:"Unlock";i:303;s:4:"Unna";i:304;s:5:"VT323";i:305;s:12:"Varela Round";i:306;s:6:"Varela";i:307;s:11:"Vast Shadow";i:308;s:5:"Vibur";i:309;s:8:"Vidaloka";i:310;s:7:"Volkhov";i:311;s:8:"Vollkorn";i:312;s:8:"Voltaire";i:313;s:23:"Waiting for the Sunrise";i:314;s:8:"Wallpoet";i:315;s:15:"Walter Turncoat";i:316;s:8:"Wire One";i:317;s:17:"Yanone Kaffeesatz";i:318;s:10:"Yellowtail";i:319;s:10:"Yeseva One";i:320;s:6:"Zeyada";i:321;s:10:"Montserrat";}';
$phonerepair_fonts_array = unserialize($fontsSeraliazed);

$icons = 'a:370:{i:0;s:14:"---- None ----";s:9:"fa-adjust";s:9:"fa-adjust";s:6:"fa-adn";s:6:"fa-adn";s:15:"fa-align-center";s:15:"fa-align-center";s:16:"fa-align-justify";s:16:"fa-align-justify";s:13:"fa-align-left";s:13:"fa-align-left";s:14:"fa-align-right";s:14:"fa-align-right";s:12:"fa-ambulance";s:12:"fa-ambulance";s:9:"fa-anchor";s:9:"fa-anchor";s:10:"fa-android";s:10:"fa-android";s:20:"fa-angle-double-down";s:20:"fa-angle-double-down";s:20:"fa-angle-double-left";s:20:"fa-angle-double-left";s:21:"fa-angle-double-right";s:21:"fa-angle-double-right";s:18:"fa-angle-double-up";s:18:"fa-angle-double-up";s:13:"fa-angle-down";s:13:"fa-angle-down";s:13:"fa-angle-left";s:13:"fa-angle-left";s:14:"fa-angle-right";s:14:"fa-angle-right";s:11:"fa-angle-up";s:11:"fa-angle-up";s:8:"fa-apple";s:8:"fa-apple";s:10:"fa-archive";s:10:"fa-archive";s:20:"fa-arrow-circle-down";s:20:"fa-arrow-circle-down";s:20:"fa-arrow-circle-left";s:20:"fa-arrow-circle-left";s:22:"fa-arrow-circle-o-down";s:22:"fa-arrow-circle-o-down";s:22:"fa-arrow-circle-o-left";s:22:"fa-arrow-circle-o-left";s:23:"fa-arrow-circle-o-right";s:23:"fa-arrow-circle-o-right";s:20:"fa-arrow-circle-o-up";s:20:"fa-arrow-circle-o-up";s:21:"fa-arrow-circle-right";s:21:"fa-arrow-circle-right";s:18:"fa-arrow-circle-up";s:18:"fa-arrow-circle-up";s:13:"fa-arrow-down";s:13:"fa-arrow-down";s:13:"fa-arrow-left";s:13:"fa-arrow-left";s:14:"fa-arrow-right";s:14:"fa-arrow-right";s:11:"fa-arrow-up";s:11:"fa-arrow-up";s:9:"fa-arrows";s:9:"fa-arrows";s:13:"fa-arrows-alt";s:13:"fa-arrows-alt";s:11:"fa-arrows-h";s:11:"fa-arrows-h";s:11:"fa-arrows-v";s:11:"fa-arrows-v";s:11:"fa-asterisk";s:11:"fa-asterisk";s:11:"fa-backward";s:11:"fa-backward";s:6:"fa-ban";s:6:"fa-ban";s:14:"fa-bar-chart-o";s:14:"fa-bar-chart-o";s:10:"fa-barcode";s:10:"fa-barcode";s:7:"fa-bars";s:7:"fa-bars";s:7:"fa-beer";s:7:"fa-beer";s:7:"fa-bell";s:7:"fa-bell";s:9:"fa-bell-o";s:9:"fa-bell-o";s:12:"fa-bitbucket";s:12:"fa-bitbucket";s:19:"fa-bitbucket-square";s:19:"fa-bitbucket-square";s:7:"fa-bold";s:7:"fa-bold";s:7:"fa-bolt";s:7:"fa-bolt";s:7:"fa-book";s:7:"fa-book";s:11:"fa-bookmark";s:11:"fa-bookmark";s:13:"fa-bookmark-o";s:13:"fa-bookmark-o";s:12:"fa-briefcase";s:12:"fa-briefcase";s:6:"fa-btc";s:6:"fa-btc";s:6:"fa-bug";s:6:"fa-bug";s:13:"fa-building-o";s:13:"fa-building-o";s:11:"fa-bullhorn";s:11:"fa-bullhorn";s:11:"fa-bullseye";s:11:"fa-bullseye";s:11:"fa-calendar";s:11:"fa-calendar";s:13:"fa-calendar-o";s:13:"fa-calendar-o";s:9:"fa-camera";s:9:"fa-camera";s:15:"fa-camera-retro";s:15:"fa-camera-retro";s:13:"fa-caret-down";s:13:"fa-caret-down";s:13:"fa-caret-left";s:13:"fa-caret-left";s:14:"fa-caret-right";s:14:"fa-caret-right";s:22:"fa-caret-square-o-down";s:22:"fa-caret-square-o-down";s:22:"fa-caret-square-o-left";s:22:"fa-caret-square-o-left";s:23:"fa-caret-square-o-right";s:23:"fa-caret-square-o-right";s:20:"fa-caret-square-o-up";s:20:"fa-caret-square-o-up";s:11:"fa-caret-up";s:11:"fa-caret-up";s:14:"fa-certificate";s:14:"fa-certificate";s:15:"fa-chain-broken";s:15:"fa-chain-broken";s:8:"fa-check";s:8:"fa-check";s:15:"fa-check-circle";s:15:"fa-check-circle";s:17:"fa-check-circle-o";s:17:"fa-check-circle-o";s:15:"fa-check-square";s:15:"fa-check-square";s:17:"fa-check-square-o";s:17:"fa-check-square-o";s:22:"fa-chevron-circle-down";s:22:"fa-chevron-circle-down";s:22:"fa-chevron-circle-left";s:22:"fa-chevron-circle-left";s:23:"fa-chevron-circle-right";s:23:"fa-chevron-circle-right";s:20:"fa-chevron-circle-up";s:20:"fa-chevron-circle-up";s:15:"fa-chevron-down";s:15:"fa-chevron-down";s:15:"fa-chevron-left";s:15:"fa-chevron-left";s:16:"fa-chevron-right";s:16:"fa-chevron-right";s:13:"fa-chevron-up";s:13:"fa-chevron-up";s:9:"fa-circle";s:9:"fa-circle";s:11:"fa-circle-o";s:11:"fa-circle-o";s:12:"fa-clipboard";s:12:"fa-clipboard";s:10:"fa-clock-o";s:10:"fa-clock-o";s:8:"fa-cloud";s:8:"fa-cloud";s:17:"fa-cloud-download";s:17:"fa-cloud-download";s:15:"fa-cloud-upload";s:15:"fa-cloud-upload";s:7:"fa-code";s:7:"fa-code";s:12:"fa-code-fork";s:12:"fa-code-fork";s:9:"fa-coffee";s:9:"fa-coffee";s:6:"fa-cog";s:6:"fa-cog";s:7:"fa-cogs";s:7:"fa-cogs";s:10:"fa-columns";s:10:"fa-columns";s:10:"fa-comment";s:10:"fa-comment";s:12:"fa-comment-o";s:12:"fa-comment-o";s:11:"fa-comments";s:11:"fa-comments";s:13:"fa-comments-o";s:13:"fa-comments-o";s:10:"fa-compass";s:10:"fa-compass";s:11:"fa-compress";s:11:"fa-compress";s:14:"fa-credit-card";s:14:"fa-credit-card";s:7:"fa-crop";s:7:"fa-crop";s:13:"fa-crosshairs";s:13:"fa-crosshairs";s:7:"fa-css3";s:7:"fa-css3";s:10:"fa-cutlery";s:10:"fa-cutlery";s:10:"fa-desktop";s:10:"fa-desktop";s:15:"fa-dot-circle-o";s:15:"fa-dot-circle-o";s:11:"fa-download";s:11:"fa-download";s:11:"fa-dribbble";s:11:"fa-dribbble";s:10:"fa-dropbox";s:10:"fa-dropbox";s:8:"fa-eject";s:8:"fa-eject";s:13:"fa-ellipsis-h";s:13:"fa-ellipsis-h";s:13:"fa-ellipsis-v";s:13:"fa-ellipsis-v";s:11:"fa-envelope";s:11:"fa-envelope";s:13:"fa-envelope-o";s:13:"fa-envelope-o";s:9:"fa-eraser";s:9:"fa-eraser";s:6:"fa-eur";s:6:"fa-eur";s:11:"fa-exchange";s:11:"fa-exchange";s:14:"fa-exclamation";s:14:"fa-exclamation";s:21:"fa-exclamation-circle";s:21:"fa-exclamation-circle";s:23:"fa-exclamation-triangle";s:23:"fa-exclamation-triangle";s:9:"fa-expand";s:9:"fa-expand";s:16:"fa-external-link";s:16:"fa-external-link";s:23:"fa-external-link-square";s:23:"fa-external-link-square";s:6:"fa-eye";s:6:"fa-eye";s:12:"fa-eye-slash";s:12:"fa-eye-slash";s:11:"fa-facebook";s:11:"fa-facebook";s:18:"fa-facebook-square";s:18:"fa-facebook-square";s:16:"fa-fast-backward";s:16:"fa-fast-backward";s:15:"fa-fast-forward";s:15:"fa-fast-forward";s:9:"fa-female";s:9:"fa-female";s:14:"fa-fighter-jet";s:14:"fa-fighter-jet";s:7:"fa-file";s:7:"fa-file";s:9:"fa-file-o";s:9:"fa-file-o";s:12:"fa-file-text";s:12:"fa-file-text";s:14:"fa-file-text-o";s:14:"fa-file-text-o";s:10:"fa-files-o";s:10:"fa-files-o";s:7:"fa-film";s:7:"fa-film";s:9:"fa-filter";s:9:"fa-filter";s:7:"fa-fire";s:7:"fa-fire";s:20:"fa-fire-extinguisher";s:20:"fa-fire-extinguisher";s:7:"fa-flag";s:7:"fa-flag";s:17:"fa-flag-checkered";s:17:"fa-flag-checkered";s:9:"fa-flag-o";s:9:"fa-flag-o";s:8:"fa-flask";s:8:"fa-flask";s:9:"fa-flickr";s:9:"fa-flickr";s:11:"fa-floppy-o";s:11:"fa-floppy-o";s:9:"fa-folder";s:9:"fa-folder";s:11:"fa-folder-o";s:11:"fa-folder-o";s:14:"fa-folder-open";s:14:"fa-folder-open";s:16:"fa-folder-open-o";s:16:"fa-folder-open-o";s:7:"fa-font";s:7:"fa-font";s:10:"fa-forward";s:10:"fa-forward";s:13:"fa-foursquare";s:13:"fa-foursquare";s:10:"fa-frown-o";s:10:"fa-frown-o";s:10:"fa-gamepad";s:10:"fa-gamepad";s:8:"fa-gavel";s:8:"fa-gavel";s:6:"fa-gbp";s:6:"fa-gbp";s:7:"fa-gift";s:7:"fa-gift";s:9:"fa-github";s:9:"fa-github";s:13:"fa-github-alt";s:13:"fa-github-alt";s:16:"fa-github-square";s:16:"fa-github-square";s:9:"fa-gittip";s:9:"fa-gittip";s:8:"fa-glass";s:8:"fa-glass";s:8:"fa-globe";s:8:"fa-globe";s:14:"fa-google-plus";s:14:"fa-google-plus";s:21:"fa-google-plus-square";s:21:"fa-google-plus-square";s:11:"fa-h-square";s:11:"fa-h-square";s:14:"fa-hand-o-down";s:14:"fa-hand-o-down";s:14:"fa-hand-o-left";s:14:"fa-hand-o-left";s:15:"fa-hand-o-right";s:15:"fa-hand-o-right";s:12:"fa-hand-o-up";s:12:"fa-hand-o-up";s:8:"fa-hdd-o";s:8:"fa-hdd-o";s:13:"fa-headphones";s:13:"fa-headphones";s:8:"fa-heart";s:8:"fa-heart";s:10:"fa-heart-o";s:10:"fa-heart-o";s:7:"fa-home";s:7:"fa-home";s:13:"fa-hospital-o";s:13:"fa-hospital-o";s:8:"fa-html5";s:8:"fa-html5";s:8:"fa-inbox";s:8:"fa-inbox";s:9:"fa-indent";s:9:"fa-indent";s:7:"fa-info";s:7:"fa-info";s:14:"fa-info-circle";s:14:"fa-info-circle";s:6:"fa-inr";s:6:"fa-inr";s:12:"fa-instagram";s:12:"fa-instagram";s:9:"fa-italic";s:9:"fa-italic";s:6:"fa-jpy";s:6:"fa-jpy";s:6:"fa-key";s:6:"fa-key";s:13:"fa-keyboard-o";s:13:"fa-keyboard-o";s:6:"fa-krw";s:6:"fa-krw";s:9:"fa-laptop";s:9:"fa-laptop";s:7:"fa-leaf";s:7:"fa-leaf";s:10:"fa-lemon-o";s:10:"fa-lemon-o";s:13:"fa-level-down";s:13:"fa-level-down";s:11:"fa-level-up";s:11:"fa-level-up";s:14:"fa-lightbulb-o";s:14:"fa-lightbulb-o";s:7:"fa-link";s:7:"fa-link";s:11:"fa-linkedin";s:11:"fa-linkedin";s:18:"fa-linkedin-square";s:18:"fa-linkedin-square";s:8:"fa-linux";s:8:"fa-linux";s:7:"fa-list";s:7:"fa-list";s:11:"fa-list-alt";s:11:"fa-list-alt";s:10:"fa-list-ol";s:10:"fa-list-ol";s:10:"fa-list-ul";s:10:"fa-list-ul";s:17:"fa-location-arrow";s:17:"fa-location-arrow";s:7:"fa-lock";s:7:"fa-lock";s:18:"fa-long-arrow-down";s:18:"fa-long-arrow-down";s:18:"fa-long-arrow-left";s:18:"fa-long-arrow-left";s:19:"fa-long-arrow-right";s:19:"fa-long-arrow-right";s:16:"fa-long-arrow-up";s:16:"fa-long-arrow-up";s:8:"fa-magic";s:8:"fa-magic";s:9:"fa-magnet";s:9:"fa-magnet";s:17:"fa-mail-reply-all";s:17:"fa-mail-reply-all";s:7:"fa-male";s:7:"fa-male";s:13:"fa-map-marker";s:13:"fa-map-marker";s:9:"fa-maxcdn";s:9:"fa-maxcdn";s:9:"fa-medkit";s:9:"fa-medkit";s:8:"fa-meh-o";s:8:"fa-meh-o";s:13:"fa-microphone";s:13:"fa-microphone";s:19:"fa-microphone-slash";s:19:"fa-microphone-slash";s:8:"fa-minus";s:8:"fa-minus";s:15:"fa-minus-circle";s:15:"fa-minus-circle";s:15:"fa-minus-square";s:15:"fa-minus-square";s:17:"fa-minus-square-o";s:17:"fa-minus-square-o";s:9:"fa-mobile";s:9:"fa-mobile";s:8:"fa-money";s:8:"fa-money";s:9:"fa-moon-o";s:9:"fa-moon-o";s:8:"fa-music";s:8:"fa-music";s:10:"fa-outdent";s:10:"fa-outdent";s:12:"fa-pagelines";s:12:"fa-pagelines";s:12:"fa-paperclip";s:12:"fa-paperclip";s:8:"fa-pause";s:8:"fa-pause";s:9:"fa-pencil";s:9:"fa-pencil";s:16:"fa-pencil-square";s:16:"fa-pencil-square";s:18:"fa-pencil-square-o";s:18:"fa-pencil-square-o";s:8:"fa-phone";s:8:"fa-phone";s:15:"fa-phone-square";s:15:"fa-phone-square";s:12:"fa-picture-o";s:12:"fa-picture-o";s:12:"fa-pinterest";s:12:"fa-pinterest";s:19:"fa-pinterest-square";s:19:"fa-pinterest-square";s:8:"fa-plane";s:8:"fa-plane";s:7:"fa-play";s:7:"fa-play";s:14:"fa-play-circle";s:14:"fa-play-circle";s:16:"fa-play-circle-o";s:16:"fa-play-circle-o";s:7:"fa-plus";s:7:"fa-plus";s:14:"fa-plus-circle";s:14:"fa-plus-circle";s:14:"fa-plus-square";s:14:"fa-plus-square";s:16:"fa-plus-square-o";s:16:"fa-plus-square-o";s:12:"fa-power-off";s:12:"fa-power-off";s:8:"fa-print";s:8:"fa-print";s:15:"fa-puzzle-piece";s:15:"fa-puzzle-piece";s:9:"fa-qrcode";s:9:"fa-qrcode";s:11:"fa-question";s:11:"fa-question";s:18:"fa-question-circle";s:18:"fa-question-circle";s:13:"fa-quote-left";s:13:"fa-quote-left";s:14:"fa-quote-right";s:14:"fa-quote-right";s:9:"fa-random";s:9:"fa-random";s:10:"fa-refresh";s:10:"fa-refresh";s:9:"fa-renren";s:9:"fa-renren";s:9:"fa-repeat";s:9:"fa-repeat";s:8:"fa-reply";s:8:"fa-reply";s:12:"fa-reply-all";s:12:"fa-reply-all";s:10:"fa-retweet";s:10:"fa-retweet";s:7:"fa-road";s:7:"fa-road";s:9:"fa-rocket";s:9:"fa-rocket";s:6:"fa-rss";s:6:"fa-rss";s:13:"fa-rss-square";s:13:"fa-rss-square";s:6:"fa-rub";s:6:"fa-rub";s:11:"fa-scissors";s:11:"fa-scissors";s:9:"fa-search";s:9:"fa-search";s:15:"fa-search-minus";s:15:"fa-search-minus";s:14:"fa-search-plus";s:14:"fa-search-plus";s:8:"fa-share";s:8:"fa-share";s:15:"fa-share-square";s:15:"fa-share-square";s:17:"fa-share-square-o";s:17:"fa-share-square-o";s:9:"fa-shield";s:9:"fa-shield";s:16:"fa-shopping-cart";s:16:"fa-shopping-cart";s:10:"fa-sign-in";s:10:"fa-sign-in";s:11:"fa-sign-out";s:11:"fa-sign-out";s:9:"fa-signal";s:9:"fa-signal";s:10:"fa-sitemap";s:10:"fa-sitemap";s:8:"fa-skype";s:8:"fa-skype";s:10:"fa-smile-o";s:10:"fa-smile-o";s:7:"fa-sort";s:7:"fa-sort";s:17:"fa-sort-alpha-asc";s:17:"fa-sort-alpha-asc";s:18:"fa-sort-alpha-desc";s:18:"fa-sort-alpha-desc";s:18:"fa-sort-amount-asc";s:18:"fa-sort-amount-asc";s:19:"fa-sort-amount-desc";s:19:"fa-sort-amount-desc";s:11:"fa-sort-asc";s:11:"fa-sort-asc";s:12:"fa-sort-desc";s:12:"fa-sort-desc";s:19:"fa-sort-numeric-asc";s:19:"fa-sort-numeric-asc";s:20:"fa-sort-numeric-desc";s:20:"fa-sort-numeric-desc";s:10:"fa-spinner";s:10:"fa-spinner";s:9:"fa-square";s:9:"fa-square";s:11:"fa-square-o";s:11:"fa-square-o";s:17:"fa-stack-exchange";s:17:"fa-stack-exchange";s:17:"fa-stack-overflow";s:17:"fa-stack-overflow";s:7:"fa-star";s:7:"fa-star";s:12:"fa-star-half";s:12:"fa-star-half";s:14:"fa-star-half-o";s:14:"fa-star-half-o";s:9:"fa-star-o";s:9:"fa-star-o";s:16:"fa-step-backward";s:16:"fa-step-backward";s:15:"fa-step-forward";s:15:"fa-step-forward";s:14:"fa-stethoscope";s:14:"fa-stethoscope";s:7:"fa-stop";s:7:"fa-stop";s:16:"fa-strikethrough";s:16:"fa-strikethrough";s:12:"fa-subscript";s:12:"fa-subscript";s:11:"fa-suitcase";s:11:"fa-suitcase";s:8:"fa-sun-o";s:8:"fa-sun-o";s:14:"fa-superscript";s:14:"fa-superscript";s:8:"fa-table";s:8:"fa-table";s:9:"fa-tablet";s:9:"fa-tablet";s:13:"fa-tachometer";s:13:"fa-tachometer";s:6:"fa-tag";s:6:"fa-tag";s:7:"fa-tags";s:7:"fa-tags";s:8:"fa-tasks";s:8:"fa-tasks";s:11:"fa-terminal";s:11:"fa-terminal";s:14:"fa-text-height";s:14:"fa-text-height";s:13:"fa-text-width";s:13:"fa-text-width";s:5:"fa-th";s:5:"fa-th";s:11:"fa-th-large";s:11:"fa-th-large";s:10:"fa-th-list";s:10:"fa-th-list";s:13:"fa-thumb-tack";s:13:"fa-thumb-tack";s:14:"fa-thumbs-down";s:14:"fa-thumbs-down";s:16:"fa-thumbs-o-down";s:16:"fa-thumbs-o-down";s:14:"fa-thumbs-o-up";s:14:"fa-thumbs-o-up";s:12:"fa-thumbs-up";s:12:"fa-thumbs-up";s:9:"fa-ticket";s:9:"fa-ticket";s:8:"fa-times";s:8:"fa-times";s:15:"fa-times-circle";s:15:"fa-times-circle";s:17:"fa-times-circle-o";s:17:"fa-times-circle-o";s:7:"fa-tint";s:7:"fa-tint";s:10:"fa-trash-o";s:10:"fa-trash-o";s:9:"fa-trello";s:9:"fa-trello";s:9:"fa-trophy";s:9:"fa-trophy";s:8:"fa-truck";s:8:"fa-truck";s:6:"fa-try";s:6:"fa-try";s:9:"fa-tumblr";s:9:"fa-tumblr";s:16:"fa-tumblr-square";s:16:"fa-tumblr-square";s:10:"fa-twitter";s:10:"fa-twitter";s:17:"fa-twitter-square";s:17:"fa-twitter-square";s:11:"fa-umbrella";s:11:"fa-umbrella";s:12:"fa-underline";s:12:"fa-underline";s:7:"fa-undo";s:7:"fa-undo";s:9:"fa-unlock";s:9:"fa-unlock";s:13:"fa-unlock-alt";s:13:"fa-unlock-alt";s:9:"fa-upload";s:9:"fa-upload";s:6:"fa-usd";s:6:"fa-usd";s:7:"fa-user";s:7:"fa-user";s:10:"fa-user-md";s:10:"fa-user-md";s:8:"fa-users";s:8:"fa-users";s:15:"fa-video-camera";s:15:"fa-video-camera";s:15:"fa-vimeo-square";s:15:"fa-vimeo-square";s:5:"fa-vk";s:5:"fa-vk";s:14:"fa-volume-down";s:14:"fa-volume-down";s:13:"fa-volume-off";s:13:"fa-volume-off";s:12:"fa-volume-up";s:12:"fa-volume-up";s:8:"fa-weibo";s:8:"fa-weibo";s:13:"fa-wheelchair";s:13:"fa-wheelchair";s:10:"fa-windows";s:10:"fa-windows";s:9:"fa-wrench";s:9:"fa-wrench";s:7:"fa-xing";s:7:"fa-xing";s:14:"fa-xing-square";s:14:"fa-xing-square";s:10:"fa-youtube";s:10:"fa-youtube";s:15:"fa-youtube-play";s:15:"fa-youtube-play";s:17:"fa-youtube-square";s:17:"fa-youtube-square";}';



$vc_add_css_animation = array(
	'type' => 'dropdown',
	'heading' => esc_html__( 'CSS Animation', 'phonerepair' ),
	'param_name' => 'css_animation',
	'admin_label' => true,
	'value' => array(
		  esc_html__( 'No', 'phonerepair' ) => '',
		  esc_html__('Bounce In', 'phonerepair' ) => 'bounceIn',
          esc_html__('Bounce In Down', 'phonerepair' ) => 'bounceInDown',
          esc_html__('Bounce In Left', 'phonerepair' ) => 'bounceInLeft',
          esc_html__('Bounce In Right', 'phonerepair' ) => 'bounceInRight',
          esc_html__('Bounce In Up', 'phonerepair' ) => 'bounceInUp',
          esc_html__('Fade In', 'phonerepair' ) => 'fadeIn',
          esc_html__('Fade In Down', 'phonerepair' ) => 'fadeInDown',
          esc_html__('Fade In Down Big', 'phonerepair' ) => 'fadeInDownBig',
          esc_html__('Fade In Left', 'phonerepair' ) => 'fadeInLeft',
          esc_html__('Fade In Left Big', 'phonerepair' ) => 'fadeInLeftBig',
          esc_html__('Fade In Right', 'phonerepair' ) => 'fadeInRight',
          esc_html__('Fade In Right Big', 'phonerepair' ) => 'fadeInRightBig',
          esc_html__('Fade In Up', 'phonerepair' ) => 'fadeInUp',
          esc_html__('Fade In Up Big', 'phonerepair' ) => 'fadeInUpBig',
          esc_html__('Flip', 'phonerepair' ) => 'flip',
          esc_html__('Flip In X', 'phonerepair' ) => 'flipInX',
          esc_html__('Flip In Y', 'phonerepair' ) => 'flipInY',
          esc_html__('Flip Out X', 'phonerepair' ) => 'flipOutX',
          esc_html__('Flip Out Y', 'phonerepair' ) => 'flipOutY',
          esc_html__('Light Speed In', 'phonerepair' ) => 'lightSpeedIn',
          esc_html__('Light Speed Out', 'phonerepair' ) => 'lightSpeedOut',
          esc_html__('Rotate In', 'phonerepair' ) => 'rotateIn',
          esc_html__('Rotate In Down Left', 'phonerepair' ) => 'rotateInDownLeft',
          esc_html__('Rotate In Down Right', 'phonerepair' ) => 'rotateInDownRight',
          esc_html__('Rotate In Up Left', 'phonerepair' ) => 'rotateInUpLeft',
          esc_html__('Rotate In Up Right', 'phonerepair' ) => 'rotateInUpRight',
          esc_html__('Slide In Up', 'phonerepair' ) => 'slideInUp',
          esc_html__('Slide In Down', 'phonerepair' ) => 'slideInDown',
          esc_html__('Slide In Left', 'phonerepair' ) => 'slideInLeft',
          esc_html__('Slide In Right', 'phonerepair' ) => 'slideInRight',
          esc_html__('Zoom In ', 'phonerepair' ) => 'zoomIn',
          esc_html__('Zoom In Down', 'phonerepair' ) => 'zoomInDown',
          esc_html__('Zoom In Left', 'phonerepair' ) => 'zoomInLeft',
          esc_html__('Zoom In Right', 'phonerepair' ) => 'zoomInRight',
          esc_html__('Zoom In Up', 'phonerepair' ) => 'zoomInUp',
          esc_html__('Roll In', 'phonerepair' ) => 'rollIn',
	),
	'description' => esc_html__( 'Select type of animation for element to be animated when it "enters" the browsers viewport (Note: works only in modern browsers).', 'phonerepair' )
);



vc_map( array(
    "name"            => esc_html__("Pricing Table", 'phonerepair'), // add a name
    "base"            => "phonerepair_pricing_table", // bind with our shortcode
    "description"     => "You can add a prince table",
    "content_element" => true, // set this parameter when element will has a content
    "is_container"    => FALSE, // set this param when you need to add a content element in this element
    // Here starts the definition of array with parameters of our compnent
    "params" => array( 
        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ), 
        array(
            "type" => "textfield",
            "heading" => esc_html__("Price", 'phonerepair'),
            "param_name" => "price",
        ), 
        array(
            "type" => "textfield",
            "heading" => esc_html__("Description", 'phonerepair'),
            "param_name" => "description",
        ), 
        array(
            "type" => "textfield",
            "heading" => esc_html__("Button Text", 'phonerepair'),
            "param_name" => "button_text",
            "value" => "Buy Now",
        ), 
        array(
            "type" => "vc_link",
            "heading" => esc_html__("Button Link", 'phonerepair'),
            "param_name" => "button_link",
        ), 
        array(            
            "type" => "textarea",
            "class" => "",
            "heading" => "Plan Options",
            "param_name" => "content_text",
            "value" => "<ul><li>Option #1</li><li>Option #2</li><li>Option #3</li><li>Option #4</li></ul>",
            "description" => ""
        ), 
        array(
            "type" => "checkbox",
            "heading" => esc_html__("Set this table as featured", 'phonerepair'),
            "param_name" => "featured",
            "value" =>array( esc_html__( 'Yes, please', 'phonerepair' ) => 'featured' ),
        ),
        $vc_add_css_animation
    )
) );
$icons = 'a:370:{i:0;s:14:"---- None ----";s:9:"fa-adjust";s:9:"fa-adjust";s:6:"fa-adn";s:6:"fa-adn";s:15:"fa-align-center";s:15:"fa-align-center";s:16:"fa-align-justify";s:16:"fa-align-justify";s:13:"fa-align-left";s:13:"fa-align-left";s:14:"fa-align-right";s:14:"fa-align-right";s:12:"fa-ambulance";s:12:"fa-ambulance";s:9:"fa-anchor";s:9:"fa-anchor";s:10:"fa-android";s:10:"fa-android";s:20:"fa-angle-double-down";s:20:"fa-angle-double-down";s:20:"fa-angle-double-left";s:20:"fa-angle-double-left";s:21:"fa-angle-double-right";s:21:"fa-angle-double-right";s:18:"fa-angle-double-up";s:18:"fa-angle-double-up";s:13:"fa-angle-down";s:13:"fa-angle-down";s:13:"fa-angle-left";s:13:"fa-angle-left";s:14:"fa-angle-right";s:14:"fa-angle-right";s:11:"fa-angle-up";s:11:"fa-angle-up";s:8:"fa-apple";s:8:"fa-apple";s:10:"fa-archive";s:10:"fa-archive";s:20:"fa-arrow-circle-down";s:20:"fa-arrow-circle-down";s:20:"fa-arrow-circle-left";s:20:"fa-arrow-circle-left";s:22:"fa-arrow-circle-o-down";s:22:"fa-arrow-circle-o-down";s:22:"fa-arrow-circle-o-left";s:22:"fa-arrow-circle-o-left";s:23:"fa-arrow-circle-o-right";s:23:"fa-arrow-circle-o-right";s:20:"fa-arrow-circle-o-up";s:20:"fa-arrow-circle-o-up";s:21:"fa-arrow-circle-right";s:21:"fa-arrow-circle-right";s:18:"fa-arrow-circle-up";s:18:"fa-arrow-circle-up";s:13:"fa-arrow-down";s:13:"fa-arrow-down";s:13:"fa-arrow-left";s:13:"fa-arrow-left";s:14:"fa-arrow-right";s:14:"fa-arrow-right";s:11:"fa-arrow-up";s:11:"fa-arrow-up";s:9:"fa-arrows";s:9:"fa-arrows";s:13:"fa-arrows-alt";s:13:"fa-arrows-alt";s:11:"fa-arrows-h";s:11:"fa-arrows-h";s:11:"fa-arrows-v";s:11:"fa-arrows-v";s:11:"fa-asterisk";s:11:"fa-asterisk";s:11:"fa-backward";s:11:"fa-backward";s:6:"fa-ban";s:6:"fa-ban";s:14:"fa-bar-chart-o";s:14:"fa-bar-chart-o";s:10:"fa-barcode";s:10:"fa-barcode";s:7:"fa-bars";s:7:"fa-bars";s:7:"fa-beer";s:7:"fa-beer";s:7:"fa-bell";s:7:"fa-bell";s:9:"fa-bell-o";s:9:"fa-bell-o";s:12:"fa-bitbucket";s:12:"fa-bitbucket";s:19:"fa-bitbucket-square";s:19:"fa-bitbucket-square";s:7:"fa-bold";s:7:"fa-bold";s:7:"fa-bolt";s:7:"fa-bolt";s:7:"fa-book";s:7:"fa-book";s:11:"fa-bookmark";s:11:"fa-bookmark";s:13:"fa-bookmark-o";s:13:"fa-bookmark-o";s:12:"fa-briefcase";s:12:"fa-briefcase";s:6:"fa-btc";s:6:"fa-btc";s:6:"fa-bug";s:6:"fa-bug";s:13:"fa-building-o";s:13:"fa-building-o";s:11:"fa-bullhorn";s:11:"fa-bullhorn";s:11:"fa-bullseye";s:11:"fa-bullseye";s:11:"fa-calendar";s:11:"fa-calendar";s:13:"fa-calendar-o";s:13:"fa-calendar-o";s:9:"fa-camera";s:9:"fa-camera";s:15:"fa-camera-retro";s:15:"fa-camera-retro";s:13:"fa-caret-down";s:13:"fa-caret-down";s:13:"fa-caret-left";s:13:"fa-caret-left";s:14:"fa-caret-right";s:14:"fa-caret-right";s:22:"fa-caret-square-o-down";s:22:"fa-caret-square-o-down";s:22:"fa-caret-square-o-left";s:22:"fa-caret-square-o-left";s:23:"fa-caret-square-o-right";s:23:"fa-caret-square-o-right";s:20:"fa-caret-square-o-up";s:20:"fa-caret-square-o-up";s:11:"fa-caret-up";s:11:"fa-caret-up";s:14:"fa-certificate";s:14:"fa-certificate";s:15:"fa-chain-broken";s:15:"fa-chain-broken";s:8:"fa-check";s:8:"fa-check";s:15:"fa-check-circle";s:15:"fa-check-circle";s:17:"fa-check-circle-o";s:17:"fa-check-circle-o";s:15:"fa-check-square";s:15:"fa-check-square";s:17:"fa-check-square-o";s:17:"fa-check-square-o";s:22:"fa-chevron-circle-down";s:22:"fa-chevron-circle-down";s:22:"fa-chevron-circle-left";s:22:"fa-chevron-circle-left";s:23:"fa-chevron-circle-right";s:23:"fa-chevron-circle-right";s:20:"fa-chevron-circle-up";s:20:"fa-chevron-circle-up";s:15:"fa-chevron-down";s:15:"fa-chevron-down";s:15:"fa-chevron-left";s:15:"fa-chevron-left";s:16:"fa-chevron-right";s:16:"fa-chevron-right";s:13:"fa-chevron-up";s:13:"fa-chevron-up";s:9:"fa-circle";s:9:"fa-circle";s:11:"fa-circle-o";s:11:"fa-circle-o";s:12:"fa-clipboard";s:12:"fa-clipboard";s:10:"fa-clock-o";s:10:"fa-clock-o";s:8:"fa-cloud";s:8:"fa-cloud";s:17:"fa-cloud-download";s:17:"fa-cloud-download";s:15:"fa-cloud-upload";s:15:"fa-cloud-upload";s:7:"fa-code";s:7:"fa-code";s:12:"fa-code-fork";s:12:"fa-code-fork";s:9:"fa-coffee";s:9:"fa-coffee";s:6:"fa-cog";s:6:"fa-cog";s:7:"fa-cogs";s:7:"fa-cogs";s:10:"fa-columns";s:10:"fa-columns";s:10:"fa-comment";s:10:"fa-comment";s:12:"fa-comment-o";s:12:"fa-comment-o";s:11:"fa-comments";s:11:"fa-comments";s:13:"fa-comments-o";s:13:"fa-comments-o";s:10:"fa-compass";s:10:"fa-compass";s:11:"fa-compress";s:11:"fa-compress";s:14:"fa-credit-card";s:14:"fa-credit-card";s:7:"fa-crop";s:7:"fa-crop";s:13:"fa-crosshairs";s:13:"fa-crosshairs";s:7:"fa-css3";s:7:"fa-css3";s:10:"fa-cutlery";s:10:"fa-cutlery";s:10:"fa-desktop";s:10:"fa-desktop";s:15:"fa-dot-circle-o";s:15:"fa-dot-circle-o";s:11:"fa-download";s:11:"fa-download";s:11:"fa-dribbble";s:11:"fa-dribbble";s:10:"fa-dropbox";s:10:"fa-dropbox";s:8:"fa-eject";s:8:"fa-eject";s:13:"fa-ellipsis-h";s:13:"fa-ellipsis-h";s:13:"fa-ellipsis-v";s:13:"fa-ellipsis-v";s:11:"fa-envelope";s:11:"fa-envelope";s:13:"fa-envelope-o";s:13:"fa-envelope-o";s:9:"fa-eraser";s:9:"fa-eraser";s:6:"fa-eur";s:6:"fa-eur";s:11:"fa-exchange";s:11:"fa-exchange";s:14:"fa-exclamation";s:14:"fa-exclamation";s:21:"fa-exclamation-circle";s:21:"fa-exclamation-circle";s:23:"fa-exclamation-triangle";s:23:"fa-exclamation-triangle";s:9:"fa-expand";s:9:"fa-expand";s:16:"fa-external-link";s:16:"fa-external-link";s:23:"fa-external-link-square";s:23:"fa-external-link-square";s:6:"fa-eye";s:6:"fa-eye";s:12:"fa-eye-slash";s:12:"fa-eye-slash";s:11:"fa-facebook";s:11:"fa-facebook";s:18:"fa-facebook-square";s:18:"fa-facebook-square";s:16:"fa-fast-backward";s:16:"fa-fast-backward";s:15:"fa-fast-forward";s:15:"fa-fast-forward";s:9:"fa-female";s:9:"fa-female";s:14:"fa-fighter-jet";s:14:"fa-fighter-jet";s:7:"fa-file";s:7:"fa-file";s:9:"fa-file-o";s:9:"fa-file-o";s:12:"fa-file-text";s:12:"fa-file-text";s:14:"fa-file-text-o";s:14:"fa-file-text-o";s:10:"fa-files-o";s:10:"fa-files-o";s:7:"fa-film";s:7:"fa-film";s:9:"fa-filter";s:9:"fa-filter";s:7:"fa-fire";s:7:"fa-fire";s:20:"fa-fire-extinguisher";s:20:"fa-fire-extinguisher";s:7:"fa-flag";s:7:"fa-flag";s:17:"fa-flag-checkered";s:17:"fa-flag-checkered";s:9:"fa-flag-o";s:9:"fa-flag-o";s:8:"fa-flask";s:8:"fa-flask";s:9:"fa-flickr";s:9:"fa-flickr";s:11:"fa-floppy-o";s:11:"fa-floppy-o";s:9:"fa-folder";s:9:"fa-folder";s:11:"fa-folder-o";s:11:"fa-folder-o";s:14:"fa-folder-open";s:14:"fa-folder-open";s:16:"fa-folder-open-o";s:16:"fa-folder-open-o";s:7:"fa-font";s:7:"fa-font";s:10:"fa-forward";s:10:"fa-forward";s:13:"fa-foursquare";s:13:"fa-foursquare";s:10:"fa-frown-o";s:10:"fa-frown-o";s:10:"fa-gamepad";s:10:"fa-gamepad";s:8:"fa-gavel";s:8:"fa-gavel";s:6:"fa-gbp";s:6:"fa-gbp";s:7:"fa-gift";s:7:"fa-gift";s:9:"fa-github";s:9:"fa-github";s:13:"fa-github-alt";s:13:"fa-github-alt";s:16:"fa-github-square";s:16:"fa-github-square";s:9:"fa-gittip";s:9:"fa-gittip";s:8:"fa-glass";s:8:"fa-glass";s:8:"fa-globe";s:8:"fa-globe";s:14:"fa-google-plus";s:14:"fa-google-plus";s:21:"fa-google-plus-square";s:21:"fa-google-plus-square";s:11:"fa-h-square";s:11:"fa-h-square";s:14:"fa-hand-o-down";s:14:"fa-hand-o-down";s:14:"fa-hand-o-left";s:14:"fa-hand-o-left";s:15:"fa-hand-o-right";s:15:"fa-hand-o-right";s:12:"fa-hand-o-up";s:12:"fa-hand-o-up";s:8:"fa-hdd-o";s:8:"fa-hdd-o";s:13:"fa-headphones";s:13:"fa-headphones";s:8:"fa-heart";s:8:"fa-heart";s:10:"fa-heart-o";s:10:"fa-heart-o";s:7:"fa-home";s:7:"fa-home";s:13:"fa-hospital-o";s:13:"fa-hospital-o";s:8:"fa-html5";s:8:"fa-html5";s:8:"fa-inbox";s:8:"fa-inbox";s:9:"fa-indent";s:9:"fa-indent";s:7:"fa-info";s:7:"fa-info";s:14:"fa-info-circle";s:14:"fa-info-circle";s:6:"fa-inr";s:6:"fa-inr";s:12:"fa-instagram";s:12:"fa-instagram";s:9:"fa-italic";s:9:"fa-italic";s:6:"fa-jpy";s:6:"fa-jpy";s:6:"fa-key";s:6:"fa-key";s:13:"fa-keyboard-o";s:13:"fa-keyboard-o";s:6:"fa-krw";s:6:"fa-krw";s:9:"fa-laptop";s:9:"fa-laptop";s:7:"fa-leaf";s:7:"fa-leaf";s:10:"fa-lemon-o";s:10:"fa-lemon-o";s:13:"fa-level-down";s:13:"fa-level-down";s:11:"fa-level-up";s:11:"fa-level-up";s:14:"fa-lightbulb-o";s:14:"fa-lightbulb-o";s:7:"fa-link";s:7:"fa-link";s:11:"fa-linkedin";s:11:"fa-linkedin";s:18:"fa-linkedin-square";s:18:"fa-linkedin-square";s:8:"fa-linux";s:8:"fa-linux";s:7:"fa-list";s:7:"fa-list";s:11:"fa-list-alt";s:11:"fa-list-alt";s:10:"fa-list-ol";s:10:"fa-list-ol";s:10:"fa-list-ul";s:10:"fa-list-ul";s:17:"fa-location-arrow";s:17:"fa-location-arrow";s:7:"fa-lock";s:7:"fa-lock";s:18:"fa-long-arrow-down";s:18:"fa-long-arrow-down";s:18:"fa-long-arrow-left";s:18:"fa-long-arrow-left";s:19:"fa-long-arrow-right";s:19:"fa-long-arrow-right";s:16:"fa-long-arrow-up";s:16:"fa-long-arrow-up";s:8:"fa-magic";s:8:"fa-magic";s:9:"fa-magnet";s:9:"fa-magnet";s:17:"fa-mail-reply-all";s:17:"fa-mail-reply-all";s:7:"fa-male";s:7:"fa-male";s:13:"fa-map-marker";s:13:"fa-map-marker";s:9:"fa-maxcdn";s:9:"fa-maxcdn";s:9:"fa-medkit";s:9:"fa-medkit";s:8:"fa-meh-o";s:8:"fa-meh-o";s:13:"fa-microphone";s:13:"fa-microphone";s:19:"fa-microphone-slash";s:19:"fa-microphone-slash";s:8:"fa-minus";s:8:"fa-minus";s:15:"fa-minus-circle";s:15:"fa-minus-circle";s:15:"fa-minus-square";s:15:"fa-minus-square";s:17:"fa-minus-square-o";s:17:"fa-minus-square-o";s:9:"fa-mobile";s:9:"fa-mobile";s:8:"fa-money";s:8:"fa-money";s:9:"fa-moon-o";s:9:"fa-moon-o";s:8:"fa-music";s:8:"fa-music";s:10:"fa-outdent";s:10:"fa-outdent";s:12:"fa-pagelines";s:12:"fa-pagelines";s:12:"fa-paperclip";s:12:"fa-paperclip";s:8:"fa-pause";s:8:"fa-pause";s:9:"fa-pencil";s:9:"fa-pencil";s:16:"fa-pencil-square";s:16:"fa-pencil-square";s:18:"fa-pencil-square-o";s:18:"fa-pencil-square-o";s:8:"fa-phone";s:8:"fa-phone";s:15:"fa-phone-square";s:15:"fa-phone-square";s:12:"fa-picture-o";s:12:"fa-picture-o";s:12:"fa-pinterest";s:12:"fa-pinterest";s:19:"fa-pinterest-square";s:19:"fa-pinterest-square";s:8:"fa-plane";s:8:"fa-plane";s:7:"fa-play";s:7:"fa-play";s:14:"fa-play-circle";s:14:"fa-play-circle";s:16:"fa-play-circle-o";s:16:"fa-play-circle-o";s:7:"fa-plus";s:7:"fa-plus";s:14:"fa-plus-circle";s:14:"fa-plus-circle";s:14:"fa-plus-square";s:14:"fa-plus-square";s:16:"fa-plus-square-o";s:16:"fa-plus-square-o";s:12:"fa-power-off";s:12:"fa-power-off";s:8:"fa-print";s:8:"fa-print";s:15:"fa-puzzle-piece";s:15:"fa-puzzle-piece";s:9:"fa-qrcode";s:9:"fa-qrcode";s:11:"fa-question";s:11:"fa-question";s:18:"fa-question-circle";s:18:"fa-question-circle";s:13:"fa-quote-left";s:13:"fa-quote-left";s:14:"fa-quote-right";s:14:"fa-quote-right";s:9:"fa-random";s:9:"fa-random";s:10:"fa-refresh";s:10:"fa-refresh";s:9:"fa-renren";s:9:"fa-renren";s:9:"fa-repeat";s:9:"fa-repeat";s:8:"fa-reply";s:8:"fa-reply";s:12:"fa-reply-all";s:12:"fa-reply-all";s:10:"fa-retweet";s:10:"fa-retweet";s:7:"fa-road";s:7:"fa-road";s:9:"fa-rocket";s:9:"fa-rocket";s:6:"fa-rss";s:6:"fa-rss";s:13:"fa-rss-square";s:13:"fa-rss-square";s:6:"fa-rub";s:6:"fa-rub";s:11:"fa-scissors";s:11:"fa-scissors";s:9:"fa-search";s:9:"fa-search";s:15:"fa-search-minus";s:15:"fa-search-minus";s:14:"fa-search-plus";s:14:"fa-search-plus";s:8:"fa-share";s:8:"fa-share";s:15:"fa-share-square";s:15:"fa-share-square";s:17:"fa-share-square-o";s:17:"fa-share-square-o";s:9:"fa-shield";s:9:"fa-shield";s:16:"fa-shopping-cart";s:16:"fa-shopping-cart";s:10:"fa-sign-in";s:10:"fa-sign-in";s:11:"fa-sign-out";s:11:"fa-sign-out";s:9:"fa-signal";s:9:"fa-signal";s:10:"fa-sitemap";s:10:"fa-sitemap";s:8:"fa-skype";s:8:"fa-skype";s:10:"fa-smile-o";s:10:"fa-smile-o";s:7:"fa-sort";s:7:"fa-sort";s:17:"fa-sort-alpha-asc";s:17:"fa-sort-alpha-asc";s:18:"fa-sort-alpha-desc";s:18:"fa-sort-alpha-desc";s:18:"fa-sort-amount-asc";s:18:"fa-sort-amount-asc";s:19:"fa-sort-amount-desc";s:19:"fa-sort-amount-desc";s:11:"fa-sort-asc";s:11:"fa-sort-asc";s:12:"fa-sort-desc";s:12:"fa-sort-desc";s:19:"fa-sort-numeric-asc";s:19:"fa-sort-numeric-asc";s:20:"fa-sort-numeric-desc";s:20:"fa-sort-numeric-desc";s:10:"fa-spinner";s:10:"fa-spinner";s:9:"fa-square";s:9:"fa-square";s:11:"fa-square-o";s:11:"fa-square-o";s:17:"fa-stack-exchange";s:17:"fa-stack-exchange";s:17:"fa-stack-overflow";s:17:"fa-stack-overflow";s:7:"fa-star";s:7:"fa-star";s:12:"fa-star-half";s:12:"fa-star-half";s:14:"fa-star-half-o";s:14:"fa-star-half-o";s:9:"fa-star-o";s:9:"fa-star-o";s:16:"fa-step-backward";s:16:"fa-step-backward";s:15:"fa-step-forward";s:15:"fa-step-forward";s:14:"fa-stethoscope";s:14:"fa-stethoscope";s:7:"fa-stop";s:7:"fa-stop";s:16:"fa-strikethrough";s:16:"fa-strikethrough";s:12:"fa-subscript";s:12:"fa-subscript";s:11:"fa-suitcase";s:11:"fa-suitcase";s:8:"fa-sun-o";s:8:"fa-sun-o";s:14:"fa-superscript";s:14:"fa-superscript";s:8:"fa-table";s:8:"fa-table";s:9:"fa-tablet";s:9:"fa-tablet";s:13:"fa-tachometer";s:13:"fa-tachometer";s:6:"fa-tag";s:6:"fa-tag";s:7:"fa-tags";s:7:"fa-tags";s:8:"fa-tasks";s:8:"fa-tasks";s:11:"fa-terminal";s:11:"fa-terminal";s:14:"fa-text-height";s:14:"fa-text-height";s:13:"fa-text-width";s:13:"fa-text-width";s:5:"fa-th";s:5:"fa-th";s:11:"fa-th-large";s:11:"fa-th-large";s:10:"fa-th-list";s:10:"fa-th-list";s:13:"fa-thumb-tack";s:13:"fa-thumb-tack";s:14:"fa-thumbs-down";s:14:"fa-thumbs-down";s:16:"fa-thumbs-o-down";s:16:"fa-thumbs-o-down";s:14:"fa-thumbs-o-up";s:14:"fa-thumbs-o-up";s:12:"fa-thumbs-up";s:12:"fa-thumbs-up";s:9:"fa-ticket";s:9:"fa-ticket";s:8:"fa-times";s:8:"fa-times";s:15:"fa-times-circle";s:15:"fa-times-circle";s:17:"fa-times-circle-o";s:17:"fa-times-circle-o";s:7:"fa-tint";s:7:"fa-tint";s:10:"fa-trash-o";s:10:"fa-trash-o";s:9:"fa-trello";s:9:"fa-trello";s:9:"fa-trophy";s:9:"fa-trophy";s:8:"fa-truck";s:8:"fa-truck";s:6:"fa-try";s:6:"fa-try";s:9:"fa-tumblr";s:9:"fa-tumblr";s:16:"fa-tumblr-square";s:16:"fa-tumblr-square";s:10:"fa-twitter";s:10:"fa-twitter";s:17:"fa-twitter-square";s:17:"fa-twitter-square";s:11:"fa-umbrella";s:11:"fa-umbrella";s:12:"fa-underline";s:12:"fa-underline";s:7:"fa-undo";s:7:"fa-undo";s:9:"fa-unlock";s:9:"fa-unlock";s:13:"fa-unlock-alt";s:13:"fa-unlock-alt";s:9:"fa-upload";s:9:"fa-upload";s:6:"fa-usd";s:6:"fa-usd";s:7:"fa-user";s:7:"fa-user";s:10:"fa-user-md";s:10:"fa-user-md";s:8:"fa-users";s:8:"fa-users";s:15:"fa-video-camera";s:15:"fa-video-camera";s:15:"fa-vimeo-square";s:15:"fa-vimeo-square";s:5:"fa-vk";s:5:"fa-vk";s:14:"fa-volume-down";s:14:"fa-volume-down";s:13:"fa-volume-off";s:13:"fa-volume-off";s:12:"fa-volume-up";s:12:"fa-volume-up";s:8:"fa-weibo";s:8:"fa-weibo";s:13:"fa-wheelchair";s:13:"fa-wheelchair";s:10:"fa-windows";s:10:"fa-windows";s:9:"fa-wrench";s:9:"fa-wrench";s:7:"fa-xing";s:7:"fa-xing";s:14:"fa-xing-square";s:14:"fa-xing-square";s:10:"fa-youtube";s:10:"fa-youtube";s:15:"fa-youtube-play";s:15:"fa-youtube-play";s:17:"fa-youtube-square";s:17:"fa-youtube-square";}';
  $icons = unserialize( $icons );
vc_add_param("vc_tab",
		array(
			'type' => 'dropdown',
			'heading' =>  'Icon',
			'param_name' => "phonerepair_icon",
			"value" =>$icons
			)
		);
vc_add_param("vc_tab",
        array(
            "type" => "checkbox",
            "heading" => esc_html__("Display image instead of icon", 'phonerepair'),
            "param_name" => "phonerepair_image_checkbox",
            'value' => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
        )
        );
vc_add_param("vc_tab",
        array(
            "type" => "attach_image", // it will bind a img choice in WP
            "heading" => esc_html__("Image", 'phonerepair'),
            "param_name" => "phonerepair_image",
        )
        );
vc_add_param("vc_tab",
        array(
            "type" => "attach_image", // it will bind a img choice in WP
            "heading" => esc_html__("Background Image", 'phonerepair'),
            "param_name" => "phonerepair_bg_image",
        )
        );
vc_add_param("vc_tab",
        array(
            "type" => "dropdown", // it will bind a img choice in WP
            "heading" => esc_html__("Background position H", 'phonerepair'),
            "param_name" => "phonerepair_bg_position_h",
            "value" => array(
              "Left" => "left",
              "Right" => "right",
              "Center" => "center"
            ),
        )
        );
vc_add_param("vc_tab",
        array(
            "type" => "dropdown", // it will bind a img choice in WP
            "heading" => esc_html__("Background position V", 'phonerepair'),
            "param_name" => "phonerepair_bg_position_v",
            "value" => array(
              "Top" => "top",
              "Bottom" => "bottom",
              "Center" => "center"
            ),
        )
        );
vc_add_param("vc_tab",
        array(
            "type" => "dropdown", // it will bind a img choice in WP
            "heading" => esc_html__("Background Repeat", 'phonerepair'),
            "param_name" => "phonerepair_bg_repeat",
            "value" => array(
              "repeat-x" => "repeat-x",
              "repeat-y" => "repeat-y",
              "repeat" => "repeat-x",
              "no-repeat" => "no-repeat"
            ),
        )
        );


/*============================= Row =====================================*/

vc_add_param("vc_row",
	array(
		'type' => 'colorpicker',
		'heading' => esc_html__( 'Text Color', 'phonerepair' ),
		'param_name' => 'font_color',
		'description' => esc_html__( 'Select font color', 'phonerepair' ),
	)
);
vc_add_param("vc_row", array(
  "type" => "checkbox",
  "class" => "",
  "heading" => "Parallax",
  "param_name" => "parallax",
  "value" => array("Use background as parallax ?" => "yes" )
));
vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Parallax Speed",
	"param_name" => "speed",
	'dependency' => array(
		'element' => 'parallax',
		'not_empty' => true,
	),
));
vc_add_param("vc_row", array(
  "type" => "checkbox",
  "class" => "",
  "heading" => "Equal Height Columns",
  "param_name" => "equalizer",
  "value" => array("Create equal height content on your row ?" => "yes" )
));

vc_add_param("vc_row", array(
	"type" => "textfield",
	"class" => "",
	"heading" => "Animation Delay (ms)",
	"param_name" => "animation_delay",
	"description"     => "Animation delay to add to this row children.",
	/*'dependency' => array(
		'element' => 'parallax',
		'not_empty' => true,
	),*/
));

/*============================= Columns  =====================================*/
vc_add_param("vc_column", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "Equal Height Columns",
	"param_name" => "equalizer_column",
	"value" => array("Create equal height content on your column ?" => "yes" )
));
vc_add_param("vc_column_inner", array(
	"type" => "checkbox",
	"class" => "",
	"heading" => "Equal Height Columns",
	"param_name" => "equalizer_column_inner",
	"value" => array("Create equal height content on your column ?" => "yes" )
));

vc_map( array(
    "name"            => esc_html__("phonerepair_last_post", 'phonerepair'), // add a name
    "base"            => "phonerepair_last_post", // bind with our shortcode
    "description"     => "You can add a prince table",
    "content_element" => true, // set this parameter when element will has a content
    "is_container"    => FALSE, // set this param when you need to add a content element in this element
    // Here starts the definition of array with parameters of our compnent
    "params" => array( 
        array(
            "type" => "textfield",
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ), 
        array(
            "type" => "textarea",
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ),
        
        
    )
) );

/* our client
---------------------------------------------------------- */
vc_map( array(
    "name" => esc_html__("Carousel Client", 'phonerepair'),
    "base" => "phonerepair_client",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, 
    "is_container" => FALSE,
    "params" => array(         
		array(
			'type' => 'attach_images',
			'heading' => esc_html__( 'Images', 'phonerepair' ),
			'param_name' => 'images',
			
		),array(
            "type" => "dropdown", // it will bind a textfield in WP
            "heading" => esc_html__("Columns", 'phonerepair'),
            "param_name" => "columns",
             "value" => array('1','2','3','4','5','6','7'),
        ),
        $vc_add_css_animation
    )
) );
/* recent blog
---------------------------------------------------------- */
vc_map( array(
    "name" => esc_html__("Recent blog", 'phonerepair'),
    "base" => "phonerepair_blog",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, 
    "is_container" => FALSE,
     "params" => array( 
     array(
            "type" => "dropdown", // it will bind a textfield in WP
            "heading" => esc_html__("Style", 'phonerepair'),
            "param_name" => "style",
             "value" => array('Default'=>'style2','Small'=>'style1'),
        ),        
		array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Items to display", 'phonerepair'),
            "param_name" => "itemperpage",
        ),
    array(
            "type" => "dropdown", // it will bind a textfield in WP
            "heading" => esc_html__("Columns", 'phonerepair'),
            "param_name" => "columns",
             "value" => array('1','2','3','4','5','6','7'),
        ),
    $vc_add_css_animation
    
        
        )
) );
//-----------------portfolio------------------*/

get_template_part('inc/vcomposer/vc_elements/wd_portfolio');

/*--------------progress bars -------------------------*/
vc_map( array(
    "name" => esc_html__("Progress bars", 'phonerepair'),
    "base" => "phonerepair_progress_bars",
    "content_element" => true, 
    "is_container" => true,
    "params" => array( 
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar title", 'phonerepair'),
            "param_name" => "progress_title1",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar longer", 'phonerepair'),
            "param_name" => "progress_meter1",
        ),
        
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar title", 'phonerepair'),
            "param_name" => "progress_title2",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar longer", 'phonerepair'),
            "param_name" => "progress_meter2",
        ),
        
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar title", 'phonerepair'),
            "param_name" => "progress_title3",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar longer", 'phonerepair'),
            "param_name" => "progress_meter3",
        ),
        
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar title", 'phonerepair'),
            "param_name" => "progress_title4",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Progress bar longer", 'phonerepair'),
            "param_name" => "progress_meter4",
        ),
        $vc_add_css_animation
        
    )
) );
/*********---------team--------------------------*/
  vc_map( array(
    "name" => esc_html__("Team", 'phonerepair'), // add a name
    "base" => "phonerepair_team", // bind with our shortcode
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, // set this parameter when element will has a content
    "is_container" => FALSE, // set this param when you need to add a content element in this element
    // Here starts the definition of array with parameters of our compnent
    "params" => array( 
        array(
            "type" => "dropdown", // it will bind a textfield in WP
            "heading" => esc_html__("Columns", 'phonerepair'),
            "param_name" => "columns",
             "value" => array('1','2','3','4','5','6','7'),
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Items Per Page", 'phonerepair'),
            "param_name" => "itemperpage",
        ),
        $vc_add_css_animation
    )
) );
/*********---------testimonial--------------------------*/
  vc_map( array(
    "name" => esc_html__("Testimonail", 'phonerepair'), // add a name
    "base" => "phonerepair_testimonial", // bind with our shortcode
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, // set this parameter when element will has a content
    "is_container" => FALSE, // set this param when you need to add a content element in this element
    // Here starts the definition of array with parameters of our compnent
    "params" => array( 
       
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Items Per Page", 'phonerepair'),
            "param_name" => "itemperpage",
        ),
        array(
            "type" => "dropdown", // it will bind a textfield in WP
            "heading" => esc_html__("Show", 'phonerepair'),
            "param_name" => "show",
             "value" => array('1','2'),
        ),
        $vc_add_css_animation
    )
) );

/*--------------------one post---------------*/

$posts = get_posts(array('post_type' => 'portfolio'));
$posts_array = array();

foreach ( $posts as $key => $post ) {
	$posts_array[$post->post_title] = $post->ID;
}

vc_map( array(
    "name" => esc_html__("one post", 'phonerepair'),
    "base" => "phonerepair_one_post",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, 
    "is_container" => FALSE,
    "params" => array(         
		array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea", // it will bind a textfield in WP
            "heading" => esc_html__("Description", 'phonerepair'),
            "param_name" => "discription",
        ),
        array(
            "type" => "vc_link", // it will bind a textfield in WP
            "heading" => esc_html__("Link to page", 'phonerepair'),
            "param_name" => "link",
        ),
        array(
            "type" => "dropdown", // it will bind a textfield in WP
            "heading" => esc_html__("Project", 'phonerepair'),
            "param_name" => "post_id", 
            "value" => $posts_array,
      			
			  ),
        $vc_add_css_animation
    )
) );

// *******************************************************************
// COUNTUP
// -------------------------------------------------------------------
vc_map( array(
    "name" => esc_html__("Count UP", 'phonerepair'),
    "base" => "phonerepair_count_up",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, 
    "is_container" => FALSE,
    "params" => array( 
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("countto", 'phonerepair'),
            "param_name" => "countto",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("time", 'phonerepair'),
            "param_name" => "time",
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__("Display image instead of icon", 'phonerepair'),
            "param_name" => "image_checkbox",
            'value' => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
        ),
        array(
            "type" => "attach_image", // it will bind a img choice in WP
            "heading" => esc_html__("Image", 'phonerepair'),
            "param_name" => "image",
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Icon', 'phonerepair' ),
          'param_name' => 'icon',
          'value' => $icons,
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'style', 'phonerepair' ),
          'param_name' => 'style',
          'value' => array('style1' => 'Style 1',
                           'style2' => 'Style 2',
                           'style3' => 'Style 3',
                         ),
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        $vc_add_css_animation
    )
) );

//____________map ___________
vc_map( array(
  "name" => esc_html__("Google Map", 'phonerepair'),
  "base" => "webdevia_google_map",
  "icon" => get_template_directory_uri()."/images/icon/meknes.png",
  "content_element" => true,
  "is_container" => FALSE,
  "params" => array(
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Title", 'phonerepair'),
      "param_name" => "title",
    ),
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Company Name", 'phonerepair'),
      "param_name" => "company_name",
    ),
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Latitude", 'phonerepair'),
      "param_name" => "latitude",
    ),
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Longitude", 'phonerepair'),
      "param_name" => "longitude",
    ),
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Map Height", 'phonerepair'),
      "param_name" => "map_height",
    ),
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Zoom", 'phonerepair'),
      "param_name" => "zoom",
    ),
    array(
      "type" => "textfield", // it will bind a textfield in WP
      "heading" => esc_html__("Description", 'phonerepair'),
      "param_name" => "description",
    ),

  )
) );
// PIE CHART
// -------------------------------------------------------------------
vc_map( array(
    "name" => esc_html__("Pie Chart", 'phonerepair'),
    "base" => "phonerepair_chart_pie",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, 
    "is_container" => FALSE,
    "params" => array( 
        array(
              "type" => "textfield", // it will bind a textfield in WP
              "heading" => esc_html__("title", 'phonerepair'),
              "param_name" => "title",
          ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("value", 'phonerepair'),
            "param_name" => "value",
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'style', 'phonerepair' ),
          'param_name' => 'style',
          'value' => array('style1' => 1,
                           'style2' => 2,
                           'style3' => 3,
                         ),
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        $vc_add_css_animation
    )
) );

/* Feature Box
---------------------------------------------------------- */
vc_map( array(
    "name" => esc_html__("Featured Box", 'phonerepair'),
    "base" => "phonerepair_featured_box",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, 
    "is_container" => FALSE,
    "params" => array(
		    array(
			    'type' => 'colorpicker',
			    'heading' => esc_html__( 'Backround Color', 'phonerepair' ),
			    'param_name' => 'background_color',
			    'description' => esc_html__( 'Select font color', 'phonerepair' ),
		    ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea", // it will bind a textfield in WP
            "heading" => esc_html__("Text", 'phonerepair'),
            "param_name" => "text",
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__("Display image instead of icon", 'phonerepair'),
            "param_name" => "image_checkbox",
            'value' => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
        ),
        array(
            "type" => "attach_image", // it will bind a img choice in WP
            "heading" => esc_html__("Image", 'phonerepair'),
            "param_name" => "image",
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Icon', 'phonerepair' ),
          'param_name' => 'icon',
          'value' => $icons,
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Layout', 'phonerepair' ),
          'param_name' => 'layout',
          'value' => array('Layout 1' => 1,
                           'Layout 2' => 2,
                           'Layout 3' => 3,
                           'Layout 4' => 4,
                           'Layout 5' => 5,
                           'Layout 5 inverse' => '5-inverse',
                           'Layout 6' => 6,
                           'Layout 7' => 7,
                           'Layout 8' => 8,
                         ),
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        array(
            "type" => "vc_link", // it will bind a textfield in WP
            "heading" => esc_html__("URL to :", 'phonerepair'),
            "param_name" => "url",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Extra Classes", 'phonerepair'),
            "param_name" => "extra_classes",
        ),
	      $vc_add_css_animation
    )
) );

/* Graph
---------------------------------------------------------- */
vc_map( array(
    "name" => esc_html__("Text Block with Icon", 'phonerepair'),
    "base" => "phonerepair_icon_text",
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true,
    "is_container" => FALSE,
    "params" => array(
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea", // it will bind a textfield in WP
            "heading" => esc_html__("Text", 'phonerepair'),
            "param_name" => "text",
        ),
        array(
            "type" => "checkbox",
            "heading" => esc_html__("Display image instead of icon", 'phonerepair'),
            "param_name" => "image_checkbox",
            'value' => array( esc_html__( 'Yes, please', 'phonerepair' ) => 'yes' ),
        ),
        array(
            "type" => "attach_image", // it will bind a img choice in WP
            "heading" => esc_html__("Image", 'phonerepair'),
            "param_name" => "image",
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Icon', 'phonerepair' ),
          'param_name' => 'icon',
          'value' => $icons,
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        array(
          'type' => 'dropdown',
          'heading' => esc_html__( 'Layout', 'phonerepair' ),
          'param_name' => 'layout',
          'value' => array('Layout 1' => 1,
                           'Layout 2' => 2,
                           'Layout 3' => 3,
                           'Layout 4' => 4,
                           'Layout 5' => 5,
                           'Layout 5 inverse' => '5-inverse',
                           'Layout 6' => 6,
                           'Layout 7' => 7,
                           'Layout 8' => 8,
                         ),
          'description' => esc_html__( 'Select the icon to use.', 'phonerepair' ),
          'admin_label' => true
        ),
        array(
            "type" => "vc_link", // it will bind a textfield in WP
            "heading" => esc_html__("URL to :", 'phonerepair'),
            "param_name" => "url",
        ),
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Extra Classes", 'phonerepair'),
            "param_name" => "extra_classes",
        ),
	      $vc_add_css_animation
    )
) );
// Flip image
 vc_map( array(
    "name" => esc_html__("Flip image", 'phonerepair'), // add a name
    "base" => "phonerepair_flip_image", // bind with our shortcode
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, // set this parameter when element will has a content
    "is_container" => FALSE, // set this param when you need to add a content element in this element
    // Here starts the definition of array with parameters of our compnent
    "params" => array(
        array(
            "type" => "attach_image", // it will bind a img choice in WP
            "heading" => esc_html__("Image", 'phonerepair'),
            "param_name" => "image",
        ),
 
        array(
            "type" => "textfield", // it will bind a textfield in WP
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea", // it will bind a textarea in WP
            "heading" => esc_html__("Text", 'phonerepair'),
            "param_name" => "text",
        ),
        $vc_add_css_animation
    )
) );


 vc_map( array(
    "name" => esc_html__("Wd Modal", 'phonerepair'), // add a name
    "base" => "phonerepair_modal", // bind with our shortcode
    "icon" => get_template_directory_uri()."/images/icon/meknes.png",
    "content_element" => true, // set this parameter when element will has a content
    "is_container" => FALSE, // set this param when you need to add a content element in this element
    // Here starts the definition of array with parameters of our compnent
    "params" => array(
 
        array(
            "type" => "textarea_html", // it will bind a textfield in WP
            "heading" => esc_html__("Title", 'phonerepair'),
            "param_name" => "title",
        ),
        array(
            "type" => "textarea", // it will bind a textarea in WP
            "heading" => esc_html__("Text", 'phonerepair'),
            "param_name" => "text",
        )
    )
) );











 
// This function provides a functionality of adding content elements into element
class WPBakeryShortCode_SC_Slide extends WPBakeryShortCodesContainer {}