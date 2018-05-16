lib.mainContent = CONTENT
lib.mainContent {
  table = tt_content
  select {
    where = colPos = 0
    orderBy = sorting
    languageField = sys_language_uid
  }
}