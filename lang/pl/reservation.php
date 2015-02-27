<?php 
/**
 * @package mod
 * @subpackage reservation
 * @author Roberto Pinna (bobo@di.unipmn.it)
 * @translator Wiktor Wandachowicz <wiktor.wandachowicz@p.lodz.pl>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Rezerwacja';
$string['pluginadministration'] = 'Administracja rezerwacją';

$string['reservation:grade'] = 'Może przypisać ocenę';
$string['reservation:reserve'] = 'Może wysyłać własne zgłoszenia';
$string['reservation:viewnote'] = 'Może przeglądać uwagi do zgłoszeń';
$string['reservation:viewrequest'] = 'Może przeglądac listę zgłoszeń';
$string['reservation:manualreserve'] = 'Może wysyłać zgłoszenia w imieniu innych użytkowników';
$string['reservation:manualdelete'] = 'Może usuwać zgłoszenia innych użytkowników';
$string['reservation:downloadrequests'] = 'Może pobierać listę zgłoszeń';
$string['reservation:addinstance'] = 'Dodawanie nowej rezerwacji';
$string['reservation:uploadreservations'] = 'Może wgrywać rezerwacje';
$string['search:activity'] = 'Rezerwacja - informacja o aktywności';

$string['availablerequests'] = 'Wolne miejsca';
$string['location'] = 'Lokalizacja';
$string['otherlocation'] = 'Podana inna lokalizacja';
$string['cancelledon'] = 'Odwołana w dniu';
$string['cleanview'] = 'Tylko aktualne rezerwacje';
$string['description'] = 'Opis';
$string['fullview'] = 'Włącznie z usuniętymi rezerwacjami';
$string['maxrequest'] = 'Maksymalna ilość zgłoszeń';
$string['configmaxrequests'] = 'Określa limit ilości zgłoszeń dla rozwijanego menu na stronie edycji rezerwacji.';
$string['modulename'] = 'Rezerwacja';
$string['modulenameplural'] = 'Rezerwacje';
$string['nolimit'] = 'Bez limitu zgłoszeń';
$string['nomorerequest'] = 'Brak wolnych miejsc';
$string['noreservations'] = 'Brak rezerwacji';
$string['requests'] = 'Zgłoszenia';
$string['reservationcancelled'] = 'Rezerwacja odwołana';
$string['reservationclosed'] = 'Rezerwacja zamknięta';
$string['reservationdenied'] = 'Rezerwacje są niedostępne';
$string['reservationnotopened'] = 'Rezerwacje nie są jeszcze otwarte';
$string['reservations'] = 'Rezerwacje';
$string['reserve'] = 'Rezerwuj';
$string['reservecancel'] = 'Anuluj rezerwację';
$string['reserved'] = 'Zarezerwowane';
$string['reservedon'] = 'Zarezerwowane w dniu';
$string['timeclose'] = 'Zamknięcie rezerwacji';
$string['timeopen'] = 'Otwarcie rezerwacji';
$string['timestart'] = 'Data rozpoczęcia';
$string['timeend'] = 'Data zakończenia';
$string['save'] = 'Zapisz ocenę';
$string['justbooked'] = 'Masz już rezerwację jako: {$a}';
$string['alreadybooked'] = 'Masz już rezerwację';
$string['yourgrade'] = 'Twoja ocena tej rezerwacji: {$a->grade}/{$a->maxgrade}';
$string['yourscale'] = 'Twoja ocena tej rezerwacji: {$a}';
$string['by'] = 'przez';
$string['showrequest'] = 'Użytkownicy mogą przeglądać listę zgłoszeń';
$string['configlocations'] = 'Na tej stronie można zarządzać standardowymi lokalizacjami rezerwacji dla tego portalu Moodle';
$string['locations'] = 'Zarządzaj lokalizacjami';
$string['locationslist'] = 'Lista lokalizacji';
$string['newlocation'] = 'Nowa lokalizacja';
$string['resetreservation'] = 'Usuń wszystkie rezerwacje';
$string['withselected'] = 'Z zaznaczonymi...';
$string['note'] = 'Uwaga';
$string['enablenote'] = 'Włącz uwagi użytkowników';
$string['notopened'] = 'Nie otwarte';
$string['closed'] = 'Zamknięte';
$string['fields'] = 'Widoczne pola';
$string['configfields'] = 'Określa które pola będą widoczne w tabeli rezerwacji.';
$string['config'] = 'Globalne ustawienia modułu Rezerwacja';
$string['explainconfig'] = 'Administratorzy mogą tu określać globalne ustawienia dla modułu Rezerwacja';
$string['addparticipant'] = 'Dodaj zgłoszenie';
$string['noteachers'] = 'Brak dostępnych nauczycieli';
$string['reservationsettings'] = 'Ustawienia rezerwacji';
$string['eventsettings'] = 'Ustawienia zdarzenia';
$string['sublimit'] = 'Podlimit {$a}';
$string['with'] = 'dla';
$string['equal'] = 'równe';
$string['notequal'] = 'różne od';
$string['sublimits'] = 'Podlimity rezerwacji';
$string['configsublimits'] = 'Określa ilość wierszy dla reguł podlimitów na stronie edycji rezerwacji.';
$string['err_timeendlower'] = 'Data zakończenia zdarzenia jest wcześniejsza niż data jego rozpoczęcia';
$string['err_timeopengreater'] = 'Data rozpoczęcia zdarzenia jest późniejsza niż data jego zakończenia';
$string['err_sublimitsgreater'] = 'Suma podlimitów przekracza maksymalną ilość zgłoszeń';
$string['overbook'] = 'Nadwyżka limitu zgłoszeń';
$string['nooverbook'] = 'Bez nadwyżki limitu zgłoszeń';
$string['maxoverbook'] = 'Maksymalny procent nadwyżki';
$string['configmaxoverbook'] = 'Określa maksymalny procent nadwyżki limitu ilości zgłoszeń dla rezerwacji.';
$string['overbookstep'] = 'Krok nadwyżki limitu zgłoszeń';
$string['configoverbookstep'] = 'Określa ziarnistość nadwyżki limitów zgłoszeń dla rezerwacji. Mniejszy krok daje większą ziarnistość.';
$string['overbookonly'] = 'Dostępne tyko miejsca z nadwyżki';
$string['requestoverview'] = 'Przegląd zgłoszeń';
$string['sublimitrules'] = 'Reguły podlimitów';
$string['selectvalue'] = 'Wybierz jedną z dostępnych wartości';
$string['novalues'] = 'Brak dostępnych wartości dla tego pola';
$string['close'] = 'Zamknij';
$string['manualusers'] = 'Lista użytkowniów przy ręcznym zgłaszaniu';
$string['configmanualusers'] = 'Określa listę użytkowników pokazywaną w rozwijanym menu używanym przy ręcznym zgłaszaniu użytkowników.';
$string['autohide'] = 'Automatyczne ukrywanie dla listy rezerwacji';
$string['configautohide'] = 'Określa kiedy rezerwacje mają być ukrywane w liście rezerwacji (mod/reservation/index.php). Może być to przydatne w połączeniu z publicznymi listami, aby bardziej przejrzyjście pokazywać listę.';
$string['atstart'] = 'Po rozpoczęciu zdarzenia';
$string['after5min'] = 'Po 5 minutach od rozpoczęcia zdarzenia';
$string['after10min'] = 'Po 10 minutach od rozpoczęcia zdarzenia';
$string['after30min'] = 'Po 30 minutach od rozpoczęcia zdarzenia';
$string['after1h'] = 'Po 1 godzinie od rozpoczęcia zdarzenia';
$string['after2h'] = 'Po 2 godzinach od rozpoczęcia zdarzenia';
$string['after4h'] = 'Po 4 godzinach od rozpoczęcia zdarzenia';
$string['after6h'] = 'Po 6 godzinach od rozpoczęcia zdarzenia';
$string['after12h'] = 'Po 12 godzinach od rozpoczęcia zdarzenia';
$string['after1d'] = 'Po 1 dniu od rozpoczęcia zdarzenia';
$string['after2d'] = 'Po 2 dniach od rozpoczęcia zdarzenia';
$string['after1w'] = 'Po 1 tygodniu od rozpoczęcia zdarzenia';
$string['after2w'] = 'Po 2 tygodniach od rozpoczęcia zdarzenia';
$string['after3w'] = 'Po 3 tygodniach od rozpoczęcia zdarzenia';
$string['after4w'] = 'Po 4 tygodniach od rozpoczęcia zdarzenia';
$string['publiclists'] = 'Publiczna lista rezerwacji';
$string['configpubliclists'] = 'Określa czy listy rezerwacji są publiczne (widoczne bez zalogowania), czy też nie.';
$string['sortby'] = 'Sposób sortowania list rezerwacji';
$string['configsortby'] = 'Określa sposób sortowania list rezerwacji.';
$string['bysection'] = 'Temat/Tydzień';
$string['bydate'] = 'Data zdarzenia';
$string['byname'] = 'Nazwa';
$string['number'] = 'Numer rezerwacji';
$string['linenumber'] = '#';
$string['gradedmail'] = '{$a->teacher} przesłał informację zwrotną do Twojego
zgłoszenia rezerwacji \'{$a->reservation}\'

Informację zwrotną znajdziesz tutaj:

    {$a->url}';
$string['gradedmailhtml'] = '{$a->teacher} przesłał informację zwrotną do Twojego
zgłoszenia rezerwacji \'<i>{$a->reservation}</i>\'<br /><br />
Informację zwrotną znajdziesz <a href=\"{$a->url}\">tutaj</a>.';
$string['mail'] = 'Rezerwacje do \'{$a->reservation}\' zostały zamknięte.

Możesz pobrać listę zgłoszeń z adresu:

    {$a->url}';
$string['mailhtml'] = 'Rezerwacje do <em>{$a->reservation}</em> zostały zamknięte.<br /><br />
Możesz pobrać listę zgłoszeń z <a href="{$a->url}">tego adresu</a>.';
$string['mailrequest'] = 'Rezerwacje do \'{$a->reservation}\' zostały zamknięte.

Możesz sprawdzić numer zgłoszenia pod adresem:

    {$a->url}';
$string['mailrequesthtml'] = 'Rezerwacje do <em>{$a->reservation}</em> zostały zamknięte.<br /><br />
Możesz sprawdzić numer zgłoszenia pod <a href="{$a->url}">tym adresem</a>.';
$string['configdownload'] = 'Określa domyślny format dla pobieranych pliów zawierających listy rezerwacji i zgłoszeń.';
$string['configcheckclashes'] = 'Włącz przycisk "Sprawdź konflikty miejsc i czasu" na stronie edycji rezerwacji';
$string['checkclashes'] = 'Sprawdź konflikty miejsc i czasu';
$string['clashesreport'] = 'Raport konfliktów';
$string['noclashes'] = 'Nie znaleziono konfliktów miejsc i czasu';
$string['clashesfound'] = 'Znaleziono konflikty miejsc i czasu';
$string['minduration'] = 'Minimalna długość zdarzenia';
$string['configminduration'] = 'Określa minimalną długość trwania zdarzenia. Jest używane do sprawdzania dostępności czasu i  miejsca dla niezakończonych zdarzeń.';
$string['duration5min'] = '5 minut';
$string['duration10min'] = '10 minut';
$string['duration15min'] = '15 minut';
$string['duration20min'] = '20 minut';
$string['duration30min'] = '30 minut';
$string['duration45min'] = '45 minut';
$string['duration60min'] = '60 minut';
$string['duration90min'] = '90 minut';
$string['duration2h'] = '2 godziny';
$string['duration3h'] = '3 godziny';
$string['duration4h'] = '4 godziny';
$string['duration5h'] = '5 godziny';
$string['duration6h'] = '6 godzin';
$string['duration7h'] = '7 godzin';
$string['duration8h'] = '8 godzin';
$string['duration9h'] = '9 godzin';
$string['duration10h'] = '10 godzin';
$string['duration11h'] = '11 godzin';
$string['duration12h'] = '12 godzin';

$string['upload'] = 'Reservations upload';
$string['upload_help'] = '<p>Reservations may be uploaded via text file. The format of the file should be as follows:</p><ul><li>Each line of the file contains one record</li><li>Each record is a series of data separated by commas (or other delimiters)</li><li>The first record contains a list of fieldnames defining the format of the rest of the file</li><li>Required fieldsname are section, name and timestart</li><li>Optional fieldsname are course, intro, teachers, timeend, maxgrade, timeopen, timeclose, maxrequest</li><li>If course is not specified it must be choosen after preview</li></ul>';
$string['uploadreservations'] = 'Upload Reservations';
$string['uploadreservationsresult'] = 'Upload Reservations Result';
$string['importreservations'] = 'Import Reservations';
$string['uploadreservationspreview'] = 'Upload Reservations Preview';
$string['badcourse'] = 'Course does not esists';
$string['badteachers'] = 'Specified teacher email with ({$a}) not found';
$string['badteachersmail'] = 'Specified teacher email ({$a}) is bogus';
$string['badsection'] = 'Section does not esists in course "{$a}"';
$string['badtimestart'] = 'timestart is bogus';
$string['badtimeend'] = 'timeend is bogus';
$string['badtimeopen'] = 'timeopen is bogus';
$string['badtimeclose'] = 'timeclose is bogus';
$string['nocourseswithnsections'] = 'No course found with {$a} sections';
$string['parent'] = 'Connect this reservation with';
$string['noparent'] = 'None';
$string['connectto'] = 'Connectable reservation from';
$string['configconnectto'] = 'Define where the module search reservations to connect with';
$string['connectedto'] = 'Reservation connected to';
$string['reservedonconnected'] = 'You are already reserved on a connected reservation: {$a}';
$string['overview'] = 'Overview';
$string['manage'] = 'Manage';
$string['confirmdelete'] = 'Are you sure that you want to delete the selected reservation requests?';
$string['notifies'] = 'Notifies sent';
$string['confignotifies'] = 'This setting define which notifies must sent';
$string['notifyteachers'] = 'Notify reservation time closed to teachers';
$string['notifystudents'] = 'Notify reservation time closed to students';
$string['notifygrades'] = 'Notify reservation graded to students';
$string['events'] = 'Calendar events';
$string['configevents'] = 'This setting define which events will be created for every reservation';
$string['reservationevent'] = 'Create an event from open to close dates (reservation time)';
$string['eventevent'] = 'Create an event from start to end dates (the event)';
$string['downloadas'] = 'Default download format';
$string['reservation_settings'] = 'Editing settings';
$string['reservation_listing'] = 'Index page settings';
$string['reservation_view'] = 'View page settings';
$string['reservation_other'] = 'Other settings';
$string['message'] = 'Message to participants';
$string['eventrequestadded'] = 'Zgłoszenie rezerwacji dodane';
$string['eventrequestcancelled'] = 'Zgłoszenie rezerwacji anulowane';
$string['eventrequestdeleted'] = 'Zgłoszenie rezerwacji usunięte';
$string['modulename_help'] = '<p>Głównym celem tej aktywności jest rezerwowanie terminów zajęć laboratoryjnych i egzaminów, ale można jej używać także do innych rezerwacji.</p><p>Nauczyciel może określić liczbę miejsc dostępnych dla zdarzenia, daty zdarzenia, oraz daty otwarcia i zamknięcia rezerwacji.<br />Rezerwacja może mieć ocenę punktową lub skalę.<br />Studenci mogą zarezerwować i anulować rezerwację miejsca, oraz dodać uwagę przy swoim zgłoszeniu rezerwacji.</p><p>Po rozpoczęciu zdarzenia nauczyciel może oceniać każde zgłoszenie rezerwacji. Studenci będą powiadomieni pocztą.</p><p>Lista rezerwacji może być pobrana w różnych formatach.</p>';
$string['completionreserved'] = 'Student musi dokonać rezerwacji, aby ukończyć tę aktywność.';
$string['badparent'] = 'Ta rezerwacja była połączona z inną rezerwacją, które nie została teraz odtworzona. Połączenie to zostało usunięte. Jeśli potrzeba, proszę ponownie połączyć rezerwacje ręcznie.';
?>
