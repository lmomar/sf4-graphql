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


**Demo:**
to run the app use this commande :

`php bin/console server:run`

and then open this url in your browser:

`http://127.0.0.1:8000/graphiql`


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
