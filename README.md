# PHP Template voor FIFA
Er staat al een structuur voor jullie klaar, kijk daar goed naar en breid die door de weken heen uit.

## Index vs. dashboard
De index.php is in dit project de openbare homepage, iedereen kan die bekijken. Het dashboard.php is de interne homepage, hier kom je na het inloggen en deze biedt linkjes naar alle dingen die je kunt doen in de applicatie.

## De map 'teams'
Het toevoegen (en hele CRUD-systeem) van de teams bevind zich in die map, zo blijft het een beetje gestructureerd. Je kunt later meer van die mappen maken, bijvoorbeeld: matches, users, etc..

## De config
Hernoem het bestand backend/config.example.php naar config.php en vul jouw eigen database-gegevens in. Deze config wordt hierna _niet_ meegestuurd naar je groepsgenoten. Zo kan iedereen zijn eigen wachtwoord, etc. invullen.

## De controllers
Net als mappen, maak je voor iedere soort acties een nieuwe controller aan. Bijvoorbeeld: authController voor registreren/inloggen, matchController, etc...

# Uitlegvideo
https://youtu.be/MHV7IBXD3gs