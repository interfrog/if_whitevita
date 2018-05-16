lib.menu.offcanvas = COA
lib.menu.offcanvas {
	10 = COA
	10 {
    wrap = <ul>|</ul>
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
  			ACT {
  				wrapItemAndSub = <li class="active">|</li>	
  			}
        IFSUB = 1
        IFSUB < .NO
        IFSUB {
          linkWrap = | <a href="#" class="subOpener" data-status="close"><span class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 197.402 197.402" style="enable-background:new 0 0 197.402 197.402;" xml:space="preserve"><polygon points="146.883,197.402 45.255,98.698 146.883,0 152.148,5.418 56.109,98.698 152.148,191.98"/></svg></span></a>
        }
        ACTIFSUB = 1
        ACTIFSUB < .ACT
        ACTIFSUB {
          linkWrap = | <a href="#" class="subOpener" data-status="open"><span class="icon"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 197.402 197.402" style="enable-background:new 0 0 197.402 197.402;" xml:space="preserve"><polygon points="146.883,197.402 45.255,98.698 146.883,0 152.148,5.418 56.109,98.698 152.148,191.98"/></svg></span></a>
        }
  		}
  		2 < .1
      2.wrap = <ul>|</ul>
  		3 < .1
      3.wrap = <ul>|</ul>
  		4 < .1
      4.wrap = <ul>|</ul>
    }
	}
	20 = TEXT
	20.value = <hr>
	30 < .10.20
  30.special = directory
	30.special.value.cObject < lib.legalMenuPid
  30.wrap = <ul>|</ul>
}