plugin.tx_news {
  settings {
    cssFile >
    displayDummyIfNoMedia = 0
    detail {
      media.image {
        maxWidth = 650
        maxHeight = 500
        lightbox {
          maxWidth = 1000
          maxHeight = 1000
        }
      }

      showSocialShareButtons = 0
      attachement {
        media {
          image.width = 140c
          image.height = 100c
        }
        video {
          width = 205
          height = 188
        }
      }
    }
    facebookLocale = de_DE
    googlePlusLocale = de
    disqusLocale = de
    list {
      media.image.maxWidth = 250
      media.image.maxHeight = 150
      paginate {
        itemsPerPage = 5
        insertAbove = 0
        pagesBefore = 6
        pagesAfter = 6
        lessPages = 0
      }
    }
    cropMaxCharacters = 350
  }
  view {
    templateRootPaths.100 = {$config.pluginPath}/news/Templates/
    layoutRootPaths.100 = {$config.pluginPath}/news/Layouts/
    partialRootPaths.100 = {$config.pluginPath}/news/Partials/
  }
}