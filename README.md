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
     city,
 		wind{
       chill,
       direction,
       speed
     },
     atmosphere{
     	humidity,
       visibility,
       pressure,
       rising
     },
     astronomy{
     	sunrise,
       sunset
     },
     condition{
       text,
       code,
       temperature
     }
   }
 }
`

!["GraphiQL"](https://github.com/lmomar/sf4-graphql/blob/master/graphiql.PNG?raw=true "GraphiQL")

