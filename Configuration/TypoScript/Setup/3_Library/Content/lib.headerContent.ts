lib.headerContent = CONTENT
lib.headerContent {
  table = tt_content
  select {
    where = colPos = 1
    orderBy = sorting
    languageField = sys_language_uid
  }
  renderObj < tt_content
  renderObj.stdWrap.outerWrap.cObject >
  renderObj.stdWrap.outerWrap.cObject = CASE
  renderObj.stdWrap.outerWrap.cObject {
  	key.field = fullscreen
  	default = TEXT
  	default.value = <div class="innerWrap">|</div>
  	1 = TEXT
  	1.value = |
  }
}
