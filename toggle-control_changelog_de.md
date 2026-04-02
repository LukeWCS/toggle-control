### 1.3.0
(2026-04-02)

* Die Voraussetzungen haben sich geändert:
  * PHP: 8.0.0 - 8.5.x (Bisher: 8.0.0 - 8.4.x)
* Für Erweiterungen Entwickler ist die Integration der TC Schnittstelle einfacher geworden:
  * Die Zeile mit der Deklaration für `switch_type` am Anfang des Templates entfällt komplett, also `{% set switch_type = TOGGLECTRL_TYPE ?? 'toggle' %}`.
  * Der dritte Parameter bei `switch(name, checked, type)` ist bei sämtlichen Schaltern nur noch optional und wird nicht mehr zwingend benötigt. Somit reduziert sich der Makro Aufruf auf das Nötigste. Für Abwärtskompatibilität und Hybrid-Lösungen bleibt der Parameter aber weiterhin funktionsfähig.
  * Die oben genannten Eigenschaften sind deswegen nicht mehr nötig, da TC jetzt eine echte globale Template Variable generieren kann, die auch im Makro verfügbar ist. Es muss also lediglich das `switch()` Makro integriert werden um TC Kompatibilität zu schaffen; um alles Weitere kümmert sich das Makro.
  * Entwickler müssen ihre Erweiterungen nicht zwingend für TC 1.3.0 aktualisieren, da die bisherige Methode weiterhin unterstützt wird. Erst wenn die neue Methode integriert wird, ist TC 1.3.0+ erforderlich.
* Änderungen im ACP-Modul:
  * Bisher hatte TC im eigenen ACP Modul unabhängig vom Aktivierungszustand der TC Funktion immer den eingestellten Schalter-Stil angewendet. Jetzt verhält sich TC auch beim eigenen ACP Modul konsequent wie jede andere Erweiterung, das heisst der eingestellte Schalter-Stil wird nur noch dann angewendet, wenn die TC Funktion auch aktiviert ist. Ansonsten gilt der Standard, also `toggle`.
  * Nach dem Vorbild von Kirks Erweiterungen erscheint im ACP Modul oben in der Hinweis-Box ein erklärender Text, wenn die TC Funktion deaktiviert wurde.
  * Makro `notes()` überarbeitet. Sind 2 oder mehr Hinweise/Anmerkungen vorhanden, wird vor jedem Hinweis ein `&bull;` Zeichen eingefügt.
* Danke bezüglich dem Beta Bug an:
  * Dref (phpBB.de) der in der 1.3.0 Beta einen Fehler entdeckt hat, wodurch in der Benutzerverwaltung ein Zugriff auf die Avatar Einstellungen nicht mehr möglich war und ein schwerer Fehler verursacht wurde: `Fatal error: Uncaught LogicException: Unable to add global "TOGGLECTRL_TYPE" ...`.
  * Mike-on-Tour (phpBB.de) für den Hinweis, dass in der Benutzerverwaltung ein Zugriff auf die Profil Einstellungen ebenfalls diesen Fehler verursacht.
  * Kirk (phpBB.de) für die Lösung. Wenn man statt des Events `core.adm_page_header` das Event `core.twig_environment_render_template_before` benutzt, funktioniert TC wie es soll, ohne in der Benutzerverwaltung Fehler zu verursachen. Prost Udo! :-)
* Da durch den Beta Fix das neu hinzugefügte Event ohnehin immer ausgeführt wird, wurden bei der Gelegenheit gleich die bisherigen 3 Event-Hooks des Listener auf 1 reduziert. Somit wird auch automatisch ein Vorschlag realisiert:
  * Die Template Variable ebenfalls im Foren Frontend generieren. [Vorschlag von Mike-on-Tour (phpBB.de)]

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
