tt_content {
  # Define different wrappers for content elements depending on the page column
  stdWrap.outerWrap.cObject = CASE
  stdWrap.outerWrap.cObject {
    # Define wrappers for each column position (colPos 0,1,2,3)
    key.field = colPos
    
    # Default is no wrapper
    default = TEXT
    default.value = |
    
    # Add wrapper for content in right column (colPos=2)
    #2 = CASE
    #2 {
      # Add wrapping to all content elements
      #default = TEXT
      #default.value = <div class="contentRight">|</div>
      
      # But - exclude inserted records from being wrapped
      #key.field = CType
      #shortcut = TEXT
      #shortcut.value = |
      #image = TEXT
      #image.value = |
      #html = TEXT
      #html.value = |
    #}

  }
}