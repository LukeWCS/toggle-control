### 1.0.2
* Release (2024-01-15)
* PHP:
  * Code Optimierung im Controller.
* JS:
  * Im Settings Formular wird jetzt die Enter Taste deaktiviert.
  * Im IIFE Konstrukt wird jetzt explizit das jQuery Objekt übergeben.
* CSS:
  * In der Gruppe mit dem Absenden-Button den zu grossen Abstand zwischen Buttons und oberem Rand der Gruppe verkleinert.

### 1.0.1
* Release (2023-12-14)
* Fix: Im `switch()` Makro wurde bei der Einstellung `checkbox` keine CSS Klasse generiert, wodurch der Mauszeiger über einer Checkbox nicht zu einem Pointer-Cursor geändert wurde. Bei Checkboxen wird jetzt explizit die passende Klasse generiert, die auch im ACP CSS definiert ist.

### 1.0.0
* Release (2023-12-07)
* Versionsprüfung hinzugefügt.

#### 1.0.0-b4
* Template:
  * Bei allen Optionsgruppen die ID entfernt, die für die Abblenden-Funktion benötigt wurde.
* JS:
  * Funktion hinzugefügt, mit der eine Optionsgruppe anhand des Element-Namens abgeblendet werden kann. Somit keine ID im Template mehr notwendig.

#### 1.0.0-b3
* Durch den Controller wurde die Template Variable `TOGGLECTRL_TYPE` unnötig doppelt generiert, wenn TC aktiv ist.
* `composer.json` korrigiert und URL hinzugefügt.
* CSS:
  * Da jetzt Schalter auch als Radio-Buttons dargestellt werden können, musste der Pointer für `dd label` wieder aktiviert werden.

#### 1.0.0-b2
* Fix: Bei einem Form Reset wurde der Ausgegraut-Status nicht zurückgesetzt. Entsprechend eine JS Funktion eingebaut, die auf einen Reset reagiert.
* `composer.json` komplettiert, die Beschreibung hat noch gefehlt.
* CSS:
  * Bei `legend` wird kein Pointer-Cursor mehr angezeigt, da dieses Element keine Funktion hat, die man per Klick ausführen könnte.

#### 1.0.0-b1
* Initial Release.
* Erste interne Testversion.
