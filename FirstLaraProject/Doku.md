um das Nachzubauen sind eingige Befehle notwendig.

1. php artisan migrate
2. php artisan tinker -> \App\Models\Company::factory()->count(10)->create(); \App\Models\User1::factory()->count(10)->create(); \App\Models\Job::factory()->count(10)->create();




php artisan make:model XXX -m (erstellt direkt eine Migration dazu)
php artisan make:controller XXXController --resource (erstellt ein Controller mit mehreren Funktionen)

php artisan migrate:rollback (zum zurücksetzen der Tabellen in der Datenbank db_tenmedia)


DROP DATABASE db_tenmedia;




1. Start mit installation von NPM/Node.js, TailwindCSS
2. Erstellen der Company Seite über MVC / Model View Controller + Migration (php artisan "php artisan make:controller CompanyController --resource", "php artisan make:model Company -m")
3. Start "php artisan serve" in der CMD
4. neues CMD Fenster im Verzeichnis für alle weiteren Befehle
5. Route:: für Company festlegen 
6. erste Tests ob Server aktiviert und Controller etwas anzeigt mit View('Index')
7. Löschen der Vorinstallierten welcome.blade
8. Erstellen des Ordners "company" im resources/view Verzeichnis
9. Routenänderung in "http://127.0.0.1:8000/company", testen der Funktion
10. Erstellen des Layouts, layouts Verzeichnis im /view Verzeichnis
11. app.blade.php erstellt im layouts Verzeichnis
12. installieren von Laravel Highlighting Erweiterung
13. verlinkung der TailwindCSS, test obs geklappt hat
14. Tailwind funktioniert nicht,  erstmal weiter ohne Styles
15. anpassen der index.balde.php an die app.blade.php
16. start von XAMPP mit SQL / Apache
17. erstellen der Datenbank db_tenmedia
18. env. Datei anpassen
19. erstellen des Company Tables
20. DummieData über PhpMyAdmin eingefügt
21. foreach loop in der index.blade.php eingefügt mit allen relevanten Daten der Datenbank verknüpft
22. create.blade.php eingefügt
23. form input etc erstellt, POST method
24. Daten können jetzt an die Datenbank übergeben werden
25. Editieren von Datensätzen ermöglichen company/edit.blade.php
26. Löschen von Datensätzen ermöglichen Controller::delete()

------------------------------------------------------------------------------------
 Company soweit abgeschlossen,  für Users und Jobs alles ähnlich aufbauen, danach der Verbindungen der Tabellen hinbekommen (Mehrfachbeziehungen aufheben) 
------------------------------------------------------------------------------------

27. DROP TABLE companys; in PhpMyAdmin
--
28. alle ähnlichen Schritte für Jobs von Companys wiederholen
--
29. alle ähnlichen Schritte für Users (User1) von Companys wiederholen
30. Validate requests


----------------------------
Nun die Tabellen in Verbindung bringen
----------------------------

31. bei der Job Tabelle die foreign_keys:" fk_user1 und fk_company" hinzufügen
32. Verbindung testen