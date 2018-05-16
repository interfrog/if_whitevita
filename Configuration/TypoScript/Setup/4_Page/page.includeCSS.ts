page {
  includeCSS {

    #Embed fontawesome if wanted
    fontawesome = https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css
    fontawesome {
      excludeFromConcatenation = 1
      external = 1
      disableCompression = 1
    }
    fancyBoxCSS = {$config.htmlPath}/Vendor/fancybox/jquery.fancybox.css

  }
}
