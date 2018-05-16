tx_gridelements.setup.fullslider {
	title = Content-Element Slider
	description = Erzeugt einen Slider aus Content-Elementen. Ein Fullscreen-Header ist ausschließlich im Kopfbereich erlaubt.
	topLevelLayout = 1
    config {
		colCount = 1
		rowCount = 1
		rows {
			1 {
				columns {
					1 {
						name = Slide Elemente
						colPos = 10
                        allowed = text,textpic,image
					}
				}
			}
		}
    }
	flexformDS (
    <T3DataStructure>
        <meta type="array">
        <langDisable>1</langDisable>
        </meta>
        <ROOT type="array">
            <el type="array">
                <fullscreen type="array">
                    <TCEforms type="array">
                        <label>Fullscreen aktivieren</label>
                        <config>
                            <type>check</type>
                            <default>1</default>
                        </config>
                    </TCEforms>
                </fullscreen>
                <showLogo type="array">
                    <TCEforms type="array">
                        <label>Zeige Firmenlogo im Slider</label>
                        <config>
                            <type>check</type>
                        </config>
                    </TCEforms>
                </showLogo>
                <slideSpeed type="array">
                    <TCEforms type="array">
                        <label>Geschwindigkeit der Slidebewegung</label>
                        <config>
                            <type>input</type>
                            <size>20</size>
                            <max>30</max>
                            <eval>trim</eval>
                        </config>
                    </TCEforms>
                </slideSpeed>
                <autoplay type="array">
                    <TCEforms type="array">
                        <label>Autoplay aktivieren</label>
                        <config>
                            <type>check</type>
                            <default>1</default>
                        </config>
                    </TCEforms>
                </autoplay>
                <autoplaySpeed type="array">
                    <TCEforms type="array">
                        <label>Autoplay - Geschwindigkeit</label>
                        <config>
                            <type>input</type>
                            <size>20</size>
                            <max>30</max>
                            <eval>trim</eval>
                        </config>
                    </TCEforms>
                </autoplaySpeed>
            </el>
        </ROOT>
    </T3DataStructure>
  	)
}