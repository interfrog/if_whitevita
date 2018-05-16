#
# Table structure for table 'pages'
#
CREATE TABLE pages (
	iconconfig varchar(255) DEFAULT '' NOT NULL,
	seotitle varchar(255) DEFAULT '' NOT NULL,
    robots varchar(255) DEFAULT '' NOT NULL,
    canonical varchar(255) DEFAULT '' NOT NULL,
    fblike varchar(255) DEFAULT '0' NOT NULL,
    twitter varchar(255) DEFAULT '0' NOT NULL,
    googleplus varchar(255) DEFAULT '0' NOT NULL,
);


#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    subtitle varchar(255) DEFAULT '' NOT NULL,
    fullscreen tinyint(4) DEFAULT '0' NOT NULL,
    hidemobile tinyint(4) DEFAULT '0' NOT NULL,
    hidedesktop tinyint(4) DEFAULT '0' NOT NULL,
    roundimage tinyint(4) DEFAULT '0' NOT NULL,
    url varchar(255) DEFAULT '' NOT NULL,
    sourcetype varchar(255) DEFAULT '' NOT NULL,
    ratio varchar(255) DEFAULT '' NOT NULL,
    autoplay tinyint(4) DEFAULT '0' NOT NULL,
    showrel tinyint(4) DEFAULT '0' NOT NULL,
    showinfo tinyint(4) DEFAULT '0' NOT NULL,
    videoloop tinyint(4) DEFAULT '0' NOT NULL,
);

CREATE TABLE tx_ifthemeconfiguration_domain_model_themeconfiguration (

    maxwidth int(11) unsigned DEFAULT '0' NOT NULL,
    pagebg int(11) unsigned DEFAULT '0' NOT NULL,

    pagetitle varchar(255) DEFAULT '' NOT NULL,
    pagetitlecolor int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitlefont int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitlestyle varchar(255) DEFAULT 'normal' NOT NULL,
    pagetitleweight varchar(255) DEFAULT '400' NOT NULL,
    pagetitle2 varchar(255) DEFAULT '' NOT NULL,
    pagetitle2color int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitle2font int(11) unsigned DEFAULT '0' NOT NULL,
    pagetitle2style varchar(255) DEFAULT 'normal' NOT NULL,
    pagetitle2weight varchar(255) DEFAULT '400' NOT NULL,

    defaulttext int(11) unsigned DEFAULT '0' NOT NULL,
    fontsize int(11) DEFAULT '14' NOT NULL,
    generalfont int(11) unsigned DEFAULT '0' NOT NULL,
    fontweight varchar(255) DEFAULT '400' NOT NULL,

    avatar varchar(255) DEFAULT '' NOT NULL,
    avatarwidth int(11) DEFAULT '0' NOT NULL,
    avatarheight int(11) DEFAULT '0' NOT NULL,
    roundedcorner tinyint(4) DEFAULT '1' NOT NULL,

    socialmenupid int(11) DEFAULT '0' NOT NULL,
    socialmenutext int(11) unsigned DEFAULT '0' NOT NULL,
    socialmenubackground int(11) unsigned DEFAULT '0' NOT NULL,
    socialmenuborder int(11) unsigned DEFAULT '0' NOT NULL,
    socialmenuhinttext int(11) unsigned DEFAULT '0' NOT NULL,
    socialmenuhintbackground int(11) unsigned DEFAULT '0' NOT NULL,

    legalmenupid int(11) DEFAULT '0' NOT NULL,
    legalmenutext int(11) unsigned DEFAULT '0' NOT NULL,
    legalmenubackground int(11) unsigned DEFAULT '0' NOT NULL,

    headerbackground int(11) unsigned DEFAULT '0' NOT NULL,

    slidebarbackground int(11) unsigned DEFAULT '0' NOT NULL,
    navtext int(11) unsigned DEFAULT '0' NOT NULL,
    navbordercolor int(11) unsigned DEFAULT '0' NOT NULL,
    navtexthover int(11) unsigned DEFAULT '0' NOT NULL,
    navtextactive int(11) unsigned DEFAULT '0' NOT NULL,

    offcanvasopener int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvastext int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasbackground int(11) unsigned DEFAULT '0' NOT NULL,
    offcanvasactive int(11) unsigned DEFAULT '0' NOT NULL,
    footertext int(11) unsigned DEFAULT '0' NOT NULL,
    footerbackground int(11) unsigned DEFAULT '0' NOT NULL,
    footeravatar varchar(255) DEFAULT '' NOT NULL,

    h1 int(11) unsigned DEFAULT '0' NOT NULL,
    h1font int(11) unsigned DEFAULT '0' NOT NULL,
    h1style varchar(255) DEFAULT 'normal' NOT NULL,
    h1weight varchar(255) DEFAULT '400' NOT NULL,
    h2 int(11) unsigned DEFAULT '0' NOT NULL,
    h2font int(11) unsigned DEFAULT '0' NOT NULL,
    h2style varchar(255) DEFAULT 'normal' NOT NULL,
    h2weight varchar(255) DEFAULT '400' NOT NULL,
    h3 int(11) unsigned DEFAULT '0' NOT NULL,
    h3font int(11) unsigned DEFAULT '0' NOT NULL,
    h3style varchar(255) DEFAULT 'normal' NOT NULL,
    h3weight varchar(255) DEFAULT '400' NOT NULL,
    h4 int(11) unsigned DEFAULT '0' NOT NULL,
    h4font int(11) unsigned DEFAULT '0' NOT NULL,
    h4style varchar(255) DEFAULT 'normal' NOT NULL,
    h4weight varchar(255) DEFAULT '400' NOT NULL,
    h5 int(11) unsigned DEFAULT '0' NOT NULL,
    h5font int(11) unsigned DEFAULT '0' NOT NULL,
    h5style varchar(255) DEFAULT 'normal' NOT NULL,
    h5weight varchar(255) DEFAULT '400' NOT NULL,

    formfieldbackground int(11) unsigned DEFAULT '0' NOT NULL,
    formborder int(11) unsigned DEFAULT '0' NOT NULL,
    formborderfocus int(11) unsigned DEFAULT '0' NOT NULL,
    formbutton int(11) unsigned DEFAULT '0' NOT NULL,
    formbuttonhover int(11) unsigned DEFAULT '0' NOT NULL,

    link int(11) unsigned DEFAULT '0' NOT NULL,
    linkhover int(11) unsigned DEFAULT '0' NOT NULL,    

    overlayboxtext int(11) unsigned DEFAULT '0' NOT NULL,    
    overlayboxbackground int(11) unsigned DEFAULT '0' NOT NULL,
    divider int(11) unsigned DEFAULT '0' NOT NULL,
    
    usetracking tinyint(4) DEFAULT '1' NOT NULL,
    gacode varchar(255) DEFAULT '' NOT NULL,
    anonymizeip tinyint(4) DEFAULT '1' NOT NULL,
);