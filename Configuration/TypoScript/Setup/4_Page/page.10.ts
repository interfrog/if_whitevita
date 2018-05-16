page = PAGE
page {
  typeNum = 0

  bodyTagCObject = TEXT
  bodyTagCObject.value = <body data-pageid="{TSFE:id}" data-title="{page:title}">
  bodyTagCObject.insertData = 1

  10 = FLUIDTEMPLATE
  10 {
    file = EXT:{$config.extensionDirectory}/Resources/Private/Templates/DefaultTemplate.html
    partialRootPath = EXT:{$config.extensionDirectory}/Resources/Private/Partials/
    layoutRootPath = EXT:{$config.extensionDirectory}/Resources/Private/Layouts/
    variables {

      headerContent < lib.headerContent
      mainContent < lib.mainContent
      asideContent < lib.asideContent
      footerContent < lib.footerContent

      pagetitle < lib.pagetitle
      test < page.11

      legalMenu < lib.menu.legal
      socialMenu < lib.menu.social
      mainMenu < lib.menu.main
      offCanvas < lib.menu.offcanvas
      
      avatar < lib.site.avatar
      page = TEXT
      page.field = uid
      pageTitle = TEXT
      pageTitle.field = title
      pageLayout = TEXT
      pageLayout {
        field = layout
        ifEmpty.data = levelfield:-2, layout, slide
      }
      rootPageUid = TEXT
      rootPageUid.data = leveluid: 0
      backendLayout = TEXT
      backendLayout {
        field = backend_layout
        ifEmpty.data = levelfield:-2, backend_layout_next_level, slide
        stdWrap.replacement {
          10 {
            search = file__
            replace =
          }
        }
      }
      fblike = TEXT
      fblike {
        data = levelfield:-1, fblike, slide
        override.field = fblike
        if.equals {
          data = levelfield:-1, fblike, slide
          override.field = fblike
        }
        if.value = disable
        if.negate = 1
      }
      twitter < .fblike
      twitter {
        data = levelfield:-1, twitter, slide
        override.field = twitter
        if.equals {
          data = levelfield:-1, twitter, slide
          override.field = twitter
        }
      }
      googleplus < .fblike
      googleplus {
        data = levelfield:-1, googleplus, slide
        override.field = googleplus
        if.equals {
          data = levelfield:-1, googleplus, slide
          override.field = googleplus
        }
      }
      pageURL = TEXT
      pageURL {
        value = 1
        typolink.parameter.data = TSFE:id
        typolink.addQueryString = 1
        typolink.addQueryString.method = get
        typolink.returnLast = url
        stdWrap.wrap = {$config.baseURL}|
      }
      year = TEXT
      year {
        data = date:U
        strftime = %Y
      }
    }
    
    dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\DatabaseQueryProcessor
    dataProcessing.10 {
      table = tx_ifthemeconfiguration_domain_model_themeconfiguration
      pidInList.data = leveluid : 0
      as = themeconfig
      dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
          references.fieldName = avatar
          references.table = tx_ifthemeconfiguration_domain_model_themeconfiguration
          as = avatar
        }
        20 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        20 {
          references.fieldName = footeravatar
          references.table = tx_ifthemeconfiguration_domain_model_themeconfiguration
          as = footeravatar
        }
      }
    }
  }


  999 = COA
  999 {
    if.isTrue.field = gacode
    10 = CONTENT
    10 {
      table = tx_ifthemeconfiguration_domain_model_themeconfiguration
      select {
        pidInList.data = leveluid : 0
        max = 1
      }
      renderObj = CASE
      renderObj {
        key.field = anonymizeip
        default = TEXT
        default.value (
          <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', '{field:gacode}', 'auto');
            ga('set', 'anonymizeIp', true);
            ga('send', 'pageview');

          </script>
        )
        0 = TEXT
        0.value (
          <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', '{field:gacode}', 'auto');
            ga('send', 'pageview');
          </script>
        )
      }
    }
  }
}
