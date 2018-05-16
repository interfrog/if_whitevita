config.tx_extbase {
	persistence {
    	classes {
			Interfrog\IfThemeconfiguration\Domain\Model\ThemeConfiguration {
				subclasses {
					if_whitevita = Interfrog\IfWhitevita\Domain\Model\ThemeConfiguration
				}
			}

			Interfrog\IfWhitevita\Domain\Model\ThemeConfiguration {
                mapping {
                    recordType = if_whitevita
                    tableName = tx_ifthemeconfiguration_domain_model_themeconfiguration
                }
            }
        }
    }
}

