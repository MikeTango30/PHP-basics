## Kodėl ```Nfq\Akademija\Soft\calculateHomeWorkSum(3, 2.2, ‘1’)``` yra 6?

F-jos deklaracijoe nurodome, kad į f-ją reikia paduoti ```int```, 
bet paduodame ir ```float``` ir ```string```.
PHP šioje vietoje konvertuoja ```float``` į ```int``` suapvalinant 2.2 iki 2,
o ```string``` "1", konvertuoja į ```int``` 1, nes ```string``` prasideda skaičiumi. 


## Kas ir kodėl nutiko bandant kviesti ```Nfq\Akademija\Strict\calculateHomeWorkSum(3, 2.2, ‘1’)```?

Bandant kviesti šią f-ją gauname 
```Fatal error: Uncaught TypeError:```
 
```Argument 2 passed to ... must be of the type int, float given```

```Argument 3 passed to ... must be of the type int, string given```

Taip yra todėl, kad faile "functions_strict.php" 
yra nurodytas ```declare(strict_types=1)``` teiginys, kuris nurodo, 
kad PHP griežtai sužiūrėtų skaliarinius "data type'us" - kas prašoma, duodama ir grąžinama.

Jeigu f-jai prašoma kaip argumentus paduoti "int" ir jei paduodamas ne tas skaliarinis tipas - klaida.

F-joje ```\Nfq\Akademija\Strict\calculateHomeWorkSum(int...$numbers): int``` 
prašome paduoti ir grąžinti ```int```, o į f-ją pateikus 
2.2 - ```float``` ir "1" - ```string``` tipo argumentus 
php išmeta klaidą.