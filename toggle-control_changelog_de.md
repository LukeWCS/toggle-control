### 1.1.0
(2024-03-31)

* Die Unterstützung für phpBB 3.2 wurde aufgegeben, Minimum ist jetzt phpBB 3.3.0.
* Fix: Kleineres Problem mit Responsive behoben, bei dem es zuwenig vertikalen Abstand zwischen den Zellen gab, da eine falsche ID angesprochen wurde.
* Aktualisiertes `select()` Makro von FAR 1.0.0 übernommen.

### 1.0.2
(2024-01-15)

* PHP:
  * Code Optimierung im Controller.
* JS:
  * Im Settings Formular wird jetzt die Enter Taste deaktiviert.
  * Im IIFE Konstrukt wird jetzt explizit das jQuery Objekt übergeben.
* CSS:
  * In der Gruppe mit dem Absenden-Button den zu grossen Abstand zwischen Buttons und oberem Rand der Gruppe verkleinert.

### 1.0.1
(2023-12-14)

* Fix: Im `switch()` Makro wurde bei der Einstellung `checkbox` keine CSS Klasse generiert, wodurch der Mauszeiger über einer Checkbox nicht zu einem Pointer-Cursor geändert wurde. Bei Checkboxen wird jetzt explizit die passende Klasse generiert, die auch im ACP CSS definiert ist.

### 1.0.0
(2023-12-07)

* Erste offizielle Version.
