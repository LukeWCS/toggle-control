### 1.0.0
* Release (2023-12-07)
* Versionsprüfung hinzugefügt.

### 1.0.0-b4
* Template:
  * Bei der Optionsgruppe von `togglectrl_type` die ID entfernt.
* JS:
  * Funktion hinzugefügt, mit der eine Optionsgruppe anhand des Element-Namens abgeblendet werden kann. Somit keine ID mehr notwendig.

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
