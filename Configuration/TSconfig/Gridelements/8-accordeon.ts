tx_gridelements.setup.accordeon {
	title = Content-Element Akkordeon
	description = Erzeugt ein Akkordeon aus Content-Elementen.
	topLevelLayout = 1
    config {
		colCount = 1
		rowCount = 1
		rows {
			1 {
				columns {
					1 {
						name = Akkordeon Elemente
						colPos = 10
                        allowed = text,textpic,image,videoframe,media,gridelements_pi1
					}
				}
			}
		}
    }
}