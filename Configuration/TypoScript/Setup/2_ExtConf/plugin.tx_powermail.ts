plugin.tx_powermail {
  view {
    templateRootPaths {
      1 = {$config.pluginPath}/powermail/Templates/
    }
    layoutRootPaths {
      1 = {$config.pluginPath}/powermail/Layouts/
    }
    partialRootPaths {
      1 = {$config.pluginPath}/powermail/Partials/
    }
  }
}

#remove all Powermail-Javascript
page.includeJSFooterlibs {
	powermailJQuery >
	powermailJQueryUi >
	powermailJQueryUiDatepicker >
	powermailJQueryFormValidationLanguage >
	powermailJQueryFormValidation >
	powermailJQueryTabs >
	powermailForm >
	powermail_frontend >
}