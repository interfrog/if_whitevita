# Vorgehen bei einem Neuprojekt

1. Extension forken
2. Extension-Pfad umbenennen in if_[KUNDENNAME]
3. Extension in Namespace "Kunden" verschieben

# Update Repository from fork
Upstream hinzufügen

	git remote add upstream git@code.ifpage.de:interfrog-utilities/if_baseinit.git

Fork synchronisieren

	git fetch upstream

Master zur Sicherheit noch mal auschecken

	git checkout master
	
Fork mit Master mergen um die Änderungen einzuspielen

	git merge upstream/master
	
ggf. Konflikte löse und Änderungen pushen

	git push origin master