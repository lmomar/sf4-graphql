**Description:**

Project made with Symfony using GraphQL to get data from yahoo weather api.

**Bundles:**
- OverblogGraphQLBundle
- OverblogGraphiQLBundle

**How to use:**
- Download the project
- Install dependencies by executing this commande:

`composer install`
- Create database :

`php bin/console doctrine:database:create`
- Run migration:

`php bin/console doctrine:migration:migrate`

**Query used in Graphiql:**

`{
   Observation(city: "Casablanca") {
     chill: wind_chill
     direction: wind_direction
     speed: wind_speed
     humidity: atm_humidity
     visibility: atm_visibility
     pressure: atm_pressure
     rising: atm_rising
     sunrise: ast_sunrise
     sunset: atm_sunset
     text: condition_text
     code: condition_code
     temperature: condition_temperature
     city
   }
 }
`

!["GraphiQL"](https://github.com/lmomar/sf4-graphql/blob/master/graphiql.PNG?raw=true "GraphiQL")

