TCEFORM {

	tx_ifthemeconfiguration_domain_model_themeconfiguration {
		theme {
			addItems {
				if_whitevita = if_whitevita
			}
		}
	}

	tt_content {
		layout {
			altLabels {
				0 = Default
				1 = Hintergrundfarbe: Farbe 1 (Standard)
				2 = Hintergrundfarbe: Farbe 2 (Standard)
				3 = Hintergrundfarbe: Farbe 3 (Standard)
			}
			addItems {
				4 = Hintergrundfarbe: Farbe 4 (Standard)
				5 = 1px Rahmen
			}
		}
		section_frame {
			removeItems = 1,5,6,10,11,12,20,21
			altLabels {
				0 = Bitte wählen Sie Ihr Layout
				66 = Reines Element ohne Standardisierten Rahmen
			}
			addItems {
				30 = Spezial: Button
				50 = Spezial: Bilder Gallery
				60 = Spezial: Bildbox mit Farboverlay (von links)
				61 = Spezial: Bildbox mit Farboverlay (von rechts)
				62 = Spezial: Bildbox mit Farboverlay (von oben)
				63 = Spezial: Bildbox mit Farboverlay (von unten)
			}
		}
		header_layout {
			removeItems = 1,5
			altLabels {
				0 = Kapitelüberschrift h2
				2 = Bereichsüberschrift h3
				3 = Zwischenüberschrift h4
				4 = Teilüberschrift h5 
			}
			addItems {
				6 = Seitenüberschrift h1 (SEO - nur einmal verwenden)
			}
		}
		menu_type {
			addItems {
				#specialmenu = Spezial: Beispielmenü
				20 = SEO-Übersicht
			}
		}
		imagecaption_position {
			addItems {
				block = Blocksatz
			}
		}
	}
}
