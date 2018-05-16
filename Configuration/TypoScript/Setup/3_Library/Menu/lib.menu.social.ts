lib.socialMenuPid = CONTENT
lib.socialMenuPid {
	table = tx_ifthemeconfiguration_domain_model_themeconfiguration
	select {
		pidInList.data = leveluid : 0
		max = 1
	}
	renderObj = TEXT
	renderObj {
		field = socialmenupid
	}
}

lib.menu.social = HMENU
lib.menu.social {
	special = directory
	special.value.cObject < lib.socialMenuPid
	wrap = <div class="socialMenu">|</div>
	1 = TMENU
	1 {
		wrap = <ul>|</ul>
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
	          default.typolink.ATagParams = class="noIcon"
	          3 < .default
	          3.typolink.parameter.field >
	          3.typolink.parameter = //{field:url}
	          3.typolink.parameter.insertData = 1
	          4 < .default
	          4.typolink.parameter.field = shortcut
	        }
			stdWrap.override.stdWrap.cObject = COA
			stdWrap.override.stdWrap.cObject {
				if.isTrue.field = iconconfig
				10 = TEXT
				10.value = <i class="{field:iconconfig}"></i>
				10.insertData = 1
				20 = TEXT
				20.field = title
				20.wrap = <div class="hint">|</div>
				stdWrap.typolink {
					parameter.stdWrap.cObject = CASE
					parameter.stdWrap.cObject {
						key.field = doktype
						default = TEXT
						default.field = uid
						3 = TEXT
						3.value = //{field:url}
						3.insertData = 1
						4 = TEXT
						4.field = shortcut
					}
					ATagParams = class="icon"
				}
			}
		}
	}
}