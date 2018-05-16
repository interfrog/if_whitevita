config {
  baseURL = http://domain.de/
  facebookURL = http://domain.de
  secureBaseURL = https://domain.de/

  additionalPageTitle = - ifPage White Vita
  copyright = Copyright © 2016 Interfrog Produktion GmbH

  #Insert new extension path
  extensionDirectory = if_whitevita

  jsPath = EXT:{$config.extensionDirectory}/Resources/Public/Scripts
  absoluteJsPath = typo3conf/ext/{$config.extensionDirectory}/Resources/Public/Scripts
  cssPath = EXT:{$config.extensionDirectory}/Resources/Public/Styles
  htmlPath = EXT:{$config.extensionDirectory}/Resources/Public
  imagePath = EXT:{$config.extensionDirectory}/Resources/Public/Assets
  absoluteImagePath = typo3conf/ext/{$config.extensionDirectory}/Resources/Public/Images
  demoPath = EXT:{$config.extensionDirectory}/Resources/Public
  pluginPath = EXT:{$config.extensionDirectory}/Plugins
  fluidPath = EXT:{$config.extensionDirectory}/Resources/Private/

  jsPathBase = EXT:{$config.extensionDirectory}/Resources/Public/Scripts
  cssPathBase = EXT:{$config.extensionDirectory}/Resources/Public/Styles

  mainNavigationPid = 6
  #Footer Navigation mainly used for SEO reasons
  footerNavigationPid = 1
  #System Navigation contains typical points for legal reasons like imprint and disclaimer

  googleAnalyticsCode = UA-XXXXXXX-1
}

[globalString = ENV:TYPO3_CONTEXT = Development]
config {
  baseURL = http://whitevita.dev/
  facebookURL = http://whitevita.dev
  secureBaseURL = https://whitevita.dev/
}
[globalString = ENV:TYPO3_CONTEXT = Production/Staging]
config {
  baseURL = http://whitevita.staging.webseiten.cc/
  facebookURL = http://whitevita.staging.webseiten.cc
  secureBaseURL = https://whitevita.staging.webseiten.cc/
}
[globalString = ENV:TYPO3_CONTEXT = Production]
config {
  baseURL = http://whitevita.ifpage.de/
  facebookURL = http://whitevita.ifpage.de
  secureBaseURL = https://whitevita.ifpage.de/
}
[global]
