lib.menu.main = COA
lib.menu.main {
  wrap = <ul class="Level1">|</ul>
  10 = TEXT
  10 {
    data = leveltitle : 0
    typolink.parameter.data = leveluid:0
    wrap = <li>|</li>
    wrap.override = <li class="active">|</li>
    wrap.override.if.equals.data = page:uid
    wrap.override.if.value.cObject = TEXT
    wrap.override.if.value.cObject.data = leveluid:0
  }
  20 = HMENU
  20 {
    1 = TMENU
    1 {
      expAll = 1
      NO = 1
      NO {
        doNotLinkIt = 1
        wrapItemAndSub = <li>|</li>
        stdWrap.cObject = CASE
        stdWrap.cObject {
          key.field = doktype
          default = TEXT
          default.field = nav_title // title
          default.typolink.parameter.field = uid
          default.typolink.title.cObject = TEXT
          default.typolink.title.cObject.field = title
          3 < .default
          3.typolink.parameter.field >
          3.typolink.parameter = //{field:url}
          3.typolink.parameter.insertData = 1
          4 < .default
          4.typolink.parameter.field = shortcut
        }
      }
      ACT = 1
      ACT < .NO
      ACT.wrapItemAndSub = <li class="active">|</li>
      IFSUB = 1
      IFSUB < .NO
      IFSUB.wrapItemAndSub = <li class="dropdown">|</li>
      ACTIFSUB = 1
      ACTIFSUB < .NO
      ACTIFSUB.wrapItemAndSub = <li class="dropdown active">|</li>
    }
    2 < .1
    2.wrap = <ul class="submenu Level2">|</ul>
    3 < .1
    3.wrap = <ul class="submenu Level3">|</ul>
    4 < .1
    4.wrap = <ul class="submenu Level4">|</ul>
  }
}
