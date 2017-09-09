###################
BET
###################

SQL:
```
UPDATE equipo_fm fm, equipo e SET e.IMG=fm.ID_EQUIPO WHERE fm.NOMBRE=e.NOMBRE

UPDATE equipo e, pais p SET e.PAIS=p.NOMBRE WHERE e.ID_PAIS=p.ID_PAIS and e.ID_PAIS IS NOT NULL

UPDATE  equipo e, pais p SET e.PAIS=p.NOMBRE  WHERE p.ID_PAIS=e.ID_PAIS AND e.ID_PAIS IS NOT NULL AND e.IMG IS NULL
```

*********
Resources
*********

-  `Boostrap Zero <https://www.bootstrapzero.com>`_
-  `Boostrap Hero <http://bootstraphero.com>`_
-  `Github <https://github.com/creativetimofficial>`_


*********
Request
*********
-  `Api Sportmonks <https://sportmonks.com/soccer/documentation/v2.0/items/teams/21l>`_
-  `ApiFootball  <https://apifootball.com/documentation/>`_
-  `totalcorner  <http://www.totalcorner.com>`_
-  `PHPRequest <http://requests.ryanmccue.info/>`_
-  `bettingoddsapi <https://market.mashape.com/globalsportsinteractive/bettingoddsapi>`_
-  `Bhawlone <https://market.mashape.com/myanmarunicorn/bhawlone>`_
-  `totalcorner <http://www.totalcorner.com/>`_
-  `odds24 <https://console.odds24.com/>`_
-  `betbtc <https://www.betbtc.co/>`_
-  `betbtc <https://icecreamapps.com/es/Image-Resizer/>`_
-  `Readme <https://help.github.com/articles/basic-writing-and-formatting-syntax/>`_
-  `tcmlogos <https://www.tcmlogos.com/download/tcm17.html>`_
-  `FM teams <https://sortitoutsi.net/search/database?q=&game_id=8&type=team>`_
-  `sticky fixed  <https://github.com/garand/sticky>`_
-  `Timer  <https://github.com/jchavannes/jquery-timer>`_
-  `Numeraljs  <http://numeraljs.com/>`_


$ SELECT * FROM vista_odds WHERE fecha_event > "2017-07-22 11:28:56" AND fecha_event<"2017-07-22 23:59:59" AND autorizado="1" ORDER BY prioridad DESC, name_country ASC, name_torne ASC, fecha_event ASC



[{"jsonrpc": "2.0", "method": "SportsAPING/v1.0/listMarketCatalogue", "params": {"filter":{"eventIds":["28303226"],"marketBettingTypes":["ODDS","ASIAN_HANDICAP_SINGLE_LINE","ASIAN_HANDICAP_DOUBLE_LINE"]},"maxResults":"100","marketProjection":["RUNNER_DESCRIPTION"]}, "id": 1}]


[{"jsonrpc": "2.0", "method": "SportsAPING/v1.0/listMarketCatalogue", "params": {"filter":{"eventIds":["28303226"],"marketBettingTypes":["ODDS","ASIAN_HANDICAP_SINGLE_LINE","ASIAN_HANDICAP_DOUBLE_LINE"]},"maxResults":"1000","marketProjection":["RUNNER_DESCRIPTION"]}, "id": 1}]

[{"jsonrpc": "2.0", "method": "SportsAPING/v1.0/listEvents", "params": {"filter":{"eventTypeIds":["1"],"marketStartTime":{"from":"2017-08-09T05:00:00Z","to":"2017-08-10T04:59:00Z"}}}, "id": 1}]