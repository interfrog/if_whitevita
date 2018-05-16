lib.site.avatar = CONTENT
lib.site.avatar {
  table = tx_ifthemeconfiguration_domain_model_themeconfiguration
  select {
    pidInList.data = leveluid : 0
    max = 1
  }
  renderObj = FILES
  renderObj {
    references {
        table = tx_ifthemeconfiguration_domain_model_themeconfiguration
        uid.field = uid
        fieldName = avatar
    }     
    renderObj = IMAGE
    renderObj{
      file {
        import.data = file:current:publicUrl
        treatIdAsReference = 1
        width.cObject = TEXT
        width.cObject {
          field = avatarwidth
          override.field = avatarheight
          override.noTrimWrap = |c
          override.if.isTrue.field = avatarheight
        }
        height.cObject = TEXT
        height.cObject {
          field = avatarwidth
          noTrimWrap = |c
          noTrimWrap.if.isFalse.field = avatarheight
          override.field = avatarheight
        }
      }
    } 
  }
}