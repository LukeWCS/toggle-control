### 1.2.0
(2025-10-20)

* Die Voraussetzungen haben sich geändert:
  * PHP: 8.0.0 - 8.4.x (Bisher: 7.4.0 - 8.4.x)
* PHP auf Construktor Property Promotion umgestellt. Weitere Infos dazu: [PHP 8 - Constructor Property Promotion](https://www.phpbb.de/community/viewtopic.php?t=247783)
* CSS:
  * Auf Nested CSS umgestellt. Weitere Infos dazu: [Nested CSS (verschachteltes CSS)](https://www.phpbb.de/community/viewtopic.php?t=247620)
  * Auf Kirk-Toggles 2.0 aktualisiert.
* Javascript überarbeitet.

### 1.1.1
(2024-12-15)

* Die Voraussetzungen haben sich geändert:
  * PHP: 7.4.0 - 8.4.x (Bisher: 7.1.3 - 8.3.x)
* Technik auf den Stand von EMP 3.0 gebracht, Details im Build Changelog.

### 1.1.0
(2024-03-31)

* Die Unterstützung für phpBB 3.2 wurde aufgegeben, Minimum ist jetzt phpBB 3.3.0.
* Fix: Kleineres Problem mit Responsive behoben, bei dem es zuwenig vertikalen Abstand zwischen den Zellen gab, da eine falsche ID angesprochen wurde.
* Aktualisiertes `select()` Makro von "Force Account Reactivation" 1.0.0 übernommen.

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
