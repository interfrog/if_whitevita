lib.legalMenuPid = CONTENT
lib.legalMenuPid {
	table = tx_ifthemeconfiguration_domain_model_themeconfiguration
	select {
		pidInList.data = leveluid : 0
		max = 1
	}
	renderObj = TEXT
	renderObj.field = legalmenupid
}

lib.menu.legal = HMENU
lib.menu.legal {
	special = directory
	special.value.cObject < lib.legalMenuPid
	wrap = <div class="legalMenu">|</div>
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
	}
}