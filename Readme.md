# NFQ Akademija 1-asis namų darbas
## PHP Basics/Intro

- ```calculateHomeWorkSum:``` Rezultatas 6.2. Kadangi mūsų atliekama operacija buvo sudėtis, tai ši funkcija bando castinti visus kintamuosius į skaičius, o kadangi tarp argumentų buvo float tipo kintamasis, tai ir atsakymas yra šio tipo.
- ```Nfq/Akademija/NotTyped/calculateHomeWorkSum:``` Rezultatas 6. Šiai funkcijai buvo nurodyta, kad bus grąžinama int tipo reikšmė, taigi atlikęs skaičiavimus gautą float skaičių 6.2 pavertė į int, t.y. paliko tik sveikąją dalį ir grąžino 6.
- ```Nfq/Akademija/Soft/calculateHomeWorkSum:``` Rezultatas 6. Ši funkcija pradžioje visus kintamuosius paverčia į int reikšmes, o tada jas sudeda ir grąžina taip pat int.
- ```Nfq/Akademija/Strict/calculateHomeWorkSum:``` Rezultatas 6. Ši funkcija, kaip ir praėjusi pirmiau castina įvesties kintamuosius į int ir tada juos sudeda. Šiuo atveju nors ir nurodyta, kad turi būti ```strict_types=1```, tačiau nebus metama jokia klaida, jei faile, kuriama ši funkcija iškviečiama nebus taip pat nurodyta ```declare(strict_types=1)```. Dėl to pavyko apskaičiuoti ir gauti rezultatą su pasirinktais argumentais.