### Тестовое задание для разработчика на PHP
Мы ожидаем, что Вы:
* найдете и исправите все возможные ошибки (синтаксические, проектирования, безопасности и т.д.);
* отрефакторите код файла `ReturnOperation.php` в лучший по вашему мнению вид;
* напишите в комментарии краткое резюме по коду: назначение кода и его качество.



The main meaning of this code is sending notifications (email, sms).

It retrieves all data with getRequest method
Doing some checks for empty result in conditions
Retrieves information about the reseller, client, employee(creator and expert)
Depending on the notification type, it prepares a message
It checks if all the required data for the template is available and combines info for template data
Sends email notifications to employees and the client if conditions are met
Sends an SMS notification to the client if conditions are met

Also we have error handling logic