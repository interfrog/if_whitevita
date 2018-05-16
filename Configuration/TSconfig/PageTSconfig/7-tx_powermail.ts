TCEFORM {
	tx_powermail_domain_model_forms.css {
		removeItems = layout1, layout2, layout3
	}

	tx_powermail_domain_model_pages.css {
		removeItems = layout1, layout2, layout3
		addItems {
			not_in_use = not in use
		}
	}
	
	tx_powermail_domain_model_fields.css {
		removeItems = layout1, layout2, layout3
		default = medium-12 column
		addItems {
			medium-24 = 100%
			medium-18 = 75%
			medium-16 = 66%
			medium-12 = 50%
			medium-8  = 33%
			medium-6  = 25%
		}
	}
}